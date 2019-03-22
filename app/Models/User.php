<?php
namespace App\Models;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
class User extends Authenticatable implements MustVerifyEmail
{
    use Notifiable;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title_id', 'givenName', 'familyName', 'email', 'password',
    ];
    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

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

