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
                        All Registered manager
                        <span style="color:green ">{{$managers->count()}}</span>

                    </h2>
                </div>
                <thead>
                <tr>
                    <th>Sl</th>
                    <th>Organization</th>
                    <th>Manager</th>
                    <th>Email</th>
                    <th>Mobile</th>
                    <th>Event Name</th>
                    <th>Location</th>
                    <th>Event Fee</th>
                    <th>Event Date</th>
                    <th>Reg Start</th>
                    <th>Reg End</th>
                    <th>Lunch Item</th>
                    <th>Banner</th>
                    <th>Created At</th>
                    <th>Action</th>

                </tr>
                <tbody>

                @foreach($managers as $key=>$manager)

                    <tr>
                        <td>{{$key + 1}}</td>
                        <td>{{$manager->orgName}}</td>
                        <td>{{$manager->manager}}</td>
                        <td>{{$manager->email}}</td>
                        <td>{{$manager->phone}}</td>
                        <td>{{$manager->eventName}}</td>
                        <td>{{$manager->place}}</td>
                        <td>{{$manager->fee}}</td>
                        <td>{{$manager->eventDate}}</td>
                        <td>{{$manager->startDate}}</td>
                        <td>{{$manager->endDate}}</td>
                        <td>{{$manager->food}}</td>
                        <td>{{$manager->banner}}</td>
                        <td>{{$manager->created_at}}</td>
                        <td>


                            <a href="{{route('alleventreg.delete',$manager->id)}}" class="btn btn-danger">Delete</a>

                        </td>
                    </tr>
                @endforeach

                </tbody>

                </thead>

            </table>
        </div>

    </div>

@stop
