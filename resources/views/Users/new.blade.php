@extends('layouts.main')

@section('head')
    <link rel="stylesheet" type="text/css" href="{{ asset('backoffice/assets/css/owl.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('backoffice/assets/css/owl.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('backoffice/app-assets/vendors/css/forms/icheck/icheck.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('backoffice/app-assets/vendors/css/forms/icheck/custom.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('backoffice/app-assets/css/plugins/forms/checkboxes-radios.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('backoffice/app-assets/css/plugins/forms/validation/form-validation.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('backoffice/app-assets/css/plugins/forms/switch.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('backoffice/app-assets/css/plugins/forms/wizard.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('backoffice/app-assets/css/plugins/pickers/daterange/daterange.css') }}">
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
        <div id="bred-graph" class="content-header-right col-md-6 col-xs-12">
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

    <section id="register" class="card ">
        <div class="card-header">
            <h4 class="card-title">New User</h4>
        </div>
        <div class="row match-height">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body collapse in">
                        <div class="card-block">
                            <form id="newuser" class="steps-validation wizard-circle" action="{{ route('users.store') }}"
                                  method="post" >
                                {{ csrf_field() }}
                                <h6>Step 1</h6>
                                <fieldset>
                                    <div class="row">
                                        <div class="col-sm-12 col-md-12 ">
                                            <div class="" style="">
                                                {{--<div class="">--}}
                                                <div class="card-header">
                                                    <h4 class="card-title">Select a Package</h4>
                                                </div>

                                                <!--Carousel-->
                                                <div id="owl-carousel" class="">
                                                    {{--@foreach($products as $product)
                                                        <div class="slide-item carousel-slide-item">
                                                            <div class="image-box">
                                                                <img id="slide-{{$product->id}}"
                                                                     src="{!!   asset('backoffice/images')."/".$product->name.".png" !!}"
                                                                     class="carousel-img">
                                                            </div>
                                                            <div class="item-caption carousel-item-caption">
                                                                --}}{{--<h6><strong>Package Golden</strong></h6>--}}{{--
                                                                <div class="row skin skin-line">
                                                                    <div id="radio{{$product->id}}" class="col-md-12 col-sm-12" style="word-break: break-all;">
                                                                        <input type="radio" name="product_id"
                                                                               id="input-radio-{{$product->id}}" value="{{$product->id}}">
                                                                        <label for="input-radio-{{$product->id}}">{{$product->name}}</label>
                                                                        <p>price {{$product->price}}</p>
                                                                    </div>

                                                                </div>
                                                            </div>
                                                        </div>
                                                   @endforeach--}}

                                                        <div class="slide-item carousel-slide-item">
                                                            <div class="image-box">
                                                                <img id="slide-1"
                                                                     src="{{ asset('backoffice/images/Package Golden.png') }}"
                                                                     class="carousel-img">
                                                            </div>
                                                            <div class="item-caption carousel-item-caption">
                                                                {{--<h6><strong>Package Golden</strong></h6>--}}
                                                                <div class="row skin skin-line">
                                                                    <div id="radio1" class="col-md-12 col-sm-12">
                                                                        <input type="radio" name="paquete"
                                                                               id="input-radio-1" checked value="gold">
                                                                        <label for="input-radio-1">Package Golden</label>
                                                                    </div>
                                                                </div>
                                                                <p>price $5000</p>
                                                            </div>
                                                        </div>

                                                        <div class="slide-item carousel-slide-item">
                                                            <div class="image-box">
                                                                <img id="slide-2"
                                                                     src="{{ asset('backoffice/images/Package Platinum.png') }}"
                                                                     class="carousel-img">
                                                            </div>
                                                            <div class="item-caption carousel-item-caption">
                                                                <div class="row skin skin-line">
                                                                    <div id="radio2" class="col-md-12 col-sm-12">
                                                                        <input type="radio" name="paquete"
                                                                               id="input-radio-2" value="silver">
                                                                        <label for="input-radio-2">Package silver</label>
                                                                    </div>
                                                                </div>
                                                                <p>price $3000</p>
                                                            </div>
                                                        </div>
                                                        <div class="slide-item carousel-slide-item">
                                                            <div id="box" class="image-box">
                                                                <img id="slide-3"
                                                                     src="{{ asset('backoffice/images/Package Silver.png') }}"
                                                                     class="carousel-img">
                                                            </div>
                                                            <div class="item-caption carousel-item-caption">
                                                                <div class="row skin skin-line">
                                                                    <div id="radio3" class="col-md-12 col-sm-12">
                                                                        <input type="radio" name="paquete"
                                                                               id="input-radio-3" value="platino">
                                                                        <label for="input-radio-3">Package platino</label>
                                                                    </div>
                                                                </div>
                                                                <p>price $1000</p>
                                                            </div>
                                                        </div>
                                                </div>
                                                {{--</div>--}}
                                            </div>
                                        </div>
                                    </div>
                                </fieldset>

                                <h6>Step 2</h6>
                                <fieldset>
                                    <h4 class="form-section"><i class="ft-user"></i>Login Data</h4>
                                    <div class="row">
                                        @if(env('APP_LOGIN_WITH')== "email")
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                <label for="userinput5">Email <span class="required">*</span></label>
                                                <div class="controls">
                                                    <input name="email" id="email" required type="email"
                                                           class="form-control border-primary"
                                                           placeholder="Email"
                                                           data-validation-required-message="This field is required">
                                                </div>
                                                </div>
                                            </div>

                                        @else
                                            <div class="col-md-12">
                                                {{--<div class="form-group">--}}
                                                    <label for="username">Username<span class="required">*</span></label>
                                                    <div class="controls">
                                                        <input id="username" name="username"
                                                               class="form-control border-primary"
                                                               placeholder="Username"  required
                                                               data-validation-required-message="This field is required">
                                                    </div>
                                                {{--</div>--}}
                                            </div>
                                        @endif
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label for="password">Password <span class="required">*</span></label>
                                            <div class="controls">
                                                <input name="password" id="password" required  type="password"
                                                       placeholder="Password" class="form-control border-primary"
                                                       data-validation-required-message="This field is required">
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <label for="confirmation">Confirmation Password <span
                                                        class="required">*</span></label>
                                            <div class="controls">
                                                <input name="confirm_password" id="confirm_password"
                                                       class="form-control border-primary" type="password"
                                                       placeholder="Confirmation Password"  data-validation-match-match="password"
                                                       required
                                                       data-validation-required-message="This field is required">
                                            </div>
                                        </div>
                                    </div>

                                    <h4 class="form-section"><i class="ft-mail"></i> User Data </h4>

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="first_name">Fist Name
                                                    <span class="required">*</span>
                                                </label>
                                                <div class="controls">
                                                    <input type="text" id="first_name"
                                                           class="form-control border-primary"
                                                           placeholder="Fist Name" name="first_name" required
                                                           data-validation-required-message="This field is required">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="last_name">Last Name <span class="required">*</span></label>
                                                <div class="controls">
                                                    <input type="text" id="last_name"
                                                           class="form-control border-primary"
                                                           placeholder="Last Name" name="last_name" required
                                                           data-validation-required-message="This field is required">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="birthday">Birthday <span class="required">*</span></label>
                                                <div class="controls">
                                                    <input name="birthday" id="Birthday" type="date" class="form-control"
                                                           data-toggle="tooltip" data-trigger="hover"
                                                           data-title="birthday" data-placement="top" required
                                                           data-validation-required-message="This field is required">
                                                </div>
                                            </div>
                                        </div>
                                        @if(env('APP_LOGIN_WITH')== "email")
                                            <div class="col-md-6">
                                                <label for="username">Username<span class="required">*</span></label>
                                                <div class="controls">
                                                    <input id="username" name="username"
                                                           class="form-control border-primary"
                                                           placeholder="Username"  required
                                                           data-validation-required-message="This field is required">
                                                </div>
                                            </div>
                                        @else
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="userinput5">Email <span class="required">*</span></label>
                                                    <div class="controls">
                                                        <input name="email" id="email" required
                                                               class="form-control border-primary" type="email"
                                                               placeholder="Email"
                                                               data-validation-required-message="This field is required">
                                                    </div>
                                                </div>
                                            </div>
                                        @endif
                                    </div>

                                </fieldset>

                                <h6>Step 3</h6>
                                <fieldset>

                                    <h4 class="form-section"><i class="ft-mail"></i> Billing Details </h4>

                                    <div class="row">
                                        <div class="form-group col-md-6">
                                            <label for="userinput5">Account Bitcoin</label>
                                            <input class="form-control border-primary" placeholder="Account Bitcoin"
                                                   name="numbercredit" id="numbercredit"  required
                                                   data-validation-required-message="This field is required">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="userinput5">Quantity</label>
                                            <input class="form-control border-primary" placeholder="0000.00"
                                                   name="namecredit" id="namecredit" required
                                                   data-validation-required-message="This field is required">
                                        </div>
                                    </div>
                                    <div id="alert" style="display: none">
                                        <div class="alert bg-blue alert-dismissible fade in mb-2" role="alert">
                                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                            <strong>Great!</strong> Your pay is completed.      click in next to continue.
                                        </div>
                                    </div>
                                    <input id="submit" class="btn btn-primary btn-min-width mr-1 mb-1" type="button" value="Pay now">


                                </fieldset>

                                <h6>Step 4</h6>
                                <fieldset>
                                    <div class="form-group" style="margin:auto;width:330px;height: 160px">

                                        <img src="{{ asset('backoffice/images/bitsyte_logo.png') }}" alt="">
                                        <h6>Congratulations</h6>
                                        <p>
                                            Thank you for signing up
                                        </p>
                                    </div>
                                    
                                </fieldset>

                                {{--<input type="button" onclick="myFunction()" value="Submit form">--}}
                                {{--<button type="submit" class="btn btn-blue btn-lg btn-block"><i
                                            class="ft-unlock"></i> Login
                                </button>--}}
                            </form>

                    </div>
                </div>
            </div>
        </div>

    </section>

@endsection

@section('scripts')
    <script src="{{ asset('backoffice/assets/js/owl.carousel.min.js')}}" type="text/javascript"></script>

    <script src="{{ asset('backoffice/app-assets/vendors/js/forms/spinner/jquery.bootstrap-touchspin.js')}}" type="text/javascript"></script>
    {{--<script src="{{ asset('backoffice/app-assets/vendors/js/forms/validation/jqBootstrapValidation.js')}}" type="text/javascript"></script>--}}

    {{--<script src="{{ asset('backoffice/app-assets/vendors/js/forms/toggle/switchery.min.js')}}" type="text/javascript"></script>--}}
    {{--<script src="{{ asset('backoffice/app-assets/vendors/js/forms/icheck/icheck.min.js')}}" type="text/javascript"></script>--}}
    <script src="{{ asset('backoffice/app-assets/vendors/js/extensions/jquery.steps.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('backoffice/app-assets/vendors/js/pickers/daterange/daterangepicker.js') }}" type="text/javascript"></script>
    <script src="{{ asset('backoffice/app-assets/vendors/js/forms/validation/jquery.validate.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('backoffice/app-assets/js/scripts/forms/wizard-steps.js') }}" type="text/javascript"></script>
    <script src="{{ asset('backoffice/app-assets/js/scripts/forms/checkbox-radio.js')}}" type="text/javascript"></script>
    {{--<script src="{{ asset('backoffice/app-assets/js/scripts/forms/validation/form-validation.js')}}" type="text/javascript"></script>--}}




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
            owl.trigger('to.owl.carousel', 1);
        }

        item();

        $("[id^='slide-']").on("click", function () {
            var slide = $(this).attr('id');
            let b = slide.split('-');
            seleccionar(b[1]);
        });

        function seleccionar(num) {
            $('#radio' + num).find(".iCheck-helper").trigger("click");
        }

        $("#submit").on("click", function () {
            var slide = $(this).attr('id');
            console.log(slide);
            let url = "{{ route('users.store') }}";
            console.log(url);

            $("#newuser").submit();
        });

        $("#newuser").submit(function(e)
        {
            console.log("entro");
            var postData = $(this).serializeArray();
            var formURL = $(this).attr("action");
            console.log(formURL);
            $.ajax({
                url : formURL,
                type: "POST",
                data : postData,
                success:function(data, textStatus, jqXHR)
                {
                    let result = JSON.parse(data);
                    console.log(result);
                    if (result.ok === "ok"){
                        console.log("bien");
                        $( "#alert" ).show();
                    }else{
                        console.log("error");
                        $( "#alert" ).show();
                    }

                },
                error: function(jqXHR, textStatus, errorThrown)
                {
                    console.log("error");
                    alert("error try letter");
                }
            });
        });

        function submit() {
            console.log("entro");
//            document.getElementById("myForm").submit();
            $("#theForm").ajaxForm({url: 'server.php', type: 'post'})
        }
        function modal() {
            console.log("modal");
            $('#modal').trigger("click")
        }

    </script>

@endsection
