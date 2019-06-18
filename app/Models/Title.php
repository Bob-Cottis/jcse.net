<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Title extends Model 
{

    protected $table = 'titles';
    public $timestamps = false;

    public function users()
    {
        return $this->hasMany('App\Models\User');
    }

}