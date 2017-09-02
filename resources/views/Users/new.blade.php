@extends('layouts.main')

@section('head')
    <link rel="stylesheet" type="text/css" href="{{ asset('backoffice/assets/css/owl.css') }}">
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
                    {{--<div class="card-header">
                        <a class="heading-elements-toggle"><i class="fa fa-ellipsis-v font-medium-3"></i></a>
                        <div class="heading-elements">
                            <ul class="list-inline mb-0">
                                --}}{{--<li><a data-action="collapse"><i class="ft-minus"></i></a></li>--}}{{--
                                --}}{{--<li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>--}}{{--
                                <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                                --}}{{--<li><a data-action="close"><i class="ft-x"></i></a></li>--}}{{--
                            </ul>
                        </div>
                    </div>--}}
                    <div class="card-body collapse in">
                        <div class="card-block">
                            <form class="form">
                                <div class="form-body">
                                    <h4 class="form-section"><i class="ft-user"></i> New User</h4>

                                    <div class="row">
                                        <div class=" col-md-12 col-sm-12 ">
                                            <div class="auto-container" style="">
                                                {{--<div class="">--}}
                                                <div class="card-header">
                                                    <h4 class="card-title">Select a Package</h4>
                                                </div>

                                                <!--Carousel-->
                                                <div id="owl-carousel" class="gallery-slider column-carousel four-column">

                                                    <article class="slide-item">
                                                        <figure class="image-box"><a
                                                                    href="{{ asset('backoffice/app-assets/images/carousel/02.jpg') }}"
                                                                    class="lightbox-image" title="Awsome Title Here">
                                                                <img src="{{ asset('backoffice/images/post-image-4.jpg') }}"
                                                                     alt=""></a>
                                                        </figure>
                                                        <a href="{{ asset('backoffice/images/post-image-4.jpg') }}"
                                                           class="overlay lightbox-image" title="Awsome Title Here"></a>
                                                        <div class="item-caption">
                                                            <h4><strong>Package Golden</strong></h4>
                                                            <p>price $5000</p>
                                                        </div>
                                                    </article>
                                                    <article class="slide-item">
                                                        <figure class="image-box"><a
                                                                    href="{{ asset('backoffice/app-assets/images/carousel/02.jpg') }}"
                                                                    class="lightbox-image" title="Awsome Title Here">
                                                                <img src="{{ asset('backoffice/images/post-image-4.jpg') }}"
                                                                     alt=""></a>
                                                        </figure>
                                                        <a href="{{ asset('backoffice/images/post-image-4.jpg') }}"
                                                           class="overlay lightbox-image" title="Awsome Title Here"></a>
                                                        <div class="item-caption">
                                                            <h4><strong>Package Golden</strong></h4>
                                                            <p>price $5000</p>
                                                        </div>
                                                    </article>
                                                    <article class="slide-item">
                                                        <figure class="image-box"><a
                                                                    href="{{ asset('backoffice/app-assets/images/carousel/02.jpg') }}"
                                                                    class="lightbox-image" title="Awsome Title Here">
                                                                <img src="{{ asset('backoffice/images/post-image-4.jpg') }}"
                                                                     alt=""></a>
                                                        </figure>
                                                        <a href="{{ asset('backoffice/images/post-image-4.jpg') }}"
                                                           class="overlay lightbox-image" title="Awsome Title Here"></a>
                                                        <div class="item-caption">
                                                            <h4><strong>Package Golden</strong></h4>
                                                            <p>price $5000</p>
                                                        </div>
                                                    </article>
                                                    <article class="slide-item">
                                                        <figure class="image-box"><a
                                                                    href="{{ asset('backoffice/app-assets/images/carousel/02.jpg') }}"
                                                                    class="lightbox-image" title="Awsome Title Here">
                                                                <img src="{{ asset('backoffice/images/post-image-4.jpg') }}"
                                                                     alt=""></a>
                                                        </figure>
                                                        <a href="{{ asset('backoffice/images/post-image-4.jpg') }}"
                                                           class="overlay lightbox-image" title="Awsome Title Here"></a>
                                                        <div class="item-caption">
                                                            <h4><strong>Package Golden</strong></h4>
                                                            <p>price $5000</p>
                                                        </div>
                                                    </article>
                                                    <article class="slide-item">
                                                        <figure class="image-box"><a
                                                                    href="{{ asset('backoffice/app-assets/images/carousel/02.jpg') }}"
                                                                    class="lightbox-image" title="Awsome Title Here">
                                                                <img src="{{ asset('backoffice/images/post-image-4.jpg') }}"
                                                                     alt=""></a>
                                                        </figure>
                                                        <a href="{{ asset('backoffice/images/post-image-4.jpg') }}"
                                                           class="overlay lightbox-image" title="Awsome Title Here"></a>
                                                        <div class="item-caption">
                                                            <h4><strong>Package Golden</strong></h4>
                                                            <p>price $5000</p>
                                                        </div>
                                                    </article>
                                                    <article class="slide-item">
                                                        <figure class="image-box"><a
                                                                    href="{{ asset('backoffice/app-assets/images/carousel/02.jpg') }}"
                                                                    class="lightbox-image" title="Awsome Title Here">
                                                                <img src="{{ asset('backoffice/images/post-image-4.jpg') }}"
                                                                     alt=""></a>
                                                        </figure>
                                                        <a href="{{ asset('backoffice/images/post-image-4.jpg') }}"
                                                           class="overlay lightbox-image" title="Awsome Title Here"></a>
                                                        <div class="item-caption">
                                                            <h4><strong>Package Golden</strong></h4>
                                                            <p>price $5000</p>
                                                        </div>
                                                    </article>

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
                                               placeholder="Confirmation Password" name="confirmation"
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

    <script>
        //Four Column Slider

        $('#owl-carousel').owlCarousel({
            loop: true,
            margin: 30,
            nav: true,
            autoplayHoverPause: true,
            autoplay: 5000,
            smartSpeed: 1000,
            responsive: {
                0: {
                    items: 1
                },
                600: {
                    items: 2
                },
                800: {
                    items: 2
                },
                1024: {
                    items: 3
                },
                1100: {
                    items: 4
                }
            }
        });

    </script>

@endsection
