<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use App\Models\Userprofile;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use App\Models\Title;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'title_id' => ['required','integer','min:1'],
            'givenName' => ['required', 'string', 'max:255'],
            'familyName' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'organization' => ['required', 'string', 'max:255'],
            'country_id' => ['required','integer','min:1']
        ]);
    }

    public function messages()
    {
        return [
            'title_id.min' => 'Please select your title, which can be blank',
            'country_id.required'  => 'Please select your country'
        ];
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    protected function create(array $data)
    {
        $user = new User;
        $user->title_id = $data['title_id'];
        $user->givenName = $data['givenName'];
        $user->familyName = $data['familyName'];
        $user->email = $data['email'];
        $user->password = Hash::make($data['password']);
        $user->organization = $data['organization'];
        $user->country_id = $data['country_id'];
        $user->source = 'User';
        $user->save();
        $id = $user->id;
        $userprofile = new Userprofile;
        $userprofile->user_id = $id;
        $userprofile->salutation = $user->title->title.' '.$user->familyName;
        $userprofile->save();
        $user->userprofile_id = $userprofile->id;
        $user->save();

        return $user;
    }

    public static function title_select($option) {
        // return option list for html select
        $titles = \App\Models\Title::select('title','id')->get();
        $s = '';
        foreach ($titles as $title) {
            if ($title->id == $option) {
                $s .= '<option value="'.$title->id.'" selected>'.$title->title.'</option>';
            }
            else {
                $s .= '<option value="'.$title->id.'">'.$title->title.'</option>';
            }
        }
        return $s;
    }

    public static function country_select($option) {
        $countries = \App\Models\Country::select('country','id')->get();
        $s = '';
        foreach ($countries as $country) {
            if ($country->id == $option) {
                $s .= '<option value="'.$country->id.'" selected>'.$country->country.'</option>';
            }
            else {
                $s .= '<option value="'.$country->id.'">'.$country->country.'</option>';
            }
        }
        return $s;;

    }
}
