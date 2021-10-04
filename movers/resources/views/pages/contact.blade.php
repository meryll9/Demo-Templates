@extends('layout.main')
@section('content')
    <!-- Page Title
      ============================================= -->
    <section id="page-title" class="bg-color page-title-dark py-6">

        <div class="container clearfix">
            <h1>Contact Us</h1>
            <span>Get In Touch</span>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item"><a href="#">Movers</a></li>
                <li class="breadcrumb-item active" aria-current="page">Contact</li>
            </ol>
        </div>

    </section><!-- #page-title end -->

    <!-- Content
      ============================================= -->
    <section id="content">

        <div class="content-wrap pb-0">

            <div class="container mb-5">
                <div class="row justify-content-between">
                    <div class="col-lg-4 mb-5 mb-lg-0">
                        <h3>Send us an Email</h3>

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
                                        <input type="text" id="template-contactform-name" name="template-contactform-name"
                                            value="" class="form-control required" />
                                    </div>

                                    <div class="col-12 form-group">
                                        <label for="template-contactform-email">Email <small>*</small></label>
                                        <input type="email" id="template-contactform-email"
                                            name="template-contactform-email" value=""
                                            class="required email form-control" />
                                    </div>

                                    <div class="col-12 form-group">
                                        <label for="template-contactform-phone">Phone</label>
                                        <input type="text" id="template-contactform-phone" name="template-contactform-phone"
                                            value="" class="form-control" />
                                    </div>

                                    <div class="col-12 form-group">
                                        <label for="template-contactform-service">Services</label>
                                        <select id="template-contactform-service" name="template-contactform-service"
                                            class="form-select">
                                            <option value="">-- Select One --</option>
                                            <option value="Office Moving">Office Moving</option>
                                            <option value="Home Moving">Home Moving</option>
                                            <option value="Internation Moving">Internation Moving</option>
                                            <option value="Pet Moving">Pet Moving</option>
                                        </select>
                                    </div>

                                    <div class="col-12 form-group">
                                        <label for="template-contactform-message">Message <small>*</small></label>
                                        <textarea class="required form-control" id="template-contactform-message"
                                            name="template-contactform-message" rows="6" cols="30"></textarea>
                                    </div>

                                    <div class="col-12 form-group d-none">
                                        <input type="text" id="template-contactform-botcheck"
                                            name="template-contactform-botcheck" value="" class="form-control" />
                                    </div>

                                    <div class="col-12 form-group">
                                        <button class="button button-rounded m-0 w-100 button-large" type="submit"
                                            id="template-contactform-submit" name="template-contactform-submit"
                                            value="submit">Send Message</button>
                                    </div>
                                </div>

                                <input type="hidden" name="prefix" value="template-contactform-">

                            </form>
                        </div>
                    </div>
                    <div class="col-lg-7">
                        <h3>Contact Us</h3>
                        <div class="row">
                            <div class="col-md-4 col-6 text-smaller">
                                <h5 class="fw-semibold mb-2">Melborne Headquaters:</h5>
                                <address class="mb-2">
                                    795 Folsom Ave, Suite 600<br>
                                    San Francisco, CA 94107<br>
                                </address>
                                Phone: <a href="#" class="text-dark">+111 22-33-44</a><br>
                                Fax: <a href="#" class="text-dark">+111 22-33-44</a><br>
                                Email: <a href="#" class="text-dark">info@canvas.com</a>
                            </div>
                            <div class="col-md-4 col-6 text-smaller">
                                <h5 class="fw-semibold mb-2">London Headquaters:</h5>
                                <address class="mb-2">
                                    795 Folsom Ave, Suite 600<br>
                                    San Francisco, CA 94107<br>
                                </address>
                                Phone: <a href="#" class="text-dark">+111 22-33-44</a><br>
                                Fax: <a href="#" class="text-dark">+111 22-33-44</a><br>
                                Email: <a href="#" class="text-dark">info@canvas.com</a>
                            </div>
                            <div class="col-md-4 col-6 text-smaller mt-5 mt-md-0">
                                <h5 class="fw-semibold mb-2">Warehouse:</h5>
                                <address class="mb-2">
                                    795 Folsom Ave, Suite 600<br>
                                    San Francisco, CA 94107<br>
                                </address>
                                Phone: <a href="#" class="text-dark">+111 22-33-44</a><br>
                                Fax: <a href="#" class="text-dark">+111 22-33-44</a><br>
                                Email: <a href="#" class="text-dark">info@canvas.com</a>
                            </div>
                        </div>
                        <div class="line my-5"></div>
                        <h4>Global Offices:</h4>
                        <div class="row">
                            <div class="col-md-4 col-6 text-smaller mb-5">
                                <h5 class="fw-semibold mb-2">Singapore:</h5>
                                <address class="mb-2">
                                    795 Folsom Ave, Suite 600<br>
                                    San Francisco, CA 94107<br>
                                </address>
                                Phone: <a href="#" class="text-dark">+111 22-33-44</a><br>
                                Fax: <a href="#" class="text-dark">+111 22-33-44</a><br>
                                Email: <a href="#" class="text-dark">info@canvas.com</a>
                            </div>
                            <div class="col-md-4 col-6 text-smaller mb-5">
                                <h5 class="fw-semibold mb-2">France:</h5>
                                <address class="mb-2">
                                    795 Folsom Ave, Suite 600<br>
                                    San Francisco, CA 94107<br>
                                </address>
                                Phone: <a href="#" class="text-dark">+111 22-33-44</a><br>
                                Fax: <a href="#" class="text-dark">+111 22-33-44</a><br>
                                Email: <a href="#" class="text-dark">info@canvas.com</a>
                            </div>
                            <div class="col-md-4 col-6 text-smaller mb-5">
                                <h5 class="fw-semibold mb-2">USA:</h5>
                                <address class="mb-2">
                                    795 Folsom Ave, Suite 600<br>
                                    San Francisco, CA 94107<br>
                                </address>
                                Phone: <a href="#" class="text-dark">+111 22-33-44</a><br>
                                Fax: <a href="#" class="text-dark">+111 22-33-44</a><br>
                                Email: <a href="#" class="text-dark">info@canvas.com</a>
                            </div>
                            <div class="col-md-4 col-6 text-smaller mb-5">
                                <h5 class="fw-semibold mb-2">India:</h5>
                                <address class="mb-2">
                                    795 Folsom Ave, Suite 600<br>
                                    San Francisco, CA 94107<br>
                                </address>
                                Phone: <a href="#" class="text-dark">+111 22-33-44</a><br>
                                Fax: <a href="#" class="text-dark">+111 22-33-44</a><br>
                                Email: <a href="#" class="text-dark">info@canvas.com</a>
                            </div>
                            <div class="col-md-4 col-6 text-smaller mb-5">
                                <h5 class="fw-semibold mb-2">Thailand:</h5>
                                <address class="mb-2">
                                    795 Folsom Ave, Suite 600<br>
                                    San Francisco, CA 94107<br>
                                </address>
                                Phone: <a href="#" class="text-dark">+111 22-33-44</a><br>
                                Fax: <a href="#" class="text-dark">+111 22-33-44</a><br>
                                Email: <a href="#" class="text-dark">info@canvas.com</a>
                            </div>
                            <div class="col-md-4 col-6 text-smaller">
                                <h5 class="fw-semibold mb-2">Germany:</h5>
                                <address class="mb-2">
                                    795 Folsom Ave, Suite 600<br>
                                    San Francisco, CA 94107<br>
                                </address>
                                Phone: <a href="#" class="text-dark">+111 22-33-44</a><br>
                                Fax: <a href="#" class="text-dark">+111 22-33-44</a><br>
                                Email: <a href="#" class="text-dark">info@canvas.com</a>
                            </div>
                            <div class="col-md-4 col-6 text-smaller">
                                <h5 class="fw-semibold mb-2">Hongkong:</h5>
                                <address class="mb-2">
                                    795 Folsom Ave, Suite 600<br>
                                    San Francisco, CA 94107<br>
                                </address>
                                Phone: <a href="#" class="text-dark">+111 22-33-44</a><br>
                                Fax: <a href="#" class="text-dark">+111 22-33-44</a><br>
                                Email: <a href="#" class="text-dark">info@canvas.com</a>
                            </div>
                            <div class="col-md-4 col-6 text-smaller">
                                <h5 class="fw-semibold mb-2">Indonesia:</h5>
                                <address class="mb-2">
                                    795 Folsom Ave, Suite 600<br>
                                    San Francisco, CA 94107<br>
                                </address>
                                Phone: <a href="#" class="text-dark">+111 22-33-44</a><br>
                                Fax: <a href="#" class="text-dark">+111 22-33-44</a><br>
                                Email: <a href="#" class="text-dark">info@canvas.com</a>
                            </div>
                            <div class="col-md-4 col-6 text-smaller">
                                <h5 class="fw-semibold mb-2">China:</h5>
                                <address class="mb-2">
                                    795 Folsom Ave, Suite 600<br>
                                    San Francisco, CA 94107<br>
                                </address>
                                Phone: <a href="#" class="text-dark">+111 22-33-44</a><br>
                                Fax: <a href="#" class="text-dark">+111 22-33-44</a><br>
                                Email: <a href="#" class="text-dark">info@canvas.com</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="clear"></div>


            <div class="section dark pt-0 mb-0 bg-color"
                style="background: url({{asset('/movers/demos/movers/images/bg-2.png')}}) no-repeat center bottom / 100%; overflow: visible">
                <svg viewBox="0 0 1960 206.8" class="bg-white">
                    <path class="svg-themecolor" style="opacity:0.2;"
                        d="M0,142.8A2337.49,2337.49,0,0,1,297.5,56.3C569.33-3.53,783.89.22,849.5,2.3c215.78,6.86,382.12,45.39,503.25,73.45,158.87,36.8,283.09,79.13,458.75,54.55A816.49,816.49,0,0,0,1983,86.8v110H0Z" />
                    <path class="svg-themecolor" d="M.5,152.8s498-177,849-150,1031,238,1134,94v110H.5Z" />
                </svg>
                <div class="container">
                    <div class="row align-items-center justify-content-center center my-4">

                        <div class="col-sm-8">
                            <div class="heading-block border-bottom-0 mb-4">
                                <h2 class="fw-semibold ls0 nott mb-3" style="font-size: 44px; line-height: 1.3">Contact Our
                                    Movers Specialist</h2>
                                <p>Phosfluorescently develop customized relationships vis-a-vis B2C infomediaries.</p>
                            </div>
                            <a href="demo-movers-contact.html"
                                class="button button-white button-light button-rounded fw-medium m-0">Get In Touch</a>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section><!-- #content end -->

@endsection
