<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class showPageController extends Controller
{
    function show($msg='') {
        // supply any required parameters
        switch($msg){
            case(''):
                return view('welcome');

            // fall through if no parameters needed
            default:
                return view('showPage',['msg'=>$msg]);
        }
    }
}
