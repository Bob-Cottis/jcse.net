<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ViewvolController extends Controller
{
    //
    public function viewvolget($vol){
        $paps = \DB::select('SELECT id, paperPublished, title, authors, abstract, paperNumber FROM papers WHERE volume=? AND 
            (preprintPublished=1 OR paperPublished=1) ORDER BY paperNumber',[$vol]);
        $volDesc = \DB::select('SELECT description from specialVolumes WHERE number=?',[$vol]);
        if (key_exists('vol_desc',$volDesc)) {
            $vol_desc = $volDesc->vol_desc;
        }
        else {$vol_desc = '';}
        return view('viewvol',['vol'=>$vol,'paps'=>$paps, 'vol_desc'=>$vol_desc]);
    }

    public function viewvolpost(Request $request){
        $vol = $request->input('vol');
        //return view('showString',['s'=>'$vol = '.$vol]);
        $paps = \DB::select('SELECT id, paperPublished, title, authors, abstract, paperNumber FROM papers WHERE volume=? AND 
            (preprintPublished=1 OR paperPublished=1) ORDER BY paperNumber',[$vol]);
        $volDesc = \DB::select('SELECT description from specialVolumes WHERE number=?',[$vol]);
        if (key_exists('vol_desc',$volDesc)) {
            $vol_desc = $volDesc->vol_desc;
        }
        else {$vol_desc = '';}
        return view('viewvol',['vol'=>$vol,'paps'=>$paps, 'vol_desc'=>$vol_desc]);
    }

    public function show()
    {
        $vols = \DB::select('select DISTINCT papers.volume, specialVolumes.description FROM papers LEFT JOIN specialVolumes ON papers.volume = specialVolumes.number ORDER BY volume');
        return view('welcome', ['vols' => $vols]);
    }

    public function showAll()
    {
        $vols = \DB::select('select DISTINCT papers.volume, specialVolumes.description FROM papers LEFT JOIN specialVolumes ON papers.volume = specialVolumes.number ORDER BY volume');
        return view('welcome', ['vols' => $vols]);
    }
}
