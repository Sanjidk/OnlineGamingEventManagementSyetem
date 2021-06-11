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

                        All Registered User
                        <span style="color:green ">{{$users->count()}}</span>

                    </h2>
                </div>



                <thead>
                <tr>
                    <th>Sl</th>
                    <th>User</th>
                    <th>Name</th>
                    <th>Address</th>
                    <th>Email</th>
                    <th>Mobile</th>



                </tr>
                <tbody>

                @foreach($users as $key=>$user)

                    <tr>
                        <td>{{$key + 1}}</td>
                        <td>{{$user->type}}</td>
                        <td>{{$user->name}}</td>
                        <td>{{$user->address}}</td>
                        <td>{{$user->email}}</td>
                        <td>{{$user->phone}}</td>

                    </tr>
                @endforeach

                </tbody>

                </thead>

            </table>
        </div>

    </div>

@stop
