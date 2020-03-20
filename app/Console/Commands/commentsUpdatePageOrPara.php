<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class commentsUpdatePageOrPara extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'comments:updatePageOrPara';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Updates the html column of the comments table according to whether paper is in html or pdf';

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
        //

        $comments = \App\Models\Comment::get();
        foreach ($comments as $comment) {
            //$this->line('Comment ID = '.$comment->id.', Paper ID = '.$comment->paper_id);
            $paper = \App\Models\Paper::where('id', $comment->paper_id)->first();
            $vol = $paper->volume;
            $pap = $paper->paperNumber;
            //$this->line('Volume = '.$vol.', Paper = '.$pap);
            $htmlName = base_path('resources/views/htm/volume' . $vol . '/paper' . $pap . '/v' . $vol . 'p' . $pap . '.blade.php');
            $this->line($htmlName.' Exists:'.file_exists($htmlName));
            $comment->html = (file_exists($htmlName));
            $comment->save();
        }

    }
}
