
<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Online Gaming Event Management System</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="{{asset("backend")}}/vendors/iconfonts/font-awesome/css/all.min.css">
  <link rel="stylesheet" href="{{asset("backend")}}/vendors/css/vendor.bundle.base.css">
  <link rel="stylesheet" href="{{asset("backend")}}/vendors/css/vendor.bundle.addons.css">
  <!-- inject:css -->
  <link rel="stylesheet" href="{{asset("backend")}}/css/style.css">
  <!-- endinject -->
</head>

<body>
  <div class="container-scroller">


  @include('backend.partial.header')



    <!-- partial -->
    <div class="container-fluid page-body-wrapper">



      <!-- partial:partials/_settings-panel.html -->
      <div class="theme-setting-wrapper">
        <div id="settings-trigger"><i class="fas fa-fill-drip"></i></div>
        <div id="theme-settings" class="settings-panel">
          <i class="settings-close fa fa-times"></i>
          <p class="settings-heading">SIDEBAR SKINS</p>
          <div class="sidebar-bg-options selected" id="sidebar-light-theme"><div class="img-ss rounded-circle bg-light border mr-3"></div>Light</div>
          <div class="sidebar-bg-options " id="sidebar-dark-theme"><div class="img-ss rounded-circle bg-dark border mr-3"></div>Dark</div>
          <p class="settings-heading mt-2">HEADER SKINS</p>
          <div class="color-tiles mx-0 px-4">
            <div class="tiles primary"></div>
            <div class="tiles success"></div>
            <div class="tiles warning"></div>
            <div class="tiles danger"></div>
            <div class="tiles info"></div>
            <div class="tiles dark"></div>
            <div class="tiles default"></div>
          </div>
        </div>
      </div>


@include('backend.partial.sidebar')




<!-- partial -->
<div class="main-panel">




      <div class="content-wrapper">





      @yield('page')

        </div>
        <!-- content-wrapper ends -->



  @include('backend.partial.footer')



      </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->

  <!-- plugins:js -->
  <script src="{{asset("backend")}}/vendors/js/vendor.bundle.base.js"></script>
  <script src="{{asset("backend")}}/vendors/js/vendor.bundle.addons.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page-->
  <!-- End plugin js for this page-->
  <!-- inject:js -->
  <script src="{{asset("backend")}}/js/off-canvas.js"></script>
  <script src="{{asset("backend")}}/js/hoverable-collapse.js"></script>
  <script src="{{asset("backend")}}/js/misc.js"></script>
  <script src="{{asset("backend")}}/js/settings.js"></script>
  <script src="{{asset("backend")}}/js/todolist.js"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="{{asset("backend")}}/js/dashboard.js"></script>
  <!-- End custom js for this page-->
  </body>
</html>
