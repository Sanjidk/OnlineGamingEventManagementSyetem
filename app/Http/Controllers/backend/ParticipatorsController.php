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


    $participators = new Participator();
    $participators->type = $request->type;
    $participators->name = $request->name;
    $participators->email = $request->email;
    $participators->phone = $request->phone;
    $participators->payment = $request->payment;
    $participators->photo = $request->photo;
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

        $participator= Participator::find($id);
        return view('Participators.updateparticipatorlist',compact('participator'));

    }



    public function UpdateList(Request $request,$id)
    {

        {
            $request->validate([
                'type' => 'required',
                'name' => 'required',
                'email' => 'required|email',
                'phone' => 'required',
                'payment' => 'required',
                'photo' => 'required',
            ]);


            $participators = Participator::find($id);
            $participators->type = $request->type;
            $participators->name = $request->name;
            $participators->email = $request->email;
            $participators->phone = $request->phone;
            $participators->payment = $request->payment;
            $participators->photo = $request->photo;
            $participators->save();

            return redirect(route('Participators.list'))->with('message','Participator Updated sucessfully');
        }
    }


}
