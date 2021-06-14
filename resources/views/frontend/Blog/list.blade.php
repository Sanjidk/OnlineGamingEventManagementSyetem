
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

                        Blog List

                    </h2>
                </div>


                <thead class="thead-primary">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">User Name</th>
                    <th scope="col">Game Name</th>
                    <th scope="col">Experience</th>
                    <th scope="col">Action</th>

                </tr>
                </thead>

                <tbody>
                @foreach($list as $key=>$data )
                    <tr>
                        <th scope="row">{{$key+1}}</th>
                        <td>{{$data->name}}</td>
                        <td>{{$data->game}}</td>
                        <td>{{$data->message}}</td>

                        <td>
                            @if($data->name==auth()->user()->name)

                            <a class="btn btn-danger" href="{{route('blog.delete',$data->id)}}">Delete</a>
                            @endif
                        </td>

                    </tr>
                @endforeach

                </tbody>

            </table>
        </div>

    </div>

@stop

