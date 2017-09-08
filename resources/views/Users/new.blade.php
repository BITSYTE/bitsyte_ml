@extends('layouts.main')

@section('head')
    <link rel="stylesheet" type="text/css" href="{{ asset('backoffice/assets/css/owl.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('backoffice/assets/css/owl.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('backoffice/app-assets/vendors/css/forms/icheck/icheck.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('backoffice/app-assets/vendors/css/forms/icheck/custom.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('backoffice/app-assets/css/plugins/forms/checkboxes-radios.css') }}">
@endsection

@section('breadcrumbs')
    <div class="content-header row">
        <div class="content-header-left col-md-6 col-xs-12 mb-2">
            <h3 class="content-header-title mb-0">New User</h3>
            <div class="row breadcrumbs-top">
                <div class="breadcrumb-wrapper col-xs-12">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                        @include('layouts.partial.breadcrumbs')
                    </ol>
                </div>
            </div>
        </div>
        <div class="content-header-right col-md-6 col-xs-12">
            <div class="media width-250 float-xs-right">
                <div class="media-left media-middle">
                    <div id="sp-bar-total-sales"></div>
                </div>
                <div class="media-body media-right text-xs-right">
                    <h3 class="m-0">$5,668</h3><span class="text-muted">Sales</span>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('content')

    <section id="register" class="card">
        <div class="row match-height">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body collapse in">
                        <div class="card-block">
                            <form class="form" action="{{ route('users.store') }}" method="post">
                                {{ csrf_field() }}
                                <div class="form-body">
                                    <h4 class="form-section"><i class="ft-user"></i> New User</h4>

                                    <div class="row">
                                        <div class="col-sm-12 col-md-12 ">
                                            <div class="" style="">
                                                {{--<div class="">--}}
                                                <div class="card-header">
                                                    <h4 class="card-title">Select a Package</h4>
                                                </div>

                                                <!--Carousel-->
                                                <div id="owl-carousel" class="">
                                                    <div class="slide-item carousel-slide-item" >
                                                        <div class="image-box">
                                                            <img src="{{ asset('backoffice/images/post-image-4.jpg') }}"
                                                                 class="carousel-img">
                                                        </div>
                                                        <div class="item-caption carousel-item-caption" >
                                                            {{--<h6><strong>Package Golden</strong></h6>--}}
                                                            <div class="row skin skin-line">
                                                                <div class="col-md-12 col-sm-12">
                                                                    <input type="radio" name="paquete" id="input-radio-1" checked value="gold">
                                                                    <label for="input-radio-1">Package Golden</label>
                                                                </div>
                                                            </div>
                                                            <p>price $5000</p>
                                                        </div>
                                                    </div>

                                                    <div class="slide-item carousel-slide-item" >
                                                        <div class="image-box">
                                                            <img src="{{ asset('backoffice/images/post-image-4.jpg') }}"
                                                                 class="carousel-img">
                                                        </div>
                                                        <div class="item-caption carousel-item-caption">
                                                            <div class="row skin skin-line">
                                                                <div class="col-md-12 col-sm-12">
                                                                    <input type="radio" name="paquete" id="input-radio-2" value="silver">
                                                                    <label for="input-radio-1">Package silver</label>
                                                                </div>
                                                            </div>
                                                            <p>price $5000</p>
                                                        </div>
                                                    </div>
                                                    <div class="slide-item carousel-slide-item" >
                                                        <div class="image-box">
                                                            <img src="{{ asset('backoffice/images/post-image-4.jpg') }}"
                                                                 class="carousel-img">
                                                        </div>
                                                        <div class="item-caption carousel-item-caption">
                                                            <div class="row skin skin-line">
                                                                <div class="col-md-12 col-sm-12">
                                                                    <input type="radio" name="paquete" id="input-radio-3" value="platino">
                                                                    <label for="input-radio-1">Package platino</label>
                                                                </div>
                                                            </div>
                                                            <p>price $5000</p>
                                                        </div>
                                                    </div>

                                                </div>
                                                {{--</div>--}}
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="first_name">Fist Name</label>
                                                <input type="text" id="first_name" class="form-control border-primary"
                                                       placeholder="Fist Name" name="first_name">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="last_name">Last Name</label>
                                                <input type="text" id="last_name" class="form-control border-primary"
                                                       placeholder="Last Name" name="last_name">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="username">Username</label>
                                                <input type="text" id="username" class="form-control border-primary"
                                                       placeholder="Username" name="username">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="birthday">Birthday</label>
                                                <input type="date" id="Birthday" class="form-control" name="birthday"
                                                       data-toggle="tooltip" data-trigger="hover" data-placement="top"
                                                       data-title="birthday">
                                            </div>
                                        </div>
                                    </div>

                                    <h4 class="form-section"><i class="ft-mail"></i> Contact Info </h4>

                                    <div class="form-group">
                                        <label for="userinput5">Email</label>
                                        <input class="form-control border-primary" type="email" placeholder="Email"
                                               name="email" id="email">
                                    </div>

                                    <div class="form-group">
                                        <label for="password">Password</label>
                                        <input class="form-control border-primary" type="password"
                                               placeholder="Password" name="password" id="password">
                                    </div>

                                    <div class="form-group">
                                        <label for="confirmation">Confirmation Password</label>
                                        <input class="form-control border-primary" type="password"
                                               placeholder="Confirmation Password" name="password_confirm"
                                               id="confirmation">
                                    </div>

                                </div>

                                <div class="form-actions right">
                                    <button type="button" class="btn btn-warning mr-1">
                                        <i class="ft-x"></i> Cancel
                                    </button>
                                    <button type="submit" class="btn btn-primary">
                                        <i class="fa fa-check-square-o"></i> Save
                                    </button>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>

@endsection

@section('scripts')
    <script src="{{ asset('backoffice/assets/js/owl.carousel.min.js')}}" type="text/javascript"></script>
    <script src="{{ asset('backoffice/app-assets/vendors/js/forms/icheck/icheck.min.js')}}" type="text/javascript"></script>
    <script src="{{ asset('backoffice/app-assets/js/scripts/forms/checkbox-radio.js')}}" type="text/javascript"></script>


    <script>
        //Four Column Slider

        var owl = $('#owl-carousel');
        owl.owlCarousel({
            loop: false,
            center: true,
            autoWidth: true,
            margin: 30,
            nav: true,
            autoplayHoverPause: true,
            autoplay: 0,
            smartSpeed: 1000,
            responsive: {
                0: {
                    items: 1
                },
                540: {
                    items: 1
                },
                720: {
                    items: 1
                },
                1024: {
                    items: 3
                },
                1100: {
                    items: 3
                }
            }
        });

        function item() {
            owl.trigger('to.owl.carousel',1);
            //            var item = owl(owl-item.active);
            console.log(item);
        }

        item();


    </script>

@endsection
