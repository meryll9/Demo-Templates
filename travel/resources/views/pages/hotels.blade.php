@extends('layout.main')
@section('content')
    <!-- Page Title
      ============================================= -->
    <section id="page-title" class="page-title-center page-title-parallax page-title-dark include-header include-topbar"
        style="background-image: url({{asset('/travel/demos/travel/images/hotels/page-title.jpg')}}); background-position: center center; padding: 100px 0;"
        data-bottom-top="background-position:0px 0px;" data-top-bottom="background-position:0px -200px;">

        <div class="container clearfix">
            <h1>53 Hotels Found</h1>
            <span><i class="icon-map-marker"></i> Bali, Indonesia</span>
        </div>

    </section><!-- #page-title end -->

    <!-- Content
      ============================================= -->
    <section id="content">
        <div class="content-wrap">
            <div class="container clearfix">

                <div class="row gutter-40 col-mb-80">
                    <!-- Post Content
          ============================================= -->
                    <div class="postcontent col-lg-9 order-lg-last">
                        <!-- Posts
           ============================================= -->
                        <div id="posts" class="row gutter-40 mb-0">

                            <div class="entry col-12">
                                <div class="grid-inner row">
                                    <div class="col-lg-4">
                                        <a href="{{asset('travel/demos/travel/images/hotels/1.jpg')}}" data-lightbox="image"><img
                                                src="{{asset('travel/demos/travel/images/hotels/1.jpg')}}" alt="Bronze Time Hotel"></a>
                                    </div>
                                    <div class="col-lg col-md-8 mt-4 mt-lg-0">
                                        <div class="entry-title title-sm">
                                            <h2><a href="blog-single.html">Bronze Time Hotel</a></h2>
                                        </div>
                                        <div class="entry-meta">
                                            <ul>
                                                <li><i class="icon-star3 color"></i> <i class="icon-star3 color"></i> <i
                                                        class="icon-star3 color"></i> <i class="icon-star3 color"></i> <i
                                                        class="icon-star-half-full color"></i></li>
                                                <li><i class="icon-line-map"></i><a
                                                        href="https://maps.google.com/maps?q=221B+Baker+Street,+London,+United+Kingdom&hl=en&t=v&hnear=221B+Baker+St,+London+NW1+6XE,+United+Kingdom"
                                                        data-lightbox="iframe"> Nusa Dua</a></li>
                                                <li><i class="icon-star3"></i><a href="#"> 24</a></li>
                                            </ul>
                                        </div>
                                        <div class="entry-content">
                                            <div class="clearfix" style="margin-bottom: 10px;">
                                                <i class="i-rounded i-small i-bordered icon-wifi-full"
                                                    data-bs-toggle="tooltip" data-bs-placement="top" title="WiFi"></i>
                                                <i class="i-rounded i-small i-bordered icon-glass" data-bs-toggle="tooltip"
                                                    data-bs-placement="top" title="Bar"></i>
                                                <i class="i-rounded i-small i-bordered icon-line-shuffle"
                                                    data-bs-toggle="tooltip" data-bs-placement="top"
                                                    title="Air Conditioner"></i>
                                                <i class="i-rounded i-small i-bordered icon-food" data-bs-toggle="tooltip"
                                                    data-bs-placement="top" title="Restaurant"></i>
                                                <i class="i-rounded i-small i-bordered border-0 i-light icon-barbell"
                                                    data-bs-toggle="tooltip" data-bs-placement="top"
                                                    title="Gym Unavailable"></i>
                                                <i class="i-rounded i-small i-bordered icon-bell" data-bs-toggle="tooltip"
                                                    data-bs-placement="top" title="Room Service"></i>
                                                <i class="i-rounded i-small i-bordered border-0 i-light icon-coffee2"
                                                    data-bs-toggle="tooltip" data-bs-placement="top"
                                                    title="Cafe Unavailable"></i>
                                            </div>
                                            <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing
                                                elit. Soluta sequi nemo asperiores. Debitis inventore veritatis quas omnis
                                                error.</p>
                                        </div>
                                    </div>
                                    <div class="col-lg-auto col-md-4 mt-4 mt-lg-0 text-start text-md-center">
                                        <div class="hotel-price">
                                            <i class="icon-dollar"></i>49.99
                                        </div>
                                        <small><em>Price per night*</em></small><br>
                                        <a href="#" class="button button-rounded mt-4 mx-0">Book Now</a>
                                    </div>
                                </div>
                            </div>

                            <div class="entry col-12">
                                <div class="grid-inner row">
                                    <div class="col-lg-4">
                                        <div class="fslider" data-pagi="false" data-lightbox="gallery">
                                            <div class="flexslider">
                                                <div class="slider-wrap">
                                                    <div class="slide"><a href="{{asset('travel/demos/travel/images/hotels/2.jpg')}}"
                                                            data-lightbox="gallery-item"><img
                                                                src="{{asset('travel/demos/travel/images/hotels/2.jpg')}}"
                                                                alt="Standard Post with Gallery"></a></div>
                                                    <div class="slide"><a href="{{asset('travel/demos/travel/images/hotels/2-1.jpg')}}"
                                                            data-lightbox="gallery-item"><img
                                                                src="{{asset('travel/demos/travel/images/hotels/2-1.jpg')}}"
                                                                alt="Standard Post with Gallery"></a></div>
                                                    <div class="slide"><a href="{{asset('travel/demos/travel/images/hotels/2-2.jpg')}}"
                                                            data-lightbox="gallery-item"><img
                                                                src="{{asset('travel/demos/travel/images/hotels/2-2.jpg')}}"
                                                                alt="Standard Post with Gallery"></a></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg col-md-8 mt-4 mt-lg-0">
                                        <div class="entry-title title-sm">
                                            <h2><a href="blog-single.html">Bronze Time Hotel</a></h2>
                                        </div>
                                        <div class="entry-meta">
                                            <ul>
                                                <li><i class="icon-star3 color"></i> <i class="icon-star3 color"></i> <i
                                                        class="icon-star3 color"></i> <i class="icon-star3 color"></i> <i
                                                        class="icon-star-half-full color"></i></li>
                                                <li><i class="icon-line-map"></i><a
                                                        href="https://maps.google.com/maps?q=221B+Baker+Street,+London,+United+Kingdom&hl=en&t=v&hnear=221B+Baker+St,+London+NW1+6XE,+United+Kingdom"
                                                        data-lightbox="iframe"> Nusa Dua</a></li>
                                                <li><i class="icon-star3"></i><a href="#"> 24</a></li>
                                            </ul>
                                        </div>
                                        <div class="entry-content">
                                            <div class="clearfix" style="margin-bottom: 10px;">
                                                <i class="i-rounded i-small i-bordered icon-wifi-full"
                                                    data-bs-toggle="tooltip" data-bs-placement="top" title="WiFi"></i>
                                                <i class="i-rounded i-small i-bordered icon-glass" data-bs-toggle="tooltip"
                                                    data-bs-placement="top" title="Bar"></i>
                                                <i class="i-rounded i-small i-bordered icon-line-shuffle"
                                                    data-bs-toggle="tooltip" data-bs-placement="top"
                                                    title="Air Conditioner"></i>
                                                <i class="i-rounded i-small i-bordered icon-food" data-bs-toggle="tooltip"
                                                    data-bs-placement="top" title="Restaurant"></i>
                                                <i class="i-rounded i-small i-bordered border-0 i-light icon-barbell"
                                                    data-bs-toggle="tooltip" data-bs-placement="top"
                                                    title="Gym Unavailable"></i>
                                                <i class="i-rounded i-small i-bordered icon-bell" data-bs-toggle="tooltip"
                                                    data-bs-placement="top" title="Room Service"></i>
                                                <i class="i-rounded i-small i-bordered border-0 i-light icon-coffee2"
                                                    data-bs-toggle="tooltip" data-bs-placement="top"
                                                    title="Cafe Unavailable"></i>
                                            </div>
                                            <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing
                                                elit. Soluta sequi nemo asperiores. Debitis inventore veritatis quas omnis
                                                error.</p>
                                        </div>
                                    </div>
                                    <div class="col-lg-auto col-md-4 mt-4 mt-lg-0 text-start text-md-center">
                                        <div class="hotel-price">
                                            <i class="icon-dollar"></i>89.49
                                        </div>
                                        <small><em>Price per night*</em></small><br>
                                        <a href="#" class="button button-rounded mt-4 mx-0">Book Now</a>
                                    </div>
                                </div>
                            </div>

                            <div class="entry col-12">
                                <div class="grid-inner row">
                                    <div class="col-lg-4">
                                        <a href="{{asset('travel/demos/travel/images/hotels/3.jpg')}}" data-lightbox="image"><img
                                                src="{{asset('travel/demos/travel/images/hotels/3.jpg')}}" alt="Winter Bazaar Hotel"></a>
                                    </div>
                                    <div class="col-lg col-md-8 mt-4 mt-lg-0">
                                        <div class="entry-title title-sm">
                                            <h2><a href="blog-single.html">Winter Bazaar Hotel</a></h2>
                                        </div>
                                        <div class="entry-meta">
                                            <ul>
                                                <li><i class="icon-star3 color"></i> <i class="icon-star3 color"></i> <i
                                                        class="icon-star3 color"></i> <i class="icon-star3 color"></i> <i
                                                        class="icon-star-half-full color"></i></li>
                                                <li><i class="icon-line-map"></i><a
                                                        href="https://maps.google.com/maps?q=221B+Baker+Street,+London,+United+Kingdom&hl=en&t=v&hnear=221B+Baker+St,+London+NW1+6XE,+United+Kingdom"
                                                        data-lightbox="iframe"> Kuta Beach</a></li>
                                                <li><i class="icon-star3"></i><a href="#"> 13</a></li>
                                            </ul>
                                        </div>
                                        <div class="entry-content">
                                            <div class="clearfix" style="margin-bottom: 10px;">
                                                <i class="i-rounded i-small i-bordered icon-wifi-full"
                                                    data-bs-toggle="tooltip" data-bs-placement="top" title="WiFi"></i>
                                                <i class="i-rounded i-small i-bordered icon-glass" data-bs-toggle="tooltip"
                                                    data-bs-placement="top" title="Bar"></i>
                                                <i class="i-rounded i-small i-bordered icon-line-shuffle"
                                                    data-bs-toggle="tooltip" data-bs-placement="top"
                                                    title="Air Conditioner"></i>
                                                <i class="i-rounded i-small i-bordered icon-food" data-bs-toggle="tooltip"
                                                    data-bs-placement="top" title="Restaurant"></i>
                                                <i class="i-rounded i-small i-bordered border-0 i-light icon-barbell"
                                                    data-bs-toggle="tooltip" data-bs-placement="top"
                                                    title="Gym Unavailable"></i>
                                                <i class="i-rounded i-small i-bordered icon-bell" data-bs-toggle="tooltip"
                                                    data-bs-placement="top" title="Room Service"></i>
                                                <i class="i-rounded i-small i-bordered border-0 i-light icon-coffee2"
                                                    data-bs-toggle="tooltip" data-bs-placement="top"
                                                    title="Cafe Unavailable"></i>
                                            </div>
                                            <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing
                                                elit. Cupiditate, asperiores quod est tenetur in. Eligendi, deserunt,
                                                blanditiis est quisquam.</p>
                                        </div>
                                    </div>
                                    <div class="col-lg-auto col-md-4 mt-4 mt-lg-0 text-start text-md-center">
                                        <div class="hotel-price">
                                            <i class="icon-dollar"></i>99.99
                                        </div>
                                        <small><em>Price per night*</em></small><br>
                                        <a href="#" class="button button-rounded mt-4 mx-0">Book Now</a>
                                    </div>
                                </div>
                            </div>

                            <div class="entry col-12">
                                <div class="grid-inner row">
                                    <div class="col-lg-4">
                                        <div class="fslider" data-pagi="false" data-lightbox="gallery">
                                            <div class="flexslider">
                                                <div class="slider-wrap">
                                                    <div class="slide"><a href="{{asset('travel/demos/travel/images/hotels/4.jpg')}}"
                                                            data-lightbox="gallery-item"><img
                                                                src="{{asset('travel/demos/travel/images/hotels/4.jpg')}}"
                                                                alt="Standard Post with Gallery"></a></div>
                                                    <div class="slide"><a href="{{asset('travel/demos/travel/images/hotels/4-1.jpg')}}"
                                                            data-lightbox="gallery-item"><img
                                                                src="{{asset('travel/demos/travel/images/hotels/4-1.jpg')}}"
                                                                alt="Standard Post with Gallery"></a></div>
                                                    <div class="slide"><a
                                                            href="{{asset('travel/demos/travel/images/hotels/4-2.jpg')}}"
                                                            data-lightbox="gallery-item"><img
                                                                src="{{asset('travel/demos/travel/images/hotels/4-2.jpg')}}"
                                                                alt="Standard Post with Gallery"></a></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg col-md-8 mt-4 mt-lg-0">
                                        <div class="entry-title title-sm">
                                            <h2><a href="blog-single.html">Bronze Time Hotel</a></h2>
                                        </div>
                                        <div class="entry-meta">
                                            <ul>
                                                <li><i class="icon-star3 color"></i> <i class="icon-star3 color"></i> <i
                                                        class="icon-star3 color"></i> <i class="icon-star3 color"></i> <i
                                                        class="icon-star-half-full color"></i></li>
                                                <li><i class="icon-line-map"></i><a
                                                        href="https://maps.google.com/maps?q=221B+Baker+Street,+London,+United+Kingdom&hl=en&t=v&hnear=221B+Baker+St,+London+NW1+6XE,+United+Kingdom"
                                                        data-lightbox="iframe"> Nusa Dua</a></li>
                                                <li><i class="icon-star3"></i><a href="#"> 24</a></li>
                                            </ul>
                                        </div>
                                        <div class="entry-content">
                                            <div class="clearfix" style="margin-bottom: 10px;">
                                                <i class="i-rounded i-small i-bordered icon-wifi-full"
                                                    data-bs-toggle="tooltip" data-bs-placement="top" title="WiFi"></i>
                                                <i class="i-rounded i-small i-bordered icon-glass" data-bs-toggle="tooltip"
                                                    data-bs-placement="top" title="Bar"></i>
                                                <i class="i-rounded i-small i-bordered icon-line-shuffle"
                                                    data-bs-toggle="tooltip" data-bs-placement="top"
                                                    title="Air Conditioner"></i>
                                                <i class="i-rounded i-small i-bordered icon-food" data-bs-toggle="tooltip"
                                                    data-bs-placement="top" title="Restaurant"></i>
                                                <i class="i-rounded i-small i-bordered border-0 i-light icon-barbell"
                                                    data-bs-toggle="tooltip" data-bs-placement="top"
                                                    title="Gym Unavailable"></i>
                                                <i class="i-rounded i-small i-bordered icon-bell" data-bs-toggle="tooltip"
                                                    data-bs-placement="top" title="Room Service"></i>
                                                <i class="i-rounded i-small i-bordered border-0 i-light icon-coffee2"
                                                    data-bs-toggle="tooltip" data-bs-placement="top"
                                                    title="Cafe Unavailable"></i>
                                            </div>
                                            <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing
                                                elit. Soluta sequi nemo asperiores. Debitis inventore veritatis quas omnis
                                                error.</p>
                                        </div>
                                    </div>
                                    <div class="col-lg-auto col-md-4 mt-4 mt-lg-0 text-start text-md-center">
                                        <div class="hotel-price">
                                            <i class="icon-dollar"></i>29.99
                                        </div>
                                        <small><em>Price per night*</em></small><br>
                                        <a href="#" class="button button-rounded mt-4 mx-0">Book Now</a>
                                    </div>
                                </div>
                            </div>

                        </div>

                        <ul class="pagination my-0">
                            <li class="page-item disabled"><a class="page-link" href="#">&laquo;</a></li>
                            <li class="page-item active"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item"><a class="page-link" href="#">4</a></li>
                            <li class="page-item"><a class="page-link" href="#">&raquo;</a></li>
                        </ul>

                    </div>

                    <!-- Sidebar
          ============================================= -->
                    <div class="sidebar col-lg-3">
                        <div class="sidebar-widgets-wrap">

                            <div class="widget clearfix">
                                <div class="toggle mb-0 clearfix">
                                    <div class="toggle-header">
                                        <div class="toggle-icon">
                                            <button class="button button-rounded w-100 m-0">
                                                <i class="toggle-closed icon-caret-right"></i>
                                                <i class="toggle-open icon-caret-down"></i>Modify Search Result
                                            </button>
                                        </div>
                                    </div>
                                    <div class="toggle-content ps-0 mt-15">

                                        <form class="row mb-0">
                                            <div class="form-process">
                                                <div class="css3-spinner">
                                                    <div class="css3-spinner-scaler"></div>
                                                </div>
                                            </div>

                                            <div class="col-12 form-group">
                                                <label for="template-contactform-location">Location <small>*</small></label>
                                                <input type="text" id="template-contactform-location"
                                                    name="template-contactform-location" value=""
                                                    class="sm-form-control required" placeholder="Spain" />
                                            </div>

                                            <div class="col-12">
                                                <div class="input-daterange travel-date-group row mb-0">
                                                    <div class="col-12 form-group">
                                                        <label for="">Departure</label>
                                                        <input type="text" value="" class="sm-form-control text-start"
                                                            name="start" placeholder="mm/dd/yyyy">
                                                    </div>

                                                    <div class="col-12 form-group">
                                                        <label for="">Arrival</label>
                                                        <input type="text" value="" class="sm-form-control text-start"
                                                            name="end" placeholder="mm/dd/yyyy">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-6 form-group">
                                                <label for="template-contactform-adults">Adults</label>
                                                <select id="template-contactform-adults" name="template-contactform-adults"
                                                    class="sm-form-control">
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                    <option value="4">4</option>
                                                </select>
                                            </div>

                                            <div class="col-md-6 form-group">
                                                <label for="template-contactform-children">Childrens</label>
                                                <select id="template-contactform-children"
                                                    name="template-contactform-children" class="sm-form-control">
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                    <option value="4">4</option>
                                                </select>
                                            </div>

                                            <div class="w-100"></div>

                                            <div class="col-12 form-group d-none">
                                                <input type="text" id="template-contactform-botcheck"
                                                    name="template-contactform-botcheck" value=""
                                                    class="sm-form-control" />
                                            </div>

                                            <div class="col-12 form-group mb-0">
                                                <a href="#" class="button button-3d m-0">Search</a>
                                            </div>
                                        </form>

                                    </div>
                                </div>
                            </div>

                            <div class="widget clearfix">

                                <h4>Price</h4>

                                <div>
                                    <input id="checkbox-1" class="checkbox-style" name="checkbox" type="checkbox">
                                    <label for="checkbox-1" class="checkbox-style-2-label checkbox-small">$0 - $49</label>
                                </div>
                                <div>
                                    <input id="checkbox-2" class="checkbox-style" name="checkbox" type="checkbox">
                                    <label for="checkbox-2" class="checkbox-style-2-label checkbox-small">$49 - $99</label>
                                </div>
                                <div>
                                    <input id="checkbox-3" class="checkbox-style" name="checkbox" type="checkbox">
                                    <label for="checkbox-3" class="checkbox-style-2-label checkbox-small">$99 -
                                        $129</label>
                                </div>
                                <div>
                                    <input id="checkbox-4" class="checkbox-style" name="checkbox" type="checkbox">
                                    <label for="checkbox-4" class="checkbox-style-2-label checkbox-small">$129 -
                                        $199</label>
                                </div>

                            </div>

                            <div class="widget clearfix">

                                <h4>Star Ratings</h4>
                                <input id="input" type="number" class="rating" data-max="5" data-step="1"
                                    data-size="xs" data-glyphicon="false" data-show-clear="false" data-star-captions="{}">

                            </div>

                            <div class="widget clearfix">

                                <h4>Amenities</h4>

                                <div>
                                    <input id="checkbox1-1" class="checkbox-style" name="checkbox-1" type="checkbox">
                                    <label for="checkbox1-1" class="checkbox-style-2-label checkbox-small">Air
                                        Conditioner</label>
                                </div>
                                <div>
                                    <input id="checkbox1-2" class="checkbox-style" name="checkbox-1" type="checkbox">
                                    <label for="checkbox1-2" class="checkbox-style-2-label checkbox-small">Bar</label>
                                </div>
                                <div>
                                    <input id="checkbox1-3" class="checkbox-style" name="checkbox-1" type="checkbox">
                                    <label for="checkbox1-3" class="checkbox-style-2-label checkbox-small">Swiming
                                        Pool</label>
                                </div>
                                <div>
                                    <input id="checkbox1-4" class="checkbox-style" name="checkbox-1" type="checkbox">
                                    <label for="checkbox1-4" class="checkbox-style-2-label checkbox-small">Gym</label>
                                </div>
                                <div>
                                    <input id="checkbox1-5" class="checkbox-style" name="checkbox-1" type="checkbox">
                                    <label for="checkbox1-5"
                                        class="checkbox-style-2-label checkbox-small">Restaurant</label>
                                </div>
                                <div>
                                    <input id="checkbox1-6" class="checkbox-style" name="checkbox-1" type="checkbox">
                                    <label for="checkbox1-6" class="checkbox-style-2-label checkbox-small">Cafe</label>
                                </div>
                                <div>
                                    <input id="checkbox1-7" class="checkbox-style" name="checkbox-1" type="checkbox">
                                    <label for="checkbox1-7" class="checkbox-style-2-label checkbox-small">WiFi</label>
                                </div>
                                <div>
                                    <input id="checkbox1-8" class="checkbox-style" name="checkbox-1" type="checkbox">
                                    <label for="checkbox1-8" class="checkbox-style-2-label checkbox-small">Parking</label>
                                </div>
                                <div>
                                    <input id="checkbox1-9" class="checkbox-style" name="checkbox-1" type="checkbox">
                                    <label for="checkbox1-9" class="checkbox-style-2-label checkbox-small">24HRS
                                        Check-in</label>
                                </div>

                            </div>

                        </div>

                    </div>
                </div>

            </div>
        </div>
    </section><!-- #content end -->

@endsection
