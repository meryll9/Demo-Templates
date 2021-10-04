@extends('layout.main')
@section('content')
    <!-- Slider
      ============================================= -->
    <section id="slider" class="slider-element min-vh-60 min-vh-md-100 include-header">
        <div class="slider-inner">

            <!-- Flex Slide
        ============================================= -->
            <div class="fslider h-100 position-absolute dark" data-speed="1500" data-autoplay="true" data-pause="6000"
                data-animation="fade" data-arrows="false" data-pagi="false" data-hover="false" data-touch="false">
                <div class="flexslider">
                    <div class="slider-wrap">
                        <div class="slide"
                            style="background: url({{ asset('/headphones/demos/headphones/images/slider/1.jpg') }}) center center; background-size: cover;">
                            <div class="vertical-middle">
                                <div class="container">
                                    <div class="row justify-content-center">
                                        <div class="col-md-7">
                                            <div class="heading-block border-bottom-0 parallax mb-0"
                                                data-0="opacity: 1;margin-top:0px" data-800="opacity: 0.2;margin-top:150px">
                                                <p>New Arrival</p>
                                                <h2 class="mb-4">{{ env('APP_TAGLINE') }}</h2>
                                                <a href="#"
                                                    class="button button-border button-circle button-fill fill-from-bottom button-white button-light nott fw-normal"><span>View
                                                        Details</span></a>
                                            </div>
                                        </div>
                                        <div class="col-md-5 align-self-lg-center align-self-md-baseline">
                                            <a href="https://www.youtube.com/watch?v=P3Huse9K6Xs" class="play-icon"
                                                data-lightbox="iframe"><i class="icon-googleplay"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="slide h-100"
                            style="background: url({{ asset('/headphones/demos/headphones/images/slider/2.jpg') }}) center center; background-size: cover;">
                            <div class="vertical-middle">
                                <div class="container">
                                    <div class="row justify-content-center">
                                        <div class="col-md-7">
                                            <div class="heading-block border-bottom-0 parallax mb-0"
                                                data-0="opacity: 1;margin-top:0px" data-800="opacity: 0.2;margin-top:150px">
                                                <p>Featured</p>
                                                <h2 class="mb-4">The Perfect Classic Bluetooth Headphone</h2>
                                                <a href="#"
                                                    class="button button-border button-circle button-fill fill-from-bottom button-white button-light nott fw-normal"><span>View
                                                        Details</span></a>
                                            </div>
                                        </div>
                                        <div class="col-md-5 align-self-lg-center align-self-md-baseline">
                                            <a href="https://www.youtube.com/watch?v=P3Huse9K6Xs" class="play-icon"
                                                data-lightbox="iframe"><i class="icon-googleplay"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="slide h-100"
                            style="background: url({{ asset('/headphones/demos/headphones/images/slider/3.jpg') }}) center center; background-size: cover;">
                            <div class="vertical-middle">
                                <div class="container">
                                    <div class="row justify-content-center">
                                        <div class="col-md-7">
                                            <div class="heading-block border-bottom-0 parallax mb-0"
                                                data-0="opacity: 1;margin-top:0px" data-800="opacity: 0.2;margin-top:150px">
                                                <p>Most Popular</p>
                                                <h2 class="mb-4">Modern Bluetooth Wireless Headphone</h2>
                                                <a href="#"
                                                    class="button button-border button-circle button-fill fill-from-bottom button-white button-light nott fw-normal"><span>View
                                                        Details</span></a>
                                            </div>
                                        </div>
                                        <div class="col-md-5 align-self-lg-center align-self-md-baseline">
                                            <a href="https://www.youtube.com/watch?v=P3Huse9K6Xs" class="play-icon"
                                                data-lightbox="iframe"><i class="icon-googleplay"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Slider Bottom Content
        ============================================= -->
            <div class="slider-product-desc dark">
                <div class="row m-0 d-none d-md-flex">
                    <div class="col-md-6" style="border-right: 1px solid rgba(255,255,255,0.08);">
                        <div class="feature-box fbox-dark fbox-plain mb-0">
                            <div class="fbox-icon">
                                <a href="#"><i class="icon-line2-earphones"></i></a>
                            </div>
                            <div class="fbox-content">
                                <h3 class="fw-normal mb-3">Wireless Noise Cancelling</h3>
                                <p class="d-none d-lg-block">With the HD 4.50 BTNC, The noisy world around you is shut out
                                    by NoiseGard™, the active noise cancellation technology developed by Sennheiser.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="feature-box fbox-dark fbox-plain mb-0">
                            <div class="fbox-icon">
                                <a href="#"><i class="icon-line2-power"></i></a>
                            </div>
                            <div class="fbox-content">
                                <h3 class="fw-normal mb-3">Long-Lasting Battery</h3>
                                <p class="d-none d-lg-block">Real adventures happen far away from power outlets.
                                    Fortunately, the HD 4.50 BTNC has a powerful battery that lets you enjoy music for up to
                                    25 hours.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <!-- Content
      ============================================= -->
    <section id="content">
        <div class="content-wrap py-0">

            <div class="section m-0 bg-transparent clearfix">
                <div class="container-fluid clearfix">

                    <div class="heading-block bottommargin border-bottom-0 center">
                        <h3>Featured Products</h3>
                    </div>

                    <!-- Shop
          ============================================= -->
                    <div class="row clearfix">
                        <!-- Shop - 1
           ============================================= -->
                        <div class="col-sm-4 col-12 product showcase-section clearfix">
                            <div class="showcase-target-images">
                                <img class="showcase-target" alt="Image" id="product-1-black"
                                    src="{{ asset('headphones/demos/headphones/images/products/1/black.png') }}">
                                <img class="showcase-target" alt="Image" id="product-1-red"
                                    src="{{ asset('headphones/demos/headphones/images/products/1/red.png') }}">
                                <img class="showcase-target" alt="Image" id="product-1-blue"
                                    src="{{ asset('headphones/demos/headphones/images/products/1/blue.png') }}">
                            </div>
                            <div class="product-desc list-inline center">
                                <ul class="mb-0">
                                    <li class="showcase-feature list-inline-item headphone-black"
                                        data-target="#product-1-black"></li>
                                    <li class="showcase-feature list-inline-item headphone-red"
                                        data-target="#product-1-red"></li>
                                    <li class="showcase-feature list-inline-item headphone-blue"
                                        data-target="#product-1-blue"></li>
                                </ul>
                                <div class="product-title mt-2">
                                    <h3><a href="#" class="fw-normal">Beats Studio<sup>3</sup> Wireless</a></h3>
                                </div>
                                <div class="product-price">$349.99</div>
                            </div>
                        </div>

                        <!-- Shop - 2
           ============================================= -->
                        <div class="col-sm-4 col-12 product showcase-section clearfix">
                            <div class="showcase-target-images">
                                <a href="#"><img class="showcase-target" alt="Image" id="product-2-black"
                                        src="{{ asset('headphones/demos/headphones/images/products/2/black.png') }}"></a>
                                <a href="#"><img class="showcase-target" alt="Image" id="product-2-pink"
                                        src="{{ asset('headphones/demos/headphones/images/products/2/pink.png') }}"></a>
                            </div>
                            <div class="badge bg-dark px-3 py-2">New</div>
                            <div class="product-desc list-inline center">
                                <ul class="mb-0">
                                    <li class="showcase-feature list-inline-item headphone-black"
                                        data-target="#product-2-black"></li>
                                    <li class="showcase-feature list-inline-item headphone-pink"
                                        data-target="#product-2-pink"></li>
                                </ul>
                                <div class="product-title mt-2">
                                    <h3><a href="#" class="fw-normal">JBL E55BT Quincy Edition</a></h3>
                                </div>
                                <div class="product-price">$199.95</div>
                            </div>
                        </div>

                        <!-- Shop - 3
           ============================================= -->
                        <div class="col-sm-4 col-12 product showcase-section border-0 clearfix">
                            <div class="showcase-target-images">
                                <a href="#"><img class="showcase-target" alt="Image" id="product-3-black"
                                        src="{{ asset('headphones/demos/headphones/images/products/3/black.png') }}"></a>
                                <a href="#"><img class="showcase-target" alt="Image" id="product-3-red"
                                        src="{{ asset('headphones/demos/headphones/images/products/3/red.png') }}"></a>
                                <a href="#"><img class="showcase-target" alt="Image" id="product-3-blue"
                                        src="{{ asset('headphones/demos/headphones/images/products/3/blue.png') }}"></a>
                                <a href="#"><img class="showcase-target" alt="Image" id="product-3-white"
                                        src="{{ asset('headphones/demos/headphones/images/products/3/white.png') }}"></a>
                            </div>
                            <div class="product-desc list-inline center">
                                <ul class="mb-0">
                                    <li class="showcase-feature list-inline-item showcase-feature-active headphone-black"
                                        data-target="#product-3-black"></li>
                                    <li class="showcase-feature list-inline-item headphone-red"
                                        data-target="#product-3-red"></li>
                                    <li class="showcase-feature list-inline-item headphone-blue"
                                        data-target="#product-3-blue"></li>
                                    <li class="showcase-feature list-inline-item headphone-white"
                                        data-target="#product-3-white"></li>
                                </ul>
                                <div class="product-title mt-2">
                                    <h3><a href="#" class="fw-normal">Bluetooth Beats EP</a></h3>
                                </div>
                                <div class="product-price">$129.95</div>
                            </div>
                        </div> <!-- Shop End -->
                    </div> <!-- Row End -->
                </div> <!-- Container End -->
            </div> <!-- Shop Section End -->

            <!-- Promo Section
        ============================================= -->
            <div class="promo promo-border promo-dark promo-full mb-0" style="padding: 60px 0 !important">
                <div class="container">
                    <div class="row align-items-center justify-content-center">
                        <div class="col-12 col-md-auto text-center">
                            <h3 class="mb-0 fw-normal nott ls0 h5">No Wire, No Noise, Just Sound</h3>
                        </div>
                        <div class="col-12 col-md-auto text-center mt-4 mt-md-0">
                            <a href="#"
                                class="button button-border button-circle button-fill fill-from-bottom button-white button-light nott fw-normal mx-0 ms-md-5"><span>Shop
                                    Now</span></a>
                        </div>
                    </div>
                </div>
            </div> <!-- Promo Section End -->

            <!-- Section 1
        ============================================= -->
            <div class="section section-product m-0" style="padding-top: 70px;">
                <div class="container clearfix">
                    <div class="section-product-image">
                        <img src="{{ asset('headphones/demos/headphones/images/sections/1.jpg') }}" alt="Image">
                    </div>
                    <div class="section-product-content edge-underline" data-bottom-top="transform: translateY(0px);"
                        data-top-bottom="transform: translateY(-100px);">
                        <h3>SoundLink Revolve Bluetooth®</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus, doloribus, accusamus.
                            Commodi voluptas, aliquam corporis dolorem amet? Asperiores ullam consequatur dolores.</p>
                        <div class="row justify-content-center clearfix">
                            <div class="col-6 align-items-center">
                                <div class="section-product-price">$79.99</div>
                            </div>
                            <div class="col-6 align-items-center">
                                <a href="#"
                                    class="button button-border button-circle button-fill fill-from-bottom button-dark button-black nott fw-normal m-0"><span>Buy
                                        Now</span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Features
        ============================================= -->
            <div class="container">
                <div class="row col-mb-50 mb-0 mt-5">
                    <!-- Feature - 1
          ============================================= -->
                    <div class="col-md-4">
                        <div class="feature-box fbox-plain flex-column fbox-sm">
                            <div class="fbox-icon mb-3">
                                <a href="#">
                                    <img src="{{ asset('headphones/demos/headphones/images/wifi.svg') }}"
                                        class="rounded-0 bg-transparent text-start" alt="Image">
                                </a>
                            </div>
                            <div class="fbox-content">
                                <h3>Wireless/Bluetooth</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi rem, facilis nobis
                                    voluptatum est voluptatem accusamus molestiae eaque perspiciatis mollitia.</p>
                            </div>
                        </div>
                    </div>

                    <!-- Feature - 2
          ============================================= -->
                    <div class="col-md-4">
                        <div class="feature-box fbox-plain flex-column fbox-sm">
                            <div class="fbox-icon mb-3">
                                <a href="#">
                                    <img src="{{ asset('headphones/demos/headphones/images/battery.svg') }}"
                                        class="rounded-0 bg-transparent text-start" alt="Image">
                                </a>
                            </div>
                            <div class="fbox-content">
                                <h3>30+ Hours Battery Life</h3>
                                <p>Porro repellat vero sapiente amet vitae quibusdam necessitatibus consectetur, labore
                                    totam. Accusamus perspiciatis asperiores labore esse.</p>
                            </div>
                        </div>
                    </div>

                    <!-- Feature - 3
          ============================================= -->
                    <div class="col-md-4">
                        <div class="feature-box fbox-plain flex-column fbox-sm">
                            <div class="fbox-icon mb-3">
                                <a href="#">
                                    <img src="{{ asset('headphones/demos/headphones/images/headset.svg') }}"
                                        class="rounded-0 bg-transparent text-start" alt="Image">
                                </a>
                            </div>
                            <div class="fbox-content">
                                <h3>Noise Cancelling</h3>
                                <p>Quos, non, esse eligendi ab accusantium voluptatem. Maxime eligendi beatae, atque tempora
                                    ullam. Vitae delectus quia, consequuntur rerum quo.</p>
                            </div>
                        </div>
                    </div>

                    <!-- Feature - 4
          ============================================= -->
                    <div class="col-md-4">
                        <div class="feature-box fbox-plain flex-column fbox-sm">
                            <div class="fbox-icon mb-3">
                                <a href="#">
                                    <img src="{{ asset('headphones/demos/headphones/images/play-button.svg') }}"
                                        class="rounded-0 bg-transparent text-start" alt="Image">
                                </a>
                            </div>
                            <div class="fbox-content">
                                <h3>Control Buttons</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi rem, facilis nobis
                                    voluptatum est voluptatem accusamus molestiae eaque perspiciatis mollitia.</p>
                            </div>
                        </div>
                    </div>

                    <!-- Feature - 5
          ============================================= -->
                    <div class="col-md-4">
                        <div class="feature-box fbox-plain flex-column fbox-sm">
                            <div class="fbox-icon mb-3">
                                <a href="#">
                                    <img src="{{ asset('headphones/demos/headphones/images/microphone.svg') }}"
                                        class="rounded-0 bg-transparent text-start" alt="Image">
                                </a>
                            </div>
                            <div class="fbox-content">
                                <h3>Siri/Google-Assistant</h3>
                                <p>Porro repellat vero sapiente amet vitae quibusdam necessitatibus consectetur, labore
                                    totam. Accusamus perspiciatis asperiores labore esse.</p>
                            </div>
                        </div>
                    </div>

                    <!-- Feature - 6
          ============================================= -->
                    <div class="col-md-4">
                        <div class="feature-box fbox-plain flex-column fbox-sm">
                            <div class="fbox-icon mb-3">
                                <a href="#">
                                    <img src="{{ asset('headphones/demos/headphones/images/connected.svg') }}"
                                        class="rounded-0 bg-transparent text-start" alt="Image">
                                </a>
                            </div>
                            <div class="fbox-content">
                                <h3>Multiple Devices</h3>
                                <p>Quos, non, esse eligendi ab accusantium voluptatem. Maxime eligendi beatae, atque tempora
                                    ullam. Vitae delectus quia, consequuntur rerum quo.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Explore Section
         ============================================= -->
                <div class="heading-block bottommargin topmargin-sm border-bottom-0 center">
                    <h3>Explore</h3>
                </div>

                <!-- Explore Gallery
         ============================================= -->
                <div class="row clearfix">
                    <div class="col-md-3 mb-2 mb-md-auto overflow-hidden text-overlay-wrap">
                        <img src="{{ asset('headphones/demos/headphones/images/explore/1.jpg') }}" alt="Image">
                        <div class="explore-text-overlay">
                            <div class="vertical-middle dark center">
                                <div>
                                    <a href="#"
                                        class="button button-border button-circle button-fill fill-from-bottom button-white button-light nott fw-normal m-0"><span>Shop
                                            Now</span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-2 mb-md-auto overflow-hidden text-overlay-wrap">
                        <img src="{{ asset('headphones/demos/headphones/images/explore/3.jpg') }}" alt="Image">
                        <div class="explore-text-overlay">
                            <div class="vertical-middle dark center">
                                <div>
                                    <a href="#"
                                        class="button button-border button-circle button-fill fill-from-bottom button-white button-light nott fw-normal m-0"><span>Shop
                                            Now</span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2 mb-2 mb-md-auto">
                        <div class="row">
                            <div class="col-12 mb-2 mb-md-0 overflow-hidden text-overlay-wrap">
                                <img src="{{ asset('headphones/demos/headphones/images/explore/2.jpg') }}" alt="Image">
                                <div class="explore-text-overlay">
                                    <div class="vertical-middle dark center">
                                        <div>
                                            <a href="#"
                                                class="button button-border button-circle button-fill fill-from-bottom button-white button-light nott fw-normal m-0"><span>Shop
                                                    Now</span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 mt-md-4 overflow-hidden text-overlay-wrap">
                                <img src="{{ asset('headphones/demos/headphones/images/explore/2-1.jpg') }}" alt="Image">
                                <div class="explore-text-overlay">
                                    <div class="vertical-middle dark center">
                                        <div>
                                            <a href="#"
                                                class="button button-border button-circle button-fill fill-from-bottom button-white button-light nott fw-normal m-0"><span>Shop
                                                    Now</span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 mb-2 mb-md-auto overflow-hidden text-overlay-wrap">
                        <img src="{{ asset('headphones/demos/headphones/images/explore/4.jpg') }}" alt="Image">
                        <div class="explore-text-overlay">
                            <div class="vertical-middle dark center">
                                <div>
                                    <a href="#"
                                        class="button button-border button-circle button-fill fill-from-bottom button-white button-light nott fw-normal m-0"><span>Shop
                                            Now</span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Information Section
         ============================================= -->
                <div class="row topmargin-lg center clearfix">
                    <div class="section-contact col-lg-4 col-md-6 bottommargin">
                        <div class="p-5">
                            <i class="i-plain i-large mx-auto mb-4 icon-line2-map"></i>
                            <h3 class="mb-3">Find Our Nearest Store</h3>
                            <span>Find your nearest store because we are in more than 20 countries.</span><br>
                            <a href="#"
                                class="button button-border button-circle button-fill fill-from-bottom button-dark button-black nott ls0 ms-0 mt-4"><span>Find
                                    Store</span></a>
                        </div>
                    </div>

                    <div class="section-contact col-lg-4 col-md-6 bottommargin">
                        <div class="p-5">
                            <i class="i-plain i-large mx-auto mb-4 icon-line2-envelope-letter"></i>
                            <h3 class="mb-3">Newsletter Signup</h3>
                            <span>Signup for our Newsletter &amp; get updates &amp; offers in your inbox.</span><br>
                            <a href="#"
                                class="button button-border button-circle button-fill fill-from-bottom button-dark button-black nott ls0 ms-0 mt-4"><span>SignUp
                                    Now</span></a>
                        </div>
                    </div>

                    <div class="section-contact col-lg-4 col-md-6 bottommargin">
                        <div class="p-5">
                            <i class="i-plain i-large mx-auto mb-4 icon-line2-support"></i>
                            <h3 class="mb-3">Support & Warranty</h3>
                            <span>Know your Products Warranty or need help from our Support Team.</span><br>
                            <a href="#"
                                class="button button-border button-circle button-fill fill-from-bottom button-dark button-black nott ls0 ms-0 mt-4"><span>Contact
                                    Us</span></a>
                        </div>
                    </div>
                </div>
            </div><!-- Container End -->

            <!-- Payments Section
        ============================================= -->
            <div class="promo promo-light promo-full topmargin-sm mb-0" style="padding: 50px 0 !important;">
                <div class="container">
                    <div class="row justify-content-between align-items-center">
                        <div class="col-sm-6">
                            <h3 class="mb-0 ls0 nott">Secure Packaging &amp; Free Shipping Worldwide</h3>
                        </div>
                        <div
                            class="col-sm-6 mt-4 mt-sm-0 d-flex align-items-center justify-content-center justify-content-sm-end">
                            <a href="#" class="px-2"><img
                                    src="{{ asset('headphones/demos/headphones/images/logos/fedex.svg') }}" alt="Image"
                                    height="30"></a>
                            <a href="#" class="px-2"><img
                                    src="{{ asset('headphones/demos/headphones/images/logos/dhl.svg') }}" alt="Image"
                                    height="30"></a>
                            <a href="#" class="px-2"><img
                                    src="{{ asset('headphones/demos/headphones/images/logos/lbc.svg') }}" alt="Image"
                                    height="40"></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section><!-- #content end -->
@endsection
