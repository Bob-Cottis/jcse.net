<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    protected $table = 'messages';
    public $timestamps = true;

    public function sender()
    {
        return $this->hasOne('App\Models\User', 'sender_id');
    }

    public function recipients()
    {
        return $this->belongsToMany('App\Models\User', 'recipients', 'message_id');
    }

    public function ccs()
    {
        return $this->belongsToMany('App\Models\User', 'ccs', 'message_id');
    }

    public function bccs()
    {
        return $this->belongsToMany('App\Models\User', 'bccs', 'message_id');
    }

    public function html()
    {
        if (is_null($this->params)) {
            return __($this->msgText);
        } else {
            return __($this->msgText, (array)json_decode($this->params));
        }
    }

    public function getThread()
    {
        // get previous messages
        // dump("Entering getThread",$this);
        $ret = [];
        // dump("this", $ret);
        if ($this->replyTo > 0) {
            //dd($this);
            $prevMsg = Message::where('id', $this->replyTo)->first();
            // dump("prevMsg",$prevMsg);
            $ret = $prevMsg->getThread();
            // dd($ret);
        }

        array_push($ret,$this->toArray());
        // dump( "Leaving get thread",$ret);
        return $ret;
    }

}
