@extends('layout.main')
@section('content')
    <!-- Slider / Hero
      ============================================= -->
    <div id="slider" class="slider-element dark py-5">

        <div class="container">
            <div class="row">
                <div class="col-lg-5 py-5">
                    <h2 class="display-4 color fw-normal font-display">{{ env('APP_TAGLINE') }}</h2>
                    <p class="color">Objectively harness robust ROI via functional leadership skills. Holisticly
                        create one-to-one models.</p>
                    <a href="#" class="btn text-larger rounded-pill bg-color text-white px-4 py-2 h-op-09 op-ts">Sign Up</a>
                    <a href="#" class="btn text-larger rounded-pill px-4 py-2 ms-2 border-color color h-op-09 op-ts">Download
                        App</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Content
      ============================================= -->
    <section id="content">
        <div class="content-wrap">

            <div class="container">

                <!-- How We Care
         ============================================= -->
                <div class="row justify-content-center mt-5">
                    <div class="col-md-7 text-center">
                        <h3 class="display-4 color fw-bold font-display">How We Care</h3>
                        <p class="lead" style="line-height: 1.5">Lorem ipsum dolor sit amet, consectetur
                            adipisicing elit. Omnis consectetur consequatur possimus asperiores. Vel maxime error
                            cupiditate.</p>
                    </div>
                </div>

                <div class="row justify-content-center align-items-center gutter-50 col-mb-80 mt-5">
                    <div class="col-xl-9 col-lg-11">
                        <div class="row feature-box-border col-mb-30 justify-content-center align-items-center">
                            <div class="col-md-6 feature-box fbox-color">
                                <div class="fbox-icon">
                                    <a href="#"><i>1</i></a>
                                </div>
                                <div class="fbox-content">
                                    <h3 class="nott text-larger mb-2">Doctors Video Consultation</h3>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi, quae rerum dolores
                                        aperiam amet enim consequuntur maiores totam odit molestiae vel ut earum deleniti.
                                    </p>
                                </div>
                            </div>
                            <div class="col-md-4 text-center">
                                <img src="{{ asset('covidcare/demos/covid-care/images/illustration/doctors.svg') }}"
                                    alt="Image" class="p-4" height="230">
                            </div>

                            <div class="clear"></div>

                            <div class="col-md-6 feature-box fbox-border fbox-light fbox-effect">
                                <div class="fbox-icon">
                                    <a href="#"><i>2</i></a>
                                </div>
                                <div class="fbox-content">
                                    <h3 class="nott text-larger mb-2">Dietician Consultation</h3>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi, quae rerum dolores
                                        aperiam amet enim consequuntur maiores totam odit molestiae vel ut earum deleniti.
                                    </p>
                                </div>
                            </div>
                            <div class="col-md-4 text-center">
                                <img src="{{ asset('covidcare/demos/covid-care/images/illustration/diet.jpg') }}"
                                    alt="Image" class="p-4" height="230">
                            </div>

                            <div class="clear"></div>

                            <div class="col-md-6 feature-box fbox-border fbox-light fbox-effect">
                                <div class="fbox-icon">
                                    <a href="#"><i>3</i></a>
                                </div>
                                <div class="fbox-content">
                                    <h3 class="nott text-larger mb-2">Nurse Assistance</h3>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi, quae rerum dolores
                                        aperiam amet enim consequuntur maiores totam odit molestiae vel ut earum deleniti.
                                    </p>
                                </div>
                            </div>
                            <div class="col-md-4 text-center">
                                <img src="{{ asset('covidcare/demos/covid-care/images/illustration/nurse.png') }}"
                                    alt="Image" class="p-4" height="230">
                            </div>

                            <div class="clear"></div>

                            <div class="col-md-6 feature-box fbox-border fbox-light fbox-effect">
                                <div class="fbox-icon">
                                    <a href="#"><i>4</i></a>
                                </div>
                                <div class="fbox-content">
                                    <h3 class="nott text-larger mb-2">Home Delivery Medicine</h3>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi, quae rerum dolores
                                        aperiam amet enim consequuntur maiores totam odit molestiae vel ut earum deleniti.
                                    </p>
                                </div>
                            </div>
                            <div class="col-md-4 text-center">
                                <img src="{{ asset('covidcare/demos/covid-care/images/illustration/delivery.svg') }}"
                                    alt="Image" class="p-4" height="230">
                            </div>

                            <div class="clear"></div>

                            <div class="col-md-6 feature-box fbox-border fbox-light fbox-effect noborder">
                                <div class="fbox-icon">
                                    <a href="#"><i>5</i></a>
                                </div>
                                <div class="fbox-content">
                                    <h3 class="nott text-larger mb-2">24/7 Support</h3>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi, quae rerum dolores
                                        aperiam amet enim consequuntur maiores totam odit molestiae vel ut earum deleniti.
                                    </p>
                                </div>
                            </div>
                            <div class="col-md-4 text-center">
                                <img src="{{ asset('covidcare/demos/covid-care/images/illustration/support.svg') }}"
                                    alt="Image" class="p-5" height="230">
                            </div>

                        </div>
                    </div>
                </div>

                <!-- Get 24/7 Care
         ============================================= -->
                <div class="row justify-content-between align-items-center my-6 col-mb-50">
                    <div class="col-lg-5">
                        <h3 class="display-3 color fw-normal font-display mb-5">The Right Choice of Care for your Family
                        </h3>

                        <div class="feature-box fbox-sm mb-4">
                            <div class="fbox-icon">
                                <i class="bg-color-50 color icon-line-calendar"></i>
                            </div>
                            <div class="fbox-content">
                                <h3 class="nott text-larger fw-normal mb-2">Same-Day Appointments.</h3>
                            </div>
                        </div>

                        <div class="feature-box fbox-sm mb-4">
                            <div class="fbox-icon">
                                <i class="bg-color-50 color icon-line-speech-bubble"></i>
                            </div>
                            <div class="fbox-content">
                                <h3 class="nott text-larger fw-normal mb-2">Get Unlimited 24/7 chat with no extra cost.</h3>
                            </div>
                        </div>

                        <div class="feature-box fbox-sm mb-4">
                            <div class="fbox-icon">
                                <i class="bg-color-50 color icon-line-video"></i>
                            </div>
                            <div class="fbox-content">
                                <h3 class="nott text-larger fw-normal mb-2">Anytime video-call with no extra cost.</h3>
                            </div>
                        </div>

                        <div class="feature-box fbox-sm mb-4">
                            <div class="fbox-icon">
                                <i class="bg-color-50 color icon-head-side-mask"></i>
                            </div>
                            <div class="fbox-content">
                                <h3 class="nott text-larger fw-normal mb-2">Masks, Sanitizers and Gloves will be provided.
                                </h3>
                            </div>
                        </div>

                        <div class="feature-box fbox-sm mb-4">
                            <div class="fbox-icon">
                                <i class="bg-color-50 color icon-line-phone-call"></i>
                            </div>
                            <div class="fbox-content">
                                <h3 class="nott text-larger fw-normal mb-2">Direct Conversation with Our Specialists.</h3>
                            </div>
                        </div>

                        <div class="feature-box fbox-sm mb-4">
                            <div class="fbox-icon">
                                <i class="bg-color-50 color icon-line-map-pin"></i>
                            </div>
                            <div class="fbox-content">
                                <h3 class="nott text-larger fw-normal mb-2">We're available in 23 Major Cities.</h3>
                            </div>
                        </div>

                        <div class="feature-box fbox-sm mb-5">
                            <div class="fbox-icon">
                                <i class="bg-color-50 color icon-hospital2"></i>
                            </div>
                            <div class="fbox-content">
                                <h3 class="nott text-larger fw-normal mb-2">Connected with Major Hospitals.</h3>
                            </div>
                        </div>

                        <a href="#"
                            class="color fw-bold border-bottom border-width-2 border-color me-2 text-capitalize">Learn more
                            about our Support</a><i class="icon-chevron-right icon-stacked text-smaller color"></i>
                    </div>
                    <div class="col-lg-6">
                        <img src="{{ asset('covidcare/demos/covid-care/images/phone.jpg') }}" alt="Phone call"
                            class="rounded">
                    </div>
                </div>

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
                        <img src="{{ asset('covidcare/demos/covid-care/images/device.png') }}" alt="Phone call"
                            class="rounded">
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
                        <img src="{{ asset('covidcare/demos/covid-care/images/covid.jpg') }}" alt="Phone call"
                            class="rounded">
                    </div>
                </div>

            </div>

            <!-- Download App Section
        ============================================= -->
            <div class="section py-md-0 section-mobile bg-color-2"
                style="background:  url({{ asset('/covidcare/demos/covid-care/images/illustration/bg-pattern.svg') }}) no-repeat center left / contain;">
                <div class="container">
                    <div class="row align-items-center justify-content-between">

                        <div class="col-lg-5 col-md-6 py-5 py-lg-0">
                            <h3 class="display-3 color fw-normal font-display mb-5">Download Our COVID Care App.</h3>
                            <p class="text-large color">Progressively strategize just in time scenarios and compelling
                                results. Intrinsicly parallel task extensive systems whereas distinctive catalysts for
                                scenarios and compelling results change.</p>
                            <div>
                                <a href="#"><img src="{{ asset('covidcare/demos/articles/images/appstore.png') }}"
                                        alt="Image" height="54" class="mt-3"></a>
                                <a href="#"><img src="{{ asset('covidcare/demos/articles/images/googleplay.png') }}"
                                        alt="Image" class="ms-xl-3 ms-lg-1 mt-3 ms-0 " height="54"></a>
                            </div>
                        </div>

                        <div class="col-lg-6 col-md-6 mt-5 mt-sm-0">
                            <div class="d-none d-lg-flex">
                                <img src="{{ asset('covidcare/demos/covid-care/images/iphone-2.png') }}"
                                    class="fast" alt="Image" style="height: 600px" data-animate="fadeInUp"
                                    data-delay="200">
                                <img src="{{ asset('covidcare/demos/covid-care/images/iphone-1.png') }}"
                                    class="fast" alt="Image" style="height: 600px" data-animate="fadeInUp">
                            </div>
                            <img src="{{ asset('covidcare/demos/covid-care/images/iphone.png') }}" alt="Image"
                                class="d-block d-lg-none px-5 px-sm-0 p-md-5">
                        </div>

                    </div>
                </div>
            </div>

            <!-- Featured Icons Area
        ============================================= -->
            <div class="container topmargin-lg clearfix">

                <div class="row align-items-stretch grid-border clearfix">
                    <div class="col-lg-4 col-md-6 col-padding">
                        <div class="feature-box fbox-center fbox-dark fbox-plain">
                            <div class="fbox-icon">
                                <a href="#"><i class="color icon-hands-wash"></i></a>
                            </div>
                            <div class="fbox-content">
                                <h3 class="nott text-larger fw-medium">Wash your Hands</h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-padding">
                        <div class="feature-box fbox-center fbox-dark fbox-plain">
                            <div class="fbox-icon">
                                <a href="#"><i class="color icon-home"></i></a>
                            </div>
                            <div class="fbox-content">
                                <h3 class="nott text-larger fw-medium">Stay at Home</h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-padding">
                        <div class="feature-box fbox-center fbox-dark fbox-plain">
                            <div class="fbox-icon">
                                <a href="#"><i class="color icon-head-side-mask"></i></a>
                            </div>
                            <div class="fbox-content">
                                <h3 class="nott text-larger fw-medium">Wear Your Mask</h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-padding">
                        <div class="feature-box fbox-center fbox-dark fbox-plain">
                            <div class="fbox-icon">
                                <a href="#"><i class="color icon-head-side-cough"></i></a>
                            </div>
                            <div class="fbox-content">
                                <h3 class="nott text-larger fw-medium">Cover Your Coughs</h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-padding">
                        <div class="feature-box fbox-center fbox-dark fbox-plain">
                            <div class="fbox-icon">
                                <a href="#"><i class="color icon-shield-virus"></i></a>
                            </div>
                            <div class="fbox-content">
                                <h3 class="nott text-larger fw-medium">Social Distancing</h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-padding">
                        <div class="feature-box fbox-center fbox-dark fbox-plain">
                            <div class="fbox-icon">
                                <a href="#"><i class="color icon-utensils"></i></a>
                            </div>
                            <div class="fbox-content">
                                <h3 class="nott text-larger fw-medium">Healthy Diet</h3>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="clear"></div>

                <div class="pricing-box pricing-extended row align-items-stretch mt-6 mx-0 border-0 rounded-3"
                    style="background-color: rgba(15,100,88,.07);">
                    <div class="pricing-desc col-lg-9 p-5">
                        <h3 class="h2 color fw-normal font-display border-bottom pb-4 mb-4">Our Subscription Charges</h3>
                        <div class="pricing-features bg-transparent pt-3 pb-0">
                            <ul class="row">
                                <li class="col-md-6"><i class="icon-line-check-circle color me-2"></i> First 15 Days
                                    Free*</li>
                                <li class="col-md-6"><i class="icon-line-check-circle color me-2"></i> iOS &amp;
                                    Android Both Available</li>
                                <li class="col-md-6"><i class="icon-line-check-circle color me-2"></i> Only
                                    Subscription is Chargable</li>
                                <li class="col-md-6"><i class="icon-line-check-circle color me-2"></i> No Hidden
                                    Changes</li>
                                <li class="col-md-6"><i class="icon-line-check-circle color me-2"></i> International
                                    Credit Cards Accepted</li>
                                <li class="col-md-6"><i class="icon-line-check-circle color me-2"></i> Money Refund
                                    Guaranteed</li>
                                <li class="col-md-6"><i class="icon-line-check-circle color me-2"></i> One Day
                                    Delivery</li>
                                <li class="col-md-6"><i class="icon-line-check-circle color me-2"></i> 24x7 Priority
                                    Email Support</li>
                            </ul>
                        </div>
                    </div>

                    <div class="pricing-action-area border-0 col-lg d-flex flex-column justify-content-center"
                        style="background-color: rgba(15,100,88,.07);">
                        <div class="pricing-price price-unit fw-bold font-primary color">
                            <span class="price-unit">&dollar;</span>19<span
                                class="price-tenure font-secondary text-uppercase">Monthly</span>
                        </div>
                        <div class="pricing-action">
                            <a href="#" class="button bg-color rounded-pill button-large w-100 m-0">Get Started</a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section><!-- #content end -->

@endsection