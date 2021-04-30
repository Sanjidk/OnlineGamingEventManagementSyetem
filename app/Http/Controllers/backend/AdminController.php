<?php

namespace App\Http\Controllers\backend;

use App\Models\Manager;
use App\Models\User;
use App\Models\Order;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{

    public function allregistered()
    {

        $users = User::all();

        //dd($users->all());


        return view('Admin.allregistered',compact('users'));


    }

    public function allregistereddelete($id)

    {

        User::find($id)->delete();

        return redirect()->back()->with('message','User deleted successfully');
    }

    // end user view



// start create event view

    public function alleventreg()
    {

        $managers = Manager::all();

        //dd($managers->all());


        return view('Admin.alleventreg',compact('managers'));

    }

    public function alleventregdelete($id)

    {

        Manager::find($id)->delete();

        return redirect()->back()->with('message','Event deleted successfully');
    }




}
