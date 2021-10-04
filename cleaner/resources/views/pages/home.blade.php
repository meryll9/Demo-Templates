@extends('layout.main')
@section('content')
    <!-- Slider
      ============================================= -->
    <section id="slider" class="slider-element"
        style="background: url({{ asset('/cleaner/demos/cleaner/images/hero.jpg') }}) center center no-repeat; background-size: cover; height: 700px">
        <div class="vertical-middle">
            <div class="container">
                <div class="row py-5">
                    <div class="col-xl-6 col-lg-5 col-md-2"></div>
                    <div class="col-xl-6 col-lg-7 col-md-10">
                        <div class="slider-title dark">
                            <h1 class="">{{ env('APP_TAGLINE') }}</h1>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laudantium similique consequuntur velit explicabo inventore sit totam voluptate dolorum.</p>
							</div>
							<div class="
                                card border-0 p-3 shadow-lg" style="background-color: rgba(255,255,255,0.85)">
                                <div class="form-widget card-body" data-alert-type="inline">
                                    <div class="form-result"></div>
                                    <form id="form-cleaning" name="form-cleaning" action="include/form.php" method="post"
                                        class="row form-cleaning mb-0">
                                        <div class="form-process">
                                            <div class="form-cleaning-loader css3-spinner" style="position: absolute;">
                                                <div class="css3-spinner-double-bounce1"></div>
                                                <div class="css3-spinner-double-bounce2"></div>
                                            </div>
                                        </div>

                                        <div class="col-sm-6">
                                            <div class="input-group form-group">
                                                <span class="input-group-text bg-color text-white"><img
                                                        src="{{ asset('cleaner/demos/cleaner/images/icons/cleaner2.svg') }}"
                                                        alt="" width="20"></span>
                                                <select class="required form-select" name="form-cleaning-service"
                                                    id="form-cleaning-service">
                                                    <option value="" disabled selected>-- Select Your Service --</option>
                                                    <option value="Home Cleaning">Home Cleaning</option>
                                                    <option value="Office Cleaning">Office Cleaning</option>
                                                    <option value="Window Cleaning">Window Cleaning</option>
                                                    <option value="Garden Maintenance">Garden Maintenance</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-sm-6">
                                            <div class="input-group form-group">
                                                <span class="input-group-text bg-color text-white"><i
                                                        class="icon-line2-map"></i></span>
                                                <input type="text" name="form-cleaning-location" id="form-cleaning-location"
                                                    class="form-control required" value="" placeholder="Location">
                                            </div>
                                        </div>

                                        <div class="col-sm-6">
                                            <div class="input-group form-group">
                                                <span class="input-group-text bg-color text-white"><i
                                                        class="icon-line2-calendar"></i></span>
                                                <input type="text"
                                                    class="form-control cleaning-date datetimepicker-input required"
                                                    name="form-cleaning-date-&-time" id="form-cleaning-date"
                                                    value="Select your Date & Time">
                                            </div>
                                        </div>

                                        <div class="col-sm-6">
                                            <div class="form-group input-group">
                                                <span class="input-group-text bg-color text-white"><i
                                                        class="icon-line2-layers"></i></span>
                                                <input type="number" name="form-cleaning-area" min="200"
                                                    id="form-cleaning-area" class="form-control required" value=""
                                                    placeholder="Area (sqft.)">
                                            </div>
                                        </div>

                                        <div class="col-sm-6">
                                            <div class="input-group form-group">
                                                <span class="input-group-text bg-color text-white"><i
                                                        class="icon-line2-envelope-letter"></i></span>
                                                <input type="email" name="form-cleaning-email" id="form-cleaning-email"
                                                    class="form-control required" value="" placeholder="Your Email">
                                            </div>
                                        </div>

                                        <div class="col-sm-6">
                                            <div class="input-group form-group">
                                                <span class="input-group-text bg-color text-white"><i
                                                        class="icon-line2-call-out"></i></span>
                                                <input type="text" name="form-cleaning-phone" id="form-cleaning-phone"
                                                    class="form-control required" value="" placeholder="Contact Number">
                                            </div>
                                        </div>

                                        <input type="text" class="d-none" id="form-cleaning-botcheck"
                                            name="form-cleaning-botcheck" value="" />
                                        <input type="hidden" name="prefix" value="form-cleaning-">
                                        <input type="hidden" name="subject" value="Cleaning Request">
                                        <input type="hidden" name="html_title" value="Cleaning">

                                        <div class="col-12">
                                            <button type="submit" name="form-cleaning-submit"
                                                class="btn btn-lg bg-color text-white fw-semibold w-100 mt-2">Book
                                                Now</button>
                                        </div>

                                    </form>
                                </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="svg-separator">
            <div>
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 2273 390" fill="#FFF">
                    <path d="M0,211.28s373-254,1119-205,765,173,1154,0v384H0Z" />
                </svg>
            </div>
        </div>
    </section>

    <!-- Content
      ============================================= -->
    <section id="content">

        <div class="content-wrap pt-4 pb-0">

            <div class="container">
                <div class="heading-block center mx-auto" style="max-width: 700px">
                    <h2 class="mb-2 nott ls0">How We Work</h2>
                    <span>Objectively actualize process-centric infomediaries via ethical niche markets. Professionally
                        plagiarize leading-edge potentialities.</span>
                </div>
                <div class="row justify-content-center col-mb-50">
                    <div class="col-md-4">
                        <div class="feature-box mx-0 fbox-small fbox-center border-0">
                            <div class="fbox-img position-relative">
                                <img src="{{ asset('cleaner/demos/cleaner/images/icons/book.svg') }}" alt="Book Icon"
                                    height="160">
                            </div>
                            <h2 class="topmargin-sm h5 mb-3 nott fw-semibold ls0"><span>1.</span> Book your Cleaner &amp;
                                Time</h2>
                            <p>Seamlessly e-enable value-added deliverables and progressive models. Enthusiastically
                                whiteboard fully tested channels.</p>
                            <a href="#" class="btn second-bg-color px-3 fw-semibold">Get Started <i
                                    class="icon-line-arrow-right"></i></a>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="feature-box mx-0 fbox-small fbox-center border-0">
                            <div class="fbox-img position-relative">
                                <img src="{{ asset('cleaner/demos/cleaner/images/icons/confirm3.svg') }}" alt="Confirm Icon"
                                    height="160">
                            </div>
                            <h2 class="topmargin-sm h5 mb-3 nott fw-semibold ls0"><span>2.</span> Confirm Your Booking</h2>
                            <p>Credibly enable market positioning resources after principle-centered customer service.
                                Competently negotiate interdependent.</p>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="feature-box mx-0 fbox-small fbox-center border-0">
                            <div class="fbox-img position-relative">
                                <img src="{{ asset('cleaner/demos/cleaner/images/icons/enjoy.svg') }}" alt="Relax Icon"
                                    height="160">
                            </div>
                            <h2 class="topmargin-sm h5 mb-3 nott fw-semibold ls0"><span>3.</span> Relax &amp; Enjoy</h2>
                            <p>Quickly disintermediate multidisciplinary relationships via functional e-tailers.
                                Collaboratively grow cutting-edge information without.</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="clear"></div>

            <div class="center dark hero-diagonal topmargin-lg bottommargin-lg" style="padding: 170px 0">
                <div class="container" style="max-width: 760px">
                    <h2 class="mb-4 h1 fw-normal">We make your Home Shine and Sparkle</h2>
                    <span class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illo, mollitia,
                        quam modi necessitatibus placeat dolores laudantium. Laudantium, eveniet, possimus.</span>
                </div>
            </div>

            <div class="clear"></div>

            <div class="container topmargin bottommargin-lg">
                <div class="heading-block center mx-auto" style="max-width: 700px">
                    <h2 class="mb-2 nott ls0">Why You Choose Us?</h2>
                    <span>Authoritatively create performance based web services for exceptional products. Dynamically
                        disseminate customized.</span>
                </div>
                <div class="clear"></div>
                <div class="row col-mb-50 mt-3">

                    <div class="col-lg-4 center order-lg-last">
                        <img src="{{ asset('cleaner/demos/cleaner/images/cleaner-icon.svg') }}" alt="Cleaner" width="340">
                        <small class="d-block tright"><a href="http://www.freepik.com" style="color: #DDD">Designed by
                                macrovector / Freepik</a></small>
                    </div>

                    <div class="col-lg-4 col-md-6 pb-0">

                        <div class="feature-box fbox-plain bottommargin">
                            <div class="fbox-icon">
                                <img src="{{ asset('cleaner/demos/cleaner/images/icons/cleaner-man.svg') }}"
                                    alt="Cleaner Icon">
                            </div>
                            <div class="fbox-content">
                                <h3 class="nott fw-semibold ls0">100% Trusted Cleaners</h3>
                                <p>Stretch your Website to the Full Width or make it boxed to surprise your visitors.</p>
                            </div>
                        </div>

                        <div class="feature-box fbox-plain bottommargin">
                            <div class="fbox-icon">
                                <img src="{{ asset('cleaner/demos/cleaner/images/icons/cleaning-man.svg') }}"
                                    alt="Cleaner Icon">
                            </div>
                            <div class="fbox-content">
                                <h3 class="nott fw-semibold ls0">820+ Over Cleaners</h3>
                                <p>We have covered each &amp; everything in our Docs including Videos &amp; Screenshots.</p>
                            </div>
                        </div>

                        <div class="feature-box fbox-plain bottommargin">
                            <div class="fbox-icon">
                                <img src="{{ asset('cleaner/demos/cleaner/images/icons/guarantee.svg') }}"
                                    alt="Cleaner Icon">
                            </div>
                            <div class="fbox-content">
                                <h3 class="nott fw-semibold ls0">Satisfaction Guarantee</h3>
                                <p>Display your Content attractively using Parallax Sections with HTML5 Videos.</p>
                            </div>
                        </div>

                    </div>

                    <div class="col-lg-4 col-md-6">

                        <div class="feature-box fbox-plain bottommargin">
                            <div class="fbox-icon">
                                <img src="{{ asset('cleaner/demos/cleaner/images/icons/product.svg') }}"
                                    alt="Cleaner Icon">
                            </div>
                            <div class="fbox-content">
                                <h3 class="nott fw-semibold ls0">Eco-Friendly Products</h3>
                                <p>Canvas provides support for Native HTML5 Videos that can be added to a Background.</p>
                            </div>
                        </div>

                        <div class="feature-box fbox-plain bottommargin">
                            <div class="fbox-icon">
                                <img src="{{ asset('cleaner/demos/cleaner/images/icons/time.svg') }}" alt="Cleaner Icon">
                            </div>
                            <div class="fbox-content">
                                <h3 class="nott fw-semibold ls0">Saves Your Time</h3>
                                <p>Complete control on each &amp; every element that provides endless customization.</p>
                            </div>
                        </div>

                        <div class="feature-box fbox-plain bottommargin">
                            <div class="fbox-icon">
                                <img src="{{ asset('cleaner/demos/cleaner/images/icons/price.svg') }}" alt="Cleaner Icon">
                            </div>
                            <div class="fbox-content">
                                <h3 class="nott fw-semibold ls0">Flat Rate Price</h3>
                                <p>Change your Website's Primary Scheme instantly by simply adding the dark class.</p>
                            </div>
                        </div>

                    </div>

                </div>
            </div>

            <div class="clear"></div>

            <div id="section-price" class="section mb-0 topmargin-lg" style="padding-bottom: 100px; overflow: visible">
                <div class="svg-separator top">
                    <div>
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 2273 390" fill="#F9F9F9">
                            <path d="M0,211.28s373-254,1119-205,765,173,1154,0v384H0Z" />
                        </svg>
                    </div>
                </div>
                <div class="container">
                    <div class="form-widget">
                        <div class="form-result"></div>
                        <form id="cleaner-form" name="cleaner-form" action="include/form.php" method="post"
                            class="cleaner-form mb-0" enctype="multipart/form-data">
                            <div class="form-process"></div>
                            <div class="row gutter-40">
                                <div class="col-lg-8">
                                    <div class="heading-block border-bottom-0">
                                        <h2 class="mb-3 nott ls0">Cleaning Cost Calculator</h2>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sed voluptate vero esse
                                            ea hic quod veniam quam accusamus laboriosam ipsam provident.</p>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6 form-group">
                                            <label for="cleaner-form-area" class="mb-3">Select Area:</label><br>
                                            <input id="cleaner-form-area" name="cleaner-form-area"
                                                class="clean-area required input-range-slider" />
                                        </div>

                                        <div class="col-md-6 form-group">
                                            <label for="cleaner-form-rooms" class="mb-3">Select
                                                Rooms:</label><br>
                                            <input id="cleaner-form-rooms" name="cleaner-form-rooms"
                                                class="clean-rooms required input-range-slider" />
                                        </div>

                                        <div class="col-md-6 form-group">
                                            <label for="cleaner-form-bathrooms" class="mb-3">Select
                                                Bathrooms:</label><br>
                                            <input id="cleaner-form-bathrooms" name="clean-form-bathrooms"
                                                class="clean-bathrooms required input-range-slider" />
                                        </div>

                                        <div class="col-md-6 form-group">
                                            <label for="cleaner-form-livingrooms" class="mb-3">Select Living
                                                Rooms:</label><br>
                                            <input id="cleaner-form-livingrooms" name="clean-form-livingrooms"
                                                class="clean-livingrooms required input-range-slider" />
                                        </div>

                                        <div class="col-12 form-group mb-4">
                                            <label class="mb-3">Others Requirment: <small
                                                    class="nott ls0 text-black-50">(Select Multiples)*</small></label><br>
                                            <div class="btn-group w-100" role="group">
                                                <input type="checkbox" name="clean-form-others[]" class="btn-check"
                                                    id="clean-form-others-clean-garden" data-price="4" autocomplete="off"
                                                    value="Clean Garden">
                                                <label for="clean-form-others-clean-garden"
                                                    class="btn btn-outline-secondary px-4 fw-semibold ls0 nott">Clean
                                                    Garden</label>

                                                <input type="checkbox" name="clean-form-others[]" class="btn-check"
                                                    id="clean-form-others-play-room" data-price="5" autocomplete="off"
                                                    value="Play Room">
                                                <label for="clean-form-others-play-room"
                                                    class="btn btn-outline-secondary px-4 fw-semibold ls0 nott">Play
                                                    Room</label>

                                                <input type="checkbox" name="clean-form-others[]" class="btn-check"
                                                    id="clean-form-others-garage" data-price="5.4" autocomplete="off"
                                                    value="Garage">
                                                <label for="clean-form-others-garage"
                                                    class="btn btn-outline-secondary px-4 fw-semibold ls0 nott">Garage</label>

                                                <input type="checkbox" name="clean-form-others[]" class="btn-check"
                                                    id="clean-form-others-gym" data-price="4.2" autocomplete="off"
                                                    value="Gym">
                                                <label for="clean-form-others-gym"
                                                    class="btn btn-outline-secondary px-4 fw-semibold ls0 nott">Gym</label>
                                            </div>
                                        </div>

                                        <div class="col-md-6 form-group mb-4">
                                            <label for="clean-form-name">Name:</label>
                                            <input type="text" name="clean-form-name" id="clean-form-name"
                                                class="form-control required" value="" placeholder="Enter your Full Name">
                                        </div>
                                        <div class="col-6 form-group mb-4">
                                            <label for="clean-form-email">Email:</label>
                                            <input type="email" name="clean-form-email" id="clean-form-email"
                                                class="form-control required" value="" placeholder="Enter your Email">
                                        </div>

                                        <div class="col-12">
                                            <label for="clean-form-message">Additional Message <small
                                                    class="nott ls0 text-black-50">(Optional):</small></label>
                                            <textarea name="clean-form-message" id="clean-form-message"
                                                class="form-control" cols="30" rows="6"></textarea>
                                        </div>

                                        <input type="text" class="d-none" id="clean-form-botcheck"
                                            name="clean-form-botcheck" value="">
                                        <input type="hidden" name="prefix" value="clean-form-">
                                        <input type="hidden" name="subject" value="Cleaner Cost Estimate Request">
                                        <input type="hidden" name="html_title" value="Cleaner Cost Estimation">
                                        <input type="hidden" id="clean-form-price" name="website-cost-total-price" value="">
                                    </div>
                                </div>
                                <div class="col-lg-4 mt-4 mt-md-0">
                                    <div class="card text-center border-0 shadow-sm">
                                        <div class="card-body pt-4 pb-0">
                                            <h4 class="card-title fw-semibold text-uppercase mb-0">Final Cost</h4>
                                            <!-- Price Value -->
                                            <div class="total-price color fw-bold py-3"></div>
                                        </div>
                                        <div class="line my-1"></div>
                                        <div class="card-body py-4">
                                            <ul class="iconlist ms-0 op-08">
                                                <li class="mb-2">100% Trusted Cleaners</li>
                                                <li class="mb-2">Over 820+ Cleaners</li>
                                                <li class="mb-2">No Hidden Charges</li>
                                                <li>Credit Cards Accepted</li>
                                            </ul>
                                            <button type="submit" name="clean-form-submit"
                                                class="button button-rounded button-light button-large second-bg-color text-dark w-100 ls0 m-0">Book
                                                Now</button>
                                        </div>
                                    </div>

                                    <div class="fancy-title title-border mt-5">
                                        <h4 class="fw-semibold">Pricing FAQs</h4>
                                    </div>

                                    <div class="toggle">
                                        <div class="toggle-header justify-content-between">
                                            <div class="toggle-icon">
                                                <i class="toggle-closed icon-line-circle-plus"></i>
                                                <i class="toggle-open icon-line-circle-minus"></i>
                                            </div>
                                            <div class="toggle-title fw-semibold">
                                                How can I Pay?
                                            </div>
                                        </div>
                                        <div class="toggle-content text-black-50">Lorem ipsum dolor sit amet, consectetur
                                            adipisicing elit. Assumenda, dolorum, vero ipsum molestiae minima odio quo
                                            voluptate illum excepturi quam cum voluptates doloribus.</div>
                                    </div>

                                    <div class="toggle">
                                        <div class="toggle-header justify-content-between">
                                            <div class="toggle-icon">
                                                <i class="toggle-closed icon-line-circle-plus"></i>
                                                <i class="toggle-open icon-line-circle-minus"></i>
                                            </div>
                                            <div class="toggle-title fw-semibold">
                                                How can I Pay?
                                            </div>
                                        </div>
                                        <div class="toggle-content text-black-50">Lorem ipsum dolor sit amet, consectetur
                                            adipisicing elit. Assumenda, dolorum, vero ipsum molestiae minima odio quo
                                            voluptate illum excepturi quam cum voluptates doloribus.</div>
                                    </div>

                                    <div class="toggle">
                                        <div class="toggle-header justify-content-between">
                                            <div class="toggle-icon">
                                                <i class="toggle-closed icon-line-circle-plus"></i>
                                                <i class="toggle-open icon-line-circle-minus"></i>
                                            </div>
                                            <div class="toggle-title fw-semibold">
                                                Can I cancel my Plan?
                                            </div>
                                        </div>
                                        <div class="toggle-content text-black-50">Minima odio quo voluptate illum excepturi
                                            quam cum voluptates doloribus quae nisi tempore necessitatibus dolores ducimus
                                            enim libero eaque explicabo suscipit animi at quaerat aliquid ex expedita
                                            perspiciatis? Saepe, aperiam, nam unde quas beatae vero vitae nulla.</div>
                                    </div>

                                    <p class="fw-semibold">Want to know more? <a href="#"><u>See the full FAQs</u></a>
                                        <i class="icon-caret-right1 color"></i></p>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <div class="section m-0 dark"
                style="background: linear-gradient(rgba(51,94,238,0.8), rgba(51,94,238,0.8)), url({{ asset('/cleaner/demos/cleaner/images/section2.jpg') }}) center center no-repeat; background-size: cover; padding: 80px 0 230px">
                <div class="container">
                    <div class="heading-block center mx-auto" style="max-width: 700px">
                        <h5 class="fw-normal text-uppercase ls2">High Rated Cleaners</h5>
                        <h2 class="mb-2 nott ls0">820+ Over Cleaners Completed their Jobs.</h2>
                        <span>Authoritatively create performance based web services for exceptional products. Dynamically
                            disseminate customized.</span>
                    </div>
                </div>
            </div>

            <div class="negetive-margin">
                <div class="container">
                    <div id="cleaner-carousel" class="owl-carousel carousel-widget" data-margin="30" data-nav="true"
                        data-pagi="true" data-items-xs="1" data-items-sm="2" data-items-md="3" data-items-lg="4"
                        data-items-xl="4">
                        <div class="card border-0 shadow-sm">
                            <img src="{{ asset('cleaner/demos/cleaner/images/cleaners/1.jpg') }}" class="card-img-top"
                                alt="...">
                            <div class="card-body second-bg-color rounded-bottom p-4">
                                <h4 class="card-title">Penny Tool</h4>
                                <p class="card-text">Some quick example text to build on the card title.</p>
                            </div>
                        </div>

                        <div class="card border-0 shadow-sm">
                            <img src="{{ asset('cleaner/demos/cleaner/images/cleaners/2.jpg') }}" class="card-img-top"
                                alt="...">
                            <div class="card-body second-bg-color rounded-bottom p-4">
                                <h4 class="card-title">Sue Shei</h4>
                                <p class="card-text">Some quick example text to build on the card title.</p>
                            </div>
                        </div>

                        <div class="card border-0 shadow-sm">
                            <img src="{{ asset('cleaner/demos/cleaner/images/cleaners/3.jpg') }}" class="card-img-top"
                                alt="...">
                            <div class="card-body second-bg-color rounded-bottom p-4">
                                <h4 class="card-title">Benjamin Evalent </h4>
                                <p class="card-text">Some quick example text to build on the card title.</p>
                            </div>
                        </div>

                        <div class="card border-0 shadow-sm">
                            <img src="{{ asset('cleaner/demos/cleaner/images/cleaners/4.jpg') }}" class="card-img-top"
                                alt="...">
                            <div class="card-body second-bg-color rounded-bottom p-4">
                                <h4 class="card-title">Malcolm Function</h4>
                                <p class="card-text">Some quick example text to build on the card title.</p>
                            </div>
                        </div>

                        <div class="card border-0 shadow-sm">
                            <img src="{{ asset('cleaner/demos/cleaner/images/cleaners/5.jpg') }}" class="card-img-top"
                                alt="...">
                            <div class="card-body second-bg-color rounded-bottom p-4">
                                <h4 class="card-title">Alan Fresco </h4>
                                <p class="card-text">Some quick example text to build on the card title.</p>
                            </div>
                        </div>

                        <div class="card border-0 shadow-sm">
                            <img src="{{ asset('cleaner/demos/cleaner/images/cleaners/6.jpg') }}" class="card-img-top"
                                alt="...">
                            <div class="card-body second-bg-color rounded-bottom p-4">
                                <h4 class="card-title">Justin Case</h4>
                                <p class="card-text">Some quick example text to build on the card title.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="section bg-transparent">
                <div class="container">
                    <div class="row justify-content-between align-items-center">

                        <div class="col-md-5 center">
                            <img src="{{ asset('cleaner/demos/cleaner/images/icons/reviews.svg') }}" alt="Review Image"
                                width="400">
                            <div class="row mt-5">
                                <div class="col-6">
                                    <h3 class="color fw-normal h1 mb-3">1100+</h3>
                                    <h5 class="text-muted fw-normal">Jobs Done, consectetur adipisicing elit. Eveniet,
                                        sunt.</h5>
                                </div>

                                <div class="col-6">
                                    <h3 class="color fw-normal h1 mb-3">4.9/5.0</h3>
                                    <h5 class="text-muted fw-normal">Average review across all of our company Service
                                        lines.</h5>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-6 col-md-7">
                            <div class="heading-block">
                                <h2 class="mb-2 nott ls0">More than <span>12000+</span> Customers Reviews</h2>
                                <span>Objectively actualize process-centric infomediaries via ethical niche markets.
                                    Professionally plagiarize leading-edge potentialities.</span>
                            </div>

                            <div id="oc-testi" class="owl-carousel testimonials-carousel carousel-widget" data-margin="10"
                                data-nav="false" data-pagi="true" data-items="1" data-autoplay="5000" data-loop="true">
                                <div class="oc-item">
                                    <div class="testimonial bg-transparent p-4 shadow-sm">
                                        <div class="testi-image">
                                            <a href="#"><img src="{{ asset('cleaner/images/testimonials/1.jpg') }}"
                                                    alt="Customer Testimonails"></a>
                                        </div>
                                        <div class="testi-content">
                                            <h4 class="fw-normal">Synergistically pontificate scalable manufactured
                                                products after worldwide customer service. Phosfluorescently harness
                                                open-source relationships rather than competitive internal or "organic"
                                                sources. Globally.</h4>
                                            <div class="testi-meta"> John Doe<span>XYZ Inc.</span></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="oc-item">
                                    <div class="testimonial bg-transparent p-4 shadow-sm">
                                        <div class="testi-image">
                                            <a href="#"><img src="{{ asset('cleaner/images/testimonials/2.jpg') }}"
                                                    alt="Customer Testimonails"></a>
                                        </div>
                                        <div class="testi-content">
                                            <h4 class="fw-normal">Progressively scale front-end models whereas
                                                standardized technology. Collaboratively disintermediate user friendly
                                                communities vis-a-vis cross-platform results. Completely productize
                                                client-centric benefits vis-a-vis optimal.</h4>
                                            <div class="testi-meta"> Bailey Wonger<span>Apple Inc.</span></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="section center mb-0" style="padding: 120px 0; background-color: rgba(51,94,238,0.08);">
                <div class="container" style="max-width: 700px">
                    <img src="{{ asset('cleaner/demos/cleaner/images/icons/apply.svg') }}" alt="Apply Icon" height="200"
                        class="mb-4">
                    <h2 style="font-size: 38px">Try out now &amp; Apply for Cleaner</h2>
                    <p class="mb-5" style="font-size: 1.125rem;">Dynamically predominate B2B resources whereas
                        interdependent strategic theme areas. Completely underwhelm out-of-the-box functionalities for
                        worldwide e-tailers. Dynamically restore fully researched architectures.</p>
                    <a href="#" class="btn btn-lg bg-color text-white fw-semibold px-4">Get Started</a>
                    <a href="#" class="btn btn-lg bg-white fw-semibold color px-4 ms-2">Contact us</a>
                </div>
            </div>

        </div>

    </section><!-- #content end -->
@endsection
