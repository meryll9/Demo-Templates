@extends('layout.main')
@section('content')
    <!-- Slider
      ============================================= -->
    <section id="slider" class="slider-element min-vh-60 min-vh-md-100 include-header"
        style="background: url({{ asset('/photographer/demos/photographer/images/dots-1.png') }}) 100% 0 no-repeat; background-size: 60% auto">
        <div class="slider-inner">

            <div class="vertical-middle">
                <div class="container parallax py-5" data-0="opacity: 1; overflow: visible; margin-top:0px"
                    data-top-bottom="opacity: 0; overflow: visible; margin-top:100px">

                    <div class="row align-items-center col-mb-50">
                        <div class="col-md-6">
                            <div class="py-5 py-md-0">
                                <small class="text-muted text-uppercase fw-light ls4 mb-1 d-block">Photographer</small>
                                <h2 class="text-dark">{{ env('APP_TAGLINE') }}</h2>
                                <h5 class="fw-light ls1" style="opacity: .7">Lorem ipsum dolor sit amet, consectetur
                                    adipisicing elit. Fuga quasi quo ea magnam dignissimos quis obcaecati aut in.</h5>
                                <div class="d-flex align-items-center mt-5">
                                    <a href="#"
                                        class="button button-change button-rounded overflow-hidden nott button-large fw-normal mx-0 px-5">
                                        <span><i class="icon-line2-envelope fw-semibold"></i> Email Me Here</span>
                                    </a>
                                    <a href="https://facebook.com/semicolonweb" target="_blank"
                                        class="d-none d-sm-inline-block my-0 me-0 ms-4 social-icon si-small si-borderless si-facebook">
                                        <i class="icon-facebook"></i>
                                        <i class="icon-facebook"></i>
                                    </a>
                                    <a href="https://facebook.com/semicolonweb" target="_blank"
                                        class="d-none d-sm-inline-block my-0 me-0 ms-3 social-icon si-small si-borderless si-twitter">
                                        <i class="icon-twitter"></i>
                                        <i class="icon-twitter"></i>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6 ps-md-5 ps-lg-0">
                            <div class="row align-items-stretch">
                                <div class="col-lg-6 col-md-12 rounded col-6 d-none d-sm-flex"
                                    style="background: url({{ asset('/photographer/demos/photographer/images/1.jpg') }}) center center no-repeat; background-size: cover;">
                                </div>
                                <div class="col-6 d-none d-lg-flex"></div>
                                <div class="col-6 d-none d-lg-flex"></div>
                                <div class="col-lg-6 col-md-12 gradient-border shadow-sm col-sm-6 col-12 max-height"
                                    style="background-color: #FFF;">
                                    <div class="feature-box flex-column px-3 py-4 fbox-sm">
                                        <div class="fbox-media">
                                            <img src="{{ asset('photographer/demos/photographer/images/icons/instagram.svg') }}"
                                                class="rounded-0 bg-transparent text-start" alt="Image"
                                                style="height: 48px;">
                                        </div>
                                        <div class="fbox-content">
                                            <div class="d-block" style="margin: 90px auto"></div>
                                            <p class="mb-0 fw-normal">View My Stories</p>
                                            <h3 class="fw-medium mt-1 mb-0 d-flex align-self-end"><a
                                                    href="https://instagram.com/semicolonweb" target="_blank"
                                                    class="text-dark">Instagram <i
                                                        class="icon-line-arrow-right fw-semibold position-relative"
                                                        style="top: 2px"></i></a></h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </section><!-- #Slider End -->

    <!-- Content
      ============================================= -->
    <section id="content">

        <div class="content-wrap pt-0">

            <!-- Flip Card Sections
        ============================================= -->
            <div class="section mt-0">

                <div class="container">
                    <div class="row align-items-center justify-content-between">

                        <div class="col-lg-4 parallax" data-bottom-top="margin-top:-50px" data-top-bottom="margin-top:50px">
                            <small class="text-muted text-uppercase fw-light ls4 mb-1 d-block">Experience</small>
                            <h2 class="fw-bold ls0 mb-4" style="font-size: 38px;">I have been taking photographs for the
                                last 7 years.</h2>
                            <p class="text-muted" style="font-size: 16px;">Lorem ipsum dolor sit amet, consectetur
                                adipisicing elit. Consequatur blanditiis saepe dolore tempora nihil praesentium dolorum
                                unde, earum, nostrum odit?</p>
                        </div>

                        <div class="col-lg-7">
                            <div class="row">
                                <div class="col-sm-6">
                                    <!-- Flip Card
              ============================================= -->
                                    <div class="flip-card">
                                        <div class="flip-card-front no-after" style="background-color: #F9F9F9">
                                            <div class="flip-card-inner">
                                                <div class="feature-box media-box fbox-sm">
                                                    <div class="fbox-icon position-relative mb-4">
                                                        <a href="#">
                                                            <img src="{{ asset('photographer/demos/photographer/images/icons/camera1-dark.svg') }}"
                                                                class="rounded-0 bg-transparent text-start" alt="Image">
                                                        </a>
                                                    </div>
                                                    <div class="fbox-content">
                                                        <h3 class="fw-normal nott">Wild Photography</h3>
                                                        <p class="text-muted fw-medium">Lorem ipsum dolor sit amet,
                                                            consectetur adipisicing elit. Eligendi rem, facilis nobis
                                                            voluptatum.</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="flip-card-back dark"
                                            style="background-image: url({{ asset('/photographer/demos/photographer/images/features/1-1.jpg') }})">
                                            <div class="flip-card-inner mt-3">
                                                <h4 class="mb-4">Lorem ipsum, dolor sit amet consectetur
                                                    adipisicing elit. Alias cum repellat velit.</h4>
                                                <a href="#"
                                                    class="button button-change overflow-hidden rounded nott fw-light m-0">
                                                    <span>View Photos</span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6 mb-5">
                                    <!-- Flip Card
              ============================================= -->
                                    <div class="flip-card">
                                        <div class="flip-card-front no-after" style="background-color: #F9F9F9">
                                            <div class="flip-card-inner">
                                                <div class="feature-box media-box fbox-sm">
                                                    <div class="fbox-icon position-relative mb-4">
                                                        <a href="#">
                                                            <img src="{{ asset('photographer/demos/photographer/images/icons/travel-dark.svg') }}"
                                                                class="rounded-0 bg-transparent text-start" alt="Image">
                                                        </a>
                                                    </div>
                                                    <div class="fbox-content">
                                                        <h3 class="fw-normal nott">Travel Blog</h3>
                                                        <p class="text-muted fw-medium">Lorem ipsum dolor sit amet,
                                                            consectetur adipisicing elit. Eligendi rem, facilis nobis
                                                            voluptatum.</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="flip-card-back dark"
                                            style="background-image: url({{ asset('/photographer/demos/photographer/images/features/2.jpg') }})">
                                            <div class="flip-card-inner mt-3">
                                                <h4 class="mb-4">Lorem ipsum, dolor sit amet consectetur
                                                    adipisicing elit. Alias cum repellat velit.</h4>
                                                <a href="#"
                                                    class="button button-change overflow-hidden rounded nott fw-light m-0">
                                                    <span>View Photos</span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6 mb-5">
                                    <!-- Flip Card
              ============================================= -->
                                    <div class="flip-card">
                                        <div class="flip-card-front no-after" style="background-color: #F9F9F9">
                                            <div class="flip-card-inner">
                                                <div class="feature-box media-box fbox-sm">
                                                    <div class="fbox-icon position-relative mb-4">
                                                        <a href="#">
                                                            <img src="{{ asset('photographer/demos/photographer/images/icons/wedding-dark.svg') }}"
                                                                class="rounded-0 bg-transparent text-start" alt="Image">
                                                        </a>
                                                    </div>
                                                    <div class="fbox-content">
                                                        <h3 class="fw-normal nott">Wedding Shoots</h3>
                                                        <p class="text-muted fw-medium">Lorem ipsum dolor sit amet,
                                                            consectetur adipisicing elit. Eligendi rem, facilis nobis
                                                            voluptatum.</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="flip-card-back dark"
                                            style="background-image: url({{ asset('/photographer/demos/photographer/images/features/3.jpg') }})">
                                            <div class="flip-card-inner mt-3">
                                                <h4 class="mb-4">Lorem ipsum, dolor sit amet consectetur
                                                    adipisicing elit. Alias cum repellat velit.</h4>
                                                <a href="#"
                                                    class="button button-change overflow-hidden rounded nott fw-light m-0">
                                                    <span>View Photos</span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <!-- Flip Card
              ============================================= -->
                                    <div class="flip-card">
                                        <div class="flip-card-front no-after" style="background-color: #F9F9F9">
                                            <div class="flip-card-inner">
                                                <div class="feature-box media-box fbox-sm">
                                                    <div class="fbox-icon position-relative mb-4">
                                                        <a href="#">
                                                            <img src="{{ asset('photographer/demos/photographer/images/icons/camera2-dark.svg') }}"
                                                                class="rounded-0 bg-transparent text-start" alt="Image">
                                                        </a>
                                                    </div>
                                                    <div class="fbox-content">
                                                        <h3 class="fw-normal nott">Candid Moments</h3>
                                                        <p class="text-muted fw-medium">Lorem ipsum dolor sit amet,
                                                            consectetur adipisicing elit. Eligendi rem, facilis nobis
                                                            voluptatum.</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="flip-card-back dark"
                                            style="background-image: url({{ asset('/photographer/demos/photographer/images/features/4.jpg') }})">
                                            <div class="flip-card-inner mt-3">
                                                <h4 class="mb-4">Lorem ipsum, dolor sit amet consectetur
                                                    adipisicing elit. Alias cum repellat velit.</h4>
                                                <a href="#"
                                                    class="button button-change overflow-hidden rounded nott fw-light m-0">
                                                    <span>View Photos</span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <!-- Section Photographs
        ============================================= -->
            <div class="section bg-transparent">

                <div class="container">

                    <div class="col-lg-6 offset-lg-1 mb-5">
                        <small class="text-muted text-uppercase fw-light ls3 d-block">Some of Featured Pictures</small>
                        <h2 class="fw-bold ls0 mb-3" style="font-size: 46px;">See what I Did.</h2>
                        <p class="text-muted" style="font-size: 16px;">Lorem ipsum dolor sit amet, consectetur
                            adipisicing elit. Consequatur blanditiis saepe dolore tempora nihil praesentium dolorum unde,
                            earum, nostrum odit?</p>
                    </div>

                    <div class="row grid-container gutter-30" style="overflow: visible;">

                        <!-- Photographs
           ============================================= -->
                        <div class="col-lg-4 col-sm-6 rounded img-hover-wrap">
                            <div class="img-hover-card">
                                <a href="demos/photographer/images/album/1.jpg')}}" data-lightbox="image"><img
                                        src="{{ asset('photographer/demos/photographer/images/album/1.jpg') }}"
                                        alt="Image"></a>
                                <div class="img-hover-detail">
                                    <small class="text-light ls1 fw-light">Travel</small>
                                    <h3 class="img-hover-title"><a href="#">Railway Station</a></h3>
                                    <div class="img-link"><a href="#"><i class="icon-line-arrow-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Photographs
           ============================================= -->
                        <div class="col-lg-4 col-sm-6 rounded img-hover-wrap">
                            <div class="img-hover-card">
                                <a href="demos/photographer/images/album/2.jpg')}}" data-lightbox="image"><img
                                        src="{{ asset('photographer/demos/photographer/images/album/2.jpg') }}"
                                        alt="Image"></a>
                                <div class="img-hover-detail">
                                    <small class="text-light ls1 fw-light">Travel</small>
                                    <h3 class="img-hover-title"><a href="#">Mt. Batur</a></h3>
                                    <div class="img-link"><a href="#"><i class="icon-line-arrow-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Photographs
           ============================================= -->
                        <div class="col-lg-4 col-sm-6 rounded img-hover-wrap">
                            <div class="img-hover-card">
                                <a href="demos/photographer/images/album/3.jpg')}}" data-lightbox="image"><img
                                        src="{{ asset('photographer/demos/photographer/images/album/3.jpg') }}"
                                        alt="Image"></a>
                                <div class="img-hover-detail">
                                    <small class="text-light ls1 fw-light">Travel</small>
                                    <h3 class="img-hover-title"><a href="#">Bali, Indonesia</a></h3>
                                    <div class="img-link"><a href="#"><i class="icon-line-arrow-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Photographs
           ============================================= -->
                        <div class="col-lg-4 col-sm-6 rounded img-hover-wrap">
                            <div class="img-hover-card">
                                <a href="demos/photographer/images/album/4.jpg')}}" data-lightbox="image"><img
                                        src="{{ asset('photographer/demos/photographer/images/album/4.jpg') }}"
                                        alt="Image"></a>
                                <div class="img-hover-detail">
                                    <small class="text-light ls1 fw-light">Wedding</small>
                                    <h3 class="img-hover-title"><a href="#">Ms. Charle's Wedding</a></h3>
                                    <div class="img-link"><a href="#"><i class="icon-line-arrow-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Photographs
           ============================================= -->
                        <div class="col-lg-4 col-sm-6 rounded img-hover-wrap">
                            <div class="img-hover-card">
                                <a href="demos/photographer/images/album/5.jpg')}}" data-lightbox="image"><img
                                        src="{{ asset('photographer/demos/photographer/images/album/5.jpg') }}"
                                        alt="Image"></a>
                                <div class="img-hover-detail">
                                    <small class="text-light ls1 fw-light">Wedding</small>
                                    <h3 class="img-hover-title"><a href="#">Romantic Moments</a></h3>
                                    <div class="img-link"><a href="#"><i class="icon-line-arrow-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Photographs
           ============================================= -->
                        <div class="col-lg-4 col-sm-6 rounded img-hover-wrap">
                            <div class="img-hover-card">
                                <a href="demos/photographer/images/album/6.jpg')}}" data-lightbox="image"><img
                                        src="{{ asset('photographer/demos/photographer/images/album/6.jpg') }}"
                                        alt="Image"></a>
                                <div class="img-hover-detail">
                                    <small class="text-light ls1 fw-light">Travel</small>
                                    <h3 class="img-hover-title"><a href="#">Surfing on Sunset</a></h3>
                                    <div class="img-link"><a href="#"><i class="icon-line-arrow-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Photographs
           ============================================= -->
                        <div class="col-lg-4 col-sm-6 rounded img-hover-wrap">
                            <div class="img-hover-card">
                                <a href="demos/photographer/images/album/7.jpg')}}" data-lightbox="image"><img
                                        src="{{ asset('photographer/demos/photographer/images/album/7.jpg') }}"
                                        alt="Image"></a>
                                <div class="img-hover-detail">
                                    <small class="text-light ls1 fw-light">Candid</small>
                                    <h3 class="img-hover-title"><a href="#">Black &amp; White</a></h3>
                                    <div class="img-link"><a href="#"><i class="icon-line-arrow-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Photographs
           ============================================= -->
                        <div class="col-lg-4 col-sm-6 rounded img-hover-wrap">
                            <div class="img-hover-card">
                                <a href="demos/photographer/images/album/8.jpg')}}" data-lightbox="image"><img
                                        src="{{ asset('photographer/demos/photographer/images/album/8.jpg') }}"
                                        alt="Image"></a>
                                <div class="img-hover-detail">
                                    <small class="text-light ls1 fw-light">Candid</small>
                                    <h3 class="img-hover-title"><a href="#">Reading Book</a></h3>
                                    <div class="img-link"><a href="#"><i class="icon-line-arrow-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Photographs
           ============================================= -->
                        <div class="col-lg-4 col-sm-6 rounded img-hover-wrap">
                            <div class="img-hover-card">
                                <a href="demos/photographer/images/album/9.jpg')}}" data-lightbox="image"><img
                                        src="{{ asset('photographer/demos/photographer/images/album/9.jpg') }}"
                                        alt="Image"></a>
                                <div class="img-hover-detail">
                                    <small class="text-light ls1 fw-light">Random</small>
                                    <h3 class="img-hover-title"><a href="#">Little Flubby</a></h3>
                                    <div class="img-link"><a href="#"><i class="icon-line-arrow-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Photographs
           ============================================= -->
                        <div class="col-lg-4 col-sm-6 rounded img-hover-wrap">
                            <div class="img-hover-card">
                                <a href="demos/photographer/images/album/10.jpg')}}" data-lightbox="image"><img
                                        src="{{ asset('photographer/demos/photographer/images/album/10.jpg') }}"
                                        alt="Image"></a>
                                <div class="img-hover-detail">
                                    <small class="text-light ls1 fw-light">Potrait</small>
                                    <h3 class="img-hover-title"><a href="#">Model Shoot</a></h3>
                                    <div class="img-link"><a href="#"><i class="icon-line-arrow-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Photographs
           ============================================= -->
                        <div class="col-lg-4 col-sm-6 rounded img-hover-wrap">
                            <div class="img-hover-card">
                                <a href="demos/photographer/images/album/11.jpg')}}" data-lightbox="image"><img
                                        src="{{ asset('photographer/demos/photographer/images/album/11.jpg') }}"
                                        alt="Image"></a>
                                <div class="img-hover-detail">
                                    <small class="text-light ls1 fw-light">Fashion</small>
                                    <h3 class="img-hover-title"><a href="#">Beach Shoot</a></h3>
                                    <div class="img-link"><a href="#"><i class="icon-line-arrow-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Photographs
           ============================================= -->
                        <div class="col-lg-4 col-sm-6 rounded img-hover-wrap">
                            <div class="img-hover-card">
                                <a href="demos/photographer/images/album/12.jpg')}}" data-lightbox="image"><img
                                        src="{{ asset('photographer/demos/photographer/images/album/12.jpg') }}"
                                        alt="Image"></a>
                                <div class="img-hover-detail">
                                    <small class="text-light ls1 fw-light">Model</small>
                                    <h3 class="img-hover-title"><a href="#">Modelling Pics</a></h3>
                                    <div class="img-link"><a href="#"><i class="icon-line-arrow-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Photographs
           ============================================= -->
                        <div class="col-lg-4 col-sm-6 rounded img-hover-wrap">
                            <div class="img-hover-card">
                                <a href="demos/photographer/images/album/13.jpg')}}" data-lightbox="image"><img
                                        src="{{ asset('photographer/demos/photographer/images/album/13.jpg') }}"
                                        alt="Image"></a>
                                <div class="img-hover-detail">
                                    <small class="text-light ls1 fw-light">Travel</small>
                                    <h3 class="img-hover-title"><a href="#">Street Picture</a></h3>
                                    <div class="img-link"><a href="#"><i class="icon-line-arrow-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Photographs
           ============================================= -->
                        <div class="col-lg-4 col-sm-6 rounded img-hover-wrap">
                            <div class="img-hover-card">
                                <a href="demos/photographer/images/album/14.jpg')}}" data-lightbox="image"><img
                                        src="{{ asset('photographer/demos/photographer/images/album/14.jpg') }}"
                                        alt="Image"></a>
                                <div class="img-hover-detail">
                                    <small class="text-light ls1 fw-light">Street</small>
                                    <h3 class="img-hover-title"><a href="#">Budapest, Hungry</a></h3>
                                    <div class="img-link"><a href="#"><i class="icon-line-arrow-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Photographs
           ============================================= -->
                        <div class="col-lg-4 col-sm-6 rounded img-hover-wrap">
                            <div class="img-hover-card">
                                <a href="demos/photographer/images/album/15.jpg')}}" data-lightbox="image"><img
                                        src="{{ asset('photographer/demos/photographer/images/album/15.jpg') }}"
                                        alt="Image"></a>
                                <div class="img-hover-detail">
                                    <small class="text-light ls1 fw-light">Candid</small>
                                    <h3 class="img-hover-title"><a href="#">Street Picture</a></h3>
                                    <div class="img-link"><a href="#"><i class="icon-line-arrow-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Titles
          ============================================= -->
                    <div class="row mt-5">
                        <div class="col-sm-6 offset-sm-1">
                            <h2 class="fw-bold ls0 mb-3" style="font-size: 38px;">More Coming Soon..</h2>
                            <p class="text-muted" style="font-size: 16px;">Lorem ipsum dolor sit amet, consectetur
                                adipisicing elit. Consequatur blanditiis saepe dolore tempora nihil praesentium dolorum
                                unde, earum, nostrum odit?</p>
                        </div>
                    </div>

                </div>
            </div>

            <!-- Counter Section
        ============================================= -->
            <div class="section"
                style="background: #FFF url({{ asset('/photographer/demos/photographer/images/dots.png') }}) 170% 0% no-repeat; background-size: 60% auto">

                <div class="container">
                    <div class="row justify-content-between">

                        <!-- Counter
           ============================================= -->
                        <div class="col-lg-3 col-md-6 mt-4">
                            <div class="counter counter-large fw-light"><span data-from="1" data-to="7"
                                    data-refresh-interval="100" data-speed="2000"></span>+</div>
                            <h5>years of Experience</h5>
                            <p class="text-muted mb-0 pb-5 border-bottom">Lorem ipsum dolor sit amet, consectetur
                                adipisicing elit. Consequatur blanditiis saepe dolore tempora.</p>
                        </div>

                        <!-- Counter
           ============================================= -->
                        <div class="col-lg-3 col-md-6 mt-4">
                            <div class="counter counter-large fw-light"><span data-from="10" data-to="114"
                                    data-refresh-interval="50" data-speed="2000" data-comma="true"></span>+</div>
                            <h5>Posted Travel Blogs</h5>
                            <p class="text-muted mb-0 pb-5 border-bottom">Lorem ipsum dolor sit amet, consectetur
                                adipisicing elit. Consequatur blanditiis saepe dolore tempora.</p>
                        </div>

                        <!-- Counter
           ============================================= -->
                        <div class="col-lg-3 col-md-6 mt-4">
                            <div class="counter counter-large fw-light"><span data-from="100" data-to="1034"
                                    data-refresh-interval="50" data-speed="2000" data-comma="true"></span>+</div>
                            <h5>Has Photos Published</h5>
                            <p class="text-muted mb-0 pb-5 border-bottom">Lorem ipsum dolor sit amet, consectetur
                                adipisicing elit. Consequatur blanditiis saepe dolore tempora.</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Clients
        ============================================= -->
            <div class="section bg-transparent">

                <div class="container center">

                    <small class="text-muted text-uppercase fw-light ls3">Trusted Partners</small>
                    <h2 class="fw-bold ls0 mb-5" style="font-size: 46px;">Happy Clients</h2>

                    <div class="row">
                        <div class="col-md-10 offset-md-1">
                            <div class="row">
                                <!-- Client
             ============================================= -->
                                <div class="col-md-3 col-6">
                                    <a href="#"><img class="p-4"
                                            src="{{ asset('photographer/demos/photographer/images/clients/light/1.png') }}"
                                            alt="clients"></a>
                                </div>
                                <!-- Client
             ============================================= -->
                                <div class="col-md-3 col-6">
                                    <a href="#"><img class="p-4"
                                            src="{{ asset('photographer/demos/photographer/images/clients/light/2.png') }}"
                                            alt="clients"></a>
                                </div>
                                <!-- Client
             ============================================= -->
                                <div class="col-md-3 col-6">
                                    <a href="#"><img class="p-4"
                                            src="{{ asset('photographer/demos/photographer/images/clients/light/3.png') }}"
                                            alt="clients"></a>
                                </div>
                                <!-- Client
             ============================================= -->
                                <div class="col-md-3 col-6">
                                    <a href="#"><img class="p-4"
                                            src="{{ asset('photographer/demos/photographer/images/clients/light/4.png') }}"
                                            alt="clients"></a>
                                </div>
                                <!-- Client
             ============================================= -->
                                <div class="col-md-3 col-6">
                                    <a href="#"><img class="p-4"
                                            src="{{ asset('photographer/demos/photographer/images/clients/light/5.png') }}"
                                            alt="clients"></a>
                                </div>
                                <!-- Client
             ============================================= -->
                                <div class="col-md-3 col-6">
                                    <a href="#"><img class="p-4"
                                            src="{{ asset('photographer/demos/photographer/images/clients/light/6.png') }}"
                                            alt="clients"></a>
                                </div>
                                <!-- Client
             ============================================= -->
                                <div class="col-md-3 col-6">
                                    <a href="#"><img class="p-4"
                                            src="{{ asset('photographer/demos/photographer/images/clients/light/7.png') }}"
                                            alt="clients"></a>
                                </div>
                                <!-- Client
             ============================================= -->
                                <div class="col-md-3 col-6">
                                    <a href="#"><img class="p-4"
                                            src="{{ asset('photographer/demos/photographer/images/clients/light/8.png') }}"
                                            alt="clients"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <a href="#" class="button button-change button-large button-rounded nott fw-light mt-4 ms-0">
                        <span>View more Clients <i class="icon-line-arrow-right"></i></span>
                    </a>
                </div>
            </div>

            <!-- Service Section
        ============================================= -->
            <div class="section" style="padding: 140px 0;">
                <div class="container">

                    <div class="col-sm-6 mb-5">
                        <small class="text-muted text-uppercase fw-light ls3 d-block">Steps of Works</small>
                        <h2 class="fw-bold ls0 mb-3" style="font-size: 46px;">See How I Do.</h2>
                        <p class="text-muted" style="font-size: 16px;">Lorem ipsum dolor sit amet, consectetur
                            adipisicing elit. Consequatur blanditiis saepe dolore tempora nihil praesentium dolorum unde,
                            earum, nostrum odit?</p>
                    </div>

                    <div class="row clearfix">
                        <!-- Card 1
           ============================================= -->
                        <div class="col-lg-4 col-md-6 mt-3">
                            <div class="card shadow-sm d-flex align-items-end flex-column p-3"
                                style="height: 450px; background-color: #FFF; border: 1px solid #FFF">
                                <div></div>
                                <div class="mt-auto">
                                    <div class="card-body">
                                        <img src="{{ asset('photographer/demos/photographer/images/icons/shutter.svg') }}"
                                            width="40" alt="Image" class="mb-4">
                                        <h4 class="card-title fw-normal">Updated Lenses:</h4>
                                        <p class="card-text mb-0 mt-2 fw-light">Objectively productivate interoperable
                                            process improvements after team building testing procedures. Distinctively
                                            architect resource-leveling portals.</p><br>
                                        <p class="card-text mb-0 fw-light">Objectively productivate interoperable process
                                            improvements.</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Card 2
           ============================================= -->
                        <div class="col-lg-4 col-md-6 mt-3">
                            <div class="card shadow-sm d-flex align-items-end flex-column p-3"
                                style="height: 450px; background-color: #FFF; border: 1px solid #FFF">
                                <div></div>
                                <div class="mt-auto">
                                    <div class="card-body">
                                        <img src="{{ asset('photographer/demos/photographer/images/icons/video-camera.svg') }}"
                                            width="40" alt="Image" class="mb-4">
                                        <h4 class="card-title fw-normal">Film Making:</h4>
                                        <p class="card-text mb-0 mt-2 fw-light">Objectively productivate interoperable
                                            process improvements.</p><br>
                                        <p class="card-text mb-0 fw-light">Objectively productivate interoperable process
                                            improvements after team building testing procedures. Distinctively architect
                                            resource-leveling portals.</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Card 3
           ============================================= -->
                        <div class="col-lg-4 col-md-6 mt-3">
                            <div class="card shadow-sm d-flex align-items-end flex-column p-3"
                                style="height: 450px; background-color: #FFF; border: 1px solid #FFF">
                                <div></div>
                                <div class="mt-auto">
                                    <div class="card-body">
                                        <div class="d-flex align-items-center mb-4">
                                            <span><img
                                                    src="{{ asset('photographer/demos/photographer/images/icons/lr.svg') }}"
                                                    width="35" alt="Image"></span>
                                            <span class="px-3 h6 m-0 fw-light">&amp;</span>
                                            <span><img
                                                    src="{{ asset('photographer/demos/photographer/images/icons/psd.svg') }}"
                                                    width="35" alt="Image"></span>
                                        </div>
                                        <h4 class="card-title fw-normal">Most Edited Tools:</h4>
                                        <p class="card-text mb-0 mt-2 fw-light">Objectively productivate interoperable
                                            process improvements.</p><br>
                                        <p class="card-text mb-0 fw-light">Objectively productivate interoperable process
                                            improvements after team building testing procedures. Distinctively architect
                                            resource-leveling portals.</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <!-- Contact Section
        ============================================= -->
            <div class="section mb-0 bg-transparent">
                <div class="container">

                    <div class="row justify-content-between mt-5">

                        <!-- Heading Title
           ============================================= -->
                        <div class="col-md-6">
                            <small class="text-muted text-uppercase fw-light ls3 d-block">Let's Say Hi!</small>
                            <h2 class="fw-bold ls0 mb-3" style="font-size: 64px; line-height: 1.2">Contact Me Here.</h2>
                            <p class="text-muted" style="font-size: 16px;">Lorem ipsum dolor sit amet, consectetur
                                adipisicing elit. Consequatur blanditiis saepe dolore tempora nihil praesentium dolorum
                                unde, earum, nostrum odit?</p>
                            <div class="d-flex align-items-center mt-4">
                                <a href="#"
                                    class="button button-change button-large button-rounded nott fw-light m-0 overflow-hidden">
                                    <span><i class="icon-line2-envelope"></i> Contact Us</span>
                                </a>
                                <a href="https://facebook.com/semicolonweb" target="_blank"
                                    class="my-0 me-0 ms-3 social-icon inline-block si-small si-borderless si-facebook">
                                    <i class="icon-facebook"></i>
                                    <i class="icon-facebook"></i>
                                </a>
                                <a href="https://twitter.com/__semicolon" target="_blank"
                                    class="my-0 me-0 ms-2 social-icon inline-block si-small si-borderless si-twitter">
                                    <i class="icon-twitter"></i>
                                    <i class="icon-twitter"></i>
                                </a>
                                <a href="https://instagram.com/semicolonweb" target="_blank"
                                    class="my-0 me-0 ms-2 social-icon inline-block si-small si-borderless si-instagram">
                                    <i class="icon-instagram"></i>
                                    <i class="icon-instagram"></i>
                                </a>
                            </div>
                        </div>

                        <!-- Testimonials
           ============================================= -->
                        <div class="col-md-5 mt-5 mt-md-0">
                            <h5 class="ps-4 fw-normal">What Clients Says:</h5>
                            <div id="oc-testi" class="owl-carousel testimonials-carousel carousel-widget ps-4"
                                data-margin="0" data-nav="false" data-pagi="false" data-items="1" data-autoplay="6000"
                                data-loop="true" data-animate-in="fadeIn">

                                <div class="oc-item">
                                    <div class="testimonial bg-transparent shadow-none border-0 p-3">
                                        <div class="testi-content">
                                            <p>Incidunt deleniti blanditiis quas aperiam recusandae consequatur ullam
                                                quibusdam cum libero illo rerum repellendus!</p>
                                            <div class="testi-meta ls1 mt-3 mb-0"> Fig Nelson</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="oc-item">
                                    <div class="testimonial bg-transparent shadow-none border-0 p-3">
                                        <div class="testi-content">
                                            <p>Completely e-enable premier infomediaries and long-term high-impact process
                                                improvements. Completely provide access to B2C.</p>
                                            <div class="testi-meta ls1 mt-3 mb-0"> Bailey Wonger</div>
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