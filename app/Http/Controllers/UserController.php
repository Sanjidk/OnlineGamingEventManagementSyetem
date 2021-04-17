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
    public function loginForm()
    {
        return view('login');
    }

    public function userLogin(Request $request)
    {

        $request->validate([
            'email'=>'required|email',
            'password'=>'required',

        ]);

        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials))
        {
            $request->session()->regenerate();

            if(auth()->user()->user_type == 'Wholeseller' || auth()->user()->user_type == 'Farmer')
            {

                return redirect(route('home'));
            }



        }

        else
        {
            return back()->withErrors([
                'email' => 'The provided credentials do not match our records.',
            ]);
        }
    }

    public function userLogout()
    {
        Auth::logout();
        return redirect()->back()->with('message','Logout Successful');

    }



    public function regStore(Request $request)
    {

        $request->validate([
            'user_type'=>'required',
            'username'=>'required',
            'password'=>'required',
            'email'=>'required',
            'mobile_num'=>'required',
            'address'=>'required',

        ]);

        $users = new User();
        $users->user_type =$request->user_type;
        $users->username =$request->username;
        $users->password =bcrypt($request->password);
        $users->email =$request->email;
        $users->mobile_num =$request->mobile_num;
        $users->address =$request->address;
        $users->save();

        return redirect()->back()->with('message','Sucessfully Registered');
    }

    Public function viewProfile()
    {



        return view('frontend.profile.view');

    }

    public function adminloginform()

    {
        return view('adminloginform');

    }
    public function adminloginprocess(Request $request)

    {

        $login = $request->only('email', 'password');

        if (Auth::attempt($login)) {
            $request->session()->regenerate();
            if(auth()->user()->user_type == 'admin'){

                return redirect(route('dashboard'));
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

