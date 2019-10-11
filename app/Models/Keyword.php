<?php

namespace App\Models;

use Nicolaslopezj\Searchable\SearchableTrait;
use Illuminate\Database\Eloquent\Model;

class Keyword extends Model
{

    protected $table = 'keywords';
    public $timestamps = true;

    use SearchableTrait;

    public function users()
    {
        return $this->belongsToMany('App\Models\User');
    }

    public function papers()
    {
        return $this->belongsToMany('App\Models\Paper');
    }

}
