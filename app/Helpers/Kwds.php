<?php
//namespace App\Helpers\Kwds;

use Illuminate\Support\Facades\Mail;
use App\Models\Paper;
use App\Models\User;
use App\Models\Keyword;

//class Kwds

{
    /**
     * @param $ignore
     * @return string
     */
    function keywords_delete($ignore)
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
     * keywords_to_singular($plural) - remove trailing 's' from array of keywords
     *
     * @param $plural
     */
    function keywords_singular($plural)
    {
        $keywords = Keyword::whereIn('keyword', $plural)->get();
        foreach ($keywords as $keywd) {
            $keywd->keyword = substr_replace($keywd->keyword, "", -1);
            $keywd->save();
        }
        return 'Converted keywords to singular';
    }


    /**
     * keywords_split($split) - replace one keyword with two
     *
     * @param $split
     */
    function keywords_split($split)
    {
        foreach ($split as $keyword => $keyPair) {
            // get keyword from $split array
            // get original to locate users and papers
            $lowerKeyword = strtolower($keyword);
            $keywd = Keyword::where('keyword', $lowerKeyword)->first();
            if (is_null($keywd)) {
                return 'Keyword "'.$keyword.'" not found';
            }
            $users = $keywd->users;
            if (is_null($users)) {
                return 'No users found for "'.$keyword.'"';
            }
            // return print_r($users,1);
            $user_ids = [];
            foreach($users as $u) {
                array_push($user_ids,$u->id);
            }
            $paper_ids = [];
            $papers = $keywd->papers;
            foreach($papers as $p) {
                array_push($paper_ids,$p->id);
            }
            $refs = $keywd->refs;
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
                $newKeywd->refs += $refs;
                $newKeywd->save();
            }
            // remove existing keyword
            // first remove pivot table entries
            $keywd->papers()->detach();
            $keywd->users()->detach();
            $keywd->delete();
        }
        return 'Finished splitting keywords\n';
    }

    /**
     * keywords_capitalize($capital) - replace lower case strings with capitalized versions
     *
     * @param $capital
     */
    function keywords_capitalize($capital)
    {
        $ret = '';
        foreach ($capital as $cap) {
            $lcap = strtolower($cap);
            $keywd = Keyword::where('keyword', $lcap)->first();
            if (is_null($keywd)) {
                $ret .= 'Did not find "' . $cap . '" in keywords"\n';
            } else {
                $keywd->keyword = $cap;
                $keywd->save();
            }
        }
        return 'keywords_capitalize completed - '.$ret;
    }

    /**
     * @param $replace
     * @return string
     */
    function keywords_replace($replace)
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
        return 'keywords_replace completed - '.$ret;
    }

    /**
     * @param $synonyms
     * @return string
     */
    function keywords_synonyms($synonyms)
    {
        $ret = '';
        $keywds = Keyword::whereIn('keyword', array_keys($synonyms))->get();
        foreach ($keywds as $keywd) {
            foreach ($synonyms[$keywd->keyword] as $k) {
                //return print_r($k,1);
                $syn = Keyword::where('keyword', $k)->first();
                if (is_null($syn)) {
                    $ret .= 'Keyword "' . $syn . '" not found\n';
                } else {
                    // $this->info(print_r($syn,1));
                    $syn->synonym = $keywd->id;
                    $syn->save();
                }
            }
        }
        return 'keywords_synonyms completed - '.$ret;
    }

    /**
     * @return string
     */
    function keywords_de_dupe() {
        // merge duplicate keywords
        $ret = "Processing de_dupe_keywords";
        $keywds = DB::table('keywords')
            ->select('keyword',DB::raw('COUNT(keyword) as `count`'))
            ->groupBy('keyword')
            ->havingRaw('COUNT(keyword) > 1')
            ->get();
        //return print_r($keywds);
        foreach ($keywds as $keywd) {
            //$ret = print_r($keywd,true);
            $keys = Keyword::where('keyword',$keywd->keyword)->get();
            //$ret .= print_r($keys,true);
            $first = true;
            $user_ids = [];
            $paper_ids = [];
            $refs = 0;
            $firstKey = null;
            $old_id = 0;
            foreach($keys as $k) {
                if ($first) {
                    // replicate the first row to hold the final result
                    $firstKey = $k->replicate();
                    $old_id = $k->id;
                    $first = false;
                }
                // add to the list of authors, papers and the count (refs) of papers referencing this keyword
                $refs += $k->refs;
                $users = $k->users;
                if (is_null($users)) {
                    $ret .= 'No users found for "' . $k->keyword . '"';
                }
                foreach ($users as $u) {
                    array_push($user_ids, $u->id);
                }
                $papers = $k->papers;
                foreach ($papers as $p) {
                    array_push($paper_ids, $p->id);
                }
                // delete keyword and update replicate
                $ret .= 'Deleting keyword with id '.$k->id;
                $k->users()->detach();
                $k->papers()->detach();
                $k->delete();
                //return 'Keyword "'.$k->keyword.'" $user_ids = "'.print_r($user_ids,1).'"';
            }
            $firstKey->id = $old_id;
            $ret .= "$firstKey after setting id = ".print_r($firstKey,true);
            $firstKey->users()->syncWithoutDetaching($user_ids);
            $firstKey->papers()->syncWithoutDetaching($paper_ids);
            $firstKey->refs += $refs;
            $firstKey->save();
        }
        return $ret;
    }

    /**
     * @param array $keywords - array of strings to search for
     *
     * @return associative array:
     *  ['keyword'=>{string},
     *    'papers'=>{eloquent collection of Paper model}]
     */
    function keywords_find_papers(array $keywords) {
        $ret = [];
        foreach($keywords as $keyword) {
            $keywd = Keyword::where('keyword','LIKE',$keyword)->first();
            $papers = $keywd->papers();
            $keyArray['keyword'=>$keyword,'papers'=>$papers]
            array_push($ret,$keyArray);
        }
        return $ret
    }

    /**
     * @param array $keywords - array of strings to search for
     *
     * @return associative array:
     *  [['keyword'=>{string},
     *    'users'=>['errorCode'=>{number indicating status, 0 = OK}
     *               'user'=>{eloquent Paper model}], ...]]
     */
    function keywords_find_users(array $keywords) {
        $ret = [];
        foreach($keywords as $keyword) {
            $retArray = ['keyword'=>$keyword];


        }
    }


}


