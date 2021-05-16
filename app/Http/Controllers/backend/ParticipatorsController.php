<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Manager;
use App\Models\Participator;
use Illuminate\Http\Request;


class ParticipatorsController extends Controller

{

 public function partireg()
{
   $managers= Manager::all();
    return view('Participators.joinevent',compact('managers'));
}



    public function joineve(Request $request)
{
    $request->validate([
        'type' => 'required',
        'name' => 'required',
        'email' => 'required|email',
        'phone' => 'required',
        'payment' => 'required',
        'photo' => 'required',
    ]);


    $user_file = "";

    if ($request->hasFile('photo')) {

        $file = $request->file('photo');
        if ($file->isValid()) {

            $user_file = date('Ymdhms') . "." . $file->getClientOriginalExtension();
            $file->storeAs('food', $user_file);
        }
    }


    $participators = new Participator();
    $participators->type = $request->type;
    $participators->name = $request->name;
    $participators->email = $request->email;
    $participators->phone = $request->phone;
    $participators->payment = $request->payment;
    $participators->photo = $user_file;
    $participators->save();


    return redirect()->back()->with('message', 'Event Join Sucessfully ');
}


// show participator list

    Public function showList()
    {
        $list=Participator::paginate(5);

        return view('Participators.list',compact('list'));

    }




    public function deleteParticipator($id)
    {
        $list=Participator::find($id)->delete();
        return redirect()->back()->with('message','Participator deleted sucessfully');

    }

    public function editList($id)
    {
        $managers=Manager::all();
        $participators= Participator::find($id);
        return view('Participators.updateparticipatorlist',compact('participators','managers'));

    }


        public function UpdateList(Request $request,$id)
    {
        Participator::find($id)->update([
            'name'=>$request->participator_name,
            'email'=>$request->participator_email,
            'phone'=>$request->participator_number,
            'payment'=>$request->participator_pay,
        ]);
        return redirect(route('Participators.list'))->with('message', 'Participator Updated sucessfully');
    }



}
