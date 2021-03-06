@extends('layout.main')
@section('content')
    <!-- Content
      ============================================= -->
    <section id="content">
        <div class="content-wrap pt-5" style="overflow: visible;">
            <div class="container">
                <!-- Hero Area
         ============================================= -->
                <div class="row border-between">
                    <div class="col-lg-7 mb-5 mb-lg-0">
                        <!-- Post Article -->
                        <article class="entry border-bottom-0 mb-0">
                            <div class="entry-image">
                                <a href="single"><img
                                        src="{{ asset('blog/demos/blog/images/hero/full/1.jpg') }}" alt="Image 3"></a>
                            </div>
                            <div class="entry-title">
                                <div class="entry-categories"><a href="demo-blog-categories.html">Coronavirus Update -
                                        World</a></div>
                                <h3><a href="single" class="stretched-link color-underline"><span>Statement
                                            from Vice President Joe Biden on Record Number of Americans Filing for
                                            Unemployment</span></a></h3>
                            </div>
                            <div class="entry-meta">
                                <ul>
                                    <li><a href="#">Mar 11, 2016</a></li>
                                </ul>
                            </div>
                            <div class="entry-content">
                                <p>Asperiores, tenetur, blanditiis, quaerat odit ex exercitationem pariatur quibusdam
                                    veritatis quisquam laboriosam esse beatae hic perferendis. Lorem ipsum dolor sit amet.
                                    Rapidiously negotiate standardized web services and goal-oriented outsourcing. Uniquely
                                    repurpose compelling functionalities before parallel mindshare.</p>
                            </div>
                        </article>
                    </div>

                    <div class="col-lg-5">
                        <h3 class="font-secondary fw-medium mb-4 h4">Highlights</h3>

                        <div class="row posts-md col-mb-30">
                            <article class="entry col-12">
                                <div class="grid-inner row gutter-20">
                                    <div class="col-md-4">
                                        <a class="entry-image" href="single"><img
                                                src="{{ asset('blog/demos/blog/images/hero/2.jpg') }}" alt="Image"></a>
                                    </div>
                                    <div class="col-md-8">
                                        <div class="entry-title title-xs">
                                            <div class="entry-categories"><a href="demo-blog-categories.html">Market</a>
                                            </div>
                                            <h3><a href="single" class="stretched-link color-underline">What
                                                    Everyone???s Getting Wrong About the Toilet Paper Shortage</a></h3>
                                        </div>
                                        <div class="entry-meta">
                                            <ul>
                                                <li><a href="#">Mar 11, 2016</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </article>

                            <article class="entry col-12">
                                <div class="grid-inner row gutter-20">
                                    <div class="col-md-4">
                                        <a class="entry-image" href="single"><img
                                                src="{{ asset('blog/demos/blog/images/hero/3.jpg') }}" alt="Image"></a>
                                    </div>
                                    <div class="col-md-8">
                                        <div class="entry-title title-xs">
                                            <div class="entry-categories"><a href="demo-blog-categories.html">Tech</a></div>
                                            <h3><a href="single"
                                                    class="stretched-link color-underline">Designing an e-commerce site for
                                                    a Cloth store?????????a UI/UX case</a></h3>
                                        </div>
                                        <div class="entry-meta">
                                            <ul>
                                                <li><a href="#">Mar 11, 2016</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </article>

                            <article class="entry col-12">
                                <div class="grid-inner row gutter-20">
                                    <div class="col-md-4">
                                        <a class="entry-image" href="single"><img
                                                src="{{ asset('blog/demos/blog/images/hero/4.jpg') }}" alt="Image"></a>
                                    </div>
                                    <div class="col-md-8">
                                        <div class="entry-title title-xs">
                                            <div class="entry-categories"><a href="demo-blog-categories.html">Food</a></div>
                                            <h3><a href="single" class="stretched-link color-underline">The
                                                    Path: ???I stayed loyal to those who gave me opportunities, and tried to
                                                    remain humble every step of the way.???</a></h3>
                                        </div>
                                        <div class="entry-meta">
                                            <ul>
                                                <li><a href="#">Mar 11, 2016</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </article>

                            <article class="entry col-12">
                                <div class="grid-inner row gutter-20">
                                    <div class="col-md-4">
                                        <a class="entry-image" href="single"><img
                                                src="{{ asset('blog/demos/blog/images/hero/5.jpg') }}" alt="Image"></a>
                                    </div>
                                    <div class="col-md-8">
                                        <div class="entry-title title-xs">
                                            <div class="entry-categories"><a href="demo-blog-categories.html">Tech</a></div>
                                            <h3><a href="single" class="stretched-link color-underline">Adobe
                                                    XD: putting auto-animate to the test</a></h3>
                                        </div>
                                        <div class="entry-meta">
                                            <ul>
                                                <li><a href="#">Mar 11, 2016</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </article>
                        </div>

                    </div>
                </div> <!-- Hero Area End -->

                <!-- Subscribe Section
         ============================================= -->
                <div class="section section-colored rounded px-4">
                    <div class="row justify-content-center align-items-center">
                        <div class="col-lg-5">
                            <h3 class="mb-4 mb-lg-0">Sign up for Updates &amp; Newsletters.</h3>
                        </div>
                        <div class="col-lg-6">
                            <div class="widget subscribe-widget" data-loader="button">

                                <div class="widget-subscribe-form-result"></div>
                                <form id="widget-subscribe-form" action="include/subscribe.php" method="post"
                                    class="mb-0 d-flex">
                                    <input type="email" id="widget-subscribe-form-email" name="widget-subscribe-form-email"
                                        class="form-control form-control-lg not-dark required email"
                                        placeholder="Your Email Address">
                                    <button
                                        class="button button-large button-black button-dark fw-medium ls0 button-rounded m-0 ms-3"
                                        type="submit">Subscribe Now</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div> <!-- Subscribe Section End -->

                <!-- Video Section
         ============================================= -->
                <div class="d-flex justify-content-between mb-4">
                    <h3 class="font-secondary fw-medium m-0">Latest Videos</h3>
                    <a href="#" class="btn btn-sm btn-outline-secondary">More Content <i
                            class="icon-line-arrow-right"></i></a>
                </div>

                <div class="row posts-md col-mb-30">
                    <div class="col-md-4">
                        <article class="entry border-bottom-0 mb-0">
                            <div class="entry-image">
                                <a href="https://www.youtube.com/watch?v=P3Huse9K6Xs" data-lightbox="iframe"><img
                                        src="{{ asset('blog/demos/blog/images/video-thumbs/1.jpg') }}" alt="Image 3">
                                    <div class="play-icon"><i class="icon-play"></i>Watch</div>
                                </a>
                            </div>
                            <div class="entry-title title-sm">
                                <div class="entry-categories"><a href="demo-blog-categories.html">Travel</a></div>
                                <h3><a href="single" class="color-underline">The Best Destinations in Asia
                                        for Solo Travel</a></h3>
                            </div>
                            <div class="entry-meta">
                                <ul>
                                    <li><a href="#">Mar 11, 2016</a></li>
                                </ul>
                            </div>
                        </article>
                    </div>
                    <div class="col-md-4">
                        <article class="entry border-bottom-0 mb-0">
                            <div class="entry-image">
                                <a href="https://www.youtube.com/watch?v=P3Huse9K6Xs" data-lightbox="iframe"><img
                                        src="{{ asset('blog/demos/blog/images/video-thumbs/2.jpg') }}" alt="Image 3">
                                    <div class="play-icon"><i class="icon-play"></i>Watch</div>
                                </a>
                            </div>
                            <div class="entry-title title-sm">
                                <div class="entry-categories"><a href="demo-blog-categories.html">Fashion</a></div>
                                <h3><a href="single" class="color-underline">10 Trendy Fashion Instagram
                                        Profile You Need to Follow</a></h3>
                            </div>
                            <div class="entry-meta">
                                <ul>
                                    <li><a href="#">Mar 11, 2016</a></li>
                                </ul>
                            </div>
                        </article>
                    </div>
                    <div class="col-md-4">
                        <article class="entry border-bottom-0 mb-0">
                            <div class="entry-image">
                                <a href="https://www.youtube.com/watch?v=P3Huse9K6Xs" data-lightbox="iframe"><img
                                        src="{{ asset('blog/demos/blog/images/video-thumbs/3.jpg') }}" alt="Image 3">
                                    <div class="play-icon"><i class="icon-play"></i>Watch</div>
                                </a>
                            </div>
                            <div class="entry-title title-sm">
                                <div class="entry-categories"><a href="demo-blog-categories.html">Travel</a></div>
                                <h3><a href="single" class="color-underline">23 Top Travel Bloggers Who
                                        Inspire Us To Travel</a></h3>
                            </div>
                            <div class="entry-meta">
                                <ul>
                                    <li><a href="#">Mar 11, 2016</a></li>
                                </ul>
                            </div>
                        </article>
                    </div>
                </div> <!-- Video Section End -->

            </div>

            <!-- Dark Section Spotlight
        ============================================= -->
            <div class="section dark">
                <div class="container">
                    <h2 class="font-secondary fw-medium">Spotlights</h2>
                    <div class="row border-between">
                        <div class="col-lg-7 mb-5 mb-lg-0">
                            <!-- Post Article -->
                            <article class="entry border-bottom-0 mb-0">
                                <div class="entry-image">
                                    <a href="single"><img
                                            src="{{ asset('blog/demos/blog/images/hero/full/5.jpg') }}" alt="Image 3"></a>
                                </div>
                                <div class="entry-title">
                                    <div class="entry-categories"><a href="demo-blog-categories.html">Coronavirus Update -
                                            World</a></div>
                                    <h3><a href="single" class="stretched-link color-underline">Statement
                                            from Vice President Joe Biden on Record Number of Americans Filing for
                                            Unemployment</a></h3>
                                </div>
                                <div class="entry-meta">
                                    <ul>
                                        <li><a href="#">Mar 11, 2016</a></li>
                                    </ul>
                                </div>
                                <div class="entry-content">
                                    <p>Asperiores, tenetur, blanditiis, quaerat odit ex exercitationem pariatur quibusdam
                                        veritatis quisquam laboriosam esse beatae hic perferendis. Lorem ipsum dolor sit
                                        amet.</p>
                                </div>
                            </article>
                        </div>

                        <div class="col-lg-5">
                            <h3 class="font-secondary fw-medium mb-4 h4">Highlights</h3>

                            <div class="row posts-md col-mb-30">
                                <article class="entry col-12">
                                    <div class="grid-inner row gutter-20">
                                        <div class="col-md-4">
                                            <a class="entry-image" href="single"><img
                                                    src="{{ asset('blog/demos/blog/images/hero/2.jpg') }}" alt="Image"></a>
                                        </div>
                                        <div class="col-md-8">
                                            <div class="entry-title title-xs">
                                                <div class="entry-categories"><a
                                                        href="demo-blog-categories.html">Market</a></div>
                                                <h3><a href="single"
                                                        class="stretched-link color-underline">What Everyone???s Getting
                                                        Wrong About the Toilet Paper Shortage</a></h3>
                                            </div>
                                            <div class="entry-meta">
                                                <ul>
                                                    <li><a href="#">Mar 11, 2016</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </article>

                                <article class="entry col-12">
                                    <div class="grid-inner row gutter-20">
                                        <div class="col-md-4">
                                            <a class="entry-image" href="single"><img
                                                    src="{{ asset('blog/demos/blog/images/hero/3.jpg') }}" alt="Image"></a>
                                        </div>
                                        <div class="col-md-8">
                                            <div class="entry-title title-xs">
                                                <div class="entry-categories"><a href="demo-blog-categories.html">Tech</a>
                                                </div>
                                                <h3><a href="single"
                                                        class="stretched-link color-underline">Designing an e-commerce site
                                                        for a Cloth store?????????a UI/UX case</a></h3>
                                            </div>
                                            <div class="entry-meta">
                                                <ul>
                                                    <li><a href="#">Mar 11, 2016</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </article>

                                <article class="entry col-12">
                                    <div class="grid-inner row gutter-20">
                                        <div class="col-md-4">
                                            <a class="entry-image" href="single"><img
                                                    src="{{ asset('blog/demos/blog/images/hero/4.jpg') }}" alt="Image"></a>
                                        </div>
                                        <div class="col-md-8">
                                            <div class="entry-title title-xs">
                                                <div class="entry-categories"><a href="demo-blog-categories.html">Food</a>
                                                </div>
                                                <h3><a href="single"
                                                        class="stretched-link color-underline">The Path: ???I stayed loyal to
                                                        those who gave me opportunities, and tried to remain humble every
                                                        step of the way.???</a></h3>
                                            </div>
                                            <div class="entry-meta">
                                                <ul>
                                                    <li><a href="#">Mar 11, 2016</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </article>

                                <article class="entry col-12">
                                    <div class="grid-inner row gutter-20">
                                        <div class="col-md-4">
                                            <a class="entry-image" href="single"><img
                                                    src="{{ asset('blog/demos/blog/images/hero/5.jpg') }}" alt="Image"></a>
                                        </div>
                                        <div class="col-md-8">
                                            <div class="entry-title title-xs">
                                                <div class="entry-categories"><a
                                                        href="demo-blog-categories.html">Sports</a></div>
                                                <h3><a href="single"
                                                        class="stretched-link color-underline">Designing an e-commerce site
                                                        for a Cloth store?????????a UI/UX case</a></h3>
                                            </div>
                                            <div class="entry-meta">
                                                <ul>
                                                    <li><a href="#">Mar 11, 2016</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </article>
                            </div>

                        </div>
                    </div>
                </div>
            </div> <!-- Dark Section Spotlight End -->

            <div class="container">

                <!-- Based On Your Reading History
         ============================================= -->
                <div class="row border-between">

                    <!-- Left Side of Based On Your Reading History
          ============================================= -->
                    <div class="col-lg-8">
                        <h3 class="font-secondary fw-medium">Based On Your Reading History</h3>

                        <div class="row col-mb-50">
                            <article class="col-12">
                                <div class="row">
                                    <div class="col-md-6 mb-0">
                                        <a href="#" class="entry-image">
                                            <img src="{{ asset('blog/demos/blog/images/lists/1.jpg') }}" alt="Image">
                                        </a>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="entry-title mt-lg-0 mt-3">
                                            <div class="entry-categories"><a href="demo-blog-categories.html">Coronavirus
                                                    Update - World</a></div>
                                            <h3><a href="single"
                                                    class="color-underline stretched-link">Apple and Google Team Up to
                                                    ???Contact Trace??? the Coronavirus</a></h3>
                                        </div>
                                        <div class="entry-meta">
                                            <ul>
                                                <li><a href="#">Mar 11, 2016</a></li>
                                            </ul>
                                        </div>
                                        <div class="entry-content">
                                            <p>The technology giants said they would embed a feature in iPhones and Android
                                                devices to enable users to track infected people they???d come close to.</p>
                                        </div>
                                    </div>
                                </div>
                            </article>

                            <article class="col-12">
                                <div class="row">
                                    <div class="col-md-6 mb-0">
                                        <a href="#" class="entry-image">
                                            <img src="{{ asset('blog/demos/blog/images/lists/2.jpg') }}" alt="Image">
                                        </a>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="entry-title mt-lg-0 mt-3">
                                            <div class="entry-categories"><a href="demo-blog-categories.html">Food</a>
                                            </div>
                                            <h3><a href="single"
                                                    class="color-underline stretched-link">Quick, Easy and So
                                                    Satisfying</a></h3>
                                        </div>
                                        <div class="entry-meta">
                                            <ul>
                                                <li><a href="#">Mar 11, 2016</a></li>
                                            </ul>
                                        </div>
                                        <div class="entry-content">
                                            <p>Welcome to Five Weeknight Dishes. This newsletter is dedicated to recipes
                                                that are easy, quick and satisfying, words that all have a different meaning
                                                today than they did when we first started. I spent a few hours this week
                                                cleaning out my freezer and ??? compared with the other things on my to-do
                                                list.</p>
                                        </div>
                                    </div>
                                </div>
                            </article>

                            <article class="col-12">
                                <div class="row">
                                    <div class="col-md-6 mb-0">
                                        <a href="#" class="entry-image">
                                            <img src="{{ asset('blog/demos/blog/images/lists/3.jpg') }}" alt="Image">
                                        </a>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="entry-title mt-lg-0 mt-3">
                                            <div class="entry-categories"><a href="demo-blog-categories.html">Tech</a>
                                            </div>
                                            <h3><a href="single"
                                                    class="color-underline stretched-link">Optical Effects in User
                                                    Interfaces: An Illustrated Guide</a></h3>
                                        </div>
                                        <div class="entry-meta">
                                            <ul>
                                                <li><a href="#">Mar 11, 2016</a></li>
                                            </ul>
                                        </div>
                                        <div class="entry-content">
                                            <p>Our eyes are weird and often mislead us. But if you know the peculiarities of
                                                human vision, you can construct better designs. Not only do type designers
                                                utilize optical tricks for creating readable and well-balanced fonts, but
                                                it???s also helpful for designers, who craft user-computer interaction.</p>
                                        </div>
                                    </div>
                                </div>
                            </article>

                            <article class="col-12">
                                <div class="row">
                                    <div class="col-md-6 mb-0">
                                        <a href="#" class="entry-image">
                                            <img src="{{ asset('blog/demos/blog/images/lists/4.jpg') }}" alt="Image">
                                        </a>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="entry-title mt-lg-0 mt-3">
                                            <div class="entry-categories"><a href="demo-blog-categories.html">Health</a>
                                            </div>
                                            <h3><a href="single" class="color-underline stretched-link">How
                                                    to Stock Your Medicine Cabinet Just in Case</a></h3>
                                        </div>
                                        <div class="entry-meta">
                                            <ul>
                                                <li><a href="#">Mar 11, 2016</a></li>
                                            </ul>
                                        </div>
                                        <div class="entry-content">
                                            <p>Asperiores, tenetur, blanditiis, quaerat odit ex exercitationem pariatur
                                                quibusdam veritatis quisquam laboriosam esse beatae hic perferendis. Lorem
                                                ipsum dolor sit amet, consectetur adipisicing elit. Beatae, repudiandae.</p>
                                        </div>
                                    </div>
                                </div>
                            </article>
                        </div>
                    </div>

                    <!-- Right Side of Based On Your Reading History - Sticky
          ============================================= -->
                    <div class="col-lg-4 mt-5 mt-lg-0 position-sticky h-100" style="top: 234px;">
                        <h3 class="font-secondary fw-medium">This Week</h3>

                        <ul class="week-posts posts-sm row col-mb-30">
                            <li class="entry col-12">
                                <div class="grid-inner">
                                    <div class="entry-title">
                                        <h4><a href="single" class="color-underline stretched-link">The Best
                                                Destinations in Asia for Solo Travel</a></h4>
                                    </div>
                                    <div class="entry-meta">
                                        <ul>
                                            <li><a href="#">Mar 11, 2016</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </li>

                            <li class="entry col-12">
                                <div class="grid-inner">
                                    <div class="entry-title">
                                        <h4><a href="single" class="color-underline stretched-link">We Need
                                                a COVID-19 Phase 4 Relief Package. Here???s What Should Be In It.</a></h4>
                                    </div>
                                    <div class="entry-meta">
                                        <ul>
                                            <li><a href="#">Mar 11, 2016</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </li>

                            <li class="entry col-12">
                                <div class="grid-inner">
                                    <div class="entry-title">
                                        <h4><a href="single" class="color-underline stretched-link">UK
                                                government weighs Tesla's Model.</a></h4>
                                    </div>
                                    <div class="entry-meta">
                                        <ul>
                                            <li><a href="#">Mar 11, 2016</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </li>

                            <li class="entry col-12">
                                <div class="grid-inner">
                                    <div class="entry-title">
                                        <h4><a href="single" class="color-underline stretched-link">How
                                                Colleges Can Get Online Education Right</a></h4>
                                    </div>
                                    <div class="entry-meta">
                                        <ul>
                                            <li><a href="#">Mar 11, 2016</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </li>

                            <li class="entry col-12">
                                <div class="grid-inner">
                                    <div class="entry-title">
                                        <h4><a href="single" class="color-underline stretched-link">From
                                                Behind the Scenes to the Forefront: Canada???s Public Health Officers</a></h4>
                                    </div>
                                    <div class="entry-meta">
                                        <ul>
                                            <li><a href="#">Mar 11, 2016</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </li>
                        </ul>

                        <div class="line line-sm"></div>

                        <h3 class="font-secondary fw-medium">Ad</h3>
                        <div class="fb-post"
                            data-href="https://www.facebook.com/semicolonweb/posts/2855299871172671" data-width="500"
                            data-show-text="false"></div>

                    </div>
                </div> <!-- Based On Your Reading History End -->
            </div>

            <!-- Advertisement Section
        ============================================= -->
            <div class="section">
                <div class="container">
                    <div class="ad-banner">
                        <small class="mb-2 d-block">Advertisement</small>
                        <a href="https://themeforest.net/item/canvas-the-multipurpose-html5-template/9228123"
                            target="_blank"><img src="{{ asset('blog/demos/blog/images/ad.jpg') }}" alt="Ad Image"></a>
                    </div>
                </div>
            </div> <!-- Advertisement Section End -->

            <div class="container">
                <!-- All Categories
         ============================================= -->
                <div class="row border-between posts-md col-mb-50 mb-0">
                    <div class="col-md-6 col-lg-3">
                        <h3>World</h3>

                        <div class="row col-mb-30 mb-0">
                            <article class="entry col-12">
                                <div class="grid-inner">
                                    <div class="entry-title title-sm">
                                        <h3><a href="single"
                                                class="stretched-link color-underline">Coronavirus Live Updates: Singapore
                                                Sees Record Number of New Cases</a></h3>
                                    </div>
                                    <div class="entry-meta">
                                        <ul>
                                            <li><a href="#">Mar 11, 2020</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </article>

                            <article class="entry col-12">
                                <div class="grid-inner">
                                    <div class="entry-title title-sm">
                                        <h3><a href="single" class="stretched-link color-underline">???Will We
                                                Die Hungry???? A Teeming Manila Slum Chafes Under Lockdown</a></h3>
                                    </div>
                                    <div class="entry-meta">
                                        <ul>
                                            <li><a href="#">Mar 11, 2020</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </article>

                            <article class="entry col-12">
                                <div class="grid-inner">
                                    <div class="entry-title title-sm">
                                        <h3><a href="single" class="stretched-link color-underline">In
                                                Argentina, a Bid to Make Language Gender Neutral Gains Traction</a></h3>
                                    </div>
                                    <div class="entry-meta">
                                        <ul>
                                            <li><a href="#">Mar 11, 2020</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </article>
                        </div>

                        <a href="demo-blog-categories.html" class="more-link">View more<i
                                class="icon-line-arrow-right"></i></a>
                    </div>

                    <div class="col-md-6 col-lg-3">
                        <h3>Travel</h3>

                        <div class="row col-mb-30 mb-0">
                            <article class="entry col-12">
                                <div class="grid-inner">
                                    <div class="entry-title title-sm">
                                        <h3><a href="single" class="stretched-link color-underline">A Visual
                                                Trek Through the Sweltering Jungle: In Search of Colombia???s ???Lost City???</a>
                                        </h3>
                                    </div>
                                    <div class="entry-meta">
                                        <ul>
                                            <li><a href="#">Mar 11, 2020</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </article>

                            <article class="entry col-12">
                                <div class="grid-inner">
                                    <div class="entry-title title-sm">
                                        <h3><a href="single" class="stretched-link color-underline">Believe
                                                In Your Travel Skills But Never Stop Improving</a></h3>
                                    </div>
                                    <div class="entry-meta">
                                        <ul>
                                            <li><a href="#">Mar 11, 2020</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </article>

                            <article class="entry col-12">
                                <div class="grid-inner">
                                    <div class="entry-title title-sm">
                                        <h3><a href="single" class="stretched-link color-underline">How I
                                                Improved My Travel In One Easy Lesson</a></h3>
                                    </div>
                                    <div class="entry-meta">
                                        <ul>
                                            <li><a href="#">Mar 11, 2020</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </article>
                        </div>

                        <a href="demo-blog-categories.html" class="more-link">View more<i
                                class="icon-line-arrow-right"></i></a>
                    </div>

                    <div class="col-md-6 col-lg-3">
                        <h3>Fashion</h3>

                        <div class="row col-mb-30 mb-0">
                            <article class="entry col-12">
                                <div class="grid-inner">
                                    <div class="entry-title title-sm">
                                        <h3><a href="single" class="stretched-link color-underline">Top 10
                                                Tips To Grow Your Fashion</a></h3>
                                    </div>
                                    <div class="entry-meta">
                                        <ul>
                                            <li><a href="#">Mar 11, 2020</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </article>

                            <article class="entry col-12">
                                <div class="grid-inner">
                                    <div class="entry-title title-sm">
                                        <h3><a href="single" class="stretched-link color-underline">4 Ways
                                                You Can Grow Your Creativity Using Fashion</a></h3>
                                    </div>
                                    <div class="entry-meta">
                                        <ul>
                                            <li><a href="#">Mar 11, 2020</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </article>

                            <article class="entry col-12">
                                <div class="grid-inner">
                                    <div class="entry-title title-sm">
                                        <h3><a href="single" class="stretched-link color-underline">Top 15
                                                Best Fashion Android/iPhone Apps</a></h3>
                                    </div>
                                    <div class="entry-meta">
                                        <ul>
                                            <li><a href="#">Mar 11, 2020</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </article>
                        </div>

                        <a href="demo-blog-categories.html" class="more-link">View more<i
                                class="icon-line-arrow-right"></i></a>
                    </div>

                    <div class="col-md-6 col-lg-3">
                        <h3>Food</h3>

                        <div class="row col-mb-30 mb-0">
                            <article class="entry col-12">
                                <div class="grid-inner">
                                    <div class="entry-title title-sm">
                                        <h3><a href="single"
                                                class="stretched-link color-underline">Everything you need to know about
                                                supermarket delivery slots</a></h3>
                                    </div>
                                    <div class="entry-meta">
                                        <ul>
                                            <li><a href="#">Mar 11, 2020</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </article>

                            <article class="entry col-12">
                                <div class="grid-inner">
                                    <div class="entry-title title-sm">
                                        <h3><a href="single" class="stretched-link color-underline">How the
                                                diet industry uses and misuses knowledge of hunger and satiety</a></h3>
                                    </div>
                                    <div class="entry-meta">
                                        <ul>
                                            <li><a href="#">Mar 11, 2020</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </article>

                            <article class="entry col-12">
                                <div class="grid-inner">
                                    <div class="entry-title title-sm">
                                        <h3><a href="single" class="stretched-link color-underline">6
                                                protein-rich chutneys that can replace vegetables</a></h3>
                                    </div>
                                    <div class="entry-meta">
                                        <ul>
                                            <li><a href="#">Mar 11, 2020</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </article>
                        </div>

                        <a href="demo-blog-categories.html" class="more-link">View more<i
                                class="icon-line-arrow-right"></i></a>
                    </div>
                </div> <!-- All Categories Section End -->

            </div>
        </div>
    </section><!-- #content end -->
@endsection
