<?php

namespace App\Console\Commands;

use \App\Models\Paper;
use \App\Models\User;
use \App\Models\Userprofile;
use Illuminate\Console\Command;
use \App\Models\Comment;
use \Carbon\Carbon;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;

class CommentTimeout extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'comment:checkTimeout';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Check for comments that are waiting for action and send emails when needed';

    /**
     * Create a new command instance.
     *
     * @return void
     */
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
        // get date 2 days ago for testing
        // find comments not published or rejected and 2 days since last action

        $remindTime = Carbon::now()->subMinutes(2)->toDateTimeString();
        $endTime = Carbon::now()->subMinutes(5)->toDateTimeString();
        $deleteTime = Carbon::now()->subMinutes(15)->toDateTimeString();
        $comments = \App\Models\Comment::whereIn('state',['caSubmitted','caReminded','caConfirmed','caTimeout','edReminded','edTimeout','adReminded'])
            ->where('updated_at','<',$remindTime)
            ->get();
        if (! is_null($comments)) {
            foreach ($comments as $comment) {
                switch ($comment->state) {
                    case 'caReminded':
                        // if more than $endTime since created_at mark as timedout - delete after a further 30 days
                        if ($comment->created_at < $endTime) {
                            $comment->state = 'caTimeout';
                            $comment->log .= Carbon::now() . ' comment ' . $comment->id . ' CA failed to confirm\n';
                            break;
                        }
                        // else fall through to issue another reminder
                    case 'caSubmitted':
                        // send reminder to CA
                        $comment->log .= Carbon::now() . ' comment ' . $comment->id . ' CA reminded to confirm\n';
                        $comment->state = 'caReminded';
                        $this->caSendReminder($comment);
                        break;
                    case 'caConfirmed':
                        // ED must have been asked to confirm - send reminder
                        $this->edSendReminder($comment);
                        $comment->state = 'edReminded';
                        $comment->log .= Carbon::now() . ' comment ' . $comment->id . ' ED reminded to confirm\n';
                        break;
                    case 'edReminded':
                        // ED should have had request plus 1 reminder, so move on to AD
                        $this->adSendConfirmationRequest($comment,false);
                        $comment->state = 'edTimeout';
                        break;
                    case 'edTimeout':
                    case 'adReminded':
                        // keep sending AD reminders
                    $this->adSendConfirmationRequest($comment,true);

                }
                $comment->save();
            }
        }
        $comments = Comment::whereIn('state', ['caTimeout','rejected'])
        ->where('updated_at','<',$deleteTime)
        ->get();
        // should log deletion in general log file
        if (! is_null($comments)) {
            foreach ($comments as $comment) {
                Log::info('Comment '.$comment->id.' has been deleted:' . $comment);
                $comment->delete();
            }
        }
    }

    protected function getCommentListing($comment) {
        if ($comment->html) {$para = ucfirst(__('comments.paragraph'));} else {$para = ucfirst(__('comments.page'));}
        return "<hr /><p>".__('comments.Subject').": ".$comment->subject.'<br />'. $para .': '.$comment->paragraph.
            '<hr />'.$comment->commentText.'<hr />';
    }

    protected function caSendReminder($comment){
        $paper = Paper::where('id',$comment->paper_id)->orderBy('revisionNumber','desc')->first();
        $user = User::where('id',$comment->commAuthor_id)->first();
        $jrnlShortName = config('jrnl.shortName');
        $link = route('caConfirm',['id'=>$comment->id,'confirmCode'=>$comment->confirmCode]);
        $commListing = $this->getCommentListing($comment);
        $data = ['vol'=>$paper->volume,'pap'=>$paper->paperNumber,'salutation'=>$user->userprofile->salutation,
            'jrnlShortName'=>$jrnlShortName,'link'=>$link,'commentListing'=>$commListing, 'reminder'=>1];
        $mailer = new \App\Mail\caConfirmEmail($data);
        Mail::to($user->email)->send($mailer);
    }

    protected function edSendReminder($comment){
        $paper = Paper::where('id',$comment->paper_id)->orderBy('revisionNumber','desc')->first();
        $editor = User::where('id',$paper->editor_id)->first();
        $author = User::where('id',$comment->commAuthor_id)->first();
        $authorName = $author->title->title.' '.$author->givenName.' '.$author->familyName;
        $jrnlShortName = config('jrnl.shortName');
        $commListing = $this->getCommentListing($comment);
        $rejectLink = url('edRejectComment',[$comment->id,$comment->confirmCode]);
        $acceptLink = url('edAcceptComment',[$comment->id,$comment->confirmCode]);
        $data = ['vol'=>$paper->volume,'pap'=>$paper->paperNumber,'salutation'=>'Editor',
            'jrnlShortName'=>$jrnlShortName,'acceptLink'=>$acceptLink,'rejectLink'=>$rejectLink,
            'authorName'=>$authorName, 'edEmail'=>$editor->email, 'commentListing'=>$commListing,'reminder'=>0];
        $mailer = new \App\Mail\edNotifyEmail($data);
        Mail::to($editor->email)->send($mailer);
    }
    protected function adSendConfirmationRequest($comment,$reminder) {
        $paper = Paper::where('id',$comment->paper_id)->orderBy('revisionNumber','desc')->first();
        $author = User::where('id',$comment->commAuthor_id)->first();
        $authorName = $author->title->title.' '.$author->givenName.' '.$author->familyName;
        $jrnlShortName = config('jrnl.shortName');
        $rejectLink = url('adRejectComment',[$comment->id,$comment->confirmCode]);
        $acceptLink = url('adAcceptComment',[$comment->id,$comment->confirmCode]);
        $commListing = $this->getCommentListing($comment);
        $data = ['vol'=>$paper->volume,'pap'=>$paper->paperNumber,'salutation'=>__('jrnl.Administrator'),
            'jrnlShortName'=>$jrnlShortName,'acceptLink'=>$acceptLink,'rejectLink'=>$rejectLink,
            'commentListing'=>$commListing, 'reminder'=>$reminder];
        $mailer = new \App\Mail\adConfirmEmail($data);
        Mail::to('admin@jcse.org')->send($mailer);
    }

}
