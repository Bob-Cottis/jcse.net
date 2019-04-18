<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model 
{

    protected $table = 'comments';
    public $timestamps = true;

    public function author()
    {
        return $this->belongsTo('User', 'author_id');
    }

    public function editor()
    {
        return $this->belongsTo('User', 'editor_id');
    }

    public function paper()
    {
        return $this->belongsTo('Paper', 'paper_id');
    }

}