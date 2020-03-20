<?php

namespace App\Http\Controllers;

use App\Models\Topic;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Userprofile;


class UserController extends Controller
{
    function thirdPartyAddUser(Request $request) {
        // a third party wants to add a user
        // ****************** need to validate submitted data *******************
        $user = new User;
        $user->email = $request->email;
        $user->title_id = $request->title_id;
        $user->givenName = $request->givenName;
        $user->familyName = $request->familyName;
        $user->organization = $request->organization;
        $user->country_id = $request->country_id;
        $user->source = $request->source;
        $user->save();
        $id = $user->id;
        $userprofile = new Userprofile;
        $userprofile->save();
        $userprofile->user_id = $id;
        $user->userprofile_id = $userprofile->id;
        $user->save();
        $userprofile->salutation = $user->title->title.' '.$user->familyName;
        $userprofile->save();
        return response()->json(['success'=>'new user registered','id'=>$id]);
    }

}
