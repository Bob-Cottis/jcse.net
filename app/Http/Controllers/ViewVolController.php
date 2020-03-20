<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Paper;
use App\Models\SpecialVolume;

class ViewVolController extends Controller
{
    //
    public function viewVolget($vol){
        $paps = Paper::select('id', 'paperPublished', 'title', 'authors', 'abstract', 'paperNumber')->
            where('volume',$vol)->
            where(function ($query) {
                $query->where('preprintPublished', 1)
                    ->orWhere('paperPublished', 1); })->
            orderBy('volume')->
            get();
        $volDesc = SpecialVolume::select('description')->
            where('number',$vol)->get();
        /*$paps = \DB::select('SELECT id, paperPublished, title, authors, abstract, paperNumber FROM papers WHERE volume=? AND
            (preprintPublished=1 OR paperPublished=1) ORDER BY paperNumber',[$vol]);*/
        // $volDesc = \DB::select('SELECT description from specialvolumes WHERE number=?',[$vol]);
        if (key_exists('vol_desc',$volDesc)) {
            $vol_desc = $volDesc->vol_desc;
        }
        else {$vol_desc = '';}
        return view('viewVol',['vol'=>$vol,'paps'=>$paps, 'vol_desc'=>$vol_desc]);
    }

    public function viewVolpost(Request $request){
        $vol = $request->input('vol');
        //return view('showString',['s'=>'$vol = '.$vol]);
        $paps = \DB::select('SELECT id, paperPublished, title, authors, abstract, paperNumber FROM papers WHERE volume=? AND 
            (preprintPublished=1 OR paperPublished=1) ORDER BY paperNumber',[$vol]);
        $volDesc = \DB::select('SELECT description from specialvolumes WHERE number=?',[$vol]);
        if (key_exists('vol_desc',$volDesc)) {
            $vol_desc = $volDesc->vol_desc;
        }
        else {$vol_desc = '';}
        return view('viewVol',['vol'=>$vol,'paps'=>$paps, 'vol_desc'=>$vol_desc]);
    }

    public function show()
    {
        $vols = \DB::select('select DISTINCT papers.volume, specialvolumes.description FROM papers LEFT JOIN specialvolumes ON papers.volume = specialvolumes.number ORDER BY volume');
        return view('welcome', ['vols' => $vols]);
    }

    public function showAll()
    {
        $vols = \DB::select('select DISTINCT papers.volume, specialvolumes.description FROM papers LEFT JOIN specialvolumes ON papers.volume = specialvolumes.number ORDER BY volume');
        return view('welcome', ['vols' => $vols]);
    }
}
