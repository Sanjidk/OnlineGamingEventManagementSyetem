
<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="utf-8">
    <!-- Enjoy! -->
    <title>Registration</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet">
    <style type="text/css">
        body {
            background: url('https://wallpaperaccess.com/full/740798.jpg') fixed;
            background-size: cover;
        }


        *[role="form"] {
            max-width: 550px;
            padding: 50px;
            margin: 0 auto;
            border-radius: 0.2em;
            background-color: #012c4a;
        }

        *[role="form"] h2 {
            font-family: 'Open Sans' , sans-serif;
            font-size: 30px;
            font-weight: 600;
            color: #fff200;
            margin-top: 5%;
            text-align: center;
            text-transform: uppercase;
            letter-spacing: 4px;
        }


    </style>
    <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</head>


<body>
<link href="http://netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="http://netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<script src="http://code.jquery.com/jquery-2.1.3.min.js"></script>
<!------ Include the above in your HEAD tag ---------->



<div class="container">

    <form class="form-horizontal" role="form" action="{{route('m.payment')}}" method="post" enctype="multipart/form-data">


        @csrf

        <h2>PAYMENT FOR CREATE EVENT</h2>

        @if(Session()->has('message'))
            <div style="color:green" class="alert alert-success"> {{Session()->get('message')}}</div>
        @endif


        <div class="form-group">
            <label for="contain" class="text-light col-sm-3 control-label">Maximum Participators</label>
            <div class="col-sm-9">
                <input type="number" id="contain" class="form-control" name= "contain" >
            </div>
        </div>

        <div class="form-group">
            <label for="fee" class="text-light col-sm-3 control-label">Event Fee</label>
            <div class="col-sm-9">
                <input type="number" id="fee" class="form-control" name= "fee" >

            </div>
        </div>
        <div class="form-group">
            <label for="cost" class="text-light col-sm-3 control-label">Admin Fee</label>
            <div class="col-sm-9">
                <input type="number" id="cost" class="form-control" name= "cost" >
            </div>
        </div>



        <div class="form-group">
            <label for="eventName" class="text-light col-sm-3 control-label">Event Name</label>
            <div class="col-sm-9">
                <input type="text" id="eventName" class="form-control" name= "eventName" >
            </div>
        </div>



        <div class="form-group">
            <label for="manager" class="text-light col-sm-3 control-label">Managers Name</label>
            <div class="col-sm-9">
                <input type="text" id="manager" class="form-control" name= "manager" >
            </div>
        </div>




        <div class="form-group">
            <label for="phone" class="text-light col-sm-3 control-label">Phone Number</label>
            <div class="col-sm-9">
                <input type="number" id="phone" class="form-control " name= "phone" >
            </div>
        </div>



        <div class= "col-sm-9 col-sm-offset-3">
            <button type="submit" class="btn btn-danger btn-block">REQUEST EVENT</button>
        </div>

    </form> <!-- /form -->
</div> <!-- ./container -->

</body>
</html>
