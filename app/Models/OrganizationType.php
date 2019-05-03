<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Organizationtype extends Model 
{

    protected $table = 'organizationtypes';
    public $timestamps = false;

    public function orgType()
    {
        return $this->belongsTo('Userprofile', 'orgType_id');
    }

}