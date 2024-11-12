<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use\App\Models\Productt;

class usercontroller extends Controller
{
    public function userdisplay(){
       return view('user.productdisplay');
    }
    public function display(){
        $product=Productt::all();
        return view('user.productdisplay',compact('product'));
       }
}
