@extends('layout.main')
@section('content')
    <!-- Page Title
      ============================================= -->
    <section id="page-title">

        <div class="container clearfix">
            <h1>Projects</h1>
            <span>A Short Page Title Tagline</span>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Projects</li>
            </ol>
        </div>

    </section><!-- #page-title end -->

    <!-- Content
      ============================================= -->
    <section id="content">
        <div class="content-wrap">
            <div class="container clearfix">

                <h2 class="center ls1 bottommargin">Some of Our Esteemed Projects:</h2>

                <div id="portfolio" class="portfolio row grid-container gutter-20" data-layout="fitRows">

                    <article class="portfolio-item col-12 col-sm-6 col-md-4 pf-media pf-icons">
                        <div class="grid-inner">
                            <div class="portfolio-image">
                                <img src="{{asset('/construction/demos/construction/images/projects/1.jpg')}}" alt="The Atmosphere">
                                <div class="bg-overlay">
                                    <div class="bg-overlay-content dark" data-hover-animate="fadeIn">
                                        <a href="#" class="overlay-trigger-icon bg-light text-dark"
                                            data-hover-animate="zoomIn" data-hover-animate-out="zoomOut"
                                            data-hover-speed="350"><i class="icon-line-ellipsis"></i></a>
                                    </div>
                                    <div class="bg-overlay-bg dark" data-hover-animate="fadeIn"></div>
                                </div>
                            </div>
                            <div class="portfolio-desc">
                                <h3><a href="#">The Atmosphere</a></h3>
                                <span>Chicago, USA</span>
                            </div>
                        </div>
                    </article>

                    <article class="portfolio-item col-12 col-sm-6 col-md-4 pf-illustrations">
                        <div class="grid-inner">
                            <div class="portfolio-image">
                                <img src="{{asset('/construction/demos/construction/images/projects/2.jpg')}}" alt="Wavelength Structure">
                                <div class="bg-overlay">
                                    <div class="bg-overlay-content dark" data-hover-animate="fadeIn">
                                        <a href="#" class="overlay-trigger-icon bg-light text-dark"
                                            data-hover-animate="zoomIn" data-hover-animate-out="zoomOut"
                                            data-hover-speed="350"><i class="icon-line-ellipsis"></i></a>
                                    </div>
                                    <div class="bg-overlay-bg dark" data-hover-animate="fadeIn"></div>
                                </div>
                            </div>
                            <div class="portfolio-desc">
                                <h3>Wavelength Structure</h3>
                                <span>Madrid, Spain</span>
                            </div>
                        </div>
                    </article>

                    <article class="portfolio-item col-12 col-sm-6 col-md-4 pf-graphics pf-uielements">
                        <div class="grid-inner">
                            <div class="portfolio-image">
                                <img src="{{asset('/construction/demos/construction/images/projects/3.jpg')}}" alt="Greenhouse Garden">
                                <div class="bg-overlay">
                                    <div class="bg-overlay-content dark" data-hover-animate="fadeIn">
                                        <a href="#" class="overlay-trigger-icon bg-light text-dark"
                                            data-hover-animate="zoomIn" data-hover-animate-out="zoomOut"
                                            data-hover-speed="350"><i class="icon-line-ellipsis"></i></a>
                                    </div>
                                    <div class="bg-overlay-bg dark" data-hover-animate="fadeIn"></div>
                                </div>
                            </div>
                            <div class="portfolio-desc">
                                <h3>Greenhouse Garden</h3>
                                <span>Bali, Indonesia</span>
                            </div>
                        </div>
                    </article>

                    <article class="portfolio-item col-12 col-sm-6 col-md-4 pf-icons pf-illustrations">
                        <div class="grid-inner">
                            <div class="portfolio-image">
                                <img src="{{asset('/construction/demos/construction/images/projects/4.jpg')}}" alt="Industrial Hub">
                                <div class="bg-overlay">
                                    <div class="bg-overlay-content dark" data-hover-animate="fadeIn">
                                        <a href="#" class="overlay-trigger-icon bg-light text-dark"
                                            data-hover-animate="zoomIn" data-hover-animate-out="zoomOut"
                                            data-hover-speed="350"><i class="icon-line-ellipsis"></i></a>
                                    </div>
                                    <div class="bg-overlay-bg dark" data-hover-animate="fadeIn"></div>
                                </div>
                            </div>
                            <div class="portfolio-desc">
                                <h3>Industrial Hub</h3>
                                <span>Beijing, China</span>
                            </div>
                        </div>
                    </article>

                    <article class="portfolio-item col-12 col-sm-6 col-md-4 pf-uielements pf-media">
                        <div class="grid-inner">
                            <div class="portfolio-image">
                                <img src="{{asset('/construction/demos/construction/images/projects/5.jpg')}}" alt="Corporate Headquarters">
                                <div class="bg-overlay">
                                    <div class="bg-overlay-content dark" data-hover-animate="fadeIn">
                                        <a href="#" class="overlay-trigger-icon bg-light text-dark"
                                            data-hover-animate="zoomIn" data-hover-animate-out="zoomOut"
                                            data-hover-speed="350"><i class="icon-line-ellipsis"></i></a>
                                    </div>
                                    <div class="bg-overlay-bg dark" data-hover-animate="fadeIn"></div>
                                </div>
                            </div>
                            <div class="portfolio-desc">
                                <h3>Corporate Headquarters</h3>
                                <span>California, USA</span>
                            </div>
                        </div>
                    </article>

                    <article class="portfolio-item col-12 col-sm-6 col-md-4 pf-graphics pf-illustrations">
                        <div class="grid-inner">
                            <div class="portfolio-image">
                                <img src="{{asset('/construction/demos/construction/images/projects/6.jpg')}}" alt="Space Station">
                                <div class="bg-overlay">
                                    <div class="bg-overlay-content dark" data-hover-animate="fadeIn">
                                        <a href="#" class="overlay-trigger-icon bg-light text-dark"
                                            data-hover-animate="zoomIn" data-hover-animate-out="zoomOut"
                                            data-hover-speed="350"><i class="icon-line-ellipsis"></i></a>
                                    </div>
                                    <div class="bg-overlay-bg dark" data-hover-animate="fadeIn"></div>
                                </div>
                            </div>
                            <div class="portfolio-desc">
                                <h3>Space Station</h3>
                                <span>Moscow, Russia</span>
                            </div>
                        </div>
                    </article>

                    <article class="portfolio-item col-12 col-sm-6 col-md-4 pf-uielements pf-icons">
                        <div class="grid-inner">
                            <div class="portfolio-image">
                                <img src="{{asset('/construction/demos/construction/images/projects/7.jpg')}}" alt="Bent Architecture">
                                <div class="bg-overlay">
                                    <div class="bg-overlay-content dark" data-hover-animate="fadeIn">
                                        <a href="#" class="overlay-trigger-icon bg-light text-dark"
                                            data-hover-animate="zoomIn" data-hover-animate-out="zoomOut"
                                            data-hover-speed="350"><i class="icon-line-ellipsis"></i></a>
                                    </div>
                                    <div class="bg-overlay-bg dark" data-hover-animate="fadeIn"></div>
                                </div>
                            </div>
                            <div class="portfolio-desc">
                                <h3>Bent Architecture</h3>
                                <span>Melbourne, Australia</span>
                            </div>
                        </div>
                    </article>

                    <article class="portfolio-item col-12 col-sm-6 col-md-4 pf-graphics">
                        <div class="grid-inner">
                            <div class="portfolio-image">
                                <img src="{{asset('/construction/demos/construction/images/projects/8.jpg')}}" alt="Lakeview Center">
                                <div class="bg-overlay">
                                    <div class="bg-overlay-content dark" data-hover-animate="fadeIn">
                                        <a href="#" class="overlay-trigger-icon bg-light text-dark"
                                            data-hover-animate="zoomIn" data-hover-animate-out="zoomOut"
                                            data-hover-speed="350"><i class="icon-line-ellipsis"></i></a>
                                    </div>
                                    <div class="bg-overlay-bg dark" data-hover-animate="fadeIn"></div>
                                </div>
                            </div>
                            <div class="portfolio-desc">
                                <h3>Lakeview Center</h3>
                                <span>Auckland, New Zealand</span>
                            </div>
                        </div>
                    </article>

                    <article class="portfolio-item col-12 col-sm-6 col-md-4 pf-uielements pf-media">
                        <div class="grid-inner">
                            <div class="portfolio-image">
                                <img src="{{asset('/construction/demos/construction/images/projects/5.jpg')}}" alt="Corporate Headquarters">
                                <div class="bg-overlay">
                                    <div class="bg-overlay-content dark" data-hover-animate="fadeIn">
                                        <a href="#" class="overlay-trigger-icon bg-light text-dark"
                                            data-hover-animate="zoomIn" data-hover-animate-out="zoomOut"
                                            data-hover-speed="350"><i class="icon-line-ellipsis"></i></a>
                                    </div>
                                    <div class="bg-overlay-bg dark" data-hover-animate="fadeIn"></div>
                                </div>
                            </div>
                            <div class="portfolio-desc">
                                <h3>Corporate Headquarters</h3>
                                <span>California, USA</span>
                            </div>
                        </div>
                    </article>

                </div>

            </div>

            <a href="projects.html"
                class="button button-3d border-bottom-0 button-full center text-end fw-light font-primary topmargin footer-stick"
                style="font-size: 26px;">
                <div class="container clearfix">
                    Would you like to Build your Dream Home with Us? <strong>Enquire Here</strong> <i
                        class="icon-angle-right" style="top:3px;"></i>
                </div>
            </a>

        </div>
    </section><!-- #content end -->

@endsection
