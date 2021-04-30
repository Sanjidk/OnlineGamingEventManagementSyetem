<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Manager;
use Illuminate\Http\Request;

class ManagersController extends Controller
{


    public function eventform()
    {

        return view('Managers.event');
    }

    public function event(Request $request)
    {
        $request->validate([
            'orgName' => 'required',
            'manager' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'eventName' => 'required',
            'place' => 'required',
            'fee' => 'required',
            'eventDate' => 'required',
            'startDate' => 'required',
            'endDate' => 'required',
            'food' => 'required',
            'banner' => 'required',
        ]);


        $managers = new Manager();
        $managers->orgName = $request->orgName;
        $managers->manager = $request->manager;
        $managers->email = $request->email;
        $managers->phone = $request->phone;
        $managers->eventName = $request->eventName;
        $managers->place = $request->place;
        $managers->fee = $request->fee;
        $managers->eventDate = $request->eventDate;
        $managers->startDate = $request->startDate;
        $managers->endDate = $request->endDate;
        $managers->food = $request->food;
        $managers->banner = $request->banner;
        $managers->save();


        return redirect()->back()->with('message', 'Event Create Sucessfully ');
    }




}
