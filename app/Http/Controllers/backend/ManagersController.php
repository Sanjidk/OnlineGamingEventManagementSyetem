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
            'contain' => 'required',
            'fee' => 'required',
            'orgName' => 'required',
            'manager' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
            'eventName' => 'required',
            'place' => 'required',
            'eventDate' => 'required',
            'startDate' => 'required',
            'endDate' => 'required',
            'food' => 'required',
            'banner' => 'required|mimes:jpg,png,jpeg|max:5048',
        ]);




        $user_file = "";

        if ($request->hasFile('banner')) {

            $file = $request->file('banner');
            if ($file->isValid()) {

                $user_file = date('Ymdhms') . "." . $file->getClientOriginalExtension();
                $file->storeAs('banner', $user_file);
            }
        }

        $managers = new Manager();
        $managers->contain = $request->contain;
        $managers->fee = $request->fee;
        $managers->orgName = $request->orgName;
        $managers->manager = $request->manager;
        $managers->email = $request->email;
        $managers->phone = $request->phone;
        $managers->eventName = $request->eventName;
        $managers->place = $request->place;
        $managers->eventDate = $request->eventDate;
        $managers->startDate = $request->startDate;
        $managers->endDate = $request->endDate;
        $managers->food = $request->food;
        $managers->banner = $user_file;
        $managers->save();


        return redirect()->back()->with('message', 'Request Pending, go to payment for Confirm');
    }




    public function eventdelete($id)
    {
        Manager::find($id)->delete();
        return redirect()->back()->with('message','event deleted sucessfully');

    }



    // show participator list

    Public function showList()
    {
        $list=Manager::paginate(5);
        return view('Managers.list',compact('list'));

    }
















}
