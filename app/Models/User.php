<?php

namespace App\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
class User extends Authenticatable implements MustVerifyEmail
{
    use Notifiable;

    protected $table = 'users';
    public $timestamps = true;
    protected $fillable = array('familyName', 'organization');

    public function profile()
    {
        return $this->belongsTo('Userprofile', 'userProfile_id');
    }

    public function papers()
    {
        return $this->belongsToMany('Paper', 'paperauthors', 'author_id', 'paper_id');
    }

    public function editor()
    {
        return $this->hasMany('Paper', 'editor_id');
    }

    public function title()
    {
        return $this->belongsTo('Title');
    }

    public function country()
    {
        return $this->belongsTo('Country');
    }

}