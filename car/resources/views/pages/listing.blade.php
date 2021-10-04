@extends('layout.main')
@section('content')
    <!-- Page Title
      ============================================= -->
    <section id="page-title" class="page-title-parallax page-title-dark"
        style="background-image: url({{asset('/car/demos/car/images/hero-slider/4.jpg')}}); background-size: cover; padding: 120px 0;"
        data-bottom-top="background-position:0px 0px;" data-top-bottom="background-position:0px -300px;">

        <div class="container clearfix">
            <h1>Car Listing</h1>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item"><a href="#">Cars</a></li>
                <li class="breadcrumb-item active" aria-current="page">Listing</li>
            </ol>
        </div>

    </section><!-- #page-title end -->

    <!-- Content
      ============================================= -->
    <section id="content">
        <div class="content-wrap pt-0" style="overflow: visible;">
            <div class="container">

                <div class="card p-4 shadow" style="top: -60px;">
                    <form action="#" method="post" class="mb-0">
                        <div class="row">
                            <div class="col-md-2 col-sm-12">
                                <label>Type</label>
                                <input class="bt-switch" type="checkbox" checked data-on-text="New"
                                    data-off-text="Used" data-on-color="themecolor" data-off-color="themecolor">
                            </div>
                            <div class="col-md-4 col-sm-6 col-12 mt-4 mt-md-0">
                                <label>All Brands</label>
                                <select class="selectpicker customjs" title="Select Brand" data-size="10"
                                    data-live-search="true" multiple data-live-search="true" style="width:100%;">
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
                            <div class="col-md-4 col-sm-6 col-12 mt-4 mt-md-0">
                                <label>Select Model</label>
                                <select class="selectpicker customjs form-select" data-size="10" data-live-search="true"
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
                                        <option value="B-Class-Electric-Drive">2021 Mercedes-Benz B-Class Electric Drive
                                        </option>
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
                            <div class="col-md-2 col-sm-6 col-6">
                                <button class="button button-3d button-rounded w-100 ms-0"
                                    style="margin-top: 29px;">Search</button>
                            </div>
                        </div>
                    </form>
                </div>

            </div>

            <div class="section m-0 pt-0 bg-transparent">
                <div class="container">

                    <!-- Grid Filter
          ============================================= -->
                    <ul class="grid-filter style-2 w-100" data-container="#portfolio">
                        <li><a href="#" data-filter=".cf-cuv"><i class="icon-car-cuv"></i><span>Cuv</span></a></li>
                        <li><a href="#" data-filter=".cf-sedan"><i class="icon-car-sedan"></i><span>Sedan</span></a></li>
                        <li><a href="#" data-filter=".cf-supercar"><i
                                    class="icon-car-supercar"></i><span>Supercar</span></a></li>
                        <li><a href="#" data-filter=".cf-hatchback"><i
                                    class="icon-car-hatchback"></i><span>Hatchback</span></a></li>
                        <li><a href="#" data-filter=".cf-cabriolet"><i
                                    class="icon-car-cabriolet"></i><span>Cabriolet</span></a></li>
                        <!-- Show All Button -->
                        <li class="activeFilter ms-auto"><a class="button button-small button-rounded button-reset" href="#"
                                data-filter="*">Show All</a></li>
                    </ul><!-- .grid-filter end -->

                    <!-- Portfolio Items
          ============================================= -->
                    <div id="portfolio" class="portfolio row gutter-30 grid-container" data-layout="fitRows">

                        <!-- Car 1 -->
                        <article class="portfolio-item col-12 col-sm-6 col-md-4 cf-sedan">
                            <div class="grid-inner">
                                <div class="portfolio-image">
                                    <a href="#">
                                        <img src="{{asset('car/demos/car/images/filter-cars/1.jpg')}}" alt="Open Imagination">
                                        <div class="filter-p-pricing">
                                            <span class="p-price fw-bold ls1">$32,568</span>
                                            <span class="p-price-msrp">MSRP : <strong>$35,698</strong></span>
                                        </div>
                                    </a>
                                </div>
                                <div class="portfolio-desc">
                                    <h3><a href="#">Ford Mustang - White</a></h3>
                                    <span>Dramatically synthesize parallel applications vis-a-vis revolutionary e-tailers.
                                        Monotonectally incubate cooperative partnerships.</span>
                                </div>
                                <div class="row g-0 car-p-features font-primary clearfix">
                                    <div class="col-lg-4 col-6 p-0"><i class="icon-car-meter"></i><span> 20000</span></div>
                                    <div class="col-lg-4 col-6 p-0"><i class="icon-car-door"></i><span> 5 Seater</span>
                                    </div>
                                    <div class="col-lg-4 col-6 p-0"><i class="icon-car-fuel2"></i><span> 20kmpl</span></div>
                                    <div class="col-lg-4 col-6 p-0"><i class="icon-car-signal"></i><span> Automatic</span>
                                    </div>
                                    <div class="col-lg-4 col-6 p-0"><i class="icon-car-wheel"></i><span> 15 Inch</span>
                                    </div>
                                    <div class="col-lg-4 col-6 p-0"><i class="icon-car-care"></i><span> 2021</span></div>
                                </div>
                            </div>
                        </article>

                        <!-- Car 2 -->
                        <article class="portfolio-item col-12 col-sm-6 col-md-4 cf-suv">
                            <div class="grid-inner">
                                <div class="portfolio-image">
                                    <a href="#">
                                        <img src="{{asset('car/demos/car/images/filter-cars/2.jpg')}}" alt="Open Imagination">
                                        <div class="filter-p-pricing">
                                            <span class="p-price fw-bold ls1">$32,568</span>
                                            <span class="p-price-msrp">MSRP : <strong>$35,698</strong></span>
                                        </div>
                                    </a>
                                </div>
                                <div class="portfolio-desc">
                                    <h3><a href="#">Chevrolet Brown Traverse</a></h3>
                                    <span>Enthusiastically incubate turnkey technologies for exceptional materials.
                                        Seamlessly implement emerging scenarios.</span>
                                </div>
                                <div class="row g-0 car-p-features font-primary clearfix">
                                    <div class="col-lg-4 col-6 p-0"><i class="icon-car-meter"></i><span> 0-50 mph</span>
                                    </div>
                                    <div class="col-lg-4 col-6 p-0"><i class="icon-car-door"></i><span> 7 Seater</span>
                                    </div>
                                    <div class="col-lg-4 col-6 p-0"><i class="icon-car-paint"></i><span> Brown</span></div>
                                    <div class="col-lg-4 col-6 p-0"><i class="icon-car-signal"></i><span> Manual</span>
                                    </div>
                                    <div class="col-lg-4 col-6 p-0"><i class="icon-car-wheel"></i><span> 20-Inch</span>
                                    </div>
                                    <div class="col-lg-4 col-6 p-0"><i class="icon-car-care"></i><span> 2021</span></div>
                                </div>
                            </div>
                        </article>

                        <!-- Car 3 -->
                        <article class="portfolio-item col-12 col-sm-6 col-md-4 cf-cabriolet">
                            <div class="grid-inner">
                                <div class="portfolio-image">
                                    <a href="#">
                                        <img src="{{asset('car/demos/car/images/filter-cars/3.jpg')}}" alt="Open Imagination">
                                        <div class="filter-p-pricing">
                                            <span class="p-price fw-bold ls1">$62,300</span>
                                            <span class="p-price-msrp">MSRP : <strong>$62,700</strong></span>
                                        </div>
                                    </a>
                                </div>
                                <div class="portfolio-desc">
                                    <h3><a href="#">Audi 2021 S5 Cabriolet</a></h3>
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
                        <article class="portfolio-item col-12 col-sm-6 col-md-4 cf-cuv">
                            <div class="grid-inner">
                                <div class="portfolio-image">
                                    <a href="#">
                                        <img src="{{asset('car/demos/car/images/filter-cars/4.jpg')}}" alt="Open Imagination">
                                        <div class="filter-p-pricing">
                                            <span class="p-price fw-bold ls1">$32,568</span>
                                            <span class="p-price-msrp">MSRP : <strong>$35,698</strong></span>
                                        </div>
                                    </a>
                                </div>
                                <div class="portfolio-desc">
                                    <h3><a href="#">BMW 3 Series, ABS</a></h3>
                                    <span>Energistically engineer user friendly synergy vis-a-vis enabled channels.
                                        Rapidiously utilize value-added. Laudantium debitis perferendis obcaecati.</span>
                                </div>
                                <div class="row g-0 car-p-features font-primary clearfix">
                                    <div class="col-lg-4 col-6 p-0"><i class="icon-car-meter"></i><span> 0-80 mph</span>
                                    </div>
                                    <div class="col-lg-4 col-6 p-0"><i class="icon-car-fuel2"></i><span> Hybrid</span></div>
                                    <div class="col-lg-4 col-6 p-0"><i class="icon-car-signal"></i><span> Automatic</span>
                                    </div>
                                    <div class="col-lg-4 col-6 p-0"><i class="icon-car-stearing"></i><span> 3000</span>
                                    </div>
                                    <div class="col-lg-4 col-6 p-0"><i class="icon-car-care"></i><span> 2021</span></div>
                                </div>
                            </div>
                        </article>

                        <!-- Car 5 -->
                        <article class="portfolio-item col-12 col-sm-6 col-md-4 cf-supercar">
                            <div class="grid-inner">
                                <div class="portfolio-image">
                                    <a href="#">
                                        <img src="{{asset('car/demos/car/images/filter-cars/5.jpg')}}" alt="Open Imagination">
                                        <div class="filter-p-pricing">
                                            <span class="p-price fw-bold ls1">$32,568</span>
                                            <span class="p-price-msrp">MSRP : <strong>$35,698</strong></span>
                                        </div>
                                    </a>
                                </div>
                                <div class="portfolio-desc">
                                    <h3><a href="#">2021 LEXUS IS 200T FSPORT</a></h3>
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
                        <article class="portfolio-item col-12 col-sm-6 col-md-4 cf-hatchback">
                            <div class="grid-inner">
                                <div class="portfolio-image">
                                    <a href="#">
                                        <img src="{{asset('car/demos/car/images/filter-cars/6.jpg')}}" alt="Open Imagination">
                                        <div class="filter-p-pricing">
                                            <span class="p-price fw-bold ls1">$32,568</span>
                                            <span class="p-price-msrp">MSRP : <strong>$35,698</strong></span>
                                        </div>
                                    </a>
                                </div>
                                <div class="portfolio-desc">
                                    <h3><a href="#">Chevrolet T430 Hatchback</a></h3>
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

            <div class="section center nbottomomargin mt-3 footer-stick" style="padding:80px 0 ">
                <div class="container clearfix">
                    <h3 class="font-primary">Special Offers on Villa Long Term Rentals &amp; Lease Agreements</h3>
                    <a href="contact.html" class="button button-color button-large button-rounded">Contact Now</a>
                </div>
            </div>
        </div>
    </section><!-- #content end -->



@endsection
