@extends('layout.main')
@section('content')
    <!-- Slider
      ============================================= -->
    <section id="slider" class="slider-element dark min-vh-25 min-vh-md-50 include-header py-5"
        style="background-image: url({{asset('/landing/demos/landing/images/hero/1.svg')}});">
        <div class="slider-inner">

            <div class="vertical-middle text-center">
                <div class="container">
                    <div class="row align-items-center justify-content-center">

                        <div class="col-lg-6 col-md-6">
                            <h2 class="display-3 fw-bold text-white mb-2">Contact Us</h2>
                            <p class="lead mb-0 fw-normal">Best Wallet App for your upcoming Projects.</p>
                        </div>

                    </div>
                </div>
            </div>

        </div>
    </section><!-- #slider end -->

    <!-- Content
      ============================================= -->
    <section id="content">
        <div class="content-wrap">

            <div class="section bg-transparent mt-0">
                <div class="container">
                    <div class="row justify-content-between col-mb-50">
                        <div class="col-lg-5">
                            <div class="text-nowrap dotted-bg dotted-bg-dark">
                                <h2 class="nott mb-3 display-3 fw-bold">We're truly Yours</h2>
                                <p class="fw-normal text-black-50">Recusandae ducimus, sequi, sapiente possimus optio
                                    impedit <br> efficient services. Completely promote.</p>
                            </div>

                            <div class="clear"></div>

                            <div class="my-5">
                                <address>
                                    <strong>Headquarters:</strong><br>
                                    795 Folsom Ave, Suite 600<br>
                                    San Francisco, CA 94107<br>
                                </address>
                                <abbr title="Phone Number"><strong>Phone:</strong></abbr> (1) 8547 632521<br>
                                <abbr title="Email Address"><strong>Email:</strong></abbr> info@canvas.com
                            </div>

                            <div class="d-flex mt-4">
                                <a href="#" class="social-icon si-colored si-facebook" title="Facebook">
                                    <i class="icon-facebook"></i>
                                    <i class="icon-facebook"></i>
                                </a>

                                <a href="#" class="social-icon si-colored si-instagram" title="Instagram">
                                    <i class="icon-instagram"></i>
                                    <i class="icon-instagram"></i>
                                </a>

                                <a href="#" class="social-icon si-colored si-twitter" title="Twitter">
                                    <i class="icon-twitter"></i>
                                    <i class="icon-twitter"></i>
                                </a>

                                <a href="#" class="social-icon si-colored si-appstore" title="Apple">
                                    <i class="icon-apple"></i>
                                    <i class="icon-apple"></i>
                                </a>

                                <a href="#" class="social-icon si-colored si-android" title="Android">
                                    <i class="icon-android"></i>
                                    <i class="icon-android"></i>
                                </a>

                            </div>
                        </div>
                        <div class="col-lg-7">
                            <img src="https://source.unsplash.com/wawEfYdpkag" alt="Office Image">
                        </div>
                    </div>
                </div>
            </div>

            <div class="section bg-color"
                style="background-image: linear-gradient(to bottom, #3D80E4 0%, #0a4bab 50%, #FFF 50%);">
                <div class="container clearfix">
                    <div class="row mx-auto dotted-bg" style="max-width: 740px">
                        <div class="col-md-12">
                            <div class="center dark mb-5">
                                <i class="icon-line-help h1 "></i>
                                <h2 class="fw-bold mb-2">Need Help?</h2>
                                <p class="fw-normal mb-2 lead">Enthusiastically morph unique web-readiness via impactful
                                    platforms.</p>
                            </div>

                            <div class="card bg-white shadow-lg border-0">
                                <div class="card-body p-5">
                                    <div class="form-widget" data-loader="button" data-alert-type="inline">

                                        <div class="form-result"></div>

                                        <form class="row mb-0" id="landing-enquiry" action="include/form.php"
                                            method="post" enctype="multipart/form-data">
                                            <div class="form-process"></div>
                                            <div class="col-12 form-group mb-4">
                                                <label>Name:</label>
                                                <input type="text" name="landing-enquiry-name" id="landing-enquiry-name"
                                                    class="form-control form-control-lg required" value=""
                                                    placeholder="John Doe">
                                            </div>
                                            <div class="col-12 form-group mb-4">
                                                <label>Email:</label>
                                                <input type="email" name="landing-enquiry-email" id="landing-enquiry-email"
                                                    class="form-control form-control-lg required" value=""
                                                    placeholder="user@company.com">
                                            </div>
                                            <div class="col-12 form-group mb-4">
                                                <label>Phone:</label><br>
                                                <div class="input-group input-group-lg">
                                                    <select class="form-select required" name="landing-enquiry-idd"
                                                        id="landing-enquiry-idd" style="max-width: 100px;">
                                                        <option value="+1">+1</option>
                                                        <option value="+44">+44</option>
                                                        <option value="+66">+66</option>
                                                        <option value="+62">+62</option>
                                                        <option value="+61">+61</option>
                                                        <option value="+852">+852</option>
                                                        <option value="+65">+61</option>
                                                        <option value="+33">+61</option>
                                                        <option value="+49">+49</option>
                                                    </select>
                                                    <input type="text" name="landing-enquiry-phone"
                                                        id="landing-enquiry-phone"
                                                        class="form-control form-control-lg required" value=""
                                                        placeholder="02-232-2424">
                                                </div>
                                            </div>
                                            <div class="col-12 form-group mb-4">
                                                <label>Message:</label>
                                                <textarea name="landing-enquiry-additional-requirements"
                                                    id="landing-enquiry-additional-requirements"
                                                    class="form-control form-control-lg" cols="30" rows="5"
                                                    placeholder="Please let us know how we can help you..."></textarea>
                                            </div>
                                            <div class="col-12 d-none">
                                                <input type="text" id="landing-enquiry-botcheck"
                                                    name="landing-enquiry-botcheck" value="" />
                                            </div>
                                            <div class="col-12">
                                                <button type="submit" name="landing-enquiry-submit"
                                                    class="btn w-100 text-white bg-color rounded-3 py-3 fw-semibold text-uppercase mt-2">Contact
                                                    Us</button>
                                            </div>

                                            <input type="hidden" name="prefix" value="landing-enquiry-">
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section><!-- #content end -->


@endsection
