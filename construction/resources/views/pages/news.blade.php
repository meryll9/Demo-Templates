@extends('layout.main')
@section('content')
    <!-- Page Title
      ============================================= -->
    <section id="page-title">

        <div class="container clearfix">
            <h1>News</h1>
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

                <div class="row gutter-40 col-mb-80">
                    <!-- Post Content
          ============================================= -->
                    <div class="postcontent col-lg-9">

                        <!-- Posts
           ============================================= -->
                        <div id="posts" class="row gutter-40 mb-0">

                            <div class="entry col-12">
                                <div class="grid-inner row g-0">
                                    <div class="col-md-4">
                                        <a class="entry-image" href="{{asset('/construction/demos/construction/images/team/4.jpg')}}"
                                            data-lightbox="image"><img src="{{asset('/construction/demos/construction/images/team/4.jpg')}}"
                                                alt="Standard Post with Image"></a>
                                    </div>
                                    <div class="col-md-8 ps-md-4">
                                        <div class="entry-title title-sm">
                                            <h2><a href="#">This is a Standard post with a Preview Image</a></h2>
                                        </div>
                                        <div class="entry-meta">
                                            <ul>
                                                <li><i class="icon-calendar3"></i> 10th Feb 2021</li>
                                                <li><a href="#"><i class="icon-user"></i> admin</a></li>
                                                <li><i class="icon-folder-open"></i> <a href="#">General</a>, <a
                                                        href="#">Media</a></li>
                                                <li><a href="#"><i class="icon-comments"></i> 13</a></li>
                                                <li><a href="#"><i class="icon-camera-retro"></i></a></li>
                                            </ul>
                                        </div>
                                        <div class="entry-content">
                                            <p>Completely unleash web-enabled technology for sustainable channels.
                                                Authoritatively innovate innovative synergy rather than professional
                                                outsourcing. Conveniently myocardinate leading-edge functionalities with
                                                cutting-edge imperatives. Enthusiastically synergize prospective convergence
                                                without user-centric meta-services. Conveniently leverage other's impactful
                                                metrics after value-added "outside the box" thinking. Efficiently
                                                conceptualize interdependent markets whereas functionalized technology.</p>
                                            <a href="#" class="button button-border button-rounded">Read More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="entry col-12">
                                <div class="grid-inner row g-0">
                                    <div class="col-md-4">
                                        <div class="entry-image">
                                            <iframe src="https://player.vimeo.com/video/87701971" width="500" height="350"
                                                allow="autoplay; fullscreen" allowfullscreen></iframe>
                                        </div>
                                    </div>
                                    <div class="col-md-8 ps-md-4">
                                        <div class="entry-title title-sm">
                                            <h2><a href="#">This is a Standard post with an Embedded Video</a></h2>
                                        </div>
                                        <div class="entry-meta">
                                            <ul>
                                                <li><i class="icon-calendar3"></i> 16th Feb 2021</li>
                                                <li><a href="#"><i class="icon-user"></i> admin</a></li>
                                                <li><i class="icon-folder-open"></i> <a href="#">Videos</a>, <a
                                                        href="#">News</a></li>
                                                <li><a href="#"><i class="icon-comments"></i> 19</a></li>
                                                <li><a href="#"><i class="icon-film"></i></a></li>
                                            </ul>
                                        </div>
                                        <div class="entry-content">
                                            <p>Asperiores, tenetur, blanditiis, quaerat odit ex exercitationem pariatur
                                                quibusdam veritatis quisquam laboriosam esse beatae hic perferendis velit
                                                deserunt soluta iste repellendus officia in neque veniam debitis placeat quo
                                                unde reprehenderit eum facilis vitae.</p>
                                            <a href="#" class="button button-border button-rounded">Read More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="entry col-12">
                                <div class="grid-inner row g-0">
                                    <div class="col-md-4">
                                        <div class="entry-image">
                                            <div class="fslider" data-arrows="false" data-lightbox="gallery">
                                                <div class="flexslider">
                                                    <div class="slider-wrap">
                                                        <div class="slide"><a
                                                                href="{{asset('/construction/demos/construction/images/projects/3.jpg')}}"
                                                                data-lightbox="gallery-item"><img
                                                                    src="{{asset('/construction/demos/construction/images/projects/3.jpg')}}"
                                                                    alt="Standard Post with Gallery"></a></div>
                                                        <div class="slide"><a
                                                                href="{{asset('/construction/demos/construction/images/projects/4.jpg')}}"
                                                                data-lightbox="gallery-item"><img
                                                                    src="{{asset('/construction/demos/construction/images/projects/4.jpg')}}"
                                                                    alt="Standard Post with Gallery"></a></div>
                                                        <div class="slide"><a
                                                                href="{{asset('/construction/demos/construction/images/projects/5.jpg')}}"
                                                                data-lightbox="gallery-item"><img
                                                                    src="{{asset('/construction/demos/construction/images/projects/5.jpg')}}"
                                                                    alt="Standard Post with Gallery"></a></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-8 ps-md-4">
                                        <div class="entry-title title-sm">
                                            <h2><a href="#">This is a Standard post with a Slider Gallery</a></h2>
                                        </div>
                                        <div class="entry-meta">
                                            <ul>
                                                <li><i class="icon-calendar3"></i> 24th Feb 2021</li>
                                                <li><a href="#"><i class="icon-user"></i> admin</a></li>
                                                <li><i class="icon-folder-open"></i> <a href="#">Gallery</a>, <a
                                                        href="#">Media</a></li>
                                                <li><a href="#"><i class="icon-comments"></i> 21</a></li>
                                                <li><a href="#"><i class="icon-picture"></i></a></li>
                                            </ul>
                                        </div>
                                        <div class="entry-content">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ratione,
                                                voluptatem, dolorem animi nisi autem blanditiis enim culpa reiciendis et
                                                explicabo tenetur voluptate rerum molestiae eaque possimus exercitationem
                                                eligendi fuga. Maiores.</p>
                                            <a href="#" class="button button-border button-rounded">Read More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="entry col-12">
                                <div class="grid-inner row g-0">
                                    <div class="col-12">
                                        <div class="entry-image">
                                            <blockquote>
                                                <p>"When you are courting a nice girl an hour seems like a second. When you
                                                    sit on a red-hot cinder a second seems like an hour. That's relativity."
                                                </p>
                                                <footer>Albert Einstein</footer>
                                            </blockquote>
                                        </div>
                                        <div class="entry-meta">
                                            <ul>
                                                <li><i class="icon-calendar3"></i> 3rd Mar 2021</li>
                                                <li><a href="#"><i class="icon-user"></i> admin</a></li>
                                                <li><i class="icon-folder-open"></i> <a href="#">Quotes</a>, <a
                                                        href="#">People</a></li>
                                                <li><a href="#"><i class="icon-comments"></i> 23</a></li>
                                                <li><a href="#"><i class="icon-quote-left"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="entry col-12">
                                <div class="grid-inner row g-0">
                                    <div class="col-md-4">
                                        <div class="entry-image">
                                            <div class="portfolio-single-image masonry-thumbs grid-container grid-3"
                                                data-big="3" data-lightbox="gallery">
                                                <a class="grid-item" href="{{asset('/construction/demos/construction/images/gallery/2.jpg')}}"
                                                    data-lightbox="gallery-item"><img
                                                        src="{{asset('/construction/demos/construction/images/gallery/thumbs/2.jpg')}}"
                                                        alt="Image"></a>
                                                <a class="grid-item" href="{{asset('/construction/demos/construction/images/gallery/3.jpg')}}"
                                                    data-lightbox="gallery-item"><img
                                                        src="{{asset('/construction/demos/construction/images/gallery/thumbs/3.jpg')}}"
                                                        alt="Image"></a>
                                                <a class="grid-item" href="{{asset('/construction/demos/construction/images/gallery/6.jpg')}}"
                                                    data-lightbox="gallery-item"><img
                                                        src="{{asset('/construction/demos/construction/images/gallery/thumbs/6.jpg')}}"
                                                        alt="Image"></a>
                                                <a class="grid-item" href="{{asset('/construction/demos/construction/images/gallery/7.jpg')}}"
                                                    data-lightbox="gallery-item"><img
                                                        src="{{asset('/construction/demos/construction/images/gallery/thumbs/7.jpg')}}"
                                                        alt="Image"></a>
                                                <a class="grid-item" href="{{asset('/construction/demos/construction/images/gallery/8.jpg')}}"
                                                    data-lightbox="gallery-item"><img
                                                        src="{{asset('/construction/demos/construction/images/gallery/thumbs/8.jpg')}}"
                                                        alt="Image"></a>
                                                <a class="grid-item" href="{{asset('/construction/demos/construction/images/gallery/9.jpg')}}"
                                                    data-lightbox="gallery-item"><img
                                                        src="{{asset('/construction/demos/construction/images/gallery/thumbs/9.jpg')}}"
                                                        alt="Image"></a>
                                                <a class="grid-item" href="{{asset('/construction/demos/construction/images/gallery/10.jpg')}}"
                                                    data-lightbox="gallery-item"><img
                                                        src="{{asset('/construction/demos/construction/images/gallery/thumbs/10.jpg')}}"
                                                        alt="Image"></a>
                                                <a class="grid-item" href="{{asset('/construction/demos/construction/images/gallery/11.jpg')}}"
                                                    data-lightbox="gallery-item"><img
                                                        src="{{asset('/construction/demos/construction/images/gallery/thumbs/11.jpg')}}"
                                                        alt="Image"></a>
                                                <a class="grid-item" href="{{asset('/construction/demos/construction/images/gallery/4.jpg')}}"
                                                    data-lightbox="gallery-item"><img
                                                        src="{{asset('/construction/demos/construction/images/gallery/thumbs/4.jpg')}}"
                                                        alt="Image"></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-8 ps-md-4">
                                        <div class="entry-title title-sm">
                                            <h2><a href="#">This is a Standard post with Masonry Thumbs Gallery</a></h2>
                                        </div>
                                        <div class="entry-meta">
                                            <ul>
                                                <li><i class="icon-calendar3"></i> 3rd Mar 2021</li>
                                                <li><a href="#"><i class="icon-user"></i> admin</a></li>
                                                <li><i class="icon-folder-open"></i> <a href="#">Gallery</a>, <a
                                                        href="#">Media</a></li>
                                                <li><a href="#"><i class="icon-comments"></i> 21</a></li>
                                                <li><a href="#"><i class="icon-picture"></i></a></li>
                                            </ul>
                                        </div>
                                        <div class="entry-content">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ratione,
                                                voluptatem, dolorem animi nisi autem blanditiis enim culpa reiciendis et
                                                explicabo tenetur voluptate rerum molestiae eaque possimus exercitationem
                                                eligendi fuga.</p>
                                            <a href="#" class="button button-border button-rounded">Read More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="entry col-12">
                                <div class="grid-inner row g-0">
                                    <div class="col-12">
                                        <div class="entry-image">
                                            <a href="https://themeforest.net" class="entry-link" target="_blank">
                                                Themeforest.net
                                                <span>- https://themeforest.net</span>
                                            </a>
                                        </div>
                                        <div class="entry-meta">
                                            <ul>
                                                <li><i class="icon-calendar3"></i> 17th Mar 2021</li>
                                                <li><a href="#"><i class="icon-user"></i> admin</a></li>
                                                <li><i class="icon-folder-open"></i> <a href="#">Links</a>, <a
                                                        href="#">Suggestions</a></li>
                                                <li><a href="#"><i class="icon-comments"></i> 26</a></li>
                                                <li><a href="#"><i class="icon-link"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="entry col-12">
                                <div class="grid-inner row g-0">
                                    <div class="col-12">
                                        <div class="entry-image">
                                            <div class="card">
                                                <div class="card-body">
                                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quia, fuga
                                                    optio voluptatibus saepe tenetur aliquam debitis eos accusantium! Vitae,
                                                    hic, atque aliquid repellendus accusantium laudantium minus eaque
                                                    quibusdam ratione sapiente.
                                                </div>
                                            </div>
                                        </div>
                                        <div class="entry-meta">
                                            <ul>
                                                <li><i class="icon-calendar3"></i> 21st Mar 2021</li>
                                                <li><a href="#"><i class="icon-user"></i> admin</a></li>
                                                <li><i class="icon-folder-open"></i> <a href="#">Status</a>, <a
                                                        href="#">News</a></li>
                                                <li><a href="#"><i class="icon-comments"></i> 11</a></li>
                                                <li><a href="#"><i class="icon-align-justify2"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="entry col-12">
                                <div class="grid-inner row g-0">
                                    <div class="col-md-4">
                                        <a class="entry-image" href="{{asset('/construction/demos/construction/images/projects/7.jpg')}}"
                                            data-lightbox="image"><img src="{{asset('/construction/demos/construction/images/projects/7.jpg')}}"
                                                alt="Standard Post with Image"></a>
                                    </div>
                                    <div class="col-md-8 ps-md-4">
                                        <div class="entry-title title-sm">
                                            <h2><a href="#">This is an Embedded Audio Post</a></h2>
                                        </div>
                                        <div class="entry-meta">
                                            <ul>
                                                <li><i class="icon-calendar3"></i> 28th Apr 2021</li>
                                                <li><a href="#"><i class="icon-user"></i> admin</a></li>
                                                <li><i class="icon-folder-open"></i> <a href="#">Audio</a>, <a
                                                        href="#">General</a></li>
                                                <li><a href="#"><i class="icon-comments"></i> 16</a></li>
                                                <li><a href="#"><i class="icon-music2"></i></a></li>
                                            </ul>
                                        </div>
                                        <div class="entry-content">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ratione,
                                                voluptatem, dolorem animi nisi autem blanditiis enim culpa reiciendis et
                                                explicabo tenetur voluptate rerum molestiae eaque possimus exercitationem
                                                eligendi fuga.</p>
                                            <a href="#" class="button button-border button-rounded">Read More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div><!-- #posts end -->

                        <!-- Pagination
           ============================================= -->
                        <div class="row mb-3">
                            <div class="col-12">
                                <a href="#" class="btn btn-outline-secondary float-start">&larr; Older</a>
                                <a href="#" class="btn btn-outline-dark float-end">Newer &rarr;</a>
                            </div>
                        </div>
                        <!-- .pager end -->

                    </div><!-- .postcontent end -->

                    <!-- Sidebar
          ============================================= -->
                    <div class="sidebar col-lg-3">
                        <div class="sidebar-widgets-wrap">

                            <div class="widget widget-twitter-feed clearfix">

                                <h4>Twitter Feed</h4>
                                <ul class="iconlist twitter-feed" data-username="envato" data-count="2">
                                    <li></li>
                                </ul>

                                <a href="#" class="btn btn-secondary btn-sm float-end">Follow Us on Twitter</a>

                            </div>

                            <div class="widget clearfix">

                                <h4>Flickr Photostream</h4>
                                <div id="flickr-widget" class="flickr-feed masonry-thumbs grid-container"
                                    data-id="613394@N22" data-count="16" data-type="group" data-lightbox="gallery"></div>

                            </div>

                            <div class="widget clearfix">

                                <div class="tabs mb-0 clearfix" id="sidebar-tabs">

                                    <ul class="tab-nav clearfix">
                                        <li><a href="#tabs-1">Popular</a></li>
                                        <li><a href="#tabs-2">Recent</a></li>
                                        <li><a href="#tabs-3"><i class="icon-comments-alt me-0"></i></a></li>
                                    </ul>

                                    <div class="tab-container">

                                        <div class="tab-content clearfix" id="tabs-1">
                                            <div class="posts-sm row col-mb-30" id="popular-post-list-sidebar">
                                                <div class="entry col-12">
                                                    <div class="grid-inner row g-0">
                                                        <div class="col-auto">
                                                            <div class="entry-image">
                                                                <a href="#"><img
                                                                        src="{{asset('/construction/demos/construction/images/gallery/thumbs/3.jpg')}}"
                                                                        alt="Image"></a>
                                                            </div>
                                                        </div>
                                                        <div class="col ps-3">
                                                            <div class="entry-title">
                                                                <h4><a href="#">Lorem ipsum dolor sit amet, consectetur</a>
                                                                </h4>
                                                            </div>
                                                            <div class="entry-meta">
                                                                <ul>
                                                                    <li><i class="icon-comments-alt"></i> 35 Comments</li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="entry col-12">
                                                    <div class="grid-inner row g-0">
                                                        <div class="col-auto">
                                                            <div class="entry-image">
                                                                <a href="#"><img
                                                                        src="{{asset('/construction/demos/construction/images/gallery/thumbs/2.jpg')}}"
                                                                        alt="Image"></a>
                                                            </div>
                                                        </div>
                                                        <div class="col ps-3">
                                                            <div class="entry-title">
                                                                <h4><a href="#">Elit Assumenda vel amet dolorum quasi</a>
                                                                </h4>
                                                            </div>
                                                            <div class="entry-meta">
                                                                <ul>
                                                                    <li><i class="icon-comments-alt"></i> 24 Comments</li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="entry col-12">
                                                    <div class="grid-inner row g-0">
                                                        <div class="col-auto">
                                                            <div class="entry-image">
                                                                <a href="#"><img
                                                                        src="{{asset('/construction/demos/construction/images/gallery/thumbs/1.jpg')}}"
                                                                        alt="Image"></a>
                                                            </div>
                                                        </div>
                                                        <div class="col ps-3">
                                                            <div class="entry-title">
                                                                <h4><a href="#">Debitis nihil placeat, illum est nisi</a>
                                                                </h4>
                                                            </div>
                                                            <div class="entry-meta">
                                                                <ul>
                                                                    <li><i class="icon-comments-alt"></i> 19 Comments</li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-content clearfix" id="tabs-2">
                                            <div class="posts-sm row col-mb-30" id="recent-post-list-sidebar">
                                                <div class="entry col-12">
                                                    <div class="grid-inner row g-0">
                                                        <div class="col-auto">
                                                            <div class="entry-image">
                                                                <a href="#"><img
                                                                        src="{{asset('/construction/demos/construction/images/gallery/thumbs/4.jpg')}}"
                                                                        alt="Image"></a>
                                                            </div>
                                                        </div>
                                                        <div class="col ps-3">
                                                            <div class="entry-title">
                                                                <h4><a href="#">Lorem ipsum dolor sit amet, consectetur</a>
                                                                </h4>
                                                            </div>
                                                            <div class="entry-meta">
                                                                <ul>
                                                                    <li>10th July 2021</li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="entry col-12">
                                                    <div class="grid-inner row g-0">
                                                        <div class="col-auto">
                                                            <div class="entry-image">
                                                                <a href="#"><img
                                                                        src="{{asset('/construction/demos/construction/images/gallery/thumbs/5.jpg')}}"
                                                                        alt="Image"></a>
                                                            </div>
                                                        </div>
                                                        <div class="col ps-3">
                                                            <div class="entry-title">
                                                                <h4><a href="#">Elit Assumenda vel amet dolorum quasi</a>
                                                                </h4>
                                                            </div>
                                                            <div class="entry-meta">
                                                                <ul>
                                                                    <li>10th July 2021</li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="entry col-12">
                                                    <div class="grid-inner row g-0">
                                                        <div class="col-auto">
                                                            <div class="entry-image">
                                                                <a href="#"><img
                                                                        src="{{asset('/construction/demos/construction/images/gallery/thumbs/6.jpg')}}"
                                                                        alt="Image"></a>
                                                            </div>
                                                        </div>
                                                        <div class="col ps-3">
                                                            <div class="entry-title">
                                                                <h4><a href="#">Debitis nihil placeat, illum est nisi</a>
                                                                </h4>
                                                            </div>
                                                            <div class="entry-meta">
                                                                <ul>
                                                                    <li>10th July 2021</li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-content clearfix" id="tabs-3">
                                            <div class="posts-sm row col-mb-30" id="recent-comments-list-sidebar">
                                                <div class="entry col-12">
                                                    <div class="grid-inner row g-0">
                                                        <div class="col-auto">
                                                            <div class="entry-image">
                                                                <a href="#"><img class="rounded-circle"
                                                                        src="{{asset('/construction/images/icons/avatar.jpg')}}" alt="User Avatar"></a>
                                                            </div>
                                                        </div>
                                                        <div class="col ps-3">
                                                            <strong>John Doe:</strong> Veritatis recusandae sunt repellat
                                                            distinctio...
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="entry col-12">
                                                    <div class="grid-inner row g-0">
                                                        <div class="col-auto">
                                                            <div class="entry-image">
                                                                <a href="#"><img class="rounded-circle"
                                                                        src="{{asset('/construction/images/icons/avatar.jpg')}}" alt="User Avatar"></a>
                                                            </div>
                                                        </div>
                                                        <div class="col ps-3">
                                                            <strong>Mary Jane:</strong> Possimus libero, earum officia
                                                            architecto maiores....
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="entry col-12">
                                                    <div class="grid-inner row g-0">
                                                        <div class="col-auto">
                                                            <div class="entry-image">
                                                                <a href="#"><img class="rounded-circle"
                                                                        src="{{asset('/construction/images/icons/avatar.jpg')}}" alt="User Avatar"></a>
                                                            </div>
                                                        </div>
                                                        <div class="col ps-3">
                                                            <strong>Site Admin:</strong> Deleniti magni labore laboriosam
                                                            odio...
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>

                                </div>

                            </div>

                            <div class="widget clearfix">

                                <h4>Portfolio Carousel</h4>
                                <div id="oc-portfolio-sidebar" class="owl-carousel carousel-widget" data-items="1"
                                    data-margin="10" data-loop="true" data-nav="false" data-autoplay="5000">

                                    <div class="portfolio-item">
                                        <div class="portfolio-image">
                                            <a href="#">
                                                <img src="{{asset('/construction/demos/construction/images/projects/3.jpg')}}" alt="Image">
                                            </a>
                                            <div class="bg-overlay">
                                                <div class="bg-overlay-content dark" data-hover-animate="fadeIn"
                                                    data-hover-speed="350">
                                                    <a href="https://vimeo.com/89396394"
                                                        class="overlay-trigger-icon bg-light text-dark"
                                                        data-hover-animate="zoomIn" data-hover-speed="350"
                                                        data-lightbox="iframe"><i class="icon-line-play"></i></a>
                                                </div>
                                                <div class="bg-overlay-bg dark" data-hover-animate="fadeIn"
                                                    data-hover-speed="350"></div>
                                            </div>
                                        </div>
                                        <div class="portfolio-desc center pb-0">
                                            <h3><a href="#">Wavelength Structure</a></h3>
                                            <span><a href="#">Madrid, Spain</a></span>
                                        </div>
                                    </div>

                                    <div class="portfolio-item">
                                        <div class="portfolio-image">
                                            <a href="portfolio-single.html">
                                                <img src="{{asset('/construction/demos/construction/images/projects/1.jpg')}}" alt="Image">
                                            </a>
                                            <div class="bg-overlay">
                                                <div class="bg-overlay-content dark" data-hover-animate="fadeIn"
                                                    data-hover-speed="350">
                                                    <a href="images/blog/full/1.jpg')}}"
                                                        class="overlay-trigger-icon bg-light text-dark"
                                                        data-hover-animate="zoomIn" data-hover-speed="350"
                                                        data-lightbox="image"><i class="icon-line-plus"></i></a>
                                                </div>
                                                <div class="bg-overlay-bg dark" data-hover-animate="fadeIn"
                                                    data-hover-speed="350"></div>
                                            </div>
                                        </div>
                                        <div class="portfolio-desc center pb-0">
                                            <h3><a href="portfolio-single.html">Corporate Headquarters</a></h3>
                                            <span><a href="#">California, USA</a></span>
                                        </div>
                                    </div>

                                </div>


                            </div>

                            <div class="widget clearfix">

                                <h4>Tag Cloud</h4>
                                <div class="tagcloud">
                                    <a href="#">general</a>
                                    <a href="#">Contract</a>
                                    <a href="#">Construction</a>
                                    <a href="#">Workers</a>
                                    <a href="#">Building</a>
                                    <a href="#">Site</a>
                                    <a href="#">Investors</a>
                                    <a href="#">Projects</a>
                                    <a href="#">coupons</a>
                                    <a href="#">modern</a>
                                    <a href="#">videos</a>
                                    <a href="#">music</a>
                                    <a href="#">media</a>
                                    <a href="#">photography</a>
                                    <a href="#">parallax</a>
                                    <a href="#">ecommerce</a>
                                    <a href="#">terms</a>
                                </div>

                            </div>

                        </div>

                    </div><!-- .sidebar end -->
                </div>

            </div>
        </div>
    </section><!-- #content end -->

@endsection
