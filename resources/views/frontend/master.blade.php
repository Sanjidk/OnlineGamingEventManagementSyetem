
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



    <div class="container">

        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            Menu
            <i class="fas fa-bars ml-1"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav text-uppercase ml-auto">
                <li class="nav-item"><a class="nav-link js-scroll-trigger" href="{{route('event.form')}}">CREATE EVENT FORM</a></li>
                <li class="nav-item"><a class="nav-link js-scroll-trigger" href="{{route('event.list')}}">VIEW EVENT LIST</a></li>
                <li class="nav-item"><a class="nav-link js-scroll-trigger" href="{{route('joinenevt.form')}}">JOIN EVENT FORM</a></li>
                <li class="nav-item"><a class="nav-link js-scroll-trigger" href="{{route('participator.list')}}">PARTICIPATOR LIST</a></li>
                <li class="nav-item"><a class="nav-link js-scroll-trigger" href="">GAME DESCRIPTION</a></li>
                <li class="nav-item"><a class="nav-link js-scroll-trigger" href="{{route('blog.form')}}">BLOG WRITING</a></li>
                <li class="nav-item"><a class="nav-link js-scroll-trigger" href="{{route('blog.list')}}">VIEW BLOG</a></li>

                @auth()


                <li class="nav-item">
                    <a class="nav-link js-scroll-trigger" href="{{route('user.logout')}}">
                        <button type="button" class="btn btn-outline-danger">
                            <span>{{auth()->user()->name}}</span>
                        </button>
                    </a>
                </li>

                @else
                @endauth

            </ul>
        </div>
    </div>
</nav>


<!-- Masthead-->
<header class="masthead">
    <div class="container">
        <br>
        <br>
        <div class="masthead-subheading">.</div>
        <div class="masthead-subheading">.</div>
    </div>
</header>



<!-- PRODUCT-->
<section class="page-section bg-light" id="portfolio">
    <div class="container">
        <div class="text-center">
            <h2 class="section-heading text-uppercase">PRODUCT LIST</h2>
            <h3 class="section-subheading text-dark">
                If you want to buy any product,
                click on that product and fillup order table.
                Thank You
            </h3>
        </div>
        <div class="row">
            <div class="col-lg-4 col-sm-6 mb-4">
                <div class="portfolio-item">
                    <img class="img-fluid" src="{{asset("frontend")}}/assets/img/portfolio/tshirt.png" alt="" />
                    </a>
                    <div class="portfolio-caption">
                        <div class="portfolio-caption-heading">JERSEY</div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-sm-6 mb-4">
                <div class="portfolio-item">
                    <img class="img-fluid" src="{{asset("frontend")}}/assets/img/portfolio/ring.jpg" alt="" />
                    </a>
                    <div class="portfolio-caption">
                        <div class="portfolio-caption-heading">GaminG RinG</div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-sm-6 mb-4">
                <div class="portfolio-item">
                    <img class="img-fluid" src="{{asset("frontend")}}/assets/img/portfolio/cap.jpg" alt="" />
                    </a>
                    <div class="portfolio-caption">
                        <div class="portfolio-caption-heading">CAP</div>
                    </div>
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
<script src="{{asset("frontend")}}/assets/mail/jqBootstrapValidation.js"></script>
<script src="{{asset("frontend")}}/assets/mail/contact_me.js"></script>
<!-- Core theme JS-->
<script src="{{asset("frontend")}}/js/scripts.js"></script>
</body>
</html>
