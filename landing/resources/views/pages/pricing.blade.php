@extends('layout.main')
@section('content')
    <!-- Slider
      ============================================= -->
    <section id="slider" class="slider-element dark min-vh-25 min-vh-md-50 include-header py-5"
        style="background-image: url({{asset('/landing/demos/landing/images/hero/1.svg')}});">
        <div class="slider-inner">

            <div class="vertical-middle text-center">
                <div class="container">
                    <div class="row align-items-center justify-content-center">

                        <div class="col-lg-6 col-md-6">
                            <h2 class="display-3 fw-bold text-white mb-2">Pricing</h2>
                            <p class="lead mb-0 fw-normal">Best Wallet App for your upcoming Projects.</p>
                        </div>

                    </div>
                </div>
            </div>

        </div>
    </section><!-- #slider end -->

    <!-- Content
      ============================================= -->
    <section id="content">
        <div class="content-wrap">
            <div class="section pt-0 bg-transparent">
                <div class="container">
                    <div class="row justify-content-between">
                        <div class="col-xl-4 col-lg-5 col-md-6 dotted-bg dotted-bg-dark">
                            <div class="heading-block border-bottom-0 bottommargin-sm">
                                <i class="icon-credit h1"></i>
                                <h2 class="nott" style="font-size: 36px;">No Hidden Charges. <br>Choose Your Best
                                    Plan.</h2>
                            </div>
                            <div class="fw-normal lead">Credibly target highly efficient niche markets whereas end-to-end
                                results.</div>

                            <p class="text-white-50 mt-5">During Free trail you won't be charge and you can freely use this
                                app without <a href="#" class="text-white"><u>Terms and Condtions</u></a>.</p>
                        </div>
                        <div class="col-lg-7 col-md-6">
                            <div class="row">
                                <div class="col-lg-6 pricing-table">
                                    <div class="card shadow"
                                        style="background-image: url({{asset('/landing/demos/landing/images/section/pricing-bg-light.svg')}}); background-position: 0 96%; background-size: 100% 290px;">
                                        <h5 class="text-uppercase ls1 mb-2">Startup</h5>
                                        <h2 class="ls0 fw-bold mb-3">Free</h2>
                                        <p class="mb-5 text-black-50">Phosfluorescently negotiate alternative human capital
                                            with fully tested leadership skills. Quickly enable.</p>
                                        <ul class="iconlist">
                                            <li><i class="icon-check-circle color"></i>7 Days Free Trail</li>
                                            <li><i class="icon-check-circle color"></i>App-In-Purchase</li>
                                            <li><i class="icon-check-circle color"></i>100% Safe &amp; Secure</li>
                                            <li><i class="icon-check-circle color"></i>Liecenced Company</li>
                                            <li><i class="icon-check-circle color"></i>No Hidden Charges</li>
                                        </ul>
                                        <a href="#"
                                            class="btn w-100 text-white bg-color rounded-3 p-3 fw-semibold text-uppercase">Download
                                            Free</a>
                                    </div>
                                </div>

                                <div class="col-lg-6 pricing-table mt-4 mt-lg-0">
                                    <div class="card shadow"
                                        style="background-image: url({{asset('/landing/demos/landing/images/section/pricing-bg.svg')}});">
                                        <h5 class="text-uppercase ls1 text-white-50 mb-2">Pro</h5>
                                        <h2 class="ls0 fw-bold mb-5 text-white">$29</h2>
                                        <p class="mt-2 text-black-50">Holisticly disintermediate viral results rather than
                                            next-generation action items vertical metrics rather than parallel growth
                                            strategies.</p>
                                        <ul class="iconlist">
                                            <li><i class="icon-check-circle color"></i>One Time Purchase</li>
                                            <li><i class="icon-check-circle color"></i>All Bundle Included</li>
                                            <li><i class="icon-check-circle color"></i>100% Safe &amp; Secure</li>
                                            <li><i class="icon-check-circle color"></i>Liecenced Company</li>
                                            <li><i class="icon-check-circle color"></i>No Hidden Charges</li>
                                        </ul>
                                        <a href="#"
                                            class="btn w-100 text-white bg-color rounded-3 p-3 fw-semibold text-uppercase">Purchase
                                            Pro</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="section dark parallax mb-3" data-bottom-top="background-color:rgb(61,128,228);"
                data-center-bottom="background-color:rgb(0,0,0);">
                <div class="container">
                    <div class="row justify-content-center my-5">
                        <div class="col-md-7">
                            <h2 class="text-center text-white mb-5 fw-semibold">Frequently Asked Questions</h2>
                            <div class="toggle-wrap">
                                <div class="toggle">
                                    <div class="toggle-header">
                                        <div class="toggle-icon">
                                            <i class="toggle-closed icon-angle-right1"></i>
                                            <i class="toggle-open icon-angle-down1"></i>
                                        </div>
                                        <div class="toggle-title">
                                            How do I become an author?
                                        </div>
                                    </div>
                                    <div class="toggle-content">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                        Assumenda, dolorum, vero ipsum molestiae minima odio quo voluptate illum excepturi
                                        quam cum voluptates doloribus quae nisi tempore necessitatibus dolores ducimus enim
                                        libero eaque explicabo suscipit animi at quaerat aliquid ex expedita perspiciatis?
                                        Saepe, aperiam, nam unde quas beatae vero vitae nulla.</div>
                                </div>

                                <div class="toggle">
                                    <div class="toggle-header">
                                        <div class="toggle-icon">
                                            <i class="toggle-closed icon-angle-right1"></i>
                                            <i class="toggle-open icon-angle-down1"></i>
                                        </div>
                                        <div class="toggle-title">
                                            Helpful Resources for Authors
                                        </div>
                                    </div>
                                    <div class="toggle-content">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                        Assumenda, dolorum, vero ipsum molestiae minima odio quo voluptate illum excepturi
                                        quam cum voluptates doloribus quae nisi tempore necessitatibus dolores ducimus enim
                                        libero eaque explicabo suscipit animi at quaerat aliquid ex expedita perspiciatis?
                                        Saepe, aperiam, nam unde quas beatae vero vitae nulla.</div>
                                </div>

                                <div class="toggle">
                                    <div class="toggle-header">
                                        <div class="toggle-icon">
                                            <i class="toggle-closed icon-angle-right1"></i>
                                            <i class="toggle-open icon-angle-down1"></i>
                                        </div>
                                        <div class="toggle-title">
                                            How much money can I make?
                                        </div>
                                    </div>
                                    <div class="toggle-content">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                        Assumenda, dolorum, vero ipsum molestiae minima odio quo voluptate illum excepturi
                                        quam cum voluptates doloribus quae nisi tempore necessitatibus dolores ducimus enim
                                        libero eaque explicabo suscipit animi at quaerat aliquid ex expedita perspiciatis?
                                        Saepe, aperiam, nam unde quas beatae vero vitae nulla.</div>
                                </div>

                                <div class="toggle">
                                    <div class="toggle-header">
                                        <div class="toggle-icon">
                                            <i class="toggle-closed icon-angle-right1"></i>
                                            <i class="toggle-open icon-angle-down1"></i>
                                        </div>
                                        <div class="toggle-title">
                                            Can I offer my items for free on a promotional basis?
                                        </div>
                                    </div>
                                    <div class="toggle-content">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                        Assumenda, dolorum, vero ipsum molestiae minima odio quo voluptate illum excepturi
                                        quam cum voluptates doloribus quae nisi tempore necessitatibus dolores ducimus enim
                                        libero eaque explicabo suscipit animi at quaerat aliquid ex expedita perspiciatis?
                                        Saepe, aperiam, nam unde quas beatae vero vitae nulla.</div>
                                </div>

                                <div class="toggle">
                                    <div class="toggle-header">
                                        <div class="toggle-icon">
                                            <i class="toggle-closed icon-angle-right1"></i>
                                            <i class="toggle-open icon-angle-down1"></i>
                                        </div>
                                        <div class="toggle-title">
                                            An Introduction to the Marketplaces for Authors
                                        </div>
                                    </div>
                                    <div class="toggle-content">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                        Assumenda, dolorum, vero ipsum molestiae minima odio quo voluptate illum excepturi
                                        quam cum voluptates doloribus quae nisi tempore necessitatibus dolores ducimus enim
                                        libero eaque explicabo suscipit animi at quaerat aliquid ex expedita perspiciatis?
                                        Saepe, aperiam, nam unde quas beatae vero vitae nulla.</div>
                                </div>
                            </div>
                            <h5 class="mt-4 text-center fw-normal text-white-50 mb-0">Didn't find what you were after? <a
                                    href="#" class="text-white"><u>Visit the FAQ Page</u></a></h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section><!-- #content end -->

@endsection
