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

    public function userprofile()
    {
        return $this->belongsTo('App\Models\Userprofile', 'userProfile_id' );
    }

    public function papers()
    {
        return $this->belongsToMany('App\Models\Paper', 'paperauthors', 'author_id', 'paper_id')->withPivot('notes','authorNum');
    }

    public function notifies(){
        return $this->belongsToMany('App\Models\Paper','notifies')->withTimeStamps();
    }
    public function editor()
    {
        return $this->hasMany('App\Models\Paper', 'editor_id');
    }

    public function correspondingAuthor() {
        return $this->hasMany('App\Models\Paper', 'correspondingAuthor_id');
    }
    public function title()
    {
        return $this->belongsTo('App\Models\Title');
    }

    public function country()
    {
        return $this->belongsTo('App\Models\Country');
    }

    public function comments()
    {
        return $this->hasMany('App\Models\Comment', 'commAuthor_id');
    }

    /*public function getUserDetailsAttribute()
    {
        $details = ['title'=>$this->title(),
            'givenName'=>$this->givenName,
            'familyName'=>$this->familyName,
            'salutation'=>$this->userprofile()->salutation,
            'email'=>$this->email];
        if (is_null($details['salutation'])) {
            $details['salutation'] = $details['title'] . ' ' . $details['familyName'];
            }
        return $details;
    }*/

}