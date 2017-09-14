<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Encoding -->
    <meta charset="utf-8">
    <!-- Responsiveness, scaling -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <!-- IE compatibility modes -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Set the title of you site -->
    <title>Myway - Onepage Bootstrap Multi-Purpose Parallax Retina Template</title>
    <!-- Set the descritpion of your site -->
    <meta name="description" content="Responsive, Mobile First, Retina, Bootstrap 3, One Page, Multi Page, Multi-Purpose, Agency, Clean, Creative, Minimal, Components, Photography, Portfolio, Business, Corporate, White, Modern">
    <!-- Set the author of your site -->
    <meta name="author" content="Awerest - interactive studio">
    <!-- Modernizr -->
    <script src="{{ asset('landing/js/modernizr.js') }}"></script>
    <!-- Main Bootstrap styling -->
    <link rel="stylesheet" href="{{ asset('landing/css/bootstrap.min.css') }}">
    <!-- Custom styling -->
    <link href=" {{ asset('landing/css/style.css') }}" rel="stylesheet">
    <!-- Iconic font - FontAwesome -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
    <!-- Google fonts -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300,400,700' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Droid+Serif:400,400italic' rel='stylesheet' type='text/css'>
    <!-- Site thumbnail -->
    <link rel="image_src" href="{{ asset('landing/thumbnail.png') }}">
    <!-- Favicon -->
    {{--<link rel="icon" type="image/ico" href="favicon.ico">--}}
    <!-- HTML5 shiv and Respond.js for IE8 support of HTML5 elements and media queries. All other JS at the end of file. -->
    <!-- [if lt IE 9] -->
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src=" {{ asset('landing/js/respond.min.js') }} "></script>
    <![endif]-->
</head>
<body data-spy="scroll" data-target=".navbar" data-offset="61">
<!-- Start preloader -->
<div class="preloader">
    <div class="spinner">
        <div class="bounce1"></div>
        <div class="bounce2"></div>
        <div class="bounce3"></div>
    </div>
</div>
<!-- End preloader -->
<!-- Start navigation -->
<div class="navbar navbar-default navbar-transparent navbar-fixed-top" role="navigation" data-start="padding: 10px 0px; background: rgba(255, 255, 255, .1); border-color: rgba(255, 255, 255, .1);" data-20p="padding: 0px 0px; background: rgba(255, 255, 255, .95); border-color: rgba(231, 231, 231, 1);">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <!-- Light and dark logo -->
            <a href="#intro" class="navbar-brand">
                <img class="img-responsive" src="http://placehold.it/120x40" alt="" data-start="opacity: 1;" data-20p="opacity: 0;">
                <img class="img-responsive" src="http://placehold.it/120x40" alt="" data-start="opacity: 0;" data-20p="opacity: 1;">
            </a>
        </div>
        <!-- Navigation links -->
        <div class="collapse navbar-collapse" id="navbar-collapse">
            <ul class="nav navbar-nav navbar-right">
                <li><a href="#intro">Home</a></li>
                <li><a href="#services" data-start="color: rgb(255, 255, 255);" data-20p="color: rgb(0, 0, 0);">Services</a></li>
                <li><a href="#features" data-start="color: rgb(255, 255, 255);" data-20p="color: rgb(0, 0, 0);">Features</a></li>
                <li><a href="#works-top" data-start="color: rgb(255, 255, 255);" data-20p="color: rgb(0, 0, 0);">Works</a></li>
                <li><a href="#gallery-top" data-start="color: rgb(255, 255, 255);" data-20p="color: rgb(0, 0, 0);">Gallery</a></li>
                <li><a href="#team-top" data-start="color: rgb(255, 255, 255);" data-20p="color: rgb(0, 0, 0);">Team</a></li>
                <li><a href="#contact-top" data-start="color: rgb(255, 255, 255);" data-20p="color: rgb(0, 0, 0);">Contact</a></li>
                <li><a href="http://themeforest.net/item/myway-onepage-bootstrap-parallax-retina-template/4058880?ref=awerest" data-start="color: rgb(255, 255, 255);" data-20p="color: rgb(0, 0, 0);">Purchase</a></li>
            </ul>
        </div>
    </div>
</div>
<!-- End navigation -->

@yield('content')

<!-- Start footer -->
<footer class="smoke-bg">
    <div class="container">
        <div class="row text-center">
            <!-- Footer menu -->
            <div class="clearfix"></div>
            <div class="divide-sm"></div>
            <div class="col-sm-12 divide-xs">
                <a href="#intro"><h4>Home</h4></a>
                <a href="#services"><h4>Services</h4></a>
                <a href="#features"><h4>Features</h4></a>
                <a href="#works-top"><h4>Works</h4></a>
                <a href="#gallery-top"><h4>Gallery</h4></a>
                <a href="#team-top"><h4>Team</h4></a>
                <a href="http://themeforest.net/item/myway-onepage-bootstrap-parallax-retina-template/4058880?ref=awerest"><h4>Purchase</h4></a>
            </div>
            <!-- Social networks -->
            <div class="col-sm-12 divide-xs">
                <a class="facebook" href="http://www.facebook.com/awerest" target="_blank">Facebook</a>
                <a class="twitter" href="http://www.twitter.com/awerest" target="_blank">Twitter</a>
                <a class="google" href="https://plus.google.com/u/0/104533843132286032110/posts" target="_blank">Google+</a>
                <a class="linkedin" href="https://www.linkedin.com/profile/view?id=196747581" target="_blank">LinkedIn</a>
                <a class="instagram" href="http://www.instagram.com/awerest" target="_blank">Instagram</a>
                <a class="pinterest" href="http://www.pinterest.com/awerest" target="_blank">Pinterest</a>
            </div>
            <!-- Copyright -->
            <div class="col-sm-12 divide-xs">
                <p><small>Copyright &copy; 2015 Awerest Inc. All rights reserved.</small></p>
            </div>
            <div class="clearfix"></div>
            <div class="divide-sm"></div>
        </div>
    </div>
</footer>
<!-- End footer -->
<!-- Start scripts - IMPORTANT: all scripts except modernizr and html5shiv MUST be loaded after jquery.min.js as now -->
<!-- jQuery -->
<script src="{{ asset('landing/js/jquery.min.js') }}"></script>
<!-- Main Bootstrap js -->
<script src="{{ asset('landing/js/bootstrap.min.js') }}"></script>
<!-- Retina support -->
<script src="{{ asset('landing/js/retina.js') }}"></script>
<!-- Animated elements -->
<script src="{{ asset('landing/js/imagesloaded.min.js') }}"></script>
<script src=" {{ asset('landing/js/skrollr.js') }}"></script>
<!--[if lt IE 9] -->
<script src="{{ asset('landing/js/skrollr.ie.min.js') }}"></script>
<!--[endif]-->
<!-- Smooth scroll -->
<script src="{{ asset('landing/js/jquery.scrollto.min.js') }}"></script>
<script src="{{ asset('landing/js/jquery.easing.js') }}"></script>
<script src="{{ asset('landing/js/jquery.localscroll.min.js') }}"></script>
<script src="{{ asset('landing/js/smoothscroll.js') }}"></script>
<!-- Gallery lightbox -->
<script src="{{ asset('landing/js/ekko-lightbox.min.js') }}"></script>
<!-- Contact form and google map -->
<script src="http://maps.google.com/maps/api/js?sensor=false"></script>
<script src="{{ asset('landing/js/jquery.form.js') }}"></script>
<script src="{{ asset('landing/js/jquery.flowuplabels.js') }}"></script>
<!-- Custom scripts and triggers -->
<script src="{{ asset('landing/js/custom.js') }}"></script>
<!-- Google analytics -->
{{--<script type="text/javascript">
    var _gaq = _gaq || [];
    _gaq.push(['_setAccount', 'YOUR GOOGLE ANALYTICS CODE']);
    _gaq.push(['_trackPageview']);

    (function() {
        var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
        ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
        var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
    })();
</script>--}}
<!-- End scripts -->
</body>
</html>