@extends('layout.main')
@section('content')

    <!-- Page Title
      ============================================= -->
    <section id="page-title" class="page-title-parallax page-title-dark page-title-video include-header include-topbar"
        style="padding: 80px 0">

        <div class="video-wrap">
            <video poster="{{asset('travel/demos/travel/images/videos/1.jpg')}}" preload="auto" loop autoplay muted>
                <source src="{{asset('travel/demos/travel/images/videos/1.mp4')}}" type='video/mp4' />
            </video>
        </div>

        <div class="container dark clearfix">
            <div class="heading-block center topmargin border-bottom-0">
                <h3 data-animate="fadeInUp">Choose Your Best Holiday Destination</h3>
            </div>

            <form action="#" method="post" class="mx-auto landing-wide-form clearfix mb-0" style="max-width: 1000px">
                <div class="row">
                    <div class="col-lg-3 col-md-4">
                        <input type="text" class="form-control form-control-lg not-dark" value="" placeholder="From">
                    </div>
                    <div class="col-lg-3 col-md-4">
                        <input type="email" class="form-control form-control-lg not-dark" value="" placeholder="Destination">
                    </div>
                    <div class="col-lg-3 col-md-4">
                        <div class="travel-date-group input-daterange">
                            <input type="text" value="" class="form-control form-control-lg not-dark text-start mnth"
                                name="end" placeholder="mm-yyyy">
                        </div>
                    </div>
                    <div class="w-100 topmargin d-none d-md-block d-lg-none"></div>
                    <div class="col-lg-3 clearfix">
                        <button class="button btn-lg button-rounded w-100 m-0" value="submit" type="submit"
                            style="height: 46px">Search Holiday</button>
                    </div>
                </div>
            </form>
        </div>

    </section><!-- #page-title end -->

    <!-- Content
      ============================================= -->
    <section id="content">
        <div class="content-wrap py-0">

            <div class="section mt-0">
                <div class="container clearfix">

                    <div class="heading-block center border-bottom-0 mb-0">
                        <span class="before-heading color">Most Popular Holiday Packages for You</span>
                        <h2>Tailor made Packages for you</h2>
                    </div>

                </div>
            </div>

            <div class="container bottommargin-lg clearfix">
                <div class="row col-mb-50">
                    <div class="col-lg-8">
                        <div class="heading-block bottommargin-sm border-bottom-0">
                            <h4>Today's Top Deals</h4>
                        </div>
                        <div class="fslider flex-thumb-grid grid-6 travel-slider" data-animation="fade" data-arrows="true"
                            data-thumbs="true">
                            <div class="flexslider">
                                <div class="slider-wrap">
                                    <div class="slide"
                                        data-thumb="{{asset('travel/demos/travel/images/packages/places/thumbs/europe.jpg')}}">
                                        <a href="#">
                                            <img src="{{asset('travel/demos/travel/images/packages/places/europe.jpg')}}" alt="Image">
                                            <div class="bg-overlay">
                                                <div
                                                    class="bg-overlay-content text-overlay-mask dark desc-sm align-items-end justify-content-start">
                                                    <div class="portfolio-desc">
                                                        <h3>Europe-Hot Deals</h3>
                                                        <span>6 Nights &middot; Starting from $2999</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="slide"
                                        data-thumb="{{asset('travel/demos/travel/images/packages/places/thumbs/thailand.jpg')}}">
                                        <a href="#">
                                            <img src="{{asset('travel/demos/travel/images/packages/places/thailand.jpg')}}" alt="Image">
                                            <div class="bg-overlay">
                                                <div
                                                    class="bg-overlay-content text-overlay-mask dark desc-sm align-items-end justify-content-start">
                                                    <div class="portfolio-desc">
                                                        <h3>Thailand</h3>
                                                        <span>5 Nights &middot; Starting from $2999</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="slide"
                                        data-thumb="{{asset('travel/demos/travel/images/packages/places/thumbs/bali.jpg')}}">
                                        <a href="#">
                                            <img src="{{asset('travel/demos/travel/images/packages/places/bali.jpg')}}" alt="Image">
                                            <div class="bg-overlay">
                                                <div
                                                    class="bg-overlay-content text-overlay-mask dark desc-sm align-items-end justify-content-start">
                                                    <div class="portfolio-desc">
                                                        <h3>Indonesia</h3>
                                                        <span>7 Days &middot; Starting from $69</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="slide"
                                        data-thumb="{{asset('travel/demos/travel/images/packages/places/thumbs/dubai.jpg')}}">
                                        <a href="#">
                                            <img src="{{asset('travel/demos/travel/images/packages/places/dubai.jpg')}}" alt="Image">
                                            <div class="bg-overlay">
                                                <div
                                                    class="bg-overlay-content text-overlay-mask dark desc-sm align-items-end justify-content-start">
                                                    <div class="portfolio-desc">
                                                        <h3>Dubai</h3>
                                                        <span>Starting from $89</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="slide"
                                        data-thumb="{{asset('travel/demos/travel/images/packages/places/thumbs/germany.jpg')}}">
                                        <a href="#">
                                            <img src="{{asset('travel/demos/travel/images/packages/places/germany.jpg')}}" alt="Image">
                                            <div class="bg-overlay">
                                                <div
                                                    class="bg-overlay-content text-overlay-mask dark desc-sm align-items-end justify-content-start">
                                                    <div class="portfolio-desc">
                                                        <h3>Germany</h3>
                                                        <span>8 Days</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="slide"
                                        data-thumb="{{asset('travel/demos/travel/images/packages/places/thumbs/australia.jpg')}}">
                                        <a href="#">
                                            <img src="{{asset('travel/demos/travel/images/packages/places/australia.jpg')}}" alt="Image">
                                            <div class="bg-overlay">
                                                <div
                                                    class="bg-overlay-content text-overlay-mask dark desc-sm align-items-end justify-content-start">
                                                    <div class="portfolio-desc">
                                                        <h3>Australia</h3>
                                                        <span>9 Days &middot; Starting from $129.99</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <div class="heading-block bottommargin-sm border-bottom-0">
                            <h4>Popular Destinations</h4>
                        </div>

                        <div class="posts-sm row col-mb-30">
                            <div class="entry col-sm-6 col-lg-12">
                                <div class="grid-inner row align-items-center g-0">
                                    <div class="col-auto">
                                        <div class="entry-image">
                                            <a href="#"><img src="{{asset('travel/images/magazine/small/1.jpg')}}" alt="Image"></a>
                                        </div>
                                    </div>
                                    <div class="col ps-3">
                                        <div class="entry-title">
                                            <h4><a href="#">7 Nights/8 Days Europe</a></h4>
                                        </div>
                                        <div class="entry-meta">
                                            <ul>
                                                <li><span class="color">$599</span> onwards</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="entry col-sm-6 col-lg-12">
                                <div class="grid-inner row align-items-center g-0">
                                    <div class="col-auto">
                                        <div class="entry-image">
                                            <a href="#"><img src="{{asset('travel/images/magazine/small/2.jpg')}}" alt="Image"></a>
                                        </div>
                                    </div>
                                    <div class="col ps-3">
                                        <div class="entry-title">
                                            <h4><a href="#">4 Nights/5 Days Thailand</a></h4>
                                        </div>
                                        <div class="entry-meta">
                                            <ul>
                                                <li><span class="color">$399</span> onwards</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="entry col-sm-6 col-lg-12">
                                <div class="grid-inner row align-items-center g-0">
                                    <div class="col-auto">
                                        <div class="entry-image">
                                            <a href="#"><img src="{{asset('travel/images/magazine/small/3.jpg')}}" alt="Image"></a>
                                        </div>
                                    </div>
                                    <div class="col ps-3">
                                        <div class="entry-title">
                                            <h4><a href="#">11 Nights/12 Days America</a></h4>
                                        </div>
                                        <div class="entry-meta">
                                            <ul>
                                                <li><span class="color">$1299</span> onwards</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="entry col-sm-6 col-lg-12">
                                <div class="grid-inner row align-items-center g-0">
                                    <div class="col-auto">
                                        <div class="entry-image">
                                            <a href="#"><img src="{{asset('travel/images/magazine/small/4.jpg')}}" alt="Image"></a>
                                        </div>
                                    </div>
                                    <div class="col ps-3">
                                        <div class="entry-title">
                                            <h4><a href="#">14 Nights/15 Days New Zealand</a></h4>
                                        </div>
                                        <div class="entry-meta">
                                            <ul>
                                                <li><span class="color">$1999</span> onwards</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="entry col-sm-6 col-lg-12">
                                <div class="grid-inner row align-items-center g-0">
                                    <div class="col-auto">
                                        <div class="entry-image">
                                            <a href="#"><img src="{{asset('travel/images/magazine/small/5.jpg')}}" alt="Image"></a>
                                        </div>
                                    </div>
                                    <div class="col ps-3">
                                        <div class="entry-title">
                                            <h4><a href="#">4 Nights/5 Days Thailand</a></h4>
                                        </div>
                                        <div class="entry-meta">
                                            <ul>
                                                <li><span class="color">$399</span> onwards</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="entry col-sm-6 col-lg-12">
                                <div class="grid-inner row align-items-center g-0">
                                    <div class="col-auto">
                                        <div class="entry-image">
                                            <a href="#"><img src="{{asset('travel/images/magazine/small/6.jpg')}}" alt="Image"></a>
                                        </div>
                                    </div>
                                    <div class="col ps-3">
                                        <div class="entry-title">
                                            <h4><a href="#">7 Nights/8 Days Europe</a></h4>
                                        </div>
                                        <div class="entry-meta">
                                            <ul>
                                                <li><span class="color">$599</span> onwards</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <div class="section m-0">
                <div class="container clearfix">
                    <div class="heading-block center mb-0 border-bottom-0">
                        <h3>Popular Destinations</h3>
                    </div>
                </div>
            </div>

            <div id="portfolio" class="portfolio row grid-container portfolio-overlay-open g-0">

                <article class="portfolio-item col-12 col-sm-6 col-md-4 col-lg-3 pf-media pf-icons">
                    <div class="grid-inner">
                        <div class="portfolio-image">
                            <a href="portfolio-single.html">
                                <img src="{{asset('travel/demos/travel/images/packages/1.jpg')}}" alt="Beach Activities">
                                <div class="bg-overlay">
                                    <div class="bg-overlay-content dark flex-column">
                                        <div class="portfolio-desc pt-0 center">
                                            <h3>Beach Activities</h3>
                                        </div>
                                    </div>
                                    <div class="bg-overlay-bg dark op-ts op-05" data-hover-animate="op-1"
                                        data-hover-animate-out="op-05"></div>
                                </div>
                            </a>
                        </div>
                    </div>
                </article>

                <article class="portfolio-item col-12 col-sm-6 col-md-4 col-lg-3 pf-illustrations">
                    <div class="grid-inner">
                        <div class="portfolio-image">
                            <a href="portfolio-single.html">
                                <img src="{{asset('travel/demos/travel/images/packages/2.jpg')}}" alt="Romantic Getaways">
                                <div class="bg-overlay">
                                    <div class="bg-overlay-content dark flex-column">
                                        <div class="portfolio-desc pt-0 center">
                                            <h3>Romantic Getaways</h3>
                                        </div>
                                    </div>
                                    <div class="bg-overlay-bg dark op-ts op-05" data-hover-animate="op-1"
                                        data-hover-animate-out="op-05"></div>
                                </div>
                            </a>
                        </div>
                    </div>
                </article>

                <article class="portfolio-item col-12 col-sm-6 col-md-4 col-lg-3 pf-graphics pf-uielements">
                    <div class="grid-inner">
                        <div class="portfolio-image">
                            <a href="#">
                                <img src="{{asset('travel/demos/travel/images/packages/3.jpg')}}" alt="Mountain Madness">
                                <div class="bg-overlay">
                                    <div class="bg-overlay-content dark flex-column">
                                        <div class="portfolio-desc pt-0 center">
                                            <h3>Mountain Madness</h3>
                                        </div>
                                    </div>
                                    <div class="bg-overlay-bg dark op-ts op-05" data-hover-animate="op-1"
                                        data-hover-animate-out="op-05"></div>
                                </div>
                            </a>
                        </div>
                    </div>
                </article>

                <article class="portfolio-item col-12 col-sm-6 col-md-4 col-lg-3 pf-icons pf-illustrations">
                    <div class="grid-inner">
                        <div class="portfolio-image">
                            <a href="portfolio-single.html">
                                <img src="{{asset('travel/demos/travel/images/packages/4.jpg')}}" alt="Active Explorer">
                                <div class="bg-overlay">
                                    <div class="bg-overlay-content dark flex-column">
                                        <div class="portfolio-desc pt-0 center">
                                            <h3>Active Explorer</h3>
                                        </div>
                                    </div>
                                    <div class="bg-overlay-bg dark op-ts op-05" data-hover-animate="op-1"
                                        data-hover-animate-out="op-05"></div>
                                </div>
                            </a>
                        </div>
                    </div>
                </article>

                <article class="portfolio-item col-12 col-sm-6 col-md-4 col-lg-3 pf-uielements pf-media">
                    <div class="grid-inner">
                        <div class="portfolio-image">
                            <a href="portfolio-single.html">
                                <img src="{{asset('travel/demos/travel/images/packages/5.jpg')}}" alt="Icy Challenge">
                                <div class="bg-overlay">
                                    <div class="bg-overlay-content dark flex-column">
                                        <div class="portfolio-desc pt-0 center">
                                            <h3>Icy Challenge</h3>
                                        </div>
                                    </div>
                                    <div class="bg-overlay-bg dark op-ts op-05" data-hover-animate="op-1"
                                        data-hover-animate-out="op-05"></div>
                                </div>
                            </a>
                        </div>
                    </div>
                </article>

                <article class="portfolio-item col-12 col-sm-6 col-md-4 col-lg-3 pf-graphics pf-illustrations">
                    <div class="grid-inner">
                        <div class="portfolio-image">
                            <a href="portfolio-single.html">
                                <img src="{{asset('travel/demos/travel/images/packages/6.jpg')}}" alt="Hill Trekking">
                                <div class="bg-overlay">
                                    <div class="bg-overlay-content dark flex-column">
                                        <div class="portfolio-desc pt-0 center">
                                            <h3>Hill Trekking</h3>
                                        </div>
                                    </div>
                                    <div class="bg-overlay-bg dark op-ts op-05" data-hover-animate="op-1"
                                        data-hover-animate-out="op-05"></div>
                                </div>
                            </a>
                        </div>
                    </div>
                </article>

                <article class="portfolio-item col-12 col-sm-6 col-md-4 col-lg-3 pf-uielements pf-icons">
                    <div class="grid-inner">
                        <div class="portfolio-image">
                            <a href="portfolio-single-video.html">
                                <img src="{{asset('travel/demos/travel/images/packages/7.jpg')}}" alt="Forest Camping">
                                <div class="bg-overlay">
                                    <div class="bg-overlay-content dark flex-column">
                                        <div class="portfolio-desc pt-0 center">
                                            <h3>Forest Camping</h3>
                                        </div>
                                    </div>
                                    <div class="bg-overlay-bg dark op-ts op-05" data-hover-animate="op-1"
                                        data-hover-animate-out="op-05"></div>
                                </div>
                            </a>
                        </div>
                    </div>
                </article>

                <article class="portfolio-item col-12 col-sm-6 col-md-4 col-lg-3 pf-graphics">
                    <div class="grid-inner">
                        <div class="portfolio-image">
                            <a href="portfolio-single.html">
                                <img src="{{asset('travel/demos/travel/images/packages/8.jpg')}}" alt="River Rafting">
                                <div class="bg-overlay">
                                    <div class="bg-overlay-content dark flex-column">
                                        <div class="portfolio-desc pt-0 center">
                                            <h3>River Rafting</h3>
                                        </div>
                                    </div>
                                    <div class="bg-overlay-bg dark op-ts op-05" data-hover-animate="op-1"
                                        data-hover-animate-out="op-05"></div>
                                </div>
                            </a>
                        </div>
                    </div>
                </article>

            </div>

        </div>
    </section><!-- #content end -->

@endsection
