<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function regform()
    {
        //userlogin form
        return view('registration');
    }

    public function register(Request $request)
    {

        $request->validate([
            'name'=>'required',
            'address'=>'required',
            'email'=>'required|email|unique:users',
            'password'=>'required|min:6',
            'birthDate'=>'required',
            'phone'=>'required',

        ]);

        $users = new User();
        $users->name =$request->name;
        $users->address =$request->address;
        $users->email =$request->email;
        $users->password =bcrypt($request->password);
        $users->birthDate =$request->birthDate;
        $users->phone =$request->phone;
        $users->save();

        return redirect()->back()->with('message','Sucessfully Registered');
    }


// registration end


// login form start

    public function loginForm()
    {
        return view('login');
    }

    public function userLogin(Request $request)
    {

        $request->validate([
            'email'=>'required|email',
            'password'=>'required|min:6',

        ]);

        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials))
        {
                return redirect()->route('frontend.master')->with('success','User Login Successfully.');
        }
            return back()->withErrors([
                'email' => 'Invalid Credentials.',
            ]);
    }

    public function userLogout()
    {
        Auth::logout();
        return redirect()->route('home')->with('success','Logout Successful');

    }



}

