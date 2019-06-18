<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Paper extends Model 
{

    protected $table = 'papers';
    public $timestamps = true;
    protected $fillable = array('revisionNumber');
    protected $dates = ['submissionDate','preprintDate','publicationDate','acknowledgedPreprint','pp_conf_date','revisionReceived'];

    public function editor()
    {
        return $this->belongsTo('App\Models\User', 'editor_id');
    }

    public function correspondingAuthor()
    {
        return $this->belongsTo('App\Models\User', 'correspondingAuthor_id');
    }

    public function authorCollection()
    {
        return $this->belongsToMany('App\Models\User', 'paperauthors', 'paper_id', 'author_id')->withPivot('notes','authorNum');
    }

    public function notifies()
    {
        return $this->belongsToMany('App\Models\User', 'notifies')->withTimeStamps();
    }

    public function comments() {
        return $this->hasMany('App\Models\Comment');
    }

    public function referees() {
        return $this->hasMany('App\Models\Referee');
    }

}