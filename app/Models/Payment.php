<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    use HasFactory;
    protected  $guarded=[];



    public function eventPayment()
    {
        return $this->belongsTo(Event::class,'event_id','id');
    }



    public function userPayment()
    {
        return $this->belongsTo(User::class,'user_id','id');
    }

}
