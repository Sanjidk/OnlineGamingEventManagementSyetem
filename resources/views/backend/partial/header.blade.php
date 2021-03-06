



<nav class="navbar navbar-expand navbar-light bg-info topbar mb-4 static-top shadow">

    <!-- Sidebar Toggle (Topbar) -->
    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
        <i class="fa fa-bars"></i>
    </button>



    <div class="text-light">

        <span class="text-uppercase">ADMIN</span>
    </div>



    <!-- Topbar Navbar -->
    <ul class="navbar-nav ml-auto">




        {{--                   topbar divider--}}
        <div class="topbar-divider d-none d-sm-block"></div>
    {{--                    end--}}



    <!-- Nav Item - User Information -->



        <li class="nav-item dropdown no-arrow">
            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
               data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <button type="button" class="btn btn-danger">
                    <span>admin</span>
                </button>
            </a>



            <!-- Dropdown - User Information -->
            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                 aria-labelledby="userDropdown">
{{--                <a class="dropdown-item" href="#">--}}
{{--                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>--}}
{{--                    Profile--}}
{{--                </a>--}}


{{--                <div class="dropdown-divider"></div>--}}


                <a class="dropdown-item" href="{{route('user.logout')}}" data-toggle="modal" data-target="#logoutModal">
                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                    Logout
                </a>


            </div>
        </li>



    </ul>

</nav>






<!-- Logout Modal-->
<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
     aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">??</span>
                </button>
            </div>
            <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
            <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                <a class="btn btn-primary" href="{{route('user.logout')}}">Logout</a>
            </div>
        </div>
    </div>
</div>
