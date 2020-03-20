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

    public function authorArray()
    {
        return $this->belongsToMany('App\Models\User', 'paperauthors', 'paper_id', 'author_id')->withPivot('notes','authorNum');
    }

    public function authorCollection()
    {
        return $this->belongsToMany('App\Models\User', 'paperauthors', 'paper_id', 'author_id')->withPivot('notes','authorNum');
    }

    public function regAuthorList() {
        $authors = $this->authorCollection;
        $ret = '';
        foreach($authors as $author) {
            $ret .= $author->fullName().", ";
        }
        return substr($ret,0,-2);
    }

    public function notifies()
    {
        return $this->belongsToMany('App\Models\User', 'notifies')->withTimeStamps();
    }

    public function comments() {
        return $this->hasMany('App\Models\Comment');
    }

    public function reviews() {
        return $this->hasMany('App\Models\Review');
    }

    public function keywordCollection() {
        return $this->belongsToMany('App\Models\Keyword');
    }

    public function keyword_array()
    {
        $keywords = $this->keywordCollection;
        $ret = [];
        if(!$keywords->isEmpty()){
            foreach ($keywords as $k) {
                $ret[$k->id] = $k->keyword;
            }
        }
        return $ret;
    }

    public function file_path_vp() {
        if($this->paperPublished) {$typ = 'Paper';}
        else{$typ = 'Preprint';}
        $pathToFile = base_path() . sprintf('/pdf/%03d/JCSE_Volume_%03d_%s_%03d_Rev_%02d.pdf', $this->volume,
            $this->volume,$typ, $this->paperNumber, $this->revisionNumber);
        return $pathToFile;
    }

    public function get_author_details() {
        $authors = $this->authorCollection;
        $auths = [];
        //dd($authors);
        foreach ($authors as $auth) {
            //dd($auth);
            $auths[$auth->pivot->authorNum] = ['id' => $auth->id, 'salutation' => $auth->userprofile->salutation, 'name' => $auth->title->title . ' ' .
                $auth->givenName . ' ' . $auth->familyName, 'organization' => $auth->organization,
                'country' => $auth->country->country,'email'=>$auth->email];
        }
        return $auths;
    }

    public function viewLink() {
        return route('viewPaper',['vol'=>$this->volume,'pap'=>$this->paperNumber,'rev'=>$this->revisionNumber]);
    }

}
