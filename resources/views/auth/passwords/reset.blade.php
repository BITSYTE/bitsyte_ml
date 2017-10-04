<!DOCTYPE html>
<html lang="{{ config('app.locale') }}" data-textdirection="ltr">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="BitSyte">
    <meta name="keywords" content="layout">
    <meta name="author" content="Bitsyte">
    <title> Login </title>


    <link rel="apple-touch-icon" href="{{ asset('backoffice/app-assets/images/ico/apple-icon-120.png')}}">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('backoffice/app-assets/images/ico/favicon.ico')}}">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,500i%7COpen+Sans:300,300i,400,400i,600,600i,700,700i"
          rel="stylesheet">
    <!-- BEGIN VENDOR CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('backoffice/app-assets/css/bootstrap.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('backoffice/app-assets/fonts/feather/style.css')}}">
    <link rel="stylesheet" type="text/css"
          href="{{ asset('backoffice/app-assets/fonts/font-awesome/css/font-awesome.css')}}">
    <link rel="stylesheet" type="text/css"
          href="{{ asset('backoffice/app-assets/fonts/flag-icon-css/css/flag-icon.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('backoffice/app-assets/vendors/css/extensions/pace.css')}}">
    <link rel="stylesheet" type="text/css"
          href="{{ asset('backoffice/app-assets/vendors/css/charts/jquery-jvectormap-2.0.3.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('backoffice/app-assets/vendors/css/charts/morris.css')}}">
    <link rel="stylesheet" type="text/css"
          href="{{ asset('backoffice/app-assets/vendors/css/extensions/unslider.css')}}">
    <!-- END VENDOR CSS-->
    <!-- BEGIN STACK CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('backoffice/app-assets/css/bootstrap-extended.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('backoffice/app-assets/css/app.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('backoffice/app-assets/css/colors.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('backoffice/app-assets/css/custom.css')}}">
    <!-- END STACK CSS-->
    <!-- BEGIN Page Level CSS-->
    <link rel="stylesheet" type="text/css"
          href="{{ asset('backoffice/app-assets/css/core/menu/menu-types/horizontal-menu.css')}}">
    <link rel="stylesheet" type="text/css"
          href="{{ asset('backoffice/app-assets/css/core/menu/menu-types/vertical-overlay-menu.css')}}">

    <!-- END Page Level CSS-->
</head>

<body data-open="click" data-menu="horizontal-menu" data-col="1-column"
      class="horizontal-layout horizontal-menu 1-column  blank-page blank-page">
<!-- //////////////////////////////////////-->
<div class="app-content container center-layout mt-2">
    <div class="content-wrapper">
        <div class="content-header row">
        </div>
        <div class="content-body">
            <section class="flexbox-container">
                <div class="col-md-6 offset-md-3 col-xs-10 offset-xs-1  box-shadow-2 p-0  ">
                    <div class="card border-grey border-lighten-3 m-0">
                        <div class="card-header no-border">
                            <div class="card-title text-xs-center">
                                <div class="p-1">
                                    <img src="{{ asset('backoffice/app-assets/images/logo/stack-logo-dark.png')}}"
                                         alt="branding logo"></div>
                            </div>
                            <h6 class="card-subtitle line-on-side text-muted text-xs-center font-small-3 pt-2"><span>Login to BitSyte</span>
                            </h6>
                        </div>
                        <div class="card-body collapse in">
                            <div class="card-block">
                                <form class="form-horizontal form-simple" method="post" action="{{route('login')}}"
                                      novalidate>
                                    {{ csrf_field() }}

                                    @if (env('APP_LOGIN_WITH') == 'email')
                                        @include('auth.partial.email')
                                    @else
                                        @include('auth.partial.username')
                                    @endif

                                    <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                        <label for="password" class="col-md-4 control-label">Password</label>

                                        <div class="col-md-6">
                                            <input id="password" type="password" class="form-control" name="password" required>

                                            @if ($errors->has('password'))
                                                <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                                        <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>
                                        <div class="col-md-6">
                                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>

                                            @if ($errors->has('password_confirmation'))
                                                <span class="help-block">
                                        <strong>{{ $errors->first('password_confirmation') }}</strong>
                                    </span>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="col-md-6 col-md-offset-4">
                                            <button type="submit" class="btn btn-primary">
                                                Reset Password
                                            </button>
                                        </div>
                                    </div>

                                </form>
                            </div>
                        </div>
                        <div class="card-footer">
                            <div class="">
                            <!-- <p class="float-sm-left text-xs-center m-0"><a href="{{ route('password.request') }}" class="card-link">Recover password</a></p>
                                    <p class="float-sm-right text-xs-center m-0">New to BitSyte? <a href="{{ url('/register') }}" class="card-link">Sign Up</a></p> -->
                            </div>
                        </div>
                    </div>
                </div>
            </section>

        </div>
    </div>
</div>
<!-- //////////////////////////////////////-->


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
<!-- END PAGE LEVEL JS-->

</body>
</html>






 