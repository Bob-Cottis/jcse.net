<?php

namespace App/Models;

use Illuminate\Database\Eloquent\Model;

class Referee extends Model 
{

    protected $table = 'referees';
    public $timestamps = true;

    public function referee()
    {
        return $this->hasOne('User', 'user_id');
    }

    public function paper()
    {
        return $this->hasOne('Paper', 'paper_id');
    }

}