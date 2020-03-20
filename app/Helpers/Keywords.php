<?php
namespace App\Helpers;

use Illuminate\Support\Facades\Mail;
use App\Models\Paper;
use App\Models\User;
use App\Models\Keyword;
use App\Models\Userprofile;

class Keywords

{

    public static function store(Paper $paper)
    {
        $sync = [];
        $keyArray = preg_split("/[.,;]/", $paper->keywords);
        // test for splitting keywords
        foreach ($keyArray as $keywd) {
            if ($keywd <> '') {
                $keywd = str_replace([": ", "<br>", "</br>"], " ", $keywd);
                $keywd = str_replace("  ", " ", $keywd);
                $keywd = strtolower(trim($keywd));
                $dbkeywd = Keyword::where('keyword', 'LIKE', $keywd)->first();
                if (is_null($dbkeywd)) {
                    $dbkeywd = new Keyword();
                    // $this->info('Adding Keyword "'.$keywd.'" from paper '.$paper->volume.'/'.$paper->paperNumber);
                    $dbkeywd->keyword = $keywd;
                    $dbkeywd->log = 'Added on submission of paper ' . $paper->id;
                    $dbkeywd->preferred = 0;
                    $dbkeywd->save();
                    // set as syanonym of itself as a default (so search for synonym will always find all synonyms)
                    $dbkeywd->synonym_id = $dbkeywd->id;
                    $dbkeywd->save();
                }
                $id = $dbkeywd->id;
                array_push($sync, $id);
            }
        }
        $paper->keywordCollection()->sync($sync);
        $auths = $paper->authorCollection;
        if (!is_null($auths)) {
            foreach ($auths as $auth) {
                $auth->keywords()->syncWithoutDetaching($sync);
                //$this->info(print_r($auth));
            }
        }
    }

    /**
     * @param $ignore
     * @return string
     */
    public static function delete($ignore)
    {
        $ret = '';
        foreach ($ignore as $i) {
            // make sure keyword is lower case
            $lowerI = strtolower($i);
            $keywd = Keyword::where('keyword', $lowerI)->first();
            if (is_null($keywd)) {
                $ret .= 'Trying to delete "' . $i . '" but not found\n';
            } else {
                // first clear pivot tables
                $keywd->papers()->detach();
                $keywd->users()->detach();
                // now delete keywords
                $keywd->delete();
            }
        }
        return $ret;
    }

    /**
     * NOTE - should check for prior existence of singular version
     * keywords_to_singular($plural) - remove trailing 's' from array of keywords
     *
     * @param $plural
     */
    public static function singular($plural)
    {
        $keywords = Keyword::whereIn('keyword', $plural)->get();
        foreach ($keywords as $keywd) {
            $singular = substr_replace($keywd->keyword, "", -1);
            $sing = Keyword::where('keyword','LIKE',$singular)->first();
            if (is_null($sing)) {
                $keywd->keyword = $singular;
            }
            else {
                // should handle synonyms for general use - OK for transfer, since run before synonyms
                // replace references to $keywd with reference to $sing
                $paper_ids = [];
                $user_ids = [];
                $papers = $keywd->papers;
                foreach($papers as $p) {array_push($paper_ids,$p->id);}
                $users = $keywd->users;
                foreach($users as $u) {array_push($user_ids,$u->id);}
                $sing->users()->syncWithoutDetaching($user_ids);
                $sing->papers()->syncWithoutDetaching($paper_ids);
                $keywd->users()->detach();
                $keywd->papers()->detach();
                Keyword::destroy([$keywd->id]);
            }
            $keywd->save();
        }
        return 'Converted keywords to singular';
    }


    /**
     * keywords_split($split) - replace one keyword with two
     *
     * @param $split
     */
    public static function split($split)
    {
        foreach ($split as $keyword => $keyPair) {
            // get keyword from $split array
            // get original to locate users and papers
            $keywd = Keyword::where('keyword', 'LIKE',$keyword)->first();
            if (is_null($keywd)) {
                return 'Keyword "' . $keyword . '" not found';
            }
            $users = $keywd->users;
            if (is_null($users)) {
                return 'No users found for "' . $keyword . '"';
            }
            $user_ids = [];
            foreach ($users as $u) {
                array_push($user_ids, $u->id);
            }
            $paper_ids = [];
            $papers = $keywd->papers;
            foreach ($papers as $p) {
                array_push($paper_ids, $p->id);
            }
            foreach ($keyPair as $k) {
                $newKeywd = Keyword::where('keyword', $k)->first();
                if (is_null($newKeywd)) {
                    // new keyword doesn't exist, add a new one by replicating original
                    // $this->info(print_r($keyword));
                    $newKeywd = $keywd->replicate();
                    $newKeywd->keyword = $k;
                    $newKeywd->save();
                }
                // update the pivot tables
                $newKeywd->users()->syncWithoutDetaching($user_ids);
                $newKeywd->papers()->syncWithoutDetaching($paper_ids);
                $newKeywd->save();
                $newKeywd->synonym_id = $newKeywd->id;
                $newKeywd->save();
            }
            // remove existing keyword
            // first remove pivot table entries
            $keywd->papers()->detach();
            $keywd->users()->detach();
            Keyword::destroy([$keywd->id]);
        }
        return 'Finished splitting keywords\n';
    }

    /**
     * keywords_capitalize($capital) - replace lower case strings with capitalized versions
     *
     * @param $capital
     */
    public static function capitalize($capital)
    {
        $ret = '';
        foreach ($capital as $cap) {
            $keywd = Keyword::where('keyword',"LIKE", $cap)->first();
            if (is_null($keywd)) {
                $ret .= 'Did not find "' . $cap . '" in keywords"\n';
            } else {
                $keywd->keyword = $cap;
                $keywd->save();
            }
        }
        return 'keywords_capitalize completed - ' . $ret;
    }

    /**
     * @param $replace
     * @return string
     */
    public static function replace($replace)
    {
        $ret = '';
        foreach ($replace as $find => $repl) {
            $keywds = Keyword::where('keyword', $find)->get();
            foreach ($keywds as $keywd) {
                if (is_null($keywd)) {
                    $ret .= 'Could not find keyword "' . $find . '"\n';
                } else {
                    $keywd->keyword = $repl;
                    $keywd->save();
                }
            }
        }
        return 'keywords_replace completed - ' . $ret;
    }

    /**
     * @param $synonyms array of [synonym =>[keywd1,keywd2,...]]
     * @return string
     */
    public static function synonyms($synonymArray)
    {
        $ret = '';
        foreach ($synonymArray as $keywd => $synonyms) {
            //return print_r($k,1);
            $keyword = Keyword::where('keyword', $keywd)->first();
            if (is_null($keyword)) {dd($keywd);}
            // dd($keywd);
            $syn_id = $keyword->id;
            //dd($syn_id);
            $syns = Keyword::whereIn('keyword',$synonyms)->get();
            //dd($syns);
            foreach ($syns as $syn) {
                //dd($syn);
                $syn->synonym_id = $syn_id;
                $syn->save();
            }
        }
        return 'keywords_synonyms completed - ' . $ret;
    }

    /**
     * @return string
     */
    public static function de_dupe()
    {
        // merge duplicate keywords
        $ret = "Processing de_dupe_keywords";
        $keywds = \DB::table('keywords')
            ->select('keyword', \DB::raw('COUNT(keyword) as `count`'))
            ->groupBy('keyword')
            ->havingRaw('COUNT(keyword) > 1')
            ->get();
        $temp = $keywds;
        if (!is_null($keywds)) {
            foreach ($keywds as $keywd) {
                $keys = Keyword::where('keyword', $keywd->keyword)->get();
                // create new row to hold the merged result
                // dd($keys);
                $newKey = new Keyword;
                $newKey->save();
                foreach ($keys as $k) {
                    $newKey->keyword = $keywd->keyword;
                    $newIDs = $k->users()->allRelatedIds()->toArray();
                    if (!empty($newIDs)) {$newKey->users()->attach($newIDs);}
                    $newIDs = $k->papers()->allRelatedIds()->toArray();
                    if (!empty($newIDs)) {$newKey->papers()->attach($newIDs);}
                    $newKey->log .= $k->log;
                    if ($k->preferred) {$newKey->preferred = 1;}
                    if (is_null($k->synonym_id) || $newKey->synonym_id == $newKey->id) {$newKey->synonym_id = $k->synonym_id;}
                    // detach relations and delete keyword
                    $k->users()->detach();
                    $k->papers()->detach();
                    Keyword::destroy($k->id);
                }
                $newKey->save();
            }
        }
        else {
                $ret = "No duplicates found";
        }
        return $ret;

    }

    /**
     * @param array $keywords - array of strings to search for
     *
     * @return array of associative arrays:
     *  [['keyword'=>{string},
     *    'papers'=>[array of paper_id]], ]
     */
    public static function find_papers(array $keywords)
    {
        $ret = [];
        foreach ($keywords as $keyword) {
            $keywds = Keyword::where('keyword', 'LIKE', '%' . $keyword . '%')->get();
            foreach ($keywds as $keywd) {
                $papers = $keywd->papers;
                foreach ($papers as $p) {
                    array_push($ret, ['keyword_id' => $keywd->id, 'paper' => $p->id]);
                }
            }
        }
        return $ret;
    }

    /**
     * @param array $keywords - array of strings to search for
     * $excludeUsers - array of users to exclude
     * @limit
     * @return associative array:
     *  ['user_id=>[$keywd_id,$keywd_id, ...]]
     */
    public static function find_users(array $keywords, $excludeUsers=null, $limit = 20, $editor = false)
    {
        $syn = Keyword::select('synonym_id')->whereIn('id',$keywords)->get()->toArray();
        $keywds = Keyword::select('id','keyword')->whereIn('synonym_id',$syn)->get()->toArray();
        $idString = implode(',',array_column($keywds,'id'));
        if (is_null($excludeUsers)) {
            $exclude = "";
        }
        else {
            $exclude = " user_id NOT IN (".implode(",",$excludeUsers).") AND";
        }
        if ($editor) {
            $editors = Userprofile::select('user_id')->where('editor',1)->get()->toArray();
            if(!empty($editors)) {
                $edstr = " user_id IN (" . implode(",", array_column($editors, 'user_id')) . ") AND";
            } else {
                $edstr = "";
            }
        }
        else {
            $edstr = "";
        }
        // 4 times limit to ensure that we get enough to allow for exclusions
        $sql = 'SELECT user_id, count(user_id) as count FROM keyword_user WHERE'.$edstr.$exclude.' keyword_id in (' . $idString . ') group by user_id ORDER BY count(keyword_id) DESC LIMIT '.$limit*4;
        $users = \DB::select($sql);
        // get users organised by number of keywords referenced
        //dd($users);
        if (empty($users)) {
            if ($editor) {
                $userArray = Userprofile::select('user_id')->inRandomOrder()->limit($limit)->where('editor', 1)->get()->toArray();
                //dd($userArray);
            } else {
                $userArray = Userprofile::select('user_id')->inRandomOrder()->limit($limit)->get()->toArray();
                //dd($userArray);
            }
        }
        else {
            $newArray = [];
            foreach ($users as $u) {
                $newArray[$u->count][] = $u->user_id;
            }
            // shuffle each group of users
            foreach ($newArray as &$element) {
                shuffle($element);
            }
            // rebuild a single array
            $merged_array = array_reduce($newArray, 'array_merge', array());
            // just keep the required number
            $userArray = array_slice($merged_array, 0, $limit);
        }
        return $userArray;
    }

}


