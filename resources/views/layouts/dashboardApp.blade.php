
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title') </title>
    <link rel="icon" type="image/x-icon" href="{{ asset('dashboardAsset') }}/assets/img/favicon.ico"/>
    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700' rel='stylesheet' type='text/css'>
    <link href="{{ asset('dashboardAsset') }}/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="{{ asset('dashboardAsset') }}/assets/css/plugins.css" rel="stylesheet" type="text/css" />
    <!-- END GLOBAL MANDATORY STYLES -->

    <!-- BEGIN PAGE LEVEL {{ asset('dashboardAsset') }}/plugins/CUSTOM STYLES -->
    <link href="{{ asset('dashboardAsset') }}/assets/css/support-chat.css" rel="stylesheet" type="text/css" />
    <link href="{{ asset('dashboardAsset') }}/plugins/maps/vector/jvector/jquery-jvectormap-2.0.3.css" rel="stylesheet" type="text/css" />
    <link href="{{ asset('dashboardAsset') }}/plugins/charts/chartist/chartist.css" rel="stylesheet" type="text/css">
    <link href="{{ asset('dashboardAsset') }}/assets/css/default-dashboard/style.css" rel="stylesheet" type="text/css" />    
    <link rel="stylesheet" type="text/css" href="{{ asset('dashboardAsset') }}/plugins/table/datatable/datatables.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('dashboardAsset') }}/assets/css/ecommerce/product.css">
    @yield('addetional_css')
    <!-- END PAGE LEVEL/plugins/CUSTOM STYLES -->   


</head>
<body class="default-sidebar">

    <!-- Tab Mobile View Header -->
    <header class="tabMobileView header navbar fixed-top d-lg-none">
        <div class="nav-toggle">
                <a href="javascript:void(0);" class="nav-link sidebarCollapse" data-placement="bottom">
                    <i class="flaticon-menu-line-2"></i>
                </a>
            <a href="{{ route('home') }}"> {{ env('APP_NAME') }} </a>
        </div>
        <ul class="nav navbar-nav">
            <li class="nav-item d-lg-none"> 
                <form class="form-inline justify-content-end" role="search">
                    <input type="text" class="form-control search-form-control mr-3">
                </form>
            </li>
        </ul>
    </header>
    <!-- Tab Mobile View Header -->

    <!--  BEGIN NAVBAR  -->
    <header class="header navbar fixed-top navbar-expand-sm">
        <a href="javascript:void(0);" class="sidebarCollapse d-none d-lg-block" data-placement="bottom"><i class="flaticon-menu-line-2"></i></a>
        <ul class="navbar-nav flex-row mr-lg-auto ml-lg-0  ml-auto">
            <li class="nav-item dropdown message-dropdown ml-lg-4">
                {{-- <a href="{{ route('message.index') }}" class="nav-link">
                    <span class="flaticon-mail-10"></span><span class="badge badge-primary">{{ newMessage() }}</span>
                </a> --}}
               
            </li>
        </ul>


        <ul class="navbar-nav flex-row ml-lg-auto">
            <li class="nav-item dropdown user-profile-dropdown ml-lg-0 mr-lg-2 ml-3 order-lg-0 order-1">
                <a href="javascript:void(0);" class="nav-link dropdown-toggle user" id="userProfileDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <span> <img  style="width: 30px; height: 30px; border-radius: 50%;" src="{{ asset('uploads/profile') }}/{{ Auth::user()->photo }}" alt=""> </span>
                </a>
                <div class="dropdown-menu  position-absolute" aria-labelledby="userProfileDropdown">
                    <a class="dropdown-item" href="{{ route('register') }}">
                        <i class="mr-1 flaticon-user-6"></i> <span>Add Admin</span>
                    </a>
                    <a class="dropdown-item" href="{{ route('update.admin.profile', Auth::id()) }}">
                        <i class="mr-1 flaticon-user-6"></i> <span>My Profile</span>
                    </a>
                    <form action="{{ route('logout') }}" method="POST">
                        @csrf
                        <button type="submit" class="dropdown-item">
                            <i class="mr-1 flaticon-power-button"></i> <span>Log Out</span>
                        </button>
                    </form>
                </div>
            </li>
        </ul>
    </header>
    <!--  END NAVBAR  -->

    <!--  BEGIN MAIN CONTAINER  -->
    <div class="main-container" id="container">

        <div class="overlay"></div>
        <div class="cs-overlay"></div>

        <!--  BEGIN SIDEBAR  -->

        <div class="sidebar-wrapper sidebar-theme">
            
            <div id="dismiss" class="d-lg-none"><i class="flaticon-cancel-12"></i></div>
            
            <nav id="sidebar">

                <ul class="navbar-nav theme-brand flex-row  d-none d-lg-flex">
                    
                    <li class="nav-item theme-text">
                        <a href="{{ route('home') }}" class="nav-link"> {{ env('APP_NAME') }} </a>
                    </li>
                </ul>


                <ul class="list-unstyled menu-categories" id="accordionExample">
                    
                    <li class="menu active">
                        <a href="{{ route('home') }}" class="dropdown-toggle active">
                            <div class="">
                                <i class="flaticon-computer-6 ml-3"></i>
                                <span>Dashboard</span>
                            </div>
                        </a>
                    </li>
                    <li class="menu active">
                        <a href="{{ route('update.logo') }}" class="dropdown-toggle active">
                            <div class="">
                                <i class="flaticon-map-1"></i>
                                <span>Logo</span>
                            </div>
                        </a>
                    </li>
                    <li class="menu active">
                        <a href="{{ route('banner.index') }}" class="dropdown-toggle active">
                            <div class="">
                                <i class="flaticon-map-1"></i>
                                <span>Banner</span>
                            </div>
                        </a>
                    </li>
                    <li class="menu active">
                        <a href="{{ route('category.index') }}" class="dropdown-toggle active">
                            <div class="">
                                <i class="flaticon-map-1"></i>
                                <span>Category</span>
                            </div>
                        </a>
                    </li>
                    <li class="menu active">
                        <a href="{{ route('book.index') }}" class="dropdown-toggle active">
                            <div class="">
                                <i class="flaticon-map-1"></i>
                                <span>Book</span>
                            </div>
                        </a>
                    </li>
                </ul>
            </nav>

        </div>

        <!--  END SIDEBAR  -->
        
        <!--  BEGIN CONTENT PART  -->
      


            @yield('dashboardContent')


    </div>
    <!-- END MAIN CONTAINER -->

    <!--  BEGIN FOOTER  -->

    <!-- BEGIN GLOBAL MANDATORY SCRIPTS -->
    <script src="{{ asset('dashboardAsset') }}/assets/js/libs/jquery-3.1.1.min.js"></script>
    <script src="{{ asset('dashboardAsset') }}/bootstrap/js/popper.min.js"></script>
    <script src="{{ asset('dashboardAsset') }}/bootstrap/js/bootstrap.min.js"></script>
    <script src="{{ asset('dashboardAsset') }}/plugins/scrollbar/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="{{ asset('dashboardAsset') }}/assets/js/app.js"></script>
    <script>
        $(document).ready(function() {
            App.init();
        });
    </script>
    <script src="{{ asset('dashboardAsset') }}/assets/js/custom.js"></script>
    <!-- END GLOBAL MANDATORY SCRIPTS -->


    <!-- BEGIN PAGE LEVEL {{ asset('dashboardAsset') }}/plugins/CUSTOM SCRIPTS -->
    <script src="{{ asset('dashboardAsset') }}/plugins/charts/chartist/chartist.js"></script>
    <script src="{{ asset('dashboardAsset') }}/plugins/maps/vector/jvector/jquery-jvectormap-2.0.3.min.js"></script>
    <script src="{{ asset('dashboardAsset') }}/plugins/maps/vector/jvector/worldmap_script/jquery-jvectormap-world-mill-en.js"></script>
    <script src="{{ asset('dashboardAsset') }}/plugins/calendar/pignose/moment.latest.min.js"></script>
    <script src="{{ asset('dashboardAsset') }}/plugins/calendar/pignose/pignose.calendar.js"></script>
    <script src="{{ asset('dashboardAsset') }}/plugins/progressbar/progressbar.min.js"></script>
    <script src="{{ asset('dashboardAsset') }}/assets/js/default-dashboard/default-custom.js"></script>
    <script src="{{ asset('dashboardAsset') }}/assets/js/support-chat.js"></script>
    <script src="{{ asset('dashboardAsset') }}/assets/js/Development.js"></script>
    <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
    <!-- BEGIN PAGE LEVEL {{ asset('dashboardAsset') }}/plugins/CUSTOM SCRIPTS -->
    @yield('footerScript')
</body>
</html>