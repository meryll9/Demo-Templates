@extends('layout.main')
@section('content')
    <!-- Slider
      ============================================= -->
    <section id="slider" class="slider-element dark min-vh-75 d-flex align-items-center" style="padding: 80px 0">

        <div class="video-wrap z-1">
            <video poster="{{asset('hostel/demos/hostel/images/about/video/video-poster.jpg')}}" preload="auto" loop autoplay muted>
                <source src="{{asset('hostel/demos/hostel/images/about/video/video.mp4')}}" type='video/mp4' />
            </video>
            <div class="video-overlay" style="background: rgba(0,0,0,0.4)"></div>
        </div>

        <div class="container z-2">
            <div class="mw-sm">
                <h1 class="display-4 fw-bold">Feel like Home, wherever and whatever are you.</h1>
                <small class="op-04">Video by cottonbro from Pexels</small>
            </div>
        </div>

    </section>

    <!-- Content
      ============================================= -->
    <section id="content">

        <div class="content-wrap pb-0">

            <div class="container">

                <div class="row align-items-center flex-md-row-reverse col-mb-50 mb-0">
                    <div class="col-lg-6">
                        <img class="box-img shadow-left" src="{{asset('hostel/demos/hostel/images/box-img/1.jpg')}}" alt="Image">
                    </div>
                    <div class="col-lg-6 pe-0 pe-md-5">
                        <h5 class="color fw-normal mb-2"><i class="icon-line2-pointer"></i> Spain</h5>
                        <h3 class="text-dark h1 fw-semibold ls0 mb-4">Canvas Penthouse</h3>
                        <p class="mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Praesentium eius
                            explicabo, optio repellat saepe inventore dicta quibusdam minima quia, ratione minus a
                            consectetur dolorum, nulla provident tenetur.</p>

                        <h3 class="title-pricing mb-5">$39.99 <span>per week</span></h3>

                        <div class="row">
                            <div class="col-6">
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item ps-0"><i class="icon-line2-feed me-2"></i>WiFi Availbale</li>
                                    <li class="list-group-item ps-0"><i class="icon-line2-cup me-2"></i>Breakfast Included
                                    </li>
                                    <li class="list-group-item ps-0"><i class="icon-line2-clock me-2"></i>24x7 access</li>
                                </ul>
                            </div>

                            <div class="col-6">
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item ps-0"><i class="icon-line2-lock me-2"></i>Lockers Available
                                    </li>
                                    <li class="list-group-item ps-0"><i class="icon-line2-social-dropbox me-2"></i>Laundry
                                        Available</li>
                                    <li class="list-group-item ps-0"><i class="icon-line2-game-controller me-2"></i>Other
                                        Aminities</li>
                                </ul>
                            </div>
                        </div>
                        <a href="demo-hostel-single.html" class="button bg-color nott ls0 mt-4 mx-0">View More Details</a>
                    </div>
                </div>

                <div class="clear"></div>

                <div class="row align-items-center topmargin-lg col-mb-50 mb-lg-5">
                    <div class="col-lg-6">
                        <img class="box-img" src="{{asset('hostel/demos/hostel/images/box-img/2.jpg')}}" alt="Image">
                    </div>
                    <div class="col-lg-6 ps-md-5 mb-5 mb-md-0">
                        <h5 class="color fw-normal mb-2"><i class="icon-line2-pointer"></i> Denmark</h5>
                        <h3 class="text-dark h1 fw-semibold ls0 mb-4">Canvas Delux Bed</h3>
                        <p class="mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Praesentium eius
                            explicabo, optio repellat dolorum, nulla provident tenetur.</p>

                        <h3 class="title-pricing mb-5">$45.99 <span>per week</span></h3>

                        <div class="row">
                            <div class="col-6">
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item ps-0"><i class="icon-line2-feed me-2"></i>WiFi Availbale</li>
                                    <li class="list-group-item ps-0"><i class="icon-line2-cup me-2"></i>Breakfast Included
                                    </li>
                                    <li class="list-group-item ps-0"><i class="icon-line2-clock me-2"></i>24x7 access</li>
                                </ul>
                            </div>

                            <div class="col-6">
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item ps-0"><i class="icon-line2-lock me-2"></i>Lockers Available
                                    </li>
                                    <li class="list-group-item ps-0"><i class="icon-line2-social-dropbox me-2"></i>Laundry
                                        Available</li>
                                    <li class="list-group-item ps-0"><i class="icon-line2-game-controller me-2"></i>Other
                                        Aminities</li>
                                </ul>
                            </div>
                        </div>
                        <a href="demo-hostel-single.html" class="button bg-color nott ls0 mt-4 mx-0">View More Details</a>
                    </div>
                </div>

                <div class="clear"></div>

                <div class="row align-items-center flex-md-row-reverse topmargin-lg col-mb-50">
                    <div class="col-lg-6">
                        <img class="box-img shadow-left" src="{{asset('hostel/demos/hostel/images/box-img/3.jpg')}}" alt="Image">
                    </div>

                    <div class="col-lg-6 pe-0 pe-md-5 mb-5 mb-lg-0">
                        <h5 class="color fw-normal mb-2"><i class="icon-line2-pointer"></i> Amsterdam</h5>
                        <h3 class="text-dark h1 fw-semibold ls0 mb-4">Canvas Mixed Bed</h3>
                        <p class="mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Praesentium eius
                            explicabo, optio repellat saepe inventore ratione minus a consectetur dolorum, nulla provident
                            tenetur.</p>

                        <h3 class="title-pricing mb-5">$29.99 <span>per week</span></h3>

                        <div class="row">
                            <div class="col-6">
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item ps-0"><i class="icon-line2-feed me-2"></i>WiFi Availbale</li>
                                    <li class="list-group-item ps-0"><i class="icon-line2-cup me-2"></i>Breakfast Included
                                    </li>
                                    <li class="list-group-item ps-0"><i class="icon-line2-clock me-2"></i>24x7 access</li>
                                </ul>
                            </div>

                            <div class="col-6">
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item ps-0"><i class="icon-line2-lock me-2"></i>Lockers Available
                                    </li>
                                    <li class="list-group-item ps-0"><i class="icon-line2-social-dropbox me-2"></i>Laundry
                                        Available</li>
                                    <li class="list-group-item ps-0"><i class="icon-line2-game-controller me-2"></i>Other
                                        Aminities</li>
                                </ul>
                            </div>
                        </div>
                        <a href="demo-hostel-single.html" class="button bg-color nott ls0 mt-4 mx-0">View More Details</a>
                    </div>
                </div>

            </div>

            <div class="section mb-0 center dark parallax"
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
