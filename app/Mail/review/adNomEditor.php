<?php

namespace App\Mail\review;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class adNomEditor extends Mailable
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
        $subj = __('review.adNomEditorSubj',$this->data);
        //dd($subj);
        $this->subject(__('review.adNomEditorSubj',$this->data));
        return $this->view('mail.review.adNomEditor',['data'=>$this->data])
            ->attach($this->data['filePath']);
    }
}

