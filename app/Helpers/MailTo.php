<?php
namespace App\Helpers;

use Illuminate\Support\Facades\Mail;
use App\Models\User;
use App\Models\Message;

class MailTo
{
    private $sender;
    private $recipients;
    private $ccs;
    private $bccs;
    private $subject;
    private $msgFile;
    private $msgParams;
    private $replyTo;
    private $copySelf;

    function setSender(int $sender) {
        if(User::where('id',$sender)->exists()) {
            $this->sender = $sender;
            return true;
        }
        return false;
    }

    function setRecipients(array $recipients) {
        $this->recipients = $recipients;
    }

    function setCcs(array $ccs) {
        $this->ccs = $ccs;
    }

    function setBccs(array $bccs) {
        $this->bccs = $bccs;
    }

    function setSubject(array $subject) {
        $this->subject = $subject;
    }

    function setMsgFile(array $msgFile) {
        $this->msgFile = $msgFile;
    }

    function setMsgParams(array $msgParams) {
        $this->msgParams = $msgParams;
    }

    function setReplyTo(boolean $replyTo){
        $this->replyTo = $replyTo;
    }

    function __construct(int $sender_id = 1, int $source_id = 1, array $recipients = [], array $ccs = [], array $bccs=[],
                         string $subject="", string $msgText="mail.mailDefault",array $msgParams = [], int $replyTo=0)
    {
        if($sender_id <= 0) {
            $this->sender_id = config('jrnl.noReplyID');
        }
        else {
            $this->sender_id = $sender_id;
        }
        $this->source_id = $source_id;
        $this->recipients = $recipients;
        $this->ccs = $ccs;
        $this->bccs = $bccs;
        $this->subject = $subject;
        $this->msgText = $msgText;
        $this->msgParams = $msgParams;
        $this->replyTo = $replyTo;
    }

    function send()
    {
        $log = ''; // Initialize string to return for logging
        // get recipient email(s)
        try {
            $userRecipient = User::whereIn('id',$this->recipients)
                ->get();
            //dd($userRecipient);
            $toAddr = [];
            $salutation = "";
            foreach($userRecipient as $rcp) {
                $add = ['email'=>$rcp->email,'name'=>$rcp->title->title.' '.$rcp->givenName.' '.$rcp->familyName];
                array_push($toAddr,$add);
                $salutation .= ', '.$rcp->userprofile->salutation;
            }
            // delete the leading ", "
            $salutation = substr($salutation,2);
            //dd($toAddr,$salutation);
            $message = new Message;
            $message->sender_id = $this->sender_id;
            $message->source_id = $this->source_id;
            $message->subject = $this->subject;
            $message->recipients =$this->recipients;
            $message->ccs = $this->ccs;
            $message->bccs = $this->bccs;
            $message->msgText = $this->msgText;
            $message->params = json_encode($this->msgParams);
            $message->replyTo = $this->replyTo;
            dd($this->ccs, $message);
            $message->save();
            $this->msgParams['msgID'] =$message->id;
            $msg = __($this->msgText, $this->msgParams);
            $data = ['subject' => $this->subject, 'salutation' => $salutation, 'msg' => $msg];
            $ccArray = User::select('email')->whereIn('id', $this->cc)->get();
            //dd($ccArray);
            $mailer = new \App\Mail\mailDefault($data);
            if(empty($this->cc)) {
                if(empty($this->bcc))
                {
                    Mail::to($userRecipient)
                        ->send($mailer);
                }
                else { //bcc exists
                    $userBcc = User::select('email')->whereIn('id',$this->bcc)->get();
                    Mail::to($userRecipient)
                        ->bcc($userBcc)
                        ->send($mailer);
                }
            }
            else { // cc exists
                $userCc = User::select('email')->whereIn('id', $this->cc)->get();
                // dd($userCc);
                if (empty($this->bcc)) {
                    Mail::to($userRecipient)
                        ->cc($userCc)
                        ->send($mailer);
                } else { // bith cc and bcc present
                    $userBcc = User::select('email')->whereIn('id', $this->bcc)->get();
                    Mail::to($userRecipient)
                        ->cc($userCc)
                        ->bcc($userBcc)
                        ->send($mailer);
                }
            }
            return $message->id;
        }
        catch (Exception $ex) {
            $ret['error'] = "\nSending email failed - ".$ex;
        }
        return $ret;
    }

    function jrnl_email_edInChief($subject, $message)
    {
        // send $message to jrnl.admin using default instance of Mailable
        $toAddr = ['email' => config('jrnl.editorEmail', 'Editor@jcse.org')];
        $salutation = config('jrnl.edInChief', 'Editor-in-chief');
        $data = ['salutation' => $salutation, 'subject' => $subject, 'msg' => $message];
        $mailer = new \App\Mail\mailDefault(Sdata);
        Mail::to($toAddr->email)->send($mailer);
    }
}


