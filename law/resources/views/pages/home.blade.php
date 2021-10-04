@extends('layout.main')
@section('content')
    <!-- Hero
      ============================================= -->
    <section id="slider" class="slider-element dark min-vh-md-100 min-vh-75 include-header">
        <div class="slider-inner"
            style="background-image: linear-gradient(to bottom, rgba(0,0,0,.5), rgba(0,0,0,.3)), url({{asset('/law/demos/law-firm/images/hero.jpg')}}); background-position: 50% 0;">
            <div class="container">

                <div class="vertical-middle">
                    <div class="row mt-6">
                        <div class="col-md-6">
                            <div
                                class="before-title text-border-right position-relative text-uppercase ls3 text-smaller overflow-hidden mb-4 op-04 b-w-50">
                                Team Of Law Agency</div>
                            <h2 class="display-4 fw-bold">{{ env('APP_TAGLINE') }}</h2>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- Content
      ============================================= -->
    <section id="content">
        <div class="content-wrap overflow-visible py-0">

            <div class="container">

                <div class="service-feature w-100 mb-4 mt-5 mt-lg-0">

                    <div class="row justify-content-center gx-3">

                        <div class="col-lg-3 mb-4 mb-lg-0">
                            <div
                                class="grid-inner shadow-sm h-shadow bg-white p-5 overflow-hidden rounded-5 text-center shadow-ts">
                                <div class="f-b-desc">
                                    <i class="material-icons-outlined display-5 color mb-3">gavel</i>
                                    <h3 class="h5 mb-0 fw-bold">Why Choose Us?</h3>
                                </div>
                                <a href="#" class="more-link fst-normal color">View Details</a>
                            </div>
                        </div>

                        <div class="col-lg-3 mb-4 mb-lg-0">
                            <div
                                class="grid-inner shadow-sm h-shadow bg-white p-5 overflow-hidden rounded-5 text-center shadow-ts">
                                <div class="f-b-desc">
                                    <i class="material-icons-outlined display-5 color mb-3">outlined_flag</i>
                                    <h3 class="h5 mb-0 fw-bold">Our Mission</h3>
                                </div>
                                <a href="#" class="more-link fst-normal color">Learn More</a>
                            </div>
                        </div>

                        <div class="col-lg-3">
                            <div
                                class="grid-inner shadow-sm h-shadow bg-white p-5 overflow-hidden rounded-5 text-center shadow-ts">
                                <div class="f-b-desc">
                                    <i class="material-icons-outlined display-5 color mb-3">date_range</i>
                                    <h3 class="h5 mb-0 fw-bold">Contact Us</h3>
                                </div>
                                <a href="#" class="more-link fst-normal color">Get in Touch</a>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="clear"></div>

                <div class="row align-items-center justify-content-center mt-6 mt-lg-0 bottommargin-sm">
                    <div class="col-lg-5 col-10 px-5">
                        <div class="lady-justice-img position-relative">
                            <img src="{{ asset('law/demos/law-firm/images/lady-justice.jpg') }}" alt="Image"
                                class="rounded">
                        </div>
                    </div>
                    <div class="col-lg-5 p-5">
                        <i class="material-icons-outlined display-4 color mb-3">verified</i>
                        <h2 class="h1 fw-bold lh-sm">Our Purpose is Community Safety</h2>
                        <h4 class="mt-4 fw-normal lh-base" style="line-height: 1.75 !important;">Rapidiously conceptualize
                            inexpensive value through functionalized markets. Enthusiastically integrate distinctive web
                            services vis-a-vis end-to-end ROI. Assertively fashion best-of-breed products for installed base
                            alignments. Enthusiastically.</h4>

                        <h4 class="mt-4 fw-normal lh-base" style="line-height: 1.75 !important;">Rapidiously conceptualize
                            inexpensive value through functionalized markets.</h4>
                        <a href="#" class="btn py-3 px-4 mt-2 rounded-1 btn-dark bg-color h-op-09">Find out how we Help <i
                                class="material-icons-outlined align-middle mb-0 ms-1">arrow_right_alt</i></a>
                    </div>
                </div>

            </div>

            <div class="clear"></div>

            <div id="section-contact" class="section bg-color dark topmargin-lg"
                style="background-image: linear-gradient(to bottom, rgba(var(--themecolorrgba),.8), rgba(var(--themecolorrgba),1)), url('law/demos/law-firm/images/bg-1.jpg'); background-attachment: fixed; background-size: cover;">
                <div class="container py-4">
                    <div class="row justify-content-center">
                        <div class="col-lg-9">
                            <div class="form-widget" data-alert-type="false">

                                <div class="form-result"></div>
                                <div class="lawfirm-inline-loader css3-spinner" style="position: absolute;">
                                    <div class="css3-spinner-bounce1"></div>
                                    <div class="css3-spinner-bounce2"></div>
                                    <div class="css3-spinner-bounce3"></div>
                                </div>
                                <div id="lawfirm-inline-submitted" class="text-center">
                                    <h4 class="fw-normal mb-0 h3 lh-base">Thank You for Contact Us! <br> Our Team will
                                        contact you asap on your email Address.</h4>
                                </div>

                                <form class="mb-0" id="lawfirm-inline" name="lawfirm-inline"
                                    action="include/form.php" method="post" enctype="multipart/form-data">

                                    <div class="row">

                                        <div class="before-title text-uppercase ls3 text-smaller mb-3 op-05">Looking for a
                                            Lawyer?</div>

                                        <div class="col-12 bottommargin-sm">
                                            <label for="lawfirm-inline-lawyer">I'd like to Contact a</label>
                                            <select class="required form-select" name="lawfirm-inline-lawyer"
                                                id="lawfirm-inline-lawyer">
                                                <option value="Immigration" selected>Immigration</option>
                                                <option value="Education">Education</option>
                                                <option value="Insurance">Insurance</option>
                                                <option value="Business">Business</option>
                                                <option value="Family">Family</option>
                                                <option value="Criminal">Criminal</option>
                                                <option value="Employment">Employment</option>
                                            </select>
                                            <label for="lawfirm-inline-industry">lawyer, expert in</label>
                                            <select class="required form-select" name="lawfirm-inline-industry"
                                                id="lawfirm-inline-industry">
                                                <option value="Industry" selected>Industry</option>
                                                <option value="Professional">Professional</option>
                                                <option value="Pracice Area">Pracice Area</option>
                                            </select>
                                            <label for="lawfirm-inline-city">located in</label>

                                            <input class="required form-control" type="text" value=""
                                                name="lawfirm-inline-city" id="lawfirm-inline-city" placeholder="City"
                                                style="max-width: 200px" />

                                            <label for="lawfirm-inline-email"> send email us to</label>

                                            <input type="email" value="" class="form-control required"
                                                id="lawfirm-inline-email" name="lawfirm-inline-email"
                                                placeholder="email address">.
                                        </div>

                                        <div class="col-12 d-none">
                                            <input type="text" id="lawfirm-inline-botcheck" name="lawfirm-inline-botcheck"
                                                value="" />
                                        </div>
                                        <div class="col-12 text-center">
                                            <button type="submit" name="lawfirm-inline-submit"
                                                class="btn btn-lg py-3 px-6 mt-2 rounded-1 btn-light h-op-09">Send
                                                Now</button>
                                        </div>

                                        <input type="hidden" name="prefix" value="lawfirm-inline-">
                                        <input type="hidden" name="subject" value="Messgae From Law Firm Template">

                                    </div>

                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="section bg-transparent py-4">
                <div class="container">
                    <div class="row align-items-center justify-content-center gutter-50">
                        <div class="col-lg-5 px-5">
                            <i class="material-icons-outlined display-4 color mb-3">help_outline</i>
                            <h2 class="h1 fw-bold mb-4">Frequently Asked Questions</h2>

                            <p class="lead">Nam aut labore voluptas explicabo, assumenda</p>

                            <div class="toggle" data-state="open">
                                <div class="toggle-header justify-content-between">
                                    <div class="toggle-icon">
                                        <i class="toggle-closed icon-caret-down color"></i>
                                        <i class="toggle-open icon-caret-up text-warning"></i>
                                    </div>
                                    <div class="toggle-title fw-bold">
                                        How do I become an author?
                                    </div>
                                </div>
                                <div class="toggle-content ps-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                    Assumenda, dolorum, vero ipsum molestiae minima odio quo voluptate illum excepturi quam
                                    cum voluptates doloribus quae nisi tempore necessitatibus dolores.</div>
                            </div>

                            <div class="toggle">
                                <div class="toggle-header justify-content-between">
                                    <div class="toggle-icon">
                                        <i class="toggle-closed icon-caret-down color"></i>
                                        <i class="toggle-open icon-caret-up text-warning"></i>
                                    </div>
                                    <div class="toggle-title fw-bold">
                                        Helpful Resources for Authors
                                    </div>
                                </div>
                                <div class="toggle-content ps-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                    Assumenda, dolorum, vero ipsum molestiae minima odio quo voluptate illum excepturi quam
                                    cum voluptates doloribus quae nisi tempore necessitatibus dolores ducimus enim libero
                                    eaque explicabo suscipit animi at quaerat aliquid ex expedita perspiciatis? Saepe,
                                    aperiam, nam unde quas beatae vero vitae nulla.</div>
                            </div>

                            <div class="toggle">
                                <div class="toggle-header justify-content-between">
                                    <div class="toggle-icon">
                                        <i class="toggle-closed icon-caret-down color"></i>
                                        <i class="toggle-open icon-caret-up text-warning"></i>
                                    </div>
                                    <div class="toggle-title fw-bold">
                                        How much money can I make?
                                    </div>
                                </div>
                                <div class="toggle-content ps-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                    Assumenda, dolorum, vero ipsum molestiae minima odio quo voluptate illum excepturi quam
                                    cum voluptates doloribus quae nisi tempore necessitatibus dolores ducimus enim libero
                                    eaque explicabo suscipit animi at quaerat aliquid ex expedita perspiciatis? Saepe,
                                    aperiam, nam unde quas beatae vero vitae nulla.</div>
                            </div>

                            <div class="toggle">
                                <div class="toggle-header justify-content-between">
                                    <div class="toggle-icon">
                                        <i class="toggle-closed icon-caret-down color"></i>
                                        <i class="toggle-open icon-caret-up text-warning"></i>
                                    </div>
                                    <div class="toggle-title fw-bold">
                                        Can I offer my items for free on a promotional basis?
                                    </div>
                                </div>
                                <div class="toggle-content ps-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                    Assumenda, dolorum, vero ipsum molestiae minima odio quo voluptate illum excepturi quam
                                    cum voluptates doloribus quae nisi tempore necessitatibus dolores ducimus enim libero
                                    eaque explicabo suscipit animi at quaerat aliquid ex expedita perspiciatis? Saepe,
                                    aperiam, nam unde quas beatae vero vitae nulla.</div>
                            </div>
                        </div>

                        <div class="col-lg-5 col-10">
                            <img src="{{ asset('law/demos/law-firm/images/bg-2.jpg') }}" alt="Image">
                        </div>
                    </div>
                </div>
            </div>

            <div class="section py-6 mb-0" style="background-color: #f1f3f7">
                <div class="container">
                    <div class="row justify-content-between align-items-center col-mb-30">
                        <div class="col-lg-4">
                            <div class="d-flex mb-2">
                                <i class="icon-star3 h5 me-1 text-warning"></i>
                                <i class="icon-star3 h5 me-1 text-warning"></i>
                                <i class="icon-star3 h5 me-1 text-warning"></i>
                                <i class="icon-star3 h5 me-1 text-warning"></i>
                                <i class="icon-star3 h5 me-1 text-warning"></i>
                            </div>
                            <h3 class="h3 font-secondary fw-bold mb-4">What our Clients say?</h3>
                            <p class="lead">Lorem ipsum dolor sit amet consectetur adipisicing elit. Perspiciatis
                                quibusdam possimus aut itaque quo ex et dignissimos fuga animi id.</p>
                            <a href="https://themeforest.net/item/canvas-the-multipurpose-html5-template/reviews/9228123?utf8=%E2%9C%93&reviews_controls%5Bsort%5D=ratings_descending"
                                class="btn py-3 px-4 mt-3 rounded-1 btn-dark bg-color h-op-09">View More Testimonials</a>
                        </div>

                        <div class="col-lg-7">
                            <div class="row row-cols-1 row-cols-md-2 g-4 align-items-center">
                                <div class="col">
                                    <div class="card rounded-6 overflow-hidden mb-4">
                                        <div class="card-body p-4">
                                            <div class="row">
                                                <div class="col-12">
                                                    <p class="mb-4 font-secondary">"2nd Template purchased from
                                                        SemiColonWeb, Fantastic work so much detail although I only need a
                                                        couple of pages, its worth the price."</p>
                                                </div>
                                                <div class="d-flex align-items-center">
                                                    <img class="rounded-circle me-3"
                                                        src="{{ asset('law/demos/articles/images/authors/2.jpg') }}"
                                                        width="48" height="48" alt="Customer Testimonails">
                                                    <div>
                                                        <h4 class="h6 mb-0 fw-medium"><a
                                                                href="https://themeforest.net/ratings/3295792">Shartois</a>
                                                        </h4>
                                                        <small class="text-muted">10 days ago</small>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="bgicon icon-star3 op-02"></div>
                                    </div>

                                    <div class="card rounded-6 overflow-hidden">
                                        <div class="card-body p-4">
                                            <div class="row">
                                                <div class="col-12">
                                                    <p class="mb-4 font-secondary">"Canvas Rocks... Too many options and
                                                        features, just use your imagination to build anything you need.
                                                        SemiColonTeam always surprise us with new updates and great
                                                        features. It comes with a REAL and DETAILED documentation."</p>
                                                </div>
                                                <div class="d-flex align-items-center">
                                                    <img class="rounded-circle me-3"
                                                        src="{{ asset('law/demos/articles/images/authors/1.jpg') }}"
                                                        width="48" height="48" alt="Customer Testimonails">
                                                    <div>
                                                        <h4 class="h6 mb-0 fw-medium"><a
                                                                href="https://themeforest.net/ratings/3297954">Framex</a>
                                                        </h4>
                                                        <small class="text-muted">15 days ago</small>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="bgicon icon-star3 op-02"></div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="card rounded-6 overflow-hidden">
                                        <div class="card-body p-4">
                                            <div class="row">
                                                <div class="col-12">
                                                    <p class="mb-4 font-secondary">"I've been using Canvas for over 6 years
                                                        and have purchased multiple licenses. There's literally infinite
                                                        options on the style you want, and can work perfectly to any theme.
                                                        I focus on video content and over the years I've custom built my
                                                        website with the SemiColon team. They are so helpful and super
                                                        supportive! Always there to help you, they know everything and can
                                                        fix almost any problem or add features you want. Highly
                                                        recommended!"</p>
                                                </div>
                                                <div class="d-flex align-items-center">
                                                    <img class="rounded-circle me-3"
                                                        src="{{ asset('law/demos/articles/images/authors/3.jpg') }}"
                                                        width="48" height="48" alt="Customer Testimonails">
                                                    <div>
                                                        <h4 class="h6 mb-0 fw-medium"><a
                                                                href="https://themeforest.net/ratings/3304063">JasonJSW</a>
                                                        </h4>
                                                        <small class="text-muted">24 days ago</small>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="bgicon icon-star3 op-02"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="section my-0 dark py-6" style="background-color: #000;">
                <div class="container">
                    <div class="row justify-content-between align-items-center">
                        <div class="col-lg-6 align-self-center mb-6">
                            <h3 class="h2 font-secondary fw-bold mb-4 lh-base">Why should you choose<br> Canvas Law Agency?
                            </h3>
                            <p class="mb-5">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Saepe unde,
                                atque autem deleniti rem vel fuga, sapiente nobis omnis veritatis esse vitae soluta vero
                                debitis.</p>
                            <div class="row g-4">
                                <div class="col-sm-6">
                                    <div class="d-flex align-items-center mb-2">
                                        <i class="material-icons-outlined text-warning h2 mb-0">admin_panel_settings</i>
                                        <h3 class="h6 fw-bold ms-2 mb-0">Diverse Practice Areas</h3>
                                    </div>
                                    <p class="text-white op-06">Powerful Layout with Responsive functionality that can be
                                        adapted to any screen size. Resize browser to view.</p>
                                </div>

                                <div class="col-sm-6">
                                    <div class="d-flex align-items-center mb-2">
                                        <i class="material-icons-outlined text-warning h2 mb-0">qr_code_scanner</i>
                                        <h3 class="h6 fw-bold ms-2 mb-0">Responsiblities</h3>
                                    </div>
                                    <p class="text-white op-06">Looks beautiful &amp; ultra-sharp on Retina Screen
                                        Displays. Retina Icons, Fonts &amp; all others graphics are optimized.</p>
                                </div>

                                <div class="col-sm-6">
                                    <div class="d-flex align-items-center mb-2">
                                        <i class="material-icons-outlined text-warning h2 mb-0">female</i>
                                        <h3 class="h6 fw-bold ms-2 mb-0">Women Initiative</h3>
                                    </div>
                                    <p class="text-white op-06">Canvas includes tons of optimized code that are completely
                                        customizable and deliver unmatched fast performance.</p>
                                </div>

                                <div class="col-sm-6">
                                    <div class="d-flex align-items-center mb-2">
                                        <i class="material-icons-outlined text-warning h2 mb-0">support</i>
                                        <h3 class="h6 fw-bold ms-2 mb-0">Helpful Environment</h3>
                                    </div>
                                    <p class="text-white op-06">Canvas included 20+ custom designed Slider Pages with
                                        Premium Sliders like Layer, Revolution, Swiper &amp; others.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-7 mx-auto">
                            <img src="{{ asset('law/demos/law-firm/images/lawyer.jpg') }}" alt="Image">
                        </div>
                    </div>
                </div>
            </div>

            <div class="container mw-md">
                <div class="position-relative p-5 mb-4 z-3 rounded shadow bg-white service-feature mt-5 mt-lg-0">
                    <div class="row align-items-center justify-content-center grid-border">
                        <div class="col-lg-4 text-center mb-5 mb-lg-0">
                            <div class="counter color fw-normal mb-2"><span class="display-4 fw-bold" data-from="40"
                                    data-to="213" data-refresh-interval="100" data-speed="2000"></span></div>
                            <h5 class="mb-0 h6 nott">Jobs Done</h5>
                        </div>

                        <div class="col-lg-4 text-center mb-5 mb-lg-0">
                            <div class="counter color fw-normal mb-2"><span class="display-4 fw-bold" data-from="0"
                                    data-to="11" data-refresh-interval="100" data-speed="2000"></span>+</div>
                            <h5 class="mb-0 h6 nott">Years of Experience</h5>
                        </div>

                        <div class="col-lg-4 text-center">
                            <div class="counter color fw-normal mb-2"><span class="display-4 fw-bold" data-from="100"
                                    data-to="873" data-refresh-interval="100" data-speed="2000"></span>+</div>
                            <h5 class="mb-0 h6 nott">Happy Clients</h5>
                        </div>
                    </div>
                </div>
            </div>

            <div class="container mw-md mt-5 mt-lg-0">
                <div class="row g-4 align-items-end blog-cards">
                    <div class="col-md-8">
                        <div class="p-3 pb-4">
                            <div
                                class="before-title text-border-right position-relative text-uppercase ls3 text-smaller overflow-hidden mb-4 op-04 b-w-50">
                                Our Latest News</div>
                            <h3 class="h2 font-secondary fw-bold mb-4 lh-base">From our Law Community</h3>
                            <p class="mb-5">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Saepe unde,
                                atque autem deleniti rem vel fuga, sapiente nobis omnis veritatis esse vitae soluta vero
                                debitis.</p>
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="card h-translate-y-sm transform-ts">
                                    <img src="https://source.unsplash.com/jKU2NneZAbI" alt="" class="card-img-top">
                                    <div class="card-body p-4">
                                        <h5 class="mb-3 text-warning">June 12, 2020</h5>
                                        <h3 class="h5 lh-base mb-3 color"><a href="#">Ways You Can Support Someone
                                                Recovering from a Serious Injury</a></h3>
                                        <p class="mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                            Deserunt exercitationem esse eaque velit.</p>
                                        <a href="#">Read More <span
                                                class="material-icons-outlined align-middle mb-1">trending_flat</span></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 mt-4 mt-sm-0">
                                <div class="card h-translate-y-sm transform-ts">
                                    <img src="https://source.unsplash.com/Oaqk7qqNh_c" alt="" class="card-img-top">
                                    <div class="card-body p-4">
                                        <h5 class="mb-3 text-warning">June 14, 2020</h5>
                                        <h3 class="h5 lh-base mb-3 color"><a href="#">Could Unruly Airline Passengers
                                                Prompt Federal Prosecutions?</a></h3>
                                        <p class="mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                            Deserunt exercitationem esse eaque velit.</p>
                                        <a href="#">Read More <span
                                                class="material-icons-outlined align-middle mb-1">trending_flat</span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="row">
                            <div class="col-md-12 col-sm-6">
                                <div class="card h-translate-y-sm transform-ts dark mb-4">
                                    <img src="https://source.unsplash.com/j06gLuKK0GM" alt="" class="card-img">
                                    <a href="#" class="card-img-overlay d-flex flex-column justify-content-end p-4"
                                        style="background-image: linear-gradient(to bottom, rgba(0,0,0,.1), rgba(0,0,0,.3));">
                                        <h5 class="mb-3 text-warning">Aug 07, 2020</h5>
                                        <h3 class="h5 lh-base mb-0">Will Psychedelic Drugs Become Legal?</h3>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-12 col-sm-6">

                                <div class="card h-translate-y-sm transform-ts">
                                    <div class="card-body p-4">
                                        <h5 class="mb-3 text-warning">Sep 30, 2020</h5>
                                        <h3 class="h5 lh-base mb-3 color"><a href="#">Some States and Cities Help Laid Off
                                                Workers Reclaim Former Jobs</a></h3>
                                        <p class="mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                            Deserunt exercitationem esse eaque velit.</p>
                                        <a href="#">Read More <span
                                                class="material-icons-outlined align-middle mb-1">trending_flat</span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="section topmargin-lg mb-0" style="background-color: #f1f3f7">
                <div class="container">
                    <div class="row align-items-center justify-content-center col-mb-30 mx-md mx-auto">
                        <div class="col-sm-12 col-md">
                            <h3 class="h3 font-secondary fw-semibold mb-0">Don't hesitate to Contact for <span
                                    class="border-bottom border-warning border-width-3">Free Consultation</span>!</h3>
                        </div>
                        <div class="col-sm-12 col-md-auto">
                            <a href="#" data-scrollto="#section-contact" data-easing="easeInOutExpo" data-speed="1250"
                                data-offset="88" class="btn py-3 px-5 rounded-1 btn-dark bg-color h-op-09 m-0">Contact Us
                                <span class="material-icons-outlined align-middle mb-1 ms-1">trending_flat</span></a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section><!-- #content end -->
@endsection
