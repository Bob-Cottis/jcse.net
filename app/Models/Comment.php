<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model 
{

    protected $table = 'comments';
    public $timestamps = true;

    public function commAuthor()
    {
        return $this->belongsTo('\App\Models\User','commAuthor_id');
    }

    public function editor()
    {
        return $this->belongsTo('\App\Models\User');
    }

    public function paper()
    {
        return $this->belongsTo('\App\Models\Paper');
    }

}