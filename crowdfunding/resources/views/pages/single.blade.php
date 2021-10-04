@extends('layout.main')
@section('content')
    <!-- Content
      ============================================= -->
    <section id="content">
        <div class="content-wrap">

            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="row justify-content-between align-items-end">
                            <div class="col-auto order-md-last mb-4 mb-md-0">
                                <a href="#" id="notifylink" data-bs-toggle="dropdown" data-bs-offset="0,15"
                                    aria-haspopup="true" aria-expanded="false" data-offset="0,12"><i
                                        data-bs-toggle="tooltip" data-bs-placement="top" title="Share"
                                        class="icon-line-share btn btn-secondary"></i></a>
                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="notifylink">
                                    <a class="dropdown-item" href="#"><i class="icon-facebook me-2"></i>Facebook</a>
                                    <a class="dropdown-item" href="#"><i class="icon-twitter me-2"></i>Twitter</a>
                                    <a class="dropdown-item" href="#"><i class="icon-whatsapp me-2"></i>Whatsapp</a>
                                    <a class="dropdown-item" href="#"><i class="icon-code me-2"></i>Embedded</a>
                                </div>
                            </div>

                            <div class="col-auto">
                                <!-- Title
             ============================================= -->
                                <h2 class="nott ls0 h2 fw-bold">Canvas iDrone 2020</h2>
                                <p class="text-muted mb-1">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>

                                <!-- Tag Cloud
             ============================================= -->
                                <div class="tagcloud my-3 clearfix">
                                    <a href="#">Tech</a>
                                    <a href="#">Gadget</a>
                                    <a href="#">Popular</a>
                                    <a href="#">Most Loved</a>
                                </div><!-- .tagcloud end -->

                                <div class="clear"></div>

                                <i class="icon-map-marker1"></i> <u>Melbourne, Australia</u>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row gutter-40 col-mb-80 mt-4">

                    <!-- Post Content
          ============================================= -->
                    <div class="postcontent col-lg-8">

                        <div class="single-post mb-0">

                            <!-- Single Post
            ============================================= -->
                            <div class="entry clearfix">

                                <!-- Entry Image
             ============================================= -->
                                <div class="entry-image mt-2">
                                    <div class="mb-2">
                                        <iframe src="https://player.vimeo.com/video/87235351?byline=0&portrait=0"
                                            width="912" height="513" frameborder="0" allow="autoplay; fullscreen"
                                            allowfullscreen></iframe>
                                    </div>
                                </div><!-- .entry-image end -->

                                <!-- Page Sub Menu
             ============================================= -->
                                <div id="page-menu" data-mobile-sticky="true">
                                    <div id="page-menu-wrap">
                                        <div class="container">
                                            <div class="page-menu-row">

                                                <nav class="page-menu-nav one-page-menu" data-offset="150">
                                                    <ul class="page-menu-container">
                                                        <li class="page-menu-item"><a class="ms-0"
                                                                data-href="#section-desc">
                                                                <div>Description</div>
                                                            </a></li>
                                                        <li class="page-menu-item"><a href="#" data-href="#section-updates">
                                                                <div>Updates</div>
                                                            </a></li>
                                                        <li class="page-menu-item"><a href="#" data-href="#section-faqs">
                                                                <div>FAQs</div>
                                                            </a></li>
                                                        <li class="page-menu-item"><a href="#" data-href="#section-gallery">
                                                                <div>Gallery</div>
                                                            </a></li>
                                                        <li class="page-menu-item"><a href="#" data-href="#section-reviews">
                                                                <div>Reviews</div>
                                                            </a></li>
                                                    </ul>
                                                </nav>

                                                <a href="#modal-register" data-lightbox="inline"
                                                    class="button fw-semibold button-rounded ls0 nott ms-auto">Become an
                                                    Investor</a>

                                                <div id="page-menu-trigger"><i class="icon-reorder"></i></div>

                                            </div>
                                        </div>
                                    </div>
                                </div><!-- #page-menu end -->

                                <!-- Entry Content
             ============================================= -->
                                <div class="entry-content mt-4">

                                    <div id="section-desc" class="page-section">
                                        <p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia
                                            odio sem nec elit. Cras mattis consectetur purus sit amet fermentum. Morbi leo
                                            risus, porta ac consectetur ac, vestibulum at eros. Praesent commodo cursus
                                            magna, vel scelerisque nisl consectetur et.</p>

                                        <figure>
                                            <img src="{{asset('crowdfunding/demos/crowdfunding/images/single/1.jpg')}}" alt="Image"
                                                class="mb-3">
                                        </figure>

                                        <p>Nullam id dolor id nibh ultricies vehicula ut id elit. <a href="#">Curabitur
                                                blandit tempus porttitor</a>. Integer posuere erat a ante venenatis dapibus
                                            posuere velit aliquet. Cras justo odio, dapibus ac facilisis in, egestas eget
                                            quam. Vestibulum id ligula porta felis euismod semper. Donec id elit non mi
                                            porta gravida at eget metus. Vestibulum id ligula porta felis euismod semper.
                                        </p>

                                        <blockquote>
                                            <p>Vestibulum id ligula porta felis euismod semper. Sed posuere consectetur est
                                                at lobortis. Aenean eu leo quam. Pellentesque ornare sem lacinia quam
                                                venenatis vestibulum. Duis mollis, est non commodo luctus, nisi erat
                                                porttitor ligula, eget lacinia odio sem nec elit. Donec ullamcorper nulla
                                                non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper.
                                            </p>
                                        </blockquote>

                                        <p>Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Cras mattis
                                            consectetur purus sit amet fermentum. Donec id elit non mi porta gravida at eget
                                            metus.</p>

                                        <figure>
                                            <img src="{{asset('crowdfunding/demos/crowdfunding/images/single/2.jpg')}}" alt="Image"
                                                class="mb-3">
                                            <figcaption class="op-05 text-center fst-italic">explanatory caption
                                            </figcaption>
                                        </figure>

                                        <figure>
                                            <img src="{{asset('crowdfunding/demos/crowdfunding/images/single/3.jpg')}}" alt="Image"
                                                class="mb-3">
                                            <figcaption class="op-05 text-center fst-italic">explanatory caption
                                            </figcaption>
                                        </figure>

                                        <p>Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Aenean lacinia
                                            bibendum nulla sed consectetur. Cras justo odio, dapibus ac facilisis in,
                                            egestas eget quam. <a href="#">Nullam quis risus eget urna</a> mollis ornare vel
                                            eu leo. Integer posuere erat a ante venenatis dapibus posuere velit aliquet.</p>

                                        <h3>Highlights</h3>

                                        <ul class="list-group col-5 mb-4">
                                            <li class="list-group-item">Optical Flow</li>
                                            <li class="list-group-item">GPS</li>
                                            <li class="list-group-item">Avoidance</li>
                                            <li class="list-group-item">Indoor Positioning System</li>
                                            <li class="list-group-item">Dev Board</li>
                                            <li class="list-group-item">Duct</li>
                                        </ul>

                                        <p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia
                                            odio sem nec elit. Cras mattis consectetur purus sit amet fermentum. Morbi leo
                                            risus, porta ac consectetur ac, vestibulum at eros. Praesent commodo cursus
                                            magna, vel scelerisque nisl consectetur et.</p>

                                        <p>Nullam id dolor id nibh ultricies vehicula ut id elit. Curabitur blandit tempus
                                            porttitor. Integer posuere erat a ante venenatis dapibus posuere velit aliquet.
                                            Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id
                                            ligula porta felis euismod semper. Donec id elit non mi porta gravida at eget
                                            metus. Vestibulum id ligula porta felis euismod semper.</p>
                                    </div>

                                    <div class="line"></div>

                                    <div id="section-updates" class="page-section">
                                        <h2>Updates</h2>
                                        <div class="card mb-4">
                                            <div class="card-body bg-light">
                                                <h3 class="mb-2">Raised 70%</h3>
                                                <a href="#">Jul 05th, 2020</a>
                                                <p class="mb-0 mt-3">Lorem ipsum dolor, sit amet consectetur,
                                                    adipisicing elit. Quas ipsam placeat reprehenderit quis illo. Natus
                                                    minus perferendis cumque impedit omnis ullam laudantium quidem
                                                    recusandae! Repudiandae similique nostrum in, deleniti laudantium.</p>
                                            </div>
                                        </div>
                                        <div class="card mb-4">
                                            <div class="card-body bg-light">
                                                <h3 class="mb-2">Raised 50%</h3>
                                                <a href="#">Jun 24th, 2020</a>
                                                <p class="mb-0 mt-3">Lorem ipsum dolor, sit amet consectetur,
                                                    adipisicing elit. Quas ipsam placeat reprehenderit quis illo. Natus
                                                    minus perferendis cumque impedit omnis ullam laudantium quidem
                                                    recusandae! Repudiandae similique nostrum in, deleniti laudantium.</p>
                                            </div>
                                        </div>
                                        <div class="card mb-4">
                                            <div class="card-body bg-light">
                                                <h3 class="mb-2">Raised 30%</h3>
                                                <a href="#">May 11th, 2020</a>
                                                <p class="mb-0 mt-3">Lorem ipsum dolor, sit amet consectetur,
                                                    adipisicing elit. Quas ipsam placeat reprehenderit quis illo. Natus
                                                    minus perferendis cumque impedit omnis ullam laudantium quidem
                                                    recusandae! Repudiandae similique nostrum in, deleniti laudantium.</p>
                                            </div>
                                        </div>
                                        <div class="card">
                                            <div class="card-body bg-light">
                                                <h3 class="mb-2">Product Launched</h3>
                                                <a href="#">Apr 17th, 2020</a>
                                                <p class="mb-0 mt-3">Lorem ipsum dolor, sit amet consectetur,
                                                    adipisicing elit. Quas ipsam placeat reprehenderit quis illo. Natus
                                                    minus perferendis cumque impedit omnis ullam laudantium quidem
                                                    recusandae! Repudiandae similique nostrum in, deleniti laudantium.</p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="line"></div>

                                    <div id="section-faqs" class="page-section">
                                        <h2>FAQs</h2>


                                        <div class="toggle toggle-bg">
                                            <div class="toggle-header">
                                                <div class="toggle-icon">
                                                    <i class="toggle-closed icon-question-sign"></i>
                                                    <i class="toggle-open icon-question-sign"></i>
                                                </div>
                                                <div class="toggle-title">
                                                    How do I become an author?
                                                </div>
                                            </div>
                                            <div class="toggle-content">Lorem ipsum dolor sit amet, consectetur adipisicing
                                                elit. Assumenda, dolorum, vero ipsum molestiae minima odio quo voluptate
                                                illum excepturi quam cum voluptates doloribus quae nisi tempore
                                                necessitatibus dolores ducimus enim libero eaque explicabo suscipit animi at
                                                quaerat aliquid ex expedita perspiciatis? Saepe, aperiam, nam unde quas
                                                beatae vero vitae nulla.</div>
                                        </div>

                                        <div class="toggle toggle-bg">
                                            <div class="toggle-header">
                                                <div class="toggle-icon">
                                                    <i class="toggle-closed icon-comments-alt"></i>
                                                    <i class="toggle-open icon-comments-alt"></i>
                                                </div>
                                                <div class="toggle-title">
                                                    Helpful Resources for Authors
                                                </div>
                                            </div>
                                            <div class="toggle-content">Lorem ipsum dolor sit amet, consectetur adipisicing
                                                elit. Assumenda, dolorum, vero ipsum molestiae minima odio quo voluptate
                                                illum excepturi quam cum voluptates doloribus quae nisi tempore
                                                necessitatibus dolores ducimus enim libero eaque explicabo suscipit animi at
                                                quaerat aliquid ex expedita perspiciatis? Saepe, aperiam, nam unde quas
                                                beatae vero vitae nulla.</div>
                                        </div>

                                        <div class="toggle toggle-bg">
                                            <div class="toggle-header">
                                                <div class="toggle-icon">
                                                    <i class="toggle-closed icon-lock3"></i>
                                                    <i class="toggle-open icon-lock3"></i>
                                                </div>
                                                <div class="toggle-title">
                                                    How much money can I make?
                                                </div>
                                            </div>
                                            <div class="toggle-content">Lorem ipsum dolor sit amet, consectetur adipisicing
                                                elit. Assumenda, dolorum, vero ipsum molestiae minima odio quo voluptate
                                                illum excepturi quam cum voluptates doloribus quae nisi tempore
                                                necessitatibus dolores ducimus enim libero eaque explicabo suscipit animi at
                                                quaerat aliquid ex expedita perspiciatis? Saepe, aperiam, nam unde quas
                                                beatae vero vitae nulla.</div>
                                        </div>

                                        <div class="toggle toggle-bg">
                                            <div class="toggle-header">
                                                <div class="toggle-icon">
                                                    <i class="toggle-closed icon-download-alt"></i>
                                                    <i class="toggle-open icon-download-alt"></i>
                                                </div>
                                                <div class="toggle-title">
                                                    Can I offer my items for free on a promotional basis?
                                                </div>
                                            </div>
                                            <div class="toggle-content">Lorem ipsum dolor sit amet, consectetur adipisicing
                                                elit. Assumenda, dolorum, vero ipsum molestiae minima odio quo voluptate
                                                illum excepturi quam cum voluptates doloribus quae nisi tempore
                                                necessitatibus dolores ducimus enim libero eaque explicabo suscipit animi at
                                                quaerat aliquid ex expedita perspiciatis? Saepe, aperiam, nam unde quas
                                                beatae vero vitae nulla.</div>
                                        </div>

                                        <div class="toggle toggle-bg">
                                            <div class="toggle-header">
                                                <div class="toggle-icon">
                                                    <i class="toggle-closed icon-ok"></i>
                                                    <i class="toggle-open icon-ok"></i>
                                                </div>
                                                <div class="toggle-title">
                                                    An Introduction to the Marketplaces for Authors
                                                </div>
                                            </div>
                                            <div class="toggle-content">Lorem ipsum dolor sit amet, consectetur adipisicing
                                                elit. Assumenda, dolorum, vero ipsum molestiae minima odio quo voluptate
                                                illum excepturi quam cum voluptates doloribus quae nisi tempore
                                                necessitatibus dolores ducimus enim libero eaque explicabo suscipit animi at
                                                quaerat aliquid ex expedita perspiciatis? Saepe, aperiam, nam unde quas
                                                beatae vero vitae nulla.</div>
                                        </div>
                                    </div>

                                    <div class="line"></div>

                                    <div id="section-gallery" class="page-section">
                                        <h2>Gallery</h2>
                                        <div class="masonry-thumbs grid-container grid-6" data-big="3"
                                            data-lightbox="gallery">
                                            <a class="grid-item" href="{{asset('crowdfunding/demos/crowdfunding/images/single/gallery/1.jpg')}}"
                                                data-lightbox="gallery-item"><img
                                                    src="{{asset('crowdfunding/demos/crowdfunding/images/single/gallery/1.jpg')}}"
                                                    alt="Gallery Thumb 1"></a>
                                            <a class="grid-item" href="{{asset('crowdfunding/demos/crowdfunding/images/single/gallery/2.jpg')}}"
                                                data-lightbox="gallery-item"><img
                                                    src="{{asset('crowdfunding/demos/crowdfunding/images/single/gallery/2.jpg')}}"
                                                    alt="Gallery Thumb 2"></a>
                                            <a class="grid-item" href="{{asset('crowdfunding/demos/crowdfunding/images/single/gallery/3.jpg')}}"
                                                data-lightbox="gallery-item"><img
                                                    src="{{asset('crowdfunding/demos/crowdfunding/images/single/gallery/3.jpg')}}"
                                                    alt="Gallery Thumb 3"></a>
                                            <a class="grid-item" href="{{asset('crowdfunding/demos/crowdfunding/images/single/gallery/4.jpg')}}"
                                                data-lightbox="gallery-item"><img
                                                    src="{{asset('crowdfunding/demos/crowdfunding/images/single/gallery/4.jpg')}}"
                                                    alt="Gallery Thumb 4"></a>
                                            <a class="grid-item" href="{{asset('crowdfunding/demos/crowdfunding/images/single/gallery/5.jpg')}}"
                                                data-lightbox="gallery-item"><img
                                                    src="{{asset('crowdfunding/demos/crowdfunding/images/single/gallery/5.jpg')}}"
                                                    alt="Gallery Thumb 5"></a>
                                            <a class="grid-item" href="{{asset('crowdfunding/demos/crowdfunding/images/single/gallery/6.jpg')}}"
                                                data-lightbox="gallery-item"><img
                                                    src="{{asset('crowdfunding/demos/crowdfunding/images/single/gallery/6.jpg')}}"
                                                    alt="Gallery Thumb 6"></a>
                                            <a class="grid-item" href="{{asset('crowdfunding/demos/crowdfunding/images/single/gallery/7.jpg')}}"
                                                data-lightbox="gallery-item"><img
                                                    src="{{asset('crowdfunding/demos/crowdfunding/images/single/gallery/7.jpg')}}"
                                                    alt="Gallery Thumb 7"></a>
                                            <a class="grid-item" href="{{asset('crowdfunding/demos/crowdfunding/images/single/gallery/8.jpg')}}"
                                                data-lightbox="gallery-item"><img
                                                    src="{{asset('crowdfunding/demos/crowdfunding/images/single/gallery/8.jpg')}}"
                                                    alt="Gallery Thumb 9"></a>
                                            <a class="grid-item" href="{{asset('crowdfunding/demos/crowdfunding/images/single/gallery/9.jpg')}}"
                                                data-lightbox="gallery-item"><img
                                                    src="{{asset('crowdfunding/demos/crowdfunding/images/single/gallery/9.jpg')}}"
                                                    alt="Gallery Thumb 10"></a>
                                            <a class="grid-item"
                                                href="{{asset('crowdfunding/demos/crowdfunding/images/single/gallery/10.jpg')}}"
                                                data-lightbox="gallery-item"><img
                                                    src="{{asset('crowdfunding/demos/crowdfunding/images/single/gallery/10.jpg')}}"
                                                    alt="Gallery Thumb 14"></a>
                                            <a class="grid-item"
                                                href="{{asset('crowdfunding/demos/crowdfunding/images/single/gallery/11.jpg')}}"
                                                data-lightbox="gallery-item"><img
                                                    src="{{asset('crowdfunding/demos/crowdfunding/images/single/gallery/11.jpg')}}"
                                                    alt="Gallery Thumb 12"></a>
                                            <a class="grid-item"
                                                href="{{asset('crowdfunding/demos/crowdfunding/images/single/gallery/12.jpg')}}"
                                                data-lightbox="gallery-item"><img
                                                    src="{{asset('crowdfunding/demos/crowdfunding/images/single/gallery/12.jpg')}}"
                                                    alt="Gallery Thumb 13"></a>
                                            <a class="grid-item"
                                                href="{{asset('crowdfunding/demos/crowdfunding/images/single/gallery/13.jpg')}}"
                                                data-lightbox="gallery-item"><img
                                                    src="{{asset('crowdfunding/demos/crowdfunding/images/single/gallery/13.jpg')}}"
                                                    alt="Gallery Thumb 15"></a>
                                            <a class="grid-item"
                                                href="{{asset('crowdfunding/demos/crowdfunding/images/single/gallery/14.jpg')}}"
                                                data-lightbox="gallery-item"><img
                                                    src="{{asset('crowdfunding/demos/crowdfunding/images/single/gallery/14.jpg')}}"
                                                    alt="Gallery Thumb 16"></a>
                                            <a class="grid-item"
                                                href="{{asset('crowdfunding/demos/crowdfunding/images/single/gallery/15.jpg')}}"
                                                data-lightbox="gallery-item"><img
                                                    src="{{asset('crowdfunding/demos/crowdfunding/images/single/gallery/15.jpg')}}"
                                                    alt="Gallery Thumb 12-1"></a>
                                        </div>
                                    </div>

                                    <div class="line"></div>

                                    <div id="section-reviews" class="page-section">
                                        <h2>Reviews</h2>
                                        <div class="row">
                                            <div class="col-12 mb-5 pb-4 border-bottom">
                                                <div class="d-flex align-items-center mb-3">
                                                    <img src="{{asset('crowdfunding/demos/articles/images/authors/2.jpg')}}" alt="Author"
                                                        class="rounded-circle me-3" width="40" height="40">
                                                    <div>
                                                        <h4 class="mb-1 h6">Gordon Norman</h4>
                                                        <h6 class="text-muted mb-0 fw-normal">September 31, 2020</h6>
                                                    </div>
                                                    <div class="ms-auto mb-auto">
                                                        <i class="icon-star3 color text-smaller"></i>
                                                        <i class="icon-star3 color text-smaller"></i>
                                                        <i class="icon-star3 color text-smaller"></i>
                                                        <i class="icon-star3 color text-smaller"></i>
                                                        <i class="icon-star3 color text-smaller"></i>
                                                    </div>
                                                </div>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorem tempore
                                                    placeat aperiam tenetur repellendus aliquid fugit doloribus amet dolore,
                                                    molestias.</p>
                                            </div>

                                            <div class="col-12 mb-5 pb-4 border-bottom">
                                                <div class="d-flex align-items-center mb-3">
                                                    <img src="{{asset('crowdfunding/demos/articles/images/authors/3.jpg')}}" alt="Author"
                                                        class="rounded-circle me-3" width="40" height="40">
                                                    <div>
                                                        <h4 class="mb-1 h6">Brain Hogg</h4>
                                                        <h6 class="text-muted mb-0 fw-normal">September 11, 2020</h6>
                                                    </div>
                                                    <div class="ms-auto mb-auto">
                                                        <i class="icon-star3 color text-smaller"></i>
                                                        <i class="icon-star3 color text-smaller"></i>
                                                        <i class="icon-star3 color text-smaller"></i>
                                                        <i class="icon-star3 color text-smaller"></i>
                                                        <i class="icon-star-half-full color text-smaller"></i>
                                                    </div>
                                                </div>
                                                <p>Holisticly conceptualize cutting-edge manufactured products rather than
                                                    cooperative opportunities. Collaboratively impact 24/365 scenarios
                                                    before team building paradigms. Authoritatively synergize parallel
                                                    products without web-enabled testing procedures.</p>
                                            </div>

                                            <div class="col-12 mb-5 pb-4 border-bottom">
                                                <div class="d-flex align-items-center mb-3">
                                                    <img src="{{asset('crowdfunding/demos/crowdfunding/images/investors/25.jpg')}}" alt="Author"
                                                        class="rounded-circle me-3" width="40" height="40">
                                                    <div>
                                                        <h4 class="mb-1 h6">Nigh Russel</h4>
                                                        <h6 class="text-muted mb-0 fw-normal">June 12, 2020</h6>
                                                    </div>
                                                    <div class="ms-auto mb-auto">
                                                        <i class="icon-star3 color text-smaller"></i>
                                                        <i class="icon-star3 color text-smaller"></i>
                                                        <i class="icon-star3 color text-smaller"></i>
                                                        <i class="icon-star3 color text-smaller"></i>
                                                        <i class="icon-star3 color text-smaller"></i>
                                                    </div>
                                                </div>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorem tempore
                                                    placeat aperiam tenetur repellendus aliquid fugit doloribus amet dolore,
                                                    molestias.</p>
                                            </div>

                                            <div class="col-12 mb-5">
                                                <div class="d-flex align-items-center mb-3">
                                                    <img src="{{asset('crowdfunding/demos/articles/images/authors/1.jpg')}}" alt="Author"
                                                        class="rounded-circle me-3" width="40" height="40">
                                                    <div>
                                                        <h4 class="mb-1 h6">Andrew</h4>
                                                        <h6 class="text-muted mb-0 fw-normal">March 3, 2020</h6>
                                                    </div>
                                                    <div class="ms-auto mb-auto">
                                                        <i class="icon-star3 color text-smaller"></i>
                                                        <i class="icon-star3 color text-smaller"></i>
                                                        <i class="icon-star3 color text-smaller"></i>
                                                        <i class="icon-star3 color text-smaller"></i>
                                                        <i class="icon-star3 color text-smaller"></i>
                                                    </div>
                                                </div>
                                                <p>Seamlessly maximize effective best practices whereas go forward
                                                    initiatives. Dramatically harness 24/7 total linkage via highly
                                                    efficient web services.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Post Single - Content End -->

                                </div>
                            </div><!-- .entry end -->

                        </div>

                    </div><!-- .postcontent end -->

                    <!-- Sidebar
          ============================================= -->
                    <div class="sidebar col-lg-4">
                        <div class="sidebar-widgets-wrap">

                            <div>
                                <h3 class="fw-bold h2 mb-2 color">$12,32,000 Pledged</h3>
                                <span class="text-uppercase text-smaller op-07">pledged of $20,00,000 Goal</span>
                                <ul class="skills mt-4">
                                    <li data-percent="73" style="height: 7px">
                                        <span class="d-flex justify-content-between w-100">
                                            <span class="counter counter-xs h6"><span data-from="0" data-to="73"
                                                    data-refresh-interval="10" data-speed="2000"></span><strong>%</strong>
                                                Funded</span>
                                            <span class="counter counter-xs h6"><span data-from="0" data-to="20"
                                                    data-refresh-interval="3" data-speed="1200"></span> Days Left</span>
                                        </span>
                                        <div class="progress"></div>
                                    </li>
                                </ul>
                            </div>

                            <div class="line line-sm"></div>

                            <div>
                                <h3 class="fw-bold h1 mb-2">1623</h3>
                                <span class="text-uppercase text-smaller op-07">Partcipants</span>
                            </div>

                            <div class="line line-sm"></div>

                            <div>
                                <h3 class="fw-bold h1 mb-2">345</h3>
                                <span class="text-uppercase text-smaller op-07">Contributions</span>
                            </div>

                            <div class="line line-sm"></div>

                            <div>
                                <h3 class="fw-bold h1 mb-2">20</h3>
                                <span class="text-uppercase text-smaller op-07">Days Remaining</span>
                            </div>
                            <div class="clear mt-4"></div>
                            <a href="#modal-register" data-lightbox="inline"
                                class="button button-xlarge fw-semibold button-rounded ls0 nott ms-0 my-4 w-100 text-center">Become
                                an Investor</a>

                            <!-- Post Author Info
            ============================================= -->
                            <div class="card mt-4">
                                <div class="card-header"><strong>Posted by <a href="#">John Doe</a></strong></div>
                                <div class="card-body">
                                    <div class="author-image">
                                        <img src="{{asset('crowdfunding/images/author/1.jpg')}}" alt="Image" class="rounded-circle">
                                    </div>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores, eveniet, eligendi et
                                    nobis neque minus mollitia sit repudiandae ad repellendus recusandae blanditiis
                                    praesentium.
                                </div>
                            </div><!-- Post Single - Author End -->
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section><!-- #content end -->

@endsection
