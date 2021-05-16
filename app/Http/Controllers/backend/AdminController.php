<?php

namespace App\Http\Controllers\backend;

use App\Models\Manager;
use App\Models\Participator;
use App\Models\User;
use App\Models\Blog;
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

    // end create event view




    // start participator reg view

    public function allparicipate()
    {

        $participators = Participator::all();

        //dd($participators->all());


        return view('Admin.allparticireg',compact('participators'));

    }

    public function allparticipatedelete($id)

    {

        Participator::find($id)->delete();

        return redirect()->back()->with('message','Participator deleted successfully');
    }

    // end participator reg view







    public function blogg()
    {

        $users = Blog::all();

        //dd($users->all());


        return view('Admin.blogcontrol',compact('users'));


    }

    public function blogdelete($id)

    {

        Blog::find($id)->delete();

        return redirect()->back()->with('message','Blog deleted successfully');
    }










}
