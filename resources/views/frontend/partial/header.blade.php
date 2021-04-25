<!-- partial:partials/_navbar.html -->
<nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row default-layout-navbar">
    <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
        <a class="navbar-brand brand-logo" href="index-2.html"><img src="pic/logo1.jpg" alt="logo"/></a>
    </div>



    @auth()




    <div class="navbar-menu-wrapper d-flex align-items-stretch">


        <ul class="navbar-nav navbar-nav-right">
            <li class="nav-item">
                <button class="btn-info">
            <span>{{auth()->user()->name}}</span>
                </button>
            </li>

            <li class="nav-item"><a class="nav-link js-scroll-trigger" href="{{route('user.logout')}}">
                    <button type="submit" class="btn btn-dark btn-block">
                        <i class="fas fa-power-off text-light"></i>
                        Logout
                    </button>
                </a>
            </li>
        </ul>
    </div>

        @else

    @endauth

</nav>
