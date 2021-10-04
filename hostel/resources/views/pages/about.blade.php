@extends('layout.main')
@section('content')
    <!-- Slider
      ============================================= -->
    <section id="slider" class="slider-element dark min-vh-75 d-flex align-items-center text-center"
        style="background: url({{asset('/hostel/demos/hostel/images/about/video/video-poster.jpg')}}) no-repeat center center / cover;padding: 80px 0">

        <div class="video-wrap z-1">
            <video poster="{{asset('hostel/demos/hostel/images/about/video/video-poster.jpg')}}" preload="auto" loop autoplay muted>
                <source src="{{asset('hostel/demos/hostel/images/about/video/video.mp4')}}" type='video/mp4' />
            </video>
        </div>

        <div class="container z-2">
            <h1 class="display-2 fw-bold">About Us</h1>
            <h3 class="color text-uppercase ls5 h4">Feel like home</h3>
            <small class="op-07">Video by cottonbro from Pexels</small>
        </div>

    </section>

    <!-- Content
      ============================================= -->
    <section id="content">

        <div class="content-wrap pb-0">

            <div class="container">

                <div class="row justify-content-center topmargin-sm">
                    <div class="col-md-5 offset-md-1">
                        <h3 class="text-dark"><i class="icon-line-circle-check color me-1 position-relative"
                                style="top: 2px"></i> Why do you choose Canvas?</h3>
                        <p>Dramatically re-engineer integrated e-tailers without interoperable growth strategies.
                            Collaboratively create customer directed "outside the box" thinking with world-class e-commerce.
                        </p>
                    </div>
                    <div class="col-md-5 ps-md-5">
                        <h3 class="text-dark"><i class="icon-line-circle-check color me-1 position-relative"
                                style="top: 2px"></i> How we do</h3>
                        <p>Intrinsicly recaptiualize state of the art information for interactive applications. Dynamically
                            optimize proactive convergence and timely value.</p>
                    </div>
                    <div class="clear"></div>
                    <div class="col-lg-6 col-md-9 mt-5">
                        <a href="https://www.youtube.com/watch?v=P3Huse9K6Xs" data-lightbox="iframe"
                            class="position-relative d-block button-play h-scale-n-sm all-ts">
                            <img src="{{asset('hostel/demos/hostel/images/about/video.jpg')}}" alt="Video Thumb" class="box-img">
                            <i class="icon-line2-control-play"></i>
                        </a>
                    </div>
                </div>
            </div>

            <div class="section mb-0" style="background-color: #fcf5ed">
                <div class="container">
                    <div class="row justify-content-center">

                        <div class="col-md-5 text-center">
                            <div class="heading-block">
                                <h3 class="text-dark">Check out our Services</h3>
                                <span>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odio, perspiciatis.</span>
                            </div>
                        </div>

                        <div class="clear"></div>

                        <!-- Feature Box
           ============================================= -->
                        <div class="col-lg-4 col-md-6 mb-4">
                            <i class="icon-line2-feed color ms-0 mb-4 i-plain d-block float-none"></i>
                            <h4 class="mb-3">WiFi Available</h4>
                            <p class="text-muted">Add any Field to your Custom Form. Canvas's inbuilt Forms Processor
                                will handle the rest. You will never have to touch any PHP Codes.</p>
                        </div>

                        <!-- Feature Box
           ============================================= -->
                        <div class="col-lg-4 col-md-6 mb-4">
                            <i class="icon-line2-cup color ms-0 mb-3 i-plain d-block float-none"></i>
                            <h4 class="mb-3">Cafeteria</h4>
                            <p class="text-muted">Add any Field to your Custom Form. Canvas's inbuilt Forms Processor
                                will handle the rest. You will never have to touch any PHP Codes.</p>
                        </div>

                        <!-- Feature Box
           ============================================= -->
                        <div class="col-lg-4 col-md-6 mb-4">
                            <i class="icon-line2-screen-desktop color ms-0 mb-3 i-plain d-block float-none"></i>
                            <h4 class="mb-3">Workspace Area</h4>
                            <p class="text-muted">Add any Field to your Custom Form. Canvas's inbuilt Forms Processor
                                will handle the rest. You will never have to touch any PHP Codes.</p>
                        </div>

                        <!-- Feature Box
           ============================================= -->
                        <div class="col-lg-4 col-md-6 mb-4">
                            <i class="icon-line2-lock color ms-0 mb-3 i-plain d-block float-none"></i>
                            <h4 class="mb-3">Lockers</h4>
                            <p class="text-muted">Add any Field to your Custom Form. Canvas's inbuilt Forms Processor
                                will handle the rest. You will never have to touch any PHP Codes.</p>
                        </div>

                        <!-- Feature Box
           ============================================= -->
                        <div class="col-lg-4 col-md-6 mb-4">
                            <i class="icon-line2-shield color ms-0 mb-3 i-plain d-block float-none"></i>
                            <h4 class="mb-3">100% Secured</h4>
                            <p class="text-muted">Add any Field to your Custom Form. Canvas's inbuilt Forms Processor
                                will handle the rest. You will never have to touch any PHP Codes.</p>
                        </div>

                        <!-- Feature Box
           ============================================= -->
                        <div class="col-lg-4 col-md-6 mb-4">
                            <i class="icon-line2-printer color ms-0 mb-3 i-plain d-block float-none"></i>
                            <h4 class="mb-3">Printers &amp; Fax</h4>
                            <p class="text-muted">Add any Field to your Custom Form. Canvas's inbuilt Forms Processor
                                will handle the rest. You will never have to touch any PHP Codes.</p>
                        </div>

                        <!-- Feature Box
           ============================================= -->
                        <div class="col-lg-4 col-md-6 mb-2">
                            <i class="icon-line2-drawer color ms-0 mb-3 i-plain d-block float-none"></i>
                            <h4 class="mb-3">Well Furnished</h4>
                            <p class="text-muted">Add any Field to your Custom Form. Canvas's inbuilt Forms Processor
                                will handle the rest. You will never have to touch any PHP Codes.</p>
                        </div>

                        <!-- Feature Box
           ============================================= -->
                        <div class="col-lg-4 col-md-6 mb-2">
                            <i class="icon-line2-clock color ms-0 mb-3 i-plain d-block float-none"></i>
                            <h4 class="mb-3">24x7 Access</h4>
                            <p class="text-muted">Add any Field to your Custom Form. Canvas's inbuilt Forms Processor
                                will handle the rest. You will never have to touch any PHP Codes.</p>
                        </div>

                        <!-- Feature Box
           ============================================= -->
                        <div class="col-lg-4 col-md-6 mb-2">
                            <i class="icon-line2-game-controller color ms-0 mb-3 i-plain d-block float-none"></i>
                            <h4 class="mb-3">Other Activities</h4>
                            <p class="text-muted">Add any Field to your Custom Form. Canvas's inbuilt Forms Processor
                                will handle the rest. You will never have to touch any PHP Codes.</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="section m-0 bg-transparent section-counter">
                <div class="container mw-md">
                    <div class="row justify-content-between">
                        <div class="col-md-3 col-sm-6 mb-5 mb-lg-0">
                            <h2 class="display-3">4.8</h2>
                            <div class="product-rating mb-1 color">
                                <i class="icon-star3"></i>
                                <i class="icon-star3"></i>
                                <i class="icon-star3"></i>
                                <i class="icon-star3"></i>
                                <i class="icon-star3"></i>
                            </div>
                            <span class="d-block">2,0321 Ratings</span>
                            <a href="#" class="btn-link">See reviews<i class="icon-line-arrow-right"></i></a>
                        </div>

                        <div class="col-md-3 col-sm-6 mb-5 mb-lg-0">
                            <h2 class="counter"><span data-from="1" data-to="3" data-refresh-interval="1"
                                    data-speed="600"></span>.<span data-from="0" data-to="75" data-refresh-interval="100"
                                    data-speed="2000"></span><small>M</small></h2>
                            <span class="mb-2 d-block">People Liked and Follows our Hostels in Social Media.</span>
                            <a href="#" class="i-rounded i-small me-1 si-colored h-op-09 si-facebook">
                                <i class="icon-facebook"></i>
                            </a>
                            <a href="#" class="i-rounded i-small me-1 si-colored h-op-09 si-instagram">
                                <i class="icon-instagram"></i>
                            </a>
                            <a href="#" class="i-rounded i-small me-1 si-colored h-op-09 si-pinterest">
                                <i class="icon-pinterest"></i>
                            </a>
                        </div>

                        <div class="col-md-3 col-sm-6 mb-5 mb-lg-0">
                            <h2 class="counter"><span data-from="10" data-to="4304" data-comma="true"></span>+</h2>
                            <span class="d-block">New People Comes Every Year.</span>
                            <a href="#" class="btn-link">https://google.com<i class="icon-line-arrow-right"></i></a>
                        </div>
                    </div>

                </div>
            </div>

            <div class="line m-0"></div>

            <div class="section m-0 bg-transparent section-counter">
                <div class="container mw-sm">
                    <div class="row justify-content-center">

                        <div class="col-md-5 text-center">
                            <div class="heading-block">
                                <h3 class="text-dark">Awards</h3>
                                <span>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odio, perspiciatis.</span>
                            </div>
                        </div>

                        <div class="clear"></div>

                        <div class="row justify-content-center align-items-center mt-4 col-mb-50">
                            <div class="col-md-4 col-6 center"><img src="{{asset('hostel/demos/hostel/images/about/awards/airbnb.svg')}}"
                                    height="80" alt="Clients"></div>
                            <div class="col-md-4 col-6 center"><img src="{{asset('hostel/demos/hostel/images/about/awards/tripadvisor.svg')}}"
                                    height="80" alt="Clients"></div>
                            <div class="col-md-4 col-6 center"><img src="{{asset('hostel/demos/freelancer/images/clients/google.svg')}}"
                                    height="80" alt="Clients"></div>
                            <div class="col-md-4 col-6 center"><img src="{{asset('hostel/demos/hostel/images/about/awards/expedia.svg')}}"
                                    height="50" alt="Clients"></div>
                            <div class="col-md-4 col-6 center"><img src="{{asset('hostel/demos/hostel/images/about/awards/airbnb-2.svg')}}"
                                    height="80" alt="Clients"></div>
                            <div class="col-md-4 col-6 center"><img src="{{asset('hostel/demos/freelancer/images/clients/amazon.svg')}}"
                                    height="80" alt="Clients"></div>
                        </div>

                    </div>
                </div>
            </div>

            <div class="section mt-3 mb-0 center dark parallax"
                style="background: url({{asset('/hostel/demos/hostel/images/hero.jpg')}}) center center / cover; padding: 170px 0;">
                <div class="container">
                    <h3 class="h1 mb-5">More than 100,000<br>Travellers Visit Our Hostels.</h3>
                    <a href="demo-hostel-tour.html" class="button button-xlarge fw-semibold bg-color nott ls0 px-5">Book
                        Now</a>
                </div>
            </div>

        </div>
    </section><!-- #content end -->

@endsection
