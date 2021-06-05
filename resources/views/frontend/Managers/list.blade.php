
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
                    <th scope="col">#</th>
                    <th scope="col">Manager Name</th>
                    <th scope="col">Manager Bkash Number</th>
                    <th scope="col">Event Name</th>
                    <th scope="col">Event Fee</th>
                    <th scope="col">Event Date</th>
                    <th scope="col">Registration Start</th>
                    <th scope="col">Registration End</th>

                </tr>
                </thead>

                <tbody>




                <tr>
                    <th scope="row">{{$list->id}}</th>

                    <td>{{$list->managers}}</td>
                    <td>{{$list->bkash}}</td>
                    <td>{{$list->eventName}}</td>
                    <td>{{$list->fee}}</td>
                    <td>{{$list->eventDate}}</td>
                    <td>{{$list->startDate}}</td>
                    <td>{{$list->endDate}}</td>



                </tr>



                </tbody>

            </table>
        </div>

    </div>

@stop

