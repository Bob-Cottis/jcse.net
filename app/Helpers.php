<?php

use Illuminate\Support\Facades\Mail;

if (! function_exists('jrnl_email_admin')) {
    function jrnl_email_admin($subject, $message) {
        // send $message to jrnl.admin using default instance of Mailable
        $toAddr = config('jrnl.adminEmail','Admin');
        $salutation = config('jrnl.adminSalutation';;
        $mailer = new \App\Mail\Default(Ssubject,$message);
        Mail::to($toAddr->email)->send($mailer);
    }
}

if (! function_exists('jrnl_email_edInChief')) {
    function jrnl_email_edInChief($subject, $message) {
        // send $message to jrnl.admin using default instance of Mailable
        $toAddr = config('jrnl.editorEmail','Editor');
        $salutation = config('jrnl.edInChief');
        $mailer = new \App\Mail\Default(Ssubject,$salutation,$message);
        Mail::to($toAddr->email)->send($mailer);
    }
}