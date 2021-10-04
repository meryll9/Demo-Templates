@extends('layout.main')
@section('content')
    <!-- Content
      ============================================= -->
    <section id="content">

        <div class="content-wrap p-0">

            <div id="oc-images" class="owl-carousel image-carousel carousel-widget owl-carousel-full full-nav mb-3"
                data-items-xs="2" data-items-sm="2" data-items-lg="2" data-items-xl="2" data-loop="true" data-center="true"
                data-margin="15" data-pagi="true" data-stage-padding="30">

                <div class="oc-item">
                    <a href="#"><img src="{{asset('hostel/demos/hostel/images/single/gallery/5.jpg')}}" alt="Image 1"></a>
                </div>
                <div class="oc-item">
                    <a href="#"><img src="{{asset('hostel/demos/hostel/images/single/gallery/2.jpg')}}" alt="Image 2"></a>
                </div>
                <div class="oc-item">
                    <a href="#"><img src="{{asset('hostel/demos/hostel/images/single/gallery/3.jpg')}}" alt="Image 3"></a>
                </div>
                <div class="oc-item">
                    <a href="#"><img src="{{asset('hostel/demos/hostel/images/single/gallery/4.jpg')}}" alt="Image 4"></a>
                </div>
                <div class="oc-item">
                    <a href="#"><img src="{{asset('hostel/demos/hostel/images/single/gallery/1.jpg')}}" alt="Image 5"></a>
                </div>

            </div>

            <div class="clear"></div>

            <div class="container mt-5">
                <div class="row">
                    <div class="col-xl-8 col-lg-7">
                        <h5 class="color fw-normal mb-2"><i class="icon-line2-pointer"></i> Spain</h5>
                        <h3 class="text-dark h1 fw-semibold ls0 mb-4">Canvas Penthouse</h3>
                        <p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Praesentium eius
                            explicabo, optio repellat saepe inventore dicta quibusdam minima quia, ratione minus a
                            consectetur dolorum, nulla provident tenetur.</p>

                        <div class="row my-3">
                            <div class="col-auto">
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item ps-0"><i class="color icon-line2-feed me-2"></i>WiFi
                                        Available</li>
                                    <li class="list-group-item ps-0"><i class="color icon-line2-cup me-2"></i>Breakfast
                                        Included</li>
                                    <li class="list-group-item ps-0"><i class="color icon-line2-clock me-2"></i>24x7 access
                                    </li>
                                </ul>
                            </div>

                            <div class="col-auto">
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item ps-0"><i class="color icon-line2-lock me-2"></i>Lockers
                                        Available</li>
                                    <li class="list-group-item ps-0"><i
                                            class="color icon-line2-social-dropbox me-2"></i>Laundry Available</li>
                                    <li class="list-group-item ps-0"><i class="color icon-line2-cup me-2"></i>Coffee Machine
                                    </li>
                                </ul>
                            </div>
                            <div class="col-auto">
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item ps-0"><i class="color icon-line2-chemistry me-2"></i>24hrs
                                        Purify Water</li>
                                    <li class="list-group-item ps-0"><i class="color icon-line2-globe me-2"></i>Transports
                                        Available</li>
                                    <li class="list-group-item ps-0"><i
                                            class="color icon-line2-game-controller me-2"></i>Other Amenities</li>
                                </ul>
                            </div>
                        </div>

                        <div class="clear"></div>

                        <p class="text-dark mt-3"><strong>Canvas Hostel</strong> is a Clean Hostel surrounded by hills and
                            greenery. It is located near Manor, a 2 hour drive from Mumbai. There is an abundance of trees,
                            birds and fresh mountain air which makes it the perfect place for people wishing to get off the
                            grid and to relax and unwind amidst nature.</p>

                        <p class="text-dark">Price includes sumptuous breakfast, unlimited tea and complimentary
                            nibbles. Lunch and dinner if needed would be charged extra (&dollar;5 per meal per person).<a
                                data-bs-toggle="collapse" href="#collapsebtn" role="button" aria-expanded="false"
                                aria-controls="collapsebtn" class="text-dark">.. <u class="color">Read
                                    more</u></a></p>

                        <div id="collapsebtn" class="collapse">

                            <h4 class="mb-2">The space</h4>
                            <p class="text-dark">There is a small brick cottage which can comfortably accommodate 3
                                people. It has one double bed, one single bed, an attached bathroom and large sitting area
                                outside. We provide fresh linen, towels, soap, shampoo and other basic requirements.</p>

                            <p class="text-dark">You can hang around the farm, go for a nature walk, read a book or
                                meditate under the mango tree, watch the birds or enjoy gazing at the stars in the night.
                            </p>

                            <p class="text-dark">You can have a sit-out with campfire and barbeque on cold winter
                                evening or just enjoy the cool breeze in summer. A tent can be put up for kids who want to
                                play housie-housie while others can relax on hammocks and lounge chairs in the garden.</p>

                            <h4 class="mb-2">Guest access</h4>
                            <p class="text-dark">Guests are free to roam around the entire property.
                                The farm is full of fruit trees. In addition, we grow a large variety of organic vegetables.
                                Guests can wander around and observe such plantations.</p>

                            <h4 class="mb-2">Other things to note</h4>
                            <p class="text-dark">There will be an additional charge for laundry services if opted
                                for.<br>
                                This is our home so we would appreciate people who are not expecting a resort experience.
                            </p>
                        </div>

                        <div class="line line-sm"></div>

                        <h3 class="mb-3">Location</h3>
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6324.370789264091!2d98.92404615901329!3d18.757516921188394!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30da3a7e90bb6f5d%3A0x98d46270a59b4367!2sChiang%20Mai%2C%20Mueang%20Chiang%20Mai%20District%2C%20Chiang%20Mai%2C%20Thailand!5e0!3m2!1sen!2sin!4v1600773676355!5m2!1sen!2sin"
                            width="600" height="350" frameborder="0" style="border:0;" allowfullscreen=""
                            aria-hidden="false" tabindex="0"></iframe>

                        <div class="clear"></div>

                        <div class="line line-sm"></div>

                        <h3 class="mb-5">Reviews <span>(4,321 Reviews)</span></h3>

                        <div class="row">
                            <div class="col-md-6 mb-5">
                                <div class="d-flex align-items-center mb-3">
                                    <img src="{{asset('hostel/demos/articles/images/authors/2.jpg')}}" alt="Author" class="rounded-circle me-3"
                                        width="40" height="40">
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
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorem tempore placeat aperiam
                                    tenetur repellendus aliquid fugit doloribus amet dolore, molestias.</p>
                            </div>

                            <div class="col-md-6 mb-5">
                                <div class="d-flex align-items-center mb-3">
                                    <img src="{{asset('hostel/demos/articles/images/authors/3.jpg')}}" alt="Author" class="rounded-circle me-3"
                                        width="40" height="40">
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
                                <p>Holisticly conceptualize cutting-edge manufactured products rather than cooperative
                                    opportunities. Collaboratively impact 24/365 scenarios before team building paradigms.
                                    Authoritatively synergize parallel products without web-enabled testing procedures.</p>
                            </div>

                            <div class="col-md-6 mb-5">
                                <div class="d-flex align-items-center mb-3">
                                    <img src="{{asset('hostel/demos/forum/images/users/1.jpg')}}" alt="Author" class="rounded-circle me-3"
                                        width="40" height="40">
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
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorem tempore placeat aperiam
                                    tenetur repellendus aliquid fugit doloribus amet dolore, molestias.</p>
                            </div>

                            <div class="col-md-6 mb-5">
                                <div class="d-flex align-items-center mb-3">
                                    <img src="{{asset('hostel/demos/articles/images/authors/1.jpg')}}" alt="Author" class="rounded-circle me-3"
                                        width="40" height="40">
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
                                <p>Seamlessly maximize effective best practices whereas go forward initiatives. Dramatically
                                    harness 24/7 total linkage via highly efficient web services.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-4 col-lg-5 mt-5 mt-md-0">
                        <h3 class="title-pricing h1 mb-5">$19.99 <span>per week</span></h3>
                        <div class="card rounded-top bg-white border-0 w-100 shadow p-3">
                            <div class="card-body">
                                <h3 class="mb-0 h6">Check Availability</h3>
                                <div class="line my-3"></div>
                                <div class="widget mt-0 form-widget" data-alert-type="inline">

                                    <div class="form-result"></div>
                                    <div class="form-availability-loader css3-spinner" style="position: absolute;">
                                        <div class="css3-spinner-double-bounce1"></div>
                                        <div class="css3-spinner-double-bounce2"></div>
                                    </div>
                                    <form id="form-availability" name="form-availability" action="include/form.php"
                                        method="post" class="form-availability mb-0">
                                        <div class="input-daterange travel-date-group">
                                            <div class="row">
                                                <div class="col-6 col-md-12 col-lg-6 form-group">
                                                    <label for="form-availability-from">Check-In<small
                                                            class="text-danger">*</small></label>
                                                    <input type="text" value=""
                                                        class="form-control rounded text-start required"
                                                        id="form-availability-from" name="form-availability-from"
                                                        placeholder="MM/DD/YYYY">
                                                </div>
                                                <div class="col-6 col-md-12 col-lg-6 form-group">
                                                    <label for="form-availability-to">Check-Out<small
                                                            class="text-danger">*</small></label>
                                                    <input type="text" value=""
                                                        class="form-control rounded text-start required"
                                                        id="form-availability-to" name="form-availability-to"
                                                        placeholder="MM/DD/YYYY">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="form-availability-guests">Number of Guests<small
                                                    class="text-danger">*</small></label>
                                            <input type="number" class="required form-control rounded input-block-level"
                                                id="form-availability-guests" name="form-availability-guests" min="1"
                                                max="10" value="" placeholder="Enter Guests Number" />
                                        </div>
                                        <input type="text" class="d-none" id="form-availability-botcheck"
                                            name="form-availability-botcheck" value="" />
                                        <input type="hidden" name="prefix" value="form-availability-">
                                        <button type="submit" id="form-availability-submit" name="form-availability-submit"
                                            class="button button-large w-100 rounded fw-semibold ms-0 mt-2"
                                            value="submit">Reserve Now</button>
                                    </form>

                                </div>
                            </div>
                        </div>
                        <div class="card mt-4">
                            <div class="card-body">
                                <i class="icon-shield-virus color"></i> <strong class="color">COVID 19
                                    Guidelines</strong> - Interactively administrate web-enabled relationships after
                                distributed best practices.
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="section m-0 center dark parallax"
                style="background: url({{asset('/hostel/demos/hostel/images/hero.jpg')}}) center center / cover; padding: 170px 0;">
                <div class="container">
                    <h3 class="h1 mb-5">More than 100,000<br>Travellers Visit Our Hostels.</h3>
                    <a href="demo-hostel-tour.html" class="button button-xlarge fw-semibold bg-color nott ls0 px-5">Book
                        Now</a>
                </div>
            </div>

        </div>
    </section><!-- #content end -->

@endsection
