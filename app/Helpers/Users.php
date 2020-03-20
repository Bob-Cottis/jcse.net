<?php
namespace App\Helpers;

use App\Models\User;

class Users
{

    public static function get_details(array $user_ids)
    {
        $ret = [];
        $users = User::with('userprofile', 'title', 'country')->whereIn('id', $user_ids)->get();
        foreach ($users as $user) {
            $user_id = $user->id;
            $username = $user->title->title . ' ' . $user->givenName . ' ' . $user->familyName;
            $salutation = $user->userprofile->salutation;
            $ret[$user_id] = ['id' => $user_id, 'name' => $username, 'salutation' => $salutation,
                'organization' => $user->organization, 'email' => $user->email, 'country' => $user->country->country,
                'keywords' => []];
            $keywds = $user->keywords;
            $keywords = [];
            foreach ($keywds as $keywd) {
                $keywords[] = ['id' => $keywd->id, 'keyword' => $keywd->keyword];
            }
            $ret[$user_id]['keywords'] = $keywords;
        }
        return $ret;
    }

    public static function findUsers(string $search) {
        // search users table for match to $search
        // first try and identify family name
        // convert full name into initials and family name
        // consider possible formats:
        // A. B. Bloggs; A.B. Bloggs; AB Bloggs; Alan Bennett Bloggs
        // treat - as a normal letter?
        // find space before family name
        $sp = strrpos($search, ' ');
        $familyName =  substr($search, $sp + 1);
        // now convert givenName to initials
        $givenName = substr($search,0,$sp-1);
        $givenName = str_replace('.',' ',$givenName);
        $words = explode(' ',$givenName);
        //dd($words);
        $inits = '';
        foreach($words as $w) {
            $inits .= $w[0].'.';
        }
        $search_str = $inits.' '.$familyName;
        $targets = User::where('familyName','LIKE','%'.$familyName.'%')
            ->get()
            ->toArray();
        $ret = [];
        foreach($targets as $t) {
            //dd($t);
            $inits = str_replace('.',' ',$t['givenName']);
            //dd($inits);
            $words = explode(' ',$inits);
            //dd($words);
            $inits = '';
            //dd($words);
            foreach($words as $w) {
                if($w<>'') {
                    $inits .= $w[0] . '.';
                    //dump($w);
                }
                //dd($inits);
            }
            $found_str = $inits.' '.$t['familyName'];
            array_push($ret,['email'=>$t['email'],'givenName'=>$t['givenName'],'familyName'=>$t['familyName'],
                'search_str'=>$search_str,'found_str'=>$found_str,levenshtein($found_str,$search_str)]);
        }
        // dd($targets);
        dd($ret);
        return $search;
    }

    public static function findDuplicateEmails() {
        // find entries in User table with duplicated email fields
        $emails = \DB::table('users')
            ->select('email', \DB::raw('COUNT(email) as `count`'))
            ->groupBy('email')
            ->havingRaw('COUNT(email) > 1')
            ->get();
        dd($emails);
        return $emails;
    }

}


