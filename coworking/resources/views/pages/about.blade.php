@extends('layout.main')
@section('content')
    <!-- Content
      ============================================= -->
    <section id="content">
        <div class="content-wrap pb-0">

            <div class="container">
                <div class="row justify-content-between align-items-end">
                    <div class="col-md-8">
                        <h2 class="display-4 text-dark fw-semibold ls--2">A New Co-Working Space where you Feels Like
                            <span>Home</span>.</h2>
                        <p class="text-dark mb-0">Progressively syndicate user-centric schemas without front-end synergy.
                            Monotonectally envisioneer distributed markets rather than covalent testing procedures.</p>
                    </div>
                    <div class="col-md-3 text-md-end">
                        <a href="demo-coworking-price.html"
                            class="button button-rounded button-large m-0 center fw-medium nott ls0 fw-normal">Book your
                            Space Now</a>
                    </div>
                </div>

                <img src="{{asset('coworking/demos/coworking/images/about/hero.jpg')}}" alt="Image" class="rounded-4 my-5">

                <div class="row topmargin bottommargin gutter-lg-50 align-items-center">
                    <div class="col-lg-6 p-lg-5">
                        <div class="heading-block border-bottom-0 mb-0">
                            <div class="before-heading">Know More</div>
                            <h2 class="nott fw-semibold mb-4">Our Story</h2>
                            <p>Proactively procrastinate B2B quality vectors through 24/7 outsourcing. Rapidiously implement
                                cross functional relationships via user-centric convergence. Compellingly matrix prospective
                                sources after web-enabled e-commerce. Progressively visualize.</p>
                            <div class="row">
                                <div class="col-6 col-sm-6 mb-4">
                                    <div class="counter color fw-semibold"><span data-from="1" data-to="3"
                                            data-refresh-interval="2" data-speed="600"></span>+</div>
                                    <h5 class="mt-0 fw-medium">Branches</h5>
                                </div>

                                <div class="col-6 col-sm-6 mb-4">
                                    <div class="counter color fw-semibold"><span data-from="1" data-to="37"
                                            data-refresh-interval="11" data-speed="900"></span>+</div>
                                    <h5 class="mt-0 fw-medium">Single Studios</h5>
                                </div>

                                <div class="col-6 col-sm-6 mb-4">
                                    <div class="counter color fw-semibold"><span data-from="1" data-to="21"
                                            data-refresh-interval="3" data-speed="1000"></span>+</div>
                                    <h5 class="mt-0 fw-medium">Events per Month</h5>
                                </div>

                                <div class="col-6 col-sm-6 mb-4">
                                    <div class="counter color fw-semibold"><span data-from="100" data-to="4500"
                                            data-refresh-interval="100" data-speed="1500"></span>+</div>
                                    <h5 class="mt-0 fw-medium">Active Members</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 p-lg-5">
                        <img src="{{asset('coworking/demos/coworking/images/about/1.jpg')}}" alt="Image">
                    </div>
                </div>
            </div>

            <div class="section p-0 testimonials clearfix">
                <div class="container" style="padding: 120px 0">
                    <div class="heading-block border-bottom-0 center">
                        <div class="before-heading">What our Members Say</div>
                        <h2 class="nott fw-semibold">Testimonials</h2>
                        <p class="mb-0 mt-1"><span class="fw-semibold">Excellent, 9.6</span> out of 10 based on
                            <span class="fw-semibold">2,118</span> reviews. </p>
                    </div>

                    <div id="testimonials-carousel"
                        class="owl-carousel carousel-widget testimonial testimonial-full bg-transparent border-0 shadow-none p-0 mx-auto text-start clearfix"
                        data-animate-in="fadeIn" data-animate-out="fadeOut" data-margin="24" data-nav="false"
                        data-pagi="true" data-items="1" style="max-width: 740px">
                        <div class="slide">
                            <div class="testi-content">
                                <div class="testi-stars mb-4">
                                    <i class="icon-star3"></i>
                                    <i class="icon-star3"></i>
                                    <i class="icon-star3"></i>
                                    <i class="icon-star3"></i>
                                    <i class="icon-star3"></i>
                                </div>
                                <p>Collaboratively enhance intermandated innovation via cutting-edge core competencies.
                                    Professionally extend covalent e-markets and mission-critical communities. Dramatically
                                    communicate revolutionary web services for interactive synergy. Synergistically.</p>
                                <div class="testi-meta mt-4">
                                    Steve Jobs
                                    <span class="ls0">Apple Inc.</span>
                                </div>
                            </div>
                        </div>
                        <div class="slide">
                            <div class="testi-content">
                                <div class="testi-stars mb-4">
                                    <i class="icon-star3"></i>
                                    <i class="icon-star3"></i>
                                    <i class="icon-star3"></i>
                                    <i class="icon-star3"></i>
                                    <i class="icon-star-half2"></i>
                                </div>
                                <p>Intrinsicly synergize excellent content whereas user friendly action items. Rapidiously
                                    transition multimedia based information after top-line alignments. Authoritatively
                                    integrate accurate outsourcing vis-a-vis principle-centered systems energistically</p>
                                <div class="testi-meta mt-4">
                                    Collis Ta'eed
                                    <span class="ls0">Envato Inc.</span>
                                </div>
                            </div>
                        </div>
                        <div class="slide">
                            <div class="testi-content">
                                <div class="testi-stars mb-4">
                                    <i class="icon-star3"></i>
                                    <i class="icon-star3"></i>
                                    <i class="icon-star3"></i>
                                    <i class="icon-star3"></i>
                                </div>
                                <p>Compellingly engage multimedia based niche markets via value-added manufactured products.
                                    Competently formulate goal-oriented content for installed base users. Uniquely leverage
                                    other's granular ROI without 24/365 collaboration and idea-sharing.</p>
                                <div class="testi-meta mt-4">
                                    John Doe
                                    <span class="ls0">XYZ Inc.</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <div class="container">

                <div class="row flex-row-reverse mb-5 gutter-lg-50 align-items-center">
                    <div class="col-lg-6 p-lg-5">
                        <div class="heading-block border-bottom-0 mb-0">
                            <div class="before-heading">Know More</div>
                            <h2 class="nott fw-semibold mb-4">Brochure</h2>
                            <p>Proactively procrastinate B2B quality vectors through 24/7 outsourcing. Rapidiously implement
                                cross functional relationships via user-centric convergence.</p>
                            <a href="#" class="text-dark"><i class="icon-file-pdf1"></i> <u>Download Our Brochure</u>
                                <i class="icon-line-arrow-right"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-6 p-lg-5">
                        <img src="{{asset('coworking/demos/coworking/images/about/2.jpg')}}" alt="Image">
                    </div>
                </div>

            </div>

            <div class="section mb-0 pb-0 bg-theme-light clearfix" style="padding-top: 120px;">
                <div class="container">
                    <div class="row">
                        <div class="col-md-8 offset-1">
                            <div class="before-heading">Don't Hesitate to Reach out to Us</div>
                            <h2 class="nott fw-semibold display-4">Want to Talk?</h2>
                            <h4 class="fw-light mb-4">Call us at <a href="tel:+(61)8-234-532-45">+(61)8-234-532-45</a></h4>
                            <a href="mailto:noreply@canvas.com"
                                class="button button-rounded button-xlarge m-0 nott fw-semibold ls0 px-5">Email Us</a>
                        </div>
                    </div>
                </div>
                <img src="{{asset('coworking/demos/coworking/images/footer-bg.jpg')}}" alt="Footer Image" class="footer-img">
            </div>

        </div>
    </section><!-- #content end -->
@endsection
