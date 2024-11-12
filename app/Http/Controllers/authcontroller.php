<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use\App\Models\User;
use Illuminate\Http\Request;

class authcontroller extends Controller
{
    public function index(){
        if(auth::check()){
            return view('welcome');
        }
        else{
            return redirect()->route('showloginform');
        }
    }
    public function logout(){
     Auth::logout();
     return view('login');
    }
}
