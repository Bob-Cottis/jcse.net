<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    //
    public function index()
    {
        $sql = 'select DISTINCT papers.volume, specialVolumes.description FROM papers LEFT JOIN specialVolumes ON papers.volume = specialVolumes.volume ORDER BY volume';
        $vols = \DB::connection('mysql_new')->select($sql);
        return view('welcome', ['vols' => $vols]);
    }
}
