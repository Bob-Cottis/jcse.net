<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PaperAuthors extends Model 
{

    protected $table = 'paperAuthors';
    public $timestamps = true;

    public function author()
    {
        return $this->hasOne('User', 'author_id');
    }

    public function paper()
    {
        return $this->hasOne('Paper', 'paper_id');
    }

}