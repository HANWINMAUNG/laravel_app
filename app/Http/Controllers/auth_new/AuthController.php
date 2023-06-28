<?php

namespace App\Http\Controllers\auth_new;
use Session;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class AuthController extends Controller
{
    public function logout(){
        Session::flush();
        Auth::logout();
        return back();
    }
}
