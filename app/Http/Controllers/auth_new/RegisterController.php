<?php

namespace App\Http\Controllers\Auth_new;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index(){
        return view('auth_new.register');
    }
    public function register(Request $request){
       
        $request->validate([
            'name'=> 'required',
            'email'=> 'required',
            'password' =>'required|confirmed',
        ]);
       
       
        User::create([
            'name'=> $request->name,
            'email'=> $request->email,
            'password' =>bcrypt($request->password),
        ]);
        return redirect()->route('get.home')->with('success', 'You have been registered successfully.');
    }
}
