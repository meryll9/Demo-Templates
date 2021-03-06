@extends('layout.main')
@section('content')
    <!-- Page Title
      ============================================= -->
    <section id="page-title" class="page-title-parallax page-title-center page-title-dark include-header"
        style="background-image: linear-gradient(to top, rgba(254,150,3,0.5), #39384D), url({{asset('seo/demos/seo/images/services/content_marketing-title.jpg')}}); background-size: cover; padding: 120px 0;"
        data-bottom-top="background-position:0px 300px;" data-top-bottom="background-position:0px -300px;">
        <div id="particles-line"></div>

        <div class="container clearfix mt-4">
            <div class="badge rounded-pill border border-light text-light">Get In Touch</div>
            <h1>Contact Us</h1>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Contact</li>
            </ol>
        </div>

    </section><!-- #page-title end -->

    <!-- Content
      ============================================= -->
    <section id="content">

        <div class="content-wrap pb-0">

            <div class="container mb-3">
                <div class="row justify-content-between">
                    <div class="col-lg-3 col-md-6">
                        <div class="feature-box flex-column text-center">
                            <div class="fbox-image text-center mb-3">
                                <img height="120" src="{{asset('/seo/demos/seo/images/icons/seo.svg')}}" alt="Feature Icon">
                            </div>
                            <div class="fbox-content">
                                <h3 class="nott ls0 mb-4">Location:</h3>
                                <p class="text-smaller mb-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed
                                    do eiusmod.</p>
                                <address>
                                    <a href="https://maps.google.com">
                                        <u>795 Folsom Ave, Suite 600<br>
                                            San Francisco, CA 94107</u>
                                    </a>
                                </address>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="feature-box flex-column text-center">
                            <div class="fbox-image text-center mb-3">
                                <img height="120" src="{{asset('/seo/demos/seo/images/icons/social.svg')}}" alt="Feature Icon">
                            </div>
                            <div class="fbox-content">
                                <h3 class="nott ls0 mb-4">Contact Us:</h3>
                                <p class="text-smaller mb-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed
                                    do eiusmod.</p>
                                <a class="btn btn-link" href="mailto:info@canvas.com"><u>noreply@canvas.com</u></a>
                                <a class="btn btn-link" href="tel:10-22-33445566"><u>(10) 22 33445566</u></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="feature-box flex-column text-center">
                            <div class="fbox-image text-center mb-3">
                                <img height="120" src="{{asset('/seo/demos/seo/images/icons/group.svg')}}" alt="Feature Icon">
                            </div>
                            <div class="fbox-content">
                                <h3 class="nott ls0 mb-4">Live Chat:</h3>
                                <p class="text-smaller mb-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed
                                    do eiusmod.</p>
                                <a href="#"><u>Click Here</u></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="clear"></div>

            <!-- Google Map
        ============================================= -->
            <section class="gmap vh-60 topmargin-lg" data-address="Melbourne, Australia"
                data-markers='[{address: "Melbourne, Australia", html: $("#map-marker-1").html(), icon:{ image: "images/icons/map-icon-red.png", iconsize: [32, 39], iconanchor: [32,39] } }]'>
            </section>
            <div id="map-marker-1" class="d-none">
                <div style="width: 300px;">
                    <h4 class="mb-2">Hi! We are <span>Envato!</span></h4>
                    <p class="mb-0" style="font-size:1rem;">Our mission is to help people to <strong>earn</strong>
                        and to <strong>learn</strong> online. We operate <strong>marketplaces</strong> where hundreds of
                        thousands of people buy and sell digital goods every day.</p>
                </div>
            </div>

            <!-- Form Section
        ============================================= -->
            <div class="section mt-0 mb-3"
                style="background: url({{asset('seo/demos/seo/images/sections/1.jpg')}}) no-repeat center center; background-size: cover; padding: 100px 0;">
                <div class="container">
                    <div class="row justify-content-between align-items-center">

                        <div class="col-md-4">
                            <div class="heading-block border-bottom-0 bottommargin-sm">
                                <div class="badge rounded-pill badge-default">Careers</div>
                                <h3 class="nott ls0">Get your free Quote today</h3>
                            </div>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deserunt dolore voluptatem
                                assumenda quae possimus sunt dignissimos tempora officia.</p>
                        </div>

                        <div class="col-lg-3 col-md-4">
                            <div class="card shadow-sm">
                                <div class="card-body">
                                    <h4 class="mb-3">Apply Now</h4>
                                    <div class="form-widget">
                                        <div class="form-result"></div>
                                        <form class="row mb-0" id="template-contactform" name="template-contactform"
                                            action="include/form.php" method="post">
                                            <div class="col-12 form-group mb-3">
                                                <label for="template-contactform-name">Name:*</label>
                                                <input type="text" id="template-contactform-name"
                                                    name="template-contactform-name" class="form-control input-sm required"
                                                    value="">
                                            </div>
                                            <div class="col-12 form-group mb-3">
                                                <label for="template-contactform-email">Email Address:*</label>
                                                <input type="email" id="template-contactform-email"
                                                    name="template-contactform-email" class="form-control input-sm required"
                                                    value="">
                                            </div>
                                            <div class="col-12 form-group mb-4">
                                                <label for="template-contactform-website">Website:*</label>
                                                <input type="text" id="template-contactform-website"
                                                    name="template-contactform-website"
                                                    class="form-control input-sm required" value="">
                                            </div>
                                            <div class="col-12 form-group mb-0">
                                                <button class="button button-rounded w-100 nott ls0 m-0" type="submit"
                                                    id="template-contactform-submit" name="template-contactform-submit"
                                                    value="submit">Apply Now</button>
                                            </div>

                                            <input type="hidden" name="prefix" value="template-contactform-">
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4 mt-5 mt-md-0 center">
                            <a href="https://www.youtube.com/watch?v=P3Huse9K6Xs" data-lightbox="iframe"
                                class="play-icon shadow"><i class="icon-play"></i></a>
                        </div>

                    </div>

                </div>
            </div>
        </div>
    </section><!-- #content end -->

@endsection
