<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Mpayment;
use Illuminate\Http\Request;

class ManagersController extends Controller
{

    // managers checkout form

    public function mcheckout()
    {

        return view('Managers.mcheckout');

    }

        public function mpay(Request $request)
    {

        $request->validate([
            'contain' => 'required',
            'fee' => 'required',
            'cost' => 'required',
            'eventName' => 'required',
            'manager' => 'required',
            'phone' => 'required',
        ]);


        $mpayment = new Mpayment();
        $mpayment->contain = $request->contain;
        $mpayment->fee = $request->fee;
        $mpayment->cost = $request->cost;
        $mpayment->eventName = $request->eventName;
        $mpayment->manager = $request->manager;
        $mpayment->phone = $request->phone;
        $mpayment->save();


        return redirect()->back()->with('message', 'Event Requested Sucessfully ');
    }







}
