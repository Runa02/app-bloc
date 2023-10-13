<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LoginUserController extends Controller
{
    public function signup(){
        return view('front.authpage.signup');
    }

    public function signin(){
        return view('front.authpage.signin');
    }
}
