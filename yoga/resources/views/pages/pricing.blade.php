@extends('layout.main')
@section('content')
    <!-- Page Title
      ============================================= -->
    <section id="page-title" class="text-start">

        <div class="container clearfix">
            <div class="d-flex justify-content-between align-items-center">
                <div class="mw-sm pe-4">
                    <div class="fancy-title title-border mb-3">
                        <h5 class="fw-normal color font-body text-uppercase ls1">Best Price for Everyone</h5>
                    </div>
                    <h2 class="nott display-4 fw-semibold">Your Yoga Plan.</h2>
                    <span>Energistically syndicate team building synergy after efficient human capital. Assertively
                        underwhelm sticky solutions.</span>
                </div>
                <img src="{{asset('yoga/demos/yoga/images/yoga-img.svg')}}" alt="Yoga Image" class="d-none d-sm-flex" width="300">
            </div>
        </div>

    </section><!-- #page-title end -->

    <!-- Content
      ============================================= -->
    <section id="content">
        <div class="content-wrap">

            <div class="section-price">
                <div class="container">

                    <div class="row">
                        <div class="col-md-4 mb-5">
                            <h2 class="fw-normal">
                                1 Free Class.<br>
                                Free Diet Plan.<br>
                                All Classes.<br>
                                24x7 Available.
                            </h2>
                            <p class="text-black-50">Sign up and Get your free 1 Day Trial Class.</p>
                            <a href="#"
                                class="btn rounded bg-color text-white shadow text-uppercase fw-semibold ls1 py-3 px-4">Start
                                Class Today</a>
                        </div>
                        <div class="col-md-4 mb-5">
                            <div class="card pricing border-0 shadow text-center">
                                <div class="card-body rounded pt-5 pb-0">
                                    <img src="{{asset('yoga/demos/yoga/images/yoga-icons/color/svg/mudra_surya.svg')}}" class="mb-3"
                                        alt="" height="40">
                                    <h3>Monthly Subscription</h3>
                                    <ul class="list-unstyled">
                                        <li class="text-black-50 my-1">New Classes Included</li>
                                        <li class="text-black-50 my-1">Any Studio Accessable</li>
                                        <li class="text-black-50 my-1">cancel Any Time</li>
                                    </ul>
                                    <h3 class="mb-3 h2 color">$19.99</h3>
                                    <a href="#"
                                        class="btn rounded bg-color text-white text-uppercase fw-semibold ls1 py-2 px-4">Get
                                        Started</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 mb-4">
                            <div class="card pricing border-0 shadow text-center">
                                <div class="card-body rounded pt-5 pb-0">
                                    <img src="{{asset('yoga/demos/yoga/images/yoga-icons/color/svg/mudra_anjali.svg')}}"
                                        class="mb-3" alt="" height="40">
                                    <h3>Annual Subscription</h3>
                                    <ul class="list-unstyled">
                                        <li class="text-black-50 my-1">1 Month Free</li>
                                        <li class="text-black-50 my-1">New Classes Included</li>
                                        <li class="text-black-50 my-1">Any Studio Accessable</li>
                                        <li class="text-black-50 my-1">Free Towel and Juices</li>
                                        <li class="text-black-50 my-1">24x7 Accesable</li>
                                        <li class="text-black-50 my-1">cancel Any Time</li>
                                    </ul>
                                    <h3 class="mb-3 h2">$219.99</h3>
                                    <a href="#"
                                        class="btn rounded bg-dark text-white text-uppercase fw-semibold ls1 py-2 px-4">Get
                                        Started</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="clear bottommargin"></div>

                    <div class="center text-title">
                        <h3><img src="{{asset('yoga/demos/yoga/images/yoga-icons/outlined/svg/sahasara.svg')}}" alt="" width="20"
                                height="20">Additional Features For Annual Subscriber</h3>
                    </div>
                    <div class="price-features">
                        <div class="row">
                            <div class="col-md-4">
                                <ul class="iconlist mb-0">
                                    <li><i class="icon-line-circle-check color"></i> 24x7 Available</li>
                                    <li><i class="icon-line-circle-check color"></i> Free Lunch Per Day</li>
                                    <li><i class="icon-line-circle-check color"></i> All Classes in One Price</li>
                                    <li><i class="icon-line-circle-check color"></i> Special Event Access</li>
                                </ul>
                            </div>
                            <div class="col-md-4">
                                <ul class="iconlist mb-0">
                                    <li><i class="icon-line-circle-check color"></i> Free Towel Provide</li>
                                    <li><i class="icon-line-circle-check color"></i> Free Lockers</li>
                                    <li><i class="icon-line-circle-check color"></i> Free Lockers</li>
                                    <li><i class="icon-line-circle-check color"></i> Free Yoga Mat*</li>
                                </ul>
                            </div>
                            <div class="col-md-4">
                                <ul class="iconlist mb-0">
                                    <li><i class="icon-line-circle-check color"></i> 1 Month Free</li>
                                    <li><i class="icon-line-circle-check color"></i> Any Studio Accessable</li>
                                    <li><i class="icon-line-circle-check color"></i> Cancel Anytime</li>
                                    <li><i class="icon-line-circle-check color"></i> No Hidden Charges</li>
                                </ul>
                            </div>
                        </div>
                    </div>

                </div>

            </div>

        </div>

    </section><!-- #content end -->
@endsection
