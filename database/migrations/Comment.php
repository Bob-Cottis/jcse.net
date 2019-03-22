<?php

namespace App/Models;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model 
{

    protected $table = 'comments';
    public $timestamps = true;

    public function author()
    {
        return $this->hasOne('User', 'author_id');
    }

    public function editor()
    {
        return $this->hasOne('User', 'editor_id');
    }

    public function paper()
    {
        return $this->hasOne('Paper', 'paper_id');
    }

}