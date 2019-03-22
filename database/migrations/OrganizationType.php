<?php

namespace App/Models;

use Illuminate\Database\Eloquent\Model;

class OrganizationType extends Model 
{

    protected $table = 'organizationTypes';
    public $timestamps = false;

    public function orgType()
    {
        return $this->belongsTo('UserProfile', 'orgType_id');
    }

}