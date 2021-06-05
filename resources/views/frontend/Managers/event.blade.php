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
            height: 820px;
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



                    <form class="form-horizontal" role="form" action="{{route('event')}}" method="post" enctype="multipart/form-data">

                        @csrf

                        <h2 class="text-center" style="color: #dee9f8 ">CREATE EVENT</h2>


<br>

                        <div class="form-group">
                            <label for="manager_id" class="text-light col-sm-4 control-label">Event Manager</label>
                            <input type="text" id="manager_id" readonly class="col-sm-6" value="{{auth()->user()->name}}" name="manager_id">
                        </div>







                        <div class="form-group">
                            <label for="max_participate" class="text-light col-sm-4 control-label">Maximum Participators</label>
                            <input type="number" id="max_participate" placeholder="Total Participators" class="col-sm-6" name= "max_participate">
                            <span class="col-sm-8" style="color: #13f3c3">@error('max_participate'){{$message}}@enderror</span>
                        </div>



                        <div class="form-group">
                            <label for="admin_fee" class="text-light col-sm-4 control-label">Admin Fee [BDT]</label>
                            <input type="number" placeholder="BDT" id="admin_fee" class="col-sm-6" name= "admin_fee">
                            <span class="col-sm-8" style="color: #13f3c3">@error('admin_fee'){{$message}}@enderror</span>
                        </div>


                        <div class="form-group">
                            <label for="transac_id" class="text-light col-sm-4 control-label">Transaction ID</label>
                            <input type="text" id="transac_id" placeholder="Transaction ID" class="col-sm-6" name= "transac_id">
                            <span class="col-sm-8" style="color: #13f3c3">@error('transac_id'){{$message}}@enderror</span>
                        </div>



                        <div class="form-group">
                            <label for="bkash" class="text-light col-sm-4 control-label">Manager's Bkash Number</label>
                                <input type="number" id="bkash" placeholder="Bkash Number" class="col-sm-7" name= "bkash">
                                <span class="col-sm-8" style="color: #13f3c3">@error('bkash'){{$message}}@enderror</span>
                        </div>






                        <div class="form-group">
                            <label for="fee" class="text-light col-sm-4 control-label">Event Fee For Participator</label>
                                <input type="number" id="fee" placeholder="BDT" class="col-sm-7" name= "fee">
                                <span style="color: #13f3c3">@error('fee'){{$message}}@enderror</span>
                        </div>


                        <div class="form-group">
                            <label for="eventName" class="text-light col-sm-4 control-label">Event Name</label>
                                <input type="text" id="eventName" placeholder="Event Name" class="col-sm-7" name= "eventName">
                                <span style="color: #13f3c3">@error('eventName'){{$message}}@enderror</span>
                        </div>



                        <div class="form-group">
                            <label for="eventDate" class="text-light col-sm-4 control-label">Event Date</label>
                                <input type="date" id="eventDate" placeholder="Event Date" class="col-sm-7" name= "eventDate">
                                <span style="color: #13f3c3">@error('eventDate'){{$message}}@enderror</span>
                        </div>


                        <div class="form-group">
                            <label for="startDate" class="text-light col-sm-4 control-label">Registration Start</label>
                                <input type="date" id="startDate" placeholder="Registration Start" class="col-sm-7" name= "startDate">
                                <span style="color: #13f3c3">@error('startDate'){{$message}}@enderror</span>
                        </div>



                        <div class="form-group">
                            <label for="endDate" class="text-light col-sm-4 control-label">Registration End</label>
                                <input type="date" id="endDate" placeholder="Registration End" class="col-sm-7" name= "endDate">
                                <span style="color: #13f3c3">@error('endDate'){{$message}}@enderror</span>
                        </div>



                        <div class="form-group">
                            <label for="banner" class="text-light col-sm-4 control-label">Event Banner</label>
                                <input style="color:whitesmoke" type="file" id="banner"  class="col-sm-7" name= "banner">
                            <br>
                        </div>




                        <center>
                            <h3 style="color: whitesmoke">
                                Pay the ADMIN FEE To this Bkash Personal number 01843066666
                            </h3>
                        </center>




                        <div class= "col-sm-12 col-sm-offset-3">
                            <button type="submit" class="btn btn-danger btn-block">REQUEST FOR APPROVED</button>
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
