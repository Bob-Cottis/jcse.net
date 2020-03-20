<?php

namespace App\Console\Commands;

use Carbon\Carbon;
use Illuminate\Console\Command;
use App\Models\Paper;
use App\Models\User;
use Illuminate\Support\Facades\Mail;

class manageSubmit extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'command:manageSubmit';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Manage reminders for submission process';

    /**
     * Create a new command instance.
     *
     * @return void
     */

    // time intervals (in minutes for testing, days for production

    protected $remindStep           = 2;   // base time interval for reminders
    protected $abortStep            = 50000;   // time to aborting submission
    protected $revAckStep           = 5;   // time remind for response to review invitation
    protected $revAckAbortStep      = 15;  // time to aborting review invitation
    protected $reviewRemindStep     = 5;   // time to remind reviewer after acceptance
    protected $reviewAbandonStep    = 15;  // time to abandon reviewer after acceptance

    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        // USAGE of timestamps:
        // created_at       - never changed -
        // state-changed_at - base time for abandoning submission due to author non-response,
        // updated_at        - base time for reminders (updated at each reminder by write to log)

        // check for papers that are in the submission process
        $now = Carbon::now();
        $remindTime = $now->subMinutes($this->remindStep)->toDateTimeString(); // base time interval for reminders

        $papers = Paper::whereIn('state', ['submit_1', 'submit_2', 'paRevise', 'submitted', 'revNominated', 'adRevCheck',
            'revOK', 'reviseDisplay', 'reviseHidden'])
            ->where('updated_at', '<', $remindTime)
            ->get();
        if (!is_null($papers)) {
            // set timeout values for submission states (in minutes for testing, days for production)
            $abortTime = $now->subMinutes($this->abortStep)->toDateTimeString();   // time to aborting submission
            $revAckTime = $now->subMinutes($this->revAckStep)->toDateTimeString();   // time remind for response to review invitation
            $revAckAbortTime = $now->subMinutes($this->revAckAbortStep)->toDateTimeString();   // time to aborting review invitation
            $reviewRemind = $now->subMinutes($this->reviewRemindStep)->toDateTimeString();   // time to remind reviewer after acceptance
            $reviewAbandon = $now->subMinutes($this->reviewAbandonStep)->toDateTimeString();   // time to abandon reviewer after acceptance

            foreach ($papers as $paper) {
                switch ($paper->state) {
                    case 'submit_1':
                        // waiting for author to upload PDF file
                        if ($paper->created_at < $abortTime) {
                            $paper->state = 'abandoned';
                            $paper->log .= $now . ' abandoned - author failed to upload PDF\n';
                            $this->line($now . ' paper ' . $paper->id . ' abandoned - author failed to upload PDF');
                        } else {
                            // send reminder email
                            $this->paRemindUpload($paper);
                            $paper->log .= $now . ' upload reminder sent\n';
                            $this->line($now . ' paper '. $paper->id . ' upload reminder sent');
                            $data = [];
                            //$mailer =

                        }
                        $paper->save();
                        break;
                    case 'submit_2':
                        // waiting for author to confirm submission
                        if ($paper->created_at < $abortTime) {
                            $paper->state = 'abandoned';
                            $paper->log .= $now . ' abandoned author failed to confirm PDF\n';
                            $this->line($now . ' paper ' . $paper->id . ' abandoned author failed to confirm PDF');
                        } else {
                            // send reminder to corresponding author
                            $this->paRemindConfirm($paper);
                            $this->line($now . ' paper ' . $paper->id . ' author reminded to confirm PDF');
                            $paper->log .= $now . ' author reminded to confirm PDF\n';
                            $leadAuthor = $paper->correspondingAuthor;
                            $leadAuthorEmail = $leadAuthor->email;
                            $link = route('paConfirmPDF',['id'=>$paper->id,'confirmCode'=>$paper->confirmCode]);
                            $filePath = base_path(sprintf('pdf/%03d/%s_Volume_%03d_Preprint_%03d_Rev_%02d.pdf',$paper->volume,config('jrnl.shortName'),$paper->volume,$paper->paperNumber,$paper->revisionNumber));
                            $data = ['vol'=>$paper->volume,'pap'=>$paper->paperNumber,'shortName'=>config('jrnl.shortName'),'link'=>$link,'lead'=>1,
                                'leadAuthorSalutation'=>$leadAuthor->title->title.' '.$leadAuthor->familyName,
                                'leadAuthorName'=>$leadAuthor->title->title.' '.$leadAuthor->givenName.' '.$leadAuthor->familyName,
                                'leadAuthorEmail'=>$leadAuthorEmail,
                                'id'=>$paper->id,'confirmCode'=>$paper->confirmCode,'filePath'=>$filePath, 'remind'=>0];
                            $mailer = new \App\Mail\submit\checkPaperEmail($data);
                            Mail::to($leadAuthorEmail)->send($mailer);
                        }
                        $paper->save();
                        break;
                    case 'paRevise':
                        // author has been asked to revise paper
                        if ($paper->created_at < $abortTime) {
                            $paper->state = 'abandoned';
                            $paper->log .= $now . ' abandoned author failed to confirm PDF\n';
                            $paper->save();
                            $this->line($now . ' paper ' . $paper->id . ' author failed to confirm PDF');
                        } else {
                            // send reminder
                            $this->paRemindReformat($paper);
                            $this->line($now.' paper '.$paper->id.' author reminded to confirm PDF');
                            $paper->log .= $now.' author reminded to confirm PDF\n';
                        }
                        $paper->save();
                        break;
                    case 'submitted':
                        // waiting for admin to approve paper and nominate editor - no end time
                        $this->adRemindApprove($paper);
                        $paper->log .= $now . ' admin reminded to approve PDF\n';
                        $this->line($now . ' paper ' .$paper->id .' admin reminded to approve PDF');
                        $paper->save();
                        break;
                    case 'preprintOK':
                        // waiting for author to nominate reviewers
                        if ($paper->created_at < $abortTime) {
                            $paper->state = 'abandoned';
                            $paper->log .= $now . ' abandoned author failed to nominate reviewers\n';
                            $this->line($now . ' paper ' . $paper->id . ' author failed to nominate reviewers\n');
                        } else {
                            // send reminder
                            $this->paRemindNominateReviewers($paper);
                            $paper->log .= $now . ' author reminded to nominate reviewers\n';
                            $this->line($now . ' paper ' . $paper->id . ' author reminded to nominate reviewers');
                        }
                        $paper->save();
                        break;
                    case 'revNominated':
                        // waiting for admin to approve reviewers
                        $this->adRevCheckRemind($paper);
                        $paper->log .= $now . ' admin reminded to approve reviewers';
                        $this->line($now . ' paper '. $paper->id . ' admin reminded to approve reviewers');
                        $paper->save();
                        break;
                    case 'revApproved':
                        // reviewers have been approached go to review processing function
                        $this->revCheck($paper);
                        $paper->log .= $now .' revCheck called';
                        $this->line($now . ' paper '.$paper->id.' revCheck called');
                        $paper->save();
                        break;
                    case 'revOK':
                        // sufficient reviews have been received remind editor
                        $this->remindEditorRev($paper);
                        $paper->log .= $now . ' editor reminded to process paper\n';
                        $this->line($now . ' editor reminded to process paperv'.$paper->id);
                        $paper->save();
                        break;
                    case 'reviseDisplay':
                    case 'reviseHidden':
                        // remind author to revise paper
                        if ($paper->state_changed_at < $abortTime) {
                            $paper->state = 'abandoned';
                            $paper->log .= $now . ' paper abandoned author failed to revise\n';
                            $this->line($now . ' paper ' . $paper->id .' abandoned author failed to revise');
                        } else {
                            // send reminder
                            $this->paRemindRevise($paper);
                            $paper->log .= $now . ' author reminded to revise paper\n';
                            $this->line($now . ' author reminded to revise paper ' . $paper->id);
                        }
                        $paper->save();
                    break;
                }
            }
        }
    }

    function paRemindUpload($paper) {
        // remind author to upload paper
        $this->line('Reminder - you need to upload your paper');
        $leadAuthor = $paper->correspondingAuthor;
        $authEmail = $leadAuthor->email;
        $data =['authEmail' => $authEmail,'salutation'=>$leadAuthor->title->title.' '.$leadAuthor->familyName,
                'vol' => $paper->volume, 'pap' => $paper->paperNumber, 'jrnlShortName'=>config('jrnl.shortName'),
                'uploadLink' => url('remindLoadPaper/'.$paper->id.'/'.$paper->confirmCode.'/0'),
                'pdfURL' => url('PDFAdvice')];
        $mailer = new \App\Mail\submit\paRemindUpload($data);
        Mail::to($authEmail)->send($mailer);
    }

    function paRemindConfirm($paper) {
        // remind author to confirm paper
        $this->line('reminder - you need to confirm that your paper is acceptable');
        $leadAuthor = $paper->correspondingAuthor;
        $vol = $paper->volume;
        $pap = $paper->paperNumber;
        $rev = $paper->revisionNumber;
        $typ = 'preprint';
        $link = route('paConfirmPDF',['id'=>$paper->id,'confirmCode'=>$paper->confirmCode]);
        $filePath = $pathToFile = base_path() . sprintf('/pdf/%03d/JCSE_Volume_%03d_%s_%03d_Rev_%02d.pdf', $vol, $vol,ucfirst($typ), $pap, $rev);
        $data = ['vol'=>$vol,'pap'=>$pap,'shortName'=>config('jrnl.shortName'),'link'=>$link,'lead'=>1,
            'leadAuthorSalutation'=>$leadAuthor->title->title.' '.$leadAuthor->familyName,
            'leadAuthorName'=>$leadAuthor->title->title.' '.$leadAuthor->givenName.' '.$leadAuthor->familyName,
            'leadAuthorEmail'=>$leadAuthor->email,
            'id'=>$paper->id,'confirmCode'=>$paper->confirmCode,'filePath'=>$filePath, 'remind'=>1];
        $mailer = new \App\Mail\submit\checkPaperEmail($data);
        Mail::to($data['leadAuthorEmail'])->send($mailer);
    }

    function paRemindReformat($paper) {
        // remind author to revise paper
        $this->line('Reminder - please reformat your paper');
    }

    function adRemindApprove($paper) {
        // remind admin to check paper
        $this->line('Reminder - you need to check a paper');
    }

    function paRemindNominateReviewers($paper) {
        // remind author to nominate reviewers
        $this->line('Reminder - you need to nominate reviewers');
    }

    function adRevCheckRemind($paper) {
        // remind admin to check reviewers
        $this->line('Reminder - you need to check the suggested reviewers for paper xxx');
    }

    function remindEditorRev($paper) {
        // remind editor to process reviews
        $this->line('Reminder - you need to edit paper xxx');
    }

    function paRemindRevise($paper) {
        // remind author to submit revised paper
        $this->line('Reminder - you need to revise your paper');
    }
}
