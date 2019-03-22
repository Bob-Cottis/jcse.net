<?php

namespace App/Models;

use Illuminate\Database\Eloquent\Model;

class User extends Model 
{

    protected $table = 'users';
    public $timestamps = true;
    protected $fillable = array('title_id', 'familyName', 'organisation');

    public function profile()
    {
        return $this->hasOne('UserProfile', 'userProfile_id');
    }

    public function author()
    {
        return $this->belongsToMany('User', 'author_id');
    }

    public function editor()
    {
        return $this->belongsToMany('User', 'editor_id');
    }

}