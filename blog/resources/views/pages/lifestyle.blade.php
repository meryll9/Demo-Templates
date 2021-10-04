@extends('layout.main')
@section('content')
    <!-- Page Title
      ============================================= -->
    <section id="page-title" class="page-title-center">

        <div class="container">
            <h1>Lifestyle</h1>
            <span>Phosfluorescently target clicks-and-mortar growth strategies for timely infrastructures. Monotonectally
                embrace high-quality applications.</span>
        </div>

    </section><!-- #page-title end -->

    <!-- Content
      ============================================= -->
    <section id="content">
        <div class="content-wrap pt-0 pt-sm-6">
            <div class="container">

                <!-- Single Page Categories
         ============================================= -->
                <div class="row gutter-50">
                    <div class="col-lg-3 cat-widgets position-sticky h-100" style="top: 234px;">
                        <div class="widget widget-search">
                            <form class="input-group">
                                <input class="form-control" type="search" placeholder="Search" aria-label="Search">
                                <button class="btn btn-outline-secondary icon-line-search" type="button"></button>
                            </form>
                        </div>

                        <div class="widget widget-nav mt-md-5">
                            <ul class="nav">
                                <li class="nav-item active">
                                    <a class="nav-link" href="#">All Categories</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Fashion</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Arts &amp; Culture</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Family</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Beauty</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Fitness</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Music</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Design &amp; Illustrations</a>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-lg-9 mt-5 mt-lg-0">
                        <div class="d-flex">
                            <div class="flex-grow-1">
                                <h3>All Lifestyle Posts</h3>
                            </div>
                            <div>
                                <!-- Example single danger button -->
                                <div class="btn-group">
                                    <button type="button" class="btn btn-sm btn-outline-secondary dropdown-toggle"
                                        data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Most
                                        Popular</button>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="#">Latest Posts</a>
                                        <a class="dropdown-item" href="#">Most Comments</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row col-mb-50 posts-md">
                            <div class="col-md-4">
                                <article class="entry">
                                    <div class="entry-image mb-3">
                                        <a href="single"><img src="{{asset('blog/demos/blog/images/categories/1.jpg')}}"
                                                alt="Image 3"></a>
                                    </div>
                                    <div class="entry-title title-sm">
                                        <div class="entry-categories"><a href="demo-blog-categories.html">Arts & Culture</a>
                                        </div>
                                        <h3><a href="single" class="color-underline stretched-link">On World
                                                Art Day, try out this activity for the whole family</a></h3>
                                    </div>
                                    <div class="entry-meta">
                                        <ul>
                                            <li>March 21, 2020</li>
                                        </ul>
                                    </div>
                                    <div class="entry-content mt-3">
                                        <p>Today’s freebie is a set of 60 beautiful multimedia icons designed by Carlotta
                                            Govi.</p>
                                        <a href="single" class="more-link">Read the artcile</a>
                                    </div>
                                </article>
                            </div>

                            <div class="col-md-4">
                                <article class="entry">
                                    <div class="entry-image mb-3">
                                        <a href="single"><img src="{{asset('blog/demos/blog/images/categories/2.jpg')}}"
                                                alt="Image 3"></a>
                                    </div>
                                    <div class="entry-title title-sm">
                                        <div class="entry-categories"><a href="demo-blog-categories.html">Fashion</a></div>
                                        <h3><a href="single" class="color-underline stretched-link">10 Trendy
                                                Fashion Instagram Profile You Need to Follow</a></h3>
                                    </div>
                                    <div class="entry-meta">
                                        <ul>
                                            <li>March 19, 2020</li>
                                        </ul>
                                    </div>
                                    <div class="entry-content mt-3">
                                        <p>Rapidiously network cross-media processes without viral services. Professionally
                                            syndicate holistic ROI.</p>
                                        <a href="single" class="more-link">Read the artcile</a>
                                    </div>
                                </article>
                            </div>

                            <div class="col-md-4">
                                <article class="entry">
                                    <div class="entry-image mb-3">
                                        <a href="single"><img src="{{asset('blog/demos/blog/images/categories/3.jpg')}}"
                                                alt="Image 3"></a>
                                    </div>
                                    <div class="entry-title title-sm">
                                        <div class="entry-categories"><a href="demo-blog-categories.html">Travel</a></div>
                                        <h3><a href="single" class="color-underline stretched-link">23 Top
                                                Travel Bloggers Who Inspire Us To Travel</a></h3>
                                    </div>
                                    <div class="entry-meta">
                                        <ul>
                                            <li>March 11, 2020</li>
                                        </ul>
                                    </div>
                                    <div class="entry-content mt-3">
                                        <p>Collaboratively leverage existing competitive alignments without robust ideas.
                                            Completely synthesize.</p>
                                        <a href="single" class="more-link">Read the artcile</a>
                                    </div>
                                </article>
                            </div>

                            <div class="col-md-4">
                                <article class="entry">
                                    <div class="entry-image mb-3">
                                        <a href="single"><img src="{{asset('blog/demos/blog/images/categories/4.jpg')}}"
                                                alt="Image 3"></a>
                                    </div>
                                    <div class="entry-title title-sm">
                                        <div class="entry-categories"><a href="demo-blog-categories.html">Travel</a></div>
                                        <h3><a href="single" class="color-underline stretched-link">The Best
                                                Destinations in Asia for Solo Travel</a></h3>
                                    </div>
                                    <div class="entry-meta">
                                        <ul>
                                            <li>Feb 23, 2020</li>
                                        </ul>
                                    </div>
                                    <div class="entry-content mt-3">
                                        <p>Enthusiastically network e-business models whereas intermandated alignments.
                                            Energistically enhance error-free.</p>
                                        <a href="single" class="more-link">Read the artcile</a>
                                    </div>
                                </article>
                            </div>

                            <div class="col-md-4">
                                <article class="entry">
                                    <div class="entry-image mb-3">
                                        <a href="single"><img src="{{asset('blog/demos/blog/images/categories/5.jpg')}}"
                                                alt="Image 3"></a>
                                    </div>
                                    <div class="entry-title title-sm">
                                        <div class="entry-categories"><a href="demo-blog-categories.html">Fitness</a></div>
                                        <h3><a href="single" class="color-underline stretched-link">Should
                                                You Wear a Face Mask While Walking Outside?</a></h3>
                                    </div>
                                    <div class="entry-meta">
                                        <ul>
                                            <li>Feb 20, 2020</li>
                                        </ul>
                                    </div>
                                    <div class="entry-content mt-3">
                                        <p>Enthusiastically network e-business models whereas intermandated alignments.
                                            Energistically enhance error-free.</p>
                                        <a href="single" class="more-link">Read the artcile</a>
                                    </div>
                                </article>
                            </div>

                            <div class="col-md-4">
                                <article class="entry">
                                    <div class="entry-image mb-3">
                                        <a href="single"><img src="{{asset('blog/demos/blog/images/categories/6.jpg')}}"
                                                alt="Image 3"></a>
                                    </div>
                                    <div class="entry-title title-sm">
                                        <div class="entry-categories"><a href="demo-blog-categories.html">Fitness</a></div>
                                        <h3><a href="single" class="color-underline stretched-link">10
                                                Walking Mistakes to Avoid if You Want to Lose Weight</a></h3>
                                    </div>
                                    <div class="entry-meta">
                                        <ul>
                                            <li>Feb 12, 2020</li>
                                        </ul>
                                    </div>
                                    <div class="entry-content mt-3">
                                        <p>Enthusiastically network e-business models whereas intermandated alignments.
                                            Energistically enhance error-free.</p>
                                        <a href="single" class="more-link">Read the artcile</a>
                                    </div>
                                </article>
                            </div>

                            <div class="col-md-4">
                                <article class="entry">
                                    <div class="entry-image mb-3">
                                        <a href="single"><img src="{{asset('blog/demos/blog/images/categories/7.jpg')}}"
                                                alt="Image 3"></a>
                                    </div>
                                    <div class="entry-title title-sm">
                                        <div class="entry-categories"><a href="demo-blog-categories.html">Design &amp;
                                                Illustrations</a></div>
                                        <h3><a href="single" class="color-underline stretched-link">60 SVG
                                                Multimedia Icons for Commercial Use</a></h3>
                                    </div>
                                    <div class="entry-meta">
                                        <ul>
                                            <li>Feb 10, 2020</li>
                                        </ul>
                                    </div>
                                    <div class="entry-content mt-3">
                                        <p>Enthusiastically network e-business models whereas intermandated alignments.
                                            Energistically enhance error-free.</p>
                                        <a href="single" class="more-link">Read the artcile</a>
                                    </div>
                                </article>
                            </div>

                            <div class="col-md-4">
                                <article class="entry">
                                    <div class="entry-image mb-3">
                                        <a href="single"><img src="{{asset('blog/demos/blog/images/categories/8.jpg')}}"
                                                alt="Image 3"></a>
                                    </div>
                                    <div class="entry-title title-sm">
                                        <div class="entry-categories"><a href="demo-blog-categories.html">Family</a></div>
                                        <h3><a href="single" class="color-underline stretched-link">Find
                                                high-quality apps for kids on Google Play</a></h3>
                                    </div>
                                    <div class="entry-meta">
                                        <ul>
                                            <li>Feb 08, 2020</li>
                                        </ul>
                                    </div>
                                    <div class="entry-content mt-3">
                                        <p>Enthusiastically network e-business models whereas intermandated alignments.
                                            Energistically enhance error-free.</p>
                                        <a href="single" class="more-link">Read the artcile</a>
                                    </div>
                                </article>
                            </div>

                            <div class="col-md-4">
                                <article class="entry">
                                    <div class="entry-image mb-3">
                                        <a href="single"><img src="{{asset('blog/demos/blog/images/categories/9.jpg')}}"
                                                alt="Image 3"></a>
                                    </div>
                                    <div class="entry-title title-sm">
                                        <div class="entry-categories"><a href="demo-blog-categories.html">Music</a></div>
                                        <h3><a href="single" class="color-underline stretched-link">Most
                                                Influential Music Blogs 2020</a></h3>
                                    </div>
                                    <div class="entry-meta">
                                        <ul>
                                            <li>Feb 06, 2020</li>
                                        </ul>
                                    </div>
                                    <div class="entry-content mt-3">
                                        <p>Enthusiastically network e-business models whereas intermandated alignments.
                                            Energistically enhance error-free.</p>
                                        <a href="single" class="more-link">Read the artcile</a>
                                    </div>
                                </article>
                            </div>
                        </div>

                    </div>
                </div>
                <!-- Single Page Categories End -->

                <!-- Subscribe Section
         ============================================= -->
                <div class="section section-colored rounded mb-0 px-4">
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

            </div>
        </div>
    </section><!-- #content end -->
@endsection
