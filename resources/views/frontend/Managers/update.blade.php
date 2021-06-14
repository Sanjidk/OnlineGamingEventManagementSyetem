@extends('frontend.Others.muster')
@section('content')



    @if(Session()->has('message'))
        <div style="color:green" class="alert alert-success"> {{ Session()->get('message') }}</div>
    @endif



    <!DOCTYPE html>
    <html lang="en">




    {{--<head>--}}
    <meta charset="utf-8">
    <meta name="robots" content="noindex, nofollow">

    <title> EVENT FORM </title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <style type="text/css">
        /*body {*/
        /*    margin: 0;*/
        /*    padding: 0;*/
        /*    background-color: #355ce9;*/
        /*    height: 100vh;*/
        /*}*/

        #login .container #login-row #login-column #login-box {
            margin-top: 0px;
            max-width: 550px;
            height: 620px;
            border: 1px solid #f30f0f;
            background-color: #550cf6;
        }    </style>
    {{--    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>--}}
    {{--    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>--}}

    {{--</head>--}}

    <body>




    <div id="login">
        <div class="container">
            <div id="login-row" class="row justify-content-center align-items-center">
                <div id="login-column" class="col-md-6">
                    <div id="login-box" class="col-md-12">



                        <form class="form-horizontal" role="form" action="{{route('event.update', $events->id)}}" method="post" enctype="multipart/form-data">

                            @csrf

                            <h2 class="text-center" style="color: #dee9f8 ">UPDATE EVENT</h2>


                            <br>

                            <div class="form-group">
                                <label for="manager_id" class="text-light col-sm-4 control-label">Event Manager</label>
                                <input type="text" style="color: #e91010" id="manager_id" readonly class="col-sm-6" value="{{auth()->user()->name}}" name="manager_id">
                            </div>
                            <input type="text" id="manager_id" hidden readonly class="col-sm-6" value="{{auth()->user()->id}}" name="user_id">




                            <div class="form-group">
                                <label for="max_participate" class="text-light col-sm-4 control-label">Maximum Participators</label>
                                <input type="number" id="max_participate" value="{{$events->max_participate}}" class="col-sm-6" name= "max_participate">
                            </div>




                            <div class="form-group">
                                <label for="bkash" class="text-light col-sm-4 control-label">Manager's Bkash Number</label>
                                <input type="number" id="bkash" value="{{$events->bkash}}" class="col-sm-7" name= "bkash">
                            </div>


                            <div class="form-group">
                                <label for="fee" class="text-light col-sm-4 control-label">Event Fee For Participator</label>
                                <input type="number" id="fee" value="{{$events->fee}}" class="col-sm-7" name= "fee">
                            </div>


                            <div class="form-group">
                                <label for="eventName" class="text-light col-sm-4 control-label">Event Name</label>
                                <input type="text" style="color: #e91010" id="eventName" readonly value="{{$events->eventName}}" class="col-sm-7" name= "eventName">
                            </div>



                            <div class="form-group">
                                <label for="eventDate" class="text-light col-sm-4 control-label">Event Date</label>
                                <input type="date" id="eventDate" value="{{$events->eventDate}}" class="col-sm-7" name= "eventDate">
                            </div>


                            <div class="form-group">
                                <label for="startDate" class="text-light col-sm-4 control-label">Registration Start</label>
                                <input type="date" id="startDate" value="{{$events->startDate}}" class="col-sm-7" name= "startDate">
                            </div>



                            <div class="form-group">
                                <label for="endDate" class="text-light col-sm-4 control-label">Registration End</label>
                                <input type="date" id="endDate" value="{{$events->endDate}}" class="col-sm-7" name= "endDate">
                            </div>


                            <div class= "col-sm-12 col-sm-offset-3">
                                <button type="submit" class="btn btn-danger btn-block">UPDATE</button>
                            </div>

                        </form>
                        <!-- /form -->



                    </div>
                </div>
            </div>
        </div>
    </div>
    </body>
    </html>

@stop
