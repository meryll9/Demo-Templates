@extends('layout.main')
@section('content')
    <!-- Content
      ============================================= -->
    <section id="content">

        <div class="content-wrap pb-0 clearfix">

            <div class="container center">
                <div class="heading-block border-bottom-0">
                    <span class="before-heading font-body">Articles</span>
                    <h2 class="nott ls0 fw-normal">Most Popular Books</h2>
                </div>

                <div class="clear"></div>

                <!-- Shop
         ============================================= -->
                <div id="shop" class="shop row grid-container gutter-50" data-layout="fitRows">

                    <div class="product col-md-4 col-sm-6 col-12">
                        <div class="grid-inner">
                            <div class="product-image h-translate-y all-ts">
                                <a href="demo-articles-single.html"><img src="{{asset('articles/demos/articles/images/articles/5/1.png')}}"
                                        alt="Image 1"></a>
                                <div class="bg-overlay">
                                    <div class="bg-overlay-content align-items-end justify-content-start flex-column">
                                        <a data-bs-toggle="tooltip" data-bs-placement="left" title="Add to Cart"
                                            data-hover-animate="fadeInRightSmall" href="#"
                                            class="btn btn-light h-bg-color h-text-light border-0 mb-2"><i
                                                class="icon-shopping-basket"></i></a>
                                        <a data-bs-toggle="tooltip" data-bs-placement="left" title="Add to Wishlist"
                                            data-hover-animate="fadeInRightSmall" data-hover-delay="100" href="#"
                                            class="btn btn-light h-bg-color h-text-light border-0 mb-2"><i
                                                class="icon-heart3"></i></a>
                                        <a data-bs-toggle="tooltip" data-bs-placement="left" title="Quick View"
                                            data-hover-animate="fadeInRightSmall" data-hover-delay="200" href="#"
                                            class="btn btn-light h-bg-color h-text-light border-0"><i
                                                class="icon-line-expand"></i></a>
                                    </div>
                                    <div class="bg-overlay-bg bg-transparent"></div>
                                </div>
                            </div>
                            <div class="product-desc py-0">
                                <div class="product-title">
                                    <h3><a href="demo-articles-single.html" class="text-dark">Our Dreams</a></h3>
                                </div>
                                <div class="product-price"><del>$24.99</del> <ins>$12.49</ins></div>
                            </div>
                        </div>
                    </div>

                    <div class="product col-md-4 col-sm-6 col-12">
                        <div class="grid-inner">
                            <div class="product-image h-translate-y all-ts">
                                <a href="demo-articles-single.html"><img src="{{asset('articles/demos/articles/images/articles/1/3.png')}}"
                                        alt="Image 2"></a>
                                <div class="bg-overlay">
                                    <div class="bg-overlay-content align-items-end justify-content-start flex-column">
                                        <a data-bs-toggle="tooltip" data-bs-placement="left" title="Add to Cart"
                                            data-hover-animate="fadeInRightSmall" href="#"
                                            class="btn btn-light h-bg-color h-text-light border-0 mb-2"><i
                                                class="icon-shopping-basket"></i></a>
                                        <a data-bs-toggle="tooltip" data-bs-placement="left" title="Add to Wishlist"
                                            data-hover-animate="fadeInRightSmall" data-hover-delay="100" href="#"
                                            class="btn btn-light h-bg-color h-text-light border-0 mb-2"><i
                                                class="icon-heart3"></i></a>
                                        <a data-bs-toggle="tooltip" data-bs-placement="left" title="Quick View"
                                            data-hover-animate="fadeInRightSmall" data-hover-delay="200" href="#"
                                            class="btn btn-light h-bg-color h-text-light border-0"><i
                                                class="icon-line-expand"></i></a>
                                    </div>
                                    <div class="bg-overlay-bg bg-transparent"></div>
                                </div>
                            </div>
                            <div class="product-desc py-0">
                                <div class="product-title">
                                    <h3><a href="demo-articles-single.html" class="text-dark">Cooking Recipies</a></h3>
                                </div>
                                <div class="product-price"><del>$14.99</del> <ins>$9.49</ins></div>
                            </div>
                        </div>
                    </div>

                    <div class="product col-md-4 col-sm-6 col-12">
                        <div class="grid-inner">
                            <div class="product-image h-translate-y all-ts">
                                <a href="demo-articles-single.html"><img src="{{asset('articles/demos/articles/images/articles/1/4.png')}}"
                                        alt="Image 3"></a>
                                <div class="bg-overlay">
                                    <div class="bg-overlay-content align-items-end justify-content-start flex-column">
                                        <a data-bs-toggle="tooltip" data-bs-placement="left" title="Add to Cart"
                                            data-hover-animate="fadeInRightSmall" href="#"
                                            class="btn btn-light h-bg-color h-text-light border-0 mb-2"><i
                                                class="icon-shopping-basket"></i></a>
                                        <a data-bs-toggle="tooltip" data-bs-placement="left" title="Add to Wishlist"
                                            data-hover-animate="fadeInRightSmall" data-hover-delay="100" href="#"
                                            class="btn btn-light h-bg-color h-text-light border-0 mb-2"><i
                                                class="icon-heart3"></i></a>
                                        <a data-bs-toggle="tooltip" data-bs-placement="left" title="Quick View"
                                            data-hover-animate="fadeInRightSmall" data-hover-delay="200" href="#"
                                            class="btn btn-light h-bg-color h-text-light border-0"><i
                                                class="icon-line-expand"></i></a>
                                    </div>
                                    <div class="bg-overlay-bg bg-transparent"></div>
                                </div>
                            </div>
                            <div class="product-desc py-0">
                                <div class="product-title">
                                    <h3><a href="demo-articles-single.html" class="text-dark">Dessert Items</a></h3>
                                </div>
                                <div class="product-price"><del>$14.99</del> <ins>$9.49</ins></div>
                            </div>
                        </div>
                    </div>

                    <div class="product col-md-4 col-sm-6 col-12">
                        <div class="grid-inner">
                            <div class="product-image h-translate-y all-ts">
                                <a href="demo-articles-single.html"><img src="{{asset('articles/demos/articles/images/articles/1/5.png')}}"
                                        alt="Image 3"></a>
                                <div class="bg-overlay">
                                    <div class="bg-overlay-content align-items-end justify-content-start flex-column">
                                        <a data-bs-toggle="tooltip" data-bs-placement="left" title="Add to Cart"
                                            data-hover-animate="fadeInRightSmall" href="#"
                                            class="btn btn-light h-bg-color h-text-light border-0 mb-2"><i
                                                class="icon-shopping-basket"></i></a>
                                        <a data-bs-toggle="tooltip" data-bs-placement="left" title="Add to Wishlist"
                                            data-hover-animate="fadeInRightSmall" data-hover-delay="100" href="#"
                                            class="btn btn-light h-bg-color h-text-light border-0 mb-2"><i
                                                class="icon-heart3"></i></a>
                                        <a data-bs-toggle="tooltip" data-bs-placement="left" title="Quick View"
                                            data-hover-animate="fadeInRightSmall" data-hover-delay="200" href="#"
                                            class="btn btn-light h-bg-color h-text-light border-0"><i
                                                class="icon-line-expand"></i></a>
                                    </div>
                                    <div class="bg-overlay-bg bg-transparent"></div>
                                </div>
                            </div>
                            <div class="product-desc py-0">
                                <div class="product-title">
                                    <h3><a href="demo-articles-single.html" class="text-dark">Pizza Lovers</a></h3>
                                </div>
                                <div class="product-price"><ins>$19.49</ins></div>
                            </div>
                        </div>
                    </div>

                    <div class="product col-md-4 col-sm-6 col-12">
                        <div class="grid-inner">
                            <div class="product-image h-translate-y all-ts">
                                <a href="demo-articles-single.html"><img src="{{asset('articles/demos/articles/images/articles/2/1.png')}}"
                                        alt="Image 3"></a>
                                <div class="bg-overlay">
                                    <div class="bg-overlay-content align-items-end justify-content-start flex-column">
                                        <a data-bs-toggle="tooltip" data-bs-placement="left" title="Add to Cart"
                                            data-hover-animate="fadeInRightSmall" href="#"
                                            class="btn btn-light h-bg-color h-text-light border-0 mb-2"><i
                                                class="icon-shopping-basket"></i></a>
                                        <a data-bs-toggle="tooltip" data-bs-placement="left" title="Add to Wishlist"
                                            data-hover-animate="fadeInRightSmall" data-hover-delay="100" href="#"
                                            class="btn btn-light h-bg-color h-text-light border-0 mb-2"><i
                                                class="icon-heart3"></i></a>
                                        <a data-bs-toggle="tooltip" data-bs-placement="left" title="Quick View"
                                            data-hover-animate="fadeInRightSmall" data-hover-delay="200" href="#"
                                            class="btn btn-light h-bg-color h-text-light border-0"><i
                                                class="icon-line-expand"></i></a>
                                    </div>
                                    <div class="bg-overlay-bg bg-transparent"></div>
                                </div>
                            </div>
                            <div class="product-desc py-0">
                                <div class="product-title">
                                    <h3><a href="demo-articles-single.html" class="text-dark">Family Management</a>
                                    </h3>
                                </div>
                                <div class="product-price"><ins>$39.49</ins></div>
                            </div>
                        </div>
                    </div>

                    <div class="product col-md-4 col-sm-6 col-12">
                        <div class="grid-inner">
                            <div class="product-image h-translate-y all-ts">
                                <a href="demo-articles-single.html"><img src="{{asset('articles/demos/articles/images/articles/2/2.png')}}"
                                        alt="Image 3"></a>
                                <div class="bg-overlay">
                                    <div class="bg-overlay-content align-items-end justify-content-start flex-column">
                                        <a data-bs-toggle="tooltip" data-bs-placement="left" title="Add to Cart"
                                            data-hover-animate="fadeInRightSmall" href="#"
                                            class="btn btn-light h-bg-color h-text-light border-0 mb-2"><i
                                                class="icon-shopping-basket"></i></a>
                                        <a data-bs-toggle="tooltip" data-bs-placement="left" title="Add to Wishlist"
                                            data-hover-animate="fadeInRightSmall" data-hover-delay="100" href="#"
                                            class="btn btn-light h-bg-color h-text-light border-0 mb-2"><i
                                                class="icon-heart3"></i></a>
                                        <a data-bs-toggle="tooltip" data-bs-placement="left" title="Quick View"
                                            data-hover-animate="fadeInRightSmall" data-hover-delay="200" href="#"
                                            class="btn btn-light h-bg-color h-text-light border-0"><i
                                                class="icon-line-expand"></i></a>
                                    </div>
                                    <div class="bg-overlay-bg bg-transparent"></div>
                                </div>
                            </div>
                            <div class="product-desc py-0">
                                <div class="product-title">
                                    <h3><a href="demo-articles-single.html" class="text-dark">My Dad</a></h3>
                                </div>
                                <div class="product-price"><del>$59.99</del> <ins>$39.49</ins></div>
                            </div>
                        </div>
                    </div>

                </div><!-- #shop end -->
            </div>

            <div class="section mb-0 p-md-0">
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
