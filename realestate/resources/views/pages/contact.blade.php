@extends('layout.main')

@section('content')
    <!-- Page Title
      ============================================= -->
    <section id="page-title" class="page-title-parallax page-title-dark page-title-center include-header include-topbar"
        style="no-repeat center center / cover; padding: 160px 0; background-image: url({{ asset('/realestate/demos/real-estate/images/contact/page-title.jpg')}} "
        data-center="background-position: 0px 50%;" data-top-bottom="background-position:0px 0%;">

        <div class="container clearfix">
            <h1>Contact</h1>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item"><a href="#">Real Estate</a></li>
                <li class="breadcrumb-item active">Contact</li>
            </ol>
        </div>

        <div class="video-wrap" style="position: absolute; top: 0; left: 0; height: 100%; z-index:1;">
            <div class="video-overlay" style="background: rgba(0,0,0,0.6);"></div>
        </div>

    </section><!-- #page-title end -->

    <!-- Content
      ============================================= -->
    <section id="content">
        <div class="content-wrap">
            <div class="container clearfix">

                <div style="position: relative;">
                    <img src="{{asset('realestate/demos/real-estate/images/contact/1.jpg')}}" alt="Image" class="contact-image">
                    <div class="contact-section dark bg-color">
                        <div class="p-5 p-lg-0" style="font-size: 15px; line-height: 1.7;">
                            <address style="line-height: 1.7;">
                                <span class="fw-light">Address:</span><br>
                                <span class="h6 text-white ls1 fw-normal">
                                    North America<br>
                                    795 Folsom Ave, Suite 600<br>
                                    San Francisco, CA 94107.
                                </span>
                            </address>
                            <span class="fw-light">Phone Number:</span><br>
                            <a href="tel:(1)(8547)632521" class="h6 text-white ls1 fw-normal">(1) 8547 632521</a><br><br>

                            <span class="fw-light">Email:</span><br>
                            <a href="mailto:no-reply@semicolonweb.com?Subject=Hello%20again"
                                class="h6 text-white ls1 fw-normal">no-reply@semicolonweb.com</a>
                        </div>
                    </div>
                </div>
                <div class="clear topmargin"></div>

                <div class="row align-items-stretch mx-0 topmargin-lg" style="box-shadow: 0 0 40px rgba(0,0,0,.06)">
                    <div class="col-md-6 px-0 min-vh-25">
                        <div class="gmap h-100" data-address="New York, USA" data-maptype="ROADMAP" data-zoom="11"
                            data-markers='[{ address: "New York, USA", html: "New York, USA", icon:{ image: "images/icons/map-icon-red.png", iconsize: [32, 36], iconanchor: [14,44] } }]'
                            data-styles='[{"featureType":"administrative","elementType":"labels.text.fill","stylers":[{"color":"#444444"}]},{"featureType":"landscape","elementType":"all","stylers":[{"color":"#f2f2f2"}]},{"featureType":"poi","elementType":"all","stylers":[{"visibility":"off"}]},{"featureType":"road","elementType":"all","stylers":[{"color":"#F0AD4E"},{"lightness":60}]},{"featureType":"road.highway","elementType":"all","stylers":[{"visibility":"simplified"}]},{"featureType":"road.arterial","elementType":"labels.icon","stylers":[{"visibility":"off"}]},{"featureType":"transit","elementType":"all","stylers":[{"visibility":"off"}]},{"featureType":"water","elementType":"all","stylers":[{"color":"#2C3E50"},{"visibility":"on"}]}]'>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="col-padding">
                            <div class="quick-contact-widget form-widget clearfix">

                                <h3 class="text-capitalize ls1 fw-normal">Contact Us</h3>

                                <div class="form-result"></div>

                                <form id="quick-contact-form" name="quick-contact-form" action="include/form.php"
                                    method="post" class="quick-contact-form mb-0">

                                    <div class="form-process">
                                        <div class="css3-spinner">
                                            <div class="css3-spinner-scaler"></div>
                                        </div>
                                    </div>

                                    <input type="text" class="required sm-form-control input-block-level not-dark"
                                        id="quick-contact-form-name" name="quick-contact-form-name" value=""
                                        placeholder="Full Name" />

                                    <input type="email" class="required sm-form-control email input-block-level not-dark"
                                        id="quick-contact-form-email" name="quick-contact-form-email" value=""
                                        placeholder="Email Address" />

                                    <input type="text" class="required sm-form-control input-block-level not-dark"
                                        id="quick-contact-form-phone" name="quick-contact-form-phone" value=""
                                        placeholder="Phone Number (+1-555-2221)" />

                                    <textarea class="required sm-form-control input-block-level not-dark short-textarea"
                                        id="quick-contact-form-message" name="quick-contact-form-message" rows="5" cols="30"
                                        placeholder="What are you Looking for? (Ex: Villa on the Beach)"></textarea>

                                    <input type="text" class="d-none" id="quick-contact-form-botcheck"
                                        name="quick-contact-form-botcheck" value="" />
                                    <input type="hidden" name="prefix" value="quick-contact-form-">

                                    <button type="submit" id="quick-contact-form-submit" name="quick-contact-form-submit"
                                        class="button button-small button-rounded m-0" value="submit">Send Email</button>

                                </form>

                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div><!-- .content-wrap end -->
    </section><!-- #content end -->
@endsection
