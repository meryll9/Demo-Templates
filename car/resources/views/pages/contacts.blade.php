@extends('layout.main')
@section('content')
    <!-- Page Title
      ============================================= -->
    <section id="page-title" class="page-title-dark" style="padding: 160px 0;">

        <div class="container clearfix" style="z-index: 9;">
            <h1>Get in Touch</h1>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item"><a href="#">Cars</a></li>
                <li class="breadcrumb-item active" aria-current="page">contact</li>
            </ol>
        </div>

        <section class="gmap w-100 h-100 position-absolute" style="top: 0; left: 0;" data-address="Melbourne, Australia"
            data-markers='[{address: "Melbourne, Australia", html: "<div class=\"p-2\" style=\"width: 300px;\"><h4 class=\"mb-2\">Hi! We are Envato!</h4><p class=\"mb-0\" style=\"font-size:1rem;\">Our mission is to help people to <strong>earn</strong> and to <strong>learn</strong> online. We operate <strong>marketplaces</strong> where hundreds of thousands of people buy and sell digital goods every day.</p></div>", icon:{ image: "images/icons/map-icon-red.png", iconsize: [32, 39], iconanchor: [32,39] } }]'>
        </section>

        <div class="video-wrap" style="position: absolute; top: 0; left: 0; height: 100%;">
            <div class="video-overlay" style="background-color: rgba(0,0,0,0.6);"></div>
        </div>

    </section><!-- #page-title end -->


    <!-- Content
      ============================================= -->
    <section id="content">
        <div class="content-wrap">
            <div class="container">
                <div class="row">
                    <div class="col-md-8">
                        <div class="heading-block">
                            <h2>contact Us</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Earum tempore autem distinctio qui
                                iure aspernatur doloribus porro blanditiis perspiciatis alias.</p>
                        </div>

                        <div class="form-widget">

                            <div class="form-result"></div>

                            <form class="row mb-0" id="template-contactform" name="template-contactform"
                                action="include/form.php" method="post">

                                <div class="form-process">
                                    <div class="css3-spinner">
                                        <div class="css3-spinner-scaler"></div>
                                    </div>
                                </div>

                                <div class="col-md-4 form-group">
                                    <label for="template-contactform-name">Name <small>*</small></label>
                                    <input type="text" id="template-contactform-name" name="template-contactform-name"
                                        value="" class="sm-form-control border-form-control required" />
                                </div>

                                <div class="col-md-4 form-group">
                                    <label for="template-contactform-email">Email <small>*</small></label>
                                    <input type="email" id="template-contactform-email" name="template-contactform-email"
                                        value="" class="required email sm-form-control border-form-control" />
                                </div>

                                <div class="col-md-4 form-group">
                                    <label for="template-contactform-phone">Phone</label>
                                    <input type="text" id="template-contactform-phone" name="template-contactform-phone"
                                        value="" class="sm-form-control border-form-control" />
                                </div>

                                <div class="w-100"></div>

                                <div class="col-md-8 form-group">
                                    <label for="template-contactform-subject">Subject <small>*</small></label>
                                    <input type="text" id="template-contactform-subject" name="subject" value=""
                                        class="required sm-form-control border-form-control" />
                                </div>

                                <div class="col-md-4 form-group">
                                    <label for="template-contactform-service">Services</label>
                                    <select id="template-contactform-service" name="template-contactform-service"
                                        class="sm-form-control border-form-control">
                                        <option value="">-- Select One --</option>
                                        <option value="Wordpress">Wordpress</option>
                                        <option value="PHP / MySQL">PHP / MySQL</option>
                                        <option value="HTML5 / CSS3">HTML5 / CSS3</option>
                                        <option value="Graphic Design">Graphic Design</option>
                                    </select>
                                </div>

                                <div class="w-100"></div>

                                <div class="col-12 form-group">
                                    <label for="template-contactform-message">Message <small>*</small></label>
                                    <textarea class="required sm-form-control border-form-control"
                                        id="template-contactform-message" name="template-contactform-message" rows="5"
                                        cols="30"></textarea>
                                </div>

                                <div class="col-12 form-group d-none">
                                    <input type="text" id="template-contactform-botcheck"
                                        name="template-contactform-botcheck" value=""
                                        class="sm-form-control border-form-control" />
                                </div>

                                <div class="col-12 form-group">

                                    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
                                    <div class="g-recaptcha" data-sitekey="6LfijgUTAAAAACPt-XfRbQszAKAJY0yZDjjhMUQT">
                                    </div>

                                </div>

                                <div class="col-12 form-group">
                                    <button class="button button-3d m-0" type="submit" id="template-contactform-submit"
                                        name="template-contactform-submit" value="submit">Send Message</button>
                                </div>

                                <input type="hidden" name="prefix" value="template-contactform-">

                            </form>

                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="card mt-4">
                            <img class="card-img-top" src="{{asset('car/demos/car/images/call.jpg')}}" alt="Card image cap">
                            <div class="card-body">
                                <h4 class="mb-1 color">Call Toll Free:</h4>
                                <h2 class="card-title mb-2"><i class="icon-phone-sign position-relative me-1 color"
                                        style="top: 4px;"></i> 1800(2345)(6789)</h2>
                                <p class="card-text">We are 24/7 available. Our expert staff is standing by to answer
                                    your questions. You can also contact by email: <a class="btn-link"
                                        href="mailto:noreply@canvas.com">noreply@canvas.com</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section><!-- #content end -->

@endsection
