@extends('layout.main')
@section('content')
    <!-- Slider
      ============================================= -->
    <section id="slider" class="slider-element swiper_wrapper min-vh-40 min-vh-md-75" data-autoplay="9000" data-speed="800"
        data-loop="true" data-grab="false">

        <div class="swiper-container swiper-parent">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="container">
                        <div class="slider-caption" style="margin-top: -30px;">
                            <div class="emphasis-title mb-0">
                                <h2 class="bottommargin fw-bold"
                                    style="max-width: 600px; font-size: 80px; font-family: 'Montserrat'; line-height: 1.2;">
                                    {{ env('APP_TAGLINE') }}</h2>

                                <p class="lead topmargin-sm d-none d-md-block"
                                    style="max-width: 600px; font-family: 'Poppins'; color: #999; font-size: 18px;">
                                    Competently reintermediate user friendly scenarios after global synergy. Globally build
                                    compelling niche markets rather than bricks-and-clicks alignments. Continually
                                    revolutionize interactive strategic theme.</p>
                            </div>
                        </div>
                    </div>
                    <div class="slide-number font-primary">O1</div>
                    <div class="swiper-slide-bg"
                        style="background: #FFF url({{ asset('/ecommerce/demos/ecommerce/images/slider/1.jpg') }}) no-repeat center right; background-size: auto 100%;">
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="container">
                        <div class="slider-caption" style="margin-top: -30px;">
                            <div class="emphasis-title mb-0">
                                <h2 class="bottommargin fw-bold"
                                    style="max-width: 600px; font-size: 80px; font-family: 'Montserrat'; line-height: 1.2;">
                                    We Create<br>diff. Designs</h2>

                                <p class="lead topmargin-sm d-none d-md-block"
                                    style="max-width: 600px; font-family: 'Poppins'; color: #999; font-size: 18px;">
                                    Competently reintermediate user friendly scenarios after global synergy. Globally build
                                    compelling niche markets rather than bricks-and-clicks alignments. Continually
                                    revolutionize interactive strategic theme.</p>
                            </div>
                        </div>
                    </div>
                    <div class="slide-number font-primary">O2</div>
                    <div class="swiper-slide-bg"
                        style="background: #FFF url({{ asset('/ecommerce/demos/ecommerce/images/slider/2.jpg') }}) no-repeat center right; background-size: auto 100%;">
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="container">
                        <div class="slider-caption" style="margin-top: -30px;">
                            <div class="emphasis-title mb-0">
                                <h2 class="bottommargin fw-bold"
                                    style="max-width: 600px; font-size: 80px; font-family: 'Montserrat'; line-height: 1.2;">
                                    We Create<br>diff. Layouts</h2>

                                <p class="lead topmargin-sm d-none d-md-block"
                                    style="max-width: 600px; font-family: 'Poppins'; color: #999; font-size: 18px;">
                                    Competently reintermediate user friendly scenarios after global synergy. Globally build
                                    compelling niche markets rather than bricks-and-clicks alignments. Continually
                                    revolutionize interactive strategic theme.</p>
                            </div>
                        </div>
                    </div>
                    <div class="slide-number font-primary">O3</div>
                    <div class="swiper-slide-bg"
                        style="background: #FFF url({{ asset('/ecommerce/demos/ecommerce/images/slider/3.jpg') }}) no-repeat center right; background-size: auto 100%;">
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="container">
                        <div class="slider-caption" style="margin-top: -30px;">
                            <div class="emphasis-title mb-0">
                                <h2 class="bottommargin fw-bold"
                                    style="max-width: 600px; font-size: 80px; font-family: 'Montserrat'; line-height: 1.2;">
                                    We Create<br>diff. Mindset</h2>

                                <p class="lead topmargin-sm d-none d-md-block"
                                    style="max-width: 600px; font-family: 'Poppins'; color: #999; font-size: 18px;">
                                    Competently reintermediate user friendly scenarios after global synergy. Globally build
                                    compelling niche markets rather than bricks-and-clicks alignments. Continually
                                    revolutionize interactive strategic theme.</p>
                            </div>
                        </div>
                    </div>
                    <div class="slide-number font-primary">O4</div>
                    <div class="swiper-slide-bg"
                        style="background: #FFF url({{ asset('/ecommerce/demos/ecommerce/images/slider/4.jpg') }}) no-repeat center right; background-size: auto 100%;">
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="container">
                        <div class="slider-caption" style="margin-top: -30px;">
                            <div class="emphasis-title mb-0">
                                <h2 class="bottommargin fw-bold"
                                    style="max-width: 600px; font-size: 80px; font-family: 'Montserrat'; line-height: 1.2;">
                                    We Create<br>your Website</h2>

                                <p class="lead topmargin-sm d-none d-md-block"
                                    style="max-width: 600px; font-family: 'Poppins'; color: #999; font-size: 18px;">
                                    Competently reintermediate user friendly scenarios after global synergy. Globally build
                                    compelling niche markets rather than bricks-and-clicks alignments. Continually
                                    revolutionize interactive strategic theme.</p>
                            </div>
                        </div>
                    </div>
                    <div class="slide-number font-primary">O5</div>
                    <div class="swiper-slide-bg"
                        style="background: #FFF url({{ asset('/ecommerce/demos/ecommerce/images/slider/5.jpg') }}) no-repeat center right; background-size: auto 100%;">
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="container">
                        <div class="slider-caption" style="margin-top: -30px;">
                            <div class="emphasis-title mb-0">
                                <h2 class="bottommargin fw-bold"
                                    style="max-width: 600px; font-size: 80px; font-family: 'Montserrat'; line-height: 1.2;">
                                    We Create<br>your Home</h2>

                                <p class="lead topmargin-sm d-none d-md-block"
                                    style="max-width: 600px; font-family: 'Poppins'; color: #999; font-size: 18px;">
                                    Competently reintermediate user friendly scenarios after global synergy. Globally build
                                    compelling niche markets rather than bricks-and-clicks alignments. Continually
                                    revolutionize interactive strategic theme.</p>
                            </div>
                        </div>
                    </div>
                    <div class="slide-number font-primary">O6</div>
                    <div class="swiper-slide-bg"
                        style="background: #FFF url({{ asset('/ecommerce/demos/ecommerce/images/slider/6.jpg') }}) no-repeat center right; background-size: auto 100%;">
                    </div>
                </div>
            </div>
            <div class="slider-arrow-left"><i class="icon-line-arrow-left"></i></div>
            <div class="slider-arrow-right"><i class="icon-line-arrow-right"></i></div>
        </div>

    </section><!-- #Slider End -->

    <!-- Content
      ============================================= -->
    <section id="content">
        <div class="content-wrap py-0">

            <div class="section mt-0" style="padding: 100px 0;">
                <div class="container">

                    <div class="row grid-item">
                        <div class="col-md-2 grid-image">
                            <img src="{{ asset('ecommerce/demos/ecommerce/images/categories/1.jpg') }}" alt="Image 1">
                        </div>
                        <div class="col-md-2">
                            <div class="grid-info clearfix">
                                <h3><a href="#">Fresh Arrivals<span>Summer is Coming!</span></a></h3>
                                <a href="#" class="more-link clearfix">Shop Now</a>
                            </div>
                        </div>
                        <div class="col-md-2 grid-image">
                            <img src="{{ asset('ecommerce/demos/ecommerce/images/categories/2.jpg') }}" alt="Image 1">
                        </div>
                        <div class="col-md-2">
                            <div class="grid-info clearfix">
                                <h3><a href="#">Acessories<span>Check out more Products for your Lifestyles</span></a></h3>
                                <a href="#" class="more-link clearfix">Know More</a>
                            </div>
                        </div>

                        <div class="col-md-2 grid-image">
                            <img src="{{ asset('ecommerce/demos/ecommerce/images/categories/3.jpg') }}" alt="Image 1">
                        </div>
                        <div class="col-md-2">
                            <div class="grid-info clearfix">
                                <h3><a href="#">Our Store<span>Where we Manufacture!</span></a></h3>
                                <i class="icon-map-marker2"></i> <a
                                    href="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2233.681463596743!2d-3.19397378404521!3d55.954892680607855!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4887c78e1e83edab%3A0x627ac6bc4414f18b!2sGucci+-+Edinburgh+Harvey+Nichols+Women&#39;s!5e0!3m2!1sen!2sus!4v1489749205966"
                                    data-lightbox="iframe" class="more-link clearfix">Find Store</a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <div class="container clearfix">

                <div class="heading-block border-bottom-0 center">
                    <h3>Popular Categories</h3>
                    <span>Lorem ipsum dolor sit amet, consectetur adipisicing elit voluptas.</span>
                </div>

                <div class="row ecommerce-categories clearfix" style="padding: 20px 0 0;">
                    <div class="col-lg-7">
                        <a href="#"
                            style="background: url({{ asset('/ecommerce/demos/ecommerce/images/types/1.jpg') }}) no-repeat center center; background-size: cover;">
                            <div class="vertical-middle dark center">
                                <div class="heading-block m-0 border-0">
                                    <h3 class="text-capitalize font-secondary nott fw-medium">Travel</h3>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-5">
                        <a href="#"
                            style="background: url({{ asset('/ecommerce/demos/ecommerce/images/types/3.jpg') }}) no-repeat center center; background-size: cover;">
                            <div class="vertical-middle dark center">
                                <div class="heading-block m-0 border-0">
                                    <h3 class="text-capitalize font-secondary nott fw-medium">College</h3>
                                </div>
                            </div>
                        </a>
                    </div>

                    <div class="col-lg-4">
                        <a href="#"
                            style="background: url({{ asset('/ecommerce/demos/ecommerce/images/types/5.jpg') }}) no-repeat center center; background-size: cover;">
                            <div class="vertical-middle dark center">
                                <div class="heading-block m-0 border-0">
                                    <h3 class="text-capitalize font-secondary nott fw-medium">Leather</h3>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4">
                        <a href="#"
                            style="background: url({{ asset('/ecommerce/demos/ecommerce/images/types/6.jpg') }}) no-repeat center center; background-size: cover;">
                            <div class="vertical-middle dark center">
                                <div class="heading-block m-0 border-0">
                                    <h3 class="text-capitalize font-secondary nott fw-medium">Reise</h3>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4">
                        <a href="#"
                            style="background: url({{ asset('/ecommerce/demos/ecommerce/images/types/8.jpg') }}) no-repeat center center; background-size: cover;">
                            <div class="vertical-middle dark center">
                                <div class="heading-block m-0 border-0">
                                    <h3 class="text-capitalize font-secondary nott fw-medium">Handmade</h3>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-5">
                        <a href="#"
                            style="background: url({{ asset('/ecommerce/demos/ecommerce/images/types/7.jpg') }}) no-repeat center center; background-size: cover;">
                            <div class="vertical-middle dark center">
                                <div class="heading-block m-0 border-0">
                                    <h3 class="text-capitalize font-secondary nott fw-medium">Brown</h3>
                                </div>
                            </div>
                        </a>
                    </div>

                    <div class="col-lg-7">
                        <a href="#"
                            style="background: url({{ asset('/ecommerce/demos/ecommerce/images/types/9.jpg') }}) no-repeat center center; background-size: cover;">
                            <div class="vertical-middle dark center">
                                <div class="heading-block m-0 border-0">
                                    <h3 class="text-capitalize font-secondary nott fw-medium">Acessories</h3>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>

            <div class="section clearfix" style="padding: 80px 0;">
                <div class="container clearfix">

                    <div class="heading-block border-bottom-0 center">
                        <h3 class="fw-normal" style="font-size: 16px;">Best Selling Products</h3>
                    </div>

                    <div class="row clearfix">
                        <div class="col-lg-3 col-md-6">
                            <div class="portfolio-item">
                                <div class="portfolio-image clearfix">
                                    <div class="fslider" data-pagi="false" data-animation="fade"
                                        data-slideshow="false">
                                        <div class="flexslider">
                                            <div class="slider-wrap">
                                                <div class="slide"><a href="#"><img
                                                            src="{{ asset('ecommerce/demos/ecommerce/images/items/1-1.jpg') }}"
                                                            alt="Grey Bag"></a></div>
                                                <div class="slide"><a href="#"><img
                                                            src="{{ asset('ecommerce/demos/ecommerce/images/items/1-2.jpg') }}"
                                                            alt="Grey Bag"></a></div>
                                                <div class="slide"><a href="#"><img
                                                            src="{{ asset('ecommerce/demos/ecommerce/images/items/1-3.jpg') }}"
                                                            alt="Grey Bag"></a></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-cart"><a href="#"><i class="icon-shopping-cart"></i></a></div>
                                    <div class="product-quickview"><a href="#" data-bs-toggle="tooltip"
                                            data-bs-placement="top" title="Available Sizes: S | M | L"><i
                                                class="icon-info"></i></a></div>
                                </div>
                                <div class="portfolio-desc pb-0-content-between">
                                    <div>
                                        <h3><a href="#">Leather Bag</a></h3>
                                        <span class="mt-0"><a href="#">Grey Messenger Bag</a></span>
                                        <div class="rating-stars">
                                            <i class="icon-star3"></i><i class="icon-star3"></i><i
                                                class="icon-star3"></i><i class="icon-star3"></i><i
                                                class="icon-star3"></i>
                                        </div>
                                    </div>
                                    <div class="item-price pt-1">
                                        <span>&euro;29.99</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-6">
                            <div class="portfolio-item">
                                <div class="portfolio-image clearfix">
                                    <div class="fslider" data-pagi="false" data-animation="fade"
                                        data-slideshow="false">
                                        <div class="flexslider">
                                            <div class="slider-wrap">
                                                <div class="slide"><a href="#"><img
                                                            src="{{ asset('ecommerce/demos/ecommerce/images/items/4-1.jpg') }}"
                                                            alt="Grey Bag"></a></div>
                                                <div class="slide"><a href="#"><img
                                                            src="{{ asset('ecommerce/demos/ecommerce/images/items/4-2.jpg') }}"
                                                            alt="Grey Bag"></a></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-cart"><a href="#"><i class="icon-shopping-cart"></i></a></div>
                                    <div class="product-quickview"><a href="#" data-bs-toggle="tooltip"
                                            data-bs-placement="top" title="Available Sizes: S | M | L"><i
                                                class="icon-info"></i></a></div>
                                </div>
                                <div class="portfolio-desc pb-0-content-between">
                                    <div>
                                        <h3><a href="#">Black Bagpack</a></h3>
                                        <span class="mt-0"><a href="#">College Backpack</a></span>
                                        <div class="rating-stars">
                                            <i class="icon-star3"></i><i class="icon-star3"></i><i
                                                class="icon-star3"></i><i class="icon-star3"></i><i
                                                class="icon-star3"></i>
                                        </div>
                                    </div>
                                    <div class="item-price pt-1">
                                        <span>&euro;23.49</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="w-100 bottommargin d-block d-md-none"></div>

                        <div class="col-lg-3 col-md-6">
                            <div class="portfolio-item">
                                <div class="portfolio-image clearfix">
                                    <div class="fslider" data-pagi="false" data-animation="fade"
                                        data-slideshow="false">
                                        <div class="flexslider">
                                            <div class="slider-wrap">
                                                <div class="slide"><a href="#"><img
                                                            src="{{ asset('ecommerce/demos/ecommerce/images/items/2-1.jpg') }}"
                                                            alt="Office Bag"></a></div>
                                                <div class="slide"><a href="#"><img
                                                            src="{{ asset('ecommerce/demos/ecommerce/images/items/2-2.jpg') }}"
                                                            alt="Office Bag"></a></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-cart"><a href="#"><i class="icon-shopping-cart"></i></a></div>
                                    <div class="product-quickview"><a href="#" data-bs-toggle="tooltip"
                                            data-bs-placement="top" title="Available Sizes: L"><i
                                                class="icon-info"></i></a></div>
                                </div>
                                <div class="portfolio-desc pb-0-content-between">
                                    <div>
                                        <h3><a href="#">Women Office Bag</a></h3>
                                        <span class="mt-0"><a href="#">Hand Bag</a></span>
                                        <div class="rating-stars">
                                            <i class="icon-star3"></i><i class="icon-star3"></i><i
                                                class="icon-star3"></i><i class="icon-star3"></i><i
                                                class="icon-star-empty"></i>
                                        </div>
                                    </div>
                                    <div class="item-price pt-1">
                                        <span>&euro;11.99</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="w-100 bottommargin d-block d-md-none"></div>

                        <div class="col-lg-3 col-md-6">
                            <div class="portfolio-item">
                                <div class="portfolio-image clearfix">
                                    <div class="fslider" data-pagi="false" data-animation="fade"
                                        data-slideshow="false">
                                        <div class="flexslider">
                                            <div class="slider-wrap">
                                                <div class="slide"><a href="#"><img
                                                            src="{{ asset('ecommerce/demos/ecommerce/images/items/3-1.jpg') }}"
                                                            alt="Men Bag"></a></div>
                                                <div class="slide"><a href="#"><img
                                                            src="{{ asset('ecommerce/demos/ecommerce/images/items/3-2.jpg') }}"
                                                            alt="Men Bag"></a></div>
                                                <div class="slide"><a href="#"><img
                                                            src="{{ asset('ecommerce/demos/ecommerce/images/items/3-3.jpg') }}"
                                                            alt="Men Bag"></a></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="sale-flash badge bg-danger p-2">Sale!</div>
                                    <div class="product-cart"><a href="#"><i class="icon-shopping-cart"></i></a></div>
                                    <div class="product-quickview"><a href="#" data-bs-toggle="tooltip"
                                            data-bs-placement="top" title="Available Sizes: S | M | L"><i
                                                class="icon-info"></i></a></div>
                                </div>
                                <div class="portfolio-desc pb-0-content-between">
                                    <div>
                                        <h3><a href="#">Men Black Bag</a></h3>
                                        <span class="mt-0"><a href="#">Laptop Bag</a></span>
                                        <div class="rating-stars">
                                            <i class="icon-star3"></i><i class="icon-star3"></i><i
                                                class="icon-star3"></i><i class="icon-star3"></i><i
                                                class="icon-star-half-full"></i>
                                        </div>
                                    </div>
                                    <div class="item-price pt-1">
                                        <span><del class="d-md-none d-lg-block">$45.99</del> &euro;39.00</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <div class="section bg-transparent">
                <div class="container clearfix">
                    <div class="row clearfix">
                        <div class="col-lg-5">
                            <div id="oc-images" class="owl-carousel image-carousel carousel-widget custom-js">

                                <div class="oc-item">
                                    <a href="#"><img src="{{ asset('ecommerce/demos/ecommerce/images/featured/1.jpg') }}"
                                            alt="Image 1"></a>
                                </div>
                                <div class="oc-item">
                                    <a href="#"><img src="{{ asset('ecommerce/demos/ecommerce/images/featured/2.jpg') }}"
                                            alt="Image 2"></a>
                                </div>
                                <div class="oc-item">
                                    <a href="#"><img src="{{ asset('ecommerce/demos/ecommerce/images/featured/3.jpg') }}"
                                            alt="Image 3"></a>
                                </div>
                                <div class="oc-item">
                                    <a href="#"><img src="{{ asset('ecommerce/demos/ecommerce/images/featured/4.jpg') }}"
                                            alt="Image 4"></a>
                                </div>
                                <div class="oc-item">
                                    <a href="#"><img src="{{ asset('ecommerce/demos/ecommerce/images/featured/5.jpg') }}"
                                            alt="Image 5"></a>
                                </div>
                                <div class="oc-item">
                                    <a href="#"><img src="{{ asset('ecommerce/demos/ecommerce/images/featured/6.jpg') }}"
                                            alt="Image 6"></a>
                                </div>

                            </div>
                        </div>
                        <div class="col-lg-5 offset-lg-1">
                            <div class="featured-item topmargin">
                                <div class="item-title">
                                    <div class="before-heading fw-semibold ls5"><a href="#"
                                            style="color: #aab7bd !important;">Leather Bags <i
                                                class="icon-angle-right"></i></a></div>
                                    <h3><a href="#">Lady Shoulder Bag.</a></h3>
                                </div>
                                <div class="item-meta font-secondary">
                                    SKU: 8465415.
                                    Design: Leather / Blue
                                </div>
                                <div class="clear"></div>
                                <div class="item-desc">
                                    <p>Proactively empower highly efficient growth strategies Completely enhance inexpensive
                                        best practices before front-end content. Completely procrastinate innovative vortals
                                        through maintainable leadership skills. Continually foster business sources for
                                        viral leadership skills.</p>
                                </div>
                                <div class="item-color bottommargin-sm">
                                    <span>Available Colors:</span>
                                    <div id="item-color-dots" class="owl-dots"></div>
                                </div>
                                <div class="button button-border button-circle m-0 font-secondary">View Details</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="clear"></div>

            <div class="row align-items-stretch bottommargin clearfix">
                <div class="col-md-6"
                    style="background: url({{ asset('/ecommerce/demos/ecommerce/images/sections/1.jpg') }}) center 45% no-repeat; background-size: cover; padding: 0 0 500px;">
                    <div class="section-content topmargin-sm">
                        <h3>Travel Bags for Men</h3>
                        <span class="font-primary">Designed to help you never make your bed again. Superior materials for
                            comfort and lasting quality in a complete bedding package.</span>
                        <a class="more-link text-uppercase fw-medium" style="font-family: 'Montserrat';">Go To Shop <i
                                class="icon-line-arrow-right"></i></a>
                    </div>
                </div>
                <div class="col-md-6"
                    style="background: url({{ asset('/ecommerce/demos/ecommerce/images/sections/3.jpg') }}) center center no-repeat; background-size: cover; padding: 0 0 500px;">
                    <div class="section-content topmargin-sm">
                        <h3>Luxury Bags for Women</h3>
                        <span class="font-primary">Globally monetize unique metrics and enterprise markets. Efficiently
                            implement cooperative e-services and integrated interfaces.</span>
                        <a class="more-link text-uppercase fw-medium" style="font-family: 'Montserrat';">Go To Shop <i
                                class="icon-line-arrow-right"></i></a>
                    </div>
                </div>
            </div>

            <div class="clear"></div>

            <div class="container topmargin clearfix">
                <div class="heading-block border-bottom-0 bottommargin center">
                    <h3 style="font-size: 20px;">Shop By Categories</h3>
                    <span>Lorem ipsum dolor sit amet, consectetur adipisicing<br>elit voluptas.</span>
                </div>

                <div class="row col-mb-50">
                    <div class="col-lg-2 col-md-4 col-6 offset-lg-1">
                        <div class="feature-box fbox-center">
                            <div class="fbox-content">
                                <div class="before-heading ls2">0mm - 31mm</div>
                                <h3 class="fw-normal ls1">Laptop</h3>
                            </div>
                            <div class="fbox-image imagescalein">
                                <a href="#"><img src="{{ asset('ecommerce/demos/ecommerce/images/icons/2.png') }}"
                                        alt="Image"></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-4 col-6">
                        <div class="feature-box fbox-center">
                            <div class="fbox-content">
                                <div class="before-heading ls2">0mm - 31mm</div>
                                <h3 class="fw-normal ls1">Hand Bag</h3>
                            </div>
                            <div class="fbox-image imagescalein">
                                <a href="#"><img src="{{ asset('ecommerce/demos/ecommerce/images/icons/3.png') }}"
                                        alt="Image"></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-4 col-6">
                        <div class="feature-box fbox-center">
                            <div class="fbox-content">
                                <div class="before-heading ls2">0mm - 31mm</div>
                                <h3 class="fw-normal ls1">Backpack</h3>
                            </div>
                            <div class="fbox-image imagescalein">
                                <a href="#"><img src="{{ asset('ecommerce/demos/ecommerce/images/icons/4.png') }}"
                                        alt="Image"></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-4 col-6">
                        <div class="feature-box fbox-center">
                            <div class="fbox-content">
                                <div class="before-heading ls2">0mm - 31mm</div>
                                <h3 class="fw-normal ls1">Duffle</h3>
                            </div>
                            <div class="fbox-image imagescalein">
                                <a href="#"><img src="{{ asset('ecommerce/demos/ecommerce/images/icons/5.png') }}"
                                        alt="Image"></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-4 col-6">
                        <div class="feature-box fbox-center">
                            <div class="fbox-content">
                                <div class="before-heading ls2">0mm - 31mm</div>
                                <h3 class="fw-normal ls1">Trolley</h3>
                            </div>
                            <div class="fbox-image imagescalein">
                                <a href="#"><img src="{{ asset('ecommerce/demos/ecommerce/images/icons/6.png') }}"
                                        alt="Image"></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="section dark mb-0">
                <div class="container clearfix">

                    <div class="row payments-info">
                        <div class="col-lg-6">
                            <p class="lead m-0">Free Shipping on Orders of <strong>$199</strong> or above.</p>
                        </div>
                        <div class="col-lg-6">
                            <ul class="payment-cards clearfix" style="margin-top: 5px;">
                                <li><img src="{{ asset('ecommerce/demos/xmas/images/cards/visa.svg') }}" alt="Visa"></li>
                                <li><img src="{{ asset('ecommerce/demos/xmas/images/cards/mc.svg') }}" alt="Master Card">
                                </li>
                                <li><img src="{{ asset('ecommerce/demos/xmas/images/cards/ae.svg') }}"
                                        alt="American Express"></li>
                                <li><img src="{{ asset('ecommerce/demos/xmas/images/cards/pp.svg') }}" alt="PayPal"></li>
                                <li><img src="{{ asset('ecommerce/demos/xmas/images/cards/sk.svg') }}" alt="Skrill"></li>
                                <li><img src="{{ asset('ecommerce/demos/xmas/images/cards/2co.svg') }}" alt="2CheckOut">
                                </li>
                                <li><img src="{{ asset('ecommerce/demos/xmas/images/cards/wu.svg') }}" alt="Western Union">
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section><!-- #content end -->

@endsection
