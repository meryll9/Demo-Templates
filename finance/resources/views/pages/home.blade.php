@extends('layout.main')
@section('content')
    <!-- Hero
      ============================================= -->
    <section id="slider" class="slider-element"
        style="background: #2646532b url({{ asset('/finance/demos/finance/images/hero-bg.png') }}) center bottom no-repeat; background-size: 100% auto;">

        <div class="container">
            <div class="row align-items-md-end">
                <div class="col-lg-5 align-self-center flex-column py-6">
                    <h1 class="hero-title display-3 fw-bold color font-body">{{ env('APP_TAGLINE') }}</h1>
                    <p class="my-5">Interactively seize bricks-and-clicks channels before empowered users. Uniquely
                        maximize bleeding-edge outsourcing.</p>
                    <a href="#" class="btn btn-lg btn-dark bg-color rounded-pill mb-5 px-5">Get Started <i
                            class="icon-line-arrow-right color-2 ms-1"></i></a>
                    <div class="row">
                        <div class="col-sm-6">
                            <ul class="iconlist mb-0">
                                <li class="mb-2"><i class="icon-line-check text-smaller bg-color-2 color"></i>
                                    Financial Services</li>
                                <li class="mb-2"><i class="icon-line-check text-smaller bg-color-2 color"></i>
                                    Audit &amp; Taxes</li>
                                <li class="mb-2"><i class="icon-line-check text-smaller bg-color-2 color"></i>
                                    Business Planning</li>
                            </ul>
                        </div>
                        <div class="col-sm-6">
                            <ul class="iconlist mb-0">
                                <li class="mb-2"><i class="icon-line-check text-smaller bg-color-2 color"></i>
                                    Acountants Experts</li>
                                <li class="mb-2"><i class="icon-line-check text-smaller bg-color-2 color"></i>
                                    International Markets</li>
                                <li class="mb-2"><i class="icon-line-check text-smaller bg-color-2 color"></i>
                                    Stocks &amp; Trades</li>
                            </ul>
                        </div>
                    </div>

                </div>
                <div class="col-lg-7 dotted-bg">
                    <img src="{{ asset('finance/demos/finance/images/man.png') }}" alt="Image 1"
                        class="d-flex align-self-end mt-5 z-1 mx-auto w-75 position-relative">
                </div>
            </div>
        </div>

    </section>

    <!-- Content
      ============================================= -->
    <section id="content">
        <div class="content-wrap py-5">

            <div class="container mw-md py-5">
                <div class="row justify-content-between align-items-center col-mb-30">
                    <div class="col-md-2 text-center">
                        <h3 class="display-2 fw-light mb-2 color">4.8</h3>
                        <div class="mb-2 color-2">
                            <i class="icon-star3"></i>
                            <i class="icon-star3"></i>
                            <i class="icon-star3"></i>
                            <i class="icon-star3"></i>
                            <i class="icon-star3"></i>
                        </div>
                        <span>20,321 Ratings</span>
                    </div>
                    <div class="col-md-4">
                        <h5 class="text-uppercase font-body ls2 color-2">What We Do</h5>
                        <h3 class="mb-0 fw-normal">Beware of Little Expenses, a small leak will sink a Great Ship.</h3>
                    </div>
                    <div class="col-md-5 mt-4 mt-md-0">
                        <blockquote class="py-0 mb-0">
                            <p>"Lorem ipsum dolor sit amet consectetur, adipisicing elit. Numquam, unde. Numquam officia
                                fuga sequi fugiat ipsa aperiam dolorem quam reprehenderit."</p>
                            <footer class="blockquote-footer font-primary">Benjamin Franklin</footer>
                        </blockquote>

                    </div>
                </div>
            </div>

            <div class="section dark bg-color" style="padding: 100px 0;">

                <div class="container">
                    <div class="heading-block mw-xs mx-auto text-center mb-6">
                        <h5 class="font-body text-uppercase ls2 color-2">What we do</h5>
                        <h3 class="text-white nott ls0">Beware of Little Expenses, a small leak will sink a Great Ship.</h3>
                    </div>
                    <div class="services-grid gutter-30 position-relative">
                        <div
                            style="background-image: url({{asset('/finance/demos/finance/images/grid.svg')}}); position: absolute; top: 50%; left: 50%; width: 50vw; height: 50vh; opacity: .15; transform: translate(-50%, -50%);">
                        </div>
                        <img class="op-05" src="{{ asset('finance/demos/finance/images/grid.svg') }}"
                            alt="Grid Image" style="position: absolute; left: -20px; top: -30px; z-index: -1;">
                        <div class="row">
                            <div class="col-lg-4 col-md-6 d-flex align-self-stretch">
                                <div class="feature-box flex-column h-shadow mx-0"
                                    style="background-image: linear-gradient(#2646532b, #264653f7), url({{ asset('/finance/demos/finance/images/services/1.jpg') }})">
                                    <div class="fbox-icon mb-4">
                                        <a href="#"><i class="icon-line-dollar-sign color-2"></i></a>
                                    </div>
                                    <div class="fbox-content">
                                        <h4 class="font-body fw-semibold h4 mb-4 mt-2 ls0 nott">Financial Services</h4>
                                        <p>Globally mesh multifunctional without competitive benefits. Synergistically
                                            procrastinate effective.</p>
                                        <a href="#" class="hover-button"><u>Read More</u> <i
                                                class="icon-line-arrow-right"></i></a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-4 col-md-6 d-flex align-self-stretch">
                                <div class="feature-box flex-column h-shadow mx-0"
                                    style="background-image: linear-gradient(#2646532b, #264653f7), url({{ asset('/finance/demos/finance/images/services/2.jpg') }})">
                                    <div class="fbox-icon mb-4">
                                        <a href="#"><i class="icon-line-paper color-2"></i></a>
                                    </div>
                                    <div class="fbox-content">
                                        <h4 class="font-body fw-semibold h4 mb-4 mt-2 ls0 nott"> Audit & Taxes</h4>
                                        <p>Appropriately parallel task mission-critical communities after team building
                                            quality vectors seamlessly promote.</p>
                                        <a href="#" class="hover-button"><u>Read More</u> <i
                                                class="icon-line-arrow-right"></i></a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-4 col-md-6 d-flex align-self-stretch">
                                <div class="feature-box flex-column h-shadow mx-0"
                                    style="background-image: linear-gradient(#264653A8, #264653), url({{ asset('/finance/demos/finance/images/services/3.jpg') }})">
                                    <div class="fbox-icon mb-4">
                                        <a href="#"><i class="icon-line-flag color-2"></i></a>
                                    </div>
                                    <div class="fbox-content">
                                        <h4 class="font-body fw-semibold h4 mb-4 mt-2 ls0 nott"> Business Planning</h4>
                                        <p>Globally deploy cost effective internal, consectetur adipisicing elit. Eligendi
                                            rem, facilis nobis voluptatum est.</p>
                                        <a href="#" class="hover-button"><u>Read More</u> <i
                                                class="icon-line-arrow-right"></i></a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-4 col-md-6 d-flex align-self-stretch">
                                <div class="feature-box flex-column h-shadow mx-0"
                                    style="background-image: linear-gradient(#26465398, #264653), url({{ asset('/finance/demos/finance/images/services/4.jpg') }})">
                                    <div class="fbox-icon mb-4">
                                        <a href="#"><i class="icon-line-users color-2"></i></a>
                                    </div>
                                    <div class="fbox-content">
                                        <h4 class="font-body fw-semibold h4 mb-4 mt-2 ls0 nott">Acountants Experts</h4>
                                        <p>Globally mesh multifunctional without competitive benefits. Synergistically
                                            procrastinate effective.</p>
                                        <a href="#" class="hover-button"><u>Read More</u> <i
                                                class="icon-line-arrow-right"></i></a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-4 col-md-6 d-flex align-self-stretch">
                                <div class="feature-box flex-column h-shadow mx-0"
                                    style="background-image: linear-gradient(#264653A8, #264653), url({{ asset('/finance/demos/finance/images/services/5.jpg') }})">
                                    <div class="fbox-icon mb-4">
                                        <a href="#"><i class="icon-line-globe color-2"></i></a>
                                    </div>
                                    <div class="fbox-content">
                                        <h4 class="font-body fw-semibold h4 mb-4 mt-2 ls0 nott"> International Markets</h4>
                                        <p>Appropriately parallel task mission-critical communities after team building
                                            quality vectors seamlessly promote.</p>
                                        <a href="#" class="hover-button"><u>Read More</u> <i
                                                class="icon-line-arrow-right"></i></a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-4 col-md-6 d-flex align-self-stretch">
                                <div class="feature-box flex-column h-shadow mx-0"
                                    style="background-image: linear-gradient(#26465398, #264653), url({{ asset('/finance/demos/finance/images/services/6.jpg') }})">
                                    <div class="fbox-icon mb-4">
                                        <a href="#"><i class="icon-line-briefcase color-2"></i></a>
                                    </div>
                                    <div class="fbox-content">
                                        <h4 class="font-body fw-semibold h4 mb-4 mt-2 ls0 nott"> Stocks &amp; Trades</h4>
                                        <p>Globally deploy cost effective internal, consectetur adipisicing elit. Eligendi
                                            rem, facilis nobis voluptatum est.</p>
                                        <a href="#" class="hover-button"><u>Read More</u> <i
                                                class="icon-line-arrow-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <img src="{{ asset('finance/demos/finance/images/grid.svg') }}" alt="Grid Image"
                            class="op-05" style="position: absolute; right: -30px; bottom: -30px; z-index: -1;">

                    </div>
                </div>

            </div>

            <div class="section bg-transparent" style="padding: 100px 0;">
                <div class="container">
                    <div class="row col-mb-50 gutter-lg-50 justify-content-center">
                        <div class="col-lg-4 col-md-5 text-center">
                            <img src="{{ asset('finance/demos/finance/images/file-text.svg') }}" alt="Globe Icon"
                                class="mb-5" height="100">
                            <h3 class="font-body h2 mb-4 color">Stocks &amp; Trades</h3>
                            <p class="text-larger fw-normal text-muted mb-0">Appropriately parallel task mission-critical
                                communities after team building quality vectors seamlessly promote.</p>
                        </div>
                        <div class="col-md-1 text-center d-md-flex justify-content-center align-self-stretch">
                            <div class="border-end border-default d-none d-md-block"></div>
                            <div class="border-top border-default d-block d-md-none"></div>
                        </div>

                        <div class="col-lg-4 col-md-5 text-center">
                            <img src="{{ asset('finance/demos/finance/images/users.svg') }}" alt="Users Icon"
                                class="mb-5" height="100">
                            <h3 class="font-body h2 mb-4 color">Accountant Experts</h3>
                            <p class="text-larger fw-normal text-muted mb-0">Appropriately parallel task mission-critical
                                communities after team building quality vectors seamlessly promote.</p>
                        </div>
                    </div>
                    <div class="row mt-6">
                        <div class="col-12 text-center mt-0 mt-md-4">
                            <a href="#" class="btn text-larger px-5 py-3 btn-dark bg-color rounded-pill"><i
                                    class="icon-line-calendar color-2 me-2 position-relative" style="top: 1px"></i>Book a
                                Schedule</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="container bg-color p-5 p-lg-6 mb-6" style="border-radius: 10px">
                <div class="row justify-content-around">
                    <div class="col-lg-7 dark">
                        <h3 class="mb-4 display-4 nott ls0 fw-semibold">Contact Us</h3>
                        <p class="mw-xs lead op-07 mb-5">Energistically syndicate team building synergy after efficient
                            human capital. Assertively underwhelm sticky solutions.</p>
                        <div class="feature-box fbox-sm mb-4">
                            <div class="fbox-icon">
                                <i class="icon-line-map-pin bg-color-2 color"></i>
                            </div>
                            <div class="fbox-content">
                                <h4 class="nott font-body fw-normal mb-0">
                                    795 Folsom Ave, Suite 600<br>
                                    San Francisco, CA 94107<br>
                                </h4>
                            </div>
                        </div>
                        <div class="feature-box fbox-sm align-items-center mb-4">
                            <div class="fbox-icon">
                                <i class="icon-line-phone-call bg-color-2 color"></i>
                            </div>
                            <div class="fbox-content">
                                <h4 class="nott font-body fw-normal mb-0"><a class="text-white"
                                        href="tel:+122-55412474">(1) 22 55412474</a></h4>
                            </div>
                        </div>
                        <div class="feature-box fbox-sm align-items-center mb-4">
                            <div class="fbox-icon">
                                <i class="icon-line-mail bg-color-2 color"></i>
                            </div>
                            <div class="fbox-content">
                                <h4 class="nott font-body fw-normal mb-0"><a class="text-white"
                                        href="mailto:noreply@canvas.com">noreply@canvas.com</a></h4>
                            </div>
                        </div>
                        <div class="feature-box fbox-sm">
                            <div class="fbox-icon">
                                <i class="icon-line-clock bg-color-2 color"></i>
                            </div>
                            <div class="fbox-content">
                                <h4 class="nott font-body fw-normal mb-0"><a class="text-white"
                                        href="mailto:noreply@canvas.com">Mon-Fri: 10:00-18:00 <br> Sat-Sun: 10:00-14:00</a>
                                </h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5 mt-5 mt-lg-0">
                        <div class="card border-0 shadow-lg p-4">
                            <div class="card-body py-4">
                                <div class="form-widget">

                                    <div class="form-result"></div>

                                    <form class="mb-0" id="template-contactform" name="template-contactform"
                                        action="include/form.php" method="post">

                                        <div class="form-process">
                                            <div class="css3-spinner">
                                                <div class="css3-spinner-scaler"></div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-12 form-group mb-4">
                                                <label for="template-contactform-name">Name <small>*</small></label>
                                                <input type="text" id="template-contactform-name"
                                                    name="template-contactform-name" value=""
                                                    class="form-control required" />
                                            </div>

                                            <div class="col-12 form-group mb-4">
                                                <label for="template-contactform-email">Email<small>*</small></label>
                                                <input type="email" id="template-contactform-email"
                                                    name="template-contactform-email" value=""
                                                    class="required email form-control" />
                                            </div>

                                            <div class="col-12 form-group mb-4">
                                                <label for="template-contactform-message">Message <small>*</small></label>
                                                <textarea class="required form-control" id="template-contactform-message"
                                                    name="template-contactform-message" rows="4" cols="30"></textarea>
                                            </div>

                                            <div class="col-12 form-group mb-4 d-none">
                                                <input type="text" id="template-contactform-botcheck"
                                                    name="template-contactform-botcheck" value="" class="form-control" />
                                            </div>

                                            <div class="col-12 form-group mb-0">
                                                <button class="btn text-larger btn-dark bg-color px-4 py-2 rounded-pill"
                                                    type="submit" id="template-contactform-submit"
                                                    name="template-contactform-submit" value="submit"><i
                                                        class="icon-line-mail color-2 ms-1"></i> Send Message</button>
                                            </div>
                                        </div>

                                        <input type="hidden" name="prefix" value="template-contactform-">

                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="clear"></div>

            <div class="container my-5">
                <div class="heading-block mw-xs mx-auto text-center mb-6">
                    <h5 class="font-body text-uppercase ls2 color-2">Testimonials</h5>
                    <h3 class="color nott ls0">What Our Clients say</h3>
                </div>
                <div class="row gutter-md-50">
                    <div class="col-lg-4 px-lg-5">
                        <div class="mb-4 color-2">
                            <i class="icon-star3"></i>
                            <i class="icon-star3"></i>
                            <i class="icon-star3"></i>
                            <i class="icon-star3"></i>
                            <i class="icon-star3"></i>
                        </div>
                        <h3 class="fw-semibold font-body color mb-4">The most comprehensive template collection on envato.
                        </h3>
                        <p class="color op-06 fw-medium">"Completely productivate quality web services rather than
                            standards compliant niches. Continually engineer."</p>

                        <div class="d-flex align-items-center mt-4">
                            <img src="{{ asset('finance/demos/finance/images/users/1.jpg') }}" alt="User" width="60"
                                class="rounded-circle">
                            <div class="ms-3">
                                <h4 class="font-body mb-2 fw-bold h6">Alan Fresco</h4>
                                <div class="op-05 text-uppercase ls1 text-smaller fw-semibold">Company Inc.</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 px-lg-5 mt-5 mt-lg-0">
                        <div class="mb-4 color-2">
                            <i class="icon-star3"></i>
                            <i class="icon-star3"></i>
                            <i class="icon-star3"></i>
                            <i class="icon-star3"></i>
                            <i class="icon-star3"></i>
                        </div>
                        <h3 class="fw-semibold font-body color mb-4">Awesome Design &amp; Customer Support.</h3>
                        <p class="color op-06 fw-medium">"Amazing WORK ! This guys also very fast for support. No matter
                            Sunday or Monday. I get my answers and they were really patiently with my sometimes stupid
                            questions!"</p>

                        <div class="d-flex align-items-center mt-4">
                            <img src="{{ asset('finance/demos/finance/images/users/2.jpg') }}" alt="User" width="60"
                                class="rounded-circle">
                            <div class="ms-3">
                                <h4 class="font-body mb-2 fw-bold h6">iNoize</h4>
                                <div class="op-05 text-uppercase ls1 text-smaller fw-semibold">Company Inc.</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 px-lg-5 mt-5 mt-lg-0">
                        <div class="mb-4 color-2">
                            <i class="icon-star3"></i>
                            <i class="icon-star3"></i>
                            <i class="icon-star3"></i>
                            <i class="icon-star3"></i>
                            <i class="icon-star3"></i>
                        </div>
                        <h3 class="fw-semibold font-body color mb-4">Flexibility and Feature Availability</h3>
                        <p class="color op-06 fw-medium">"A great thing that there are many demos available otherwise all
                            of the great implementation and features would never be used or understood the right way."</p>

                        <div class="d-flex align-items-center mt-4">
                            <img src="{{ asset('finance/demos/finance/images/users/3.jpg') }}" alt="User" width="60"
                                class="rounded-circle">
                            <div class="ms-3">
                                <h4 class="font-body mb-2 fw-bold h6">Wickdevs</h4>
                                <div class="op-05 text-uppercase ls1 text-smaller fw-semibold">Company Inc.</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="clear"></div>

            <div class="container mt-6 dotted-bg rounded-6" style="background-color: #2646531b;">
                <div class="row align-items-center justify-content-between p-5 p-md-6">
                    <div class="col mb-5 mb-lg-0">
                        <h5 class="font-body h5 mb-3 op-07">Ready to Grow your Business?</h5>
                        <h2 class="font-body h1 mb-0">Best way to save your Money.</h2>
                    </div>
                    <div class="col-auto">
                        <a href="#" class="btn px-3 py-2 px-md-5 py-md-3 btn-dark bg-color rounded-pill"><i
                                class="icon-line-calendar color-2 me-2 position-relative" style="top: 1px"></i>Book a
                            Schedule</a>
                        <a href="#" class="btn px-3 py-2 px-md-5 py-md-3 bg-color-2 rounded-pill ms-2"><i
                                class="icon-line-mail color me-2 position-relative" style="top: 1px"></i>Contact Us</a>
                    </div>
                </div>
            </div>

        </div>
    </section><!-- #content end -->
@endsection
