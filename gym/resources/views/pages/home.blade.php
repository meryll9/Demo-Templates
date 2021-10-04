@extends('layout.main')
@section('content')
    <!-- Slider
      ============================================= -->
    <section id="slider" class="slider-element swiper_wrapper min-vh-60 min-vh-md-100 include-header" data-loop="true">
        <div class="slider-inner">

            <div class="swiper-container swiper-parent">
                <div class="swiper-wrapper">
                    <div class="swiper-slide dark">
                        <div class="container">
                            <div class="slider-caption slider-caption-center">
                                <h2>{{ env('APP_TAGLINE') }}</h2>
                                <div class="d-md-flex mx-auto d-none categories-lists mt-5" style="width: 60%;">
                                    <div class="me-auto">
                                        <span
                                            class="list-group-item h6 fw-light text-white py-2 px-1 bg-transparent border-0"><i
                                                class="icon-line-plus me-2"></i>No Monthly Commitment</span>
                                        <span
                                            class="list-group-item h6 fw-light text-white py-2 px-1 bg-transparent border-0"><i
                                                class="icon-line-plus me-2"></i>Locker Facility</span>
                                        <span
                                            class="list-group-item h6 fw-light text-white py-2 px-1 bg-transparent border-0"><i
                                                class="icon-line-plus me-2"></i>1 Day Free Pass</span>
                                        <span
                                            class="list-group-item h6 fw-light text-white py-2 px-1 bg-transparent border-0"><i
                                                class="icon-line-plus me-2"></i>Sauna &amp; Steam Available</span>
                                    </div>
                                    <div>
                                        <span
                                            class="list-group-item h6 fw-light text-white py-2 px-1 bg-transparent border-0"><i
                                                class="icon-line-plus me-2"></i>1 User Valid</span>
                                        <span
                                            class="list-group-item h6 fw-light text-white py-2 px-1 bg-transparent border-0"><i
                                                class="icon-line-plus me-2"></i>Shower Room</span>
                                        <span
                                            class="list-group-item h6 fw-light text-white py-2 px-1 bg-transparent border-0"><i
                                                class="icon-line-plus me-2"></i>Free WiFi Access</span>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-center align-items-center mx-auto categories-lists mt-4">
                                    <div class="d-flex fw-semibold ms-2 mb-0 p-2 h5 text-dark center justify-content-center align-items-center"
                                        style="background:  url({{ asset('/gym/demos/gym/images/brush.png') }})no-repeat center center / cover; width: 180px; height: 50px">
                                        <span class="align-self-center">$19.99/m</span></div>
                                    <a href="#"
                                        class="button button-rounded button-large nott ms-4 align-self-center">Reserve
                                        Now</a>
                                </div>
                            </div>
                        </div>
                        <div class="video-wrap" style="position: absolute; top: 0; left: 0; height: 100%; z-index:1;">
                            <div class="video-overlay" style="background: rgba(0,0,0,0.5);"></div>
                        </div>
                        <div class="swiper-slide-bg"
                            style="background-image:  url({{ asset('/gym/demos/gym/images/slider/1.jpg') }});"></div>
                    </div>
                    <div class="swiper-slide dark">
                        <div class="container">
                            <div class="slider-caption slider-caption-center">
                                <h2>{{ env('APP_TAGLINE') }}</h2>
                                <div class="d-md-flex mx-auto d-none categories-lists mt-5" style="width: 60%;">
                                    <div class="me-auto">
                                        <span
                                            class="list-group-item h6 fw-light text-white py-2 px-1 bg-transparent border-0"><i
                                                class="icon-line-plus me-2"></i>3 Months Contact</span>
                                        <span
                                            class="list-group-item h6 fw-light text-white py-2 px-1 bg-transparent border-0"><i
                                                class="icon-line-plus me-2"></i>Locker Facility</span>
                                        <span
                                            class="list-group-item h6 fw-light text-white py-2 px-1 bg-transparent border-0"><i
                                                class="icon-line-plus me-2"></i>1 Day Free Pass</span>
                                        <span
                                            class="list-group-item h6 fw-light text-white py-2 px-1 bg-transparent border-0"><i
                                                class="icon-line-plus me-2"></i>Steam Available</span>
                                    </div>
                                    <div>
                                        <span
                                            class="list-group-item h6 fw-light text-white py-2 px-1 bg-transparent border-0"><i
                                                class="icon-line-plus me-2"></i>1 User Valid</span>
                                        <span
                                            class="list-group-item h6 fw-light text-white py-2 px-1 bg-transparent border-0"><i
                                                class="icon-line-plus me-2"></i>Shower Room</span>
                                        <span
                                            class="list-group-item h6 fw-light text-white py-2 px-1 bg-transparent border-0"><i
                                                class="icon-line-plus me-2"></i>Free WiFi Access</span>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-center align-items-center mx-auto categories-lists mt-4">
                                    <div class="d-flex fw-semibold ms-2 mb-0 p-2 h5 text-dark center justify-content-center align-items-center"
                                        style="background:  url({{ asset('/gym/demos/gym/images/brush.png') }})no-repeat center center / cover; width: 180px; height: 50px">
                                        <span class="align-self-center">$19.99/m</span></div>
                                    <a href="#"
                                        class="button button-rounded button-large nott ms-4 align-self-center">Reserve
                                        Now</a>
                                </div>
                            </div>
                        </div>
                        <div class="video-wrap">
                            <div class="yt-bg-player customjs" data-quality="hd1080" data-start="19" data-volume="80"
                                data-stop="52" data-video="https://youtu.be/G5eaRMifvPQ"></div>
                            <div class="video-overlay" style="background: rgba(0,0,0,0.4);"></div>
                        </div>
                    </div>
                    <div class="swiper-slide dark">
                        <div class="container">
                            <div class="slider-caption slider-caption-center">
                                <div>
                                    <h2>{{ env('APP_TAGLINE') }}</h2>
                                    <p class="categories-lists">Completely incubate worldwide users before imperatives.</p>
                                    <a href="#" class="button button-rounded button-large nott mt-4">Get Started</a>
                                </div>
                            </div>
                        </div>
                        <div class="video-wrap" style="position: absolute; top: 0; left: 0; height: 100%; z-index:1;">
                            <div class="video-overlay" style="background: rgba(0,0,0,0.25);"></div>
                        </div>
                        <div class="swiper-slide-bg"
                            style="background-image:  url({{ asset('/gym/demos/gym/images/slider/3.jpg') }});"></div>
                    </div>
                </div>
                <!-- Slider Arrows
         ============================================= -->
                <div class="slider-arrow-left bg-transparent"><i class="icon-line-arrow-left"></i></div>
                <div class="slider-arrow-right bg-transparent"><i class="icon-line-arrow-right"></i></div>
            </div>

            <!-- Slider Mouse Icon
        ============================================= -->
            <a href="#" class="scroll-down d-none d-lg-block" data-scrollto="#content" data-offset="80">
                <span class="scroll-mouse"><span class="scroll-wheel"></span></span>
            </a>

        </div>
    </section>

    <!-- Content
      ============================================= -->
    <section id="content">
        <div class="content-wrap pt-0">

            <div class="section m-0"
                style="background:  url({{ asset('/gym/demos/gym/images/section/bg-1.jpg') }}) center bottom no-repeat; background-size: cover; padding: 80px 0 180px;">
                <div class="container clearfix">
                    <div class="row clearfix">
                        <div class="col-md-5 col-sm-7">
                            <div class="emphasis-title bottommargin-sm">
                                <span class="before-heading font-secondary">Retina Ready &#x7E; 534 PPI</span>
                                <h2 style="font-size: 46px;" class="font-body fw-bold">Yesterday you said Tomorrow!</h2>
                            </div>
                            <p style="color: #777;" class="lead">We all have the same amount of hours in our day.
                                Deciding how to use your hours is up to you.</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="section dark m-0" style="background-color: #111; padding: 20px 0;">
                <div class="container clearfix">

                    <div class="heading-block center bottommargin-sm border-bottom-0">
                        <h2 class="nott" style="font-size: 46px;">It Becomes an Addition.</h2>
                        <span>If you want to know more about our membership package, then don't hesitate to contact
                            us.</span>
                    </div>

                    <div class="row col-mb-50 mb-0">
                        <div class="col-md-4 col-sm-6">

                            <div class="feature-box fbox-dark fbox-effect flex-md-row-reverse text-md-end mt-5"
                                data-animate="fadeIn">
                                <div class="fbox-icon">
                                    <a href="#"><i class="icon-line-heart"></i></a>
                                </div>
                                <div class="fbox-content">
                                    <h3>Boxed &amp; Wide Layouts</h3>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Labore vero dignissimos,
                                        ipsa reiciendis quaerat.</p>
                                </div>
                            </div>

                            <div class="feature-box fbox-dark fbox-effect flex-md-row-reverse text-md-end mt-5"
                                data-animate="fadeIn" data-delay="200">
                                <div class="fbox-icon">
                                    <a href="#"><i class="icon-line-paper"></i></a>
                                </div>
                                <div class="fbox-content">
                                    <h3>Extensive Documentation</h3>
                                    <p>We have covered each &amp; everything in our Docs including Videos &amp; Screenshots.
                                    </p>
                                </div>
                            </div>

                            <div class="feature-box fbox-dark fbox-effect flex-md-row-reverse text-md-end mt-5"
                                data-animate="fadeIn" data-delay="400">
                                <div class="fbox-icon">
                                    <a href="#"><i class="icon-line-layers"></i></a>
                                </div>
                                <div class="fbox-content">
                                    <h3>Parallax Support</h3>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Placeat nobis maiores
                                        recusandae repellendus, tempora laudantium.</p>
                                </div>
                            </div>

                        </div>

                        <div class="col-md-4 d-none d-md-block text-center">
                            <img src="{{ asset('gym/demos/gym/images/others/workout-couple.png') }}" alt="Workout">
                        </div>

                        <div class="col-md-4 col-sm-6">

                            <div class="feature-box fbox-dark fbox-effect mt-5" data-animate="fadeIn">
                                <div class="fbox-icon">
                                    <a href="#"><i class="icon-line-power"></i></a>
                                </div>
                                <div class="fbox-content">
                                    <h3>HTML5 Video</h3>
                                    <p>Canvas provides support for Native HTML5 Videos that can be added to a Background.
                                    </p>
                                </div>
                            </div>

                            <div class="feature-box fbox-dark fbox-effect mt-5" data-animate="fadeIn" data-delay="200">
                                <div class="fbox-icon">
                                    <a href="#"><i class="icon-line-check"></i></a>
                                </div>
                                <div class="fbox-content">
                                    <h3>Endless Possibilities</h3>
                                    <p>Complete control on each &amp; every element that provides endless customization.</p>
                                </div>
                            </div>

                            <div class="feature-box fbox-dark fbox-effect mt-5" data-animate="fadeIn" data-delay="400">
                                <div class="fbox-icon">
                                    <a href="#"><i class="icon-bulb"></i></a>
                                </div>
                                <div class="fbox-content">
                                    <h3>Light &amp; Dark Color Schemes</h3>
                                    <p>Change your Website's Primary Scheme instantly by simply adding the dark class.</p>
                                </div>
                            </div>

                        </div>
                    </div>

                </div>
            </div>

            <div class="section m-0">
                <div class="container clearfix">
                    <div class="mx-auto center" style="max-width: 900px;">
                        <h2 style="font-size: 42px;" class="mb-0 fw-bold ls1">Gallery</h2>
                        <span style="font-size: 16px;" class="fw-light text-capitalize ls1 mt-0">When the Gym Becomes your
                            Second Home.</span>
                    </div>
                </div>
            </div>
            <div class="masonry-thumbs grid-container grid-4" data-lightbox="gallery">
                <a class="grid-item" href="{{ asset('gym/demos/gym/images/gallery/1.jpg') }}"
                    data-lightbox="gallery-item"><img src="{{ asset('gym/demos/gym/images/gallery/1.jpg') }}"
                        alt="Gallery Thumb 1"><i class="icon-resize-full"></i></a>
                <a class="grid-item" href="{{ asset('gym/demos/gym/images/gallery/2.jpg') }}"
                    data-lightbox="gallery-item"><img src="{{ asset('gym/demos/gym/images/gallery/2.jpg') }}"
                        alt="Gallery Thumb 2"><i class="icon-resize-full"></i></a>
                <a class="grid-item" href="{{ asset('gym/demos/gym/images/gallery/3.jpg') }}"
                    data-lightbox="gallery-item"><img src="{{ asset('gym/demos/gym/images/gallery/3.jpg') }}"
                        alt="Gallery Thumb 3"><i class="icon-resize-full"></i></a>
                <a class="grid-item" href="{{ asset('gym/demos/gym/images/gallery/4.jpg') }}"
                    data-lightbox="gallery-item"><img src="{{ asset('gym/demos/gym/images/gallery/4.jpg') }}"
                        alt="Gallery Thumb 4"><i class="icon-resize-full"></i></a>
                <a class="grid-item" href="{{ asset('gym/demos/gym/images/gallery/5.jpg') }}"
                    data-lightbox="gallery-item"><img src="{{ asset('gym/demos/gym/images/gallery/5.jpg') }}"
                        alt="Gallery Thumb 5"><i class="icon-resize-full"></i></a>
                <a class="grid-item" href="{{ asset('gym/demos/gym/images/gallery/6.jpg') }}"
                    data-lightbox="gallery-item"><img src="{{ asset('gym/demos/gym/images/gallery/6.jpg') }}"
                        alt="Gallery Thumb 6"><i class="icon-resize-full"></i></a>
                <a class="grid-item" href="{{ asset('gym/demos/gym/images/gallery/7.jpg') }}"
                    data-lightbox="gallery-item"><img src="{{ asset('gym/demos/gym/images/gallery/7.jpg') }}"
                        alt="Gallery Thumb 7"><i class="icon-resize-full"></i></a>
                <a class="grid-item" href="{{ asset('gym/demos/gym/images/gallery/8.jpg') }}"
                    data-lightbox="gallery-item"><img src="{{ asset('gym/demos/gym/images/gallery/8.jpg') }}"
                        alt="Gallery Thumb 9"><i class="icon-resize-full"></i></a>
            </div>

            <div class="section m-0" style="padding: 80px 0;">
                <div class="container clearfix">
                    <div class="row col-mb-50">

                        <div class="col-md-6">
                            <div class="emphasis-title bottommargin-sm">
                                <h2 style="font-size: 38px;" class="font-body fw-semibold">Weight-loss Programing</h2>
                            </div>
                            <p style="color: #777; margin-bottom: 25px;" class="lead">Compellingly generate
                                interactive mindshare without intermandated quality vectors. Professionally implement
                                ethical.</p>
                            <button type="submit"
                                class="fw-normal text-capitalize button button-dark button-large button-circle m-0"
                                value="submit">Register Now</button>
                        </div>

                        <div class="col-md-6">
                            <div class="twentytwenty-container" style="box-shadow: 0 1px 8px 0 rgba(0,0,0,0.3);">
                                <img src="{{ asset('gym/demos/gym/images/compared-img/1_1.jpg') }}" alt="Image 1" />
                                <img src="{{ asset('gym/demos/gym/images/compared-img/1_2.jpg') }}" alt="Image 2" />
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <div class="row dark align-items-stretch bottommargin clearfix">
                <div class="col-sm-6"
                    style="background:  url({{ asset('/gym/demos/gym/images/section/2.jpg') }}) center left no-repeat; background-size: cover; padding: 80px;">
                    <div class="d-flex align-items-start flex-column" style="height: 400px;">
                        <div class="mb-auto heading-block border-bottom-0">
                            <h3>Heavy Weight Workout</h3>
                            <span>That Feeling after an amazing Workout</span>
                        </div>
                        <p class="fw-light mb-2">Distinctively drive interdependent services for backward-compatible
                            initiatives. Synergistically architect sustainable deliverables and ethical initiatives.
                            Objectively procrastinate an expanded.</p>
                        <a class="button button-border-icon px-0 mx-0" href="https://www.youtube.com/watch?v=zBrAbpOt-WY"
                            data-lightbox="iframe"><i class="icon-play"></i><span>Play Video</span></a>
                    </div>
                </div>
                <div class="col-sm-6"
                    style="background:  url({{ asset('/gym/demos/gym/images/section/3.jpg') }}) center center no-repeat; background-size: cover; padding: 80px;">
                    <div class="d-flex align-items-start flex-column" style="height: 400px;">
                        <div class="mb-auto heading-block border-bottom-0">
                            <h3>Weight Loss Programing</h3>
                            <span>Be So Good They Can't Ignore You</span>
                        </div>
                        <p class="fw-light mb-2">Distinctively drive interdependent services for backward-compatible
                            initiatives. Synergistically architect sustainable deliverables and ethical initiatives.
                            Objectively procrastinate.</p>
                        <a class="button button-border-icon px-0 mx-0" href="https://www.youtube.com/watch?v=2uL0ayEbQ5c"
                            data-lightbox="iframe"><i class="icon-play"></i><span>Play Video</span></a>
                    </div>
                </div>
            </div>

            <div class="container clearfix">
                <div class="heading-block border-bottom-0 center">
                    <h2 style="font-size: 42px;" class="mb-0 nott fw-bold ls1">Professional Trainers</h2>
                    <span style="font-size: 16px;" class="fw-light text-capitalize ls1 mt-0">Get Started within 5
                        Minutes.</span>
                </div>
            </div>

            <div class="portfolio row grid-container g-0">

                <article class="portfolio-item col-12 col-sm-6 col-md-4 pf-media pf-icons">
                    <div class="grid-inner">
                        <div class="portfolio-image">
                            <a href="#">
                                <img src="{{ asset('gym/demos/gym/images/team/1.jpg') }}" alt="Roberto Wilkins">
                                <div class="bg-overlay">
                                    <div class="bg-overlay-content dark flex-column op-ts op-08" data-hover-animate="op-1"
                                        data-hover-animate-out="op-08">
                                        <div class="portfolio-desc pt-0 text-center op-ts op-08" data-hover-animate="op-1"
                                            data-hover-animate-out="op-08">
                                            <h3 style="font-size: 32px;">Roberto Wilkins</h3>
                                            <span>Senior Trainer</span>
                                        </div>
                                    </div>
                                    <div class="bg-overlay-bg dark op-ts op-04" data-hover-animate="op-07"
                                        data-hover-animate-out="op-04"></div>
                                </div>
                            </a>
                        </div>
                    </div>
                </article>

                <article class="portfolio-item col-12 col-sm-6 col-md-4 pf-media pf-icons">
                    <div class="grid-inner">
                        <div class="portfolio-image">
                            <a href="#">
                                <img src="{{ asset('gym/demos/gym/images/team/2.jpg') }}" alt="Juana Bailey">
                                <div class="bg-overlay">
                                    <div class="bg-overlay-content dark flex-column op-ts op-08" data-hover-animate="op-1"
                                        data-hover-animate-out="op-08">
                                        <div class="portfolio-desc pt-0 text-center op-ts op-08" data-hover-animate="op-1"
                                            data-hover-animate-out="op-08">
                                            <h3 style="font-size: 32px;">Juana Bailey</h3>
                                            <span>Women's Trainer</span>
                                        </div>
                                    </div>
                                    <div class="bg-overlay-bg dark op-ts op-04" data-hover-animate="op-07"
                                        data-hover-animate-out="op-04"></div>
                                </div>
                            </a>
                        </div>
                    </div>
                </article>

                <article class="portfolio-item col-12 col-sm-6 col-md-4 pf-media pf-icons">
                    <div class="grid-inner">
                        <div class="portfolio-image">
                            <a href="#">
                                <img src="{{ asset('gym/demos/gym/images/team/3.jpg') }}" alt="Derrick Foster">
                                <div class="bg-overlay">
                                    <div class="bg-overlay-content dark flex-column op-ts op-08" data-hover-animate="op-1"
                                        data-hover-animate-out="op-08">
                                        <div class="portfolio-desc pt-0 text-center op-ts op-08" data-hover-animate="op-1"
                                            data-hover-animate-out="op-08">
                                            <h3 style="font-size: 32px;">Derrick Foster</h3>
                                            <span>Junior Trainer</span>
                                        </div>
                                    </div>
                                    <div class="bg-overlay-bg dark op-ts op-04" data-hover-animate="op-07"
                                        data-hover-animate-out="op-04"></div>
                                </div>
                            </a>
                        </div>
                    </div>
                </article>

            </div>

            <div class="section m-0 p-0"
                style="background:  url({{ asset('/gym/demos/gym/images/section/bg-2.jpg') }}) center center no-repeat; background-size: cover;">
                <div class="section m-0" style="background: rgba(0,0,0,0.3);">
                    <div class="container clearfix">
                        <div class="heading-block dark border-bottom-0 mb-0 center">
                            <h2 style="font-size: 40px;" class="nott fw-bold ls1">Our Membership Plans</h2>
                            <span style="font-size: 16px;" class="fw-light text-capitalize ls1">Efficiently network state
                                of the art markets for scalable applications. Professionally engineer business e-tailers for
                                resource sucking e-commerce.</span>
                        </div>
                    </div>
                </div>

                <div class="section m-0 bg-transparent">
                    <div class="container clearfix">
                        <div class="svg-discount"></div>
                        <div class="pricing-tenure-switcher row align-items-center justify-content-center mb-4"
                            data-container="#pricing-switch">
                            <span class="pts-left fw-bold text-light col-auto">Monthly</span>
                            <div class="pts-switcher col-auto" data-default-class="op-05">
                                <div class="switch">
                                    <input id="switch-toggle-pricing-tenure" class="switch-toggle switch-toggle-round"
                                        type="checkbox">
                                    <label for="switch-toggle-pricing-tenure" class="mb-0"></label>
                                </div>
                            </div>
                            <span class="pts-right fw-bold text-light col-auto">Annually</span>
                        </div>

                        <div id="pricing-switch" class="pricing row col-mb-30">

                            <div class="col-lg-4 col-md-6">

                                <div class="pricing-box text-center">
                                    <div class="pricing-title">
                                        <h3>Starter</h3>
                                    </div>
                                    <div class="pricing-price">
                                        FREE<span class="price-tenure">Limited Access</span>
                                    </div>
                                    <div class="pricing-features border-0 bg-transparent">
                                        <ul>
                                            <li><strong>All Items</strong> Access</li>
                                            <li><strong>5</strong> Days Access</li>
                                            <li><strong>1</strong> User Valid</li>
                                            <li>No<strong> Locker-Room</strong></li>
                                            <li>No<strong> Steam</strong> Room</li>
                                        </ul>
                                    </div>
                                    <div class="pricing-action">
                                        <a href="#" data-pricing-plan="Starter Plan"
                                            class="button button-large button-dark button-rounded text-capitalize button-circle ls0">Get
                                            Free Trail</a>
                                    </div>
                                </div>

                            </div>

                            <div class="col-lg-4 col-md-6">

                                <div class="pricing-box price-best text-center">
                                    <div class="price-label">
                                        <span>Popular</span>
                                    </div>
                                    <div class="pricing-title">
                                        <h3>Professional</h3>
                                    </div>
                                    <div class="pricing-price">
                                        <div class="pts-switch-content-left"><span
                                                class="price-unit">&dollar;</span>12<span
                                                class="price-tenure">Monthly</span></div>
                                        <div class="pts-switch-content-right"><span
                                                class="price-unit">&dollar;</span>99<span
                                                class="price-tenure">Yearly</span></div>
                                    </div>
                                    <div class="pricing-features border-0 bg-transparent">
                                        <ul>
                                            <li><strong>All Items</strong> Access</li>
                                            <li class="pts-switch-content-left"><strong>1</strong> Month Access</li>
                                            <li class="pts-switch-content-right"><strong>1</strong> Year Access</li>
                                            <li><strong>1</strong> User Valid</li>
                                            <li><strong>Locker-Room</strong> Available</li>
                                            <li><strong>Steam</strong> Available</li>
                                        </ul>
                                    </div>
                                    <div class="pricing-action">
                                        <div class="pts-switch-content-left"><a href="#"
                                                data-pricing-plan="Professional Monthly Plan"
                                                class="button button-large button-circle button-dark text-capitalize ls0">Get
                                                Started</a></div>
                                        <div class="pts-switch-content-right"><a href="#"
                                                data-pricing-plan="Professional Yearly Plan"
                                                class="button button-large button-circle button-dark text-capitalize ls0">Get
                                                Started</a></div>
                                    </div>
                                </div>

                            </div>

                            <div class="col-lg-4 col-md-6 offset-lg-0 offset-md-3">

                                <div class="pricing-box text-center">
                                    <div class="pricing-title">
                                        <h3>Yoga</h3>
                                    </div>
                                    <div class="pricing-price">
                                        <div class="pts-switch-content-left"><span
                                                class="price-unit">&dollar;</span>19<span
                                                class="price-tenure">Monthly</span></div>
                                        <div class="pts-switch-content-right"><span
                                                class="price-unit">&dollar;</span>149<span
                                                class="price-tenure">Yearly</span></div>
                                    </div>
                                    <div class="pricing-features border-0 bg-transparent">
                                        <ul>
                                            <li><strong>All Items</strong> Access</li>
                                            <li class="pts-switch-content-left"><strong>1</strong> Month Access</li>
                                            <li class="pts-switch-content-right"><strong>1</strong> Year Access</li>
                                            <li>1 <strong>Personal Trainer</strong></li>
                                            <li><strong>Locker-Room</strong> Available</li>
                                            <li><strong>Steam</strong> Available</li>
                                        </ul>
                                    </div>
                                    <div class="pricing-action">
                                        <div class="pts-switch-content-left"><a href="#"
                                                data-pricing-plan="Business Monthly Plan"
                                                class="button button-large button-circle button-dark text-capitalize ls0">Get
                                                Started</a></div>
                                        <div class="pts-switch-content-right"><a href="#"
                                                data-pricing-plan="Business Yearly Plan"
                                                class="button button-large button-circle button-dark text-capitalize ls0">Get
                                                Started</a></div>
                                    </div>
                                </div>

                            </div>

                        </div>
                    </div>
                </div>
            </div>

            <div class="container clearfix">
                <div class="row topmargin-lg clearfix">
                    <div class="col-md-5 offset-md-1 col-sm-6 mb-5">
                        <div class="media">
                            <i class="h3 icon-line2-check color me-3"></i>
                            <div class="media-body">
                                <h4 class="mb-3 font-body">How do I become an author?</h4>
                                <p class="mb-0">Cras sit amet nibh libero, in gravida nulla. Nulla vel metus
                                    scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus
                                    viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue
                                    felis in faucibus.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-5 col-sm-6 mb-5">
                        <div class="media">
                            <i class="h3 icon-line2-check color me-3"></i>
                            <div class="media-body">
                                <h4 class="mb-3 font-body">How do I become an author?</h4>
                                <p class="mb-0">Cras sit amet nibh libero, in gravida nulla. Nulla vel metus
                                    scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus
                                    viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue
                                    felis in faucibus.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-5 col-sm-6 offset-md-1 mb-sm-0 mb-5">
                        <div class="media">
                            <i class="h3 icon-line2-check color me-3"></i>
                            <div class="media-body">
                                <h4 class="mb-3 font-body">How much money can I make?</h4>
                                <p class="mb-0 ">Credibly evolve client-focused convergence rather than leveraged
                                    quality vectors. Authoritatively provide access to market-driven manufactured products
                                    with standardized initiatives.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-5 col-sm-6">
                        <div class="media">
                            <i class="h3 icon-line2-check color me-3"></i>
                            <div class="media-body">
                                <h4 class="mb-3 font-body">Can I offer my items for free on a promotional basis?</h4>
                                <p class="mb-0">Laboriosam iusto quia nulla ad voluptatibus iste beatae voluptas
                                    corrupti facilis accusamus recusandae sequi debitis reprehenderit quibusdam. Facilis
                                    eligendi a exercitationem nisi et placeat excepturi velit!</p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section><!-- #content end -->
@endsection
