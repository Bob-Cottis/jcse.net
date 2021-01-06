<?php

namespace App\Mail\review;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class edConfirmRevs extends Mailable
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

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $this->subject(__('review.edConfirmRevsSubj',$this->data));
        return $this->view('mail.review.edConfirmRevsEmail',['data'=>$this->data]);
    }
}