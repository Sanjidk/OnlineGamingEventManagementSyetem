<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Event;
use App\Models\Payment;
use App\Models\User;
use Illuminate\Http\Request;

class ManagersController extends Controller
{

    public function eventView()
    {

        $data= Event::all();
        $events= Event::where('status','approved')->get();
        return view('frontend.Managers.mypost',compact('events','data'));
    }


    // show list

    Public function showList($id)
    {
        $list=Event::find($id);

        return view('frontend.Managers.list',compact('list'));

    }




// participator join req list seen by manager

    public function participatorRequests()
    {
        $payment= Payment::all();
        return view('frontend.Managers.joinrequest',compact('payment'));
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



    public function deleteparticipator($id)
    {
        $payment=Payment::find($id)->delete();
        return redirect()->back()->with('message','Participator deleted sucessfully');

    }








}
