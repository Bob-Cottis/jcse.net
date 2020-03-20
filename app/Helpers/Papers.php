<?php
namespace App\Helpers;

use App\Models\Paper;
use App\Models\User;

class Papers
{

    public static function get_authors($paper_id)
    {
        $authors = Paper::find($paper_id)->authorCollection()->get();
        $auths = [];
        $count = 0;
        //dd($authors);
        foreach ($authors as $auth) {
            //dd($auth);
            $auths[$count] = ['id' => $auth->id, 'salutation' => $auth->userprofile->salutation, 'name' => $auth->title->title . ' ' .
                $auth->givenName . ' ' . $auth->familyName, 'organization' => $auth->organization, 'country' => $auth->country->country];
            $count++;
        }
        return $auths;
    }

    public static function keyword_array($paper_id)
    {
        $keywords = Paper::where('id', $paper_id)->first()->keywordCollection()->get();
        $ret = [];
        foreach ($keywords as $k) {
            $ret[$k->id] = $k->keyword;
        }
        return $ret;
    }

}

