<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Event;
use Illuminate\Http\Request;

class ManagersController extends Controller
{

    public function eventView()
    {
        $id=auth()->user();

        $events= Event::all();
        return view('frontend.Managers.mypost',compact('events'));
    }






}
