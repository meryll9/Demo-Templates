@extends('layout.main')
@section('content')
    <!-- Content
      ============================================= -->
    <section id="content">
        <div class="content-wrap pb-0">

            <div class="container">

                <div class="row justify-content-center">
                    <div class="col-md-7">
                        <h2 class="display-4 text-dark fw-semibold ls--2 mb-3">Contact Us</h2>
                        <p class="text-dark">Progressively syndicate user-centric schemas without front-end synergy.
                            Monotonectally envisioneer.</p>

                        <div class="form-widget topmargin">

                            <div class="form-result"></div>

                            <form class="mb-0" id="template-contactform" name="template-contactform"
                                action="include/form.php" method="post">

                                <div class="form-process">
                                    <div class="css3-spinner">
                                        <div class="css3-spinner-scaler"></div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-4 form-group">
                                        <label for="template-contactform-name">Name<small
                                                class="text-danger">*</small></label>
                                        <input type="text" id="template-contactform-name" name="template-contactform-name"
                                            value="" class="form-control required" />
                                    </div>

                                    <div class="col-md-4 form-group">
                                        <label for="template-contactform-email">Email<small
                                                class="text-danger">*</small></label>
                                        <input type="email" id="template-contactform-email"
                                            name="template-contactform-email" value=""
                                            class="required email form-control" />
                                    </div>

                                    <div class="col-md-4 form-group">
                                        <label for="template-contactform-phone">Phone<small
                                                class="text-danger">*</small></label>
                                        <input type="text" id="template-contactform-phone" name="template-contactform-phone"
                                            value="" class="required form-control" />
                                    </div>

                                    <div class="w-100"></div>

                                    <div class="col-md-4 form-group">
                                        <label for="template-contactform-company">Company</label>
                                        <input type="text" id="template-contactform-company" name="company" value=""
                                            class="form-control" />
                                    </div>

                                    <div class="col-md-4 form-group">
                                        <label for="template-contactform-workspace">Workspace<small
                                                class="text-danger">*</small></label>
                                        <select id="template-contactform-workspace" name="template-contactform-workspace"
                                            class="required form-control">
                                            <option value="" disabled="disabled" selected>-- Select One --</option>
                                            <option value="Perth">Perth</option>
                                            <option value="Sydney">Sydney</option>
                                            <option value="Melbourne">Melbourne</option>
                                        </select>
                                    </div>

                                    <div class="col-md-4 form-group">
                                        <label for="template-contactform-service">Interested in<small
                                                class="text-danger">*</small></label>
                                        <select id="template-contactform-service" name="template-contactform-service"
                                            class="required form-control">
                                            <option value="" disabled="disabled" selected>-- Select One --</option>
                                            <option value="Day Pass">Day Pass</option>
                                            <option value="Shared Desk">Shared Desk</option>
                                            <option value="Flexible Desk">Flexible Desk</option>
                                            <option value="Private Desk">Private Desk</option>
                                        </select>
                                    </div>

                                    <div class="w-100"></div>

                                    <div class="col-12 form-group">
                                        <label for="template-contactform-message">Message<small
                                                class="text-danger">*</small></label>
                                        <textarea class="required form-control" id="template-contactform-message"
                                            name="template-contactform-message" rows="6" cols="30"></textarea>
                                    </div>

                                    <div class="col-12 form-group d-none">
                                        <input type="text" id="template-contactform-botcheck"
                                            name="template-contactform-botcheck" value="" class="form-control" />
                                    </div>

                                    <div class="col-12 form-group">
                                        <button
                                            class="button button-rounded button-xlarge m-0 center fw-medium nott ls0 fw-normal"
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

            <div class="section mb-0 pb-0 bg-theme-light clearfix" style="padding-top: 120px;">
                <div class="container">
                    <div class="row">
                        <div class="col-md-8 offset-1">
                            <div class="before-heading">Don't Hesitate to Reach out to Us</div>
                            <h2 class="nott fw-semibold display-4">Want to Talk?</h2>
                            <h4 class="fw-light mb-4">Call us at <a href="tel:+(61)8-234-532-45">+(61)8-234-532-45</a></h4>
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
