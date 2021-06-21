<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Event;
use App\Models\Payment;
use Illuminate\Http\Request;


class ParticipatorsController extends Controller

{

    public function eventlistt()
    {

        $data= Event::all();
        $events= Event::where('status','approved')->get();
        return view('frontend.Participators.postmy',compact('events','data'));
    }





// participator list
    public function participatorlist($id)
    {
        $payment=Payment::where('event_id',$id)->where('status','approved')->get();

        return view('frontend.Participators.plist',compact('payment'));
    }








}
