@extends('layout.main')
@section('content')
    <!-- Content
      ============================================= -->
    <section id="content">
        <div class="content-wrap p-0">

            <div class="section m-0">
                <div class="container">

                    <div class="row justify-content-between align-items-end">
                        <div class="col-md-6">
                            <h2 class="display-4 text-dark fw-semibold ls--2">Private Desk</h2>
                            <p class="text-muted">A 2-minute walk from the Place du Vieux Marché, and a few steps from
                                the Seine, Le Studio Vieux Marché is our very first workspace, opened in 2016!</p>

                            <a href="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3151.840108181598!2d144.95373631531302!3d-37.81721397975169!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6ad65d4c2b349649%3A0xb6899234e561db11!2sEnvato!5e0!3m2!1sen!2sin!4v1600938822948!5m2!1sen!2sin"
                                data-lightbox="iframe" class="text-dark fw-semibold font-secondary"><i
                                    class="icon-line-map-pin"></i> <u>121 King St, Melbourne VIC 3000</u></a>
                        </div>
                        <div class="col-md-3 text-md-end price-list mt-4 mt-md-0">
                            <div class="price-title">$249<small>Monthly</small></div>
                            <a href="demo-coworking-price.html"
                                class="button button-rounded button-large m-0 center fw-medium nott ls0">Book your Space
                                Now</a>
                        </div>
                    </div>

                </div>
            </div>

            <div class="masonry-thumbs grid-container grid-5" data-big="2" data-lightbox="gallery">
                <a class="grid-item" href="{{asset('coworking/demos/coworking/images/location/thumbs/full/1.jpg')}}"
                    data-lightbox="gallery-item"><img class="op-ts h-op-09"
                        src="{{asset('coworking/demos/coworking/images/location/thumbs/1.jpg')}}" alt="Gallery Thumb 1"></a>
                <a class="grid-item" href="{{asset('coworking/demos/coworking/images/location/thumbs/full/2.jpg')}}"
                    data-lightbox="gallery-item"><img class="op-ts h-op-09"
                        src="{{asset('coworking/demos/coworking/images/location/thumbs/2.jpg')}}" alt="Gallery Thumb 12"></a>
                <a class="grid-item" href="{{asset('coworking/demos/coworking/images/location/thumbs/full/3.jpg')}}"
                    data-lightbox="gallery-item"><img class="op-ts h-op-09"
                        src="{{asset('coworking/demos/coworking/images/location/thumbs/3.jpg')}}" alt="Gallery Thumb 3"></a>
                <a class="grid-item" href="{{asset('coworking/demos/coworking/images/location/thumbs/full/4.jpg')}}"
                    data-lightbox="gallery-item"><img class="op-ts h-op-09"
                        src="{{asset('coworking/demos/coworking/images/location/thumbs/4.jpg')}}" alt="Gallery Thumb 4"></a>
                <a class="grid-item" href="{{asset('coworking/demos/coworking/images/location/thumbs/full/5.jpg')}}"
                    data-lightbox="gallery-item"><img class="op-ts h-op-09"
                        src="{{asset('coworking/demos/coworking/images/location/thumbs/5.jpg')}}" alt="Gallery Thumb 5"></a>
                <a class="grid-item" href="{{asset('coworking/demos/coworking/images/location/thumbs/full/6.jpg')}}"
                    data-lightbox="gallery-item"><img class="op-ts h-op-09"
                        src="{{asset('coworking/demos/coworking/images/location/thumbs/6.jpg')}}" alt="Gallery Thumb 6"></a>
                <a class="grid-item" href="{{asset('coworking/demos/coworking/images/location/thumbs/full/7.jpg')}}"
                    data-lightbox="gallery-item"><img class="op-ts h-op-09"
                        src="{{asset('coworking/demos/coworking/images/location/thumbs/7.jpg')}}" alt="Gallery Thumb 7"></a>
                <a class="grid-item" href="{{asset('coworking/demos/coworking/images/location/thumbs/full/8.jpg')}}"
                    data-lightbox="gallery-item"><img class="op-ts h-op-09"
                        src="{{asset('coworking/demos/coworking/images/location/thumbs/8.jpg')}}" alt="Gallery Thumb 13"></a>
                <a class="grid-item" href="{{asset('coworking/demos/coworking/images/location/thumbs/full/9.jpg')}}"
                    data-lightbox="gallery-item"><img class="op-ts h-op-09"
                        src="{{asset('coworking/demos/coworking/images/location/thumbs/9.jpg')}}" alt="Gallery Thumb 6"></a>
                <a class="grid-item" href="{{asset('coworking/demos/coworking/images/location/thumbs/full/10.jpg')}}"
                    data-lightbox="gallery-item"><img class="op-ts h-op-09"
                        src="{{asset('coworking/demos/coworking/images/location/thumbs/10.jpg')}}" alt="Gallery Thumb 7"></a>
                <a class="grid-item" href="{{asset('coworking/demos/coworking/images/location/thumbs/full/11.jpg')}}"
                    data-lightbox="gallery-item"><img class="op-ts h-op-09"
                        src="{{asset('coworking/demos/coworking/images/location/thumbs/11.jpg')}}" alt="Gallery Thumb 12"></a>
                <a class="grid-item" href="{{asset('coworking/demos/coworking/images/location/thumbs/full/3.jpg')}}"
                    data-lightbox="gallery-item"><img class="op-ts h-op-09"
                        src="{{asset('coworking/demos/coworking/images/location/thumbs/3.jpg')}}" alt="Gallery Thumb 12"></a>
            </div>

            <div class="container topmargin-lg">
                <div class="mw-sm mx-auto">
                    <h3 class="h1 mb-4 fw-bold font-secondary">Information</h3>
                    <p class="mb-0">Lorem ipsum, dolor sit amet, consectetur adipisicing elit. Amet et molestiae
                        officia odio, eaque ex repellendus? Est esse illum non accusamus ullam rerum alias, veniam deserunt
                        minus voluptatum veritatis, tenetur quidem, illo beatae, magnam at. Error impedit minima voluptate
                        saepe.</p>
                    <ol class="list-numbers my-5">
                        <li>Range of fully furnished office spaces</li>
                        <li>Meeting rooms to hire by the hour or day</li>
                        <li>Business lounges and collaboration areas</li>
                        <li>Manned receptions with 24hr access</li>
                        <li>Work in privacy</li>
                        <li>24 x 7 access</li>
                    </ol>
                    <p class="mb-5">Collaboratively administrate multidisciplinary meta-services with market
                        positioning interfaces. Distinctively optimize clicks-and-mortar leadership skills without standards
                        compliant bandwidth. Holisticly target equity invested technology through end-to-end platforms.
                        Assertively grow seamless customer service via magnetic testing procedures. Phosfluorescently brand
                        high-payoff architectures for mission-critical alignments.</p>

                    <h3 class="py-4 border-top border-bottom text-capitalize color">“Why work alone when you could work
                        together?<br>whatever you do, do it here.”</h3>

                    <p class="mt-5">Collaboratively administrate multidisciplinary meta-services with market
                        positioning interfaces. Distinctively optimize clicks-and-mortar leadership skills without standards
                        compliant bandwidth. Holisticly target equity invested technology through end-to-end platforms.
                        Assertively grow seamless customer service via magnetic testing procedures. Phosfluorescently brand
                        high-payoff architectures for mission-critical alignments.</p>
                </div>

                <div class="clear"></div>

                <div class="bg-dark dark topmargin p-5 rounded-4">
                    <div class="row justify-content-between">

                        <!-- Feature Box
           ============================================= -->
                        <div class="col-lg-4 col-md-6 my-4">
                            <i class="icon-wifi-full color ms-0 mb-4 i-plain d-block float-none"></i>
                            <h4 class="mb-3">Fiber Optic WiFi</h4>
                            <p class="text-white-50">Add any Field to your Custom Form. Canvas's inbuilt Forms Processor
                                will handle the rest. You will never have to touch any PHP Codes.</p>
                        </div>

                        <!-- Feature Box
           ============================================= -->
                        <div class="col-lg-4 col-md-6 my-4">
                            <i class="icon-line2-cup color ms-0 mb-3 i-plain d-block float-none"></i>
                            <h4 class="mb-3">Cafeteria</h4>
                            <p class="text-white-50">Add any Field to your Custom Form. Canvas's inbuilt Forms Processor
                                will handle the rest. You will never have to touch any PHP Codes.</p>
                        </div>

                        <!-- Feature Box
           ============================================= -->
                        <div class="col-lg-4 col-md-6 my-4">
                            <i class="icon-line2-screen-desktop color ms-0 mb-3 i-plain d-block float-none"></i>
                            <h4 class="mb-3">Flexible Desks</h4>
                            <p class="text-white-50">Add any Field to your Custom Form. Canvas's inbuilt Forms Processor
                                will handle the rest. You will never have to touch any PHP Codes.</p>
                        </div>

                        <!-- Feature Box
           ============================================= -->
                        <div class="col-lg-4 col-md-6 my-4">
                            <i class="icon-line2-lock color ms-0 mb-3 i-plain d-block float-none"></i>
                            <h4 class="mb-3">Lockers</h4>
                            <p class="text-white-50">Add any Field to your Custom Form. Canvas's inbuilt Forms Processor
                                will handle the rest. You will never have to touch any PHP Codes.</p>
                        </div>

                        <!-- Feature Box
           ============================================= -->
                        <div class="col-lg-4 col-md-6 my-4">
                            <i class="icon-fingerprint color ms-0 mb-3 i-plain d-block float-none"></i>
                            <h4 class="mb-3">100% Secure</h4>
                            <p class="text-white-50">Add any Field to your Custom Form. Canvas's inbuilt Forms Processor
                                will handle the rest. You will never have to touch any PHP Codes.</p>
                        </div>

                        <!-- Feature Box
           ============================================= -->
                        <div class="col-lg-4 col-md-6 my-4">
                            <i class="icon-line2-printer color ms-0 mb-3 i-plain d-block float-none"></i>
                            <h4 class="mb-3">Printers &amp; Fax</h4>
                            <p class="text-white-50">Add any Field to your Custom Form. Canvas's inbuilt Forms Processor
                                will handle the rest. You will never have to touch any PHP Codes.</p>
                        </div>

                        <!-- Feature Box
           ============================================= -->
                        <div class="col-lg-4 col-md-6 my-4">
                            <i class="icon-couch color ms-0 mb-3 i-plain d-block float-none"></i>
                            <h4 class="mb-3">Common Area</h4>
                            <p class="text-white-50">Add any Field to your Custom Form. Canvas's inbuilt Forms Processor
                                will handle the rest. You will never have to touch any PHP Codes.</p>
                        </div>

                        <!-- Feature Box
           ============================================= -->
                        <div class="col-lg-4 col-md-6 my-4">
                            <i class="icon-line-clock color ms-0 mb-3 i-plain d-block float-none"></i>
                            <h4 class="mb-3">24x7 Access</h4>
                            <p class="text-white-50">Add any Field to your Custom Form. Canvas's inbuilt Forms Processor
                                will handle the rest. You will never have to touch any PHP Codes.</p>
                        </div>

                        <!-- Feature Box
           ============================================= -->
                        <div class="col-lg-4 col-md-6 my-4">
                            <i class="icon-playstation color ms-0 mb-3 i-plain d-block float-none"></i>
                            <h4 class="mb-3">Other Activities</h4>
                            <p class="text-white-50">Add any Field to your Custom Form. Canvas's inbuilt Forms Processor
                                will handle the rest. You will never have to touch any PHP Codes.</p>
                        </div>
                    </div>
                </div>

                <div class="mw-sm mx-auto topmargin-lg">
                    <p>Collaboratively administrate multidisciplinary meta-services with market positioning interfaces.
                        Distinctively optimize clicks-and-mortar leadership skills without standards compliant bandwidth.
                        Holisticly target equity invested technology through end-to-end platforms. Assertively grow seamless
                        customer service via magnetic testing procedures. Phosfluorescently brand high-payoff architectures
                        for mission-critical alignments.</p>

                    <div class="py-5 border-top text-capitalize topmargin bottommargin-sm">
                        <h2 class="ls0 font-secondary">Get One Day Free Trial.</h2>
                        <p class="text-muted" style="font-size: 18px;">Enthusiastically embrace diverse e-markets after
                            sustainable applications. Collaboratively impact intermandated systems vis-a-vis progressive
                            information.</p>
                        <a href="#" class="button button-rounded button-xlarge px-5 m-0 center nott fw-semibold ls0">Sign
                            Up</a>
                    </div>

                    <a href="https://www.youtube.com/watch?v=P3Huse9K6Xs" data-lightbox="iframe"
                        class="play-video position-relative d-block"><img src="{{asset('coworking/demos/coworking/images/video-bg.jpg')}}"
                            alt="Video Image" class="rounded-3 shadow-lg">
                        <i class="icon-play"></i>
                    </a>
                </div>

            </div>

            <div class="clear"></div>

            <div class="section mb-0 pb-0 bg-theme-light topmargin-lg clearfix" style="padding-top: 120px;">
                <div class="container">
                    <div class="row">
                        <div class="col-md-8 offset-1">
                            <div class="before-heading">Don't Hesitate to Reach out to Us</div>
                            <h2 class="nott fw-semibold display-4">Want to Talk?</h2>
                            <h4 class="fw-light mb-4">Call us at <a href="tel:+(61)8-234-532-45">+(61)8-234-532-45</a></h4>
                            <a href="mailto:noreply@canvas.com"
                                class="button button-rounded button-xlarge m-0 nott fw-semibold ls0 px-5">Email Us</a>
                        </div>
                    </div>
                </div>
                <img src="{{asset('coworking/demos/coworking/images/footer-bg.jpg')}}" alt="Footer Image" class="footer-img">
            </div>

        </div>
    </section><!-- #content end -->
@endsection
