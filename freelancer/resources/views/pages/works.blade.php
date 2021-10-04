@extends('layout.main')
@section('content')
    <!-- Content
      ============================================= -->
    <section id="content">

        <div class="content-wrap py-0">

            <div class="section m-0">
                <div class="container">
                    <div class="row align-items-end justify-content-between mb-5">
                        <div class="col-lg-6 offset-lg-1">
                            <div>
                                <h3 class="fw-bolder display-4 mb-3">Latest Creative <span
                                        class="gradient-text gradient-horizon">Works</span> &amp; Selected <span
                                        class="gradient-text gradient-horizon">Projects</span></h3>
                                <p class="lead mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                            </div>
                        </div>
                    </div>

                    <div class="clear"></div>

                    <div class="row justify-content-center col-mb-50 mt-3">
                        <div class="col-lg-6 h-translatey-3 tf-ts">
                            <a href="demo-store.html" class="portfolio-item" target="_blank">
                                <div class="portfolio-image">
                                    <img src="{{asset('freelancer/demos/freelancer/images/works/1.jpg')}}" alt="Portfoio Item">
                                    <div class="bg-overlay">
                                        <div
                                            class="bg-overlay-content align-items-start justify-content-start flex-column px-5 py-4">
                                            <h3 class="mb-0 mt-1">Niche Demo Store</h3>
                                            <h5>Media, Icons</h5>
                                        </div>
                                        <div class="bg-overlay-content align-items-start justify-content-end p-4">
                                            <div class="overlay-trigger-icon bg-dark text-white"
                                                data-hover-animate="fadeInDownSmall" data-hover-animate-out="fadeOutUpSmall"
                                                data-hover-speed="350"><i class="icon-line-link"></i></div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <div class="col-lg-6 h-translatey-3 tf-ts">
                            <a href="demo-yoga.html" class="portfolio-item" target="_blank">
                                <div class="portfolio-image">
                                    <img src="{{asset('freelancer/demos/freelancer/images/works/2.jpg')}}" alt="Portfoio Item">
                                    <div class="bg-overlay">
                                        <div
                                            class="bg-overlay-content align-items-start justify-content-start flex-column px-5 py-4">
                                            <h3 class="mb-0 mt-1">Niche Demo Yoga</h3>
                                            <h5>Media, Icons</h5>
                                        </div>
                                        <div class="bg-overlay-content align-items-start justify-content-end p-4">
                                            <div class="overlay-trigger-icon bg-dark text-white"
                                                data-hover-animate="fadeInDownSmall" data-hover-animate-out="fadeOutUpSmall"
                                                data-hover-speed="350"><i class="icon-line-link"></i></div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <div class="col-lg-6 h-translatey-3 tf-ts">
                            <a href="demo-hostel.html" class="portfolio-item" target="_blank">
                                <div class="portfolio-image">
                                    <img src="{{asset('freelancer/demos/freelancer/images/works/3.jpg')}}" alt="Portfoio Item">
                                    <div class="bg-overlay">
                                        <div
                                            class="bg-overlay-content align-items-start justify-content-start flex-column px-5 py-4">
                                            <h3 class="mb-0 mt-1">Niche Demo Hostel</h3>
                                            <h5>Media, Icons</h5>
                                        </div>
                                        <div class="bg-overlay-content align-items-start justify-content-end p-4">
                                            <div class="overlay-trigger-icon bg-dark text-white"
                                                data-hover-animate="fadeInDownSmall" data-hover-animate-out="fadeOutUpSmall"
                                                data-hover-speed="350"><i class="icon-line-link"></i></div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <div class="col-lg-6 h-translatey-3 tf-ts">
                            <a href="demo-conference.html" class="portfolio-item" target="_blank">
                                <div class="portfolio-image">
                                    <img src="{{asset('freelancer/demos/freelancer/images/works/4.jpg')}}" alt="Portfoio Item">
                                    <div class="bg-overlay">
                                        <div
                                            class="bg-overlay-content align-items-start justify-content-start flex-column px-5 py-4">
                                            <h3 class="mb-0 mt-1">Niche Demo Conference</h3>
                                            <h5>Media, Icons</h5>
                                        </div>
                                        <div class="bg-overlay-content align-items-start justify-content-end p-4">
                                            <div class="overlay-trigger-icon bg-dark text-white"
                                                data-hover-animate="fadeInDownSmall" data-hover-animate-out="fadeOutUpSmall"
                                                data-hover-speed="350"><i class="icon-line-link"></i></div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>

                </div>
            </div>

        </div>

    </section><!-- #content end -->
@endsection
