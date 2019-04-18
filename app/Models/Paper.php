<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Paper extends Model 
{

    protected $table = 'papers';
    public $timestamps = true;

    public function editor()
    {
        return $this->belongsTo('User', 'editor_id');
    }

    public function comments()
    {
        return $this->hasMany('comment');
    }

}