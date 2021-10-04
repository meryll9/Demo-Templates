@extends('layout.main')
@section('content')

    <!-- Page Title
      ============================================= -->
    <section id="page-title" class="page-title-center page-title-parallax include-header include-topbar"
        style="background-image: url({{asset('/travel/demos/travel/images/blog/full/page-title.jpg')}}); background-position: center center; padding: 160px 0;"
        data-center="background-position: 0px -100px;" data-top-bottom="background-position:0px 200px;">

        <div class="container clearfix">
            <h1>Latest From Our Blog</h1>
            <span>Stay in Touch with the Latest Travel Trends &amp; Destination News</span>
        </div>

    </section><!-- #page-title end -->

    <!-- Content
      ============================================= -->
    <section id="content">
        <div class="content-wrap">

            <div class="container">

                <h4>Featured Post</h4>
                <div class="row mb-5">
                    <div class="col-lg-6">
                        <div class="entry-image mb-0">
                            <a href="#"><img src="{{asset('travel/demos/travel/images/blog/full/1.jpg')}}" alt="Paris"></a>
                        </div>
                    </div>
                    <div class="col-lg-6" style="margin-top: 20px;">
                        <span class="before-heading">Travel Tips</span>
                        <div class="entry-title">
                            <h3><a href="#">10 things to do before you travel</a></h3>
                        </div>
                        <div class="entry-meta">
                            <ul>
                                <li><i class="icon-calendar3"></i> 16th June</li>
                                <li><i class="icon-folder-open"></i> <a href="#">Tips</a>, <a href="#">News</a></li>
                                <li><a href="#"><i class="icon-comments"></i> 19 Comments</a></li>
                                <li><a href="#"><i class="icon-pencil2"></i></a></li>
                            </ul>
                        </div>
                        <div class="entry-content">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nisi nemo animi nostrum
                                accusantium, perferendis culpa iste est hic minima magnam, vel libero id! Quibusdam facilis
                                debitis sequi eligendi voluptates magni ipsa, aliquid voluptatum iste vel! Facilis amet
                                aliquam quidem explicabo et dolore distinctio enim accusamus atque, sapiente beatae odit
                                impedit optio commodi libero est natus ducimus recusandae vero, soluta voluptas?</p>
                            <a href="#" class="more-link">Read more <i class="icon-line-arrow-right"></i></a>
                        </div>
                    </div>
                </div>

                <div class="line"></div>

                <h4>Latest Posts</h4>

                <div class="row posts-md col-mb-50 mb-0">
                    <div class="entry col-md-6">
                        <div class="grid-inner row align-items-center">
                            <div class="col-lg-6">
                                <div class="entry-image mb-0">
                                    <a href="#"><img src="{{asset('travel/demos/travel/images/blog/1.jpg')}}" alt="Paris"></a>
                                </div>
                            </div>
                            <div class="col-lg-6 mt-3 mt-lg-0">
                                <span class="before-heading">Sightseeing</span>
                                <div class="entry-title title-xs nott">
                                    <h3><a href="#">Things to do in Bangkok for free</a></h3>
                                </div>
                                <div class="entry-meta">
                                    <ul>
                                        <li><i class="icon-calendar3"></i> 16th July</li>
                                        <li><a href="#"><i class="icon-comments"></i> 05</a></li>
                                    </ul>
                                </div>
                                <div class="entry-content">
                                    <a href="#" class="more-link">Read more</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="entry col-md-6">
                        <div class="grid-inner row align-items-center">
                            <div class="col-lg-6">
                                <div class="entry-image mb-0">
                                    <a href="#"><img src="{{asset('travel/demos/travel/images/blog/2.jpg')}}" alt="Paris"></a>
                                </div>
                            </div>
                            <div class="col-lg-6 mt-3 mt-lg-0">
                                <span class="before-heading">Nightlife</span>
                                <div class="entry-title title-xs nott">
                                    <h3><a href="#">Nightclubs to check out in Kuala Lumpur</a></h3>
                                </div>
                                <div class="entry-meta">
                                    <ul>
                                        <li><i class="icon-calendar3"></i> 21th June</li>
                                        <li><a href="#"><i class="icon-comments"></i> 12</a></li>
                                    </ul>
                                </div>
                                <div class="entry-content">
                                    <a href="#" class="more-link">Read more</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="entry col-md-6">
                        <div class="grid-inner row align-items-center">
                            <div class="col-lg-6">
                                <div class="entry-image mb-0">
                                    <a href="#"><img src="{{asset('travel/demos/travel/images/blog/3.jpg')}}" alt="Paris"></a>
                                </div>
                            </div>
                            <div class="col-lg-6 mt-3 mt-lg-0">
                                <span class="before-heading">Hotels</span>
                                <div class="entry-title title-xs nott">
                                    <h3><a href="#">Prague hotels for every kind of traveller</a></h3>
                                </div>
                                <div class="entry-meta">
                                    <ul>
                                        <li><i class="icon-calendar3"></i> 02th March</li>
                                        <li><a href="#"><i class="icon-comments"></i> 39</a></li>
                                    </ul>
                                </div>
                                <div class="entry-content">
                                    <a href="#" class="more-link">Read more</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="entry col-md-6">
                        <div class="grid-inner row align-items-center">
                            <div class="col-lg-6">
                                <div class="entry-image mb-0">
                                    <a href="#"><img src="{{asset('travel/demos/travel/images/blog/4.jpg')}}" alt="Paris"></a>
                                </div>
                            </div>
                            <div class="col-lg-6 mt-3 mt-lg-0">
                                <span class="before-heading">Eating Out</span>
                                <div class="entry-title title-xs nott">
                                    <h3><a href="#">Shanghai restaurants for the discerning diner</a></h3>
                                </div>
                                <div class="entry-meta">
                                    <ul>
                                        <li><i class="icon-calendar3"></i> 11th February</li>
                                        <li><a href="#"><i class="icon-comments"></i> 11</a></li>
                                    </ul>
                                </div>
                                <div class="entry-content">
                                    <a href="#" class="more-link">Read more</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="entry col-md-6">
                        <div class="grid-inner row align-items-center">
                            <div class="col-lg-6">
                                <div class="entry-image mb-0">
                                    <a href="#"><img src="{{asset('travel/demos/travel/images/blog/5.jpg')}}" alt="Paris"></a>
                                </div>
                            </div>
                            <div class="col-lg-6 mt-3 mt-lg-0">
                                <span class="before-heading">Troubleshoots</span>
                                <div class="entry-title title-xs nott">
                                    <h3><a href="#">Best Tips for Packing Light </a></h3>
                                </div>
                                <div class="entry-meta">
                                    <ul>
                                        <li><i class="icon-calendar3"></i> 16th July</li>
                                        <li><a href="#"><i class="icon-comments"></i> 05</a></li>
                                    </ul>
                                </div>
                                <div class="entry-content">
                                    <a href="#" class="more-link">Read more</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="entry col-md-6">
                        <div class="grid-inner row align-items-center">
                            <div class="col-lg-6">
                                <div class="entry-image mb-0">
                                    <a href="#"><img src="{{asset('travel/demos/travel/images/blog/6.jpg')}}" alt="Paris"></a>
                                </div>
                            </div>
                            <div class="col-lg-6 mt-3 mt-lg-0">
                                <span class="before-heading">Sightseeing</span>
                                <div class="entry-title title-xs nott">
                                    <h3><a href="#">World's 15 Most Scenic Train Rides</a></h3>
                                </div>
                                <div class="entry-meta">
                                    <ul>
                                        <li><i class="icon-calendar3"></i> 21th December</li>
                                        <li><a href="#"><i class="icon-comments"></i> 12</a></li>
                                    </ul>
                                </div>
                                <div class="entry-content">
                                    <a href="#" class="more-link">Read more</a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>

            <div class="section footer-stick">
                <div class="container center clearfix">

                    <div class="heading-block bottommargin-sm border-bottom-0">
                        <span class="before-heading color">Create a Custom Plan based on your Taste</span>
                        <h2>Start making your Travel Plans</h2>
                    </div>

                    <p class="lead">Educate, aid, criteria catalyst John Lennon. Life-saving diversity necessities
                        elevate worldwide carbon rights empowerment. Pursue these aspirations leverage, accessibility
                        UNICEF, reduce child mortality collaborative cities safeguards. Informal economies non-partisan;
                        evolution transformative climate change local benefit.</p>

                    <a href="#" class="button button-rounded button-reveal text-end button-xlarge topmargin-sm"><i
                            class="icon-angle-right"></i><span>Create a Package</span></a>

                </div>
            </div>
        </div>
    </section><!-- #content end -->

@endsection
