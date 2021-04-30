
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

<br>

<a class="nav-link js-scroll-trigger" href="{{route('home')}}">
    <button type="submit" class="btn btn-danger">
        <i class="fas fa-power-off text-light"></i>
        GO TO HOME
    </button>
</a>


<div class="container">

    <form class="form-horizontal" role="form" action="{{route('event')}}" method="post">


        @csrf
        <h2>CREATE EVENT</h2>

        @if(Session()->has('message'))
            <div style="color:green" class="alert alert-success"> {{ Session()->get('message') }}</div>
        @endif


        <div class="form-group">
            <label for="orgName" class="text-light col-sm-3 control-label">Organization Name</label>
            <div class="col-sm-9">
                <input type="text" id="orgName" placeholder="Organization Name" class="form-control" name= "orgName">
                <span style="color: #13f3c3">@error('orgName'){{$message}}@enderror</span>
            </div>
        </div>


        <div class="form-group">
            <label for="manager" class="text-light col-sm-3 control-label">Managers Name</label>
            <div class="col-sm-9">
                <input type="text" id="manager" placeholder="Managers Name" class="form-control" name= "manager">
                <span style="color: #13f3c3">@error('manager'){{$message}}@enderror</span>
                <span class="text-light help-block">* Same as Registration Name</span>
            </div>
        </div>


        <div class="form-group">
            <label for="email" class="text-light col-sm-3 control-label">Email</label>
            <div class="col-sm-9">
                <input type="email" id="email" placeholder="Email" class="form-control" name= "email">
                <span style="color: #13f3c3">@error('email'){{$message}}@enderror</span>
                <span class="text-light help-block">* Same as Registration Email</span>
            </div>
        </div>


        <div class="form-group">
            <label for="phone" class="text-light col-sm-3 control-label">Phone Number</label>
            <div class="col-sm-9">
                <input type="number" id="phone" placeholder="Phone Number" class="form-control " name= "phone">
                <span style="color: #13f3c3">@error('phone'){{$message}}@enderror</span>

                <span class="text-light help-block">* Same as Registration Phone Number</span>
            </div>
        </div>


        <div class="form-group">
            <label for="eventName" class="text-light col-sm-3 control-label">Event Name</label>
            <div class="col-sm-9">
                <input type="text" id="eventName" placeholder="Event Name" class="form-control" name= "eventName">
                <span style="color: #13f3c3">@error('eventName'){{$message}}@enderror</span>
                <span class="text-light help-block">* Include Game Name</span>
            </div>
        </div>


        <div class="form-group">
            <label for="place" class="text-light col-sm-3 control-label">Event Location</label>
            <div class="col-sm-9">
                <input type="text" id="place" placeholder="Event Place" class="form-control" name= "place">
                <span style="color: #13f3c3">@error('place'){{$message}}@enderror</span>
                <span class="text-light help-block">* Well & Exact Location </span>

            </div>
        </div>

        <div class="form-group">
            <label for="fee" class="text-light col-sm-3 control-label">Event Fee</label>
            <div class="col-sm-9">
                <input type="text" id="fee" placeholder="Event Fee" class="form-control" name= "fee">
                <span style="color: #13f3c3">@error('fee'){{$message}}@enderror</span>

            </div>
        </div>

        <div class="form-group">
            <label for="eventDate" class="text-light col-sm-3 control-label">Event Date</label>
            <div class="col-sm-9">
                <input type="date" id="eventDate" placeholder="Event Date" class="form-control" name= "eventDate">
                <span style="color: #13f3c3">@error('eventDate'){{$message}}@enderror</span>

            </div>
        </div>

        <div class="form-group">
            <label for="startDate" class="text-light col-sm-3 control-label">Reg Start</label>
            <div class="col-sm-9">
                <input type="date" id="startDate" placeholder="Registration Start" class="form-control " name= "startDate">
                <span style="color: #13f3c3">@error('startDate'){{$message}}@enderror</span>
            </div>
        </div>



        <div class="form-group">
            <label for="endDate" class="text-light col-sm-3 control-label">Reg End</label>
            <div class="col-sm-9">
                <input type="date" id="endDate" placeholder="Registration End" class="form-control" name= "endDate">
                <span style="color: #13f3c3">@error('endDate'){{$message}}@enderror</span>
            </div>
        </div>


        <div class="form-group">
            <label for="food" class="text-light col-sm-3 control-label">Lunch Item</label>
            <div class="col-sm-9">
                <input type="text" id="food" placeholder="Lunch Item" class="form-control" name= "food">
                <span style="color: #13f3c3">@error('food'){{$message}}@enderror</span>
                <span class="text-light help-block">* Include all item</span>

            </div>
        </div>




        <div class="form-group">
            <label for="banner" class="text-light col-sm-3 control-label">Event Banner</label>
            <div class="col-sm-9">
                <input type="text" id="banner" placeholder="Event Banner" class="form-control" name= "banner">
                <span style="color: #13f3c3">@error('banner'){{$message}}@enderror</span>
                <span class="text-light help-block">* In banner, include all management photo</span>

            </div>
        </div>

        <!-- /.form-group -->
        <div class="form-group">
            <div class="col-sm-6 col-sm-offset-3">
                <span class="text-light help-block">* Please, fillup all requirement </span>
            </div>
        </div>


        <div class= "col-sm-9 col-sm-offset-3">
            <button type="submit" class="btn btn-danger btn-block">CREATE EVENT</button>
        </div>

    </form> <!-- /form -->
</div> <!-- ./container -->

</body>
</html>
