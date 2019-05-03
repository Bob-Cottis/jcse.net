<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Userprofile extends Model 
{

    protected $table = 'userprofiles';
    public $timestamps = true;

    public function category()
    {
        return $this->hasOne('Category');
    }

    public function source()
    {
        return $this->hasOne('Source');
    }

    public function orgType()
    {
        return $this->hasOne('Organizationtype', 'orgType_id');
    }

    public function language()
    {
        return $this->hasOne('Language');
    }

}