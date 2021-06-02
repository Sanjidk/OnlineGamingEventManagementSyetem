<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function regform()
    {
        return view('registration');
    }


    public function register(Request $request)
    {
        $request->validate([
            'type' => 'required',
            'name' => 'required',
            'address' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
            'birthDate' => 'required',
            'phone' => 'required',
        ]);

        $users = new User();
        $users->type = $request->type;
        $users->name = $request->name;
        $users->address = $request->address;
        $users->email = $request->email;
        $users->password = bcrypt($request->password);
        $users->birthDate = $request->birthDate;
        $users->phone = $request->phone;
        $users->save();

        return redirect()->back()->with('message', 'Sucessfully Registered. Go to Login Page');
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
            'email' => 'required|email',
            'password' => 'required|min:6',
        ]);
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            if (auth()->user()->type == 'Participator' || auth()->user()->type == 'Manager') {
                return redirect()->route('frontend.Others.master')->with('success', 'User Login Successfully.');
            }
        } else {
            return back()->withErrors([
                'email' => 'Invalid Credentials',
            ]);
        }
    }


    // user logout function

    public function userLogout()
    {
        Auth::logout();
        return redirect()->route('home')->with('success', 'Logout Successfully');
    }

// user login and logout function done













    public function adminloginform()

    {
        return view('adminloginform');

    }
    public function adminloginprocess(Request $request)

    {

        $login = $request->only('email', 'password');

        if (Auth::attempt($login)) {
            $request->session()->regenerate();
            if(auth()->user()->type == 'admin'){

                return redirect(route('mastered'));
            }else{

                return redirect()->back()->with('message','User Not Authorize');

            }

        }
        else{

            return redirect()->back()->with('message','Invalid credential');
        }

    }
    public function adminlogout()
    {

        Auth::logout();
        return redirect(route('adminlogin.form'));

    }




}
