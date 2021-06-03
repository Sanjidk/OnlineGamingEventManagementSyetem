<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Online Gaming Event Management System</title>

    <!-- Custom fonts for this template-->
    <link href="{{asset("muster")}}/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="{{asset("muster")}}/css/sb-admin-2.min.css" rel="stylesheet">
</head>

<body id="page-top">

<!-- Page Wrapper -->
<div id="wrapper">

    <!-- Sidebar -->
@include('frontend.partial.sidebar')
<!-- End of Sidebar -->






    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

        <!-- Main Content -->
        <div id="content">






            <!-- Topbar -->
        @include('frontend.partial.header')
        <!-- End of Topbar -->




            <!-- Begin Page Content -->
            <div class="container-fluid">

                @if(Session()->has('success'))
                    <div style="color:green" class="alert alert-success"> {{ Session()->get('success') }}</div>
                @endif


                <div>

                    <h6 class="m-0 font-weight-bold text-dark"> Online Trending Games & Details</h6>

                </div>

                <br>

                <!-- Content Row -->
                <div class="row">

                    <!-- Content Column -->
                    <div class="col-lg-6 mb-4">

                        <!-- Illustrations -->
                        <div class="card shadow mb-4">
                            <div class="card-header py-3">
                                <h6 class="m-0 font-weight-bold text-primary">Garena Free Fire</h6>
                            </div>
                            <div class="card-body">
                                <div class="text-center">
                                    <img class="img-fluid px-3 px-sm-4 mt-3 mb-4" style="width: 25rem;"
                                         src="photo/game/FreeFire.jpg" alt="...">
                                </div>
                                <p>Garena Free Fire is a battle royale game,
                                    developed by 111 Dots Studio and published by Garena for Android and iOS.
                                    It became the most downloaded mobile game globally in 2019.
                                    The game received the award for the "Best Popular Vote Game" by the Google Play Store in 2019.</p>
                                <a target="_blank" rel="nofollow" href="https://en.wikipedia.org/wiki/Garena_Free_Fire">More Info &rarr;</a>
                            </div>
                        </div>

                    </div>

                    <div class="col-lg-6 mb-4">

                        <!-- Illustrations -->
                        <div class="card shadow mb-4">
                            <div class="card-header py-3">
                                <h6 class="m-0 font-weight-bold text-primary">Player Unknown's Battle Grounds</h6>
                            </div>
                            <div class="card-body">
                                <div class="text-center">
                                    <img class="img-fluid px-3 px-sm-4 mt-3 mb-4" style="width: 25rem;"
                                         src="photo/game/Pubg.jpg" alt="...">
                                </div>
                                <p> PlayerUnknown's Battlegrounds (PUBG) is an online multiplayer battle royale game
                                    developed and published by PUBG Corporation, a subsidiary of South Korean video game company Bluehole.
                                    The game is based on previous mods that were created by Brendan "PlayerUnknown" Greene for other games,
                                    inspired by the 2000 Japanese film Battle Royale.
                                </p>
                                <a target="_blank" rel="nofollow" href="https://en.wikipedia.org/wiki/PlayerUnknown%27s_Battlegrounds">More Info &rarr;</a>
                            </div>
                        </div>

                    </div>




                </div>

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- End of Main Content -->






        <!-- Footer -->
    @include('frontend.partial.footer')
    <!-- End of Footer -->






    </div>
    <!-- End of Content Wrapper -->

</div>
<!-- End of Page Wrapper -->






<!-- Bootstrap core JavaScript-->
<script src="{{asset("muster")}}/vendor/jquery/jquery.min.js"></script>
<script src="{{asset("muster")}}/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Core plugin JavaScript-->
<script src="{{asset("muster")}}/vendor/jquery-easing/jquery.easing.min.js"></script>

<!-- Custom scripts for all pages-->
<script src="{{asset("muster")}}/js/sb-admin-2.min.js"></script>

<!-- Page level plugins -->
<script src="{{asset("muster")}}/vendor/chart.js/Chart.min.js"></script>

<!-- Page level custom scripts -->
<script src="{{asset("muster")}}/js/demo/chart-area-demo.js"></script>
<script src="{{asset("muster")}}/js/demo/chart-pie-demo.js"></script>

</body>

</html>
