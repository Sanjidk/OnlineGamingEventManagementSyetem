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

                        All Bloger
                        <span style="color:green ">{{$users->count()}}</span>

                    </h2>
                </div>



                <thead>
                <tr>
                    <th>Sl</th>
                    <th>Name</th>
                    <th>Game Name</th>
                    <th>Description</th>
                    <th>Created At</th>
                    <th>Action</th>


                </tr>
                <tbody>

                @foreach($users as $key=>$user)

                    <tr>
                        <td>{{$key + 1}}</td>
                        <td>{{$user->name}}</td>
                        <td>{{$user->game}}</td>
                        <td>{{$user->message}}</td>
                        <td>{{$user->created_at}}</td>
                        <td>


                            <a href="{{route('blogg.delete',$user->id)}}" class="btn btn-danger">Delete</a>

                        </td>
                    </tr>
                @endforeach

                </tbody>

                </thead>

            </table>
        </div>

    </div>

@stop
