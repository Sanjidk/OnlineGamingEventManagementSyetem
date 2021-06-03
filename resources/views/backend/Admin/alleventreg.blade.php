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
                        All Event List
                        <span style="color:green ">{{$events->count()}}</span>

                    </h2>
                </div>
                <thead>
                <tr>
                    <th>Sl</th>
                    <th>Manager ID</th>
                    <th>Bkash Number</th>
                    <th>Maximum Participator</th>
                    <th>Event Fee</th>
                    <th>Event Name</th>
                    <th>Location</th>
                    <th>Event Date</th>
                    <th>Reg Start</th>
                    <th>Reg End</th>
                    <th>Banner</th>
                    <th>Created At</th>
                    <th>Action</th>

                </tr>
                <tbody>

                @foreach($events as $key=>$event)

                    <tr>
                        <td>{{$key + 1}}</td>
                        <td>{{$event->id}}</td>
                        <td>{{$event->bkash}}</td>
                        <td>{{$event->max_participate}}</td>
                        <td>{{$event->fee}}</td>
                        <td>{{$event->eventName}}</td>
                        <td>{{$event->place}}</td>
                        <td>{{$event->eventDate}}</td>
                        <td>{{$event->startDate}}</td>
                        <td>{{$event->endDate}}</td>
                        <td>{{$event->banner}}</td>
                        <td>{{$event->created_at}}</td>
                        <td>


                            <a href="{{route('alleventreg.delete',$event->id)}}" class="btn btn-danger">Delete</a>

                        </td>
                    </tr>
                @endforeach

                </tbody>

                </thead>

            </table>
        </div>

    </div>

@stop
