<?php

namespace App\Http\Controllers\backend;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{

    public function allregistered()
    {


        $users = User::all();

        //dd($users->all());


        //dd($advertises);


        // dd($orders->all());

        return view('Admin.allregistered',compact('users'));


    }

    public function allregistereddelete($id)

    {

        User::find($id)->delete();

        return redirect()->back()->with('message','User deleted successfully');
    }





}
