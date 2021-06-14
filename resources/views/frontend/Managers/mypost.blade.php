@extends('frontend.Others.muster')
@section('content')


    <div class="card-header py-7">
        <h6 class="m-0 font-weight-bold text-center">Event List</h6>
    </div>

<!-- Content Row -->
<div class="row">

@foreach($events as $data)

<div class="col-lg-4 mb-4">
    <!-- Illustrations -->
    <div class="card shadow mb-4">


        <div class="card-body">
            <div class="text-center">
                <img class="img-fluid px-3 px-sm-4 mt-3 mb-4" style="width: 25rem;"
                     src="{{url('/photo/banner/',$data->banner)}}" alt="...">

                <div class="details"> <span class="price"> {{$data->fee}} BDT</span>
                    <h4 class="box-title">{{$data->eventName}} </h4>
                    <br>
                    <div class="action">
                        <a class="btn btn-primary" href="{{route('event.list',[$data->id])}}"> View Details</a>

                        @if($data->user_id==auth()->user()->id)
                            @if(auth()->user()->type == 'Manager')

                            <a class="btn btn-danger" href="{{route('event.delete',$data->id)}}">Delete</a>
                            <a class="btn btn-info" href="{{route('event.edit',$data->id)}}">Edit</a>
                            @endif
                        @endif


                        @if(auth()->user()->type == 'Participator')
                            <a class="btn btn-dark" href="{{route('payment.form',$data->id)}}">Join Event</a>
                        @endif
                    </div>
                </div>


            </div>
        </div>


    </div>

</div>
@endforeach

</div>

@stop
