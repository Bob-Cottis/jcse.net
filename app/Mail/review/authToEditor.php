<?php

namespace App\Mail\review;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class authToEditor extends Mailable
{
    use Queueable, SerializesModels;

    protected $data;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($data)
    {
        //
        $this ->data = $data;
    }

    public function setCopySelf() {
        $this->data['copySelf']=1;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        //dd($this->data);
        $this->subject($this->data['subject']);
        return $this->view('mail.review.authToEditor',['msgData'=>$this->data]);
    }
}

