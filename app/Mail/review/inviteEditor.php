<?php

namespace App\Mail\review;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class inviteEditor extends Mailable
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
        //dd($this->data);
        $subj = __('review.inviteEditorSubj',$this->data['strings']);
        //dd($subj);
        $this->subject(__('review.inviteEditorSubj',$this->data['strings']));
        return $this->view('mail.review.inviteEditor',['data'=>$this->data])
            ->attach($this->data['filePath']);
    }
}

