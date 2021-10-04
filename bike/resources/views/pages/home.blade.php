@extends('layout.main')
@section('content')
    <!-- Content
      ============================================= -->
    <section id="content">
        <div class="content-wrap py-0">

            <div class="section section-curve mt-0"
                style="background: var(--theme1) url({{ asset('/bike/demos/bike/images/hero-bike.png') }}) right 70% / cover; height: 750px;">

                <div class="container center">
                    <div class="heading-block mt-4 border-bottom-0">
                        <h1 class="nott fw-semibold" style="font-size: 44px; letter-spacing: -1px">{{ env('APP_TAGLINE') }}
                        </h1>
                        <small class="mb-5 h6 lead">Revolutionizing your Commute Everyday in an Eco-Friendly Way.</small>
                    </div>

                    <a href="#modal-register" data-lightbox="inline"
                        class="button button-large button-rounded button-shadow">Sign Up Now</a>
                    <a href="#" class="button button-large button-rounded button-border">Free Test Drive</a>
                </div>

            </div>

            <div class="container">
                <div class="card border-0 mx-auto rounded ytb-card" style="box-shadow: 0 32px 46px 2px rgba(0,0,0,0.12);">
                    <div id="ytb-video" class="yt-bg-player card-img-top rounded-top" data-quality="hd1080" data-volume="80"
                        data-autoplay="false" data-container="self" data-video="https://youtu.be/SF0DLn3hEnc">
                        <div class="ytb-poster rounded-top"
                            style="background: url({{ asset('/bike/demos/bike/images/video-poster.jpg') }}) center center / cover; position: absolute; left: 0; top: 0; width: 100%; height: 100%;">
                        </div>
                        <a href="#" id="ytb-video-button" class="play-icon"><i class="icon-play"></i><i
                                class="icon-pause"></i></a>
                    </div>
                    <div class="card-body p-5">
                        <div class="row justify-content-between align-items-center">
                            <div class="col-md-6">
                                <div class="heading-block border-bottom-0 mb-0">
                                    <small class="text-black-50 text-uppercase ls3 fw-semibold">Electric Bike</small>
                                    <h2 class="nott fw-semibold ls0 mb-2">Free Test Drive</h2>
                                    <p class="mb-1">Energistically syndicate team building synergy after efficient
                                        human capital. Assertively underwhelm sticky solutions.</p>
                                </div>
                            </div>
                            <div class="col-md-5 mt-3 mt-md-0">
                                <div class="subscribe-widget" data-loader="button">
                                    <div class="widget-subscribe-form-result"></div>
                                    <form id="widget-subscribe-form" action="include/subscribe.php" method="post"
                                        class="mb-0">
                                        <input type="email" id="widget-subscribe-form-email"
                                            name="widget-subscribe-form-email" class="form-control not-dark required email"
                                            placeholder="Enter your Email Address..">
                                        <div class="form-check py-3">
                                            <input type="checkbox" class="form-check-input" id="subscribe-news">
                                            <label class="form-check-label nott ls0 fw-normal" for="subscribe-news">Get New
                                                Updates &amp; Announcements</label>
                                        </div>
                                        <button class="button button-shadow button-rounded m-0 nott ls0 w-100"
                                            type="submit">Subscribe</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row topmargin align-items-center mx-auto bottommargin-lg" style="max-width: 840px">
                    <div class="col-md-3 mb-2 mb-md-0">
                        <h3 class="mb-0">Partners:</h3>
                    </div>
                    <div class="col-md-9">
                        <div id="oc-images" class="owl-carousel image-carousel carousel-widget" data-margin="50"
                            data-nav="true" data-pagi="false" data-items-xs="2" data-items-md="3" data-items-xl="4"
                            data-loop="true" data-autoplay="3500">
                            <div class="oc-item"><a href="#"><img
                                        src="{{ asset('bike/demos/bike/images/clients/1.png') }}" alt="clients"></a></div>
                            <div class="oc-item"><a href="#"><img
                                        src="{{ asset('bike/demos/bike/images/clients/2.png') }}" alt="clients"></a></div>
                            <div class="oc-item"><a href="#"><img
                                        src="{{ asset('bike/demos/bike/images/clients/3.png') }}" alt="clients"></a></div>
                            <div class="oc-item"><a href="#"><img
                                        src="{{ asset('bike/demos/bike/images/clients/4.png') }}" alt="clients"></a></div>
                            <div class="oc-item"><a href="#"><img
                                        src="{{ asset('bike/demos/bike/images/clients/5.png') }}" alt="clients"></a></div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="section bg-transparent topmargin-lg mb-0">
                <div class="container">
                    <div class="heading-block mx-auto center" style="max-width: 600px">
                        <small class="text-black-50 text-uppercase ls3 fw-semibold">Our Service</small>
                        <h2 class="text-capitalize fw-semibold ls0 mb-1" style="font-size: 36px">How do you Get Bike</h2>
                        <p>Energistically syndicate team building synergy after efficient human capital. Assertively
                            underwhelm sticky solutions.</p>
                    </div>
                    <div class="clear"></div>
                    <div class="row showcase-section align-items-center justify-content-between clearfix">
                        <div class="col-lg-3 col-md-5">
                            <ul class="mb-0">
                                <li class="showcase-feature showcase-feature-active" data-target="#target-1">
                                    <h3>Choose Your Location.</h3>
                                    <p>Credibly conceptualize backward-compatible interna visionary.</p>
                                </li>
                                <li class="showcase-feature" data-target="#target-2">
                                    <h3>Choose Your Bike.</h3>
                                    <p>Assertively engineer standardized interactive meta-services.</p>
                                </li>
                                <li class="showcase-feature" data-target="#target-3">
                                    <h3>Get Confirmation Email.</h3>
                                    <p>Holisticly customize fully synergistic e-business continually.</p>
                                </li>
                                <li class="showcase-feature" data-target="#target-4">
                                    <h3 class="text-uppercase">Start Riding.</h3>
                                    <p>Interactively without backward-compatible enable.</p>
                                </li>
                            </ul>
                        </div>

                        <div class="col-lg-8 col-md-7">
                            <div id="target-1" class="showcase-target showcase-target-active">
                                <a href="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3151.8401081858365!2d144.95373095091972!3d-37.81721397965242!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6ad65d4c2b349649%3A0xb6899234e561db11!2sEnvato!5e0!3m2!1sen!2s!4v1526558559407"
                                    data-lightbox="iframe">
                                    <img src="{{ asset('bike/demos/bike/images/mockups/1.jpg') }}" alt="Image">
                                </a>
                            </div>
                            <div id="target-2" class="showcase-target">
                                <img class="rounded" src="{{ asset('bike/demos/bike/images/mockups/2.jpg') }}"
                                    alt="Image">
                            </div>
                            <div id="target-3" class="showcase-target">
                                <img class="rounded" src="{{ asset('bike/demos/bike/images/mockups/3.jpg') }}"
                                    alt="Image">
                            </div>
                            <div id="target-4" class="showcase-target">
                                <div class="rounded"
                                    style="background: url({{ asset('/bike/demos/bike/images/mockups/4.jpg') }}) bottom center no-repeat; background-size: cover; min-height: 500px;">
                                    <div class="row dark m-0">
                                        <div class="col-lg-5 rounded py-5 px-4" style="background-color: rgba(0,0,0,0.5);">
                                            <h2 class="display-5 mb-0">Ride Away.</h2>
                                            <hr>
                                            <p class="lead d-none d-md-block mb-0">In Style. With Confidence. Eco-Friendly
                                                Way.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="section bg1 mt-4" style="padding: 120px 0;">
                <div class="container">
                    <div class="heading-block mx-auto center" style="max-width: 600px">
                        <small class="text-black-50 text-uppercase ls3 fw-semibold">Available Bikes</small>
                        <h2 class="text-capitalize fw-semibold mb-2" style="font-size: 36px; letter-spacing: -1px">Check Out
                            Our Bikes</h2>
                        <p>Energistically syndicate team building synergy after efficient human capital. Assertively
                            underwhelm sticky solutions.</p>
                    </div>
                    <div class="row justify-content-between">
                        <div class="col-lg-6">
                            <div class="media row">
                                <img class="col-sm-5 p-5 p-sm-0 pe-sm-3"
                                    src="{{ asset('bike/demos/bike/images/bikes/1.png') }}" alt="Generic placeholder image"
                                    width="230">
                                <div class="col-sm-7 media-body">
                                    <h3 class="mb-3">Trek Bike</h3>
                                    <p class="mb-3 text-black-50">Cras sit amet nibh libero, in gravida nulla. Nulla vel
                                        metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at,
                                        tempus viverra turpis.</p>
                                    <a href="#" class="button button-shadow button-rounded fw-normal ls0 m-0 nott">View
                                        More</a>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-6 mt-5 mt-lg-0">
                            <div class="media row">
                                <img class="col-sm-5 p-5 p-sm-0 pe-sm-3"
                                    src="{{ asset('bike/demos/bike/images/bikes/2.png') }}" alt="Generic placeholder image"
                                    width="230">
                                <div class="col-sm-7 media-body">
                                    <h3 class="mb-3">Islabikes Luath Pro Series</h3>
                                    <p class="mb-3 text-black-50">Cras sit amet nibh libero, in gravida nulla. Nulla vel
                                        metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at,
                                        tempus viverra turpis.</p>
                                    <a href="#" class="button button-shadow button-rounded fw-normal ls0 m-0 nott">View
                                        More</a>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-6 mt-5">
                            <div class="media row">
                                <img class="col-sm-5 p-5 p-sm-0 pe-sm-3"
                                    src="{{ asset('bike/demos/bike/images/bikes/3.png') }}" alt="Generic placeholder image"
                                    width="230">
                                <div class="col-sm-7 media-body">
                                    <h3 class="mb-3">Syracuse Bicycle</h3>
                                    <p class="mb-3 text-black-50">Cras sit amet nibh libero, in gravida nulla. Nulla vel
                                        metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at,
                                        tempus viverra turpis.</p>
                                    <a href="#" class="button button-shadow button-rounded fw-normal ls0 m-0 nott">View
                                        More</a>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-6 mt-5">
                            <div class="media row">
                                <img class="col-sm-5 p-5 p-sm-0 pe-sm-3"
                                    src="{{ asset('bike/demos/bike/images/bikes/4.png') }}" alt="Generic placeholder image"
                                    width="230">
                                <div class="col-sm-7 media-body">
                                    <h3 class="mb-3">Wi-Bike Range</h3>
                                    <p class="mb-3 text-black-50">Cras sit amet nibh libero, in gravida nulla. Nulla vel
                                        metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at,
                                        tempus viverra turpis.</p>
                                    <a href="#" class="button button-shadow button-rounded fw-normal ls0 m-0 nott">View
                                        More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="section bg-transparent" style="padding: 80px 0">
                <div class="container">
                    <div class="heading-block mx-auto border-bottom-0 center" style="max-width: 600px">
                        <i class="icon-et-bike d-block h1 mb-4 text-black"></i>
                        <small class="text-black-50 text-uppercase ls3 fw-semibold">What We Have Done</small>
                        <h2 class="nott fw-semibold mb-2" style="font-size: 36px; letter-spacing: -1px"><span
                                class="counter counter-inherit text-dark inline-block">More than <code
                                    class="color"><span data-from="0" data-to="8465" data-refresh-interval="10"
                                        data-speed="1100"></span></code>+</span> Bikes are already Rented in <span>11</span>
                            Countries.</h2>
                        <p class="lead">Energistically syndicate team building synergy after efficient human
                            capital. Assertively underwhelm sticky solutions.</p>
                    </div>
                    <ul class="skills mx-auto" style="max-width: 600px">
                        <li data-percent="80">
                            <div class="progress">
                                <div class="progress-percent">
                                    <div class="counter counter-inherit counter-instant"><span data-from="0" data-to="8465"
                                            data-refresh-interval="10" data-speed="1100"></span></div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>

            <div id="section-price" class="section"
                style="background: url({{ asset('/bike/demos/bike/images/bg.png') }}) repeat-y center top; padding: 100px 0;">
                <div class="container">
                    <div class="row justify-content-between">
                        <div class="col-md-7">
                            <div class="heading-block border-bottom-0">
                                <small class="text-black-50 text-uppercase ls3 fw-semibold">Pricing Table</small>
                                <h2 class="text-capitalize fw-semibold mb-2" style="font-size: 36px; letter-spacing: -1px">
                                    Bike Rental Prices</h2>
                                <p class="lead">Energistically syndicate team building synergy after efficient
                                    human capital. Assertively underwhelm sticky solutions.</p>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sed voluptate vero esse ea hic
                                    quod veniam quam accusamus laboriosam ipsam provident voluptatibus iste earum facilis
                                    voluptatum, ducimus quis quae blanditiis temporibus minima libero! Doloribus sapiente
                                    voluptatibus cupiditate autem debitis id.</p>
                            </div>
                            <div class="row">
                                <div class="col-6">
                                    <!-- Bikes Slider -->
                                    <input class="range-slider-bikes" />
                                    <label class="mt-2" for="">Select Number of Bikes</label>
                                </div>
                                <div class="col-6">
                                    <!-- Days Slider -->
                                    <input class="range-slider-days" />
                                    <label class="mt-2" for="">Select Number of Days</label>
                                </div>
                            </div>
                            <div class="row mt-4 mt-md-5 clearfix">
                                <div class="col-sm-6">
                                    <h4 class="fw-semibold mb-3">Free Plan:</h4>
                                    <ul class="ms-3 mb-2">
                                        <li class="mb-2">1Hr Free Trail.</li>
                                        <li class="mb-2">Used Bikes.</li>
                                        <li class="mb-2">No Electric Bikes.</li>
                                        <li class="mb-2">Money Back Guarantee.</li>
                                    </ul>
                                </div>
                                <div class="col-sm-6 mt-4 mt-sm-0">
                                    <h4 class="fw-semibold mb-3">Pro Plans:</h4>
                                    <ul class="ms-3 mb-2">
                                        <li class="mb-2">Door - Door Service.</li>
                                        <li class="mb-2">Choose any Bike.</li>
                                        <li class="mb-2">Electric Bikes Included.</li>
                                        <li class="mb-2">Monthly Discounts Available.</li>
                                        <li class="mb-2">Money Back Guarantee.</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-5 mt-4 mt-md-0 sticky-sidebar-wrap">
                            <div class="card text-center border-0 shadow sticky-sidebar py-4">
                                <div class="card-body py-4">
                                    <h3 class="card-title fw-normal mb-0">Your Plan</h3>
                                    <!-- Price Value -->
                                    <div class="pricing-price fw-bold py-3"></div>
                                    <p class="card-text pricing-sub text-muted">$2/Days Per Bikes</p>
                                </div>
                                <div class="line my-1"></div>
                                <div class="card-body py-4">
                                    <ul class="iconlist ms-0" style="opacity: .8">
                                        <li class="mb-2">All New Bikes</li>
                                        <li class="mb-2">Door - Door Service</li>
                                        <li class="mb-2">Provide One Helmet/Bike</li>
                                        <li>Credit Cards Accepted</li>
                                    </ul>
                                    <a href="#"
                                        class="button button-rounded button-large ls0 fw-normal ms-0 mb-2 nott">Rent
                                        Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="section bg-transparent clearfix">
                <div class="container clearfix">

                    <div class="heading-block mx-auto border-bottom-0 center clearfix" style="max-width: 600px">
                        <small class="text-black-50 text-uppercase ls3 fw-semibold">Accessories</small>
                        <h2 class="text-capitalize fw-semibold mb-2" style="font-size: 36px; letter-spacing: -1px">Looking
                            for more Addons?</h2>
                        <p class="mb-3">Energistically syndicate team building synergy after efficient human
                            capital. Assertively underwhelm sticky solutions.</p>
                        <div class="center">
                            <div class="button ls0 button-rounded button-border nott fw-normal ">View More</div>
                        </div>
                    </div>

                    <div class="row clearfix">

                        <div class="col-lg-3 col-sm-6">
                            <a href="#" class="portfolio-item border d-block bg1">
                                <div class="portfolio-image">
                                    <img src="{{ asset('bike/demos/bike/images/items/1.png') }}" alt="Image">
                                </div>
                                <div class="portfolio-desc d-flex align-items-center justify-content-between position-absolute w-100"
                                    style="bottom: 0; padding: 0 20px 15px;">
                                    <h3 class="mb-0 text-dark">Bike Helmet</h3>
                                    <h6 class="text-dark">&dollar; 5.99/Day</h6>
                                </div>
                            </a>
                        </div>

                        <div class="col-lg-3 col-sm-6 mt-4 mt-sm-0">
                            <a href="#" class="portfolio-item border d-block">
                                <div class="portfolio-image">
                                    <img src="{{ asset('bike/demos/bike/images/items/2.png') }}" alt="Image">
                                </div>
                                <div class="portfolio-desc d-flex align-items-center justify-content-between position-absolute w-100"
                                    style="bottom: 0; padding: 0 20px 15px;">
                                    <h3 class="mb-0 text-dark">Leather Gloves</h3>
                                    <h6 class="text-dark">&dollar; 2.19/Day</h6>
                                </div>
                            </a>
                        </div>

                        <div class="col-lg-3 col-sm-6 mt-4 mt-lg-0">
                            <a href="#" class="portfolio-item border d-block bg1">
                                <div class="portfolio-image">
                                    <img src="{{ asset('bike/demos/bike/images/items/3.png') }}" alt="Image">
                                </div>
                                <div class="portfolio-desc d-flex align-items-center justify-content-between position-absolute w-100"
                                    style="bottom: 0; padding: 0 20px 15px;">
                                    <h3 class="mb-0 text-dark">Water Bottles</h3>
                                    <h6 class="text-dark">&dollar; 3.99/Day</h6>
                                </div>
                            </a>
                        </div>

                        <div class="col-lg-3 col-sm-6 mt-4 mt-lg-0">
                            <a href="#" class="portfolio-item border d-block">
                                <div class="portfolio-image">
                                    <img src="{{ asset('bike/demos/bike/images/items/4.png') }}" alt="Image">
                                </div>
                                <div class="portfolio-desc d-flex align-items-center justify-content-between position-absolute w-100"
                                    style="bottom: 0; padding: 0 20px 15px;">
                                    <h3 class="mb-0 text-dark">Bottle Holder</h3>
                                    <h6 class="text-dark">&dollar; 1.99/Day</h6>
                                </div>
                            </a>
                        </div>
                    </div>

                </div>
            </div>

            <div class="section bg-transparent clearfix">
                <div class="container">
                    <div class="row align-items-center justify-content-between">
                        <div class="col-lg-6">
                            <div class="heading-block border-bottom-0 mb-0">
                                <small class="text-black-50 text-uppercase ls3 fw-semibold">Contact Us</small>
                                <h2 class="text-capitalize fw-semibold mb-2" style="font-size: 44px; letter-spacing: -1px">
                                    Still Can't Decide?!</h2>
                                <p class="lead">Energistically syndicate team building synergy after efficient
                                    human capital. Assertively underwhelm sticky solutions.</p>
                            </div>
                        </div>

                        <div class="col-lg-6 d-inline-block d-sm-inline-flex justify-content-start justify-content-lg-end">
                            <div class="button button-xlarge ls0 button-rounded button-border nott fw-normal ">Start
                                Renting</div>
                            <div class="button button-xlarge ls0 button-rounded button-shadow nott fw-normal ">Contact Us
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section><!-- #content end -->

@endsection
