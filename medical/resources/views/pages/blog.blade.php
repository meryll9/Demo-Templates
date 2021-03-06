@extends('layout.main')
@section('content')
    <!-- Page Title
      ============================================= -->
    <section id="page-title" class="bg-transparent">

        <div class="container clearfix">
            <h1>Health News</h1>
            <span>A Short Page Title Tagline</span>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Blog</li>
            </ol>
        </div>

    </section><!-- #page-title end -->

    <!-- Content
      ============================================= -->
    <section id="content">
        <div class="content-wrap">
            <div class="container clearfix">

                <!-- Posts
         ============================================= -->
                <div id="posts" class="post-grid row grid-container mb-0 gutter-40">

                    <div class="entry col-12 col-sm-6 col-md-4 col-xl-3">
                        <div class="grid-inner">
                            <div class="entry-image">
                                <a href="{{asset('medical/demos/medical/images/gallery/2.jpg')}}" data-lightbox="image"><img
                                        src="{{asset('medical/demos/medical/images/gallery/thumbs/2.jpg')}}" alt="Standard Post with Image"></a>
                            </div>
                            <div class="entry-title">
                                <h2><a href="blog-single.html">This is a Standard post with a Preview Image</a></h2>
                            </div>
                            <div class="entry-meta">
                                <ul>
                                    <li><i class="icon-calendar3"></i> 10th Feb 2021</li>
                                    <li><a href="blog-single.html#comments"><i class="icon-comments"></i> 13</a></li>
                                    <li><a href="#"><i class="icon-camera-retro"></i></a></li>
                                </ul>
                            </div>
                            <div class="entry-content">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate, asperiores quod est
                                    tenetur in. Eligendi, deserunt, blanditiis est quisquam doloribus.</p>
                                <a href="blog-single.html" class="button button-rounded button-small m-0">Read More</a>
                            </div>
                        </div>
                    </div>

                    <div class="entry col-12 col-sm-6 col-md-4 col-xl-3">
                        <div class="grid-inner">
                            <div class="entry-image">
                                <iframe src="https://player.vimeo.com/video/37799587?color=ab0000" width="500" height="281"
                                    allow="autoplay; fullscreen" allowfullscreen></iframe>
                            </div>
                            <div class="entry-title">
                                <h2><a href="blog-single-full.html">This is a Standard post with an Embedded Video</a></h2>
                            </div>
                            <div class="entry-meta">
                                <ul>
                                    <li><i class="icon-calendar3"></i> 16th Feb 2021</li>
                                    <li><a href="blog-single-full.html#comments"><i class="icon-comments"></i> 19</a></li>
                                    <li><a href="#"><i class="icon-film"></i></a></li>
                                </ul>
                            </div>
                            <div class="entry-content">
                                <p>Asperiores, tenetur, blanditiis, quaerat odit ex exercitationem pariatur quibusdam
                                    veritatis quisquam laboriosam esse beatae hic perferendis velit deserunt!</p>
                                <a href="blog-single-full.html" class="button button-rounded button-small m-0">Read More</a>
                            </div>
                        </div>
                    </div>

                    <div class="entry col-12 col-sm-6 col-md-4 col-xl-3">
                        <div class="grid-inner">
                            <div class="entry-image">
                                <div class="fslider" data-arrows="false" data-lightbox="gallery">
                                    <div class="flexslider">
                                        <div class="slider-wrap">
                                            <div class="slide"><a href="{{asset('medical/demos/medical/images/gallery/1.jpg')}}"
                                                    data-lightbox="gallery-item"><img
                                                        src="{{asset('medical/demos/medical/images/blog/1-1.jpg')}}"
                                                        alt="Standard Post with Gallery"></a></div>
                                            <div class="slide"><a href="{{asset('medical/demos/medical/images/gallery/2.jpg')}}"
                                                    data-lightbox="gallery-item"><img
                                                        src="{{asset('medical/demos/medical/images/blog/1-2.jpg')}}"
                                                        alt="Standard Post with Gallery"></a></div>
                                            <div class="slide"><a href="{{asset('medical/demos/medical/images/gallery/3.jpg')}}"
                                                    data-lightbox="gallery-item"><img
                                                        src="{{asset('medical/demos/medical/images/blog/1-3.jpg')}}"
                                                        alt="Standard Post with Gallery"></a></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="entry-title">
                                <h2><a href="blog-single-small.html">This is a Standard post with a Slider Gallery</a></h2>
                            </div>
                            <div class="entry-meta">
                                <ul>
                                    <li><i class="icon-calendar3"></i> 24th Feb 2021</li>
                                    <li><a href="blog-single-small.html#comments"><i class="icon-comments"></i> 21</a></li>
                                    <li><a href="#"><i class="icon-picture"></i></a></li>
                                </ul>
                            </div>
                            <div class="entry-content">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ratione, voluptatem, dolorem
                                    animi nisi autem blanditiis enim culpa reiciendis et explicabo tenetur!</p>
                                <a href="blog-single-small.html" class="button button-rounded button-small m-0">Read
                                    More</a>
                            </div>
                        </div>
                    </div>

                    <div class="entry col-12 col-sm-6 col-md-4 col-xl-3">
                        <div class="grid-inner">
                            <div class="entry-image">
                                <blockquote>
                                    <p>"When you are courting a nice girl an hour seems like a second. When you sit on a
                                        red-hot cinder a second seems like an hour. That's relativity."</p>
                                    <footer>Albert Einstein</footer>
                                </blockquote>
                            </div>
                            <div class="entry-meta">
                                <ul>
                                    <li><i class="icon-calendar3"></i> 3rd Mar 2021</li>
                                    <li><a href="blog-single.html#comments"><i class="icon-comments"></i> 23</a></li>
                                    <li><a href="#"><i class="icon-quote-left"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="entry col-12 col-sm-6 col-md-4 col-xl-3">
                        <div class="grid-inner">
                            <div class="entry-image">
                                <div class="portfolio-single-image masonry-thumbs grid-container grid-3" data-big="3"
                                    data-lightbox="gallery">
                                    <a class="grid-item" href="{{asset('medical/demos/medical/images/gallery/1.jpg')}}"
                                        data-lightbox="gallery-item"><img src="{{asset('medical/demos/medical/images/gallery/thumbs/1.jpg')}}"
                                            alt="Image"></a>
                                    <a class="grid-item" href="{{asset('medical/demos/medical/images/gallery/2.jpg')}}"
                                        data-lightbox="gallery-item"><img src="{{asset('medical/demos/medical/images/gallery/thumbs/2.jpg')}}"
                                            alt="Image"></a>
                                    <a class="grid-item" href="{{asset('medical/demos/medical/images/gallery/3.jpg')}}"
                                        data-lightbox="gallery-item"><img src="{{asset('medical/demos/medical/images/gallery/thumbs/3.jpg')}}"
                                            alt="Image"></a>
                                    <a class="grid-item" href="{{asset('medical/demos/medical/images/gallery/4.jpg')}}"
                                        data-lightbox="gallery-item"><img src="{{asset('medical/demos/medical/images/gallery/thumbs/4.jpg')}}"
                                            alt="Image"></a>
                                    <a class="grid-item" href="{{asset('medical/demos/medical/images/gallery/5.jpg')}}"
                                        data-lightbox="gallery-item"><img src="{{asset('medical/demos/medical/images/gallery/thumbs/5.jpg')}}"
                                            alt="Image"></a>
                                    <a class="grid-item" href="{{asset('medical/demos/medical/images/gallery/6.jpg')}}"
                                        data-lightbox="gallery-item"><img src="{{asset('medical/demos/medical/images/gallery/thumbs/6.jpg')}}"
                                            alt="Image"></a>
                                    <a class="grid-item" href="{{asset('medical/demos/medical/images/gallery/7.jpg')}}"
                                        data-lightbox="gallery-item"><img src="{{asset('medical/demos/medical/images/gallery/thumbs/7.jpg')}}"
                                            alt="Image"></a>
                                    <a class="grid-item" href="{{asset('medical/demos/medical/images/gallery/8.jpg')}}"
                                        data-lightbox="gallery-item"><img src="{{asset('medical/demos/medical/images/gallery/thumbs/8.jpg')}}"
                                            alt="Image"></a>
                                    <a class="grid-item" href="{{asset('medical/demos/medical/images/gallery/9.jpg')}}"
                                        data-lightbox="gallery-item"><img src="{{asset('medical/demos/medical/images/gallery/thumbs/9.jpg')}}"
                                            alt="Image"></a>
                                </div>
                            </div>
                            <div class="entry-title">
                                <h2><a href="blog-single-thumbs.html">This is a Standard post with Masonry Thumbs
                                        Gallery</a></h2>
                            </div>
                            <div class="entry-meta">
                                <ul>
                                    <li><i class="icon-calendar3"></i> 13th Jun 2021</li>
                                    <li><a href="blog-single-thumbs.html#comments"><i class="icon-comments"></i> 21</a>
                                    </li>
                                    <li><a href="#"><i class="icon-picture"></i></a></li>
                                </ul>
                            </div>
                            <div class="entry-content">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ratione, voluptatem, dolorem
                                    animi nisi autem blanditiis enim culpa reiciendis et explicabo!</p>
                                <a href="blog-single-thumbs.html" class="button button-rounded button-small m-0">Read
                                    More</a>
                            </div>
                        </div>
                    </div>

                    <div class="entry col-12 col-sm-6 col-md-4 col-xl-3">
                        <div class="grid-inner">
                            <div class="entry-image">
                                <a href="{{asset('medical/demos/medical/images/gallery/5.jpg')}}" data-lightbox="image"><img
                                        src="{{asset('medical/demos/medical/images/gallery/thumbs/5.jpg')}}" alt="Standard Post with Image"></a>
                            </div>
                            <div class="entry-title">
                                <h2><a href="blog-single.html">This is a Standard post with a Preview Image</a></h2>
                            </div>
                            <div class="entry-meta">
                                <ul>
                                    <li><i class="icon-calendar3"></i> 17th Mar 2021</li>
                                    <li><a href="blog-single.html#comments"><i class="icon-comments"></i> 26</a></li>
                                    <li><a href="#"><i class="icon-link"></i></a></li>
                                </ul>
                            </div>
                            <div class="entry-content">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ratione, voluptatem, dolorem
                                    animi nisi autem blanditiis enim culpa reiciendis et explicabo!</p>
                                <a href="blog-single-thumbs.html" class="button button-rounded button-small m-0">Read
                                    More</a>
                            </div>
                        </div>
                    </div>

                    <div class="entry col-12 col-sm-6 col-md-4 col-xl-3">
                        <div class="grid-inner">
                            <div class="entry-image">
                                <div class="card">
                                    <div class="card-body">
                                        Uniquely optimize proactive leadership skills without turnkey outsourcing.
                                        Interactively syndicate extensive resources via bricks-and-clicks testing
                                        procedures. Globally evisculate corporate convergence and cross-unit quality
                                        vectors. Competently actualize technically sound systems via virtual expertise.
                                    </div>
                                </div>
                            </div>
                            <div class="entry-meta">
                                <ul>
                                    <li><i class="icon-calendar3"></i> 21st Mar 2021</li>
                                    <li><a href="blog-single.html#comments"><i class="icon-comments"></i> 11</a></li>
                                    <li><a href="#"><i class="icon-align-justify2"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="entry col-12 col-sm-6 col-md-4 col-xl-3">
                        <div class="grid-inner">
                            <div class="entry-image clearfix">
                                <div class="fslider" data-animation="fade" data-pagi="false" data-pause="6000"
                                    data-lightbox="gallery">
                                    <div class="flexslider">
                                        <div class="slider-wrap">
                                            <div class="slide"><a href="{{asset('medical/demos/medical/images/blog/3-1.jpg')}}"
                                                    data-lightbox="gallery-item"><img
                                                        src="{{asset('medical/demos/medical/images/blog/3-1.jpg')}}"
                                                        alt="Standard Post with Gallery"></a></div>
                                            <div class="slide"><a href="{{asset('medical/demos/medical/images/blog/3-2.jpg')}}"
                                                    data-lightbox="gallery-item"><img
                                                        src="{{asset('medical/demos/medical/images/blog/3-2.jpg')}}"
                                                        alt="Standard Post with Gallery"></a></div>
                                            <div class="slide"><a href="{{asset('medical/demos/medical/images/blog/3-3.jpg')}}"
                                                    data-lightbox="gallery-item"><img
                                                        src="{{asset('medical/demos/medical/images/blog/3-3.jpg')}}"
                                                        alt="Standard Post with Gallery"></a></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="entry-title">
                                <h2><a href="blog-single-thumbs.html">This is a Standard post with Fade Gallery</a></h2>
                            </div>
                            <div class="entry-meta">
                                <ul>
                                    <li><i class="icon-calendar3"></i> 3rd Apr 2021</li>
                                    <li><a href="blog-single-thumbs.html#comments"><i class="icon-comments"></i> 21</a>
                                    </li>
                                    <li><a href="#"><i class="icon-picture"></i></a></li>
                                </ul>
                            </div>
                            <div class="entry-content">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ratione, voluptatem, dolorem
                                    animi nisi autem blanditiis enim culpa reiciendis et explicabo!</p>
                                <a href="blog-single-thumbs.html" class="button button-rounded button-small m-0">Read
                                    More</a>
                            </div>
                        </div>
                    </div>

                    <div class="entry col-12 col-sm-6 col-md-4 col-xl-3">
                        <div class="grid-inner">
                            <div class="entry-image clearfix">
                                <a href="https://www.youtube.com/watch?v=aIIdMaO4Lqg" data-lightbox="iframe"><img
                                        src="{{asset('medical/demos/medical/images/blog/2.jpg')}}" alt="Youtube Video"></a>
                            </div>
                            <div class="entry-title">
                                <h2><a href="blog-single.html">Modal Popup Video</a></h2>
                            </div>
                            <div class="entry-meta">
                                <ul>
                                    <li><i class="icon-calendar3"></i> 28th April 2021</li>
                                    <li><a href="blog-single.html#comments"><i class="icon-comments"></i> 16</a></li>
                                    <li><a href="#"><i class="icon-music2"></i></a></li>
                                </ul>
                            </div>
                            <div class="entry-content">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ratione, voluptatem, dolorem
                                    animi nisi autem blanditiis enim culpa reiciendis et explicabo tenetur voluptate rerum.
                                </p>
                                <a href="blog-single.html" class="button button-rounded button-small m-0">Read More</a>
                            </div>
                        </div>
                    </div>

                    <div class="entry col-12 col-sm-6 col-md-4 col-xl-3">
                        <div class="grid-inner">
                            <div class="entry-image">
                                <iframe width="560" height="315" src="https://www.youtube.com/embed/Mja3BLDaOJA"
                                    allowfullscreen></iframe>
                            </div>
                            <div class="entry-title">
                                <h2><a href="blog-single-full.html">This is a Standard post with a Youtube Video</a></h2>
                            </div>
                            <div class="entry-meta">
                                <ul>
                                    <li><i class="icon-calendar3"></i> 30th Apr 2021</li>
                                    <li><a href="blog-single-full.html#comments"><i class="icon-comments"></i> 34</a></li>
                                    <li><a href="#"><i class="icon-film"></i></a></li>
                                </ul>
                            </div>
                            <div class="entry-content">
                                <p>Asperiores, tenetur, blanditiis, quaerat odit ex exercitationem pariatur quibusdam
                                    veritatis quisquam laboriosam esse beatae hic perferendis velit deserunt!</p>
                                <a href="blog-single-full.html" class="button button-rounded button-small m-0">Read
                                    More</a>
                            </div>
                        </div>
                    </div>

                    <div class="entry col-12 col-sm-6 col-md-4 col-xl-3">
                        <div class="grid-inner">
                            <div class="entry-image">
                                <a href="{{asset('medical/demos/medical/images/gallery/7.jpg')}}" data-lightbox="image"><img
                                        src="{{asset('medical/demos/medical/images/gallery/thumbs/7.jpg')}}" alt="Standard Post with Image"></a>
                            </div>
                            <div class="entry-title">
                                <h2><a href="blog-single.html">This is a Standard post with a Preview Image</a></h2>
                            </div>
                            <div class="entry-meta">
                                <ul>
                                    <li><i class="icon-calendar3"></i> 17th Mar 2021</li>
                                    <li><a href="blog-single.html#comments"><i class="icon-comments"></i> 26</a></li>
                                    <li><a href="#"><i class="icon-link"></i></a></li>
                                </ul>
                            </div>
                            <div class="entry-content">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ratione, voluptatem, dolorem
                                    animi nisi autem blanditiis enim culpa reiciendis et explicabo!</p>
                                <a href="blog-single-thumbs.html" class="button button-rounded button-small m-0">Read
                                    More</a>
                            </div>
                        </div>
                    </div>

                    <div class="entry col-12 col-sm-6 col-md-4 col-xl-3">
                        <div class="grid-inner">
                            <div class="entry-image">
                                <a href="{{asset('medical/demos/medical/images/blog/4.jpg')}}" data-lightbox="image"><img
                                        src="{{asset('medical/demos/medical/images/blog/4.jpg')}}" alt="Standard Post with Image"></a>
                            </div>
                            <div class="entry-title">
                                <h2><a href="blog-single.html">This is a Standard post with a Preview Image</a></h2>
                            </div>
                            <div class="entry-meta">
                                <ul>
                                    <li><i class="icon-calendar3"></i> 17th Mar 2021</li>
                                    <li><a href="blog-single.html#comments"><i class="icon-comments"></i> 26</a></li>
                                    <li><a href="#"><i class="icon-link"></i></a></li>
                                </ul>
                            </div>
                            <div class="entry-content">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ratione, voluptatem, dolorem
                                    animi nisi autem blanditiis enim culpa reiciendis et explicabo!</p>
                                <a href="blog-single-thumbs.html" class="button button-rounded button-small m-0">Read
                                    More</a>
                            </div>
                        </div>
                    </div>

                </div><!-- #posts end -->

            </div>

            <div class="promo promo-dark promo-full promo-uppercase bg-color footer-stick p-5">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-12 col-lg">
                            <h3 style="letter-spacing: 2px;">Get the Best Care for your Loved Ones</h3>
                            <span class="nott">We strive to provide Our Customers with Top Notch Support to make
                                their Theme</span>
                        </div>
                        <div class="col-12 col-lg-auto mt-4 mt-lg-0">
                            <a href="#"
                                class="button button-large button-border button-rounded button-light button-white m-0">Contact
                                Us</a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section><!-- #content end -->
@endsection
