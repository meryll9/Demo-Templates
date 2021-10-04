@extends('layout.main')
@section('content')
    <!-- Page Title
      ============================================= -->

    <section id="page-title" class="page-title-parallax page-title-center page-title-dark include-header"
        style="background-image: linear-gradient(to top, rgba(254,150,3,0.5), #39384D), url({{asset('/seo/demos/seo/images/services/social-title.jpg')}}); background-size: cover; padding: 120px 0;"
        data-bottom-top="background-position:0px 300px;" data-top-bottom="background-position:0px -300px;">
        <div id="particles-line"></div>

        <div class="container clearfix mt-4">
            <div class="badge rounded-pill border border-light text-light">Services</div>
            <h1>Social Media Marketing</h1>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="demo-seo.html">Home</a></li>
                <li class="breadcrumb-item"><a href="demo-seo-about.html">Services</a></li>
                <li class="breadcrumb-item active" aria-current="page">Social Media Marketing</li>
            </ol>
        </div>

    </section><!-- #page-title end -->

    <!-- Content
      ============================================= -->
    <section id="content">

        <div class="content-wrap pb-0">

            <div class="container">
                <div class="row align-items-end">
                    <div class="col-lg-6">
                        <div class="badge rounded-pill badge-default">Marketing</div>
                        <h2 class="display-4 fw-bold">Marketing in Social Media.</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quia vitae mollitia dignissimos ab qui
                            aspernatur.</p>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt laborum, molestiae eum odit illo
                            pariatur. Sapiente deserunt optio dignissimos maiores pariatur, expedita voluptate quibusdam
                            distinctio beatae.</p>
                        <a href="#" class="button button-rounded button-large nott ls0">Get Started</a>
                        <a href="demo-seo-contact.html"
                            class="button button-rounded button-large button-light text-dark bg-white border nott ls0">Contact
                            Us</a>
                    </div>
                    <div class="col-lg-6 mt-4 mt-lg-0">
                        <img src="{{asset('seo/demos/seo/images/services/social.svg')}}" alt="Image">
                    </div>
                </div>

                <div class="clear line my-6"></div>

                <div class="heading-block border-bottom-0 center">
                    <div class="badge rounded-pill badge-default">Features</div>
                    <h3 class="nott ls0">What We Provide:</h3>
                </div>
                <div class="clear"></div>
                <div class="row mt-4 col-mb-50 mb-0">
                    <div class="col-sm-6 col-lg-4">
                        <div class="feature-box">
                            <div class="fbox-icon mb-4">
                                <a href="#"><i class="icon-facebook si-colored si-facebook border-0"></i></a>
                            </div>
                            <div class="fbox-content">
                                <h3 class="nott">FaceBook Marketing</h3>
                                <p>Powerful Layout with Responsive functionality that can be adapted to any screen size.
                                    Resize browser to view.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6 col-lg-4">
                        <div class="feature-box">
                            <div class="fbox-icon mb-4">
                                <a href="#"><i class="icon-instagram2 si-colored si-instagram border-0"></i></a>
                            </div>
                            <div class="fbox-content">
                                <h3 class="nott">Instagram Marketing</h3>
                                <p>Looks beautiful &amp; ultra-sharp on Retina Screen Displays. Retina Icons, Fonts &amp;
                                    all others graphics are optimized.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6 col-lg-4">
                        <div class="feature-box">
                            <div class="fbox-icon mb-4">
                                <a href="#"><i class="icon-twitter si-colored si-twitter border-0"></i></a>
                            </div>
                            <div class="fbox-content">
                                <h3 class="nott">Twitter Marketing</h3>
                                <p>Canvas includes tons of optimized code that are completely customizable and deliver
                                    unmatched fast performance.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6 col-lg-4">
                        <div class="feature-box">
                            <div class="fbox-icon mb-4">
                                <a href="#"><i class="icon-email2 si-colored si-google border-0"></i></a>
                            </div>
                            <div class="fbox-content">
                                <h3 class="nott">Email Marketing</h3>
                                <p>Canvas included 20+ custom designed Slider Pages with Premium Sliders like Layer,
                                    Revolution, Swiper &amp; others.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6 col-lg-4">
                        <div class="feature-box">
                            <div class="fbox-icon mb-4">
                                <a href="#"><i class="icon-pinterest si-colored si-pinterest border-0"></i></a>
                            </div>
                            <div class="fbox-content">
                                <h3 class="nott">Pinterest Marketing</h3>
                                <p>Change the color scheme of the Theme in a flash just by changing the 6-digit HEX code in
                                    the colors.php file.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6 col-lg-4">
                        <div class="feature-box">
                            <div class="fbox-icon mb-4">
                                <a href="#"><i class="icon-line-paper-stack border-0"></i></a>
                            </div>
                            <div class="fbox-content">
                                <h3 class="nott">Sales Banner</h3>
                                <p>Use any Font you like from Google Web Fonts, Typekit or other Web Fonts. They will blend
                                    in perfectly.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="clear"></div>

            <!-- Features
        ============================================= -->
            <div class="section mb-0">
                <div class="container">
                    <div class="heading-block border-bottom-0 center">
                        <div class="badge rounded-pill badge-default">Causes</div>
                        <h3 class="nott ls0">Other Causes</h3>
                    </div>
                    <div class="row col-mb-30 align-content-stretch">

                        <div class="col-lg-4 col-md-6 d-flex">
                            <div class="card">
                                <div class="card-body p-5">
                                    <div class="feature-box flex-column">
                                        <div class="fbox-icon mb-3">
                                            <img src="{{asset('seo/demos/seo/images/icons/seo.svg')}}" alt="Feature Icon"
                                                class="bg-transparent rounded-0">
                                        </div>
                                        <div class="fbox-content">
                                            <h3 class="nott ls0 text-larger">SEO optimization</h3>
                                            <p class="text-smaller">Lorem ipsum dolor sit amet, consectetur adipisicing
                                                elit. Illum, dolore, voluptates!</p>
                                        </div>
                                        <ul class="iconlist ms-3 mt-4 mb-0">
                                            <li class="mb-2 text-muted"><i class="icon-check text-smaller color"></i>
                                                Unlimited Pages</li>
                                            <li class="mb-2 text-muted"><i class="icon-check text-smaller color"></i> UI/UX
                                                Design</li>
                                            <li class="mb-2 text-muted"><i class="icon-check text-smaller color"></i> Speed
                                                Optimized</li>
                                            <li class="mb-2 text-muted"><i class="icon-check text-smaller color"></i>
                                                Graphics Banner</li>
                                            <li class="text-muted"><i class="icon-check text-smaller color"></i>
                                                Advertisement</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6 d-flex">
                            <div class="card">
                                <div class="card-body p-5">
                                    <div class="feature-box flex-column">
                                        <div class="fbox-icon mb-3">
                                            <img src="{{asset('seo/demos/seo/images/icons/social.svg')}}" alt="Feature Icon"
                                                class="bg-transparent rounded-0">
                                        </div>
                                        <div class="fbox-content">
                                            <h3 class="nott ls0 text-larger">Social Media Marketing</h3>
                                            <p class="text-smaller">Lorem ipsum dolor sit amet, consectetur adipisicing
                                                elit. Illum, dolore, voluptates!</p>
                                        </div>
                                        <ul class="iconlist ms-3 mt-4 mb-0">
                                            <li class="mb-2 text-muted"><i class="icon-check text-smaller color"></i>
                                                Facebook Advertising</li>
                                            <li class="mb-2 text-muted"><i class="icon-check text-smaller color"></i>
                                                Instagram Advertising</li>
                                            <li class="mb-2 text-muted"><i class="icon-check text-smaller color"></i>
                                                Twitter Advertising</li>
                                            <li class="mb-2 text-muted"><i class="icon-check text-smaller color"></i>
                                                Pinterest Advertising</li>
                                            <li class="text-muted"><i class="icon-check text-smaller color"></i> Sales
                                                Banner</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6 d-flex">
                            <div class="card">
                                <div class="card-body p-5">
                                    <div class="feature-box flex-column">
                                        <div class="fbox-icon mb-3">
                                            <img src="{{asset('seo/demos/seo/images/icons/adword.svg')}}" alt="Feature Icon"
                                                class="bg-transparent rounded-0">
                                        </div>
                                        <div class="fbox-content">
                                            <h3 class="nott ls0 text-larger">Adwords Campaign</h3>
                                            <p class="text-smaller">Lorem ipsum dolor sit amet, consectetur adipisicing
                                                elit. Illum, dolore, voluptates!</p>
                                        </div>
                                        <ul class="iconlist ms-3 mt-4 mb-0">
                                            <li class="mb-2 text-muted"><i class="icon-check text-smaller color"></i>
                                                Unlimited Pages</li>
                                            <li class="mb-2 text-muted"><i class="icon-check text-smaller color"></i>
                                                UI/UX Design</li>
                                            <li class="mb-2 text-muted"><i class="icon-check text-smaller color"></i>
                                                Speed Optimized</li>
                                            <li class="text-muted"><i class="icon-check text-smaller color"></i>
                                                Advertisement</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6 d-flex">
                            <div class="card">
                                <div class="card-body p-5">
                                    <div class="feature-box flex-column">
                                        <div class="fbox-icon mb-3">
                                            <img src="{{asset('seo/demos/seo/images/icons/analysis.svg')}}" alt="Feature Icon"
                                                class="bg-transparent rounded-0">
                                        </div>
                                        <div class="fbox-content">
                                            <h3 class="nott ls0 text-larger">Digital Analysis</h3>
                                            <p class="text-smaller">Lorem ipsum dolor sit amet, consectetur adipisicing
                                                elit. Illum, dolore, voluptates!</p>
                                        </div>
                                        <ul class="iconlist ms-3 mt-4 mb-0">
                                            <li class="mb-2 text-muted"><i class="icon-check text-smaller color"></i>
                                                Unlimited Pages</li>
                                            <li class="mb-2 text-muted"><i class="icon-check text-smaller color"></i>
                                                UI/UX Design</li>
                                            <li class="mb-2 text-muted"><i class="icon-check text-smaller color"></i>
                                                Speed Optimized</li>
                                            <li class="mb-2 text-muted"><i class="icon-check text-smaller color"></i>
                                                Graphics Banner</li>
                                            <li class="text-muted"><i class="icon-check text-smaller color"></i>
                                                Advertisement</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6 d-flex">
                            <div class="card">
                                <div class="card-body p-5">
                                    <div class="feature-box flex-column">
                                        <div class="fbox-icon mb-3">
                                            <img src="{{asset('seo/demos/seo/images/icons/experience.svg')}}" alt="Feature Icon"
                                                class="bg-transparent rounded-0">
                                        </div>
                                        <div class="fbox-content">
                                            <h3 class="nott ls0 text-larger">Customer Experience</h3>
                                            <p class="text-smaller">Lorem ipsum dolor sit amet, consectetur adipisicing
                                                elit. Illum, dolore, voluptates!</p>
                                        </div>
                                        <ul class="iconlist ms-3 mt-4 mb-0">
                                            <li class="mb-2 text-muted"><i class="icon-check text-smaller color"></i>
                                                Unlimited Pages</li>
                                            <li class="mb-2 text-muted"><i class="icon-check text-smaller color"></i>
                                                UI/UX Design</li>
                                            <li class="mb-2 text-muted"><i class="icon-check text-smaller color"></i>
                                                Speed Optimized</li>
                                            <li class="mb-2 text-muted"><i class="icon-check text-smaller color"></i>
                                                Graphics Banner</li>
                                            <li class="text-muted"><i class="icon-check text-smaller color"></i>
                                                Advertisement</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6 d-flex">
                            <div class="card">
                                <div class="card-body p-5">
                                    <div class="feature-box flex-column">
                                        <div class="fbox-icon mb-3">
                                            <img src="{{asset('seo/demos/seo/images/icons/content_marketing.svg')}}" alt="Feature Icon"
                                                class="bg-transparent rounded-0">
                                        </div>
                                        <div class="fbox-content">
                                            <h3 class="nott ls0 text-larger">Content Marketing</h3>
                                            <p class="text-smaller">Lorem ipsum dolor sit amet, consectetur adipisicing
                                                elit. Illum, dolore, voluptates!</p>
                                        </div>
                                        <ul class="iconlist ms-3 mt-4 mb-0">
                                            <li class="mb-2 text-muted"><i class="icon-check text-smaller color"></i>
                                                Unlimited Pages</li>
                                            <li class="mb-2 text-muted"><i class="icon-check text-smaller color"></i>
                                                UI/UX Design</li>
                                            <li class="mb-2 text-muted"><i class="icon-check text-smaller color"></i>
                                                Speed Optimized</li>
                                            <li class="mb-2 text-muted"><i class="icon-check text-smaller color"></i>
                                                Graphics Banner</li>
                                            <li class="text-muted"><i class="icon-check text-smaller color"></i>
                                                Advertisement</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <!-- Form Section
        ============================================= -->
            <div class="section mt-0"
                style="background: url({{asset('/seo/demos/seo/images/sections/1.jpg')}}) no-repeat center center; background-size: cover; padding: 100px 0;">
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
                                                    name="template-contactform-email"
                                                    class="form-control input-sm required" value="">
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
