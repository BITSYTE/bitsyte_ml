@extends('layouts.landingmain')

@section('content')
<!-- Start intro -->
<section id="intro" class="parallax" data-start="background-position: 50% -10px;" data-100p="background-position: 50% 60px;">
    <div class="section-overlay">
        <div class="float-content">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <div id="carousel-intro" class="carousel">
                            <div class="carousel-inner text-center">
                                <div class="active item">
                                    <h5 class="smoke">Welcome to</h5>
                                    <h1 class="text-uppercase light">Multi-purpose template</h1>
                                    <a href="#services" class="btn">Get started</a>
                                </div>
                                <div class="item">
                                    <h5 class="smoke">Versatile design for</h5>
                                    <h1 class="text-uppercase light">Personal portfolio and agency</h1>
                                    <a href="#services" class="btn">Get started</a>
                                </div>
                                <div class="item">
                                    <h5 class="smoke">Or use as</h5>
                                    <h1 class="text-uppercase light">Landing and promo page</h1>
                                    <a href="#services" class="btn">Get started</a>
                                </div>
                                <div class="item">
                                    <h5 class="smoke">It's really</h5>
                                    <h1 class="text-uppercase light">Easy to customize</h1>
                                    <a href="#services" class="btn">Get started</a>
                                </div>
                                <div class="item">
                                    <h5 class="smoke">And it fits</h5>
                                    <h1 class="text-uppercase light">Any brand and business</h1>
                                    <a href="#services" class="btn">Get started</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End intro -->
<!-- Start services -->
<section id="services" class="white-bg">
    <div class="container">
        <div class="row divide-md">
            <!-- Top content / image service -->
            <div class="col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2 divide-md text-center">
                <h2>2400 Downloads</h2>
                <hr class="title-divider">
                <p>Myway is provided and maintained by Awerest - Envato elite author, thank you for your confidence in our ability to serve you.</p>
            </div>
            <div class="clearfix"></div>
            <div class="col-sm-12 divide-md">
                <img class="img-responsive" src="http://placehold.it/1140x325" alt="">
            </div>
            <div class="clearfix"></div>
            <!-- Service #1 -->
            <div class="col-sm-4 divide-md text-center">
                <div class="myway-icon-services">
                    <svg viewBox="0 0 32 32">
                        <use xlink:href="#settings-toolkit"></use>
                    </svg>
                </div>
                <div class="divide-xs"></div>
                <h3>Fully Responsive</h3>
                <h4 class="smoke">Built with Bootstrap 3</h4>
                <p>Myway easily and efficiently scales your project with one code base, from phones to tablets to desktops.</p>
            </div>
            <!-- Service #2 -->
            <div class="col-sm-4 divide-md text-center">
                <div class="myway-icon-services">
                    <svg viewBox="0 0 32 32">
                        <use xlink:href="#monocle-mustache"></use>
                    </svg>
                </div>
                <div class="divide-xs"></div>
                <h3>Retina Ready</h3>
                <h4 class="smoke">Ultra sharp graphics</h4>
                <p>Myway will look beautiful on any device. Serve high-resolution images to devices with retina displays.</p>
            </div>
            <!-- Service #3 -->
            <div class="col-sm-4 divide-md text-center">
                <div class="myway-icon-services">
                    <svg viewBox="0 0 32 32">
                        <use xlink:href="#book-download"></use>
                    </svg>
                </div>
                <div class="divide-xs"></div>
                <h3>Well Documented</h3>
                <h4 class="smoke">Step by step customization</h4>
                <p>Packed in one nice document that comes with download. Saves your time so you can be dedicated to your work.</p>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
</section>
<!-- End services -->
<!-- Start logos -->
<section id="clients" class="parallax" data-bottom-top="background-position: 50% -50px;" data-top-bottom="background-position: 50% 0px;">
    <div class="section-overlay"></div>
    <div class="container">
        <div class="row divide-lg">
            <div class="col-xs-6 col-sm-3 text-center">
                <img src="http://placehold.it/180x100" alt="" class="img-responsive">
            </div>
            <div class="col-xs-6 col-sm-3 text-center">
                <img src="http://placehold.it/180x100" alt="" class="img-responsive">
            </div>
            <div class="col-xs-6 col-sm-3 text-center">
                <img src="http://placehold.it/180x100" alt="" class="img-responsive">
            </div>
            <div class="col-xs-6 col-sm-3 text-center">
                <img src="http://placehold.it/180x100" alt="" class="img-responsive">
            </div>
        </div>
    </div>
</section>
<!-- End logos -->
<!-- Start features -->
<section id="features" class="white-bg">
    <div class="container">
        <div class="row divide-md">
            <!-- Top content / image feature -->
            <div class="col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2 divide-md text-center">
                <h2>New look</h2>
                <hr class="title-divider">
                <p>Our old Myway is being torched in a large blaze of glory. We update Myway every now and then to follow trends, you can always redownload files for free and refresh your website.</p>
            </div>
            <div class="clearfix"></div>
            <div class="col-sm-12 divide-md">
                <img class="img-responsive" src="http://placehold.it/1140x325" alt="">
            </div>
            <div class="clearfix"></div>
            <!-- Feature #1 -->
            <div class="col-sm-4 divide-md media">
                <div class="media-left">
                    <div class="myway-icon-features">
                        <svg viewBox="0 0 32 32">
                            <use xlink:href="#bubble-speach"></use>
                        </svg>
                    </div>
                </div>
                <div class="media-body">
                    <h3>Top-notch support</h3>
                    <p>Support is available free of charge to all users of our products. Get in touch, we're glad to help.</p>
                </div>
            </div>
            <!-- Feature #2 -->
            <div class="col-sm-4 divide-md media">
                <div class="media-left">
                    <div class="myway-icon-features">
                        <svg viewBox="0 0 32 32">
                            <use xlink:href="#happy-smiley"></use>
                        </svg>
                    </div>
                </div>
                <div class="media-body">
                    <h3>Lifetime Updates</h3>
                    <p>Myway is developed and designed on top of the latest technologies and techniques.</p>
                </div>
            </div>
            <!-- Feature #3 -->
            <div class="col-sm-4 divide-md media">
                <div class="media-left">
                    <div class="myway-icon-features">
                        <svg viewBox="0 0 32 32">
                            <use xlink:href="#armchair-chair"></use>
                        </svg>
                    </div>
                </div>
                <div class="media-body">
                    <h3>Candid</h3>
                    <p>No tricks, Myway is what you see, a flexible and powerful for any of your projects.</p>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
</section>
<!-- End features -->
<!-- Start works header -->
<section id="works-top" class="parallax" data-bottom-top="background-position: 50% -50px;" data-top-bottom="background-position: 50% 0px;">
    <div class="section-overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-xs-12 divide-xl text-center">
                <h5 class="smoke">How awesome it is?</h5>
                <h1 class="light">Works & Features</h1>
            </div>
        </div>
    </div>
</section>
<!-- End works header -->
<!-- Start works -->
<section id="works" class="white-bg">
    <div class="container">
        <!-- Start #1 Content rigth / Image left -->
        <div class="row">
            <div class="divide-sm"></div>
            <div class="col-sm-6">
                <div class="squared">
                    <div class="squared-content">
                        <h2>Parallax Effect</h2>
                        <h5 class="smoke"><small>Packed with smooth scroll</small></h5>
                        <p>Easily to style, change fonts, colors, sizes in few clicks. Non experienced users will find Myway very easy to customize. Myway is the place to stay when you want it your way. Move sections up and down, arrange elements by your needs and change layout. We have included responsive video embeds and used just Google fonts, you can change to any other in a minute. We also have working contact form.</p>
                        <a href="http://themeforest.net/item/myway-onepage-bootstrap-parallax-retina-template/4058880?ref=awerest" target="_blank" class="btn btn-ghost">Start Creating</a>
                    </div>
                </div>
            </div>
            <div class="divide-sm visible-xs"></div>
            <div class="col-sm-6">
                <div class="squared">
                    <div class="squared-content">
                        <div id="carousel-1" class="carousel">
                            <div class="carousel-inner">
                                <div class="item active">
                                    <img src="http://placehold.it/555x555" alt="">
                                </div>
                                <div class="item">
                                    <img src="http://placehold.it/555x555" alt="">
                                </div>									</div>
                            <button class="left carousel-control" href="#carousel-1" data-slide="prev"><i class="fa fa-angle-left"></i></button>
                            <button class="right carousel-control" href="#carousel-1" data-slide="next"><i class="fa fa-angle-right"></i></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End #1 -->
        <hr class="no-margin">
        <!-- Start #2 Image rigth / Content left -->
        <div class="row">
            <div class="divide-sm visible-xs"></div>
            <div class="col-sm-6">
                <div class="squared">
                    <div class="squared-content">
                        <div id="carousel-2" class="carousel">
                            <div class="carousel-inner">
                                <div class="item active">
                                    <img src="http://placehold.it/555x555" alt="">
                                </div>
                                <div class="item">
                                    <img src="http://placehold.it/555x555" alt="">
                                </div>
                                <div class="item">
                                    <img src="http://placehold.it/555x555" alt="">
                                </div>
                            </div>
                            <button class="left carousel-control" href="#carousel-2" data-slide="prev"><i class="fa fa-angle-left"></i></button>
                            <button class="right carousel-control" href="#carousel-2" data-slide="next"><i class="fa fa-angle-right"></i></button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="divide-sm visible-xs"></div>
            <div class="col-sm-6">
                <div class="squared">
                    <div class="squared-content">
                        <h2>Tons of<br> Components</h2>
                        <h5 class="smoke"><small>Designed for Everyone, Everywhere.</small></h5>
                        <p class="dark-smoke">Bootstrap is the most popular front-end framework for developing responsive, mobile first projects on the web. Over a dozen reusable components built to provide iconography, dropdowns, input groups, navigation, alerts, and much more. Global CSS settings, fundamental HTML elements styled and enhanced with extensible classes, and an advanced grid system.</p>
                        <a href="http://themeforest.net/item/myway-onepage-bootstrap-parallax-retina-template/4058880?ref=awerest" target="_blank" class="btn btn-ghost">Get Myway</a>
                    </div>
                </div>
            </div>
            <div class="divide-sm visible-xs"></div>
        </div>
        <!-- End #2 -->
        <hr class="no-margin">
        <!-- Start #3 Content rigth / Image left -->
        <div class="row">
            <div class="divide-sm visible-xs"></div>
            <div class="col-sm-6">
                <div class="squared">
                    <div class="squared-content">
                        <h2>Supereasy<br> to customize</h2>
                        <h5 class="smoke"><small>Made for folks of all skill levels and projects of all sizes.</small></h5>
                        <p class="dark-smoke">Bootstrap makes front-end web development faster and easier. It's made for folks of all skill levels, devices of all shapes, and projects of all sizes. Beside ours, with Bootstrap, you get extensive and beautiful documentation with hundreds of live examples, code snippets, and more.</p>
                        <a href="http://themeforest.net/item/myway-onepage-bootstrap-parallax-retina-template/4058880?ref=awerest" target="_blank" class="btn btn-ghost">Start Today</a>
                    </div>
                </div>
            </div>
            <div class="divide-sm visible-xs"></div>
            <div class="col-sm-6">
                <div class="squared">
                    <div class="squared-content">
                        <div id="carousel-3" class="carousel">
                            <div class="carousel-inner">
                                <div class="item active">
                                    <img src="http://placehold.it/555x555" alt="">
                                </div>
                                <div class="item">
                                    <img src="http://placehold.it/555x555" alt="">
                                </div>
                                <div class="item">
                                    <img src="http://placehold.it/555x555" alt="">
                                </div>
                            </div>
                            <button class="left carousel-control" href="#carousel-3" data-slide="prev"><i class="fa fa-angle-left"></i></button>
                            <button class="right carousel-control" href="#carousel-3" data-slide="next"><i class="fa fa-angle-right"></i></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End #3 -->
    </div>
</section>
<!-- End works -->
<!-- Start gallery header -->
<section id="gallery-top" class="parallax" data-bottom-top="background-position: 50% -50px;" data-top-bottom="background-position: 50% 0px;">
    <div class="section-overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-xs-12 divide-xl text-center">
                <h1 class="light">Gallery</h1>
                <h5 class="smoke">Image, YouTube, Vimeo and Instagram options</h5>
            </div>
        </div>
    </div>
</section>
<!-- End gallery header -->
<!-- Start gallery-->
<section id="gallery" class="white-bg">
    <div class="container-fluid">
        <div class="row">
            <!-- Gallery item #1 -->
            <div class="col-xs-6 col-sm-4 gallery-item">
                <div class="thumbnail">
                    <a href="http://placehold.it/960x960" data-toggle="lightbox">
                        <img src="http://placehold.it/960x960" data-no-retina alt="">
                        <div class="gallery-overlay">
                            <div class="myway-icon-gallery">
                                <svg viewBox="0 0 32 32">
                                    <use xlink:href="#picture"></use>
                                </svg>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <!-- Gallery item #2 -->
            <div class="col-xs-6 col-sm-4 gallery-item">
                <div class="thumbnail">
                    <a href="https://www.youtube.com/watch?v=ngElkyQ6Rhs" data-width="1280" data-toggle="lightbox">
                        <img src="http://placehold.it/960x960" data-no-retina alt="">
                        <div class="gallery-overlay">
                            <div class="myway-icon-gallery">
                                <svg viewBox="0 0 32 32">
                                    <use xlink:href="#music-note"></use>
                                </svg>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <!-- Gallery item #3 -->
            <div class="col-xs-6 col-sm-4 gallery-item">
                <div class="thumbnail">
                    <a href="https://vimeo.com/125186718" data-remote="http://player.vimeo.com/video/125186718" data-toggle="lightbox">
                        <img src="http://placehold.it/960x960" data-no-retina alt="">
                        <div class="gallery-overlay">
                            <div class="myway-icon-gallery">
                                <svg viewBox="0 0 32 32">
                                    <use xlink:href="#painting-pallet"></use>
                                </svg>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <!-- Gallery item #4 -->
            <div class="col-xs-6 col-sm-4 gallery-item">
                <div class="thumbnail">
                    <a href="https://instagram.com/p/zfJ2BnoIsH" data-toggle="lightbox">
                        <img src="http://placehold.it/960x960" data-no-retina alt="">
                        <div class="gallery-overlay">
                            <div class="myway-icon-gallery">
                                <svg viewBox="0 0 32 32">
                                    <use xlink:href="#instagram"></use>
                                </svg>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <!-- Gallery item #5 -->
            <div class="col-xs-6 col-sm-4 gallery-item">
                <div class="thumbnail">
                    <a href="http://placehold.it/960x960" data-toggle="lightbox">
                        <img src="http://placehold.it/960x960" data-no-retina alt="">
                        <div class="gallery-overlay">
                            <div class="myway-icon-gallery">
                                <svg viewBox="0 0 32 32">
                                    <use xlink:href="#link"></use>
                                </svg>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <!-- Gallery item #6 -->
            <div class="col-xs-6 col-sm-4 gallery-item">
                <div class="thumbnail">
                    <a href="http://placehold.it/960x960" data-toggle="lightbox">
                        <img src="http://placehold.it/960x960" data-no-retina alt="">
                        <div class="gallery-overlay">
                            <div class="myway-icon-gallery">
                                <svg viewBox="0 0 32 32">
                                    <use xlink:href="#volume-loud"></use>
                                </svg>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End gallery -->
<!-- Start team header -->
<section id="team-top" class="parallax" data-bottom-top="background-position: 50% -50px;" data-top-bottom="background-position: 50% 0px;">
    <div class="section-overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-xs-12 divide-xl text-center">
                <h5 class="smoke">And we are?</h5>
                <h1 class="light">Awesome, we know.</h1>
            </div>
        </div>
    </div>
</section>
<!-- End team header-->
<!-- Start team -->
<section id="team" class="white-bg">
    <div class="container">
        <!-- Start team memebers -->
        <div class="row divide-md">
            <!-- Memeber #1 -->
            <div class="col-sm-4 divide-sm">
                <div class="thumbnail">
                    <div class="team-img">
                        <img src="http://placehold.it/150x150" alt="">
                        <div class="team-overlay">
                            <div class="myway-icon-team">
                                <a href="#" target="_blank">
                                    <svg viewBox="0 0 32 32">
                                        <use xlink:href="#linkedin"></use>
                                    </svg>
                                </a>
                                <a href="#" target="_blank">
                                    <svg viewBox="0 0 32 32">
                                        <use xlink:href="#facebook"></use>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="divide-xs"></div>
                    <h3>Aleksandar Macanovic</h3>
                    <p class="smoke">Girlfriend, Amiga500, Star Wars, LEGO.</p>
                </div>
            </div>
            <!-- Memeber #2 -->
            <div class="col-sm-4 divide-sm">
                <div class="thumbnail">
                    <div class="team-img">
                        <img src="http://placehold.it/150x150" alt="">
                        <div class="team-overlay">
                            <div class="myway-icon-team">
                                <a href="#" target="_blank">
                                    <svg viewBox="0 0 32 32">
                                        <use xlink:href="#dribbble"></use>
                                    </svg>
                                </a>
                                <a href="#" target="_blank">
                                    <svg viewBox="0 0 32 32">
                                        <use xlink:href="#twitter"></use>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="divide-xs"></div>
                    <h3>Sanja Sarcevic</h3>
                    <p class="smoke">Books, Boyfriend, Coffee, Music, Wine.</p>
                </div>
            </div>
            <!-- Memeber #3 -->
            <div class="col-sm-4 divide-sm">
                <div class="thumbnail">
                    <div class="team-img">
                        <img src="http://placehold.it/150x150" alt="">
                        <div class="team-overlay">
                            <div class="myway-icon-team">
                                <a href="#" target="_blank">
                                    <svg viewBox="0 0 32 32">
                                        <use xlink:href="#linkedin"></use>
                                    </svg>
                                </a>
                                <a href="#" target="_blank">
                                    <svg viewBox="0 0 32 32">
                                        <use xlink:href="#youtube1"></use>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="divide-xs"></div>
                    <h3>Imperial Stormtrooper</h3>
                    <p class="smoke">Job, PopCorn, Cognac, Legendary, High Five.</p>
                </div>
            </div>
        </div>
        <!-- End team memebers -->
        <!-- Start testimonials -->
        <hr class="no-margin">
        <div class="row">
            <div class="divide-xs"></div>
            <div class="divide-xs"></div>
            <!-- Testimonial #1 -->
            <div class="col-sm-3">
                <div class="thumbnail testimonial">
                    <blockquote>
                        <p>I don't care that they stole my idea. I care that they don't have any of their own.</p>
                        <p class="smoke">~ Nikola Tesla, Serbian inventor</p>
                    </blockquote>
                </div>
            </div>
            <!-- Testimonial #2 -->
            <div class="col-sm-3">
                <div class="thumbnail testimonial">
                    <blockquote>
                        <p>If there is anything that a man can do well, I say let him do it. Give him a chance.</p>
                        <p class="smoke">~ Abraham Lincoln, president</p>
                    </blockquote>
                </div>
            </div>
            <!-- Testimonial #3 -->
            <div class="col-sm-3">
                <div class="thumbnail testimonial">
                    <blockquote>
                        <p>There are no secrets to success. It is the result of preparation, hard work, and learning from failure.</p>
                        <p class="smoke">~ Colin Powell, statesman</p>
                    </blockquote>
                </div>
            </div>
            <!-- Testimonial #4 -->
            <div class="col-sm-3">
                <div class="thumbnail testimonial">
                    <blockquote>
                        <p>If you cannot work with love but only with distaste, it is better that you should leave your work.</p>
                        <p class="smoke">~ Khalil Gibran, artist</p>
                    </blockquote>
                </div>
            </div>
        </div>
        <!-- End testimonials -->
    </div>
</section>
<!-- End team -->
<!-- Start contact header / Google Map -->
{{--<section id="contact-top">
    <div id="gmap"></div>
</section>--}}
<!-- End contact header / Google Map -->
<!-- Start contact -->
<section id="contact" class="white-bg">
    <div class="container">
        <div class="row divide-md">
            <!-- Icon #1 -->
            <div class="col-sm-4 divide-sm text-center">
                <div class="myway-icon-info">
                    <svg viewBox="0 0 32 32">
                        <use xlink:href="#email-mail"></use>
                    </svg>
                </div>
                <div class="divide-xs"></div>
                <p>hq@website.com</p>
                <h4>Email</h4>
            </div>
            <!-- Icon #2 -->
            <div class="col-sm-4 divide-sm text-center">
                <div class="myway-icon-info">
                    <svg viewBox="0 0 32 32">
                        <use xlink:href="#iphone"></use>
                    </svg>
                </div>
                <div class="divide-xs"></div>
                <p>381(0)621234567</p>
                <h4>Call</h4>
            </div>
            <!-- Icon #3 -->
            <div class="col-sm-4 divide-sm text-center">
                <div class="myway-icon-info">
                    <svg viewBox="0 0 32 32">
                        <use xlink:href="#tag"></use>
                    </svg>
                </div>
                <div class="divide-xs"></div>
                <p>Grckoskolska 4, Novi Sad</p>
                <h4>Find us</h4>
            </div>
            <div class="clearfix"></div>
            <div class="divide-xs"></div>
            <!-- Contact form -->
            <form action="js/sendmail.php" class="form-inline flowuplabels" role="form" method="post" autocomplete="off" id="contactForm">
                <div class="form-group col-sm-6 fl_wrap">
                    <label class="fl_label" for="name">Name:</label>
                    <input type="text" name="name" value="" id="name" class="form-control fl_input">
                </div>
                <div class="form-group col-sm-6 fl_wrap">
                    <label class="fl_label" for="email">Email:</label>
                    <input type="text" name="email" value="" id="email" class="form-control fl_input">
                </div>
                <span class="form-group col-sm-6 fl_wrap honeypot">
							<label class="fl_label" for="last">Honeypot:</label>
							<input type="text" name="last" value="" id="last" class="form-control fl_input">
						</span>
                <div class="form-group col-sm-6 fl_wrap">
                    <label class="fl_label" for="message">Message:</label>
                    <input type="text" name="message" value="" id="message" class="form-control fl_input">
                </div>
                <div class="form-group col-sm-6">
                    <button type="submit" value="Send" id="submit" class="btn btn-block">Send</button>
                </div>
                <div class="form-group col-xs-12">
                    <div class="message">
                        <div class="divide-xs"></div>
                        <div class="alert"></div>
                    </div>
                </div>
            </form>
            <div class="clearfix"></div>
            <div class="divide-xs"></div>
            <div class="divide-xs"></div>
        </div>
    </div>
</section>
<!-- End contact -->

@endsection