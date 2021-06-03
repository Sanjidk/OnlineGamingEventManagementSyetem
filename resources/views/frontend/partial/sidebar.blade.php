<ul class="navbar-nav bg-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a style="color: #e00202" class=" sidebar-brand bg-light d-flex align-items-center justify-content-center">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-gamepad"></i>
        </div>
        <div class="sidebar-brand-text mx-1">OGEMS</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">



    <!-- Nav Item - Charts -->


    <li class="nav-item">
        <a class="nav-link" href="{{route('frontend.master')}}">
            <i class="fas fa-fw fa-adjust"></i>
            <span> Dashboard </span></a>
    </li>


    <li class="nav-item">
        <a class="nav-link" href="">
            <i class="fas fa-fw fa-peace"></i>
            <span> Rules </span></a>
    </li>


    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    @if(auth()->user()->type == 'Manager')
    <li class="nav-item">
        <a class="nav-link" href="{{route('event.form')}}">
            <i class="fas fa-fw fa-random"></i>
            <span>Create Event</span></a>
    </li>


    <li class="nav-item">
        <a class="nav-link" href="{{route('user.payment.requests')}}">
            <i class="fas fa-fw fa-walking"></i>
            <span>Request For Join</span></a>
    </li>
    @endif


    <li class="nav-item">
        <a class="nav-link" href="{{route('all.event.view')}}">
            <i class="fas fa-fw fa-chart-area"></i>
            <span>View All Event's</span></a>
    </li>



    <li class="nav-item">
        <a class="nav-link" href="{{route('all.event.view')}}">
            <i class="fas fa-fw fa-image"></i>
            <span>Participator List</span></a>
    </li>



    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">


    <!-- Nav Item - Charts -->
    <li class="nav-item">
        <a class="nav-link" href="{{route('blog.form')}}">
            <i class="fas fa-fw fa-chart-area"></i>
            <span>Blog Writing</span></a>
    </li>


    <li class="nav-item">
        <a class="nav-link" href="{{route('blog.list')}}">
            <i class="fas fa-fw fa-table"></i>
            <span>View Blog</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">




</ul>
