@extends('layout.main')
@section('content')
    <!-- Content
      ============================================= -->
    <section id="content" class="bg-light">

        <div class="content-wrap pt-lg-0 pt-xl-0 pb-0">

            <div class="container clearfix">

                <div class="heading-block border-bottom-0 center pt-4 mb-3">
                    <h3>Articles</h3>
                </div>

                <!-- Posts
         ============================================= -->
                <div class="row grid-container infinity-wrapper clearfix">

                    <!-- ARTICLE NO. 1 -->
                    <div class="col-md-6 p-3">
                        <div class="entry mb-1 clearfix">
                            <div class="entry-image mb-3">
                                <a href="{{ asset('modernblog/demos/modern-blog/images/items/lightbox/1.jpg') }}"
                                    data-lightbox="image"
                                    style="background: url({{ asset('/modernblog/demos/modern-blog/images/items/1.jpg') }}) no-repeat center center; background-size: cover; height: 278px;"></a>
                            </div>
                            <div class="entry-title">
                                <h3><a href="#">How To Make More travel By Doing Less</a></h3>
                            </div>
                            <div class="entry-content">
                                <p>Distinctively unleash e-business testing procedures vis-a-vis future-proof leadership.
                                    Energistically synthesize leveraged e-business whereas proactive.</p>
                            </div>
                            <div class="entry-meta no-separator nohover">
                                <ul class="justify-content-between mx-0">
                                    <li><i class="icon-calendar2"></i> 10th Feb 2021</li>
                                    <li>MockUp</li>
                                </ul>
                            </div>
                            <div class="entry-meta no-separator hover">
                                <ul class="mx-0">
                                    <li><a href="#">View More &rarr;</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <!-- ARTICLE NO. 2 -->
                    <div class="col-md-6 p-3">
                        <div class="entry mb-1 clearfix">
                            <div class="entry-user">
                                <img src="{{ asset('modernblog/demos/modern-blog/images/user/semicolonweb-logo.png') }}"
                                    alt="Image">
                                <h4>SemiColoWeb Tech.<span>Themeforest.net</span></h4>
                            </div>
                            <div class="entry-image mb-3">
                                <a href="{{ asset('modernblog/demos/modern-blog/images/items/lightbox/2.jpg') }}"
                                    data-lightbox="image"
                                    style="background: url({{ asset('/modernblog/demos/modern-blog/images/items/2.jpg') }}) no-repeat center center; background-size: cover; height: 190px;">
                                </a>
                            </div>
                            <div class="entry-title">
                                <h3><a href="#">This is a Standard post with a Preview Image</a></h3>
                            </div>
                            <div class="entry-content">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ratione, voluptatem, dolorem
                                    animi nisi autem blanditiis enim.</p>
                            </div>
                            <div class="entry-meta no-separator nohover">
                                <ul class="justify-content-between mx-0">
                                    <li><i class="icon-calendar2"></i> 10th Feb 2021</li>
                                    <li>Article</li>
                                </ul>
                            </div>
                            <div class="entry-meta no-separator hover">
                                <ul class="mx-0">
                                    <li><a href="#">View More &rarr;</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <!-- ARTICLE NO. 3 -->
                    <div class="col-md-6 p-3">
                        <div class="entry mb-1 clearfix">
                            <div class="entry-image mb-3">
                                <iframe width="560" height="315" src="https://www.youtube.com/embed/P3Huse9K6Xs"
                                    allowfullscreen style="border: 0;"></iframe>
                            </div>
                            <div class="entry-title">
                                <h3><a href="#">This is a Standard post with a Youtube Video</a></h3>
                            </div>
                            <div class="entry-content">
                                <p>Distinctively unleash e-business testing procedures vis-a-vis future-proof leadership.
                                    Energistically synthesize leveraged e-business whereas proactive. Ratione, voluptatem,
                                    dolorem animi nisi autem blanditiis enim culpa reiciendis et explicabo tenetur!</p>
                            </div>
                            <div class="entry-meta no-separator nohover">
                                <ul class="justify-content-between mx-0">
                                    <li><i class="icon-calendar2"></i> 10th Feb 2021</li>
                                    <li>Vimeo</li>
                                </ul>
                            </div>
                            <div class="entry-meta no-separator hover">
                                <ul class="mx-0">
                                    <li><a href="#">View More &rarr;</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <!-- ARTICLE NO. 4 -->
                    <div class="col-md-6 p-3">
                        <div class="entry mb-1 clearfix">
                            <div class="entry-image mb-3">
                                <a href="#">
                                    <video poster="{{ asset('modernblog/images/videos/explore-poster.jpg') }}"
                                        preload="auto" loop autoplay muted style="display: block; width: 100%;">
                                        <source src="{{ asset('modernblog/images/videos/explore.mp4') }}"
                                            type='video/mp4' />
                                    </video>
                                </a>
                            </div>
                            <div class="entry-title">
                                <h3><a href="#">This is a Standard post with a HTML5 Video</a></h3>
                            </div>
                            <div class="entry-content">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ratione, voluptatem, dolorem
                                    animi nisi autem blanditiis enim culpa reiciendis et explicabo tenetur.</p>
                            </div>
                            <div class="entry-meta no-separator nohover">
                                <ul class="justify-content-between mx-0">
                                    <li><i class="icon-calendar2"></i> 10th Feb 2021</li>
                                    <li>Vimeo</li>
                                </ul>
                            </div>
                            <div class="entry-meta no-separator hover">
                                <ul class="mx-0">
                                    <li><a href="#">View More &rarr;</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <!-- ARTICLE NO. 5 -->
                    <div class="col-md-6 p-3">
                        <div class="entry mb-1 clearfix">
                            <div class="entry-user pb-2 border-bottom">
                                <img src="{{ asset('modernblog/demos/modern-blog/images/user/semicolonweb-logo.png') }}"
                                    alt="Image">
                                <h4>SemiColoWeb Tech.<span>Themeforest.net</span></h4>
                            </div>
                            <div class="entry-title pt-2">
                                <h3><a href="#">This is a Standard post with Author Name</a></h3>
                            </div>
                            <div class="entry-image mb-3">
                                <a href="{{ asset('modernblog/demos/modern-blog/images/items/lightbox/3.jpg') }}"
                                    data-lightbox="image"
                                    style="background: url({{ asset('/modernblog/demos/modern-blog/images/items/3.jpg') }}) no-repeat center bottom; background-size: cover; height: 210px;">
                                </a>
                            </div>
                            <div class="entry-content">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit ratione, voluptatem.</p>
                            </div>
                            <div class="entry-meta no-separator nohover">
                                <ul class="justify-content-between mx-0">
                                    <li><i class="icon-calendar2"></i> 10th Feb 2021</li>
                                    <li>Nature</li>
                                </ul>
                            </div>
                            <div class="entry-meta no-separator hover">
                                <ul class="mx-0">
                                    <li><a href="#">View More &rarr;</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <!-- ARTICLE NO. 6 -->
                    <div class="col-md-6 p-3">
                        <div class="entry mb-1 clearfix">
                            <div class="entry-image mb-3">
                                <div class="fslider" data-arrows="false" data-lightbox="gallery">
                                    <div class="flexslider">
                                        <div class="slider-wrap">
                                            <div class="slide"><a
                                                    href="{{ asset('modernblog/demos/modern-blog/images/items/lightbox/4-1.jpg') }}"
                                                    data-lightbox="gallery-item"
                                                    style="background: url({{ asset('/modernblog/demos/modern-blog/images/items/4-1.jpg') }}) no-repeat center bottom; background-size: cover; height: 278px;"></a>
                                            </div>
                                            <div class="slide"><a
                                                    href="{{ asset('modernblog/demos/modern-blog/images/items/lightbox/4-2.jpg') }}"
                                                    data-lightbox="gallery-item"
                                                    style="background: url({{ asset('/modernblog/demos/modern-blog/images/items/4-2.jpg') }}) no-repeat center bottom; background-size: cover; height: 278px;"></a>
                                            </div>
                                            <div class="slide"><a
                                                    href="{{ asset('modernblog/demos/modern-blog/images/items/lightbox/4-3.jpg') }}"
                                                    data-lightbox="gallery-item"
                                                    style="background: url({{ asset('/modernblog/demos/modern-blog/images/items/4-3.jpg') }}) no-repeat center bottom; background-size: cover; height: 278px;"></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="entry-title">
                                <h3><a href="#">This is a Standard post with Gallery Image</a></h3>
                            </div>
                            <div class="entry-content">
                                <p>Magni velit facilis donec quasi quidem error animi, rutrum sequi mi officia possimus
                                    fames, corporis culpa minim mollis tempora fuga, sed ipsam fugiat dictumst, nascetur
                                    aptent inceptos taciti. Natoque. Praesentium.</p>
                            </div>
                            <div class="entry-meta no-separator nohover">
                                <ul class="justify-content-between mx-0">
                                    <li><i class="icon-calendar2"></i> 10th Feb 2021</li>
                                    <li>Travel</li>
                                </ul>
                            </div>
                            <div class="entry-meta no-separator hover">
                                <ul class="mx-0">
                                    <li><a href="#">View More &rarr;</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <!-- ARTICLE NO. 7 -->
                    <div class="col-md-6 p-3">
                        <div class="entry mb-1 dark clearfix"
                            style="background: url({{ asset('/modernblog/demos/modern-blog/images/items/5.jpg') }}) no-repeat center bottom; background-size: cover; height: 525px;">
                            <div class="entry-title pt-3">
                                <h3><a href="#" class="text-light">Standard Full Image</a></h3>
                            </div>
                            <div class="entry-content">
                                <p class="fw-light">Magni velit facilis donec quasi quidem error animi, rutrum sequi
                                    mi officia.</p>
                            </div>
                            <div style="position: absolute; left: 0; bottom: 0; width: 100%;">
                                <div class="entry-meta no-separator nohover">
                                    <ul class="justify-content-between mx-0">
                                        <li><i class="icon-calendar2"></i> 10th Feb 2021</li>
                                        <li>Tools</li>
                                    </ul>
                                </div>
                                <div class="entry-meta no-separator hover">
                                    <ul>
                                        <li><a href="#">View More &rarr;</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- ARTICLE NO. 8 -->
                    <div class="col-md-6 p-3">
                        <div class="entry mb-1 clearfix">
                            <div class="entry-user">
                                <img src="{{ asset('modernblog/demos/modern-blog/images/user/3.jpg') }}" alt="Image">
                                <h4>Annie Spratt.<span>Apple Inc.</span></h4>
                            </div>
                            <div class="entry-title">
                                <h3><a href="#">This is a Standard post with Image/Author</a></h3>
                            </div>
                            <div class="entry-image" style="padding-left: 20px; padding-right: 20px;">
                                <a href="{{ asset('modernblog/demos/modern-blog/images/items/lightbox/8.jpg') }}"
                                    data-lightbox="image"
                                    style="background: url({{ asset('/modernblog/demos/modern-blog/images/items/8.jpg') }}) no-repeat center bottom; background-size: cover; height: 160px;">
                                </a>
                            </div>
                            <div class="entry-meta no-separator nohover">
                                <ul class="justify-content-between mx-0">
                                    <li><i class="icon-calendar2"></i> 10th Feb 2021</li>
                                    <li>Food</li>
                                </ul>
                            </div>
                            <div class="entry-meta no-separator hover">
                                <ul class="mx-0">
                                    <li><a href="#">View More &rarr;</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <!-- ARTICLE NO. 9 -->
                    <div class="col-md-6 p-3">
                        <div class="entry mb-1 clearfix">
                            <div class="entry-title pt-3">
                                <h3><a href="#">This is a Standard post with Gallery Thumbs</a></h3>
                            </div>
                            <div class="entry-image">
                                <div class="masonry-thumbs grid-container" data-big="2" data-lightbox="gallery">
                                    <a class="grid-item"
                                        href="{{ asset('modernblog/demos/modern-blog/images/items/lightbox/9-1.jpg') }}"
                                        data-lightbox="gallery-item"><img
                                            src="{{ asset('modernblog/demos/modern-blog/images/items/9-1.jpg') }}"
                                            alt="Gallery Thumb 1"></a>
                                    <a class="grid-item"
                                        href="{{ asset('modernblog/demos/modern-blog/images/items/lightbox/9-2.jpg') }}"
                                        data-lightbox="gallery-item"><img
                                            src="{{ asset('modernblog/demos/modern-blog/images/items/9-2.jpg') }}"
                                            alt="Gallery Thumb 2"></a>
                                    <a class="grid-item"
                                        href="{{ asset('modernblog/demos/modern-blog/images/items/lightbox/9-3.jpg') }}"
                                        data-lightbox="gallery-item"><img
                                            src="{{ asset('modernblog/demos/modern-blog/images/items/9-3.jpg') }}"
                                            alt="Gallery Thumb 3"></a>
                                    <a class="grid-item"
                                        href="{{ asset('modernblog/demos/modern-blog/images/items/lightbox/9-4.jpg') }}"
                                        data-lightbox="gallery-item"><img
                                            src="{{ asset('modernblog/demos/modern-blog/images/items/9-4.jpg') }}"
                                            alt="Gallery Thumb 4"></a>
                                    <a class="grid-item"
                                        href="{{ asset('modernblog/demos/modern-blog/images/items/lightbox/9-5.jpg') }}"
                                        data-lightbox="gallery-item"><img
                                            src="{{ asset('modernblog/demos/modern-blog/images/items/9-5.jpg') }}"
                                            alt="Gallery Thumb 5"></a>
                                    <a class="grid-item"
                                        href="{{ asset('modernblog/demos/modern-blog/images/items/lightbox/9-6.jpg') }}"
                                        data-lightbox="gallery-item"><img
                                            src="{{ asset('modernblog/demos/modern-blog/images/items/9-6.jpg') }}"
                                            alt="Gallery Thumb 6"></a>
                                    <a class="grid-item"
                                        href="{{ asset('modernblog/demos/modern-blog/images/items/lightbox/9-7.jpg') }}"
                                        data-lightbox="gallery-item"><img
                                            src="{{ asset('modernblog/demos/modern-blog/images/items/9-7.jpg') }}"
                                            alt="Gallery Thumb 7"></a>
                                    <a class="grid-item"
                                        href="{{ asset('modernblog/demos/modern-blog/images/items/lightbox/9-8.jpg') }}"
                                        data-lightbox="gallery-item"><img
                                            src="{{ asset('modernblog/demos/modern-blog/images/items/9-8.jpg') }}"
                                            alt="Gallery Thumb 9"></a>
                                    <a class="grid-item"
                                        href="{{ asset('modernblog/demos/modern-blog/images/items/lightbox/9-9.jpg') }}"
                                        data-lightbox="gallery-item"><img
                                            src="{{ asset('modernblog/demos/modern-blog/images/items/9-9.jpg') }}"
                                            alt="Gallery Thumb 10"></a>
                                </div>
                            </div>
                            <div class="entry-content">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit ratione, voluptatem. Luctus
                                    montes. Voluptatem dolorem parturient, egestas lacus nemo tempus reiciendis! Nihil
                                    provident. Nibh placeat</p>
                            </div>
                            <div class="entry-meta no-separator nohover">
                                <ul class="justify-content-between mx-0">
                                    <li><i class="icon-calendar2"></i> 10th Feb 2021</li>
                                    <li>Food</li>
                                </ul>
                            </div>
                            <div class="entry-meta no-separator hover">
                                <ul class="mx-0">
                                    <li><a href="#">View More &rarr;</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Infinity Scroll Loader
         ============================================= -->
                <div class="text-center">
                    <div class="page-load-status hovering-load-status">
                        <div class="css3-spinner infinite-scroll-request">
                            <div class="css3-spinner-ball-pulse-sync">
                                <div></div>
                                <div></div>
                                <div></div>
                            </div>
                        </div>
                        <div class="alert alert-warning center infinite-scroll-last mx-auto" style="max-width: 20rem;">End
                            of content</div>
                        <div class="alert alert-warning center infinite-scroll-error mx-auto" style="max-width: 20rem;">No
                            more pages to load</div>
                    </div>
                </div>
                <div class="center d-none">
                    <a href="demo-modern-blog-2.html" class="load-next-posts"></a>
                </div>

            </div>

            <div class="section bg-white pt-4 pb-0 topmargin-sm mb-0">
                <div class="container">
                    <div class="heading-block d-flex justify-content-center center border-bottom-0 mb-4">
                        <img src="{{ asset('modernblog/demos/modern-blog/images/instagram.png') }}"
                            class="align-self-center" alt="Image" height="28">
                        <h3 class="ms-2 text-capitalize ls0 align-self-center">Instagram Feed</h3>
                    </div>
                </div>
                <div class="instagram-button position-relative">
                    <div id="instagram-photos" class="instagram-photos masonry-thumbs grid-container grid-6"
                        data-user="blog.canvastemplate"></div>
                    <a href="#" class="button bg-white button-light button-rounded text-dark m-0 clearfix">Follow us on
                        Instagram</a>
                </div>
            </div>

        </div>

        @include('layout.footer')

    </section><!-- #content end -->
@endsection
