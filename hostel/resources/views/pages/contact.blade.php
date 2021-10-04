@extends('layout.main')
@section('content')
    <!-- Page Title
      ============================================= -->
    <section id="slider" class="slider-element bg-light d-flex align-items-center text-center" style="padding: 80px 0">

        <div class="container">
            <h1 class="display-4 fw-bold mb-2">Contact Us</h1>
            <span class="color text-uppercase ls3">Get in Touch</span>
        </div>

    </section>

    <!-- Content
      ============================================= -->
    <section id="content">

        <div class="content-wrap pb-0">
            <div class="container">

                <div class="row align-items-stretch gutter-10">
                    <div class="col-lg-6 min-vh-50">
                        <div class="h-100"
                            style="background: url({{asset('/hostel/demos/hostel/images/box-img/1.jpg')}}) no-repeat center center / cover;">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="bg-light border border-f5 p-5">
                            <h3 class="mb-2">Send us an Email</h3>
                            <p class="lead">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Facere,
                                dolores.</p>

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
                                        <div class="col-md-6 form-group">
                                            <label for="template-contactform-name">Name <small>*</small></label>
                                            <input type="text" id="template-contactform-name"
                                                name="template-contactform-name" value="" class="form-control required" />
                                        </div>

                                        <div class="col-md-6 form-group">
                                            <label for="template-contactform-email">Email <small>*</small></label>
                                            <input type="email" id="template-contactform-email"
                                                name="template-contactform-email" value=""
                                                class="required email form-control" />
                                        </div>

                                        <div class="col-md-6 form-group">
                                            <label for="template-contactform-phone">Phone</label>
                                            <input type="text" id="template-contactform-phone"
                                                name="template-contactform-phone" value="" class="form-control" />
                                        </div>

                                        <div class="col-md-6 form-group">
                                            <label for="template-contactform-subject">Subject <small>*</small></label>
                                            <input type="text" id="template-contactform-subject" name="subject" value=""
                                                class="required form-control" />
                                        </div>

                                        <div class="w-100"></div>

                                        <div class="col-12 form-group">
                                            <label for="template-contactform-message">Message <small>*</small></label>
                                            <textarea class="required form-control" id="template-contactform-message"
                                                name="template-contactform-message" rows="7" cols="30"></textarea>
                                        </div>

                                        <div class="col-12 form-group d-none">
                                            <input type="text" id="template-contactform-botcheck"
                                                name="template-contactform-botcheck" value="" class="form-control" />
                                        </div>

                                        <div class="col-12 form-group">
                                            <button class="button button-xlarge fw-semibold bg-color nott ls0 px-5 m-0"
                                                type="submit" id="template-contactform-submit"
                                                name="template-contactform-submit" value="submit">Send Message</button>
                                        </div>
                                    </div>

                                    <input type="hidden" name="prefix" value="template-contactform-">

                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="section mb-0 center dark parallax"
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
