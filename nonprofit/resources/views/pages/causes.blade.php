@extends('layout.main')
@section('content')
    <!-- Page Title
      ============================================= -->
    <section id="page-title" class="page-title-dark page-title-parallax page-title-center"
        style="background: linear-gradient(to bottom, rgba(6, 54, 57,.9), rgba(6, 54, 57,.9)), url({{asset('/nonprofit/demos/nonprofit/images/cause/page-title.jpg')}}) no-repeat center center; background-size: cover; padding: 140px 0;">

        <div class="container clearfix">
            <h1 class="mb-3">Our Causes</h1>
            <span>Your Healing Begins With Charity</span>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Causes</li>
            </ol>
        </div>

    </section><!-- #page-title end -->

    <!-- Content
      ============================================= -->
    <section id="content">
        <div class="content-wrap overflow-visible">

            <svg viewBox="0 0 1382 58" width="100%" height="60" preserveAspectRatio="none"
                style="position: absolute; top: -58px; left:0; z-index: 1">
                <path style="fill:#FFF;" d="M1.52.62s802.13,127,1380,0v56H.51Z" />
            </svg>

            <div class="container">
                <div class="row col-mb-30">

                    <div class="col-12">
                        <div class="donor-img d-flex align-items-center rounded mx-auto shadow-sm w-100"
                            style="height: 500px; background: url({{asset('/nonprofit/demos/nonprofit/images/others/3.jpg')}}) no-repeat center center / cover">
                        </div>
                        <div class="card bg-white border-0 center py-sm-4 px-sm-5 p-2 shadow-sm"
                            style="position: absolute; top: 50%; right: 80px; transform: translateY(-50%);">
                            <div class="card-body">
                                <div class="color h1 mb-3"><i class="icon-heart"></i></div>
                                <small class="text-uppercase fw-normal ls2 text-muted mb-3 d-block">Our Top Donor</small>
                                <h3 class="display-3 fw-bold mb-3 font-secondary">$2.4M</h3>
                                <p class="text-uppercase fw-medium text-muted">:Raised</p>
                                <a href="demo-nonprofit-causes-single.html" class="button-svg">View More</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6">
                        <div class="charity-card h-shadow shadow-ts card rounded-5">
                            <a href="demo-nonprofit-causes-single.html">
                                <img src="{{asset('nonprofit/demos/nonprofit/images/cause/grid/1.jpg')}}" alt="Image" class="card-img-top">
                            </a>
                            <div class="px-4 py-3 charity-card-title">
                                <small class="text-uppercase fw-normal ls1 mb-2 d-block">Homeless</small>
                                <h3 class="mb-3"><a href="demo-nonprofit-causes-single.html">Clean Water for
                                        All</a></h3>
                                <ul class="skills mb-3">
                                    <li data-percent="57">
                                        <div class="progress">
                                            <div class="progress-percent">
                                                <div class="counter counter-inherit">
                                                    $<span data-from="0" data-to="119700" data-refresh-interval="10"
                                                        data-speed="1100" data-comma="true"></span> Donated of $210,000
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="p-4">
                                <p class="mb-0 text-black-50">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut
                                    atque quidem consequuntur officiis vitae illo.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6">
                        <div class="charity-card h-shadow shadow-ts card rounded-5">
                            <a href="demo-nonprofit-causes-single.html">
                                <img src="{{asset('nonprofit/demos/nonprofit/images/cause/grid/2.jpg')}}" alt="Image" class="card-img-top">
                            </a>
                            <div class="px-4 py-3 charity-card-title">
                                <small class="text-uppercase fw-normal ls1 mb-2 d-block">Education</small>
                                <h3 class="mb-3"><a href="demo-nonprofit-causes-single.html">Education for All</a>
                                </h3>
                                <ul class="skills mb-3">
                                    <li data-percent="57">
                                        <div class="progress">
                                            <div class="progress-percent">
                                                <div class="counter counter-inherit">
                                                    $<span data-from="0" data-comma="true" data-to="76500"
                                                        data-refresh-interval="10" data-speed="1100"></span> Donated of
                                                    $170,000
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="p-4">
                                <p class="mb-0 text-black-50">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut
                                    atque quidem consequuntur officiis vitae illo.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6">
                        <div class="charity-card h-shadow shadow-ts card rounded-5">
                            <a href="demo-nonprofit-causes-single.html">
                                <img src="{{asset('nonprofit/demos/nonprofit/images/cause/grid/3.jpg')}}" alt="Image" class="card-img-top">
                            </a>
                            <div class="px-4 py-3 charity-card-title">
                                <small class="text-uppercase fw-normal ls1 mb-2 d-block">Food</small>
                                <h3 class="mb-3"><a href="demo-nonprofit-causes-single.html">Food for Hungry</a>
                                </h3>
                                <ul class="skills mb-3">
                                    <li data-percent="57">
                                        <div class="progress">
                                            <div class="progress-percent">
                                                <div class="counter counter-inherit">
                                                    $<span data-from="0" data-comma="true" data-to="76500"
                                                        data-refresh-interval="10" data-speed="1100"></span> Donated of
                                                    $170,000
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="p-4">
                                <p class="mb-0 text-black-50">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut
                                    atque quidem consequuntur officiis vitae illo.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6">
                        <div class="charity-card h-shadow shadow-ts card rounded-5">
                            <a href="demo-nonprofit-causes-single.html">
                                <img src="{{asset('nonprofit/demos/nonprofit/images/cause/grid/4.jpg')}}" alt="Image" class="card-img-top">
                            </a>
                            <div class="px-4 py-3 charity-card-title">
                                <small class="text-uppercase fw-normal ls1 mb-2 d-block">Medicine</small>
                                <h3 class="mb-3"><a href="demo-nonprofit-causes-single.html">Help from
                                        Injuries</a></h3>
                                <ul class="skills mb-3">
                                    <li data-percent="57">
                                        <div class="progress">
                                            <div class="progress-percent">
                                                <div class="counter counter-inherit">
                                                    $<span data-from="0" data-comma="true" data-to="76500"
                                                        data-refresh-interval="10" data-speed="1100"></span> Donated of
                                                    $170,000
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="p-4">
                                <p class="mb-0 text-black-50">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut
                                    atque quidem consequuntur officiis vitae illo.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6">
                        <div class="charity-card h-shadow shadow-ts card rounded-5">
                            <a href="demo-nonprofit-causes-single.html">
                                <img src="{{asset('nonprofit/demos/nonprofit/images/cause/grid/5.jpg')}}" alt="Image" class="card-img-top">
                            </a>
                            <div class="px-4 py-3 charity-card-title">
                                <small class="text-uppercase fw-normal ls1 mb-2 d-block">Education</small>
                                <h3 class="mb-3"><a href="demo-nonprofit-causes-single.html">Donation for
                                        Children</a></h3>
                                <ul class="skills mb-3">
                                    <li data-percent="57">
                                        <div class="progress">
                                            <div class="progress-percent">
                                                <div class="counter counter-inherit">
                                                    $<span data-from="0" data-comma="true" data-to="76500"
                                                        data-refresh-interval="10" data-speed="1100"></span> Donated of
                                                    $170,000
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="p-4">
                                <p class="mb-0 text-black-50">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut
                                    atque quidem consequuntur officiis vitae illo.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6">
                        <div class="charity-card h-shadow shadow-ts card rounded-5">
                            <a href="demo-nonprofit-causes-single.html">
                                <img src="{{asset('nonprofit/demos/nonprofit/images/cause/grid/6.jpg')}}" alt="Image" class="card-img-top">
                            </a>
                            <div class="px-4 py-3 charity-card-title">
                                <small class="text-uppercase fw-normal ls1 mb-2 d-block">Cloths</small>
                                <h3 class="mb-3"><a href="demo-nonprofit-causes-single.html">Cloths Donate for
                                        All</a></h3>
                                <ul class="skills mb-3">
                                    <li data-percent="87">
                                        <div class="progress">
                                            <div class="progress-percent">
                                                <div class="counter counter-inherit">
                                                    $<span data-from="0" data-comma="true" data-to="31500"
                                                        data-refresh-interval="10" data-speed="1100"></span> Donated of
                                                    $110,000
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="p-4">
                                <p class="mb-0 text-black-50">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut
                                    atque quidem consequuntur officiis vitae illo.</p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </section><!-- #content end -->
@endsection
