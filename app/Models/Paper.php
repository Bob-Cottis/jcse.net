<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Paper extends Model 
{

    protected $table = 'papers';
    public $timestamps = true;
    protected $fillable = array('revisionNumber');

    public function editor()
    {
        return $this->belongsTo('User', 'editor_id');
    }

    public function correspondingAuthor()
    {
        return $this->belongsTo('User', 'corrAuthor_id');
    }

    public function authors()
    {
        return $this->belongsToMany('User', 'paperauthors', 'paper_id', 'author_id')->withPivot('notes','authorNum')->withTimestamps();
    }

    public function notifies()
    {
        return $this->belongsToMany('User', 'notifies');
    }

}