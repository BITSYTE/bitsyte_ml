<!DOCTYPE html>
<html lang="en" data-textdirection="ltr" class="loading">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="Stack admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
    <meta name="keywords" content="admin template, stack admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="PIXINVENT">
    <title>Dashboard eCommerce - Stack Responsive Bootstrap 4 Admin Template</title>
    <!-- BEGIN VENDOR CSS-->
    <link rel="apple-touch-icon" href="{{ asset('backoffice/app-assets/images/ico/apple-icon-120.png')}}">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('backoffice/app-assets/images/ico/favicon.ico')}}">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,500i%7COpen+Sans:300,300i,400,400i,600,600i,700,700i" rel="stylesheet">
    <!-- BEGIN VENDOR CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('backoffice/app-assets/css/bootstrap.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('backoffice/app-assets/fonts/feather/style.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('backoffice/app-assets/fonts/font-awesome/css/font-awesome.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('backoffice/app-assets/fonts/flag-icon-css/css/flag-icon.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('backoffice/app-assets/vendors/css/extensions/pace.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('backoffice/app-assets/vendors/css/extensions/unslider.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('backoffice/app-assets/vendors/css/charts/morris.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('backoffice/app-assets/vendors/css/charts/jquery-jvectormap-2.0.3.css')}}">

    <!-- END VENDOR CSS-->
    <!-- BEGIN STACK CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('backoffice/app-assets/css/bootstrap-extended.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('backoffice/app-assets/css/app.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('backoffice/app-assets/css/colors.css')}}">
{{--<link rel="stylesheet" type="text/css" href="{{ asset('backoffice/app-assets/css/custom.css')}}">--}}
<!-- END STACK CSS-->
    <!-- BEGIN Page Level CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('backoffice/app-assets/css/core/menu/menu-types/horizontal-menu.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('backoffice/app-assets/css/core/menu/menu-types/vertical-overlay-menu.css')}}">

    <!-- END Page Level CSS-->
    <!-- BEGIN Custom CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('backoffice/assets/css/style.css') }}">
    <!-- END Custom CSS-->
    @yield('head')
</head>
<body data-open="hover" data-menu="horizontal-menu" data-col="2-columns" class="horizontal-layout horizontal-menu 2-columns   menu-expanded">

<!-- navbar-fixed-top-->
<nav class="header-navbar navbar navbar-with-menu navbar-static-top navbar-dark bg-blue navbar-border navbar-brand-center">
    <div class="navbar-wrapper">
        <div class="navbar-header">
            <ul class="nav navbar-nav">
                <li class="nav-item mobile-menu hidden-md-up float-xs-left"><a href="#" class="nav-link nav-menu-main menu-toggle hidden-xs"><i class="ft-menu font-large-1"></i></a></li>
                <li class="nav-item"><a href="{{ route('home') }}" class="navbar-brand"><img alt="stack admin logo" src="{{ asset('backoffice/app-assets/images/logo/stack-logo-light.png')}}" class="brand-logo">
                        <h2 class="brand-text">Stack</h2></a>
                </li>
                <li class="nav-item hidden-md-up float-xs-right"><a data-toggle="collapse" data-target="#navbar-mobile" class="nav-link open-navbar-container"><i class="fa fa-ellipsis-v"></i></a></li>
            </ul>
        </div>
        <div class="navbar-container content container-fluid">
            <div id="navbar-mobile" class="collapse navbar-toggleable-sm">
                <ul class="nav navbar-nav">
                    <li class="nav-item hidden-sm-down"><a href="#" class="nav-link nav-menu-main menu-toggle hidden-xs"><i class="ft-menu"></i></a></li>
                    <li class="nav-item hidden-sm-down"><a href="#" class="nav-link nav-link-expand"><i class="ficon ft-maximize"></i></a></li>
                    <li class="nav-item nav-search"><a href="#" class="nav-link nav-link-search"><i class="ficon ft-search"></i></a>
                        <div class="search-input">
                            <input type="text" placeholder="Explore Stack..." class="input">
                        </div>
                    </li>
                </ul>
                <ul class="nav navbar-nav float-xs-right">
                    {{--<li class="dropdown dropdown-language nav-item"><a id="dropdown-flag" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="dropdown-toggle nav-link"><i class="flag-icon flag-icon-gb"></i><span class="selected-language"></span></a>
                        <div aria-labelledby="dropdown-flag" class="dropdown-menu"><a href="#" class="dropdown-item"><i class="flag-icon flag-icon-gb"></i> English</a><a href="#" class="dropdown-item"><i class="flag-icon flag-icon-fr"></i> French</a><a href="#" class="dropdown-item"><i class="flag-icon flag-icon-cn"></i> Chinese</a><a href="#" class="dropdown-item"><i class="flag-icon flag-icon-de"></i> German</a></div>
                    </li>--}}

                    <li class="dropdown dropdown-user nav-item">
                        <a href="#" data-toggle="dropdown" class="dropdown-toggle nav-link dropdown-user-link">
                            <span class="avatar avatar-online">
                                <img src="{{ asset('backoffice/app-assets/images/portrait/small/avatar-s-1.png')}}" alt="avatar"><i></i>
                            </span>
                            <span class="user-name">{{ auth()->user()[env('APP_LOGIN_WITH')] }}</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <a href="#" class="dropdown-item"><i class="ft-user"></i>Profile</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item"  href="{{ route('logout') }}"   onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                                <i class="ft-power"></i> Logout
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                {{ csrf_field() }}
                            </form>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</nav>

<!-- ////////////////////////////////////////////////////////////////////////////-->


<!-- Horizontal navigation-->
<div role="navigation" data-menu="menu-wrapper" class="header-navbar navbar navbar-horizontal navbar-fixed navbar-light  navbar-without-dd-arrow navbar-shadow menu-border">
    <!-- Horizontal menu content-->
    <div data-menu="menu-container" class="navbar-container main-menu-content">
        <!-- include ../../../includes/mixins-->
        <ul id="main-menu-navigation" data-menu="menu-navigation" class="nav navbar-nav">
            <li  class=" nav-item"><a href="{{ route('home') }}" class=" nav-link"><i class="ft-home"></i><span>Home</span></a></li>
            <li  class=" nav-item"><a href="{{ route('wallets.index') }}" class=" nav-link"><i class="icon-wallet"></i><span>Wallets</span></a></li>
            <li data-menu="dropdown" class="dropdown nav-item"><a href="#" data-toggle="dropdown" class="dropdown-toggle nav-link"><i class="fa fa-sitemap"></i><span>Networks</span></a>
                <ul class="dropdown-menu">
                    <li data-menu=""><a href="#" data-toggle="dropdown" class="dropdown-item">Binary</a></li>
                    <li data-menu=""><a href="#" data-toggle="dropdown" class="dropdown-item">Unilevel</a></li>
                </ul>
            </li>
            <li  class=" nav-item"><a href="#"  class=" nav-link"><i class="ft-user"></i><span>Profile</span></a></li>
            <li  class=" nav-item"><a href="#" class="nav-link"><i class="icon-settings"></i><span>Settings</span></a> </li>
        </ul>
        <!-- menu-->
    </div>
    <!-- /horizontal menu content-->
</div>
<!-- Horizontal navigation-->

<div class="app-content content container-fluid">
    <div class="content-wrapper">
        @yield('breadcrumbs')
        <div class="content-body"><!-- Stats -->

            @yield('content')

        </div>
    </div>
</div>
<!-- ////////////////////////////////////////////////////////////////////////////-->


<footer class="footer navbar-fixed-bottom footer-light navbar-shadow " >
    <p class="clearfix blue-grey lighten-2 text-sm-center mb-0 px-2">
        <span class="float-md-left d-xs-block d-md-inline-block">Copyright  &copy; 2017
            <a href="#" target="_blank" class="text-bold-800 grey darken-2">Bitsyte </a>, All rights reserved.
        </span>
        <span class="float-md-right d-xs-block d-md-inline-block hidden-md-down">... </span>
    </p>
    <button type="button" class="btn btn-floating btn-danger">
        <ul class="btn-float-ul">
            <li data-menu="dropdown" class="dropdown nav-item">
                <i class="fa fa-plus-circle icon-btn-float"></i>
                <ul class="dropdown-menu" style="list-style-type: none!important;">
                    <li data-menu=""><a href="#" data-toggle="dropdown" class="dropdown-item">Binary</a></li>
                    <li data-menu=""><a href="#" data-toggle="dropdown" class="dropdown-item">Unilevel</a></li>
                </ul>
            </li>
        </ul>
    </button>
</footer>

<!-- BEGIN VENDOR JS-->
<script src="{{ asset('backoffice/app-assets/vendors/js/vendors.js')}}" type="text/javascript"></script>
<!-- BEGIN VENDOR JS-->

<!-- BEGIN PAGE VENDOR JS-->
<script type="text/javascript" src="{{ asset('backoffice/app-assets/vendors/js/ui/jquery.sticky.js')}}"></script>
<script type="text/javascript" src="{{ asset('backoffice/app-assets/vendors/js/charts/jquery.sparkline.min.js') }}"></script>
<script src="{{ asset('backoffice/app-assets/vendors/js/extensions/unslider-min.js')}}" type="text/javascript"></script>
<link rel="stylesheet" type="text/css" href="{{ asset('backoffice/app-assets/fonts/simple-line-icons/style.css')}}">
<!-- END PAGE VENDOR JS-->

<!-- BEGIN STACK JS-->
<script src="{{ asset('backoffice/app-assets/js/core/app-menu.js')}}" type="text/javascript"></script>
<script src="{{ asset('backoffice/app-assets/js/core/app.js')}}" type="text/javascript"></script>
<!-- END STACK JS-->
<!-- BEGIN PAGE LEVEL JS-->
<script type="text/javascript" src="{{ asset('backoffice/app-assets/js/scripts/ui/breadcrumbs-with-stats.js') }}"></script>
{{--<script type="text/javascript" src="{{ asset('backoffice/app-assets/js/core/libraries/bootstrap.min.js') }}"></script>--}}
<!-- END PAGE LEVEL JS-->
@yield('scripts')
</body>
</html>