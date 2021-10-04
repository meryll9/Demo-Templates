@extends('layout.main')
@section('content')
    <!-- Slider
      ============================================= -->
    <div id="slider" class="slider-element h-auto">
        <div class="slider-inner">

            <div class="row align-items-stretch flex-md-row-reverse mx-0">
                <div class="col-md-8 col-sm-12 px-0 min-vh-50">
                    <div class="fslider h-100 shadow-sm" data-arrows="true" data-autoplay="6000" data-loop="true">
                        <div class="flexslider h-100">
                            <div class="slider-wrap h-100">
                                <div class="slide h-100"
                                    style="background: url({{asset('/car/demos/car/images/dealers/1.jpg')}}) center center; background-size: cover;">
                                    <div class="slide-caption bg-dark card shadow-sm ms-4">
                                        <div class="card-body fw-semibold py-1 px-2 text-light">2011</div>
                                    </div>
                                    <div
                                        class="slide-caption d-flex justify-content-between align-items-center flex-row dark slider-caption-bottom bg-dark slider-caption-bg py-4 px-4">
                                        <div class="w-75">
                                            <h2 class="mb-1">Audi A6 Sportback</h2>
                                            <p class="fw-light text-white-50">Lorem ipsum dolor sit amet, consectetur
                                                adipisicing elit. Eos ullam blanditiis voluptas quam iste tenetur laboriosam
                                                consectetur dignissimos recusandae, incidunt veritatis fugit!</p>
                                        </div>
                                        <h2 class="fw-bold h2 mb-0">$15,39,000</h2>
                                    </div>
                                </div>
                                <div class="slide h-100"
                                    style="background: url({{asset('/car/demos/car/images/dealers/2.jpg')}}) center center; background-size: cover;">
                                    <div class="slide-caption bg-dark card shadow-sm ms-4">
                                        <div class="card-body fw-semibold py-1 px-2 text-light">2012</div>
                                    </div>
                                    <div
                                        class="slide-caption d-flex justify-content-between align-items-center flex-row dark slider-caption-bottom bg-dark slider-caption-bg py-4 px-4">
                                        <div class="w-75">
                                            <h2 class="mb-1">Bentley Continental GT</h2>
                                            <p class="fw-light text-white-50">Lorem ipsum dolor sit amet, consectetur
                                                adipisicing elit. Eos ullam blanditiis voluptas quam iste tenetur laboriosam
                                                consectetur dignissimos recusandae, incidunt veritatis fugit!</p>
                                        </div>
                                        <h2 class="fw-bold h2 mb-0">$15,39,000</h2>
                                    </div>
                                </div>
                                <div class="slide h-100"
                                    style="background: url({{asset('/car/demos/car/images/dealers/3.jpg')}}) center center; background-size: cover;">
                                    <div class="slide-caption bg-dark card shadow-sm ms-4">
                                        <div class="card-body fw-semibold py-1 px-2 text-light">2013</div>
                                    </div>
                                    <div
                                        class="slide-caption d-flex justify-content-between align-items-center flex-row dark slider-caption-bottom bg-dark slider-caption-bg py-4 px-4">
                                        <div class="w-75">
                                            <h2 class="mb-1">BMW Gran Turismo</h2>
                                            <p class="fw-light text-white-50">Lorem ipsum dolor sit amet, consectetur
                                                adipisicing elit. Eos ullam blanditiis voluptas quam iste tenetur laboriosam
                                                consectetur dignissimos recusandae, incidunt veritatis fugit!</p>
                                        </div>
                                        <h2 class="fw-bold h2 mb-0">$15,39,000</h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-sm-12 px-0">
                    <div class="card bg-color rounded-0 shadow-sm p-4 h-100">
                        <div class="card-body">
                            <h3 class="text-white">Search Your Car:</h3>
                            <form action="#" method="post" class="mb-0">
                                <div class="row">
                                    <div class="col-12">
                                        <label class="text-white d-block">Type</label>
                                        <input class="bt-switch" type="checkbox" checked data-on-text="New"
                                            data-off-text="Used" data-on-color="default" data-off-color="default"
                                            data-handle-width="50">
                                    </div>
                                    <div class="col-12 mt-3">
                                        <label class="text-white">All Brands</label>
                                        <select class="selectpicker customjs" title="Select Brand" data-size="7"
                                            data-live-search="true" multiple style="width:100%;">
                                            <optgroup label="All Brands">
                                                <option value="Audi">Audi</option>
                                                <option value="BMW">BMW</option>
                                                <option value="Ferrari">Ferrari</option>
                                                <option value="Ford">Ford</option>
                                                <option value="Honda">Honda</option>
                                                <option value="Mercedes-Benz">Mercedes-Benz</option>
                                                <option value="Manza">Manza</option>
                                                <option value="Porsche">Porsche</option>
                                                <option value="Tayota">Tayota</option>
                                            </optgroup>
                                        </select>
                                    </div>
                                    <div class="col-12 mt-3">
                                        <label class="text-white">Select Model</label>
                                        <select class="selectpicker customjs" data-size="7" data-live-search="true"
                                            title="Select Model" style="width:100%; line-height: 30px;">
                                            <optgroup label="AUDI">
                                                <option value="R8">Audi R8</option>
                                                <option value="TT">Audi TT</option>
                                                <option value="S5">Audi S5</option>
                                                <option value="A5">Audi A5</option>
                                                <option value="TTS">Audi TTS</option>
                                                <option value="RS5">Audi RS 5</option>
                                            </optgroup>
                                            <optgroup label="BMW All Series">
                                                <option value="1-Series">BMW 1 Series 5-Door</option>
                                                <option value="Series-ActiveE">BMW 1 Series ActiveE</option>
                                                <option value="3-Series-Sedan">BMW 3 Series Sedan</option>
                                                <option value="ActiveHybrid-3">BMW ActiveHybrid 3</option>
                                                <option value="5-Series-Sedan">BMW 5 Series Sedan</option>
                                                <option value="ActiveHybrid-5">BMW ActiveHybrid 5</option>
                                                <option value="7-Series">BMW 7 Series</option>
                                                <option value="ActiveHybrid-7">BMW ActiveHybrid 7</option>
                                                <option value="M3-Sedan">BMW M3 Sedan</option>
                                                <option value="M5-Sedan">BMW M5 Sedan</option>
                                                <option value="3-Series-Turismo">BMW 3 Series Gran Turismo</option>
                                                <option value="5=Series-Turismo">BMW 5 Series Gran Turismo</option>
                                            </optgroup>
                                            <optgroup label="HONDA">
                                                <option value="Fit">Honda Fit</option>
                                                <option value="City">Honda City</option>
                                                <option value="Civic">Honda Civic</option>
                                                <option value="Fit-EV1">Honda Fit EV1</option>
                                                <option value="Accord">Honda Accord</option>
                                                <option value="Crosstour">Honda Crosstour</option>
                                                <option value="FCX-Clarity">Honda FCX Clarity</option>
                                                <option value="Civic-Hybrid">Honda Civic Hybrid</option>
                                                <option value="Accord-Hybrid">Honda Accord Hybrid</option>
                                                <option value="Accord-Plug-In">Honda Accord Plug-In</option>
                                            </optgroup>
                                            <optgroup label="MERCEDES-BENZ">
                                                <option value="S-Class">2021 Mercedes-Benz S-Class Sedan</option>
                                                <option value="C-Class">2021 Mercedes-Benz C-Class Sedan</option>
                                                <option value="E-Class">2021 Mercedes-Benz E-Class Sedan</option>
                                                <option value="E-Class-Hybrid">2021 Mercedes-Benz E-Class Hybrid</option>
                                                <option value="Maybach-S600">2021 Mercedes-Benz Maybach S600</option>
                                                <option value="B-Class-Electric-Drive">2021 Mercedes-Benz B-Class Electric
                                                    Drive</option>
                                            </optgroup>
                                            <optgroup label="Ferrari">
                                                <option value="Ferrari Daytona">Ferrari Daytona</option>
                                                <option value="Ferrari 250 GTO">Ferrari 250 GTO</option>
                                                <option value="Ferrari 275">Ferrari 275</option>
                                                <option value="Ferrari 599 GTB Fiorano">Ferrari 599 GTB Fiorano</option>
                                                <option value="Ferrari F430">Ferrari F430</option>
                                                <option value="Ferrari 250">Ferrari 250</option>
                                            </optgroup>
                                            <optgroup label="Porsche">
                                                <option value="Porsche Carrera GT">Porsche Carrera GT</option>
                                                <option value="Porsche Boxster">Porsche Boxster</option>
                                                <option value="Porsche 911 classic">Porsche 911 classic</option>
                                                <option value="Porsche 911">Porsche 911</option>
                                                <option value="Porsche Cayman">Porsche Cayman</option>
                                                <option value="Porsche Panamera">Porsche Panamera</option>
                                                <option value="Porsche 959">Porsche 959</option>
                                                <option value="Porsche 356">Porsche 356</option>
                                                <option value="Porsche Cayenne">Porsche Cayenne</option>
                                                <option value="Porsche 997">Porsche 997</option>
                                            </optgroup>
                                        </select>
                                    </div>
                                    <div class="col-12 mt-3 input-daterange travel-date-group">
                                        <label class="text-white" for="template-contactform-date">Min Year</label>
                                        <input type="text" id="template-contactform-date" name="template-contactform-date"
                                            value="" class="form-control text-start">
                                        <label class="mt-3 text-white" for="template-contactform-date">Max Year</label>
                                        <input type="text" class="form-control text-start"
                                            name="template-contactform-end" />
                                    </div>

                                    <div class="col-12 mt-3 dark input-daterange travel-date-group">
                                        <label class="text-white">Price Range</label>
                                        <input class="price-range" />
                                    </div>
                                    <div class="col-12 mt-4">
                                        <button
                                            class="button button-3d button-rounded button-white button-light button-large w-100 m-0">Submit</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <!-- Content
      ============================================= -->
    <section id="content" class="clearfix">

        <div class="content-wrap py-0">

            <div class="section m-0">
                <div class="container">
                    <div class="row py-5 clearfix">
                        <div class="col-md-4 mb-md-3 mb-5">
                            <div class="feature-box fbox-plain">
                                <div class="fbox-icon">
                                    <a href="#"><i class="icon-car-battery"></i></a>
                                </div>
                                <div class="fbox-content">
                                    <h3>Long Battery Life</h3>
                                    <p>Canvas provides support for Native HTML5 Videos that can be added to a Background.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 mb-md-3 mb-5">
                            <div class="feature-box fbox-plain">
                                <div class="fbox-icon">
                                    <a href="#"><i class="icon-car-cogs2"></i></a>
                                </div>
                                <div class="fbox-content">
                                    <h3>24x7 Service</h3>
                                    <p>Complete control on each &amp; every element that provides endless customization.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 mb-md-3 mb-5">
                            <div class="feature-box fbox-plain">
                                <div class="fbox-icon">
                                    <a href="#"><i class="icon-car-pump"></i></a>
                                </div>
                                <div class="fbox-content">
                                    <h3>Petrol, Diesel &amp; LPG</h3>
                                    <p>Change your Website's Primary Scheme instantly by simply adding the dark class.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 mt-0 mt-md-5">
                            <div class="feature-box fbox-plain">
                                <div class="fbox-icon">
                                    <a href="#"><i class="icon-car-meter"></i></a>
                                </div>
                                <div class="fbox-content">
                                    <h3>Powerful Dashboard</h3>
                                    <p>Canvas provides support for Native HTML5 Videos that can be added to a Background.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 mt-5">
                            <div class="feature-box fbox-plain">
                                <div class="fbox-icon">
                                    <a href="#"><i class="icon-car-paint"></i></a>
                                </div>
                                <div class="fbox-content">
                                    <h3>Differnt Color Options</h3>
                                    <p>Complete control on each &amp; every element that provides endless customization.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 mt-5">
                            <div class="feature-box fbox-plain">
                                <div class="fbox-icon">
                                    <a href="#"><i class="icon-car-wheel"></i></a>
                                </div>
                                <div class="fbox-content">
                                    <h3>All wheel Drive</h3>
                                    <p>Change your Website's Primary Scheme instantly by simply adding the dark class.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row clearfix border-bottom align-content-stretch flex-wrap">

                <a href="#" class="col-lg-3 image_fade col-sm-6 p-5 order-1"
                    style="background: url({{asset('/car/demos/car/images/dealers/car-wheel.jpg')}}) no-repeat center center / cover;">
                    <div class="p-5 p-sm-0"></div>
                </a>

                <div class="col-lg-3 col-sm-6 arrow-box bg-white py-5 px-4 d-flex align-self-center order-2">
                    <div class="card border-0">
                        <div class="card-body">
                            <h3 class="mb-1">Car Alloy Wheels</h3>
                            <h5 class="text-muted fw-normal">With faded secondary text</h5>
                            <p class="mb-0 text-black-50">Monotonectally actualize error-free total linkage with competitive
                                niches. Competently initiate 24/7 internal.</p>
                        </div>
                    </div>
                </div>

                <a href="#" class="col-lg-3 col-sm-6 image_fade p-5 order-3 order-sm-4 order-lg-3"
                    style="background: url({{asset('/car/demos/car/images/dealers/car-light.jpg')}}) no-repeat center center / cover;">
                    <div class="p-5 p-sm-0"></div>
                </a>

                <div
                    class="col-lg-3 col-sm-6 arrow-box bg-white py-5 px-4 d-flex align-self-center order-4 order-sm-3 order-lg-4">
                    <div class="card border-0">
                        <div class="card-body">
                            <h3 class="mb-1">Car Head Lights</h3>
                            <h5 class="text-muted fw-normal">With faded secondary text</h5>
                            <p class="mb-0 text-black-50">Monotonectally actualize error-free total linkage with
                                competitive niches. Competently initiate 24/7 internal.</p>
                        </div>
                    </div>
                </div>

                <div
                    class="col-lg-3 col-sm-6 arrow-box right bg-white py-5 px-4 d-flex align-self-center order-6 order-md-6 order-lg-5">
                    <div class="card border-0">
                        <div class="card-body">
                            <h3 class="mb-1">Premium Interiors</h3>
                            <h5 class="text-muted fw-normal">With faded secondary text</h5>
                            <p class="mb-0 text-black-50">Monotonectally actualize error-free total linkage with
                                competitive niches. Competently initiate 24/7 internal.</p>
                        </div>
                    </div>
                </div>

                <a href="#" class="col-lg-3 image_fade col-sm-6 p-5 order-md-5 order-5 order-lg-6"
                    style="background: url({{asset('/car/demos/car/images/dealers/car-interior.jpg')}}) no-repeat center center / cover;">
                    <div class="p-5 p-sm-0"></div>
                </a>

                <div
                    class="col-lg-3 col-sm-6 arrow-box right bg-white py-5 px-4 d-flex align-self-center order-8 order-sm-7">
                    <div class="card border-0">
                        <div class="card-body">
                            <h3 class="mb-1">Comfortable Leather Seats</h3>
                            <h5 class="text-muted fw-normal">With faded secondary text</h5>
                            <p class="mb-0 text-black-50">Monotonectally actualize error-free total linkage with
                                competitive niches. Competently initiate 24/7 internal.</p>
                        </div>
                    </div>
                </div>

                <a href="#" class="col-lg-3 image_fade col-sm-6 p-5 order-7 order-sm-8"
                    style="background: url({{asset('/car/demos/car/images/dealers/car-seat.jpg')}}) no-repeat center center / cover;">
                    <div class="p-5 p-sm-0"></div>
                </a>

            </div>

            <div class="section m-0">
                <div class="container">
                    <div class="heading-block mb-4 center">
                        <h2>Popular Cars</h2>
                    </div>

                    <!-- Portfolio Items
          ============================================= -->
                    <div id="portfolio" class="portfolio row grid-container gutter-20 col-mb-30" data-layout="fitRows">

                        <!-- Car 1 -->
                        <article class="portfolio-item col-12 col-sm-6 col-lg-4 cf-sedan">
                            <div class="grid-inner">
                                <div class="portfolio-image">
                                    <a href="demos/car/car-single.html">
                                        <img src="{{asset('car/demos/car/images/filter-cars/1.jpg')}}" alt="Open Imagination">
                                        <div class="filter-p-pricing">
                                            <span class="p-price fw-bold ls1">$32,568</span>
                                            <span class="p-price-msrp">MSRP : <strong>$35,698</strong></span>
                                        </div>
                                    </a>
                                </div>
                                <div class="portfolio-desc">
                                    <h3><a href="demos/car/car-single.html">Ford Mustang - White</a></h3>
                                    <span>Dramatically synthesize parallel applications vis-a-vis revolutionary e-tailers.
                                        Monotonectally incubate cooperative partnerships.</span>
                                </div>
                                <div class="row g-0 car-p-features font-primary clearfix">
                                    <div class="col-lg-4 col-6 p-0"><i class="icon-car-meter"></i><span> 20000</span>
                                    </div>
                                    <div class="col-lg-4 col-6 p-0"><i class="icon-car-door"></i><span> 5 Seater</span>
                                    </div>
                                    <div class="col-lg-4 col-6 p-0"><i class="icon-car-fuel2"></i><span> 20kmpl</span>
                                    </div>
                                    <div class="col-lg-4 col-6 p-0"><i class="icon-car-signal"></i><span> Automatic</span>
                                    </div>
                                    <div class="col-lg-4 col-6 p-0"><i class="icon-car-wheel"></i><span> 15 Inch</span>
                                    </div>
                                    <div class="col-lg-4 col-6 p-0"><i class="icon-car-care"></i><span> 2021</span></div>
                                </div>
                            </div>
                        </article>

                        <!-- Car 2 -->
                        <article class="portfolio-item col-12 col-sm-6 col-lg-4 cf-suv">
                            <div class="grid-inner">
                                <div class="portfolio-image">
                                    <a href="demos/car/car-single.html">
                                        <img src="{{asset('car/demos/car/images/filter-cars/2.jpg')}}" alt="Open Imagination">
                                        <div class="filter-p-pricing">
                                            <span class="p-price fw-bold ls1">$32,568</span>
                                            <span class="p-price-msrp">MSRP : <strong>$35,698</strong></span>
                                        </div>
                                    </a>
                                </div>
                                <div class="portfolio-desc">
                                    <h3><a href="demos/car/car-single.html">Chevrolet Brown Traverse</a></h3>
                                    <span>Enthusiastically incubate turnkey technologies for exceptional materials.
                                        Seamlessly implement emerging scenarios.</span>
                                </div>
                                <div class="row g-0 car-p-features font-primary clearfix">
                                    <div class="col-lg-4 col-6 p-0"><i class="icon-car-meter"></i><span> 0-50 mph</span>
                                    </div>
                                    <div class="col-lg-4 col-6 p-0"><i class="icon-car-door"></i><span> 7 Seater</span>
                                    </div>
                                    <div class="col-lg-4 col-6 p-0"><i class="icon-car-paint"></i><span> Brown</span>
                                    </div>
                                    <div class="col-lg-4 col-6 p-0"><i class="icon-car-signal"></i><span> Manual</span>
                                    </div>
                                    <div class="col-lg-4 col-6 p-0"><i class="icon-car-wheel"></i><span> 20-Inch</span>
                                    </div>
                                    <div class="col-lg-4 col-6 p-0"><i class="icon-car-care"></i><span> 2021</span></div>
                                </div>
                            </div>
                        </article>

                        <!-- Car 3 -->
                        <article class="portfolio-item col-12 col-sm-6 col-lg-4 cf-cabriolet">
                            <div class="grid-inner">
                                <div class="portfolio-image">
                                    <a href="demos/car/car-single.html">
                                        <img src="{{asset('car/demos/car/images/filter-cars/3.jpg')}}" alt="Open Imagination">
                                        <div class="filter-p-pricing">
                                            <span class="p-price fw-bold ls1">$62,300</span>
                                            <span class="p-price-msrp">MSRP : <strong>$62,700</strong></span>
                                        </div>
                                    </a>
                                </div>
                                <div class="portfolio-desc">
                                    <h3><a href="demos/car/car-single.html">Audi 2021 S5 Cabriolet</a></h3>
                                    <span>Competently evolve intuitive synergy without corporate human capital.
                                        Monotonectally.</span>
                                </div>
                                <div class="row g-0 car-p-features font-primary clearfix">
                                    <div class="col-lg-4 col-6 p-0"><i class="icon-car-meter"></i><span> 0-60 mph</span>
                                    </div>
                                    <div class="col-lg-4 col-6 p-0"><i class="icon-car-bearing"></i><span>
                                            Six-cylinder</span></div>
                                    <div class="col-lg-4 col-6 p-0"><i class="icon-car-fuel2"></i><span> 23 mpg8</span>
                                    </div>
                                    <div class="col-lg-4 col-6 p-0"><i class="icon-car-signal"></i><span> Automatic</span>
                                    </div>
                                    <div class="col-lg-4 col-6 p-0"><i class="icon-car-care"></i><span> 2021</span></div>
                                </div>
                            </div>
                        </article>

                        <!-- Car 4 -->
                        <article class="portfolio-item col-12 col-sm-6 col-lg-4 cf-cuv">
                            <div class="grid-inner">
                                <div class="portfolio-image">
                                    <a href="demos/car/car-single.html">
                                        <img src="{{asset('car/demos/car/images/filter-cars/4.jpg')}}" alt="Open Imagination">
                                        <div class="filter-p-pricing">
                                            <span class="p-price fw-bold ls1">$32,568</span>
                                            <span class="p-price-msrp">MSRP : <strong>$35,698</strong></span>
                                        </div>
                                    </a>
                                </div>
                                <div class="portfolio-desc">
                                    <h3><a href="demos/car/car-single.html">BMW 3 Series, ABS</a></h3>
                                    <span>Energistically engineer user friendly synergy vis-a-vis enabled channels.
                                        Rapidiously utilize value-added. Laudantium debitis perferendis obcaecati.</span>
                                </div>
                                <div class="row g-0 car-p-features font-primary clearfix">
                                    <div class="col-lg-4 col-6 p-0"><i class="icon-car-meter"></i><span> 0-80 mph</span>
                                    </div>
                                    <div class="col-lg-4 col-6 p-0"><i class="icon-car-fuel2"></i><span> Hybrid</span>
                                    </div>
                                    <div class="col-lg-4 col-6 p-0"><i class="icon-car-signal"></i><span> Automatic</span>
                                    </div>
                                    <div class="col-lg-4 col-6 p-0"><i class="icon-car-stearing"></i><span> 3000</span>
                                    </div>
                                    <div class="col-lg-4 col-6 p-0"><i class="icon-car-care"></i><span> 2021</span></div>
                                </div>
                            </div>
                        </article>

                        <!-- Car 5 -->
                        <article class="portfolio-item col-12 col-sm-6 col-lg-4 cf-supercar">
                            <div class="grid-inner">
                                <div class="portfolio-image">
                                    <a href="demos/car/car-single.html">
                                        <img src="{{asset('car/demos/car/images/filter-cars/5.jpg')}}" alt="Open Imagination">
                                        <div class="filter-p-pricing">
                                            <span class="p-price fw-bold ls1">$32,568</span>
                                            <span class="p-price-msrp">MSRP : <strong>$35,698</strong></span>
                                        </div>
                                    </a>
                                </div>
                                <div class="portfolio-desc">
                                    <h3><a href="demos/car/car-single.html">2021 LEXUS IS 200T FSPORT</a></h3>
                                    <span>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laudantium debitis unde
                                        laboriosam perferendis obcaecati.</span>
                                </div>
                                <div class="row g-0 car-p-features font-primary clearfix">
                                    <div class="col-lg-4 col-6 p-0"><i class="icon-car-cog3"></i><span> 30,000 mi</span>
                                    </div>
                                    <div class="col-lg-4 col-6 p-0"><i class="icon-car-paint"></i><span> Metalic</span>
                                    </div>
                                    <div class="col-lg-4 col-6 p-0"><i class="icon-car-fuel"></i><span> 11 kmpl</span>
                                    </div>
                                    <div class="col-lg-4 col-6 p-0"><i class="icon-car-signal"></i><span> Automatic</span>
                                    </div>
                                    <div class="col-lg-4 col-6 p-0"><i class="icon-car-wheel"></i><span> 18 Inch</span>
                                    </div>
                                    <div class="col-lg-4 col-6 p-0"><i class="icon-car-care"></i><span> 2021</span></div>
                                </div>
                            </div>
                        </article>

                        <!-- Car 6 -->
                        <article class="portfolio-item col-12 col-sm-6 col-lg-4 cf-hatchback">
                            <div class="grid-inner">
                                <div class="portfolio-image">
                                    <a href="demos/car/car-single.html">
                                        <img src="{{asset('car/demos/car/images/filter-cars/6.jpg')}}" alt="Open Imagination">
                                        <div class="filter-p-pricing">
                                            <span class="p-price fw-bold ls1">$32,568</span>
                                            <span class="p-price-msrp">MSRP : <strong>$35,698</strong></span>
                                        </div>
                                    </a>
                                </div>
                                <div class="portfolio-desc">
                                    <h3><a href="demos/car/car-single.html">Chevrolet T430 Hatchback</a></h3>
                                    <span>Appropriately exploit strategic niche markets rather than optimal products.
                                        Enthusiastically negotiate perferendis the art methods of empowermen.</span>
                                </div>
                                <div class="row g-0 car-p-features font-primary clearfix">
                                    <div class="col-lg-4 col-6 p-0"><i class="icon-car-meter"></i><span> 20000</span>
                                    </div>
                                    <div class="col-lg-4 col-6 p-0"><i class="icon-car-door"></i><span> 5 Seater</span>
                                    </div>
                                    <div class="col-lg-4 col-6 p-0"><i class="icon-car-fuel2"></i><span> 20kmpl</span>
                                    </div>
                                    <div class="col-lg-4 col-6 p-0"><i class="icon-car-signal"></i><span> Automatic</span>
                                    </div>
                                    <div class="col-lg-4 col-6 p-0"><i class="icon-car-wheel"></i><span> 15 Inch</span>
                                    </div>
                                    <div class="col-lg-4 col-6 p-0"><i class="icon-car-care"></i><span> 2021</span></div>
                                </div>
                            </div>
                        </article>

                    </div>

                </div>
            </div>

            <!-- Buy And Sell Section
        ============================================= -->
            <div class="section m-0 p-0 clearfix">
                <div class="row align-items-stretch clearfix">
                    <!-- Half Section 1 -->
                    <div class="col-lg-6 dark bg-color"
                        style="background: url({{asset('/car/demos/car/images/5.jpg')}}) center center no-repeat; background-size: cover;">
                        <div class="col-padding clearfix">
                            <i class="i-plain i-xlarge icon-car-service inline-block" style="margin-bottom: 20px;"></i>
                            <div class="heading-block border-0" style="margin-bottom: 20px;">
                                <h3>Are You Looking for a New Car?</h3>
                            </div>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab, aspernatur, doloribus.
                                Aspernatur, maiores earum eaque quas temporibus eius dolore dicta.</p>
                            <a href="#" class="button button-rounded button-white button-light m-0">Know More</a>
                        </div>
                    </div>
                    <!-- Half Section 2 -->
                    <div class="col-lg-6 clearfix bg-color"
                        style="background: url({{asset('/car/demos/car/images/6.jpg')}}) center center no-repeat; background-size: cover;">
                        <div class="col-padding clearfix">
                            <i class="i-plain i-xlarge icon-car-care inline-block" style="margin-bottom: 20px;"></i>
                            <div class="heading-block border-0" style="margin-bottom: 20px;">
                                <h3>Want to sell a used car?</h3>
                            </div>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab, aspernatur, doloribus.
                                Aspernatur, maiores earum eaque quas temporibus eius dolore dicta.</p>
                            <a href="#" class="button button-large button-dark button-black button-rounded m-0">Know
                                More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section><!-- #content end -->

@endsection
