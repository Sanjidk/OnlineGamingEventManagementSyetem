@extends('backend.partial.mastered')
@section('content')

    <div class="body">
        <div class="table-responsive">
            <table class="table table-bordered table-striped table-hover dataTable js-exportable">
                <div class="header"style="margin-top:50px">
                    @if(Session::has('message'))
                        <div class="alert alert-success"> {{ Session::get('message') }}</div>
                    @endif

                    <h2 >

                        All Of My Income
                        <span style="color:green ">{{$events->count()}}</span>

                    </h2>
                </div>



                <thead>
                <tr>
                    <th>Sl</th>
                    <th>Event Manager</th>
                    <th>Manager Number</th>
                    <th>Event Name</th>
                    <th>My Fee</th>
                    <th>Created At</th>
                    <th>Action</th>


                </tr>
                <tbody>

                @foreach($events as $key=>$user)

                    <tr>
                        <td>{{$key + 1}}</td>
                        <td>{{$user->manager_id}}</td>
                        <td>{{$user->bkash}}</td>
                        <td>{{$user->eventName}}</td>
                        <td>{{$user->admin_fee}}</td>
                        <td>{{$user->created_at}}</td>
                        <td>


                            <a href="{{route('income.delete',$user->id)}}" class="btn btn-danger">Delete</a>

                        </td>
                    </tr>
                @endforeach

                </tbody>

                </thead>

            </table>
        </div>

    </div>

@stop
