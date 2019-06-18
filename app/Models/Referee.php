<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Referee extends Model 
{

    protected $table = 'referees';
    public $timestamps = true;

    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }

    public function paper()
    {
        return $this->belongsTo('App\Models\Paper');
    }

}