<?php

namespace App/Models;

use Illuminate\Database\Eloquent\Model;

class UserProfile extends Model 
{

    protected $table = 'userProfiles';
    public $timestamps = true;

    public function title()
    {
        return $this->hasOne('Title');
    }

    public function category()
    {
        return $this->hasOne('Category');
    }

    public function country()
    {
        return $this->hasOne('Country');
    }

    public function source()
    {
        return $this->hasOne('Source');
    }

    public function orgType()
    {
        return $this->hasOne('OrganizationType', 'orgType_id');
    }

}