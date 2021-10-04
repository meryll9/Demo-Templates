@extends('layout.main')
@section('content')
    <!-- Slider / Hero
      ============================================= -->
    <div id="slider" class="slider-element dark py-0"
        style="background-size: cover; background-image: url({{asset('/covidcare/demos/covid-care/images/page-title/blog.jpg')}}); background-position: center center; background-repeat: no-repeat;">

        <div class="container">
            <div class="row text-center py-5 min-vh-md-75 justify-content-center align-items-center">
                <div class="col-lg-6">
                    <h5 class="mb-1 text-uppercase ls3 text-white-50 font-body">Latest News</h5>
                    <h2 class="display-3 fw-bolder ls3 font-display">Blog</h2>
                </div>
            </div>
        </div>
    </div>

    <!-- Content
      ============================================= -->
    <section id="content">
        <div class="content-wrap pb-0">

            <div class="container clearfix">

                <!-- Posts
         ============================================= -->
                <div id="posts" class="post-grid row grid-container gutter-30 overflow-visible" data-layout="fitRows">

                    <div class="entry col-md-4 col-sm-6 col-12">
                        <div class="grid-inner h-translate-y-sm all-ts">
                            <div class="entry-image" data-animate="fadeIn">
                                <a href="{{asset('covidcare/demos/covid-care/images/blog/1.jpg')}}" data-lightbox="image"><img
                                        src="{{asset('covidcare/demos/covid-care/images/blog/1.jpg')}}" alt="Standard Post with Image"></a>
                            </div>
                            <div class="entry-title title-sm">
                                <h3 class="nott mb-4 ls0"><a class="color" href="blog-single.html">Coronavirus:
                                        New global test will give results 'in minutes'</a></h3>
                            </div>
                            <div class="entry-meta">
                                <ul>
                                    <li><i class="icon-calendar3"></i> 10th Feb 2021</li>
                                    <li><a href="blog-single.html#comments"><i class="icon-comments"></i> 13</a></li>
                                    <li><a href="#"><i class="icon-camera-retro"></i></a></li>
                                </ul>
                            </div>
                            <div class="entry-content mt-4">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ratione, voluptatem, dolorem
                                    animi nisi autem blanditiis enim culpa reiciendis et explicabo tenetur..</p>
                            </div>
                        </div>
                    </div>

                    <div class="entry col-md-4 col-sm-6 col-12">
                        <div class="grid-inner h-translate-y-sm all-ts">
                            <div class="entry-image" data-animate="fadeIn" data-delay="50">
                                <a href="{{asset('covidcare/demos/covid-care/images/blog/2.jpg')}}" data-lightbox="image"><img
                                        src="{{asset('covidcare/demos/covid-care/images/blog/2.jpg')}}" alt="Standard Post with Image"></a>
                            </div>
                            <div class="entry-title title-sm">
                                <h3 class="nott mb-4 ls0"><a class="color" href="blog-single.html">COVID-19 and
                                        resilience innovations in food supply chains</a></h3>
                            </div>
                            <div class="entry-meta">
                                <ul>
                                    <li><i class="icon-calendar3"></i> 10th Feb 2021</li>
                                    <li><a href="blog-single.html#comments"><i class="icon-comments"></i> 13</a></li>
                                    <li><a href="#"><i class="icon-camera-retro"></i></a></li>
                                </ul>
                            </div>
                            <div class="entry-content mt-4">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ratione, voluptatem, dolorem
                                    animi nisi autem blanditiis enim culpa reiciendis et explicabo tenetur..</p>
                            </div>
                        </div>
                    </div>

                    <div class="entry col-md-4 col-sm-6 col-12">
                        <div class="grid-inner h-translate-y-sm all-ts">
                            <div class="entry-image" data-animate="fadeIn" data-delay="100">
                                <a href="{{asset('covidcare/demos/covid-care/images/blog/3.jpg')}}" data-lightbox="image"><img
                                        src="{{asset('covidcare/demos/covid-care/images/blog/3.jpg')}}" alt="Standard Post with Image"></a>
                            </div>
                            <div class="entry-title title-sm">
                                <h3 class="nott mb-4 ls0"><a class="color" href="blog-single.html">Water in the
                                        COVID-19 crisis: Response, recovery, and resilience</a></h3>
                            </div>
                            <div class="entry-meta">
                                <ul>
                                    <li><i class="icon-calendar3"></i> 10th Feb 2021</li>
                                    <li><a href="blog-single.html#comments"><i class="icon-comments"></i> 13</a></li>
                                    <li><a href="#"><i class="icon-camera-retro"></i></a></li>
                                </ul>
                            </div>
                            <div class="entry-content mt-4">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ratione, voluptatem, dolorem
                                    animi nisi autem blanditiis enim culpa reiciendis et explicabo tenetur..</p>
                            </div>
                        </div>
                    </div>

                    <div class="entry col-md-4 col-sm-6 col-12">
                        <div class="grid-inner h-translate-y-sm all-ts">
                            <div class="entry-image" data-animate="fadeIn">
                                <a href="{{asset('covidcare/demos/covid-care/images/blog/4.jpg')}}" data-lightbox="image"><img
                                        src="{{asset('covidcare/demos/covid-care/images/blog/4.jpg')}}" alt="Standard Post with Image"></a>
                            </div>
                            <div class="entry-title title-sm">
                                <h3 class="nott mb-4 ls0"><a class="color" href="blog-single.html">COVID-19: The
                                        virus will mostly spare young children; the economic crisis will not</a></h3>
                            </div>
                            <div class="entry-meta">
                                <ul>
                                    <li><i class="icon-calendar3"></i> 10th Feb 2021</li>
                                    <li><a href="blog-single.html#comments"><i class="icon-comments"></i> 13</a></li>
                                    <li><a href="#"><i class="icon-camera-retro"></i></a></li>
                                </ul>
                            </div>
                            <div class="entry-content mt-4">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ratione, voluptatem, dolorem
                                    animi nisi autem blanditiis enim culpa reiciendis et explicabo tenetur..</p>
                            </div>
                        </div>
                    </div>

                    <div class="entry col-md-4 col-sm-6 col-12">
                        <div class="grid-inner h-translate-y-sm all-ts">
                            <div class="entry-image" data-animate="fadeIn" data-delay="70">
                                <a href="{{asset('covidcare/demos/covid-care/images/blog/5.jpg')}}" data-lightbox="image"><img
                                        src="{{asset('covidcare/demos/covid-care/images/blog/5.jpg')}}" alt="Standard Post with Image"></a>
                            </div>
                            <div class="entry-title title-sm">
                                <h3 class="nott mb-4 ls0"><a class="color" href="blog-single.html">Social safety
                                        nets are crucial to the COVID-19 response.</a></h3>
                            </div>
                            <div class="entry-meta">
                                <ul>
                                    <li><i class="icon-calendar3"></i> 10th Feb 2021</li>
                                    <li><a href="blog-single.html#comments"><i class="icon-comments"></i> 13</a></li>
                                    <li><a href="#"><i class="icon-camera-retro"></i></a></li>
                                </ul>
                            </div>
                            <div class="entry-content mt-4">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ratione, voluptatem, dolorem
                                    animi nisi autem blanditiis enim culpa reiciendis et explicabo tenetur..</p>
                            </div>
                        </div>
                    </div>

                    <div class="entry col-md-4 col-sm-6 col-12">
                        <div class="grid-inner h-translate-y-sm all-ts">
                            <div class="entry-image" data-animate="fadeIn" data-delay="140">
                                <a href="{{asset('covidcare/demos/covid-care/images/blog/6.jpg')}}" data-lightbox="image"><img
                                        src="{{asset('covidcare/demos/covid-care/images/blog/6.jpg')}}" alt="Standard Post with Image"></a>
                            </div>
                            <div class="entry-title title-sm">
                                <h3 class="nott mb-4 ls0"><a class="color" href="blog-single.html">Best App for
                                        Covid 19 Information</a></h3>
                            </div>
                            <div class="entry-meta">
                                <ul>
                                    <li><i class="icon-calendar3"></i> 10th Feb 2021</li>
                                    <li><a href="blog-single.html#comments"><i class="icon-comments"></i> 13</a></li>
                                    <li><a href="#"><i class="icon-camera-retro"></i></a></li>
                                </ul>
                            </div>
                            <div class="entry-content mt-4">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ratione, voluptatem, dolorem
                                    animi nisi autem blanditiis enim culpa reiciendis et explicabo tenetur..</p>
                            </div>
                        </div>
                    </div>

                </div><!-- #posts end -->

                <!-- Pagination
         ============================================= -->
                <ul class="pagination mt-5 pagination-circle justify-content-center">
                    <li class="page-item active"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item"><a class="page-link" href="#"><i class="icon-angle-right"></i></a></li>
                </ul>

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
