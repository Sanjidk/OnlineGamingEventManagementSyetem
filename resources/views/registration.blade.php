
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <!-- Enjoy! -->
    <title>Registration</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="http://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet">
    <style type="text/css">
        body {
            background: url('https://wallpaperaccess.com/full/7445.jpg') fixed;
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
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</head>
<body>
<link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-2.1.3.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<div class="container">
    <br>
    <form class="form-horizontal" role="form">
        <h2>Registration</h2>
        <div class="form-group">
            <label for="userName" class="text-light col-sm-3 control-label">User Name</label>
            <div class="col-sm-9">
                <input type="text" id="userName" placeholder="User Name" class="form-control" autofocus>
            </div>
        </div>
        <div class="form-group">
            <label for="address" class="text-light col-sm-3 control-label">Address</label>
            <div class="col-sm-9">
                <input type="text" id="address" placeholder="Address" class="form-control" autofocus>
            </div>
        </div>
        <div class="form-group">
            <label for="email" class="text-light col-sm-3 control-label">Email</label>
            <div class="col-sm-9">
                <input type="email" id="email" placeholder="Email" class="form-control" name= "email">
            </div>
        </div>
        <div class="form-group">
            <label for="password" class="text-light col-sm-3 control-label"> Password</label>
            <div class="col-sm-9">
                <input type="password" id="password" placeholder="Password" class="form-control">
            </div>
        </div>
        <div class="form-group">
            <label for="password" class="text-light col-sm-3 control-label">Confirm Password</label>
            <div class="col-sm-9">
                <input type="password" id="password" placeholder="Password" class="form-control">
            </div>
        </div>
        <div class="form-group">
            <label for="birthDate" class="text-light col-sm-3 control-label">Date of Birth</label>
            <div class="col-sm-9">
                <input type="date" id="birthDate" class="form-control">
            </div>
        </div>
        <div class="form-group">
            <label for="phoneNumber" class="text-light col-sm-3 control-label">Phone number </label>
            <div class="col-sm-9">
                <input type="phoneNumber" id="phoneNumber" placeholder="Phone number" class="form-control">
                <span class="text-light help-block">Your phone number won't be disclosed anywhere </span>
            </div>
        </div>



       <!-- /.form-group -->
        <div class="form-group">
            <div class="col-sm-6 col-sm-offset-3">
                <span class="text-light help-block">*Required fields</span>
            </div>
        </div>
        <div class="col-sm-9 col-sm-offset-3">
        <button type="submit" class="btn btn-danger btn-block">REGISTER</button><br>
        </div>

        <div id="register-link" class="text-right">
            <a href="{{route('login.form')}}" class="text-primary">Go Back to Login</a>
        </div>



    </form> <!-- /form -->
</div> <!-- ./container -->
<script type="text/javascript">
    $(function(){
        $.validator.setDefaults({
            highlight: function(element){
                $(element)
                    .closest('.form-group')
                    .addClass('has-error')
            },
            unhighlight: function(element){
                $(element)
                    .closest('.form-group')
                    .removeClass('has-error')
            }
        });

        $.validate({
            rules:
                {
                    password: "required",
                    birthDate: "required",

                    },
                    email: {
                        required: true,
                        email: true
                    }
                },
            messages:{
                email: {
                    required: true,
                    email: true
                }
            },
            password: {
                required: " Please enter password"
            },
            birthDate: {
                required: " Please enter birthdate"
            },
            email: {
                required: ' Please enter email',
                email: ' Please enter valid email'
            },
        }

    });
    });
</script>
</body>
</html>
