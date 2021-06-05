<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Event;
use App\Models\Payment;
use Illuminate\Http\Request;

class ManagersController extends Controller
{

    public function eventView()
    {

        $data= Event::all();
        $events= Event::where('status','approved')->get();
        return view('frontend.Managers.mypost',compact('events','data'));
    }


    // show manager list

    Public function showList($id)
    {
        $list=Event::find($id);

        return view('frontend.Managers.list',compact('list'));

    }




// participator join req list seen by manager

    public function participatorRequests()
    {
        $payment= Payment::where('status','approved')->get();
        return view('frontend.Managers.viewlist',compact('payment'));
    }





// participator list
    public function participatorlist()
    {
        $payment=Payment::all();
        return view('frontend.Participators.plist',compact('payment'));
    }


// participator approved
    public function approvedrequest($id)
    {

        $approve=Payment::find($id);
        $approve->update([

            'status'=>'approved'

        ]);
        return redirect()->back()->with('message','Event successfully approved');




    }



    // participator reject
    public function rejectedrequest($id)
    {
        $approve=Payment::find($id);
        $approve->update([

            'status'=>'rejected'

        ]);
        return redirect()->back()->with('message','Event Request Rejected');

    }








}
