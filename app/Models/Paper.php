<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Paper extends Model 
{

    protected $table = 'papers';
    public $timestamps = true;

    public function editor()
    {
        return $this->hasOne('User', 'editor_id');
    }

}