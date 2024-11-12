<?php

namespace App\Http\Controllers;

use App\Models\Productt;
use App\Models\User;
use Illuminate\Http\Request;

class admincontroller extends Controller
{
    public function dashboard(){
        $totalUsers = User::count();
        $totalProducts = Productt::count();
        return view('admin.dashboard', compact('totalUsers','totalProducts'));
    }

public function layout(){
    return view('admin.category.categories');
}
}

