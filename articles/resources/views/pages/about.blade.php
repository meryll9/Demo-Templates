@extends('layout.main')
@section('content')
    <!-- Content
      ============================================= -->
    <section id="content">

        <div class="content-wrap p-0 overflow-visible clearfix">

            <div class="container mw-lg">
                <div class="row gutter-50 justify-content-center py-5">
                    <div class="col-md-5">
                        <div class="min-vh-75 sticky-top z-1"
                            style="background: url({{asset('/articles/demos/articles/images/author.jpg')}}) no-repeat center center / cover; top: 150px">
                        </div>
                    </div>
                    <div class="col-md-5 offset-lg-1">
                        <h5 class="font-body ls2 text-uppercase op-06 mb-2">Hello</h5>
                        <h2 class="display-4 fw-normal nott ls0 font-primary">I'm <span><strong>Samuel Serif</strong></span>
                        </h2>
                        <p class="text-muted">Writer, London</p>

                        <div class="line border-width-5 w-25 my-5"></div>

                        <img src="{{asset('articles/demos/articles/images/sign.png')}}" alt="Sign" width="300" class="mb-5">

                        <p class="lead">Progressively strategize just in time scenarios and compelling results.
                            Intrinsicly parallel task extensive systems whereas distinctive catalysts for scenarios and
                            compelling results change.<br><br> Lorem ipsum dolor sit amet consectetur adipisicing, elit.
                            Incidunt a eos natus provident consequuntur dolorem, asperiores animi quos voluptatum neque quo
                            voluptate at facere quasi quisquam debitis earum maxime aut.</p>
                        <p class="lead">Progressively strategize just in time scenarios and compelling results.
                            Intrinsicly parallel task extensive systems whereas distinctive catalysts for scenarios and
                            compelling results change.</p>
                        <div class="clear"></div>

                        <div class="mt-3 clearfix">
                            <a href="https://facebook.com/semicolonweb"
                                class="social-icon si-small si-rounded si-colored si-facebook" title="Facebook"
                                target="_blank">
                                <i class="icon-facebook"></i>
                                <i class="icon-facebook"></i>
                            </a>
                            <a href="https://twitter.com/__semicolon"
                                class="social-icon ms-1 si-small si-rounded si-colored si-twitter" title="Twitter"
                                target="_blank">
                                <i class="icon-twitter"></i>
                                <i class="icon-twitter"></i>
                            </a>
                            <a href="#" class="social-icon ms-1 si-small si-rounded si-colored si-github" title="Github">
                                <i class="icon-github"></i>
                                <i class="icon-github"></i>
                            </a>
                            <a href="#" class="social-icon ms-1 si-small si-rounded si-colored si-pinterest"
                                title="Pinterest">
                                <i class="icon-pinterest"></i>
                                <i class="icon-pinterest"></i>
                            </a>
                            <a href="#" class="social-icon ms-1 si-small si-rounded si-colored si-forrst" title="Forrst">
                                <i class="icon-forrst"></i>
                                <i class="icon-forrst"></i>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="line"></div>

                <div class="heading-block topmargin mb-3 border-bottom-0">
                    <h2 class="fw-normal ls0 nott mb-0">My Latest Books</h2>
                </div>
                <div class="row mb-4">
                    <div class="col-md-2">
                        <a href="demo-articles-single.html"><img src="{{asset('articles/demos/articles/images/articles/1/1.png')}}"
                                alt="Image 1"></a>
                    </div>
                    <div class="col-md-2">
                        <a href="demo-articles-single.html"><img src="{{asset('articles/demos/articles/images/articles/1/2.png')}}"
                                alt="Image 2"></a>
                    </div>
                    <div class="col-md-2">
                        <a href="demo-articles-single.html"><img src="{{asset('articles/demos/articles/images/articles/2/1.png')}}"
                                alt="Image 3"></a>
                    </div>
                    <div class="col-md-2">
                        <a href="demo-articles-single.html"><img src="{{asset('articles/demos/articles/images/articles/4/1.png')}}"
                                alt="Image 4"></a>
                    </div>
                    <div class="col-md-2">
                        <a href="demo-articles-single.html"><img src="{{asset('articles/demos/articles/images/articles/6/1.png')}}"
                                alt="Image 5"></a>
                    </div>
                    <div class="col-md-2">
                        <a href="demo-articles-single.html"><img src="{{asset('articles/demos/articles/images/articles/2/2.png')}}"
                                alt="Image 5"></a>
                    </div>
                </div>
            </div>

            <div class="clear"></div>

            <div class="section section-about bg-transparent m-0"
                style="padding: 120px 0; background: #FFF url('demos/articles/images/dots-1.png') 100% 0 no-repeat / 40%;">
                <div class="container">
                    <div class="row">
                        <div class="col-md-5">
                            <h4 class="mb-0"><span class="badge bg-secondary font-body">About Us</span></h4>
                            <div class="heading-block">
                                <h2 class="fw-normal ls0 nott mb-3 font-primary">Objectively network user friendly quality
                                    with world-class bandwidth. </h2>
                            </div>
                            <p>Progressively strategize just in time scenarios and compelling results. Intrinsicly parallel
                                task extensive systems whereas distinctive catalysts for change. Proactively communicate
                                standardized paradigms through proactive.</p>
                            <a href="#" class="button button-large ls0 nott ms-0 mt-2 clearfix">Learn More</a>
                        </div>
                        <div class="col-md-6 offset-0 offset-md-1 mt-5 mt-md-0">
                            <div class="circle-border">
                                <div class="feature-content">
                                    <div class="d-flex align-items-center justify-content-between h-100">
                                        <div>
                                            <div class="circle-inner">
                                                <div>
                                                    <div class="counter mb-0 fw-normal font-body text-primary"><span
                                                            class="font-body" data-from="1" data-to="7"
                                                            data-refresh-interval="10" data-speed="2000"></span>K+</div>
                                                    <h5 class="mt-1 text-muted mb-0 font-body ls0">Books</h5>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="d-flex h-100 flex-column justify-content-between">
                                            <div class="circle-inner">
                                                <div>
                                                    <div class="counter mb-0 fw-normal font-body text-info"><span
                                                            class="font-body" data-from="1" data-to="3"
                                                            data-refresh-interval="200" data-speed="23000"></span>K+</div>
                                                    <h5 class="mt-1 text-muted mb-0 font-body ls0">Authors</h5>
                                                </div>
                                            </div>
                                            <div class="circle-inner">
                                                <div>
                                                    <div class="counter mb-0 fw-normal font-body text-danger"><span
                                                            class="font-body" data-from="1" data-to="1240"
                                                            data-refresh-interval="50" data-speed="2100"></span></div>
                                                    <h5 class="mt-1 text-muted mb-0 font-body ls0">Published</h5>
                                                </div>
                                            </div>
                                            <div class="circle-inner">
                                                <div>
                                                    <div class="counter mb-0 fw-normal font-body text-warning"><span
                                                            class="font-body" data-from="1" data-to="3"
                                                            data-refresh-interval="100" data-speed="2400"></span>K+</div>
                                                    <h5 class="mt-1 text-muted mb-0 font-body ls0">Members</h5>
                                                </div>
                                            </div>
                                        </div>

                                        <div>
                                            <div class="circle-inner">
                                                <div>
                                                    <div class="counter mb-0 fw-normal font-body color"><span
                                                            class="font-body" data-from="1" data-to="220"
                                                            data-refresh-interval="100" data-speed="2400"></span></div>
                                                    <h5 class="mt-1 text-muted mb-0 font-body ls0">Free Items</h5>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="section m-0 p-md-0">
                <div class="container">
                    <div class="row align-items-center justify-content-between">

                        <div class="col-lg-5 col-md-5 col-sm-6">
                            <div class="heading-block border-bottom-0">
                                <h2 class="fw-normal ls0 nott mb-0 font-primary" style="font-size: 44px; line-height: 1.3">
                                    Available for your smartphone.</h2>
                            </div>
                            <p>Progressively strategize just in time scenarios and compelling results. Intrinsicly parallel
                                task extensive systems whereas distinctive catalysts for scenarios and compelling results
                                change.</p>
                            <div>
                                <a href="#"><img src="{{asset('articles/demos/articles/images/appstore.png')}}" alt="Image" height="54"
                                        class="mt-3"></a>
                                <a href="#"><img src="{{asset('articles/demos/articles/images/googleplay.png')}}" alt="Image"
                                        class="ms-xl-3 ms-lg-1 mt-3 ms-0 " height="54"></a>
                            </div>
                        </div>

                        <div class="col-lg-6 col-md-7 col-sm-6 mt-5 mt-sm-0">
                            <div class="d-none d-lg-flex">
                                <img src="{{asset('articles/demos/articles/images/iphone-1.png')}}" class="fast" alt="Image"
                                    style="height: 600px" data-animate="fadeInDown">
                                <img src="{{asset('articles/demos/articles/images/iphone-2.png')}}" class="fast" alt="Image"
                                    style="height: 600px" data-animate="fadeInUp">
                            </div>
                            <img src="{{asset('articles/demos/articles/images/iphone.png')}}" alt="Image"
                                class="d-block d-lg-none px-5 px-sm-0 p-md-5">
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section><!-- #content end -->

@endsection
