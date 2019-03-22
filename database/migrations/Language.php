<?php

namespace App/Models;

use Illuminate\Database\Eloquent\Model;

class Language extends Model 
{

    protected $table = 'languages';
    public $timestamps = false;

    public function language()
    {
        return $this->belongsTo('UserProfile');
    }

}