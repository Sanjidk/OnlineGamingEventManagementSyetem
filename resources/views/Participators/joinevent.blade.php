
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
            background: url('https://images.alphacoders.com/624/thumb-1920-624705.jpg') fixed;
            background-size: cover;
        }

        *[role="form"] {
            max-width: 530px;
            padding: 15px;
            margin: 0 auto;
            border-radius: 0.3em;
            background-color: #290101;
        }

        *[role="form"] h2 {
            font-family: 'Open Sans' , sans-serif;
            font-size: 40px;
            font-weight: 600;
            color: #f6f6f6;
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
    <br>

    <form class="form-horizontal" role="form" action="{{route('register')}}" method="post">
        @csrf
        <h2>Registration</h2>

        @if(Session()->has('message'))
            <div style="color:green" class="alert alert-success"> {{ Session()->get('message') }}</div>
        @endif



        <div class="form-group">
            <label for="type" class="text-light col-sm-3 control-label">Choose Event</label>
            <div class="col-sm-9">
                <select  type="text" name="type" id="name" class="input-text" placeholder="Fill user name" required pattern="">
                    <option value="">Choose User Type</option>
                    <option value="Manager">Manager</option>
                    <option value="Participator">Participator</option>
                </select>
            </div>
        </div>



        <div class="form-group">
            <label for="name" class="text-light col-sm-3 control-label">Participator Name</label>
            <div class="col-sm-9">
                <input type="text" id="name" placeholder="User Name" class="form-control" name= "name">
                <span style="color: #13f3c3">@error('name'){{$message}}@enderror</span>
            </div>
        </div>


        <div class="form-group">
            <label for="email" class="text-light col-sm-3 control-label">Participator Email</label>
            <div class="col-sm-9">
                <input type="email" id="email" placeholder="Email" class="form-control" name= "email">
                <span style="color: #13f3c3">@error('email'){{$message}}@enderror</span>

            </div>
        </div>


        <div class="form-group">
            <label for="phone" class="text-light col-sm-3 control-label">Phone Number</label>
            <div class="col-sm-9">
                <input type="number" id="phone" placeholder="Phone Number" class="form-control " name= "phone">
                <span style="color: #13f3c3">@error('phone'){{$message}}@enderror</span>

                <span class="text-light help-block">Your phone number won't be disclosed anywhere </span>
            </div>
        </div>

        <div class="form-group">
            <label for="payment" class="text-light col-sm-3 control-label">Payment for Event</label>
            <div class="col-sm-9">
                <input type="text" id="payment" placeholder="Email" class="form-control" name= "payment">
                <span style="color: #13f3c3">@error('payment'){{$message}}@enderror</span>

            </div>
        </div>


        <!-- /.form-group -->
        <div class="form-group">
            <div class="col-sm-6 col-sm-offset-3">
                <span class="text-light help-block">* Fillup Carefully </span>
            </div>
        </div>


        <div class="col-sm-9 col-sm-offset-3">
            <button type="submit" class="btn btn-danger btn-block">JOIN EVENT</button>
        </div>


    </form> <!-- /form -->
</div> <!-- ./container -->

</body>
</html>
