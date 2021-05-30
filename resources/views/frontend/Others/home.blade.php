
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Online Gaming Event Management System</title>
    <link rel="icon" type="{{asset("home")}}/image/x-icon" href="{{asset("home")}}/assets/img/favicon.ico" />
    <!-- Font Awesome icons (free version)-->
    <script src="https://use.fontawesome.com/releases/v5.15.1/js/all.js" crossorigin="anonymous"></script>
    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="{{asset("home")}}/css/styles.css" rel="stylesheet" />
</head>
<body id="page-top">


<!-- Navigation-->
<nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">

    @if(Session()->has('success'))
        <div style="color:green" class="alert alert-success"> {{ Session()->get('success') }}</div>
    @endif



    <div class="container">

        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            Menu
            <i class="fas fa-bars ml-1"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav text-uppercase ml-auto">
                <li class="nav-item"><a class="nav-link js-scroll-trigger" href="{{route('login.form')}}">LOGIN</a></li>
{{--                <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#portfolio">GAME</a></li>--}}
                <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#about">ABOUT</a></li>
                <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#team">ADMIN</a></li>
            </ul>
        </div>
    </div>
</nav>


<!-- Masthead-->
<header class="masthead">

    <div class="container">

        <div style="color: #ffffff" class="masthead-subheading text-right">Welcome To Our Online Gaming Event</div>
    </div>
</header>

{{--<!-- PRODUCT-->--}}
{{--<section class="page-section bg-light" id="portfolio">--}}
{{--    <div class="container">--}}
{{--        <div class="text-center">--}}
{{--            <h1 class="section-heading text-uppercase">GAME NAME</h1>--}}
{{--        </div>--}}
{{--        <div class="row">--}}
{{--            <div class="col-lg-4 col-sm-6 mb-4">--}}
{{--                <div class="portfolio-item">--}}
{{--                        <img class="img-fluid" src="{{asset("home")}}/assets/img/nfs.jpg" alt="" />--}}
{{--                    </a>--}}
{{--                    <div class="portfolio-caption">--}}
{{--                        <div class="portfolio-caption-heading">NEED FOR SPEED</div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}

{{--            <div class="col-lg-4 col-sm-6 mb-4">--}}
{{--                <div class="portfolio-item">--}}
{{--                    <img class="img-fluid" src="{{asset("home")}}/assets/img/pubg.jpg" alt="" />--}}
{{--                    </a>--}}
{{--                    <div class="portfolio-caption">--}}
{{--                        <div class="portfolio-caption-heading">PLAYER UNKNOWN BATTLE GROUND</div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}

{{--            <div class="col-lg-4 col-sm-6 mb-4">--}}
{{--                <div class="portfolio-item">--}}
{{--                        <img class="img-fluid" src="{{asset("home")}}/assets/img/fire.jpg" alt="" />--}}
{{--                    </a>--}}
{{--                    <div class="portfolio-caption">--}}
{{--                        <div class="portfolio-caption-heading">FREE FIRE</div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</section>--}}




<!-- About-->
<section class="page-section" id="about">
    <div class="container">
        <div class="text-center">
            <h2 class="section-heading text-uppercase">About</h2>
        </div>
        <ul class="timeline">
            <li>
                <div class="timeline-image"><img class="rounded-circle img-fluid" src="{{asset("home")}}/img/about/1.jpg" alt="" /></div>
                <div class="timeline-panel">
                    <div class="timeline-heading">
                        <h3 class="subheading">Online Gaming Event</h3>
                        <h4>2021</h4>
                    </div>
                    <div class="timeline-body"><p class="text-muted">
                            This is totally Gaming event website.
                            Everyone can join event. And before joining, everyone need to registration & login first.
                            Then they can join any event by fill up some statement.
                            Also there has a BLOG option that any user can write BLOG about any game.
                            So, this website is very easy to use and helpful for users.

                            Thank You. Stay Home, Stay Safe.
                        </p></div>
                </div>
            </li>
        </ul>
    </div>
</section>


<!-- ADMIN-->
<section class="page-section bg-light" id="team">
    <div class="container">
        <div class="text-center">
            <h2 class="section-heading text-uppercase">ADMIN</h2>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="team-member">
                    <img class="mx-auto rounded-circle" src="pic/sanjid.JPG" alt="" />
                    <h4>Mahmud Sanjid</h4>
                    <p class="text-dark ">Developer</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Footer-->
<footer style="color: blue" class="footer py-4">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 text-lg-left">@Online Gaming Event Management Website 2021 by SANJID</div>
        </div>
    </div>
</footer>

<!-- Bootstrap core JS-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
<!-- Third party plugin JS-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
<!-- Contact form JS-->
<script src="{{asset("home")}}/assets/mail/jqBootstrapValidation.js"></script>
<script src="{{asset("home")}}/assets/mail/contact_me.js"></script>
<!-- Core theme JS-->
<script src="{{asset("home")}}/js/scripts.js"></script>
</body>
</html>
