<ul class="navbar-nav bg-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a style="color: #0118ea" class=" sidebar-brand bg-light d-flex align-items-center justify-content-center">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-gamepad"></i>
        </div>
        <div class="sidebar-brand-text mx-1">OGEMS</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">



    <!-- Nav Item - Charts -->
    <li class="nav-item">
        <a class="nav-link" href="{{route('mastered')}}">
            <i class="fas fa-fw fa-adjust"></i>
            <span> Dashboard </span></a>
    </li>


    <li class="nav-item">
        <a class="nav-link" href="{{route('all.registered')}}">
            <i class="fas fa-fw fa-save"></i>
            <span> All Users </span></a>
    </li>


    <li class="nav-item">
        <a class="nav-link" href="{{route('income.list')}}">
            <i class="fas fa-fw fa-wallet"></i>
            <span> My Income </span></a>
    </li>


    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">


    <li class="nav-item">
        <a class="nav-link" href="{{route('all.req.view')}}">
            <i class="fas fa-fw fa-random"></i>
            <span>All Request For Create Event</span></a>
    </li>


    <li class="nav-item">
        <a class="nav-link" href="{{route('all.eventreg')}}">
            <i class="fas fa-fw fa-chart-area"></i>
            <span>View All Event's</span></a>
    </li>




    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">


    <!-- Nav Item - Charts -->


    <li class="nav-item">
        <a class="nav-link" href="{{route('all.blogg')}}">
            <i class="fas fa-fw fa-table"></i>
            <span>View Blog</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">




</ul>
