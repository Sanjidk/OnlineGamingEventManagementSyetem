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
//        $users=User::all();
        $payment=Event::with('managerEvent')->find($id);
        return view('frontend.Participators.payment',compact('payment'));
    }


    public function userPayment(Request $request)
    {
        $request->validate([
            'part_name' => 'required',
            'eventName' => 'required',
            'event_id' => 'required',
            'manager_id' => 'required',
            'phone' => 'required',
            'transaction' => 'required',
            'fee' => 'required',
        ]);


        $payments = Payment::create([

        'part_name' => $request->part_name,
        'eventName' => $request->eventName,
        'event_id' => $request->event_id,
        'manager_id' => $request->manager_id,
        'phone' => $request->phone,
        'transaction' => $request->transaction,
        'fee' => $request->fee,

        ]);
        return redirect()->back()->with('message', 'Request Pending,wait for confirm by Event Manager ');
    }




    public function userPaymentRequests()
    {
        $payment=Payment::with('eventPayment')->get();
        return view('frontend.Managers.viewlist',compact('payment'));
    }



    // end of participator pay to manager




 // participator join single post









}
