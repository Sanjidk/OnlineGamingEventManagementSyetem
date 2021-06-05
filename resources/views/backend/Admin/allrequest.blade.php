

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

                        All Event Request
                        <span style="color:green ">{{$events->count()}}</span>


                    </h2>
                </div>



                <thead>
                <tr>
                    <th>Sl</th>
                    <th>Event Manager</th>
                    <th>Event Name</th>
                    <th>Manager's Bkash Number</th>
                    <th>Transaction ID</th>
                    <th>Event Fee</th>
                    <th>Status</th>
                    <th>Created At</th>
                    <th>Action</th>

                </tr>
                </thead>

                <tbody>
                @foreach($events as $key=>$data )
                    <tr>
                        <th scope="row">{{$key+1}}</th>

                        <td>{{$data->manager_id}}</td>
                        <td>{{$data->eventName}}</td>
                        <td>{{$data->bkash}}</td>
                        <td>{{$data->transac_id}}</td>
                        <td>{{$data->fee}}</td>
                        <td>{{$data->status}}</td>
                        <td>{{$data->created_at}}</td>
                        <td>


                            <a href="{{route('approve.request',$data->id)}}" type="button" class="btn btn-success waves-effect">
                                <i class="material-icons"> approve</i>

                            </a>

                            <a href="{{route('reject.request',$data->id)}}" type="button" class="btn btn-danger waves-effect">
                                <i class="material-icons"> reject</i>

                            </a>


                        </td>

                    </tr>
                @endforeach

                </tbody>

            </table>
        </div>

    </div>

@stop

