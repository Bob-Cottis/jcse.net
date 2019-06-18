<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Userprofile extends Model 
{

    protected $table = 'userprofiles';
    public $timestamps = true;

    public function category()
    {
        return $this->hasOne('App\Models\Category','id','category_id');
    }

    public function source()
    {
        return $this->hasOne('App\Models\Source','id','source_id');
    }

    public function orgType()
    {
        return $this->hasOne('App\Models\Organizationtype', 'id', 'orgType_id');
    }

    public function language()
    {
        return $this->hasOne('App\Models\Language','id','language_id');
    }

    public function user()
    {
        return $this->hasOne('App\Models\User');
    }
}