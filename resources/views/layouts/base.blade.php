<!DOCTYPE html>
<html lang="{{ config('app.locale') }}" data-textdirection="ltr" >
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="BitSyte">
    <meta name="keywords" content="layout">
    <meta name="author" content="Bitsyte">
    <title> @yield('title') </title>

    @section('styles')
          <link rel="apple-touch-icon" href="{{ asset('backoffice/app-assets/images/ico/apple-icon-120.png')}}">
          <link rel="shortcut icon" type="image/x-icon" href="{{ asset('backoffice/app-assets/images/ico/favicon.ico')}}">
          <link href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,500i%7COpen+Sans:300,300i,400,400i,600,600i,700,700i" rel="stylesheet">
          <!-- BEGIN VENDOR CSS-->
          <link rel="stylesheet" type="text/css" href="{{ asset('backoffice/app-assets/css/bootstrap.css')}}">
          <link rel="stylesheet" type="text/css" href="{{ asset('backoffice/app-assets/fonts/feather/style.css')}}">
          <link rel="stylesheet" type="text/css" href="{{ asset('backoffice/app-assets/fonts/font-awesome/css/font-awesome.css')}}">
          <link rel="stylesheet" type="text/css" href="{{ asset('backoffice/app-assets/fonts/flag-icon-css/css/flag-icon.css')}}">
          <link rel="stylesheet" type="text/css" href="{{ asset('backoffice/app-assets/vendors/css/extensions/pace.css')}}">
          <link rel="stylesheet" type="text/css" href="{{ asset('backoffice/app-assets/vendors/css/charts/jquery-jvectormap-2.0.3.css')}}">
          <link rel="stylesheet" type="text/css" href="{{ asset('backoffice/app-assets/vendors/css/charts/morris.css')}}">
          <link rel="stylesheet" type="text/css" href="{{ asset('backoffice/app-assets/vendors/css/extensions/unslider.css')}}">
          <link rel="stylesheet" type="text/css" href="{{ asset('backoffice/app-assets/vendors/css/weather-icons/climacons.css')}}">
          <!-- END VENDOR CSS-->
          <!-- BEGIN STACK CSS-->
          <link rel="stylesheet" type="text/css" href="{{ asset('backoffice/app-assets/css/bootstrap-extended.css')}}">
          <link rel="stylesheet" type="text/css" href="{{ asset('backoffice/app-assets/css/app.css')}}">
          <link rel="stylesheet" type="text/css" href="{{ asset('backoffice/app-assets/css/colors.css')}}">
          <link rel="stylesheet" type="text/css" href="{{ asset('backoffice/app-assets/css/custom.css')}}">
          <!-- END STACK CSS-->
          <!-- BEGIN Page Level CSS-->
          <link rel="stylesheet" type="text/css" href="{{ asset('backoffice/app-assets/css/core/menu/menu-types/horizontal-menu.css')}}">
          <link rel="stylesheet" type="text/css" href="{{ asset('backoffice/app-assets/css/core/menu/menu-types/vertical-overlay-menu.css')}}">

          <!-- END Page Level CSS-->
          
    @show
  </head>

  <body data-open="click" data-menu="vertical-menu" data-col="1-column" class="vertical-layout vertical-menu 1-column  blank-page blank-page">
    @section('body')

    @show

    @section('scripts')
        <!-- BEGIN VENDOR JS-->
        <script src="{{ asset('backoffice/app-assets/vendors/js/vendors.js')}}" type="text/javascript"></script>
        <!-- BEGIN VENDOR JS-->
        <!-- BEGIN PAGE VENDOR JS-->
        <script type="text/javascript" src="{{ asset('backoffice/app-assets/vendors/js/ui/jquery.sticky.js')}}"></script>
        <script src="{{ asset('backoffice/app-assets/vendors/js/extensions/unslider-min.js')}}" type="text/javascript"></script>
        <link rel="stylesheet" type="text/css" href="{{ asset('backoffice/app-assets/fonts/simple-line-icons/style.css')}}">
        <!-- END PAGE VENDOR JS-->
        <!-- BEGIN STACK JS-->
        <script src="{{ asset('backoffice/app-assets/js/core/app-menu.js')}}" type="text/javascript"></script>
        <script src="{{ asset('backoffice/app-assets/js/core/app.js')}}" type="text/javascript"></script>
        <!-- END STACK JS-->
        <!-- BEGIN PAGE LEVEL JS-->
        <script type="text/javascript" src="{{ asset('backoffice/app-assets/js/scripts/ui/breadcrumbs-with-stats.js')}}"></script>

        <!-- END PAGE LEVEL JS-->
    @show
  </body>
</html>