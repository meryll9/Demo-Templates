@extends('layout.main')
@section('content')
    <!-- Content
      ============================================= -->
    <section id="content">

        <div class="content-wrap pb-0 clearfix">

            <div class="container">
                <div class="row justify-content-between">
                    <div class="col-md-5">
                        <img src="{{asset('articles/demos/articles/images/articles/2/1.png')}}" alt="Image">
                    </div>
                    <div class="col-md-6">
                        <h2 class="h1 mb-5 fw-bold">My Loving Dad</h2>
                        <div class="d-flex align-items-center justify-content-between">

                            <!-- Product Single - Price
            ============================================= -->
                            <div class="h2"><del class="op-03">$39.99</del> <strong
                                    class="color">$24.99</strong></div>

                            <!-- Product Single - Rating
            ============================================= -->
                            <div class="product-rating">
                                <i class="icon-star3"></i>
                                <i class="icon-star3"></i>
                                <i class="icon-star3"></i>
                                <i class="icon-star-half-full"></i>
                                <i class="icon-star-empty"></i>
                            </div><!-- Product Single - Rating End -->

                        </div>

                        <div class="line line-sm"></div>


                        <p>eBooks, iBooks, PDF &amp; ePub Supported</p>

                        <!-- Product Single - Short Description
           ============================================= -->
                        <p>Holisticly leverage other's resource sucking information before sticky supply chains. Holisticly
                            matrix standards compliant alignments whereas stand-alone core competencies. Professionally
                            underwhelm process-centric users and value-added sources. Globally whiteboard goal-oriented
                            leadership with process-centric opportunities. Dynamically monetize granular technologies for
                            impactful imperatives. Compellingly extend wireless scenarios after open-source results.
                            Progressively leverage existing.</p>

                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ex ipsam quaerat vel vero, alias
                            consectetur.</p>

                        <a href="http://amazon.com"><img src="{{asset('articles/demos/articles/images/amazon.png')}}" alt="Image" width="200"
                                class="mt-2 h-translate-y-sm all-ts"></a>

                    </div>
                </div>
            </div>

            <div class="section">
                <div class="container">
                    <div class="row justify-content-center align-items-center topmargin">
                        <div class="col-lg-4 col-md-5 px-5">
                            <div class="fslider" data-arrows="false" data-pagi="false" data-speed="650"
                                data-pause="3500" data-animation="fade">
                                <div class="flexslider">
                                    <div class="slider-wrap">
                                        <div class="slide"><img src="{{asset('articles/demos/articles/images/reader.png')}}"
                                                alt="Reader"></div>
                                        <div class="slide"><img src="{{asset('articles/demos/articles/images/reader-2.png')}}"
                                                alt="Reader"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-7 ps-md-6 mt-5 mt-md-0">
                            <h2 class="fw-normal ls0 nott mb-4 font-primary h1">About this Book</h2>
                            <p>Progressively strategize just in time scenarios and compelling results. Intrinsicly parallel
                                task extensive systems whereas distinctive catalysts for change. Proactively communicate
                                standardized paradigms through proactive.</p>
                            <h4 class="mb-3 fw-normal font-body"><i class="icon-line-circle-check me-1 color"></i> Fully
                                Supported eBooks</h4>
                            <h4 class="mb-3 fw-normal font-body"><i class="icon-line-circle-check me-1 color"></i> Most
                                Popular since 2015</h4>
                            <h4 class="mb-3 fw-normal font-body"><i class="icon-line-circle-check me-1 color"></i> Any
                                Device Supported</h4>
                            <h4 class="mb-3 fw-normal font-body"><i class="icon-line-circle-check me-1 color"></i> Light
                                &amp; Dark Both</h4>
                            <h4 class="mb-3 fw-normal font-body"><i class="icon-line-circle-check me-1 color"></i> 100%
                                Readable</h4>
                        </div>
                    </div>
                </div>
            </div>

            <div class="container">
                <div class="heading-block topmargin text-center border-bottom-0">
                    <h2 class="fw-normal ls0 nott">My Other Books</h2>
                </div>
                <div class="row justify-content-center mb-4">
                    <div class="col-md-2">
                        <a href="#"><img src="{{asset('articles/demos/articles/images/articles/1/1.png')}}" alt="Image 1"></a>
                    </div>
                    <div class="col-md-2">
                        <a href="#"><img src="{{asset('articles/demos/articles/images/articles/1/2.png')}}" alt="Image 2"></a>
                    </div>
                    <div class="col-md-2">
                        <a href="#"><img src="{{asset('articles/demos/articles/images/articles/2/1.png')}}" alt="Image 3"></a>
                    </div>
                    <div class="col-md-2">
                        <a href="#"><img src="{{asset('articles/demos/articles/images/articles/4/1.png')}}" alt="Image 4"></a>
                    </div>
                </div>
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
