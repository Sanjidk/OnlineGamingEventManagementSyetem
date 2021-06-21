
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

                    Participator List

                    </h2>
                </div>


                <thead class="thead-primary">
                <tr>
                    <th>Sl</th>
                    <th>Event Name</th>
                    <th>Participator Name</th>
                    <th>Participator's Bkash Number</th>
                    <th>Event Fee</th>
                    <th>Created At</th>
                    <th>Action</th>

                </tr>
                </thead>

                <tbody>

                @foreach($payment as $data)

                    <tr>
                        <td>{{ $data->id }}</td>

                        <td>{{$data->eventName}}</td>
                        <td>{{$data->part_name}}</td>
                        <td>{{$data->phone}}</td>
                        <td>{{$data->fee}}</td>
                        <td>{{$data->created_at}}</td>


                        <td>
{{--                            @if($data->manager_id==auth()->user()->id)--}}
                            @if(auth()->user()->type == 'Manager')
                            <a class="btn btn-danger" href="{{route('participator.delete',$data->id)}}">Delete</a>
                                @endif
{{--                            @endif--}}

                        </td>


                    </tr>
                @endforeach

                </tbody>

            </table>
        </div>

    </div>

@stop

