<?php

namespace App\Http\Controllers\backend;

use App\Models\Event;
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


        return view('backend.Admin.allregistered',compact('users'));


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

        $events = Event::all();

        //dd($managers->all());


        return view('backend.Admin.alleventreg',compact('events'));

    }

    public function alleventregdelete($id)

    {

        Event::find($id)->delete();

        return redirect()->back()->with('message','Event deleted successfully');
    }

    // end create event view






    public function blogg()
    {

        $users = Blog::all();

        //dd($users->all());


        return view('backend.Admin.blogcontrol',compact('users'));


    }

    public function blogdelete($id)

    {

        Blog::find($id)->delete();

        return redirect()->back()->with('message','Blog deleted successfully');
    }



    public function managerRequests()
    {
        $events=Event::all();
        return view('backend.Admin.allrequest',compact('events'));
    }













}
