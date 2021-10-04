@extends('layout.main')
@section('content')
    <!-- Page Title
      ============================================= -->
    <section id="page-title" class="page-title-dark dark"
        style="background: linear-gradient(rgba(0,0,0,0.1), rgba(0,0,0,.5)), url({{asset('/news/demos/news/images/page-title-category.jpg')}}) no-repeat center center; background-size: cover; padding: 120px 0;">

        <div class="container clearfix">
            <h1>Travel</h1>
            <span>A Short Description Tagline</span>
            <div class="tagcloud mt-3">
                <a href="#" class="border-0 text-light bg-travel">General</a>
                <a href="#" class="border-0 text-light bg-travel">World</a>
                <a href="#" class="border-0 text-light bg-travel">Photography</a>
                <a href="#" class="border-0 text-light bg-travel">Latest</a>
                <a href="#" class="border-0 text-light bg-travel">Videos</a>
            </div>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item"><a href="#">Category</a></li>
                <li class="breadcrumb-item active" aria-current="page">Travel</li>
            </ol>
        </div>

    </section><!-- #page-title end -->

    <!-- Content
      ============================================= -->
    <section id="content">
        <div class="content-wrap pt-0">

            <!-- Carousel - Highlighted News
        ============================================= -->
            <div class="section mt-0">
                <div class="container clearfix">
                    <h4 class="mb-3 ls1 text-uppercase fw-bold">Highlighted Travel News</h4>
                    <!-- Owl Carousel
          ============================================= -->
                    <div id="oc-news" class="owl-carousel fixed-nav top-nav carousel-widget posts-md customjs">
                        <!-- Post Article -->
                        <div class="entry mb-0"
                            style="background: url({{asset('/news/demos/news/images/posts/fashion/1.jpg')}}) center center; background-size: cover; height: 400px;">
                            <div class="bg-overlay">
                                <div
                                    class="bg-overlay-content text-overlay-mask dark desc-sm align-items-end justify-content-start p-4">
                                    <div class="position-relative w-100">
                                        <div class="entry-categories"><a href="demo-news-category.html"
                                                class="bg-fashion">Fashion</a></div>
                                        <div class="entry-title nott">
                                            <h3 class="fw-semibold mb-2"><a href="#" class="text-light">The Ultimate
                                                    Guide To Fashion</a></h3>
                                        </div>
                                        <div class="entry-meta no-separator">
                                            <ul>
                                                <li><span>by</span> <a href="#">John Doe</a></li>
                                                <li><i class="icon-time"></i><a href="#">11 Mar 2021</a></li>
                                            </ul>
                                        </div>
                                        <ul class="entry-icons d-none d-sm-block">
                                            <li><a href="#" class="icon-bookmark-empty"></a></li>
                                            <li><a href="#" class="icon-heart-empty"><span>18</span></a></li>
                                            <li><a href="#" class="icon-comment-alt"><span>3</span></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Post Article -->
                        <div class="entry mb-0"
                            style="background: url({{asset('/news/demos/news/images/posts/sports/1.jpg')}}) center center; background-size: cover; height: 400px;">
                            <div class="bg-overlay">
                                <div
                                    class="bg-overlay-content text-overlay-mask dark desc-sm align-items-end justify-content-start p-4">
                                    <div class="position-relative w-100">
                                        <div class="entry-categories"><a href="demo-news-category.html"
                                                class="bg-sports">Sports</a></div>
                                        <div class="entry-title nott">
                                            <h3 class="fw-semibold mb-2"><a href="#" class="text-light">The Sports
                                                    Strategies For Beginners</a></h3>
                                        </div>
                                        <div class="entry-meta no-separator">
                                            <ul>
                                                <li><span>by</span> <a href="#">John Doe</a></li>
                                                <li><i class="icon-time"></i><a href="#">11 Mar 2021</a></li>
                                            </ul>
                                        </div>
                                        <ul class="entry-icons d-none d-sm-block">
                                            <li><a href="#" class="icon-bookmark-empty"></a></li>
                                            <li><a href="#" class="icon-heart-empty"><span>18</span></a></li>
                                            <li><a href="#" class="icon-comment-alt"><span>3</span></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Post Article -->
                        <div class="entry mb-0"
                            style="background: url({{asset('/news/demos/news/images/posts/food/1.jpg')}}) center center; background-size: cover; height: 400px;">
                            <div class="bg-overlay">
                                <div
                                    class="bg-overlay-content text-overlay-mask dark desc-sm align-items-end justify-content-start p-4">
                                    <div class="position-relative w-100">
                                        <div class="entry-categories"><a href="demo-news-category.html"
                                                class="bg-food">Food</a></div>
                                        <div class="entry-title nott">
                                            <h3 class="fw-semibold mb-2"><a href="#" class="text-light">2 Things You
                                                    Must Know About you Cafe</a></h3>
                                        </div>
                                        <div class="entry-meta no-separator">
                                            <ul>
                                                <li><span>by</span> <a href="#">John Doe</a></li>
                                                <li><i class="icon-time"></i><a href="#">11 Mar 2021</a></li>
                                            </ul>
                                        </div>
                                        <ul class="entry-icons d-none d-sm-block">
                                            <li><a href="#" class="icon-bookmark-empty"></a></li>
                                            <li><a href="#" class="icon-heart-empty"><span>18</span></a></li>
                                            <li><a href="#" class="icon-comment-alt"><span>3</span></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Post Article -->
                        <div class="entry mb-0"
                            style="background: url({{asset('/news/demos/news/images/posts/fashion/2.jpg')}}) center center; background-size: cover; height: 400px;">
                            <div class="bg-overlay">
                                <div
                                    class="bg-overlay-content text-overlay-mask dark desc-sm align-items-end justify-content-start p-4">
                                    <div class="position-relative w-100">
                                        <div class="entry-categories"><a href="demo-news-category.html"
                                                class="bg-fashion">Fashion</a></div>
                                        <div class="entry-title nott">
                                            <h3 class="fw-semibold mb-2"><a href="#" class="text-light">The Truth About
                                                    Fashion In 3 Minutes</a></h3>
                                        </div>
                                        <div class="entry-meta no-separator">
                                            <ul>
                                                <li><span>by</span> <a href="#">John Doe</a></li>
                                                <li><i class="icon-time"></i><a href="#">11 Mar 2021</a></li>
                                            </ul>
                                        </div>
                                        <ul class="entry-icons d-none d-sm-block">
                                            <li><a href="#" class="icon-bookmark-empty"></a></li>
                                            <li><a href="#" class="icon-heart-empty"><span>18</span></a></li>
                                            <li><a href="#" class="icon-comment-alt"><span>3</span></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Post Article -->
                        <div class="entry mb-0"
                            style="background: url({{asset('/news/demos/news/images/posts/market/1.jpg')}}) center center; background-size: cover; height: 400px;">
                            <div class="bg-overlay">
                                <div
                                    class="bg-overlay-content text-overlay-mask dark desc-sm align-items-end justify-content-start p-4">
                                    <div class="position-relative w-100">
                                        <div class="entry-categories"><a href="demo-news-category.html"
                                                class="bg-market">Market</a></div>
                                        <div class="entry-title nott">
                                            <h3 class="fw-semibold mb-2"><a href="#" class="text-light">The Hidden
                                                    Mystery Behind market</a></h3>
                                        </div>
                                        <div class="entry-meta no-separator">
                                            <ul>
                                                <li><span>by</span> <a href="#">John Doe</a></li>
                                                <li><i class="icon-time"></i><a href="#">11 Mar 2021</a></li>
                                            </ul>
                                        </div>
                                        <ul class="entry-icons d-none d-sm-block">
                                            <li><a href="#" class="icon-bookmark-empty"></a></li>
                                            <li><a href="#" class="icon-heart-empty"><span>18</span></a></li>
                                            <li><a href="#" class="icon-comment-alt"><span>3</span></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div> <!-- Carousel End -->
                </div>
            </div> <!-- Carousel End -->

            <div class="container clearfix">

                <div class="row clearfix">

                    <!-- Posts Area
          ============================================= -->
                    <div class="col-lg-8">

                        <div class="row col-mb-50 mb-0 infinity-wrapper">

                            <div class="col-md-6">
                                <!-- Post Article -->
                                <div class="posts-md">
                                    <div class="entry">
                                        <div class="entry-image">
                                            <a href="demo-news-single.html"><img
                                                    src="{{asset('news/demos/news/images/posts/lifestyle/4.jpg')}}" alt="Image 3"></a>
                                            <div class="entry-categories"><a href="demo-news-category.html"
                                                    class="bg-lifestyle">lifestyle</a></div>
                                        </div>
                                        <div class="entry-title title-sm nott">
                                            <h3 class="mb-2"><a href="demo-news-single.html">6 lessons my mother
                                                    taught me that nobody else could have</a></h3>
                                        </div>
                                        <div class="entry-meta">
                                            <ul>
                                                <li><span>by</span> <a href="#">John Doe</a></li>
                                                <li><i class="icon-time"></i><a href="#">11 Mar 2021</a></li>
                                            </ul>
                                        </div>
                                        <div class="entry-content">
                                            <p class="mb-0">Pellentesque hic illo beatae rhoncus sint, quis,
                                                fugiat imperdiet unde architecto magna dui hymenaeos autem lorem eligendi,
                                                quae! Orci commodo, aute reiciendis, scelerisque inceptos, quibusdam iste
                                                debitis? Venenatis. Alias porta?</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <!-- Post Article -->
                                <div class="posts-md">
                                    <div class="entry">
                                        <div class="entry-image">
                                            <a href="demo-news-single.html"><img src="{{asset('news/demos/news/images/posts/travel/4.jpg')}}"
                                                    alt="Image"></a>
                                            <div class="entry-categories"><a href="demo-news-category.html"
                                                    class="bg-travel">Travel</a></div>
                                        </div>
                                        <div class="entry-title title-sm nott">
                                            <h3 class="mb-2"><a href="demo-news-single.html">How To Make More
                                                    Travel By Doing Less</a></h3>
                                        </div>
                                        <div class="entry-meta">
                                            <ul>
                                                <li><span>by</span> <a href="#">John Doe</a></li>
                                                <li><i class="icon-time"></i><a href="#">11 Mar 2021</a></li>
                                            </ul>
                                        </div>
                                        <div class="entry-content">
                                            <p class="mb-0">Tempus nullam sed ullam doloremque unde habitasse
                                                auctor tortor. Cursus, culpa numquam ut esse, harum alias? Lorem. Mattis
                                                eum, placeat eius turpis quam dapibus, eius quia atque tristique nostrud
                                                reiciendis</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6 infinity-loader">
                                <div class="posts-md">
                                    <div class="entry">
                                        <div class="entry-image">
                                            <a href="#"><img src="{{asset('news/demos/news/images/posts/fashion/4.jpg')}}" alt="Image 3"></a>
                                            <div class="entry-categories"><a href="#" class="bg-fashion">Fashion</a>
                                            </div>
                                        </div>
                                        <div class="entry-title title-sm nott">
                                            <h3 class="mb-2"><a href="#">Special Edition Nike Metcon 4</a></h3>
                                        </div>
                                        <div class="entry-meta">
                                            <ul>
                                                <li><span>by</span> <a href="#">John Doe</a></li>
                                                <li><i class="icon-time"></i><a href="#">11 Mar 2021</a></li>
                                            </ul>
                                        </div>
                                        <div class="entry-content">
                                            <p class="mb-0">Pellentesque hic illo beatae rhoncus sint, quis,
                                                fugiat imperdiet unde architecto magna dui hymenaeos autem lorem eligendi,
                                                quae! Orci commodo, aute reiciendis, scelerisque inceptos, quibusdam iste
                                                debitis? Venenatis. Alias porta?</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6 infinity-loader">
                                <div class="posts-md">
                                    <div class="entry">
                                        <div class="entry-image">
                                            <a href="#"><img src="{{asset('news/demos/news/images/posts/market/3.jpg')}}" alt="Image"></a>
                                            <div class="entry-categories"><a href="#" class="bg-market">Market</a>
                                            </div>
                                        </div>
                                        <div class="entry-title title-sm nott">
                                            <h3 class="mb-2"><a href="#">The Olympics Opening Ceremony Left
                                                    America</a></h3>
                                        </div>
                                        <div class="entry-meta">
                                            <ul>
                                                <li><span>by</span> <a href="#">John Doe</a></li>
                                                <li><i class="icon-time"></i><a href="#">11 Mar 2021</a></li>
                                            </ul>
                                        </div>
                                        <div class="entry-content">
                                            <p class="mb-0">Tempus nullam sed ullam doloremque unde habitasse
                                                auctor tortor. Cursus, culpa numquam ut esse, harum alias? Lorem. Mattis
                                                eum, placeat eius turpis quam dapibus, eius quia atque tristique nostrud
                                                reiciendis</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6 infinity-loader">
                                <div class="posts-md">
                                    <div class="entry">
                                        <div class="entry-image">
                                            <a href="#"><img src="{{asset('news/demos/news/images/posts/travel/2.jpg')}}" alt="Image 3"></a>
                                            <div class="entry-categories"><a href="#" class="bg-travel">travel</a>
                                            </div>
                                        </div>
                                        <div class="entry-title title-sm nott">
                                            <h3 class="mb-2"><a href="#">10 Best place for Digital Nomads</a>
                                            </h3>
                                        </div>
                                        <div class="entry-meta">
                                            <ul>
                                                <li><span>by</span> <a href="#">John Doe</a></li>
                                                <li><i class="icon-time"></i><a href="#">11 Mar 2021</a></li>
                                            </ul>
                                        </div>
                                        <div class="entry-content">
                                            <p class="mb-0">Pellentesque hic illo beatae rhoncus sint, quis,
                                                fugiat imperdiet unde architecto magna dui hymenaeos autem lorem eligendi,
                                                quae! Orci commodo, aute reiciendis, scelerisque inceptos, quibusdam iste
                                                debitis? Venenatis. Alias porta?</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6 infinity-loader">
                                <div class="posts-md">
                                    <div class="entry">
                                        <div class="entry-image">
                                            <a href="#"><img src="{{asset('news/demos/news/images/posts/lifestyle/3.jpg')}}" alt="Image"></a>
                                            <div class="entry-categories"><a href="#" class="bg-lifestyle">lifestyle</a>
                                            </div>
                                        </div>
                                        <div class="entry-title title-sm nott">
                                            <h3 class="mb-2"><a href="#">Lose arm fat with these 5 quick
                                                    exercises!</a></h3>
                                        </div>
                                        <div class="entry-meta">
                                            <ul>
                                                <li><span>by</span> <a href="#">John Doe</a></li>
                                                <li><i class="icon-time"></i><a href="#">11 Mar 2021</a></li>
                                            </ul>
                                        </div>
                                        <div class="entry-content">
                                            <p class="mb-0">Tempus nullam sed ullam doloremque unde habitasse
                                                auctor tortor. Cursus, culpa numquam ut esse, harum alias? Lorem. Mattis
                                                eum, placeat eius turpis quam dapibus, eius quia atque tristique nostrud
                                                reiciendis</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <!-- Post Article -->
                                <div class="posts-md">
                                    <div class="entry">
                                        <div class="entry-image">
                                            <a href="demo-news-single.html"><img
                                                    src="{{asset('news/demos/news/images/posts/lifestyle/1.jpg')}}" alt="Image 3"></a>
                                            <div class="entry-categories"><a href="demo-news-category.html"
                                                    class="bg-lifestyle">lifestyle</a></div>
                                        </div>
                                        <div class="entry-title title-sm nott">
                                            <h3 class="mb-2"><a href="demo-news-single.html">Death, lifestyle And
                                                    Taxes</a></h3>
                                        </div>
                                        <div class="entry-meta">
                                            <ul>
                                                <li><span>by</span> <a href="#">John Doe</a></li>
                                                <li><i class="icon-time"></i><a href="#">11 Mar 2021</a></li>
                                            </ul>
                                        </div>
                                        <div class="entry-content">
                                            <p class="mb-0">Tempus nullam sed ullam doloremque unde habitasse
                                                auctor tortor. Cursus, culpa numquam ut esse, harum alias? Lorem. Mattis
                                                eum, placeat eius turpis quam dapibus, eius quia atque tristique nostrud
                                                reiciendis</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <!-- Post Article -->
                                <div class="posts-md">
                                    <div class="entry">
                                        <div class="entry-image">
                                            <a href="demo-news-single.html"><img src="{{asset('news/demos/news/images/posts/fashion/2.jpg')}}"
                                                    alt="Image"></a>
                                            <div class="entry-categories"><a href="demo-news-category.html"
                                                    class="bg-fashion">Fashion</a></div>
                                        </div>
                                        <div class="entry-title title-sm nott">
                                            <h3 class="mb-2"><a href="demo-news-single.html">The Ultimate Guide
                                                    To Fashion</a></h3>
                                        </div>
                                        <div class="entry-meta">
                                            <ul>
                                                <li><span>by</span> <a href="#">John Doe</a></li>
                                                <li><i class="icon-time"></i><a href="#">11 Mar 2021</a></li>
                                            </ul>
                                        </div>
                                        <div class="entry-content">
                                            <p class="mb-0">Tempus nullam sed ullam doloremque unde habitasse
                                                auctor tortor. Cursus, culpa numquam ut esse, harum alias? Lorem. Mattis
                                                eum, placeat eius turpis quam dapibus, eius quia atque tristique nostrud
                                                reiciendis</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>

                        <!-- Infinity Scroll Loader
           ============================================= -->
                        <div class="row">
                            <div class="col-md-12 text-center">
                                <div class="page-load-status hovering-load-status">
                                    <div class="css3-spinner infinite-scroll-request">
                                        <div class="css3-spinner-ball-pulse-sync">
                                            <div></div>
                                            <div></div>
                                            <div></div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Infinity Scroll Button
             ============================================= -->
                                <a href="demo-news-2.html"
                                    class="mt-4 button button-dark bg-dark button-rounded ls1 text-uppercase load-next-portfolio">Load
                                    more...</a>
                            </div>
                        </div>

                    </div>

                    <!-- Top Sidebar Area
          ============================================= -->
                    <div class="col-lg-4 sticky-sidebar-wrap mt-5 mt-lg-0">
                        <div class="sticky-sidebar">
                            <!-- Sidebar Widget 1
            ============================================= -->
                            <div class="widget clearfix">
                                <h4 class="mb-2 ls1 text-uppercase fw-bold">Connect with Us</h4>
                                <div class="line line-xs line-market"></div>
                                <div class="row center mt-4 clearfix">
                                    <div class="col-3">
                                        <a href="https://facebook.com/semicolonweb" target="_blank"
                                            class="social-icon si-dark float-none m-auto si-colored si-facebook">
                                            <i class="icon-facebook"></i>
                                            <i class="icon-facebook"></i>
                                        </a>
                                        <div class="counter mt-2 counter-inherit">
                                            <span class="fw-semibold" data-from="1000" data-to="58742"
                                                data-refresh-interval="100" data-speed="3000" data-comma="true"></span>
                                        </div>
                                        <small class="text-muted font-secondary">Likes</small>
                                    </div>
                                    <div class="col-3">
                                        <a href="https://twitter.com/__semicolon" target="_blank"
                                            class="social-icon si-dark float-none m-auto si-colored si-twitter">
                                            <i class="icon-twitter"></i>
                                            <i class="icon-twitter"></i>
                                        </a>
                                        <div class="counter mt-2 counter-inherit">
                                            <span class="fw-semibold" data-from="500" data-to="9654"
                                                data-refresh-interval="50" data-speed="2500" data-comma="true"></span>
                                        </div>
                                        <small class="text-muted font-secondary">Followers</small>
                                    </div>
                                    <div class="col-3">
                                        <a href="https://instagram.com/semicolonweb" target="_blank"
                                            class="social-icon si-dark float-none m-auto si-colored si-instagram">
                                            <i class="icon-instagram"></i>
                                            <i class="icon-instagram"></i>
                                        </a>
                                        <div class="counter mt-2 counter-inherit">
                                            <span class="fw-semibold" data-from="200" data-to="15475"
                                                data-refresh-interval="150" data-speed="3500" data-comma="true"></span>
                                        </div>
                                        <small class="text-muted font-secondary">Followers</small>
                                    </div>
                                    <div class="col-3">
                                        <a href="https://themeforest.net/item/canvas-the-multipurpose-html5-template/9228123"
                                            target="_blank"
                                            class="social-icon si-dark float-none m-auto si-colored si-rss">
                                            <i class="icon-rss"></i>
                                            <i class="icon-rss"></i>
                                        </a>
                                        <div class="counter mt-2 counter-inherit">
                                            <span class="fw-semibold" data-from="400" data-to="3244"
                                                data-refresh-interval="150" data-speed="3100" data-comma="true"></span>
                                        </div>
                                        <small class="text-muted font-secondary">Subscriber</small>
                                    </div>
                                    <div class="col-3 mt-3">
                                        <a href="https://themeforest.net/item/canvas-the-multipurpose-html5-template/9228123"
                                            target="_blank"
                                            class="social-icon si-dark float-none m-auto si-colored si-pinterest">
                                            <i class="icon-pinterest"></i>
                                            <i class="icon-pinterest"></i>
                                        </a>
                                        <div class="counter mt-2 counter-inherit">
                                            <span class="fw-semibold" data-from="400" data-to="2322"
                                                data-refresh-interval="150" data-speed="3100" data-comma="true"></span>
                                        </div>
                                        <small class="text-muted font-secondary">Followers</small>
                                    </div>
                                    <div class="col-3 mt-3">
                                        <a href="https://www.youtube.com/semicolonweb" target="_blank"
                                            class="social-icon si-dark float-none m-auto si-colored si-youtube">
                                            <i class="icon-youtube"></i>
                                            <i class="icon-youtube"></i>
                                        </a>
                                        <div class="counter mt-2 counter-inherit">
                                            <span class="fw-semibold" data-from="400" data-to="4211"
                                                data-refresh-interval="150" data-speed="3100" data-comma="true"></span>
                                        </div>
                                        <small class="text-muted font-secondary">Subscriber</small>
                                    </div>
                                    <div class="col-3 mt-3">
                                        <a href="https://themeforest.net/user/semiColonWeb/follow" target="_blank"
                                            class="social-icon si-dark float-none m-auto si-colored si-spotify">
                                            <i><img src="{{asset('news/demos/news/images/envato.svg')}}" width="20" height="20" alt="Image"
                                                    style="margin-bottom: 3px"></i>
                                            <i><img src="{{asset('news/demos/news/images/envato.svg')}}" width="20" height="20" alt="Image"
                                                    style="margin-bottom: 3px"></i>
                                        </a>
                                        <div class="counter mt-2 counter-inherit">
                                            <span class="fw-semibold" data-from="400" data-to="6742"
                                                data-refresh-interval="150" data-speed="3100" data-comma="true"></span>
                                        </div>
                                        <small class="text-muted font-secondary">Followers</small>
                                    </div>
                                    <div class="col-3 mt-3">
                                        <a href="https://www.youtube.com/semicolonweb" target="_blank"
                                            class="social-icon si-dark float-none m-auto si-colored si-vimeo">
                                            <i class="icon-vimeo"></i>
                                            <i class="icon-vimeo"></i>
                                        </a>
                                        <div class="counter mt-2 counter-inherit">
                                            <span class="fw-semibold" data-from="400" data-to="8532"
                                                data-refresh-interval="150" data-speed="3100" data-comma="true"></span>
                                        </div>
                                        <small class="text-muted font-secondary">Followers</small>
                                    </div>
                                </div>
                            </div>
                            <!-- Sidebar Widget 2
            ============================================= -->
                            <div class="widget clearfix">
                                <div class="card">
                                    <div class="card-body">
                                        <form class="form-signin">
                                            <div class="center">
                                                <i class="icon-line-mail text-muted mb-3"
                                                    style="font-size: 48px;line-height: 1"></i>
                                                <h3 class="h3 mb-3 fw-normal font-primary">Subscribe to Our Newsletter</h3>
                                                <p class="font-secondary mb-2">Lorem ipsum dolor sit adipisicing elit.</p>
                                            </div>

                                            <div class="form-label-group">
                                                <input type="email" id="inputEmail" class="form-control" required>
                                                <label for="inputEmail">Email address</label>
                                            </div>
                                            <button class="btn btn-lg bg-color text-white w-100 text-uppercase ls1"
                                                type="submit">Sign in</button>
                                            <div class="center"><small class="mt-5 text-muted fst-italic">We also
                                                    Hate Spam</small></div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <!-- Sidebar Widget 3
            ============================================= -->
                            <div class="widget clearfix">
                                <a href="https://themeforest.net/item/canvas-the-multipurpose-html5-template/9228123"><img
                                        src="{{asset('news/demos/news/images/ad/336x280.jpg')}}" alt="Ad"
                                        class="img-responsive aligncenter"></a>
                            </div>
                        </div>
                    </div> <!-- Sidebar End -->
                </div>
            </div> <!-- Container End -->

        </div>
    </section><!-- #content end -->
@endsection
