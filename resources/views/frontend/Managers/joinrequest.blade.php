@extends('frontend.Others.muster')
@section('content')

    <div class="body">
        <div class="table-responsive">
            <table class="table table-bordered table-striped table-hover dataTable js-exportable">
                <div class="header"style="margin-top:50px">
                    @if(Session::has('message'))
                        <div class="alert alert-success"> {{ Session::get('message') }}</div>
                    @endif

                    <h2 >

                        Details

                    </h2>
                </div>


                <thead class="thead-primary">
                <tr>
                    <th>Sl</th>
                    <th>Event Name</th>
                    <th>Participator Name</th>
                    <th>Participator's Bkash Number</th>
                    <th>Transaction ID</th>
                    <th>Event Fee</th>
                    <th>Status</th>
                    <th>Created At</th>
                    <th>Action</th>

                </tr>
                </thead>

                <tbody>

                @foreach($payment as $key=>$data )
                    <tr>
                        <th scope="row">{{$key+1}}</th>

                        <td>{{$data->eventName}}</td>
                        <td>{{$data->part_name}}</td>
                        <td>{{$data->phone}}</td>
                        <td>{{$data->transaction}}</td>
                        <td>{{$data->fee}}</td>

                        <td>
                            <div class="btn btn-info">
                                {{$data->status}}
                            </div>
                        </td>
                        <td>{{$data->created_at}}</td>
                        <td>

                                @if($data->status=='pending')
                            <a href="{{route('approved.request',$data->id)}}" type="button" class="btn btn-success waves-effect">
                                <i class="material-icons"> approve</i>

                            </a>
                            @endif

                            <a href="{{route('rejected.request',$data->id)}}" type="button" class="btn btn-danger waves-effect">
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

