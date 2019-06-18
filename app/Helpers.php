<?php

use Illuminate\Support\Facades\Mail;

if (! function_exists('jrnl_email_admin')) {
    function jrnl_email_admin($subject, $message) {
        // send $message to jrnl.admin using default instance of Mailable
        $toAddr = ['email'=>config('jrnl.adminEmail','Admin@jcse.org')];
        $salutation = config('jrnl.adminSalutation');
        $data = ['salutation'=>$salutation, 'subject'=>$subject,'msg'=>$message];
        $mailer = new \App\Mail\mailDefault($data);
        Mail::to($toAddr->email)->send($mailer);
    }
}

if (! function_exists('jrnl_email_edInChief')) {
    function jrnl_email_edInChief($subject, $message) {
        // send $message to jrnl.admin using default instance of Mailable
        $toAddr = ['email'=>config('jrnl.editorEmail','Editor@jcse.org')];
        $salutation = config('jrnl.edInChief','Editor-in-chief');
        $data = ['salutation'=>$salutation,'subject'=>$subject,'msg'=>$message];
        $mailer = new \App\Mail\mailDefault(Sdata);
        Mail::to($toAddr->email)->send($mailer);
    }
}

