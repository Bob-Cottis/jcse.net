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

    public function keywords() {
        return $this->belongsToMany('App\Models\Keyword');
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

// SQL query to get users with relevant keywords, but who are not authors of paper (76 in the example)
// SELECT * FROM `users` join keyword_user on `users`.`id` = `keyword_user`.`user_id` WHERE `keyword_user`.`keyword_id`
//in (SELECT `keyword_paper`.`keyword_id` FROM `keyword_paper` WHERE `keyword_paper`.`paper_id` = 76) AND `users`.`id`
// NOT IN (SELECT `author_id` FROM `paperauthors` WHERE `paperauthors`.`paper_id` = 76)
