<?php

namespace App\Mail\submit;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class adConfirmPDF extends Mailable
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
        $this->data = $data;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $this->subject = __('submit.adConfirmPDFSubj',$this->data);
        return $this->view('mail.submit.adConfirm',['data'=>$this->data])
            ->attach($this->data['filePath']);
    }
}