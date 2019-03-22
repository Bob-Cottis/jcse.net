<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DummyController extends Controller
{
    //
    public function show($src) {
        return view('dummy',['src'=>$src]);
    }
}
