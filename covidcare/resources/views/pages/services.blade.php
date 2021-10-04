@extends('layout.main')
@section('content')
    <!-- Slider / Hero
      ============================================= -->
    <div id="slider" class="slider-element dark p-0"
        style="background-size: cover; background-image: url({{asset('/covidcare/demos/covid-care/images/page-title/services.jpg')}}); background-position: center center; background-repeat: no-repeat;">

        <div class="container">
            <div class="row text-center py-5 min-vh-md-75 justify-content-center align-items-center">
                <div class="col-lg-6">
                    <h5 class="mb-1 text-uppercase ls3 text-white-50 font-body">What We Do</h5>
                    <h2 class="display-3 fw-bolder ls3 font-display mb-0">Services</h2>
                </div>
            </div>
        </div>
    </div>

    <!-- Content
      ============================================= -->
    <section id="content">
        <div class="content-wrap p-0">

            <div class="container">
                <!-- Section Mobile
         ============================================= -->
                <div class="row justify-content-between align-items-center mt-6 col-mb-50">
                    <div class="col-lg-5 order-lg-last">
                        <h3 class="display-3 color fw-normal font-display mb-5">Get 24/7 care right from your Device</h3>

                        <p class="text-large color">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequatur et
                            sequi atque <a href="#" class="bg-color-50 px-1"><u>expedita perferendis tenetur modi</u></a>
                            quia, veniam voluptas repellat mollitia laboriosam nulla sit perspiciatis reprehenderit itaque
                            distinctio facilis amet vel nesciunt quaerat.</p>

                        <a href="#"
                            class="color fw-bold border-bottom border-width-2 border-color me-2 text-capitalize">Learn more
                            about our App</a><i class="icon-chevron-right icon-stacked text-smaller color"></i>
                    </div>
                    <div class="col-lg-5">
                        <img src="{{asset('covidcare/demos/covid-care/images/device.png')}}" alt="Phone call" class="rounded">
                    </div>
                </div>

                <!-- Prevention of Covid-19
         ============================================= -->
                <div class="row justify-content-between align-items-center my-6 col-mb-50">
                    <div class="col-lg-5">
                        <h3 class="display-3 color fw-normal font-display mb-5">Prevention of Covid-19</h3>

                        <p class="text-large color">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequatur
                            veniam voluptas repellat mollitia laboriosam nulla sit perspiciatis.</p>

                        <div class="feature-box fbox-sm mb-2">
                            <div class="fbox-icon">
                                <i class="bg-color-50 color icon-head-side-mask"></i>
                            </div>
                            <div class="fbox-content">
                                <h3 class="nott text-larger fw-normal mb-2">Wear a Mask</h3>
                            </div>
                        </div>

                        <div class="feature-box fbox-sm mb-2">
                            <div class="fbox-icon">
                                <i class="bg-color-50 color icon-head-side-virus"></i>
                            </div>
                            <div class="fbox-content">
                                <h3 class="nott text-larger fw-normal mb-2">Social Distancing</h3>
                            </div>
                        </div>

                        <div class="feature-box fbox-sm mb-2">
                            <div class="fbox-icon">
                                <i class="bg-color-50 color icon-line-home"></i>
                            </div>
                            <div class="fbox-content">
                                <h3 class="nott text-larger fw-normal mb-2">Stay at Home</h3>
                            </div>
                        </div>

                        <div class="feature-box fbox-sm mb-2">
                            <div class="fbox-icon">
                                <i class="bg-color-50 color icon-pump-soap"></i>
                            </div>
                            <div class="fbox-content">
                                <h3 class="nott text-larger fw-normal mb-2">Wash your Hands</h3>
                            </div>
                        </div>

                        <div class="feature-box fbox-sm mb-4">
                            <div class="fbox-icon">
                                <i class="bg-color-50 color icon-head-side-cough"></i>
                            </div>
                            <div class="fbox-content">
                                <h3 class="nott text-larger fw-normal mb-2">Cover your Coughs</h3>
                            </div>
                        </div>

                        <div class="clear"></div>

                        <a href="#"
                            class="color fw-bold border-bottom border-width-2 border-color me-2 text-capitalize">Learn
                            more</a><i class="icon-chevron-right icon-stacked text-smaller color"></i>
                    </div>
                    <div class="col-lg-6">
                        <img src="{{asset('covidcare/demos/covid-care/images/covid.jpg')}}" alt="Phone call" class="rounded">
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
