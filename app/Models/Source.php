<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Source extends Model 
{

    protected $table = 'sources';
    public $timestamps = true;

    public function source()
    {
        return $this->belongsTo('UserProfile');
    }

}