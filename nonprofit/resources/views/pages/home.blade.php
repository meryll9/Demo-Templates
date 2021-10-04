@extends('layout.main')
@section('content')
    <!-- Slider
      ============================================= -->
    <section id="slider" class="slider-element dark swiper_wrapper slider-parallax min-vh-75">
        <div class="slider-inner">

            <div class="swiper-container swiper-parent">
                <div class="swiper-wrapper">
                    <div class="swiper-slide dark">
                        <div class="container">
                            <div class="slider-caption">
                                <div>
                                    <h2 class="nott" data-animate="fadeInUp">{{ env('APP_TAGLINE') }}</h2>
                                    <a href="#" data-animate="fadeInUp" data-delay="400"
                                        class="button button-rounded button-large button-light shadow nott ls0 ms-0 mt-4">Know
                                        More</a>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide-bg"
                            style="background: linear-gradient(rgba(0,0,0,.3), rgba(0,0,0,.5)), url({{ asset('/nonprofit/demos/nonprofit/images/slider/1.jpg') }}) no-repeat center center; background-size: cover;">
                        </div>
                    </div>
                    <div class="swiper-slide dark">
                        <div class="container">
                            <div class="slider-caption">
                                <div>
                                    <h2 class="nott" data-animate="fadeInUp">Donate with Kindness.</h2>
                                    <a href="#" data-animate="fadeInUp" data-delay="400"
                                        class="button button-rounded button-large button-light shadow nott ls0 ms-0 mt-4">Know
                                        More</a>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide-bg"
                            style="background: linear-gradient(rgba(0,0,0,0), rgba(0,0,0,.8)), url({{ asset('/nonprofit/demos/nonprofit/images/slider/2.jpg') }}) no-repeat center center; background-size: cover;">
                        </div>
                    </div>
                </div>
                <div class="swiper-navs">
                    <div class="slider-arrow-left"><i class="icon-line-arrow-left"></i></div>
                    <div class="slider-arrow-right"><i class="icon-line-arrow-right"></i></div>
                </div>
                <div class="swiper-scrollbar">
                    <div class="swiper-scrollbar-drag">
                        <div class="slide-number">
                            <div class="slide-number-current"></div><span>/</span>
                            <div class="slide-number-total"></div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <!-- Content
      ============================================= -->
    <section id="content">
        <div class="content-wrap py-0" style="overflow: visible">

            <svg viewBox="0 0 1382 58" width="100%" height="60" preserveAspectRatio="none"
                style="position: absolute; top: -58px; left:0; z-index: 1">
                <path style="fill:#FFF;" d="M1.52.62s802.13,127,1380,0v56H.51Z" />
            </svg>

            <div class="container">

                <div class="slider-feature w-100">
                    <div class="row justify-content-center">
                        <div class="col-md-3 px-1">
                            <a href="demo-nonprofit-about.html"
                                class="card center border-start-0 border-end-0 border-top-0 border-bottom border-bottom shadow py-3 rounded-0 fw-semibold text-uppercase ls1">
                                <div class="card-body">
                                    <i class="icon-line-align-center"></i>View Our Mission
                                </div>
                            </a>
                        </div>
                        <div class="col-md-3 px-1">
                            <a href="demo-nonprofit-causes.html"
                                class="card center border-start-0 border-end-0 border-top-0 border-bottom border-bottom shadow py-3 rounded-0 fw-semibold text-uppercase ls1">
                                <div class="card-body">
                                    <i class="icon-line-umbrella"></i>Top Founders
                                </div>
                            </a>
                        </div>
                        <div class="col-md-3 px-1">
                            <a href="demo-nonprofit-contact.html"
                                class="card center border-start-0 border-end-0 border-top-0 border-bottom border-bottom shadow py-3 rounded-0 fw-semibold text-uppercase ls1">
                                <div class="card-body">
                                    <i class="icon-line-mail"></i>Request a Quote
                                </div>
                            </a>
                        </div>
                    </div>
                </div>

            </div>

            <div class="section mt-3"
                style="background: #FFF url({{ asset('/nonprofit/demos/nonprofit/images/others/1.jpg') }}) no-repeat 100% 50% / auto 100%;">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-md-7 center">
                            <div class="heading-block border-bottom-0 mb-4">
                                <h2 class="mb-4 nott">Unconditional Help</h2>
                            </div>
                            <div class="svg-line bottommargin-sm">
                                <img src="{{ asset('nonprofit/demos/nonprofit/images/divider-1.svg') }}" alt="svg divider"
                                    height="20">
                            </div>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores, quasi, dolorum blanditiis
                                eius laboriosam, quidem temporibus, dolor quod voluptatum perferendis ullam. Odio sequi at
                                dolore consequatur ad, odit expedita tenetur.</p>
                        </div>
                    </div>
                    <div class="row mt-5 col-mb-50 mb-0">
                        <div class="col-md-3">
                            <div class="feature-box flex-column ps-0">
                                <div class="fbox-media position-relative">
                                    <img src="{{ asset('nonprofit/demos/nonprofit/images/icons/donate.svg') }}"
                                        alt="Featured Icon" width="60" class="mb-3">
                                </div>
                                <div class="fbox-content px-0">
                                    <h3 class="nott ls0"><a href="#" class="text-dark">Give Donation.</a></h3>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum, dolore, voluptates!
                                    </p>
                                    <a href="#"
                                        class="button button-rounded button-border nott ls0 fw-normal ms-0 mt-4">Donate
                                        Now</a>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-3">
                            <div class="feature-box flex-column ps-0">
                                <div class="fbox-media position-relative">
                                    <img src="{{ asset('nonprofit/demos/nonprofit/images/icons/volunteer.svg') }}"
                                        alt="Featured Icon" width="60" class="mb-3">
                                </div>
                                <div class="fbox-content px-0">
                                    <h3 class="nott ls0"><a href="#" class="text-dark">Become a Volunteer.</a>
                                    </h3>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam, provident.</p>
                                    <a href="#"
                                        class="button button-rounded button-border nott ls0 fw-normal ms-0 mt-4">Join
                                        Now</a>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-3">
                            <div class="feature-box flex-column ps-0">
                                <div class="fbox-media position-relative">
                                    <img src="{{ asset('nonprofit/demos/nonprofit/images/icons/help-child.svg') }}"
                                        alt="Featured Icon" width="60" class="mb-3">
                                </div>
                                <div class="fbox-content px-0">
                                    <h3 class="nott ls0"><a href="#" class="text-dark">Help the Children.</a>
                                    </h3>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Commodi, ipsa!</p>
                                    <a href="#"
                                        class="button button-rounded button-border nott ls0 fw-normal ms-0 mt-4">Help
                                        Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="container">
                <div class="w-100 position-relative">
                    <div class="donor-img d-flex align-items-center rounded parallax mx-auto shadow-sm w-100"
                        data-bottom-top="background-position:0px 0px;" data-top-bottom="background-position:0px -50px;"
                        style="height: 500px; background: url({{ asset('/nonprofit/demos/nonprofit/images/others/3.jpg') }}) no-repeat center center / cover">
                    </div>
                    <div class="card bg-white border-0 center py-sm-4 px-sm-5 p-2 shadow-sm"
                        style="position: absolute; top: 50%; right: 80px; transform: translateY(-50%);">
                        <div class="card-body">
                            <div class="color h1 mb-3"><i class="icon-heart"></i></div>
                            <small class="text-uppercase fw-normal ls2 text-muted mb-3 d-block">Our Top Donor</small>
                            <h3 class="display-3 fw-bold mb-3 font-secondary">$2.4M</h3>
                            <p class="text-uppercase fw-medium text-muted">:Raised</p>
                            <a href="demo-nonprofit-causes-single.html" class="button-svg">View More</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="section bg-transparent mt-0 mb-4">
                <div class="container clearfix">
                    <div class="row justify-content-center" style="margin-top: 100px">
                        <div class="col-md-7 center">
                            <div class="heading-block border-bottom-0 mb-4">
                                <h2 class="mb-4 nott">Our Charity Causes</h2>
                            </div>
                            <div class="svg-line bottommargin-sm clearfix">
                                <img src="{{ asset('nonprofit/demos/nonprofit/images/divider-1.svg') }}" alt="svg divider"
                                    height="20">
                            </div>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores, quasi, dolorum blanditiis
                                eius laboriosam, quidem temporibus, dolor quod voluptatum perferendis ullam. Odio sequi at
                                dolore consequatur ad, odit expedita tenetur.</p>
                        </div>
                    </div>
                </div>

                <div class="owl-carousel owl-carousel-full image-carousel carousel-widget topmargin-sm charity-card"
                    data-stage-padding="20" data-margin="10" data-center="true" data-loop="true" data-nav="true"
                    data-autoplay="500000" data-speed="400" data-pagi="true" data-items-xs="1" data-items-sm="2"
                    data-items-md="2" data-items-lg="3" data-items-xl="4">

                    <div class="oc-item text-start">
                        <img src="{{ asset('nonprofit/demos/nonprofit/images/cause/1.jpg') }}" alt="Image 1"
                            class="rounded">
                        <div class="oc-desc d-flex flex-column justify-content-center shadow-lg">
                            <small class="text-uppercase fw-normal ls1 color mb-2 d-block">Homeless</small>
                            <h3 class="mb-3"><a href="demo-nonprofit-causes-single.html">Clean Water for All</a>
                            </h3>
                            <ul class="skills mb-3">
                                <li data-percent="57">
                                    <div class="progress">
                                        <div class="progress-percent">
                                            <div class="counter counter-inherit">
                                                $<span data-from="0" data-to="119700" data-refresh-interval="10"
                                                    data-speed="1100" data-comma="true"></span> Donated of $210,000
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                            <p class="mb-4 text-black-50">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut
                                atque quidem consequuntur officiis vitae illo omnis inventore aliquam assumenda iusto
                                mollitia illum similique eum libero rem possimus et, ipsam sapiente..</p>
                            <a href="demo-nonprofit-causes-single.html"
                                class="button button-rounded button-border nott ls0 fw-medium m-0 d-flex align-self-start">Donate
                                Now</a>
                        </div>
                    </div>

                    <div class="oc-item text-start">
                        <img src="{{ asset('nonprofit/demos/nonprofit/images/cause/3.jpg') }}" alt="Image 1"
                            class="rounded">
                        <div class="oc-desc d-flex flex-column justify-content-center shadow-lg">
                            <small class="text-uppercase fw-normal ls1 color mb-2 d-block">Education</small>
                            <h3 class="mb-3"><a href="demo-nonprofit-causes-single.html">Education for All</a>
                            </h3>
                            <ul class="skills mb-3">
                                <li data-percent="45">
                                    <div class="progress">
                                        <div class="progress-percent">
                                            <div class="counter counter-inherit">
                                                $<span data-from="0" data-comma="true" data-to="76500"
                                                    data-refresh-interval="10" data-speed="1100"></span> Donated of $170,000
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                            <p class="mb-4 text-black-50">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nostrum
                                voluptatum quaerat, nisi illum rerum consequatur nemo.</p>
                            <a href="demo-nonprofit-causes-single.html"
                                class="button button-rounded button-border nott ls0 fw-medium m-0 d-flex align-self-start">Donate
                                Now</a>
                        </div>
                    </div>

                    <div class="oc-item text-start">
                        <img src="{{ asset('nonprofit/demos/nonprofit/images/cause/2.jpg') }}" alt="Image 1"
                            class="rounded">
                        <div class="oc-desc d-flex flex-column justify-content-center shadow-lg">
                            <small class="text-uppercase fw-normal ls1 color mb-2 d-block">Food</small>
                            <h3 class="mb-3"><a href="demo-nonprofit-causes-single.html">Food for Hungry</a></h3>
                            <ul class="skills mb-3">
                                <li data-percent="51">
                                    <div class="progress">
                                        <div class="progress-percent">
                                            <div class="counter counter-inherit">
                                                $<span data-from="0" data-comma="true" data-to="81600"
                                                    data-refresh-interval="10" data-speed="1100"></span> Donated of $160,000
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                            <p class="mb-4 text-black-50">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nostrum
                                voluptatum quaerat, nisi illum rerum consequatur nemo.</p>
                            <a href="demo-nonprofit-causes-single.html"
                                class="button button-rounded button-border nott ls0 fw-medium m-0 d-flex align-self-start">Donate
                                Now</a>
                        </div>
                    </div>

                    <div class="oc-item text-start">
                        <img src="{{ asset('nonprofit/demos/nonprofit/images/cause/4.jpg') }}" alt="Image 1"
                            class="rounded">
                        <div class="oc-desc d-flex flex-column justify-content-center shadow-lg">
                            <small class="text-uppercase fw-normal ls1 color mb-2 d-block">Medicine</small>
                            <h3 class="mb-3"><a href="demo-nonprofit-causes-single.html">Help from Injuries</a>
                            </h3>
                            <ul class="skills mb-3">
                                <li data-percent="45">
                                    <div class="progress">
                                        <div class="progress-percent">
                                            <div class="counter counter-inherit">
                                                $<span data-from="0" data-comma="true" data-to="86800"
                                                    data-refresh-interval="10" data-speed="1100"></span> Donated of $310,000
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                            <p class="mb-4 text-black-50">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nostrum
                                voluptatum quaerat, nisi illum rerum consequatur nemo.</p>
                            <a href="demo-nonprofit-causes-single.html"
                                class="button button-rounded button-border nott ls0 fw-medium m-0 d-flex align-self-start">Donate
                                Now</a>
                        </div>
                    </div>

                    <div class="oc-item text-start">
                        <img src="{{ asset('nonprofit/demos/nonprofit/images/cause/5.jpg') }}" alt="Image 1"
                            class="rounded">
                        <div class="oc-desc d-flex flex-column justify-content-center shadow-lg">
                            <small class="text-uppercase fw-normal ls1 color mb-2 d-block">Education</small>
                            <h3 class="mb-3"><a href="demo-nonprofit-causes-single.html">Education for All</a>
                            </h3>
                            <ul class="skills mb-3">
                                <li data-percent="45">
                                    <div class="progress">
                                        <div class="progress-percent">
                                            <div class="counter counter-inherit">
                                                $<span data-from="0" data-comma="true" data-to="76500"
                                                    data-refresh-interval="10" data-speed="1100"></span> Donated of $170,000
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                            <p class="mb-4 text-black-50">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nostrum
                                voluptatum quaerat, nisi illum rerum consequatur nemo.</p>
                            <a href="demo-nonprofit-causes-single.html"
                                class="button button-rounded button-border nott ls0 fw-medium m-0 d-flex align-self-start">Donate
                                Now</a>
                        </div>
                    </div>

                </div>
            </div>

            <div class="clear"></div>

            <div class="container-fluid my-5 clearfix">
                <div class="d-flex flex-column align-items-center justify-content-center center counter-section position-relative py-5"
                    style="background: url({{ asset('/nonprofit/demos/nonprofit/images/world-map.png') }}) no-repeat center center/ contain">
                    <div class="mx-auto center" style="max-width: 1000px">
                        <h3>Our mission is to help people by distributing Money and Service globally.</h3>
                    </div>

                    <div class="row align-items-stretch m-0 w-100 clearfix">

                        <div class="col-lg-3 col-sm-6 center mt-5">
                            <img src="{{ asset('nonprofit/demos/nonprofit/images/icons/breakfast.svg') }}"
                                alt="Counter Icon" width="70" class="mb-4">
                            <div class="counter font-secondary"><span data-from="100" data-to="11265"
                                    data-refresh-interval="50" data-speed="2100" data-comma="true"></span>+</div>
                            <h5 class="nott ls0 mt-0"><u>Meals Surved</u></h5>
                        </div>

                        <div class="col-lg-3 col-sm-6 center mt-5">
                            <img src="{{ asset('nonprofit/demos/nonprofit/images/icons/volunteers.svg') }}"
                                alt="Counter Icon" width="70" class="mb-4">
                            <div class="counter font-secondary"><span data-from="100" data-to="2500"
                                    data-refresh-interval="50" data-speed="2200" data-comma="true"></span>+</div>
                            <h5 class="nott ls0 mt-0"><u>Volunteers</u></h5>
                        </div>

                        <div class="col-lg-3 col-sm-6 center mt-5">
                            <img src="{{ asset('nonprofit/demos/nonprofit/images/icons/educated.svg') }}"
                                alt="Counter Icon" width="70" class="mb-4">
                            <div class="counter font-secondary"><span data-from="100" data-to="17408"
                                    data-refresh-interval="25" data-speed="2300" data-comma="true"></span>+</div>
                            <h5 class="nott ls0 mt-0"><u>Person Educated</u></h5>
                        </div>

                        <div class="col-lg-3 col-sm-6 center mt-5">
                            <img src="{{ asset('nonprofit/demos/nonprofit/images/icons/shelter.svg') }}" alt="Counter Icon"
                                width="70" class="mb-4">
                            <div class="counter font-secondary"><span data-from="150" data-to="13413"
                                    data-refresh-interval="50" data-speed="2100" data-comma="true"></span>+</div>
                            <h5 class="nott ls0 mt-0"><u>Got Shelter</u></h5>
                        </div>

                    </div>
                </div>
            </div>

            <div class="clear"></div>

            <div class="section"
                style="background: url({{ asset('/nonprofit/demos/nonprofit/images/others/section-bg.jpg') }}) no-repeat center center / cover; padding: 80px 0;">
                <div class="container clearfix">
                    <div class="row">
                        <div class="col-lg-8">
                            <h3 class="mb-2">Our Mission <span>&amp;</span> Goals</h3>
                            <div class="svg-line mb-2 clearfix">
                                <img src="{{ asset('nonprofit/demos/nonprofit/images/divider-1.svg') }}" alt="svg divider"
                                    height="10">
                            </div>
                            <p class="mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veniam
                                deleniti veritatis nostrum, temporibus vero maxime quisquam quaerat doloremque fugit
                                nesciunt.</p>
                            <div class="row mission-goals gutter-30 mb-0">
                                <div class="col-md-6">
                                    <div class="feature-box fbox-plain bg-white mx-0">
                                        <div class="fbox-media position-relative col-auto p-0 me-4">
                                            <img src="{{ asset('nonprofit/demos/nonprofit/images/icons/home.svg') }}"
                                                alt="Featured Icon 1" width="50">
                                        </div>
                                        <div class="fbox-content">
                                            <h3 class="nott ls0"><a href="#" class="text-dark">Homeless
                                                    Charities.</a></h3>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="feature-box fbox-plain bg-white mx-0">
                                        <div class="fbox-media position-relative col-auto p-0 me-4">
                                            <img src="{{ asset('nonprofit/demos/nonprofit/images/icons/health.svg') }}"
                                                alt="Featured Icon 2" width="50">
                                        </div>
                                        <div class="fbox-content">
                                            <h3 class="nott ls0"><a href="#" class="text-dark">Health
                                                    Charities.</a></h3>
                                            <p>Continually restore adaptive paradigms after "outside.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="feature-box fbox-plain bg-white mx-0">
                                        <div class="fbox-media position-relative col-auto p-0 me-4">
                                            <img src="{{ asset('nonprofit/demos/nonprofit/images/icons/education.svg') }}"
                                                alt="Featured Icon 3" width="50">
                                        </div>
                                        <div class="fbox-content">
                                            <h3 class="nott ls0"><a href="#" class="text-dark">Education
                                                    Charities.</a></h3>
                                            <p>Quickly benchmark client-centered vortals without cutting.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="feature-box fbox-plain bg-white mx-0">
                                        <div class="fbox-media position-relative col-auto p-0 me-4">
                                            <img src="{{ asset('nonprofit/demos/nonprofit/images/icons/animal.svg') }}"
                                                alt="Featured Icon 4" width="50">
                                        </div>
                                        <div class="fbox-content">
                                            <h3 class="nott ls0"><a href="#" class="text-dark">Animal
                                                    Charities.</a></h3>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="feature-box fbox-plain bg-white mx-0">
                                        <div class="fbox-media position-relative col-auto p-0 me-4">
                                            <img src="{{ asset('nonprofit/demos/nonprofit/images/icons/environmental.svg') }}"
                                                alt="Featured Icon 5" width="50">
                                        </div>
                                        <div class="fbox-content">
                                            <h3 class="nott ls0"><a href="#" class="text-dark">Eco
                                                    Charities.</a></h3>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="feature-box fbox-plain bg-white mx-0">
                                        <div class="fbox-media position-relative col-auto p-0 me-4">
                                            <img src="{{ asset('nonprofit/demos/nonprofit/images/icons/food.svg') }}"
                                                alt="Featured Icon 6" width="50">
                                        </div>
                                        <div class="fbox-content">
                                            <h3 class="nott ls0"><a href="#" class="text-dark">Food
                                                    Charities.</a></h3>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 mt-5 mt-lg-0">
                            <h3 class="mb-2">Latest Videos</h3>
                            <div class="svg-line mb-2 clearfix">
                                <img src="{{ asset('nonprofit/demos/nonprofit/images/divider-1.svg') }}" alt="svg divider"
                                    height="10">
                            </div>
                            <p class="mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit excepturi
                                ipsa!</p>
                            <div class="clear"></div>
                            <a href="https://www.youtube.com/watch?v=VqmFKnHG5q8" data-lightbox="iframe"
                                class="shadow-sm d-flex align-items-center justify-content-center play-video rounded position-relative bg-color mt-3 clearfix"
                                style="background: linear-gradient(rgba(0,0,0,.05), rgba(0,0,0,.01)), url({{ asset('/nonprofit/demos/nonprofit/images/others/5.jpg') }}) no-repeat center center / cover; height: 300px"><i
                                    class="icon-play"></i></a>
                            <div class="row mt-4" data-lightbox="gallery">
                                <div class="col-sm-6">
                                    <a href="https://www.youtube.com/watch?v=hc7iuc5KZ8Y" data-lightbox="iframe"
                                        class="shadow-sm d-flex align-items-center justify-content-center play-video rounded position-relative bg-color left"
                                        style="background: url({{ asset('/nonprofit/demos/nonprofit/images/others/4.jpg') }}) no-repeat center center / cover; height: 140px"><i
                                            class="icon-play icon-small"></i></a>
                                </div>

                                <div class="col-sm-6 mt-4 mt-sm-0">
                                    <a href="https://www.youtube.com/watch?v=VqmFKnHG5q8" data-lightbox="iframe"
                                        class="shadow-sm d-flex align-items-center justify-content-center play-video rounded position-relative bg-color left"
                                        style="background: url({{ asset('/nonprofit/demos/nonprofit/images/others/2.jpg') }}) no-repeat center center / cover; height: 140px"><i
                                            class="icon-play icon-small"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="section bg-transparent">
                <div class="container clearfix">
                    <div class="row justify-content-center mb-5">
                        <div class="col-md-7 center">
                            <div class="heading-block border-bottom-0 mb-4">
                                <h2 class="mb-4 nott">Happy Volunteers</h2>
                            </div>
                            <div class="svg-line bottommargin-sm clearfix">
                                <img src="{{ asset('nonprofit/demos/nonprofit/images/divider-1.svg') }}" alt="svg divider"
                                    height="20">
                            </div>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores, quasi, dolorum blanditiis
                                eius laboriosam, quidem temporibus, dolor quod voluptatum perferendis ullam. Odio sequi at
                                dolore consequatur ad, odit expedita tenetur.</p>
                        </div>
                    </div>
                    <div class="row justify-content-around">
                        <div class="col-lg-2 col-md-4 col-6">
                            <div class="team overflow-hidden">
                                <div class="team-image">
                                    <img src="{{ asset('nonprofit/demos/nonprofit/images/volunteers/1.jpg') }}"
                                        alt="Penny Tool">
                                </div>
                                <div class="team-desc">
                                    <h4 class="team-title pt-3 mb-0 fw-medium nott">Penny Tool<small>Volunteers</small>
                                    </h4>
                                </div>
                            </div>
                            <div class="team mt-5">
                                <div class="team-image">
                                    <img src="{{ asset('nonprofit/demos/nonprofit/images/volunteers/6.jpg') }}"
                                        alt="Piff Jenkins">
                                </div>
                                <div class="team-desc">
                                    <h4 class="team-title pt-3 mb-0 fw-medium nott">Piff Jenkins<small>Volunteers</small>
                                    </h4>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-4 col-6 mt-4">
                            <div class="team">
                                <div class="team-image">
                                    <img src="{{ asset('nonprofit/demos/nonprofit/images/volunteers/2.jpg') }}"
                                        alt="Rodney Artich">
                                </div>
                                <div class="team-desc">
                                    <h4 class="team-title pt-3 mb-0 fw-medium nott">Rodney Artich<small>Volunteers</small>
                                    </h4>
                                </div>
                            </div>
                            <div class="team mt-5">
                                <div class="team-image">
                                    <img src="{{ asset('nonprofit/demos/nonprofit/images/volunteers/7.jpg') }}"
                                        alt="Weir Doe">
                                </div>
                                <div class="team-desc">
                                    <h4 class="team-title pt-3 mb-0 fw-medium nott">Weir Doe<small>Volunteers</small></h4>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-4 col-6">
                            <div class="team">
                                <div class="team-image">
                                    <img src="{{ asset('nonprofit/demos/nonprofit/images/volunteers/3.jpg') }}"
                                        alt="Jackson Pot">
                                </div>
                                <div class="team-desc">
                                    <h4 class="team-title pt-3 mb-0 fw-medium nott">Jackson Pot<small>Volunteers</small>
                                    </h4>
                                </div>
                            </div>
                            <div class="team mt-5">
                                <div class="team-image">
                                    <img src="{{ asset('nonprofit/demos/nonprofit/images/volunteers/8.jpg') }}"
                                        alt="Phillip Anthropy ">
                                </div>
                                <div class="team-desc">
                                    <h4 class="team-title pt-3 mb-0 fw-medium nott">Phillip Anthropy
                                        <small>Volunteers</small></h4>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-4 col-6 mt-5">
                            <div class="team">
                                <div class="team-image">
                                    <img src="{{ asset('nonprofit/demos/nonprofit/images/volunteers/4.jpg') }}"
                                        alt="Eric Widget">
                                </div>
                                <div class="team-desc">
                                    <h4 class="team-title pt-3 mb-0 fw-medium nott">Eric Widget<small>Volunteers</small>
                                    </h4>
                                </div>
                            </div>
                            <div class="team mt-5">
                                <div class="team-image">
                                    <img src="{{ asset('nonprofit/demos/nonprofit/images/volunteers/9.jpg') }}"
                                        alt="Giles Posture">
                                </div>
                                <div class="team-desc">
                                    <h4 class="team-title pt-3 mb-0 fw-medium nott">Giles Posture<small>Volunteers</small>
                                    </h4>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-4 col-6 mt-1">
                            <div class="team">
                                <div class="team-image">
                                    <img src="{{ asset('nonprofit/demos/nonprofit/images/volunteers/5.jpg') }}"
                                        alt="Gunther Beard">
                                </div>
                                <div class="team-desc">
                                    <h4 class="team-title pt-3 mb-0 fw-medium nott">Gunther Beard<small>Volunteers</small>
                                    </h4>
                                </div>
                            </div>
                            <div class="team full-border imagescalein mt-5">
                                <a href="#" class="team-image">
                                    <img src="{{ asset('nonprofit/demos/nonprofit/images/volunteers/10.jpg') }}"
                                        alt="Apply Volunteer" class="rounded-0">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="bg-color subscribe-section position-relative" style="margin-top: 100px;">
                <div class="container" style="z-index: 2;">
                    <div class="center collapsed subscribe-section-target" data-bs-toggle="collapse"
                        data-bs-target="#target-1">
                        <div class="subscribe-icon"><i class="icon-envelope21"></i></div>
                        <h2 class="mb-0 mt-2 position-relative" style="z-index: 1;">Click here to Subscribe our Newsletter
                            <i class="icon-arrow-down position-relative" style="top: 5px"></i>
                        </h2>
                    </div>
                    <div class="collapse" id="target-1">
                        <div class="form-widget pb-5" data-alert-type="false">

                            <div class="form-result"></div>

                            <div class="nonprofit-loader css3-spinner" style="position: absolute;">
                                <div class="css3-spinner-bounce1"></div>
                                <div class="css3-spinner-bounce2"></div>
                                <div class="css3-spinner-bounce3"></div>
                            </div>
                            <div id="nonprofit-submitted" class="center">
                                <h4 class="fw-semibold mb-0">Thank You for Contact Us! Our Team will contact you asap on
                                    your email Address.</h4>
                            </div>

                            <form id="nonprofit" class="row mt-2" action="include/form.php" method="post"
                                enctype="multipart/form-data">
                                <div class="col-md-4 mb-4 mb-md-1">
                                    <label for="nonprofit-name">Name:</label>
                                    <input type="text" name="nonprofit-name" id="nonprofit-name"
                                        class="form-control border-form-control required" value=""
                                        placeholder="Enter your Full Name">
                                </div>
                                <div class="col-md-4 mb-4 mb-md-1">
                                    <label for="nonprofit-phone">Contact:</label>
                                    <input type="text" name="nonprofit-phone" id="nonprofit-phone"
                                        class="form-control border-form-control" value=""
                                        placeholder="Enter your Contact Number">
                                </div>
                                <div class="col-md-4 mb-4 mb-md-1">
                                    <label for="nonprofit-email">Email:</label>
                                    <input type="email" name="nonprofit-email" id="nonprofit-email"
                                        class="form-control border-form-control required" value=""
                                        placeholder="Enter your Email">
                                </div>
                                <div class="col-12 d-none">
                                    <input type="text" id="nonprofit-botcheck" name="nonprofit-botcheck" value="" />
                                </div>
                                <button type="submit" name="nonprofit-submit"
                                    class="btn button button-rounded button-xlarge button-dark bg-dark shadow nott ls0 m-0 subscribe-button">Subscribe
                                    Now</button>
                                <input type="hidden" name="prefix" value="nonprofit-">
                            </form>
                        </div>
                    </div>
                </div>
                <div
                    style="background-image: url({{ asset('/nonprofit/demos/nonprofit/images/divider-4.svg') }}); position: absolute; bottom: -20px; left: 0; width: 100%; height: 60px; z-index: 1;">
                </div>
            </div>

            <div class="section m-0 p-0 row align-items-stretch clearfix"
                style="background-color: rgba(198,192,156, 0.15);">
                <div class="col-lg-4 dark d-flex flex-column align-items-center center justify-content-center"
                    style="background: linear-gradient(rgba(0,0,0,.3), rgba(0,0,0,.5)), url({{ asset('/nonprofit/demos/nonprofit/images/others/event.jpg') }}) center center repeat; background-size: cover; min-height: 300px;">
                    <h2 class="display-4 px-4 fw-bold mb-4 d-block">Events Overview</h2>
                </div>
                <div class="col-lg-8 col-padding">
                    <div class="events-calendar">
                        <div class="events-calendar-header clearfix">
                            <div
                                class="calendar-month-year d-flex text-start justify-content-between align-items-center w-100">
                                <div>
                                    <span id="calendar-month" class="calendar-month text-dark"></span>
                                    <span id="calendar-year" class="calendar-year text-dark"></span>
                                </div>
                                <nav>
                                    <span id="calendar-prev" class="calendar-prev bg-color"><i
                                            class="icon-chevron-left text-dark"></i></span>
                                    <span id="calendar-next" class="calendar-next bg-color"><i
                                            class="icon-chevron-right text-dark"></i></span>
                                    <span id="calendar-current" class="calendar-current bg-color"
                                        title="Got to current date"><i class="icon-reload text-dark"></i></span>
                                </nav>
                            </div>
                        </div>
                        <div id="calendar" class="fc-calendar-container"></div>
                    </div>

                </div>
            </div>

            <div class="section bg-transparent" style="padding: 80px 0">
                <div class="container clearfix">
                    <div class="row justify-content-center">
                        <div class="col-md-7 center">
                            <div class="heading-block border-bottom-0 mb-4">
                                <h2 class="mb-4 nott">Who Work With Us</h2>
                            </div>
                            <div class="svg-line bottommargin-sm clearfix">
                                <img src="{{ asset('nonprofit/demos/nonprofit/images/divider-1.svg') }}" alt="svg divider"
                                    height="15">
                            </div>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores, quasi, dolorum blanditiis
                                eius laboriosam, quidem temporibus, dolor quod voluptatum perferendis ullam. Odio sequi at
                                dolore consequatur ad, odit expedita tenetur.</p>
                        </div>
                        <div class="clear"></div>
                        <div class="col-md-11 my-5">
                            <ul class="clients-grid grid-2 grid-sm-3 grid-md-5 mb-0">
                                <li class="grid-item"><a href="#"><img
                                            src="{{ asset('nonprofit/images/clients/1.png') }}" alt="Clients"></a></li>
                                <li class="grid-item"><a href="#"><img
                                            src="{{ asset('nonprofit/images/clients/2.png') }}" alt="Clients"></a></li>
                                <li class="grid-item"><a href="#"><img
                                            src="{{ asset('nonprofit/images/clients/3.png') }}" alt="Clients"></a></li>
                                <li class="grid-item"><a href="#"><img
                                            src="{{ asset('nonprofit/images/clients/4.png') }}" alt="Clients"></a></li>
                                <li class="grid-item"><a href="#"><img
                                            src="{{ asset('nonprofit/images/clients/5.png') }}" alt="Clients"></a></li>
                                <li class="grid-item"><a href="#"><img
                                            src="{{ asset('nonprofit/images/clients/6.png') }}" alt="Clients"></a></li>
                                <li class="grid-item"><a href="#"><img
                                            src="{{ asset('nonprofit/images/clients/7.png') }}" alt="Clients"></a></li>
                                <li class="grid-item"><a href="#"><img
                                            src="{{ asset('nonprofit/images/clients/8.png') }}" alt="Clients"></a></li>
                                <li class="grid-item"><a href="#"><img
                                            src="{{ asset('nonprofit/images/clients/9.png') }}" alt="Clients"></a></li>
                                <li class="grid-item"><a href="#"><img
                                            src="{{ asset('nonprofit/images/clients/10.png') }}" alt="Clients"></a></li>
                            </ul>
                        </div>
                        <h5 class="fw-normal text-black-50 mb-0">If you want to work with for nonprofit? <a
                                href="demo-nonprofit-contact.html"><u>Send your Details</u></a>.</h5>
                    </div>
                </div>
            </div>

            <div class="line line-sm my-0 clearfix"></div>
            <div class="clear"></div>
            <div class="section section-details mb-0 bg-white" style="padding: 80px 0 160px;">
                <div class="w-100 h-100 d-none d-md-block"
                    style="position: absolute; top: 0; left: 0; background: #FFF url({{ asset('/nonprofit/demos/nonprofit/images/others/6.jpg') }}) no-repeat bottom right / cover;">
                </div>
                <div class="container clearfix">
                    <div class="row">
                        <div class="col-md-4 px-4 mb-5">
                            <h4 class="fw-medium mb-4">About Canvas</h4>
                            <p class="mb-3">Proactively re-engineer pandemic models rather than cost effective
                                catalysts for change.</p>
                            <abbr title="Location"><strong>Location:</strong></abbr><a href="#"> View the Map</a><br>
                            <abbr title="Phone Number"><strong>Phone:</strong></abbr> (1) 8547 632521<br>
                            <abbr title="Email Address"><strong>Email:</strong></abbr> info@canvas.com
                        </div>

                        <div class="col-md-4 px-4 mb-5">
                            <h4 class="fw-medium mb-4">Our Partners</h4>
                            <p>Conveniently pontificate worldwide services vis-a-vis e-business portals. Phosfluorescently
                                re-engineer global methodologies vis-a-vis standards compliant platforms.</p>
                        </div>

                        <div class="col-md-4 px-4 mb-5">
                            <h4 class="fw-medium mb-4">Mission</h4>
                            <p>Collaboratively reintermediate enterprise e-commerce with turnkey architectures. Conveniently
                                actualize <a href="#">testing</a> procedures before superior meta-services. Formulate
                                cross-unit <a href="#">Energistically</a> with pandemic markets.</p>
                        </div>

                        <div class="col-md-4 px-4 mb-5 mb-md-0">
                            <h4 class="fw-medium mb-4">Support</h4>
                            <p class="mb-3">Compellingly enable premium alignments rather than sustainable
                                content.</p>
                            <a href="#" class="mb-1 d-block"><i class="icon-envelope21 position-relative"
                                    style="top: 1px;"></i> no.reply@canvas.com</a>
                            <div class="fw-medium mb-2 d-block">Monday - Friday 10:30 -18:00</div>
                            <a href="#" class="social-icon si-dark si-small si-facebook" title="Facebook">
                                <i class="icon-facebook"></i>
                                <i class="icon-facebook"></i>
                            </a>

                            <a href="#" class="social-icon si-dark si-small si-delicious" title="Delicious">
                                <i class="icon-delicious"></i>
                                <i class="icon-delicious"></i>
                            </a>

                            <a href="#" class="social-icon si-dark si-small si-paypal" title="Paypal">
                                <i class="icon-paypal"></i>
                                <i class="icon-paypal"></i>
                            </a>

                            <a href="#" class="social-icon si-dark si-small si-flattr" title="Flattr">
                                <i class="icon-flattr"></i>
                                <i class="icon-flattr"></i>
                            </a>

                            <a href="#" class="social-icon si-dark si-small si-android" title="Android">
                                <i class="icon-android"></i>
                                <i class="icon-android"></i>
                            </a>

                            <a href="#" class="social-icon si-dark si-small si-smashmag" title="Smashmag">
                                <i class="icon-smashmag"></i>
                                <i class="icon-smashmag"></i>
                            </a>
                        </div>

                        <div class="col-md-4 px-4 mb-5 mb-md-0">
                            <h4 class="fw-medium mb-4">Testimonials</h4>
                            <div id="oc-testi" class="owl-carousel testimonials-carousel carousel-widget" data-margin="0"
                                data-nav="false" data-pagi="false" data-items="1" data-autoplay="6000" data-loop="true"
                                data-animate-in="fadeIn" data-animate-out="fadeOut">

                                <div class="oc-item">
                                    <div class="testimonial bg-transparent shadow-none border-0 p-0">
                                        <div class="testi-content">
                                            <p>Incidunt deleniti blanditiis quas aperiam recusandae consequatur ullam
                                                quibusdam cum libero illo rerum repellendus!</p>
                                            <div class="testi-meta ls1"> Fig Nelson</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="oc-item">
                                    <div class="testimonial bg-transparent shadow-none border-0 p-0">
                                        <div class="testi-content">
                                            <p>Completely e-enable premier infomediaries and long-term high-impact process
                                                improvements. Completely provide access to B2C.</p>
                                            <div class="testi-meta ls1"> Bailey Wonger</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section><!-- #content end -->
@endsection
