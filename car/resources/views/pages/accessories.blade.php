@extends('layout.main')
@section('content')
    <!-- Page Title
      ============================================= -->
    <section id="page-title" class="page-title-parallax page-title-dark"
        style="background-image: url({{asset('/car/demos/car/images/accessories/page-title.jpg')}}); background-size: cover; padding: 140px 0;"
        data-bottom-top="background-position:0px 0px;" data-top-bottom="background-position:0px -300px;">

        <div class="container clearfix">
            <h1>Car Accessories</h1>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item"><a href="#">Cars</a></li>
                <li class="breadcrumb-item active" aria-current="page">Accessories</li>
            </ol>
        </div>

    </section><!-- #page-title end -->

    <!-- Page Sub Menu
      ============================================= -->
    <div id="page-menu">
        <div id="page-menu-wrap" class="not-dark shadow-sm">
            <div class="container">
                <div class="page-menu-row justify-content-lg-center">

                    <nav class="page-menu-nav">
                        <ul class="page-menu-container one-page-menu" data-easing="easeInOutExpo" data-offset="120">
                            <li class="page-menu-item"><a href="#" data-href="#section-wheel" data-highlight="yellow">
                                    <div>Tyres & Wheels</div>
                                </a></li>
                            <li class="page-menu-item"><a href="#" data-href="#section-music" data-highlight="yellow">
                                    <div>Music Systems</div>
                                </a></li>
                            <li class="page-menu-item"><a href="#" data-href="#section-engines" data-highlight="yellow">
                                    <div>Engines & Parts</div>
                                </a></li>
                            <li class="page-menu-item"><a href="#" data-href="#section-seats" data-highlight="yellow">
                                    <div>Seat Covers</div>
                                </a></li>
                            <li class="page-menu-item"><a href="#" data-href="#section-lights" data-highlight="yellow">
                                    <div>Lights</div>
                                </a></li>
                        </ul>
                    </nav>

                    <div id="page-menu-trigger"><i class="icon-reorder"></i></div>

                </div>
            </div>
        </div>
    </div><!-- #page-menu end -->

    <!-- Content
      ============================================= -->
    <section id="content" class="clearfix">

        <div class="content-wrap">

            <div class="container">

                <div id="section-wheel" class="page-section">
                    <div class="heading-block center section border-bottom-0 py-5 mt-0">
                        <h3 class="highlight-me px-2 d-inline-block">Tyres & Wheels</h3>
                        <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam, modi?
                        </p>
                    </div>
                    <div id="oc-wheel" class="owl-carousel shop-carousel carousel-widget" data-margin="30" data-nav="true"
                        data-pagi="false" data-items-xs="1" data-items-sm="2" data-items-md="3" data-items-lg="4"
                        data-autoplay="5000">
                        <div class="product center">
                            <div class="product-image px-4 py-1">
                                <a href="#"><img src="{{asset('car/demos/car/images/accessories/wheels/1.jpg')}}" alt="Image"></a>
                            </div>

                            <div class="product-desc">
                                <div class="product-title">
                                    <h3><a href="#">HRX Alloy Wheel</a></h3>
                                </div>
                                <div class="product-price"><ins>$12.49</ins></div>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit adipisicing. Incidunt, sit!</p>
                                <a href="#" class="button button-rounded button-small m-0"><i
                                        class="icon-shopping-cart"></i> Add to Cart</a>
                            </div>
                        </div>

                        <div class="product center">
                            <div class="product-image px-4 py-1">
                                <a href="#"><img src="{{asset('car/demos/car/images/accessories/wheels/2.jpg')}}" alt="Image"></a>
                            </div>

                            <div class="product-desc">
                                <div class="product-title">
                                    <h3><a href="#">Suzuka Wheels</a></h3>
                                </div>
                                <div class="product-price"><ins>$21.49</ins></div>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellat neque, sequi maiores.
                                </p>
                                <a href="#" class="button button-rounded button-small m-0"><i
                                        class="icon-shopping-cart"></i> Add to Cart</a>
                            </div>
                        </div>

                        <div class="product center">
                            <div class="product-image px-4 py-1">
                                <a href="#"><img src="{{asset('car/demos/car/images/accessories/wheels/3.jpg')}}" alt="Image"></a>
                            </div>

                            <div class="product-desc">
                                <div class="product-title">
                                    <h3><a href="#">Ghost 15" alloy Wheels</a></h3>
                                </div>
                                <div class="product-price"><del>$24.99</del> <ins>$12.49</ins></div>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rerum rem vel doloribus.</p>
                                <a href="#" class="button button-rounded button-small m-0"><i
                                        class="icon-shopping-cart"></i> Add to Cart</a>
                            </div>
                        </div>

                        <div class="product center">
                            <div class="product-image px-4 py-1">
                                <a href="#"><img src="{{asset('car/demos/car/images/accessories/wheels/4.jpg')}}" alt="Image"></a>
                            </div>

                            <div class="product-desc">
                                <div class="product-title">
                                    <h3><a href="#">Konig Wheels</a></h3>
                                </div>
                                <div class="product-price"><del>$30.99</del> <ins>$15.49</ins></div>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi doloribus qui porro
                                    accusantium.</p>
                                <a href="#" class="button button-rounded button-small m-0"><i
                                        class="icon-shopping-cart"></i> Add to Cart</a>
                            </div>
                        </div>

                        <div class="product center">
                            <div class="product-image px-4 py-1">
                                <a href="#"><img src="{{asset('car/demos/car/images/accessories/wheels/5.jpg')}}" alt="Image"></a>
                            </div>

                            <div class="product-desc">
                                <div class="product-title">
                                    <h3><a href="#">Konig Wheels</a></h3>
                                </div>
                                <div class="product-price"><ins>$11.99</ins></div>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi doloribus qui porro
                                    accusantium.</p>
                                <a href="#" class="button button-rounded button-small m-0"><i
                                        class="icon-shopping-cart"></i> Add to Cart</a>
                            </div>
                        </div>

                        <div class="product center">
                            <div class="product-image px-4 py-1">
                                <a href="#"><img src="{{asset('car/demos/car/images/accessories/wheels/6.jpg')}}" alt="Image"></a>
                            </div>

                            <div class="product-desc">
                                <div class="product-title">
                                    <h3><a href="#">Konig Wheels</a></h3>
                                </div>
                                <div class="product-price"><ins>$17.49</ins></div>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi doloribus qui porro
                                    accusantium.</p>
                                <a href="#" class="button button-rounded button-small m-0"><i
                                        class="icon-shopping-cart"></i> Add to Cart</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div id="section-music" class="page-section">
                    <div class="heading-block section border-bottom-0 py-5 center">
                        <h3 class="highlight-me px-2 d-inline-block">Music Systems</h3>
                        <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam, modi?
                        </p>
                    </div>
                    <div class="owl-carousel shop-carousel carousel-widget mb-5" data-margin="30" data-nav="true"
                        data-pagi="false" data-items-xs="1" data-items-sm="2" data-items-md="3" data-items-lg="4"
                        data-autoplay="5000">
                        <div class="product center">
                            <div class="product-image px-4 py-1">
                                <a href="#"><img src="{{asset('car/demos/car/images/accessories/music/1.jpg')}}" alt="Image"></a>
                            </div>

                            <div class="product-desc">
                                <div class="product-title">
                                    <h3><a href="#">Double Deck Music</a></h3>
                                </div>
                                <div class="product-price"><ins>$12.49</ins></div>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit adipisicing. Incidunt, sit!</p>
                                <a href="#" class="button button-rounded button-small m-0"><i
                                        class="icon-shopping-cart"></i> Add to Cart</a>
                            </div>
                        </div>

                        <div class="product center">
                            <div class="product-image px-4 py-1">
                                <a href="#"><img src="{{asset('car/demos/car/images/accessories/music/2.jpg')}}" alt="Image"></a>
                            </div>

                            <div class="product-desc">
                                <div class="product-title">
                                    <h3><a href="#">Woofer Music</a></h3>
                                </div>
                                <div class="product-price"><ins>$12.49</ins></div>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit adipisicing. Incidunt, sit!</p>
                                <a href="#" class="button button-rounded button-small m-0"><i
                                        class="icon-shopping-cart"></i> Add to Cart</a>
                            </div>
                        </div>

                        <div class="product center">
                            <div class="product-image px-4 py-1">
                                <a href="#"><img src="{{asset('car/demos/car/images/accessories/music/3.jpg')}}" alt="Image"></a>
                            </div>

                            <div class="product-desc">
                                <div class="product-title">
                                    <h3><a href="#">Double Deck Music</a></h3>
                                </div>
                                <div class="product-price"><ins>$12.49</ins></div>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit adipisicing. Incidunt, sit!</p>
                                <a href="#" class="button button-rounded button-small m-0"><i
                                        class="icon-shopping-cart"></i> Add to Cart</a>
                            </div>
                        </div>

                        <div class="product center">
                            <div class="product-image px-4 py-1">
                                <a href="#"><img src="{{asset('car/demos/car/images/accessories/music/4.jpg')}}" alt="Image"></a>
                            </div>

                            <div class="product-desc">
                                <div class="product-title">
                                    <h3><a href="#">Double Deck Music</a></h3>
                                </div>
                                <div class="product-price"><ins>$12.49</ins></div>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit adipisicing. Incidunt, sit!</p>
                                <a href="#" class="button button-rounded button-small m-0"><i
                                        class="icon-shopping-cart"></i> Add to Cart</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div id="section-engines" class="page-section">
                    <div class="heading-block section border-bottom-0 py-5 center">
                        <h3 class="highlight-me px-2 d-inline-block">Engines & Parts</h3>
                        <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam, modi?
                        </p>
                    </div>
                    <div class="owl-carousel shop-carousel carousel-widget mb-5" data-margin="30" data-nav="true"
                        data-pagi="false" data-items-xs="1" data-items-sm="2" data-items-md="3" data-items-lg="4"
                        data-autoplay="5000">
                        <div class="product center">
                            <div class="product-image px-4 py-1">
                                <a href="#"><img src="{{asset('car/demos/car/images/accessories/engines/1.jpg')}}" alt="Image"></a>
                            </div>

                            <div class="product-desc">
                                <div class="product-title">
                                    <h3><a href="#">Turbo Engine</a></h3>
                                </div>
                                <div class="product-price"><ins>$12.49</ins></div>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit adipisicing. Incidunt, sit!</p>
                                <a href="#" class="button button-rounded button-small m-0"><i
                                        class="icon-shopping-cart"></i> Add to Cart</a>
                            </div>
                        </div>

                        <div class="product center">
                            <div class="product-image px-4 py-1">
                                <a href="#"><img src="{{asset('car/demos/car/images/accessories/engines/2.jpg')}}" alt="Image"></a>
                            </div>

                            <div class="product-desc">
                                <div class="product-title">
                                    <h3><a href="#">Turbo Engine</a></h3>
                                </div>
                                <div class="product-price"><ins>$12.49</ins></div>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit adipisicing. Incidunt, sit!</p>
                                <a href="#" class="button button-rounded button-small m-0"><i
                                        class="icon-shopping-cart"></i> Add to Cart</a>
                            </div>
                        </div>

                        <div class="product center">
                            <div class="product-image px-4 py-1">
                                <a href="#"><img src="{{asset('car/demos/car/images/accessories/engines/3.jpg')}}" alt="Image"></a>
                            </div>

                            <div class="product-desc">
                                <div class="product-title">
                                    <h3><a href="#">Turbo spare Parts</a></h3>
                                </div>
                                <div class="product-price"><ins>$12.49</ins></div>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit adipisicing. Incidunt, sit!</p>
                                <a href="#" class="button button-rounded button-small m-0"><i
                                        class="icon-shopping-cart"></i> Add to Cart</a>
                            </div>
                        </div>

                        <div class="product center">
                            <div class="product-image px-4 py-1">
                                <a href="#"><img src="{{asset('car/demos/car/images/accessories/engines/4.jpg')}}" alt="Image"></a>
                            </div>

                            <div class="product-desc">
                                <div class="product-title">
                                    <h3><a href="#">Turbo Parts</a></h3>
                                </div>
                                <div class="product-price"><ins>$12.49</ins></div>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit adipisicing. Incidunt, sit!</p>
                                <a href="#" class="button button-rounded button-small m-0"><i
                                        class="icon-shopping-cart"></i> Add to Cart</a>
                            </div>
                        </div>

                        <div class="product center">
                            <div class="product-image px-4 py-1">
                                <a href="#"><img src="{{asset('car/demos/car/images/accessories/engines/5.jpg')}}" alt="Image"></a>
                            </div>

                            <div class="product-desc">
                                <div class="product-title">
                                    <h3><a href="#">Turbo Engine</a></h3>
                                </div>
                                <div class="product-price"><ins>$12.49</ins></div>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit adipisicing. Incidunt, sit!</p>
                                <a href="#" class="button button-rounded button-small m-0"><i
                                        class="icon-shopping-cart"></i> Add to Cart</a>
                            </div>
                        </div>

                        <div class="product center">
                            <div class="product-image px-4 py-1">
                                <a href="#"><img src="{{asset('car/demos/car/images/accessories/engines/6.jpg')}}" alt="Image"></a>
                            </div>

                            <div class="product-desc">
                                <div class="product-title">
                                    <h3><a href="#">Turbo Engine</a></h3>
                                </div>
                                <div class="product-price"><ins>$12.49</ins></div>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit adipisicing. Incidunt, sit!</p>
                                <a href="#" class="button button-rounded button-small m-0"><i
                                        class="icon-shopping-cart"></i> Add to Cart</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div id="section-seats" class="page-section">
                    <div class="heading-block section border-bottom-0 py-5 center">
                        <h3 class="highlight-me px-2 d-inline-block">Seat Covers</h3>
                        <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam, modi?
                        </p>
                    </div>
                    <div class="owl-carousel shop-carousel carousel-widget mb-5" data-margin="30" data-nav="true"
                        data-pagi="false" data-items-xs="1" data-items-sm="2" data-items-md="3" data-items-lg="4"
                        data-autoplay="5000">
                        <div class="product center">
                            <div class="product-image px-4 py-1">
                                <a href="#"><img src="{{asset('car/demos/car/images/accessories/seats/1.jpg')}}" alt="Image"></a>
                            </div>

                            <div class="product-desc">
                                <div class="product-title">
                                    <h3><a href="#">Turbo Engine</a></h3>
                                </div>
                                <div class="product-price"><ins>$12.49</ins></div>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit adipisicing. Incidunt, sit!</p>
                                <a href="#" class="button button-rounded button-small m-0"><i
                                        class="icon-shopping-cart"></i> Add to Cart</a>
                            </div>
                        </div>

                        <div class="product center">
                            <div class="product-image px-4 py-1">
                                <a href="#"><img src="{{asset('car/demos/car/images/accessories/seats/2.jpg')}}" alt="Image"></a>
                            </div>

                            <div class="product-desc">
                                <div class="product-title">
                                    <h3><a href="#">Turbo Engine</a></h3>
                                </div>
                                <div class="product-price"><ins>$12.49</ins></div>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit adipisicing. Incidunt, sit!</p>
                                <a href="#" class="button button-rounded button-small m-0"><i
                                        class="icon-shopping-cart"></i> Add to Cart</a>
                            </div>
                        </div>

                        <div class="product center">
                            <div class="product-image px-4 py-1">
                                <a href="#"><img src="{{asset('car/demos/car/images/accessories/seats/3.jpg')}}" alt="Image"></a>
                            </div>

                            <div class="product-desc">
                                <div class="product-title">
                                    <h3><a href="#">Turbo Engine</a></h3>
                                </div>
                                <div class="product-price"><ins>$12.49</ins></div>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit adipisicing. Incidunt, sit!</p>
                                <a href="#" class="button button-rounded button-small m-0"><i
                                        class="icon-shopping-cart"></i> Add to Cart</a>
                            </div>
                        </div>


                        <div class="product center">
                            <div class="product-image px-4 py-1">
                                <a href="#"><img src="{{asset('car/demos/car/images/accessories/seats/4.jpg')}}" alt="Image"></a>
                            </div>

                            <div class="product-desc">
                                <div class="product-title">
                                    <h3><a href="#">Turbo Engine</a></h3>
                                </div>
                                <div class="product-price"><ins>$12.49</ins></div>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit adipisicing. Incidunt, sit!</p>
                                <a href="#" class="button button-rounded button-small m-0"><i
                                        class="icon-shopping-cart"></i> Add to Cart</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div id="section-lights" class="page-section">
                    <div class="heading-block section border-bottom-0 py-5 center">
                        <h3 class="highlight-me px-2 d-inline-block">Lights</h3>
                        <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam, modi?
                        </p>
                    </div>
                    <div class="owl-carousel shop-carousel carousel-widget mb-5" data-margin="30" data-nav="true"
                        data-pagi="false" data-items-xs="1" data-items-sm="2" data-items-md="3" data-items-lg="4"
                        data-autoplay="5000">
                        <div class="product center">
                            <div class="product-image px-4 py-1">
                                <a href="#"><img src="{{asset('car/demos/car/images/accessories/lights/1.jpg')}}" alt="Image"></a>
                            </div>

                            <div class="product-desc">
                                <div class="product-title">
                                    <h3><a href="#">Buddyclub GT86/BRZ Light</a></h3>
                                </div>
                                <div class="product-price"><ins>$12.49</ins></div>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit adipisicing. Incidunt, sit!</p>
                                <a href="#" class="button button-rounded button-small m-0"><i
                                        class="icon-shopping-cart"></i> Add to Cart</a>
                            </div>
                        </div>
                        <div class="product center">
                            <div class="product-image px-4 py-1">
                                <a href="#"><img src="{{asset('car/demos/car/images/accessories/lights/2.jpg')}}" alt="Image"></a>
                            </div>

                            <div class="product-desc">
                                <div class="product-title">
                                    <h3><a href="#">Buddyclub LED</a></h3>
                                </div>
                                <div class="product-price"><ins>$12.49</ins></div>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit adipisicing. Incidunt, sit!</p>
                                <a href="#" class="button button-rounded button-small m-0"><i
                                        class="icon-shopping-cart"></i> Add to Cart</a>
                            </div>
                        </div>
                        <div class="product center">
                            <div class="product-image px-4 py-1">
                                <a href="#"><img src="{{asset('car/demos/car/images/accessories/lights/3.jpg')}}" alt="Image"></a>
                            </div>

                            <div class="product-desc">
                                <div class="product-title">
                                    <h3><a href="#">Ford Focus Backlight</a></h3>
                                </div>
                                <div class="product-price"><ins>$12.49</ins></div>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit adipisicing. Incidunt, sit!</p>
                                <a href="#" class="button button-rounded button-small m-0"><i
                                        class="icon-shopping-cart"></i> Add to Cart</a>
                            </div>
                        </div>
                        <div class="product center">
                            <div class="product-image px-4 py-1">
                                <a href="#"><img src="{{asset('car/demos/car/images/accessories/lights/4.jpg')}}" alt="Image"></a>
                            </div>

                            <div class="product-desc">
                                <div class="product-title">
                                    <h3><a href="#">Turbo LED</a></h3>
                                </div>
                                <div class="product-price"><ins>$12.49</ins></div>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit adipisicing. Incidunt, sit!</p>
                                <a href="#" class="button button-rounded button-small m-0"><i
                                        class="icon-shopping-cart"></i> Add to Cart</a>
                            </div>
                        </div>

                        <div class="product center">
                            <div class="product-image px-4 py-1">
                                <a href="#"><img src="{{asset('car/demos/car/images/accessories/lights/5.jpg')}}" alt="Image"></a>
                            </div>

                            <div class="product-desc">
                                <div class="product-title">
                                    <h3><a href="#">Spyder Backlight</a></h3>
                                </div>
                                <div class="product-price"><ins>$12.49</ins></div>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit adipisicing. Incidunt, sit!</p>
                                <a href="#" class="button button-rounded button-small m-0"><i
                                        class="icon-shopping-cart"></i> Add to Cart</a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <div class="section m-0 footer-stick clearfix"
                style="background: #FFF url({{asset('/car/demos/car/images/features/section-bg.jpg')}}) left bottom no-repeat; background-size: cover; padding: 120px 0">
                <div class="container clearfix">
                    <div class="row">
                        <div class="col-md-6">
                            <h2 class="h2 fw-bold mb-4">You still can't find your Car's Parts, then please Contact Us!</h2>
                            <a href="contact.html" class="button button-color button-large button-rounded">Contact Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section><!-- #content end -->

@endsection
