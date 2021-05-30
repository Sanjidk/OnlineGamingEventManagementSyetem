<?php
namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Event;
use App\Models\Payment;
use Illuminate\Http\Request;

class PaymentController extends Controller
{


    // participator pay to manager

    public function payments($id)
    {
        $payment=Event::with('managerEvent')->find($id);
        return view('frontend.Participators.payment',compact('payment'));
    }


    public function userPayment(Request $request)
    {
        $request->validate([
            'event_id' => 'required',
            'manager_id' => 'required',
            'user_id' => 'required',
            'phone' => 'required',
            'transaction' => 'required',
            'event_fee' => 'required',
        ]);


        $payments = Payment::create([

            'event_id' => $request->event_id,
        'manager_id' => $request->manager_id,
        'user_id' => $request->user_id,
        'phone' => $request->phone,
        'transaction' => $request->transaction,
        'fee' => $request->fee,

        ]);
        return redirect()->back()->with('message', 'Request Pending,wait for confirm by Manager ');
    }




    public function userPaymentRequests()
    {
        $payment=Payment::with('eventPayment')->get();
        return view('frontend.Managers.viewlist',compact('payment'));
    }



    // end of participator pay to manager













}
