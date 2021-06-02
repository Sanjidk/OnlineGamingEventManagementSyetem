
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Online Gaming Event Management System</title>
    <link rel="icon" type="{{asset("frontend")}}/image/x-icon" href="{{asset("frontend")}}/assets/img/favicon.ico" />
    <!-- Font Awesome icons (free version)-->
    <script src="https://use.fontawesome.com/releases/v5.15.1/js/all.js" crossorigin="anonymous"></script>
    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="{{asset("frontend")}}/css/styles.css" rel="stylesheet" />
</head>
<body id="page-top">


<!-- Navigation-->
<nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">

    @if(Session()->has('success'))
        <div style="color:green" class="alert alert-success"> {{ Session()->get('success') }}</div>
    @endif







        <div class="collapse navbar-collapse" id="navbarResponsive">




            </ul>
        </div>
        </div>
</nav>



    <section class="page-section" id="contact">


    <div class="container">
        <div class="text-center">
            <h2 class="section-heading text-uppercase">BLOG WRITTING</h2>
            <h3 class="section-subheading text-light">
                If you are interested to share your experience about any game.
                You can write there include your name.
                Thank You</h3>
        </div>


        <form id="contactForm" name="sentMessage" novalidate="novalidate" action="{{route('saving')}}" method="post">

            @csrf

            <div class="row align-items-stretch mb-3">
                <label for="name" class="text-light col-sm-3 control-label">Your Name</label>
                <div class="col-sm-9">
                    <input type="text" id="name" placeholder="User Name" class="form-control" name= "name">
                    <span style="color: #13f3c3">@error('name'){{$message}}@enderror</span>
                </div>
            </div>

            <div class="row align-items-stretch mb-3">
                <label for="game" class="text-light col-sm-3 control-label">Game Name</label>
                <div class="col-sm-9">
                    <input type="text" id="game" placeholder="Game Name" class="form-control" name= "game">
                    <span style="color: #13f3c3">@error('game'){{$message}}@enderror</span>
                </div>
            </div>


            <div class="row align-items-stretch mb-5">
                <div class="col-md-12">
                    <div class="form-group form-group-textarea mb-md-0">
                        <textarea class="form-control" id="message" name= "message" placeholder="Your Experience About Game........." data-validation-required-message="Please enter a message."></textarea>
                        <p class="help-block text-danger"></p>
                    </div>
                </div>
            </div>


            <div class="text-center">
                <div id="success"></div>
                <button class="btn btn-primary btn-xl text-uppercase" id="sendMessageButton" type="submit">SUBMIT</button>
            </div>


        </form>
    </div>
</section>
</body>
</html>
