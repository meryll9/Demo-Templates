@extends('layout.main')
@section('content')
    <!-- Slider / Hero
      ============================================= -->
    <div id="slider" class="slider-element dark py-0"
        style="background-size: cover; background-image: url({{asset('/covidcare/demos/covid-care/images/page-title/contact.jpg')}}); background-position: center center; background-repeat: no-repeat;">

        <div class="container">
            <div class="row text-center py-5 min-vh-md-75 justify-content-center align-items-center">
                <div class="col-lg-6">
                    <h5 class="mb-1 text-uppercase ls3 text-white-50 font-body">Get in Touch</h5>
                    <h2 class="display-3 fw-bolder ls3 font-display mb-5">Contact Us</h2>
                    <a href="#"
                        class="button button-large rounded-pill bg-color-2 button-light text-dark ls0 fw-medium m-0">Sign Up
                        Now</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Content
      ============================================= -->
    <section id="content">
        <div class="content-wrap">

            <div class="container clearfix">

                <div class="row justify-content-around">
                    <div class="col-lg-5">
                        <h3 class="display-3 color fw-normal font-display mb-5">Get In Touch</h3>

                        <p class="mb-5">Lorem ipsum dolor sit amet consectetur adipisicing, elit. A laboriosam
                            doloribus quod iste deleniti! Voluptatem sit aut, fugiat at, maiores suscipit aperiam?
                            Asperiores corrupti illum reprehenderit molestias adipisci dignissimos enim.</p>

                        <div class="clear"></div>

                        <div class="feature-box fbox-sm mb-3">
                            <div class="fbox-icon">
                                <i class="bg-color-50 color icon-call"></i>
                            </div>
                            <div class="fbox-content">
                                <h3 class="nott text-larger fw-normal mb-2 color">
                                    <strong class="mb-2 h6 d-block text-dark">Headquarters:</strong>
                                    795 Folsom Ave, Suite 600<br>
                                    San Francisco, CA 94107<br>
                                </h3>
                            </div>
                        </div>
                        <div class="feature-box fbox-sm mb-3">
                            <div class="fbox-icon">
                                <i class="bg-color-50 color icon-call"></i>
                            </div>
                            <div class="fbox-content">
                                <h3 class="nott text-larger fw-normal mb-2"><a href="tel:+122-55412474">(1) 22 55412474</a>
                                </h3>
                            </div>
                        </div>
                        <div class="feature-box fbox-sm mb-5">
                            <div class="fbox-icon">
                                <i class="bg-color-50 color icon-email3"></i>
                            </div>
                            <div class="fbox-content">
                                <h3 class="nott text-larger fw-normal mb-2"><a
                                        href="mailto:noreply@canvas.com">noreply@canvas.com</a></h3>
                            </div>
                        </div>

                    </div>

                    <div class="col-lg-5">
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
                                        <label class="nott ls0" for="template-contactform-name">Name
                                            <small>*</small></label>
                                        <input type="text" id="template-contactform-name" name="template-contactform-name"
                                            value="" class="rounded-pill form-control required" />
                                    </div>

                                    <div class="col-12 form-group mb-4">
                                        <label class="nott ls0" for="template-contactform-email">Email
                                            <small>*</small></label>
                                        <input type="email" id="template-contactform-email"
                                            name="template-contactform-email" value=""
                                            class="required email rounded-pill form-control" />
                                    </div>

                                    <div class="col-12 form-group mb-4">
                                        <label class="nott ls0" for="template-contactform-message">Message
                                            <small>*</small></label>
                                        <textarea class="required rounded-5 form-control" id="template-contactform-message"
                                            name="template-contactform-message" rows="6" cols="30"></textarea>
                                    </div>

                                    <div class="col-12 form-group mb-4 d-none">
                                        <input type="text" id="template-contactform-botcheck"
                                            name="template-contactform-botcheck" value=""
                                            class="rounded-pill form-control" />
                                    </div>

                                    <div class="col-12 form-group mb-4">
                                        <button
                                            class="button button-large rounded-pill bg-color px-4 py-2 h-op-09 op-ts m-0"
                                            type="submit" id="template-contactform-submit"
                                            name="template-contactform-submit" value="submit">Send Message</button>
                                    </div>
                                </div>

                                <input type="hidden" name="prefix" value="template-contactform-">

                            </form>
                        </div>
                    </div>
                </div>

                <div class="card bg-color-2 border-0 mt-5"
                    style="background: url({{asset('/covidcare/demos/covid-care/images/illustration/bg-pattern.svg')}}) no-repeat center left / auto 300%;">
                    <div class="card-body p-5">
                        <div class="row justify-content-between col-mb-30">
                            <div class="col-md-4">
                                <h3 class="mb-1 color">Customer Support</h3>
                                <a href="#" class="text-dark"><u>https://support.canvas.com</u></a>
                            </div>

                            <div class="col-md-4">
                                <h3 class="mb-1 color">Contact us via Email</h3>
                                <a href="#" class="text-dark"><u>noreply@canvas.com</u></a>
                            </div>

                            <div class="col-md-4">
                                <h3 class="mb-1 color">Live chat with Us</h3>
                                <a href="#" class="text-dark"><u>Click here</u><i
                                        class="icon-line-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </section><!-- #content end -->


@endsection
