@extends('layout.main')
@section('content')
    <!-- Slider / Hero
      ============================================= -->
    <div id="slider" class="slider-element dark py-0"
        style="background-size: cover; background-image: url({{asset('/covidcare/demos/covid-care/images/page-title/about.jpg')}}); background-position: center center; background-repeat: no-repeat;">

        <div class="container">
            <div class="row text-center py-5 min-vh-md-75 justify-content-center align-items-center">
                <div class="col-lg-6">
                    <h5 class="mb-1 text-uppercase ls3 text-white-50 font-body">About Us</h5>
                    <h2 class="display-3 fw-bolder ls3 font-display mb-5">Right Choice<br>of Careness</h2>
                    <a href="#"
                        class="button button-large rounded-pill bg-color-2 button-light text-dark ls0 fw-medium m-0">Sign Up
                        Now</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Content
      ============================================= -->
    <section id="content">
        <div class="content-wrap pb-0">

            <div class="container py-5">

                <!-- Tab
         ============================================= -->
                <div class="row justify-content-between">
                    <div class="col-lg-4 col-md-5 mb-5 mb-md-0">
                        <div class="nav flex-column nav-pills" id="canvas-tabs-tab" role="tablist"
                            aria-orientation="vertical">
                            <a class="nav-link active" id="canvas-tabs-1-tab" data-bs-toggle="pill" href="#canvas-tabs-1"
                                role="tab" aria-controls="canvas-tabs-1" aria-selected="true">
                                <h3><span class="color-2 font-body me-1">1.</span> Doctors Video Consultation</h3>
                                <p>Lorem ipsum dolor, sit amet, consectetur adipisicing elit. Dicta, fugiat itaque eaque!
                                    Explicabo voluptatibus enim.</p>
                            </a>
                            <a class="nav-link" id="canvas-tabs-2-tab" data-bs-toggle="pill" href="#canvas-tabs-2"
                                role="tab" aria-controls="canvas-tabs-2" aria-selected="false">
                                <h3><span class="color-2 font-body me-1">2.</span> Dietician Consultation</h3>
                                <p>Interactively cultivate multidisciplinary sources with fully researched channels.
                                    Globally innovate.</p>
                            </a>
                            <a class="nav-link" id="canvas-tabs-3-tab" data-bs-toggle="pill" href="#canvas-tabs-3"
                                role="tab" aria-controls="canvas-tabs-3" aria-selected="false">
                                <h3><span class="color-2 font-body me-1">3.</span> Nurse Assistance</h3>
                                <p>Professionally grow granular human capital after timely infomediaries. Uniquely
                                    plagiarize.</p>
                            </a>
                            <a class="nav-link" id="canvas-tabs-4-tab" data-bs-toggle="pill" href="#canvas-tabs-4"
                                role="tab" aria-controls="canvas-tabs-4" aria-selected="false">
                                <h3><span class="color-2 font-body me-1">4.</span> Home Delivery Medicine</h3>
                                <p>Globally engineer premier channels with alternative applications. Synergistically target
                                    strategic.</p>
                            </a>
                            <a class="nav-link" id="canvas-tabs-5-tab" data-bs-toggle="pill" href="#canvas-tabs-5"
                                role="tab" aria-controls="canvas-tabs-5" aria-selected="false">
                                <h3><span class="color-2 font-body me-1">5.</span> 24/7 Support</h3>
                                <p>Interactively cultivate multidisciplinary sources with fully researched channels.
                                    Globally innovate.</p>
                            </a>
                            <a href="https://www.youtube.com/watch?v=P3Huse9K6Xs"
                                class="button button-large rounded-pill bg-color-2 button-light text-dark text-center ls0 fw-medium ms-0 mt-3 w-auto"
                                data-lightbox="iframe"><i class="icon-play-circle me-1"
                                    style="position: relative; top: 1px; margin-right: 5px;"></i> Watch Intro Video</a>
                        </div>
                    </div>
                    <div class="col-md-7">
                        <div class="tab-content" id="canvas-tabContent">
                            <div class="tab-pane show active text-center" id="canvas-tabs-1" role="tabpanel"
                                aria-labelledby="canvas-tabs-1-tab">
                                <img src="{{asset('covidcare/demos/covid-care/images/illustration/doctors.svg')}}" alt="Image" height="350">
                                <div class="clear"></div>
                                <div class="d-block text-start mt-5 mw-xs">
                                    <h3 class="mb-3">Doctors Video Consultation</h3>
                                    <p class="mb-0">Phosfluorescently simplify strategic technologies with
                                        progressive total linkage. Objectively drive accurate products with economically
                                        sound data. Professionally enable global e-markets whereas bleeding-edge niche
                                        markets.</p>
                                </div>
                            </div>
                            <div class="tab-pane text-center" id="canvas-tabs-2" role="tabpanel"
                                aria-labelledby="canvas-tabs-2-tab">
                                <img src="{{asset('covidcare/demos/covid-care/images/illustration/diet.jpg')}}" alt="Image" height="350">
                                <div class="d-block text-start mt-5 mw-xs">
                                    <h3 class="mb-3">Dietician Consultation</h3>
                                    <p class="mb-0">Quickly conceptualize cutting-edge supply chains through
                                        highly efficient bandwidth. Compellingly repurpose vertical partnerships vis-a-vis
                                        strategic services. Synergistically productize error-free users whereas.</p>
                                </div>
                            </div>
                            <div class="tab-pane text-center" id="canvas-tabs-3" role="tabpanel"
                                aria-labelledby="canvas-tabs-3-tab">
                                <img src="{{asset('covidcare/demos/covid-care/images/illustration/nurse.png')}}" alt="Image" height="350">
                                <div class="d-block text-start mt-5 mw-xs">
                                    <h3 class="mb-3">Nurse Assistance</h3>
                                    <p class="mb-0">Rapidiously redefine out-of-the-box methods of empowerment
                                        after turnkey materials. Professionally aggregate goal-oriented internal or
                                        "organic" sources without virtual value. Progressively disintermediate functional
                                        products after.</p>
                                </div>
                            </div>
                            <div class="tab-pane text-center" id="canvas-tabs-4" role="tabpanel"
                                aria-labelledby="canvas-tabs-4-tab">
                                <img src="{{asset('covidcare/demos/covid-care/images/illustration/delivery.svg')}}" alt="Image" height="350">
                                <div class="d-block text-start mt-5 mw-xs">
                                    <h3 class="mb-3">Home Delivery Medicine</h3>
                                    <p class="mb-0">Appropriately fabricate inexpensive schemas after
                                        interdependent intellectual capital. Dynamically improvements for impactful
                                        strategic theme areas. Seamlessly strategize superior communities after
                                        collaborative.</p>
                                </div>
                            </div>
                            <div class="tab-pane text-center" id="canvas-tabs-5" role="tabpanel"
                                aria-labelledby="canvas-tabs-5-tab">
                                <img src="{{asset('covidcare/demos/covid-care/images/illustration/support.svg')}}" alt="Image" height="320">
                                <div class="d-block text-start mt-5 mw-xs">
                                    <h3 class="mb-3">24/7 Support &amp; Live Chat</h3>
                                    <p class="mb-0">Collaboratively extend multifunctional e-tailers and
                                        resource-leveling manufactured products. Synergistically mesh frictionless models
                                        whereas extensible strategic theme areas. Assertively visualize progressive
                                        scenarios without ethical products.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <!-- Clients Gallery
        ============================================= -->
            <div class="section" style="background-color: rgba(15,100,88,.15); padding: 80px 0">
                <div class="container">
                    <div class="mw-md mx-auto">
                        <div class="row align-items-end mb-1">
                            <div class="col-md-3 col-6">
                                <img src="{{asset('covidcare/demos/covid-care/images/clients/1.jpg')}}" alt="image"
                                    class="border border-width-3 border-light">
                            </div>
                            <div class="col-md-4 col-6">
                                <img src="{{asset('covidcare/demos/covid-care/images/clients/2.jpg')}}" alt="image"
                                    class="border border-width-3 border-light">
                            </div>
                            <div class="col-md-5 my-4 my-md-0">
                                <h3 class="mb-3 color h1">Some of Our Happy Clients</h3>
                                <p class="mb-0">Phosfluorescently simplify strategic technologies with progressive
                                    rerum dolores aperiam amet enim total linkage strategic.</p>
                            </div>
                        </div>
                        <div class="clear"></div>
                        <div class="row mt-4">
                            <div class="col-md-6 col-6">
                                <img src="{{asset('covidcare/demos/covid-care/images/clients/3.jpg')}}" alt="image"
                                    class="border border-width-3 border-light">
                            </div>
                            <div class="col-md-6 col-6">
                                <img src="{{asset('covidcare/demos/covid-care/images/clients/4.jpg')}}" alt="image"
                                    class="border border-width-3 border-light">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Download App Section
        ============================================= -->
            <div class="section py-md-0 section-mobile bg-color-2"
                style="background: url({{asset('/covidcare/demos/covid-care/images/illustration/bg-pattern.svg')}}) no-repeat center left / contain;">
                <div class="container">
                    <div class="row align-items-center justify-content-between">

                        <div class="col-lg-5 col-md-6 py-5 py-lg-0">
                            <h3 class="display-3 color fw-normal font-display mb-5">Download Our COVID Care App.</h3>
                            <p class="text-large color">Progressively strategize just in time scenarios and compelling
                                results. Intrinsicly parallel task extensive systems whereas distinctive catalysts for
                                scenarios and compelling results change.</p>
                            <div>
                                <a href="#"><img src="{{asset('covidcare/demos/articles/images/appstore.png')}}" alt="Image" height="54"
                                        class="mt-3"></a>
                                <a href="#"><img src="{{asset('covidcare/demos/articles/images/googleplay.png')}}" alt="Image"
                                        class="ms-xl-3 ms-lg-1 mt-3 ms-0 " height="54"></a>
                            </div>
                        </div>

                        <div class="col-lg-6 col-md-6 mt-5 mt-sm-0">
                            <div class="d-none d-lg-flex">
                                <img src="{{asset('covidcare/demos/covid-care/images/iphone-2.png')}}" class="fast" alt="Image"
                                    style="height: 600px" data-animate="fadeInUp" data-delay="200">
                                <img src="{{asset('covidcare/demos/covid-care/images/iphone-1.png')}}" class="fast" alt="Image"
                                    style="height: 600px" data-animate="fadeInUp">
                            </div>
                            <img src="{{asset('covidcare/demos/covid-care/images/iphone.png')}}" alt="Image"
                                class="d-block d-lg-none px-5 px-sm-0 p-md-5">
                        </div>

                    </div>
                </div>
            </div>

        </div>
    </section><!-- #content end -->

@endsection
