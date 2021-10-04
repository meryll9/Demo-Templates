@extends('layout.main')
@section('content')
    <!-- Content
      ============================================= -->
    <section id="content">
        <div class="content-wrap pb-0">

            <div class="container mb-4">

                <div class="row justify-content-center text-center">
                    <div class="col-md-6">
                        <h2 class="display-4 text-dark fw-semibold ls--2"><span>Free</span> Trail for 1 Day in Our Workspace.
                        </h2>
                        <p class="text-dark">Progressively syndicate user-centric schemas without front-end synergy.
                            Monotonectally envisioneer.</p>
                        <a href="demo-coworking-single.html"
                            class="button button-rounded button-large m-0 center fw-medium nott ls0 fw-normal">Book your Free
                            Trail Now</a>
                    </div>
                </div>
            </div>

            <div class="clear"></div>

            <div class="section">

                <div class="container">

                    <div class="row">
                        <div class="col-12">
                            <div id="price-carousel" class="owl-carousel carousel-widget" data-margin="30" data-nav="false"
                                data-pagi="true" data-items-xs="1" data-items-sm="1" data-items-md="2" data-items-lg="3"
                                data-items-xl="3">

                                <div class="price-list shadow-sm card border-0 rounded">
                                    <div class="position-relative">
                                        <img src="{{asset('coworking/demos/coworking/images/membership/1-day.jpg')}}" alt="Featured image 1"
                                            class="card-img-top rounded-top">
                                        <div
                                            class="card-img-overlay dark d-flex justify-content-center flex-column p-0 center">
                                            <h3 class="card-title mb-0 text-white">Day Pass</h3>
                                            <p class="card-text mb-0">Give it a Try</p>
                                        </div>
                                    </div>
                                    <div class="card-body">

                                        <div class="price-title pb-3">$19<small>Per Day</small></div>

                                        <ul class="list-group list-group-flush mb-4">
                                            <li class="list-group-item ps-0"><i class="icon-line-check pe-3 color"></i> Day
                                                Access Only</li>
                                            <li class="list-group-item ps-0"><i class="icon-line-check pe-3 color"></i>
                                                Unlimited Superfast Wi-Fi</li>
                                            <li class="list-group-item ps-0 text-black-50"><i
                                                    class="icon-line-check pe-3 color"></i> <del>No lockers</del></li>
                                        </ul>

                                        <a href="demo-coworking-single.html"
                                            class="button button-rounded button-large w-100 m-0 center fw-medium">Book
                                            Now</a>

                                    </div>
                                </div>

                                <div class="price-list shadow-sm card border-0 rounded">
                                    <div class="position-relative">
                                        <img src="{{asset('coworking/demos/coworking/images/membership/share.jpg')}}" alt="Featured image 1"
                                            class="card-img-top rounded-top">
                                        <div
                                            class="card-img-overlay dark d-flex justify-content-center flex-column p-0 center">
                                            <h3 class="card-title mb-0 text-white">Shared Desk</h3>
                                            <p class="card-text mb-0">Economical but Flexible</p>
                                        </div>
                                    </div>
                                    <div class="card-body">

                                        <div class="price-title pb-3">$99<small>Monthly</small></div>

                                        <ul class="list-group list-group-flush mb-4">
                                            <li class="list-group-item ps-0"><i class="icon-line-check pe-3 color"></i> 8am
                                                to 8pm Access</li>
                                            <li class="list-group-item ps-0"><i class="icon-line-check pe-3 color"></i> 100
                                                hours of Superfast Wi-Fi</li>
                                            <li class="list-group-item ps-0"><i class="icon-line-check pe-3 color"></i>
                                                Lockers Access</li>
                                            <li class="list-group-item ps-0 text-black-50"><i
                                                    class="icon-line-check pe-3 color"></i> <del>No Printers</del></li>
                                        </ul>

                                        <a href="demo-coworking-single.html"
                                            class="button button-rounded button-large w-100 m-0 center fw-medium">Book
                                            Now</a>

                                    </div>
                                </div>

                                <div class="price-list shadow-sm card border-0 rounded">
                                    <div class="position-relative">
                                        <img src="{{asset('coworking/demos/coworking/images/membership/flexible.jpg')}}" alt="Featured image 1"
                                            class="card-img-top rounded-top">
                                        <div
                                            class="card-img-overlay dark d-flex justify-content-center flex-column p-0 center">
                                            <h3 class="card-title mb-0 text-white">Flexible Desk</h3>
                                            <p class="card-text mb-0">Any Desk, Any Chair</p>
                                        </div>
                                    </div>
                                    <div class="card-body">

                                        <div class="price-title pb-3">$149<small>Monthly</small></div>

                                        <ul class="list-group list-group-flush mb-4">
                                            <li class="list-group-item ps-0"><i class="icon-line-check pe-3 color"></i> 200
                                                hours of WIFI per Month</li>
                                            <li class="list-group-item ps-0"><i class="icon-line-check pe-3 color"></i>
                                                Lockers Access</li>
                                            <li class="list-group-item ps-0"><i class="icon-line-check pe-3 color"></i> 50
                                                pages Printers</li>
                                            <li class="list-group-item ps-0"><i class="icon-line-check pe-3 color"></i> 5hrs
                                                Skype Booth</li>
                                            <li class="list-group-item ps-0"><i class="icon-line-check pe-3 color"></i>
                                                Mailing Address</li>
                                        </ul>

                                        <a href="demo-coworking-single.html"
                                            class="button button-rounded button-large w-100 m-0 center fw-medium">Book
                                            Now</a>

                                    </div>
                                </div>

                                <div class="price-list shadow-sm card border-0 rounded">
                                    <div class="position-relative">
                                        <img src="{{asset('coworking/demos/coworking/images/membership/private.jpg')}}" alt="Featured image 1"
                                            class="card-img-top rounded-top">
                                        <div
                                            class="card-img-overlay dark d-flex justify-content-center flex-column p-0 center">
                                            <h3 class="card-title mb-0 text-white">Private Desk</h3>
                                            <p class="card-text mb-0">Its all Yours!</p>
                                        </div>
                                    </div>
                                    <div class="card-body">

                                        <div class="price-title pb-3">$249<small>Monthly</small></div>

                                        <ul class="list-group list-group-flush mb-4">
                                            <li class="list-group-item ps-0"><i class="icon-line-check pe-3 color"></i>
                                                Private Desk + Locker</li>
                                            <li class="list-group-item ps-0"><i class="icon-line-check pe-3 color"></i> 500
                                                hours of WIFI per Month</li>
                                            <li class="list-group-item ps-0"><i class="icon-line-check pe-3 color"></i>
                                                Meeting Room Access</li>
                                            <li class="list-group-item ps-0"><i class="icon-line-check pe-3 color"></i>
                                                Unlimited Printers</li>
                                            <li class="list-group-item ps-0"><i class="icon-line-check pe-3 color"></i>
                                                Unlimited Skype Booth</li>
                                            <li class="list-group-item ps-0"><i class="icon-line-check pe-3 color"></i>
                                                Mailing Address</li>
                                        </ul>

                                        <a href="demo-coworking-single.html"
                                            class="button button-rounded button-large w-100 m-0 center fw-medium">Book
                                            Now</a>

                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="col-md-11 mt-5 offset-md-1 topmargin-lg">
                            <h3>Terms &amp; Conditions</h3>
                            <ul class="ps-4 mb-0">
                                <li class="mb-1">Hours indicated are access to the space NOT the WIFI or Internet
                                    Connection.</li>
                                <li class="mb-1">Payment is upfront. We accept Cash and VISA/Master Cards, 2%
                                    Credit Card surcharge applies.</li>
                                <li class="mb-1">Monthly Plan starts from the point of signup for 30 days.</li>
                                <li class="mb-1">Sorry NO Pausing Memberships and NO Cancellations.</li>
                                <li class="mb-1">Sorry NO Upgrading Plans you need to use the hours in the plan.
                                </li>
                                <li class="mb-1">If you run out of hours you can buy additional hours at the rate
                                    above, through our website or front desk.</li>
                                <li class="mb-1">If you wish to change plan once you’re on a plan this is done
                                    only at the end of the month or once you use your hours.</li>
                                <li class="mb-1">Additional Printing is charged at &dollar;0.30 for Black and
                                    White A4 & A3 and &dollar;2 for Colour A4 & A3.</li>
                                <li class="mb-1">Skype Booths must be booked before 1 day &amp; the keys can be
                                    collected at the frontdesk. Additional Skype Booth usage will be charged at &dollar;5
                                    per hour.</li>
                                <li class="mb-1">Storage Lockers are first come first serve and are subject to
                                    availability.</li>
                                <li class="mb-1">Additional Charge for Mail Delivery.</li>
                                <li class="mb-1">Pets are not allowed.</li>
                            </ul>
                        </div>
                    </div>

                </div>

            </div>

            <div class="section bg-transparent">
                <div class="container">

                    <div class="row justify-content-between">

                        <!-- Feature Box
           ============================================= -->
                        <div class="col-lg-4 col-md-6 my-4">
                            <i class="icon-wifi-full color ms-0 mb-4 i-plain d-block float-none"></i>
                            <h4 class="mb-3">Fiber Optic WiFi</h4>
                            <p class="text-muted">Add any Field to your Custom Form. Canvas's inbuilt Forms Processor
                                will handle the rest. You will never have to touch any PHP Codes.</p>
                        </div>

                        <!-- Feature Box
           ============================================= -->
                        <div class="col-lg-4 col-md-6 my-4">
                            <i class="icon-line2-cup color ms-0 mb-3 i-plain d-block float-none"></i>
                            <h4 class="mb-3">Cafeteria</h4>
                            <p class="text-muted">Add any Field to your Custom Form. Canvas's inbuilt Forms Processor
                                will handle the rest. You will never have to touch any PHP Codes.</p>
                        </div>

                        <!-- Feature Box
           ============================================= -->
                        <div class="col-lg-4 col-md-6 my-4">
                            <i class="icon-line2-screen-desktop color ms-0 mb-3 i-plain d-block float-none"></i>
                            <h4 class="mb-3">Flexible Desks</h4>
                            <p class="text-muted">Add any Field to your Custom Form. Canvas's inbuilt Forms Processor
                                will handle the rest. You will never have to touch any PHP Codes.</p>
                        </div>

                        <!-- Feature Box
           ============================================= -->
                        <div class="col-lg-4 col-md-6 my-4">
                            <i class="icon-line2-lock color ms-0 mb-3 i-plain d-block float-none"></i>
                            <h4 class="mb-3">Lockers</h4>
                            <p class="text-muted">Add any Field to your Custom Form. Canvas's inbuilt Forms Processor
                                will handle the rest. You will never have to touch any PHP Codes.</p>
                        </div>

                        <!-- Feature Box
           ============================================= -->
                        <div class="col-lg-4 col-md-6 my-4">
                            <i class="icon-fingerprint color ms-0 mb-3 i-plain d-block float-none"></i>
                            <h4 class="mb-3">100% Secure</h4>
                            <p class="text-muted">Add any Field to your Custom Form. Canvas's inbuilt Forms Processor
                                will handle the rest. You will never have to touch any PHP Codes.</p>
                        </div>

                        <!-- Feature Box
           ============================================= -->
                        <div class="col-lg-4 col-md-6 my-4">
                            <i class="icon-line2-printer color ms-0 mb-3 i-plain d-block float-none"></i>
                            <h4 class="mb-3">Printers &amp; Fax</h4>
                            <p class="text-muted">Add any Field to your Custom Form. Canvas's inbuilt Forms Processor
                                will handle the rest. You will never have to touch any PHP Codes.</p>
                        </div>

                        <!-- Feature Box
           ============================================= -->
                        <div class="col-lg-4 col-md-6 my-4">
                            <i class="icon-couch color ms-0 mb-3 i-plain d-block float-none"></i>
                            <h4 class="mb-3">Common Area</h4>
                            <p class="text-muted">Add any Field to your Custom Form. Canvas's inbuilt Forms Processor
                                will handle the rest. You will never have to touch any PHP Codes.</p>
                        </div>

                        <!-- Feature Box
           ============================================= -->
                        <div class="col-lg-4 col-md-6 my-4">
                            <i class="icon-line-clock color ms-0 mb-3 i-plain d-block float-none"></i>
                            <h4 class="mb-3">24x7 Access</h4>
                            <p class="text-muted">Add any Field to your Custom Form. Canvas's inbuilt Forms Processor
                                will handle the rest. You will never have to touch any PHP Codes.</p>
                        </div>

                        <!-- Feature Box
           ============================================= -->
                        <div class="col-lg-4 col-md-6 my-4">
                            <i class="icon-playstation color ms-0 mb-3 i-plain d-block float-none"></i>
                            <h4 class="mb-3">Other Activities</h4>
                            <p class="text-muted">Add any Field to your Custom Form. Canvas's inbuilt Forms Processor
                                will handle the rest. You will never have to touch any PHP Codes.</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="section mb-0 pb-0 bg-theme-light clearfix" style="padding-top: 120px;">
                <div class="container">
                    <div class="row">
                        <div class="col-md-8 offset-1">
                            <div class="before-heading">Don't Hesitate to Reach out to Us</div>
                            <h2 class="nott fw-semibold display-4">Want to Talk?</h2>
                            <h4 class="fw-light mb-4">Call us at <a href="tel:+(61)8-234-532-45">+(61)8-234-532-45</a>
                            </h4>
                            <a href="mailto:noreply@canvas.com"
                                class="button button-rounded button-xlarge m-0 nott fw-semibold ls0 px-5">Email Us</a>
                        </div>
                    </div>
                </div>
                <img src="{{asset('coworking/demos/coworking/images/footer-bg.jpg')}}" alt="Footer Image" class="footer-img">
            </div>

        </div>
    </section><!-- #content end -->
@endsection
