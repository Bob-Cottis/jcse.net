<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Notify extends Model 
{

    protected $table = 'notifies';
    public $timestamps = true;

    public function user()
    {
        return $this->hasOne('User', 'user_id');
    }

    public function paper()
    {
        return $this->hasOne('Paper', 'paper_id');
    }

}