
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="robots" content="noindex, nofollow">

    <title> LOGIN FORM </title>
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
            margin-top: 120px;
            max-width: 600px;
            height: 360px;
            border: 1px solid #f30f0f;
            background-color: #f6f2f8;
        }
        #login .container #login-row #login-column #login-box #login-form {
            padding: 20px;
        }
        #login .container #login-row #login-column #login-box #login-form #register-link {
            margin-top: -85px;
        }    </style>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>

</head>

<body>
<a class="nav-link js-scroll-trigger" href="{{route('home')}}">
    <button type="submit" class="btn btn-danger">
        <i class="fas fa-power-off text-light"></i>
        GO TO HOME
    </button>
</a>



<div id="login">
    <div class="container">
        <div id="login-row" class="row justify-content-center align-items-center">
            <div id="login-column" class="col-md-6">
                <div id="login-box" class="col-md-12">
                    <form id="login-form" class="form" action="{{route('user.login')}}" method="post">

                        @csrf


                        <h3 class="text-center text-info">LogIn Form</h3>

                        @if(Session()->has('message'))
                            <div style="color:green" class="alert alert-success"> {{ Session()->get('message') }}</div>
                        @endif


                        <div class="form-group">
                            <label for="email" class="text-info">Email:</label><br>
                            <input type="email" name="email" id="email" class="form-control">
                            <span style="color: #790505">@error('email'){{$message}}@enderror</span>

                        </div>
                        <div class="form-group">
                            <label for="password" class="text-info">Password:</label><br>
                            <input type="password" name="password" id="password" class="form-control">
                            <span style="color: #790505">@error('password'){{$message}}@enderror</span>

                        </div>
                        <div class="form-group">
                            <label for="remember-me" class="text-info"><span>Remember me</span> <span><input id="remember-me" name="remember-me" type="checkbox"></span></label><br>
                            <button type="submit" class="btn btn-primary">
                                <i class="fas fa-power-off text-light"></i>
                                LOGIN
                            </button>
                        </div>

                        <div id="register-link" class="text-right">
                            <a href="{{route('reg.form')}}" class="text-info">Register here</a>
                        </div>


                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>


