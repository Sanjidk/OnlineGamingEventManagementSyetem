@extends('master')
@section('page')

    <div class="body">
        <div class="table-responsive">
            <table class="table table-bordered table-striped table-hover dataTable js-exportable">
                <div class="header"style="margin-top:50px">
                    @if(Session::has('message'))
                        <div class="alert alert-success"> {{ Session::get('message') }}</div>
                    @endif
                    <h2 >

                        All Registered Participator
                        <span style="color:green ">{{$participators->count()}}</span>

                    </h2>
                </div>
                <thead>
                <tr>
                    <th>Sl</th>
                    <th>Event Type</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Mobile</th>
                    <th>Payment</th>
                    <th>Photo</th>
                    <th>Created At</th>
                    <th>Action</th>

                </tr>
                <tbody>

                @foreach($participators as $key=>$participator)

                    <tr>
                        <td>{{$key + 1}}</td>
                        <td>{{$participator->type}}</td>
                        <td>{{$participator->name}}</td>
                        <td>{{$participator->email}}</td>
                        <td>{{$participator->phone}}</td>
                        <td>{{$participator->payment}}</td>
                        <td>{{$participator->photo}}</td>
                        <td>{{$participator->created_at}}</td>
                        <td>


                            <a href="{{route('allparticipate.delete',$participator->id)}}" class="btn btn-danger">Delete</a>

                        </td>
                    </tr>
                @endforeach

                </tbody>

                </thead>

            </table>
        </div>

    </div>

@stop
