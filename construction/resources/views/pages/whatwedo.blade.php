@extends('layout.main')
@section('content')
    <!-- Page Title
      ============================================= -->
    <section id="page-title" class="page-title-parallax page-title-dark"
        style="background: url({{asset('/construction/demos/construction/images/slider/1.jpg')}}) bottom center / cover; padding: 100px 0;"
        data-center="background-position: 0px -100px;" data-top-bottom="background-position:0px 100px;">

        <div class="container clearfix">
            <h1>What We Do</h1>
            <span>A Short Page Title Tagline</span>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">What We Do</li>
            </ol>
        </div>

    </section><!-- #page-title end -->

    <!-- Content
      ============================================= -->
    <section id="content">
        <div class="content-wrap">

            <div class="section header-stick">
                <h2 class="center mb-0 ls1">Some of Our Esteemed Projects:</h2>
            </div>

            <div class="container clearfix">

                <div class="row col-mb-50 mb-0">
                    <div class="col-md-6 col-lg-4">
                        <div class="feature-box fbox-plain">
                            <div class="fbox-icon">
                                <a href="#"><img src="{{asset('/construction/demos/construction/images/icons/building.png')}}"
                                        alt="Concrete Developments"></a>
                            </div>
                            <div class="fbox-content">
                                <h3>Concrete Developments</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem minima, facere distinctio
                                    placeat.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="feature-box fbox-plain">
                            <div class="fbox-icon">
                                <a href="#"><img src="{{asset('/construction/demos/construction/images/icons/bank.png')}}"
                                        alt="Finance Assistance"></a>
                            </div>
                            <div class="fbox-content">
                                <h3>Finance Assistance</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem minima, facere distinctio
                                    placeat.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="feature-box fbox-plain">
                            <div class="fbox-icon">
                                <a href="#"><img src="{{asset('/construction/demos/construction/images/icons/drawer.png')}}"
                                        alt="Interiorly Designed"></a>
                            </div>
                            <div class="fbox-content">
                                <h3>Interiorly Designed</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem minima, facere distinctio
                                    placeat.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="feature-box fbox-plain">
                            <div class="fbox-icon">
                                <a href="#"><img src="{{asset('/construction/demos/construction/images/icons/paper-money.png')}}"
                                        alt="Cost Effective Solutions"></a>
                            </div>
                            <div class="fbox-content">
                                <h3>Cost Effective Solutions</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem minima, facere distinctio
                                    placeat.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="feature-box fbox-plain">
                            <div class="fbox-icon">
                                <a href="#"><img src="{{asset('/construction/demos/construction/images/icons/traffic-cone.png')}}"
                                        alt="Smart Builders"></a>
                            </div>
                            <div class="fbox-content">
                                <h3>Smart Builders</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem minima, facere distinctio
                                    placeat.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="feature-box fbox-plain">
                            <div class="fbox-icon">
                                <a href="#"><img src="{{asset('/construction/demos/construction/images/icons/paint-brush.png')}}"
                                        alt="Quality Infrastructure"></a>
                            </div>
                            <div class="fbox-content">
                                <h3>Quality Infrastructure</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem minima, facere distinctio
                                    placeat.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row col-mb-50">
                    <div class="col-sm-6 col-lg-4">
                        <div class="feature-box media-box">
                            <div class="fbox-media">
                                <img class="rounded" src="{{asset('/construction/demos/construction/images/services/1.jpg')}}"
                                    alt="Why choose Us?">
                            </div>
                            <div class="fbox-content px-0">
                                <h3>Skilled Professionals.<span class="subtitle">Your Property in Good Hands.</span>
                                </h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi rem, facilis nobis
                                    voluptatum est voluptatem accusamus molestiae eaque perspiciatis mollitia.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6 col-lg-4">
                        <div class="feature-box media-box">
                            <div class="fbox-media">
                                <img class="rounded" src="{{asset('/construction/images/services/1.jpg')}}" alt="Effective Planning">
                            </div>
                            <div class="fbox-content px-0">
                                <h3>Effective Planning.<span class="subtitle">Construction Process Organized.</span>
                                </h3>
                                <p>Porro repellat vero sapiente amet vitae quibusdam necessitatibus consectetur, labore
                                    totam. Accusamus perspiciatis asperiores labore esse.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6 col-lg-4">
                        <div class="feature-box media-box">
                            <div class="fbox-media">
                                <img class="rounded" src="{{asset('/construction/demos/construction/images/services/2.jpg')}}"
                                    alt="Why choose Us?">
                            </div>
                            <div class="fbox-content px-0">
                                <h3>Risk Management.<span class="subtitle">We have got you Covered.</span></h3>
                                <p>Quos, non, esse eligendi ab accusantium voluptatem. Maxime eligendi beatae, atque tempora
                                    ullam. Vitae delectus quia, consequuntur rerum quo.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6 col-lg-4">
                        <div class="feature-box media-box">
                            <div class="fbox-media">
                                <img class="rounded" src="{{asset('/construction/demos/construction/images/services/4.jpg')}}"
                                    alt="Why choose Us?">
                            </div>
                            <div class="fbox-content px-0">
                                <h3>Design &amp; Build Package.<span class="subtitle">Your Property in Good
                                        Hands.</span></h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi rem, facilis nobis
                                    voluptatum est voluptatem accusamus molestiae eaque perspiciatis mollitia.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6 col-lg-4">
                        <div class="feature-box media-box">
                            <div class="fbox-media">
                                <img class="rounded" src="{{asset('/construction/demos/construction/images/services/5.jpg')}}"
                                    alt="Effective Planning">
                            </div>
                            <div class="fbox-content px-0">
                                <h3>Architecture Planning.<span class="subtitle">Construction Process
                                        Organized.</span></h3>
                                <p>Porro repellat vero sapiente amet vitae quibusdam necessitatibus consectetur, labore
                                    totam. Accusamus perspiciatis asperiores labore esse.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6 col-lg-4">
                        <div class="feature-box media-box">
                            <div class="fbox-media">
                                <img class="rounded" src="{{asset('/construction/demos/construction/images/services/3.jpg')}}"
                                    alt="Why choose Us?">
                            </div>
                            <div class="fbox-content px-0">
                                <h3>General Maintenance.<span class="subtitle">We have got you Covered.</span></h3>
                                <p>Quos, non, esse eligendi ab accusantium voluptatem. Maxime eligendi beatae, atque tempora
                                    ullam. Vitae delectus quia, consequuntur rerum quo.</p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section><!-- #content end -->

@endsection
