<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use\App\Models\User;
use Illuminate\Support\Facades\Auth;

class onlineprojectcontroller extends Controller
{
//index page
public function index(){
    return view('welcome');
}

    // registration form
    public function showRegistrationForm() {
        return view('register');
        
    }
    public function register(Request $request){
        $request->validate([
            "name" => "required",
            "email" => "required",
            "password" => "required|confirmed",
        ]);

      $user=  User::create([
            "name" => $request->name,
            "email" => $request->email,
            "password" => bcrypt($request->password),
        ]);
        if($user){
           return redirect()->route('login');
       }

        return back()->with("success","please enter valid information");
    }
    public function totaluser(){
        $totaluser=User::all();
        return view('user.userdisplay', compact('totaluser'));

    }

    //login form
    public function showloginForm() {
        return view('login');
        
    }
    
    public function login(Request $request){
        $credential=$request->validate([
            "name"=>"required",
            "email"=>"required",
            "password" => "required",
        ]);
        if(Auth::attempt($credential)){

           return redirect()->route('index');
        }
        else{
            return back()->with("failed","enter correct information");
        }
    }

//display user    
public function displayuser(){
    $totaluser=User::all();
    return view('user.userdisplay',compact('totaluser'));
    
}
//user delete
public function deleteuser($id){
    $data= User::find($id);
    $data->delete();
    return back();
}
// user edit
public function edit($id){
    $dataEdit=User::findOrFail($id);
    return view('user.useredit',compact('dataEdit'));
}
public function update(Request $request,$id){
    $request->validate([
        'name' => 'required',
        'email' => 'required',
    ]);

    $post = User::find($id);

    if ($post) {
        $post->update([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
        ]);

        return redirect()->route('user.display')->with('success', 'Post updated successfully!');
    }

    return redirect()->back()->with('error', 'Post not found.');


}
}