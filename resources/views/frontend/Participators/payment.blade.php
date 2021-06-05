
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="robots" content="noindex, nofollow">

    <title> PAYMENT FORM </title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <style type="text/css">
        body {
            margin: 0;
            padding: 0;
            background-color: #355ce9;
            height: 100vh;
        }

        #login .container #login-row #login-column #login-box {
            margin-top: 05px;
            max-width: 550px;
            height: 550px;
            border: 1px solid #f30f0f;
            background-color: #0c0b0e;
        }    </style>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>

</head>

<body>

{{--<a class="nav-link js-scroll-trigger" href="{{route('frontend.master')}}">--}}
{{--    <button type="submit" class="btn btn-danger">--}}
{{--        <i class="fas fa-power-off text-light"></i>--}}
{{--        GO TO DASHBOARD--}}
{{--    </button>--}}
{{--</a>--}}



<div id="login">
    <div class="container">
        <div id="login-row" class="row justify-content-center align-items-center">
            <div id="login-column" class="col-md-6">
                <div id="login-box" class="col-md-12">


                    <form class="form-horizontal" role="form" action="{{route('user.payment.new')}}" method="post">
                        @csrf
                        <h2 class="text-center" style="color: #dee9f8 ">PAYMENT METHOD</h2>

                        @if(Session()->has('message'))
                            <div style="color:green" class="alert alert-success"> {{ Session()->get('message') }}</div>
                        @endif

                        <br>

                        <div class="form-group">
                            <label for="part_name" class="text-light col-sm-4 control-label">Participator's Name</label>
                            <input type="text" readonly value="{{auth()->user()->name}}" id="part_name" class="col-sm-7" name="part_name" >
                        </div>



                        <div class="form-group">
                            <label for="event_id" class="text-light col-sm-4 control-label">Event Name</label>
                                <input type="text" readonly value="{{$payment->eventName}}" id="event_id" class="col-sm-7" name="eventName" >
                        </div>
                        <input type="text" hidden readonly value="{{$payment->id}}" id="event_id" name= "event_id">







                        <div class="form-group">
                            <label for="manager_id" class="text-light col-sm-4 control-label">Event Manager</label>
                            <input type="text" class="col-sm-7" id="manager_id" readonly value="{{$payment->manager_id}}" name="manager_id">
                        </div>






                        <div class="form-group">
                            <label for="phone" class="text-light col-sm-4 control-label">Participators Bkash No</label>
                                <input type="number" id="phone" value="" class="col-sm-7" name= "phone">
                                <span style="color: #13f3c3">@error('phone'){{$message}}@enderror</span>
                        </div>






                        <div class="form-group">
                            <label for="transaction" class="text-light col-sm-4 control-label">Transaction ID</label>
                                <input type="text" id="transaction" value="" class="col-sm-7" name= "transaction">
                                <span style="color: #13f3c3">@error('transaction'){{$message}}@enderror</span>
                        </div>





                        <div class="form-group">
                            <label for="fee" class="text-light col-sm-4 control-label">Event Amount [BDT]</label>
                                <input type="text" id="fee"  value="{{$payment->fee}} BDT" readonly class="col-sm-7" >
                        </div>

                        <input type="text" id="fee" hidden value="{{$payment->fee}}" readonly placeholder="BDT" name= "fee">




                        <center>
                            <h3 style="color: whitesmoke">
                                Pay the Event Fee {{$payment->fee}} BDT To this Bkash Personal number {{$payment->bkash}}
                            </h3>
                        </center>

                        <button type="submit" class="btn btn-danger btn-block">REQUEST FOR JOIN</button>

                    </form>



                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>
