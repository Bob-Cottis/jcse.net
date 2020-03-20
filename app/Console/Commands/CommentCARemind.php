<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Comment;

class CommentCARemind extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'comment:ca_remind';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Checks for comments that have not been confirmed by the comment author after 2 or 4 days and sends a remminder';

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
        // check for unconfirmed comments
        $comments = \App\Models\Comment::where('authorConfirmed',0)->where('created_at', '<=', now()->subDays(2))-get();
        $this->line(varDump($comments));
    }
}
