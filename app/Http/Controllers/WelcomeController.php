<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    //
    public function index()
    {
        $sql = 'select DISTINCT papers.volume, specialvolumes.description FROM papers LEFT JOIN specialvolumes ON papers.volume = specialvolumes.volume ORDER BY volume';
        $vols = \DB::connection('mysql_new')->select($sql);
        return view('welcome', ['vols' => $vols]);
    }
}
