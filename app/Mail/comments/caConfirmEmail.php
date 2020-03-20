<?php

namespace App\Mail\comments;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class caConfirmEmail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * @var $data
     *     ->subj = key to subject message
     *     ->body = key to body message
     *     ->remainder are parameters for messages
     */
    public $data;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($data)
    {
        //
        $this->data=$data;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $this->subject = __('comments.CA_CONFIRM_EMAIL_SUBJ',$this->data);
        return $this->view('mail.comments.caConfirmEmail',['data'=>$this->data]);
    }
}

