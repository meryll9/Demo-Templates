@extends('layout.main')
@section('content')
    <!-- Content
      ============================================= -->
    <section id="content">
        <div class="content-wrap py-0">
            <div class="section section-contact my-0" style="background: #ECEEED; padding: 100px 0;">
                <div class="container">
                    <div class="row gutter-50">
                        <div class="col-xl-4 col-md-4">
                            <h2 class="h2 mb-4 fw-semibold">Contact Us</h2>
                            <p class="text-black-50">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Mollitia
                                aperiam, labore cum ullam, optio ducimus provident corrupti placeat veritatis.</p>
                            <a href="mailto:no.reply@semicolonweb.com" class="button button-rounded ms-0">Email Us</a>
                        </div>

                        <div class="col-xl-3 col-md-4">
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
                                        <div class="col-12 form-group">
                                            <label for="template-contactform-name">Name <small>*</small></label>
                                            <input type="text" id="template-contactform-name"
                                                name="template-contactform-name" value="" class="form-control required" />
                                        </div>

                                        <div class="col-12 form-group">
                                            <label for="template-contactform-email">Email <small>*</small></label>
                                            <input type="email" id="template-contactform-email"
                                                name="template-contactform-email" value=""
                                                class="required email form-control" />
                                        </div>

                                        <div class="col-12 form-group">
                                            <label for="template-contactform-message">Message <small>*</small></label>
                                            <textarea class="required form-control" id="template-contactform-message"
                                                name="template-contactform-message" rows="4" cols="30"></textarea>
                                        </div>

                                        <div class="col-12 form-group d-none">
                                            <input type="text" id="template-contactform-botcheck"
                                                name="template-contactform-botcheck" value="" class="form-control" />
                                        </div>

                                        <div class="col-12 form-group">
                                            <button class="button button-rounded button-small float-end m-0" type="submit"
                                                id="template-contactform-submit" name="template-contactform-submit"
                                                value="submit">Send Message</button>
                                        </div>
                                    </div>

                                    <input type="hidden" name="prefix" value="template-contactform-">

                                </form>
                            </div>
                        </div>

                        <div class="col-xl-3 col-md-4">
                            <div class="feature-box fbox-plain bottommargin-sm fbox-sm">
                                <div class="fbox-icon mt-1">
                                    <i class="icon-line-map-pin"></i>
                                </div>
                                <div class="fbox-content">
                                    <h3 class="fw-normal nott mb-2">Address</h3>
                                    <address class="font-body text-black-50 mb-0">
                                        795 Folsom Ave, Suite 600<br>
                                        San Francisco, CA 94107<br>
                                    </address>
                                </div>
                            </div>
                            <div class="feature-box fbox-plain bottommargin-sm fbox-sm">
                                <div class="fbox-icon mt-1">
                                    <i class="icon-line-phone-call"></i>
                                </div>
                                <div class="fbox-content">
                                    <h3 class="fw-normal nott mb-2">Call:</h3>
                                    <a href="tel:+01273123456">+111 22-33-44</a>
                                </div>
                            </div>
                            <div class="feature-box fbox-plain bottommargin-sm fbox-sm">
                                <div class="fbox-icon mt-1">
                                    <i class="icon-line-mail"></i>
                                </div>
                                <div class="fbox-content">
                                    <h3 class="fw-normal nott mb-2">Mail:</h3>
                                    <a href="mailto:no.reply@semicolonweb.com">no.reply@semicolonweb.com</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="bg-overlay d-none d-md-block"
                    style="background: #ECEEED url({{asset('/yoga/demos/yoga/images/contact.jpg')}}) no-repeat center right; background-size: cover; z-index: 0;">
                </div>
            </div>

        </div>

    </section><!-- #content end -->
@endsection
