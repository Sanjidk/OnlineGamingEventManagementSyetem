<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Ppayment;
use Illuminate\Http\Request;

class ParticipatorsController extends Controller
{

    // managers checkout form

    public function payments()
    {

        return view('Participators.payment');

    }

    public function ppay(Request $request)
    {

        $request->validate([
            'name' => 'required',
            'contact' => 'required',
            'fees' => 'required',
        ]);


        $ppayment = new Ppayment();
        $ppayment->name = $request->name;
        $ppayment->contact = $request->contact;
        $ppayment->fees = $request->fees;
        $ppayment->save();


        return redirect()->back()->with('message', 'Event Requested Sucessfully ');
    }










}
