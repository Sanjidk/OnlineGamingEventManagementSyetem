
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="robots" content="noindex, nofollow">

    <title> REGISTRATION FORM </title>
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
            margin-top: 10px;
            max-width: 550px;
            height: 600px;
            border: 1px solid #f30f0f;
            background-color: #0c0b0e;
        }    </style>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>

</head>

<body>
<a class="nav-link js-scroll-trigger" href="{{route('login.form')}}">
    <button type="submit" class="btn btn-danger">
        <i class="fas fa-power-off text-light"></i>
        GO TO LOGIN PAGE
    </button>
</a>



<div id="login">
    <div class="container">
        <div id="login-row" class="row justify-content-center align-items-center">
            <div id="login-column" class="col-md-6">
                <div id="login-box" class="col-md-12">
                    <form class="form-horizontal" role="form" action="{{route('register')}}" method="post">
                        @csrf
                        <h2 class="text-center" style="color: #dee9f8 ">REGISTRATION FORM</h2>

                        @if(Session()->has('message'))
                            <div style="color:green" class="alert alert-success"> {{ Session()->get('message') }}</div>
                        @endif


                        <br>

                        <div class="form-group">
                            <label for="type" class="text-light col-sm-3">User Type</label>
                                <select  type="text" name="type" id="name" class="input-text" placeholder="Fill user name" required pattern="">
                                    <option value="">Choose User Type</option>
                                    <option value="Manager">Manager</option>
                                    <option value="Participator">Participator</option>
                                </select>

                        </div>



                        <div class="form-group">
                            <label for="name" class="text-light col-sm-3">User Name</label>
                                <input class="col-sm-8" type="text" id="name" placeholder="User Name" name= "name">
                                <span class="col-sm-8" style="color: #13f3c3">@error('name'){{$message}}@enderror</span>
                        </div>


                        <div class="form-group">
                            <label for="address" class="text-light col-sm-3 control-label">Address</label>
                                <input type="text" id="address" placeholder="Address" class="col-sm-8" name= "address">
                                <span class="col-sm-8" style="color: #13f3c3">@error('address'){{$message}}@enderror</span>
                        </div>


                        <div class="form-group">
                            <label for="email" class="text-light col-sm-3 control-label">Email</label>
                                <input type="email" id="email" placeholder="Email" class="col-sm-8" name= "email">
                                <span class="col-sm-8" style="color: #13f3c3">@error('email'){{$message}}@enderror</span>
                        </div>


                        <div class="form-group">
                            <label for="password" class="text-light col-sm-3 control-label">Password</label>
                                <input type="password" id="password" placeholder="Password" class="col-sm-8" name= "password">
                                <span class="col-sm-8" style="color: #13f3c3">@error('password'){{$message}}@enderror</span>
                        </div>


                        <div class="form-group">
                            <label for="birthDate" class="text-light col-sm-4 control-label">Date of Birth</label>
                                <input type="date" id="birthDate" class="col-sm-7" name= "birthDate">
                                <span class="col-sm-8" style="color: #13f3c3">@error('birthDate'){{$message}}@enderror</span>
                        </div>


                        <div class="form-group">
                            <label for="phone" class="text-light col-sm-4 control-label">Phone Number</label>
                                <input type="number" id="phone" placeholder="Phone Number" class="col-sm-7" name= "phone">
                                <span class="col-sm-8" style="color: #13f3c3">@error('phone'){{$message}}@enderror</span>
                        </div>

                        <br>



                        <!-- /.form-group -->
                        <div class="form-group">
                            <div class="col-sm-9 col-sm-offset-3">
                                <span class="text-danger help-block">*Please, Fillup Carefully.................. </span>
                            </div>
                        </div>


                        <div class="col-sm-12 col-sm-offset-3">
                            <button type="submit" class="btn btn-danger btn-block">REGISTER</button>
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


