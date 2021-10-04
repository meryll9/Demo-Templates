@extends('layout.main')
@section('content')
    <!-- Slider
      ============================================= -->
    <section id="slider" class="slider-element min-vh-100 page-section slide-img include-header" data-animate="img-to-right"
        style="background: url({{ asset('/burger/demos/burger/images/hero.jpg') }}) center center no-repeat; background-size: cover;">
        <div class="slider-inner">

            <div class="vertical-middle">
                <div class="container dark">
                    <div class="row">
                        <div class="col-lg-6 col-md-8 dotted-bg parallax" data-start="top: 0px; opacity: 1"
                            data-400="top: 50px; opacity: 0.3">
                            <div class="emphasis-title" data-animate="fadeInUp">
                                <div class="before-heading font-secondary color">Delight your Best</div>
                                <h1 class="font-border">{{ env('APP_TAGLINE') }}</h1>
                            </div>
                            <p class="lead text-white-50" data-animate="fadeInUp" data-delay="100">Competently revolutionize
                                real-time deliverables via quality vortals. Compellingly create worldwide functionalities
                                without robust interfaces.</p>
                            <a data-scrollto="#menu" data-easing="easeInOutExpo" data-speed="1250"
                                class="button button-large button-rounded px-4 button-border button-light button-white fw-semibold"
                                data-animate="fadeInUp" data-delay="200">See Menu</a>
                            <a href="tel:+112223333"
                                class="button button-large button-rounded px-4 button-reveal d-inline-flex tright fw-semibold"
                                data-animate="fadeInUp" data-delay="300"><i class="icon-line-arrow-right"></i><span>Book a
                                    Table</span></a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <!-- Content
      ============================================= -->
    <section id="content" class="dark-color">
        <div
            style="position: absolute; top: -13px; left: 0; width: 100%;height: 30px; background: url({{ asset('/burger/demos/burger/images/svg/brush.svg') }}) no-repeat top center / 110% auto; z-index: 2;">
        </div>
        <div class="content-wrap p-0">

            <div id="story" class="page-section">

                <div class="section my-0"
                    style="background: #F0ECE7 url({{ asset('/burger/demos/burger/images/icon-bg.png') }}) repeat center center;">
                    <div class="container">
                        <div class="center bottommargin mx-auto" style="max-width: 700px">
                            <div class="before-heading font-primary color">Our Story</div>
                            <h1 class="font-secondary display-4 fw-bold">Burgers! You won't Find Anywhere Else</h1>
                            <p class="lead">Holisticly initiate distinctive growth strategies without efficient
                                scenarios. Enthusiastically restore effective infomediaries through one-to-one applications.
                                Assertively build cross-platform core competencies through resource-leveling process
                                improvements. Objectively actualize intermandated strategic theme areas and real-time
                                e-services.</p>

                            <a href="https://www.freepik.com" class="d-block op-05">Designed by Freepik</a>

                            <div class="card mx-auto my-5 slide-img border-0" style="max-width: 450px"
                                data-animate="img-to-left">
                                <img src="{{ asset('burger/demos/burger/images/others/chef.jpg') }}" class="card-img"
                                    alt="...">
                                <div
                                    class="card-img-overlay dotted-bg dotted-bg-light d-flex align-items-center justify-content-center">
                                    <a href="https://www.youtube.com/watch?v=P3Huse9K6Xs" data-lightbox="iframe"
                                        class="stretched-link display-3 text-white image_fade"><i
                                            class="icon-play-circle"></i></a>
                                </div>
                            </div>

                            <img src="{{ asset('burger/demos/burger/images/svg/items.svg') }}" alt="All Items">
                        </div>
                    </div>
                </div>

                <div class="section m-0 p-0">
                    <div class="row align-items-stretch clearfix">

                        <div class="item-categories overflow-hidden col-md-4 dark col-padding position-relative"
                            style="background-color: #0A0A0A;">
                            <div class="cat-img"><img data-animate="fadeInRight"
                                    src="{{ asset('burger/demos/burger/images/cat/1.png') }}" alt="Category Image"></div>
                            <div class="cat-text">
                                <h2 class="fw-bold ls1 text-uppercase mb-5">Burgers</h2>
                                <p class="mb-5">Credibly exploit one-to-one markets before enabled innovation.
                                    Synergistically incubate integrated communities whereas highly efficient alignments.</p>
                                <a href="#" data-scrollto="#menu" data-easing="easeInOutExpo" data-speed="1250"
                                    class="button button-rounded px-4 button-border button-light button-white fw-semibold ms-0">View
                                    All</a>
                            </div>
                        </div>

                        <div class="item-categories overflow-hidden col-md-4 dark col-padding position-relative"
                            style="background-color: #1B1B1B;">
                            <div class="cat-img"><img data-animate="fadeInRight"
                                    src="{{ asset('burger/demos/burger/images/cat/3.png') }}" alt="Category Image"></div>
                            <div class="cat-text">
                                <h2 class="fw-bold ls1 text-uppercase mb-5">Snacks</h2>
                                <p class="mb-5">Authoritatively envisioneer 24/365 benefits via bricks-and-clicks
                                    outsourcing. Phosfluorescently redefine real-time relationships with interoperable
                                    sources. Efficiently.</p>
                                <a href="#" data-scrollto="#menu-snacks" data-easing="easeInOutExpo" data-speed="1250"
                                    class="button button-rounded px-4 button-border button-light button-white fw-semibold ms-0">View
                                    All</a>
                            </div>
                        </div>

                        <div class="item-categories overflow-hidden col-md-4 dark col-padding position-relative"
                            style="background-color: #262626;">
                            <div class="cat-img"><img data-animate="fadeInRight"
                                    src="{{ asset('burger/demos/burger/images/cat/4.png') }}" alt="Category Image"></div>
                            <div class="cat-text">
                                <h2 class="fw-bold ls1 text-uppercase mb-5">Beverages</h2>
                                <p class="mb-5">Dramatically promote collaborative networks via client-based
                                    quality vectors. Appropriately transform seamless applications after leading-edge
                                    models.</p>
                                <a href="#" data-scrollto="#menu-beverages" data-easing="easeInOutExpo" data-speed="1250"
                                    class="button button-rounded px-4 button-border button-light button-white fw-semibold ms-0">View
                                    All</a>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="section dark-color m-0 p-0">
                    <img src="{{ asset('burger/demos/burger/images/others/section-1.jpg') }}" alt="Section Image">
                    <div class="container dark">
                        <div class="center bottommargin-lg">
                            <div class="before-heading font-secondary color">Best Quality</div>
                            <h1 class="font-border display-4 ls1 fw-bold">Ingredients</h1>
                        </div>

                        <div class="clear"></div>

                        <div class="row align-items-center">

                            <div class="col-lg-4 col-md-6">

                                <div class="feature-box px-0" data-animate="fadeInLeft">
                                    <div class="fbox-content">
                                        <h3 class="color"><i class="icon-check-circle"></i> Burger Buns</h3>
                                        <p>Stretch your Website to the Full Width or make it boxed to surprise your
                                            visitors.</p>
                                    </div>
                                </div>

                                <div class="feature-box ps-5 pe-0 topmargin-lg" data-animate="fadeInLeft" data-delay="
             100">
                                    <div class="fbox-content">
                                        <h3 class="color"><i class="icon-check-circle"></i> Fresh Vegetables</h3>
                                        <p>We have covered each &amp; everything in our Docs including Videos &amp;
                                            Screenshots.</p>
                                    </div>
                                </div>

                                <div class="feature-box ps-2 pe-0 topmargin-lg" data-animate="fadeInLeft" data-delay="
             200">
                                    <div class="fbox-content">
                                        <h3 class="color"><i class="icon-check-circle"></i> Ground Beef</h3>
                                        <p>Display your Content attractively using Parallax Sections with HTML5 Videos.</p>
                                    </div>
                                </div>

                            </div>

                            <div class="col-lg-4 d-md-none d-lg-block center slide-img" data-animate="img-to-bottom">
                                <img src="{{ asset('burger/demos/burger/images/others/section-3.jpg') }}" alt="iphone 2">
                            </div>

                            <div class="col-lg-4 col-md-6">

                                <div class="feature-box ps-5 pe-0" data-animate="fadeInRight">
                                    <div class="fbox-content">
                                        <h3 class="color"><i class="icon-check-circle"></i> Fresh Meat</h3>
                                        <p>Canvas provides support for Native HTML5 Videos that can be added to a
                                            Background.</p>
                                    </div>
                                </div>

                                <div class="feature-box px-0 topmargin-lg" data-animate="fadeInRight" data-delay="
             100">
                                    <div class="fbox-content">
                                        <h3 class="color"><i class="icon-check-circle"></i> Gluten-Free Buns</h3>
                                        <p>Complete control on each &amp; every element that provides endless customization.
                                        </p>
                                    </div>
                                </div>

                                <div class="feature-box ps-3 pe-0 topmargin-lg" data-animate="fadeInRight" data-delay="
             200">
                                    <div class="fbox-content">
                                        <h3 class="color"><i class="icon-check-circle"></i> Low Fat</h3>
                                        <p>Change your Website's Primary Scheme instantly by simply adding the dark class.
                                        </p>
                                    </div>
                                </div>

                            </div>

                        </div>
                    </div>
                </div>
            </div>

            <div class="clear"></div>

            <div id="menu" class="page-section">
                <div class="section mb-0"
                    style="background: linear-gradient(to bottom, #101010, transparent, #101010), url({{ asset('/burger/demos/burger/images/others/section-2.jpg') }}) no-repeat center top / cover;">

                    <div class="container">
                        <div class="row align-items-center">
                            <div class="col-md-5 dark order-2 order-md-1">
                                <div class="bottommargin">
                                    <div class="before-heading font-secondary color mb-2">Our Menu</div>
                                    <div class="d-flex align-items-center dotted-bg">
                                        <img src="{{ asset('burger/demos/burger/images/svg/burger.svg') }}" alt=""
                                            width="60">
                                        <h1 class="font-border display-4 ls1 fw-bold mb-0  ms-3">Burgers</h1>
                                    </div>
                                </div>

                                <div class="clear"></div>

                                <div class="price-menu-warp img-hover-block"
                                    data-img="demos/burger/images/menu-items/burgers/mini.jpg')}}">
                                    <div class="price-header">
                                        <div class="price-name color">Mini Burger</div>
                                        <div class="price-dots">
                                            <span class="separator-dots"></span>
                                        </div>
                                        <div class="price-price">$9.00</div>
                                    </div>
                                    <p class="price-desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt
                                        quos harum officia eaque nobis ut.</p>
                                </div>

                                <div class="price-menu-warp img-hover-block"
                                    data-img="demos/burger/images/menu-items/burgers/double.jpg')}}">
                                    <div class="price-header">
                                        <div class="price-name color">Double Size Burger</div>
                                        <div class="price-dots">
                                            <span class="separator-dots"></span>
                                        </div>
                                        <div class="price-price">$13.00</div>
                                    </div>
                                    <p class="price-desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                        Sunt quos harum officia eaque nobis ut.</p>
                                </div>

                                <div class="price-menu-warp img-hover-block"
                                    data-img="demos/burger/images/menu-items/burgers/turkish.jpg')}}">
                                    <div class="price-header">
                                        <div class="price-name color">Turkish Burger</div>
                                        <div class="price-dots">
                                            <span class="separator-dots"></span>
                                        </div>
                                        <div class="price-price">$15.00</div>
                                    </div>
                                    <p class="price-desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                        Sunt quos harum officia eaque nobis ut.</p>
                                </div>

                                <div class="price-menu-warp img-hover-block"
                                    data-img="demos/burger/images/menu-items/burgers/veggie.jpg')}}">
                                    <div class="price-header">
                                        <div class="price-name color">Garden Veg Burger</div>
                                        <div class="price-dots">
                                            <span class="separator-dots"></span>
                                        </div>
                                        <div class="price-price">$11.00</div>
                                    </div>
                                    <p class="price-desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                        Sunt quos harum officia eaque nobis ut.</p>
                                </div>
                            </div>

                            <div class="col-md-6 center order-1 order-md-2" data-animate="zoomIn faster">
                                <img src="{{ asset('burger/demos/burger/images/others/burger.png') }}" alt="Image"
                                    class="parallax price-img mb-5 mb-md-0" data-top-bottom="transform:translateY(-30px)"
                                    data-bottom-top="transform:translateY(140px)">
                            </div>
                        </div>
                    </div>

                </div>

                <div id="menu-snacks" class="section m-0"
                    style="background: linear-gradient(to bottom, #101010, rgba(16,16,16,0.3),#101010), url({{ asset('/burger/demos/burger/images/others/section-5.jpg') }}) no-repeat center top / cover;">

                    <div class="container">
                        <div class="row align-items-center">
                            <div class="col-md-6 offset-md-1" data-animate="zoomIn faster">
                                <img src="{{ asset('burger/demos/burger/images/others/snacks.png') }}" alt=""
                                    class="parallax price-img mb-5 mb-md-0" data-top-bottom="transform:translateY(-30px)"
                                    data-bottom-top="transform:translateY(140px)">
                            </div>

                            <div class="col-md-5 dark">
                                <div class="bottommargin">
                                    <div class="before-heading font-secondary color mb-3">Our Menu</div>
                                    <div class="d-flex align-items-center dotted-bg">
                                        <img src="{{ asset('burger/demos/burger/images/svg/snacks.svg') }}" alt=""
                                            width="70">
                                        <h1 class="font-border display-4 ls1 fw-bold mb-0 ms-3">Snacks</h1>
                                    </div>
                                </div>

                                <div class="clear"></div>

                                <div class="price-menu-warp img-hover-block"
                                    data-img="demos/burger/images/menu-items/snacks/hot-dog.jpg')}}">
                                    <div class="price-header">
                                        <div class="price-name color">Hot Dog</div>
                                        <div class="price-dots">
                                            <span class="separator-dots"></span>
                                        </div>
                                        <div class="price-price">$9.00</div>
                                    </div>
                                    <p class="price-desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                        Sunt quos harum officia eaque nobis ut.</p>
                                </div>

                                <div class="price-menu-warp img-hover-block"
                                    data-img="{{ asset('burger/demos/burger/images/menu-items/snacks/chicken-wrap.jpeg') }}">
                                    <div class="price-header">
                                        <div class="price-name color">Chicken Wrap</div>
                                        <div class="price-dots">
                                            <span class="separator-dots"></span>
                                        </div>
                                        <div class="price-price">$13.00</div>
                                    </div>
                                    <p class="price-desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                        Sunt quos harum officia eaque nobis ut.</p>
                                </div>

                                <div class="price-menu-warp img-hover-block"
                                    data-img="demos/burger/images/menu-items/snacks/rice-bowl.jpg')}}">
                                    <div class="price-header">
                                        <div class="price-name color">Rice Bowl</div>
                                        <div class="price-dots">
                                            <span class="separator-dots"></span>
                                        </div>
                                        <div class="price-price">$15.00</div>
                                    </div>
                                    <p class="price-desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                        Sunt quos harum officia eaque nobis ut.</p>
                                </div>

                                <div class="price-menu-warp img-hover-block"
                                    data-img="demos/burger/images/menu-items/snacks/salad.jpg')}}">
                                    <div class="price-header">
                                        <div class="price-name color">House Salad</div>
                                        <div class="price-dots">
                                            <span class="separator-dots"></span>
                                        </div>
                                        <div class="price-price">$11.00</div>
                                    </div>
                                    <p class="price-desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                        Sunt quos harum officia eaque nobis ut.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <div id="menu-beverages" class="section mt-0"
                    style="background: linear-gradient(to bottom, #101010, rgba(16,16,16,0.3),#101010), url({{ asset('/burger/demos/burger/images/others/section-4.jpg') }}) no-repeat center top / cover;">

                    <div class="container">
                        <div class="row align-items-center">

                            <div class="col-md-5 dark order-2 order-md-1">
                                <div class="d-flex align-items-center bottommargin dotted-bg">
                                    <img src="{{ asset('burger/demos/burger/images/svg/drinks.svg') }}" alt="" width="50">
                                    <div class="ms-3">
                                        <div class="before-heading font-secondary color">Our Menu</div>
                                        <h1 class="font-border display-4 ls1 fw-bold mb-0">Beverages</h1>
                                    </div>
                                </div>

                                <div class="clear"></div>

                                <div class="price-menu-warp img-hover-block"
                                    data-img="demos/burger/images/menu-items/beverages/americano.jpg')}}">
                                    <div class="price-header">
                                        <div class="price-name color">Americano</div>
                                        <div class="price-dots">
                                            <span class="separator-dots"></span>
                                        </div>
                                        <div class="price-price">$9.00</div>
                                    </div>
                                    <p class="price-desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                        Sunt quos harum officia eaque nobis ut.</p>
                                </div>

                                <div class="price-menu-warp img-hover-block"
                                    data-img="demos/burger/images/menu-items/beverages/cold-coffee.jpg')}}">
                                    <div class="price-header">
                                        <div class="price-name color">Cold Coffee with Ice-cream</div>
                                        <div class="price-dots">
                                            <span class="separator-dots"></span>
                                        </div>
                                        <div class="price-price">$13.00</div>
                                    </div>
                                    <p class="price-desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                        Sunt quos harum officia eaque nobis ut.</p>
                                </div>

                                <div class="price-menu-warp img-hover-block"
                                    data-img="demos/burger/images/menu-items/beverages/cafe-latte.jpg')}}">
                                    <div class="price-header">
                                        <div class="price-name color">Cafe Latte</div>
                                        <div class="price-dots">
                                            <span class="separator-dots"></span>
                                        </div>
                                        <div class="price-price">$15.00</div>
                                    </div>
                                    <p class="price-desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                        Sunt quos harum officia eaque nobis ut.</p>
                                </div>

                                <div class="price-menu-warp img-hover-block"
                                    data-img="demos/burger/images/menu-items/beverages/juice.jpg')}}">
                                    <div class="price-header">
                                        <div class="price-name color">Fresh Juice</div>
                                        <div class="price-dots">
                                            <span class="separator-dots"></span>
                                        </div>
                                        <div class="price-price">$13.00</div>
                                    </div>
                                    <p class="price-desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                        Sunt quos harum officia eaque nobis ut.</p>
                                </div>
                            </div>

                            <div class="col-md-6 offset-md-1 center order-1 order-md-2" data-animate="zoomIn faster">
                                <img src="{{ asset('burger/demos/burger/images/others/beverage-2.png') }}" alt=""
                                    class="parallax price-img mb-5 mb-md-0" data-top-bottom="transform:translateY(-30px)"
                                    data-bottom-top="transform:translateY(140px)">
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <div class="section dark my-0"
                style="padding: 60px 0 120px; background: linear-gradient(to bottom, #101010, transparent), url({{ asset('/burger/demos/burger/images/icon-bg-white.png') }}) repeat center center;">
                <div class="container mx-auto" style="max-width: 1000px">
                    <div class="row align-items-center">
                        <div class="col-md-6 text-center text-md-start">
                            <h2 class="display-4 fw-bold text-uppercase ls1" data-animate="fadeInUp">Very Faaaaast
                                Delivery!</h2>
                            <h4 class="font-secondary text-white-50" data-animate="fadeInUp" data-delay="100"> Food Taste
                                Better when you eat it with your Family</h4>
                            <a href="tel:+112223333"
                                class="button button-large button-rounded button-reveal px-4 tright fw-semibold"><i
                                    class="icon-line-arrow-right"></i><span>Call us Now</span></a>
                        </div>
                        <div class="col-md-6">
                            <div class="slide-img" data-animate="img-to-left">
                                <img src="{{ asset('burger/demos/burger/images/svg/delivery.svg') }}" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div id="contact" class="section page-section dark m-0 pb-0 pb-md-5 slide-img" data-animate="img-to-left"
                style="background: #101010 url({{ asset('/burger/demos/burger/images/icon-bg-white.png') }}) repeat center center;">
                <div class="container pt-3 pb-4">
                    <div class="row">
                        <div class="col-sm-5" style="line-height: 1.7; z-index: 1">
                            <address class="d-block mb-5">
                                <div class="font-secondary h5 mb-2 color">Address:</div>
                                <span class="h6 text-white ls1 fw-normal font-primary">
                                    North America<br>
                                    795 Folsom Ave, Suite 600<br>
                                    San Francisco, CA 94107.
                                </span>
                            </address>
                            <div class="font-secondary h5 mb-2 color">Phone Number:</div>
                            <a href="tel:(91)(8547)632521"
                                class="d-block h6 text-white ls1 fw-normal font-primary mb-5">(00) 8547 632521</a>

                            <div class="font-secondary h5 mb-2 color">Email:</div>
                            <a href="mailto:no-reply@semicolonweb.com?Subject=Hello%20again"
                                class="d-block h6 text-white ls1 fw-normal font-primary mb-5">no-reply@semicolonweb.com</a>

                            <div class="font-secondary h5 mb-2 color">Time:</div>
                            <div class="h6 text-white ls1 fw-normal font-primary">11:00am - 06:00pm</div>
                            <span class="text-uppercase text-white ls1 fw-normal font-primary">Sunday Closed</span>
                        </div>
                    </div>
                </div>
                <div id="map" class="gmap mt-5 mt-md-0" data-address="Melbourne, Australia"
                    data-styles='[{"featureType":"all","elementType":"labels.text.fill","stylers":[{"saturation":36},{"color":"#666666"},{"lightness":40}]},{"featureType":"all","elementType":"labels.text.stroke","stylers":[{"visibility":"on"},{"color":"#000000"},{"lightness":16}]},{"featureType":"all","elementType":"labels.icon","stylers":[{"visibility":"off"}]},{"featureType":"administrative","elementType":"geometry.fill","stylers":[{"color":"#000000"},{"lightness":20}]},{"featureType":"administrative","elementType":"geometry.stroke","stylers":[{"color":"#000000"},{"lightness":17},{"weight":1.2}]},{"featureType":"landscape","elementType":"geometry","stylers":[{"color":"#000000"},{"lightness":10}]},{"featureType":"poi","elementType":"geometry","stylers":[{"color":"#000000"},{"lightness":21}]},{"featureType":"road.highway","elementType":"geometry.fill","stylers":[{"color":"#000000"},{"lightness":17}]},{"featureType":"road.highway","elementType":"geometry.stroke","stylers":[{"color":"#000000"},{"lightness":29},{"weight":0.2}]},{"featureType":"road.arterial","elementType":"geometry","stylers":[{"color":"#000000"},{"lightness":18}]},{"featureType":"road.local","elementType":"geometry","stylers":[{"color":"#000000"},{"lightness":16}]},{"featureType":"transit","elementType":"geometry","stylers":[{"color":"#000000"},{"lightness":19}]},{"featureType":"water","elementType":"geometry","stylers":[{"color":"#000000"},{"lightness":17}]}]'
                    data-zoom="14" data-icon='{image: "demos/burger/images/svg/hamburger-marker.svg' )}}",iconsize: [40,
                    36],iconanchor: [40,36]}' data-maptype="ROADMAP"
                    data-content='<div class="text-dark" style="width: 300px;"><h4 class="text-dark" style="margin-bottom: 8px;">Hi, we are <span>Envato</span></h4><p class="nobottommargin">Our mission is to help people to <strong>earn</strong> and to <strong>learn</strong> online. We operate <strong>marketplaces</strong> where hundreds of thousands of people buy and sell digital goods every day, and a network of educational blogs where millions learn <strong>creative skills</strong>.</p></div>'>
                </div>

            </div>

        </div>

    </section><!-- #content end -->

@endsection