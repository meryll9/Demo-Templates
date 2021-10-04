@extends('layout.main')
@section('content')
<section id="slider" class="slider-element slider-parallax min-vh-60 min-vh-md-100 include-header">
    <div class="slider-inner" style="background: url({{asset('/applanding/demos/app-landing/images/hero/hero.jpg')}}) center center no-repeat; background-size: cover;">

        <div class="vertical-middle slider-element-fade">
            <div class="container dark py-5 py-md-0">
                <div class="row">
                    <div class="col-lg-6 col-md-8">
                        <div class="emphasis-title">
                            <h1 class="font-body">{{ env('APP_TAGLINE') }}</h1>
                        </div>
                        <a href="#" data-scrollto="#section-pricing" data-easing="easeInOutExpo" data-speed="1250" data-offset="160" class="button button-large button-light text-capitalize" style="border-radius: 23px;">Try it Free</a>
                        <a href="https://www.youtube.com/watch?v=N_r349riLEE" class="hero-action-link" data-lightbox="iframe"><i class="icon-play-sign"></i> Watch the Video</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="video-wrap">
            <div class="video-overlay" style="background: rgba(0,0,0,0.2);"></div>
        </div>

    </div>
</section>

<!-- Content
============================================= -->
<section id="content">
    <div class="content-wrap">

        <!-- Modal -->
        <div class="modal1 mfp-hide" id="modal-login">
            <div class="block mx-auto" style="background-color: #FFF; max-width: 400px;">
                <div style="padding: 50px;">
                    <h3 class="font-body">Login to your Account</h3>
                    <form action="#" method="post" class="row mb-0">
                        <div class="col-12 form-group">
                            <label class="font-body text-capitalize" for="login-form-modal-username">Username:</label>
                            <input type="text" id="login-form-modal-username" name="login-form-modal-username" value="" class="form-control" />
                        </div>

                        <div class="col-12 form-group">
                            <label class="font-body text-capitalize" for="login-form-modal-password">Password:</label>
                            <input type="password" id="login-form-modal-password" name="login-form-modal-password" value="" class="form-control" />
                        </div>

                        <div class="col-12 form-group">
                            <button class="button button-rounded m-0" id="login-form-modal-submit" name="login-form-modal-submit" value="login">Login</button>
                            <a href="#" class="float-end">Forgot Password?</a>
                        </div>
                    </form>
                    <div class="line line-sm"></div>
                    <a href="#" class="button button-rounded w-100 fw-normal center text-capitalize si-facebook si-colored mx-0">Login with Facebook</a>
                    <a href="#" class="button button-rounded w-100 fw-normal center text-capitalize si-gplus si-colored m-0">Login with Google</a>
                </div>
            </div>
        </div>

        <div class="container clearfix">

            <div id="section-nextgen" class="page-section bottommargin-lg">
                <div class="row clearfix">

                    <div class="col-lg-7 center">
                        <img src="{{asset('applanding/demos/app-landing/images/section/iphone-watch.png')}}" alt="NextGen Framework" data-animate="fadeInLeft">
                    </div>

                    <div class="col-lg-5">
                        <div class="topmargin-lg d-none d-lg-block"></div>
                        <img src="{{asset('applanding/demos/app-landing/images/section/section-1-icon.png')}}" alt="Image" style="display: block;" class="bottommargin-sm">
                        <div class="emphasis-title bottommargin-sm">
                            <span class="before-heading">Plug into the</span>
                            <h2 style="font-size: 42px;" class="font-body ls1 fw-normal">NextGen Framework</h2>
                        </div>
                        <p style="color: #777;" class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Praesentium, vel! Eius pariatur nemo expedita.</p>
                        <a href="#" class="section-more-link">Learn More <i class="icon-angle-right"></i></a>
                    </div>

                </div>
            </div>

            <div class="line"></div><div class="clear"></div>

            <div id="section-stunning-graphics" class="page-section topmargin bottommargin-lg">
                <div class="row clearfix">

                    <div class="col-lg-5">
                        <div class="topmargin-lg d-none d-lg-block"></div>
                        <img src="{{asset('applanding/demos/app-landing/images/section/section-2-icon.png')}}" alt="Image" style="display: block;" class="bottommargin-sm">
                        <div class="emphasis-title bottommargin-sm">
                            <span class="before-heading">Retina Ready &#x7E; 534 PPI</span>
                            <h2 style="font-size: 42px;" class="font-body ls1 fw-normal">Stunning Graphics</h2>
                        </div>
                        <p style="color: #777;" class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Praesentium, vel! Eius pariatur nemo expedita.</p>
                        <a href="#" class="section-more-link">Learn More <i class="icon-angle-right"></i></a>
                    </div>

                    <div class="col-lg-7 center">
                        <img src="{{asset('applanding/demos/app-landing/images/section/iphone-nexus.png')}}" alt="Stunning Graphics" data-animate="fadeInRight">
                    </div>

                </div>
            </div>

            <div class="line"></div><div class="clear"></div>

        </div>

        <div id="section-secured-solutions" class="page-section section p-0 topmargin-sm" style="background: url({{asset('/applanding/demos/app-landing/images/section/iphone-3d-bg.png')}}) no-repeat left bottom; background-size: 100% auto;" data-height-xl="700" data-height-lg="700" data-height-md="450" data-height-sm="450" data-height-xs="450">
            <div class="container clearfix">
                <div class="row clearfix">
                    <div class="col-lg-5 offset-lg-6">
                        <div class="topmargin-lg d-none d-lg-block"></div>
                        <div class="topmargin-lg d-none d-lg-block"></div>
                        <img src="{{asset('applanding/demos/app-landing/images/section/section-3-icon.png')}}" alt="Image" style="display: block;" class="bottommargin-sm">
                        <div class="emphasis-title bottommargin-sm">
                            <span class="before-heading">Privacy Protected</span>
                            <h2 style="font-size: 42px;" class="font-body ls1 fw-normal">Secured Solutions</h2>
                        </div>
                        <p style="color: #777;" class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Praesentium, vel! Eius pariatur nemo expedita.</p>
                        <a href="#" class="section-more-link">Learn More <i class="icon-angle-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="video-wrap" style="position: absolute; height: 100%; z-index: 1;">
                <div class="video-overlay d-none d-lg-block" style="background: url({{asset('/applanding/demos/app-landing/images/section/iphone-3d.png')}}) no-repeat left top; background-size: auto 100%;" data-animate="fadeInLeft"></div>
            </div>
        </div>

        <div class="clear bottommargin"></div>

        <div class="container">

            <div id="section-pricing" class="page-section p-0 m-0">

                <div class="pricing-tenure-switcher row align-items-center justify-content-center mb-4" data-container="#pricing-switch">
                    <span class="pts-left fw-bold text-muted col-auto">Monthly</span>
                    <div class="pts-switcher col-auto">
                        <div class="switch">
                            <input id="switch-toggle-pricing-tenure" class="switch-toggle switch-toggle-round" type="checkbox">
                            <label for="switch-toggle-pricing-tenure" class="mb-0"></label>
                        </div>
                    </div>
                    <span class="pts-right fw-bold text-muted col-auto">Yearly</span>
                </div>

                <div id="pricing-switch" class="pricing row col-mb-30 mb-5">

                    <div class="col-lg-4 col-md-6">

                        <div class="pricing-box text-center">
                            <div class="pricing-title text-uppercase">
                                <h3>Starter</h3>
                            </div>
                            <div class="pricing-price">
                                FREE<span class="price-tenure">Limited Access</span>
                            </div>
                            <div class="pricing-features border-0 bg-transparent">
                                <ul>
                                    <li><strong>Full</strong> Access</li>
                                    <li><i class="icon-code"></i> Source Files</li>
                                    <li><strong>100</strong> User Accounts</li>
                                    <li><strong>1 Year</strong> License</li>
                                    <li>Phone &amp; Email Support</li>
                                </ul>
                            </div>
                            <div class="pricing-action">
                                <a href="#modal-get-started" data-lightbox="inline" data-pricing-plan="Starter Plan" class="button button-large button-rounded text-capitalize ls0" style="border-radius: 23px;">Get Started</a>
                            </div>
                        </div>

                    </div>

                    <div class="col-lg-4 col-md-6">

                        <div class="pricing-box text-center">
                            <div class="pricing-title text-uppercase">
                                <h3>Professional</h3>
                            </div>
                            <div class="pricing-price">
                                <div class="pts-switch-content-left"><span class="price-unit">&dollar;</span>12<span class="price-tenure">Monthly</span></div>
                                <div class="pts-switch-content-right"><span class="price-unit">&dollar;</span>99<span class="price-tenure">Yearly</span></div>
                            </div>
                            <div class="pricing-features border-0 bg-transparent">
                                <ul>
                                    <li><strong>Full</strong> Access</li>
                                    <li><i class="icon-code"></i> Source Files</li>
                                    <li><strong>1000</strong> User Accounts</li>
                                    <li><strong>2 Years</strong> License</li>
                                    <li><i class="icon-star3"></i>
                                    <i class="icon-star3"></i>
                                    <i class="icon-star3"></i>
                                    <i class="icon-star3"></i>
                                    <i class="icon-star3"></i></li>
                                </ul>
                            </div>
                            <div class="pricing-action">
                                <div class="pts-switch-content-left"><a href="#modal-get-started" data-lightbox="inline" data-pricing-plan="Professional Monthly Plan" class="button button-large button-rounded text-capitalize ls0" style="border-radius: 23px;">Start Free Trial</a></div>
                                <div class="pts-switch-content-right"><a href="#modal-get-started" data-lightbox="inline" data-pricing-plan="Professional Yearly Plan" class="button button-large button-rounded text-capitalize ls0" style="border-radius: 23px;">Start Free Trial</a></div>
                            </div>
                        </div>

                    </div>

                    <div class="col-lg-4 offset-lg-0 col-md-6 offset-md-3">

                        <div class="pricing-box text-center">
                            <div class="pricing-title text-uppercase">
                                <h3>Business</h3>
                            </div>
                            <div class="pricing-price">
                                <div class="pts-switch-content-left"><span class="price-unit">&dollar;</span>19<span class="price-tenure">Monthly</span></div>
                                <div class="pts-switch-content-right"><span class="price-unit">&dollar;</span>149<span class="price-tenure">Yearly</span></div>
                            </div>
                            <div class="pricing-features border-0 bg-transparent">
                                <ul>
                                    <li><strong>Full</strong> Access</li>
                                    <li><i class="icon-code"></i> Source Files</li>
                                    <li><strong>500</strong> User Accounts</li>
                                    <li><strong>3 Years</strong> License</li>
                                    <li>Phone &amp; Email Support</li>
                                </ul>
                            </div>
                            <div class="pricing-action">
                                <div class="pts-switch-content-left"><a href="#modal-get-started" data-lightbox="inline" data-pricing-plan="Business Monthly Plan" class="button button-large button-rounded text-capitalize ls0" style="border-radius: 23px;">Start Free Trial</a></div>
                                <div class="pts-switch-content-right"><a href="#modal-get-started" data-lightbox="inline" data-pricing-plan="Business Yearly Plan" class="button button-large button-rounded text-capitalize ls0" style="border-radius: 23px;">Start Free Trial</a></div>
                            </div>
                        </div>

                    </div>

                </div>

                <!-- Modal -->
                <div class="modal1 mfp-hide" id="modal-get-started">
                    <div class="block mx-auto" style="background-color: #FFF; max-width: 800px;">
                        <div class="form-widget p-5" data-loader="button">
                            <div class="form-result"></div>
                            <form action="#" id="get-started-form" method="post" class="mb-0">

                                <div class="row clearfix">
                                    <div class="col-md-8">
                                        <h3 class="font-body">Register for an Account</h3>
                                    </div>
                                    <div class="col-md-4">
                                        <div id="modal-get-started-package"></div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6 form-group">
                                        <label class="font-body text-capitalize" for="get-started-form-username">Choose Username:</label>
                                        <input type="text" id="get-started-form-username" name="get-started-form-username" value="" class="form-control required no-error-msg" />
                                    </div>

                                    <div class="col-md-6 form-group">
                                        <label class="font-body text-capitalize" for="get-started-form-email">Your Email:</label>
                                        <input type="email" id="get-started-form-email" name="get-started-form-email" value="" class="form-control required email no-error-msg" />
                                    </div>

                                    <div class="w-100"></div>

                                    <div class="col-md-6 form-group">
                                        <label class="font-body text-capitalize" for="get-started-form-password">Choose Password:</label>
                                        <input type="password" id="get-started-form-password" name="get-started-form-password" value="" class="form-control required no-error-msg" />
                                    </div>

                                    <div class="col-md-6 form-group">
                                        <label class="font-body text-capitalize" for="get-started-form-password">Retype Password:</label>
                                        <input type="password" id="get-started-form-repassword" name="get-started-form-repassword" value="" class="form-control required no-error-msg" />
                                    </div>

                                    <!-- Package Selector Hidden Input Value Setter -->
                                    <input type="hidden" id="get-started-form-package" name="get-started-form-package" value="Free">

                                    <div class="col-12 form-group">
                                        <label>
                                            <input type="checkbox" id="get-started-form-agree" name="get-started-form-agree" value="1" style="position: relative; top: 2px; margin-right: 5px;"> I Agree to the Terms &amp; Conditions
                                        </label>
                                    </div>

                                    <div class="col-12 form-group">
                                        <button class="button button-rounded m-0" id="get-started-form-submit" name="get-started-form-submit" value="login">Get Started</button>
                                        <a href="#" data-scrollto="#section-pricing" data-easing="easeInOutExpo" data-speed="1250" data-offset="160" class="float-end" onClick="$.magnificPopup.close();">Change Plan?</a>
                                    </div>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>

            </div>

            <div class="clear"></div>

            <div id="section-faqs" class="page-section p-0 m-0">

                <h2 class="center font-body bottommargin-lg">Frequently Asked Questions</h2>

                <div class="row topmargin-sm clearfix">

                    <div class="col-lg-5 offset-lg-1 col-md-6 bottommargin-sm">
                        <h4 class="font-body" style="margin-bottom:15px;">How do I become an author?</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda, dolorum, vero ipsum molestiae minima odio quo voluptate illum excepturi quam cum voluptates doloribus quae nisi.</p>
                    </div>
                    <div class="col-lg-5 col-md-6 bottommargin-sm">
                        <h4 class="font-body" style="margin-bottom:15px;">Helpful Resources for Authors</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Explicabo, placeat, architecto rem dolorem dignissimos repellat veritatis in et eos doloribus magnam aliquam ipsa alias assumenda officiis quasi sapiente suscipit.</p>
                    </div>
                    <div class="col-lg-5 offset-lg-1 col-md-6 bottommargin-sm">
                        <h4 class="font-body" style="margin-bottom:15px;">How much money can I make?</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Possimus, fugiat iste nisi tempore nesciunt nemo fuga? Nesciunt, delectus laboriosam nisi repudiandae nam fuga saepe animi recusandae.</p>
                    </div>
                    <div class="col-lg-5 col-md-6 bottommargin-sm">
                        <h4 class="font-body" style="margin-bottom:15px;">Can I offer my items for free on a promotional basis?</h4>
                        <p>Laboriosam iusto quia nulla ad voluptatibus iste beatae voluptas corrupti facilis accusamus recusandae sequi debitis reprehenderit quibusdam. Facilis eligendi a exercitationem nisi et placeat excepturi velit!</p>
                    </div>
                    <div class="col-lg-5 offset-lg-1 col-md-6 bottommargin-sm">
                        <h4 class="font-body" style="margin-bottom:15px;">An Introduction to the Marketplaces for Authors</h4>
                        <p>Quisquam atque vero delectus corrupti! Quo, maiores, dolorem, hic commodi nulla ratione accusamus doloribus fuga magnam id temporibus dignissimos deleniti quidem ipsam corporis sapiente nam expedita saepe quas ab? Vero, assumenda.</p>
                    </div>
                    <div class="col-lg-5 col-md-6">
                        <h4 class="font-body" style="margin-bottom:15px;">How does the Tuts+ Premium affiliate program work?</h4>
                        <p class="mb-0">Reprehenderit similique nemo voluptate ullam natus illum magnam alias nobis doloremque delectus ipsa dicta repellat maxime dignissimos eveniet quae debitis ratione assumenda tempore officiis fugiat dolor.</p>
                    </div>

                </div>

            </div>

        </div>

        <div class="section bottommargin-lg" style="background-color: #F8FAFB; border-top: 1px solid #E5E5E5; border-bottom: 1px solid #E5E5E5;">

            <div class="fslider testimonial testimonial-full bg-transparent border-0 shadow-none" data-animation="fade" style="max-width: none;">
                <div class="flexslider">
                    <div class="slider-wrap mx-auto" style="max-width: 650px;">
                        <div class="slide">
                            <div class="testi-image">
                                <a href="#"><img src="{{asset('applanding/images/testimonials/3.jpg')}}" alt="Customer Testimonails"></a>
                            </div>
                            <div class="testi-content">
                                <p>Similique fugit repellendus expedita excepturi iure provident quia eaque. Repellendus, vero numquam?</p>
                                <div class="testi-meta">
                                    Steve Jobs
                                    <span>Apple Inc.</span>
                                </div>
                            </div>
                        </div>
                        <div class="slide">
                            <div class="testi-image">
                                <a href="#"><img src="{{asset('applanding/images/testimonials/2.jpg')}}" alt="Customer Testimonails"></a>
                            </div>
                            <div class="testi-content">
                                <p>Natus voluptatum enim quod necessitatibus quis expedita harum provident eos obcaecati id culpa corporis molestias.</p>
                                <div class="testi-meta">
                                    Collis Ta'eed
                                    <span>Envato Inc.</span>
                                </div>
                            </div>
                        </div>
                        <div class="slide">
                            <div class="testi-image">
                                <a href="#"><img src="{{asset('applanding/images/testimonials/1.jpg')}}" alt="Customer Testimonails"></a>
                            </div>
                            <div class="testi-content">
                                <p>Incidunt deleniti blanditiis quas aperiam recusandae consequatur ullam quibusdam cum libero illo rerum!</p>
                                <div class="testi-meta">
                                    John Doe
                                    <span>XYZ Inc.</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <div class="clear"></div>

        <div id="section-gallery" class="page-section p-0 m-0">

            <div class="container topmargin bottommargin-lg center clearfix">

                <h3 class="ls1 fw-normal" style="font-size: 32px; margin-bottom: 10px;">App Screenshots</h3>
                <p class="lead mx-auto" style="max-width: 600px">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Id, repellendus quae fuga ad, beatae odit.</p>
                <a href="#" class="button button-circle text-capitalize">Check All</a>

            </div>

            <div class="owl-carousel owl-carousel-full image-carousel carousel-widget bottommargin" data-margin="20" data-center="true" data-loop="false" data-nav="false" data-pagi="true" data-items-xs="2" data-items-sm="2" data-items-md="4" data-items-lg="4" data-items-xl="6" data-stage-padding="30" data-lightbox="gallery">

                <div class="oc-item">
                    <a data-lightbox="gallery-item" href="demos/app-landing/images/gallery/img-1.jpg')}}"><img src="{{asset('applanding/demos/app-landing/images/gallery/img-1.jpg')}}" alt="Image 1"></a>
                </div>
                <div class="oc-item">
                    <a data-lightbox="gallery-item" href="demos/app-landing/images/gallery/img-2.jpg')}}"><img src="{{asset('applanding/demos/app-landing/images/gallery/img-2.jpg')}}" alt="Image 2"></a>
                </div>
                <div class="oc-item">
                    <a data-lightbox="gallery-item" href="demos/app-landing/images/gallery/img-3.jpg')}}"><img src="{{asset('applanding/demos/app-landing/images/gallery/img-3.jpg')}}" alt="Image 3"></a>
                </div>
                <div class="oc-item">
                    <a data-lightbox="gallery-item" href="demos/app-landing/images/gallery/img-4.jpg')}}"><img src="{{asset('applanding/demos/app-landing/images/gallery/img-4.jpg')}}" alt="Image 4"></a>
                </div>
                <div class="oc-item">
                    <a data-lightbox="gallery-item" href="demos/app-landing/images/gallery/img-5.jpg')}}"><img src="{{asset('applanding/demos/app-landing/images/gallery/img-5.jpg')}}" alt="Image 5"></a>
                </div>
                <div class="oc-item">
                    <a data-lightbox="gallery-item" href="demos/app-landing/images/gallery/img-6.jpg')}}"><img src="{{asset('applanding/demos/app-landing/images/gallery/img-6.jpg')}}" alt="Image 5"></a>
                </div>
                <div class="oc-item">
                    <a data-lightbox="gallery-item" href="demos/app-landing/images/gallery/img-7.jpg')}}"><img src="{{asset('applanding/demos/app-landing/images/gallery/img-7.jpg')}}" alt="Image 5"></a>
                </div>

            </div>

        </div>

        <div class="clear"></div>

        <!-- <div class="section m-0">
            <div class="container clearfix">

                <h2></h2>

            </div>
        </div> -->

        <div class="section" style="padding: 30px 0; color: #999; background-color: #F8FAFB; border-top: 1px solid #E5E5E5; border-bottom: 1px solid #E5E5E5;">
            <div class="container clearfix">
                <div class="row topmargin-lg clearfix">

                    <div class="col-lg-4 bottommargin">
                        <i class="i-plain i-large icon-et-browser inline-block" style="margin-bottom: 30px; color: #999;"></i>
                        <div class="heading-block border-bottom-0" style="margin-bottom: 15px;">
                            <h4 style="font-size: 16px;">Cross Browser</h4>
                        </div>
                        <p style="line-height: 26px;">Canvas 4 Loads Faster &amp; Smoother than the Previous Versions providing an Optimal Experience for your Users.</p>
                    </div>

                    <div class="col-lg-4 bottommargin">
                        <i class="i-plain i-large icon-et-adjustments inline-block" style="margin-bottom: 30px; color: #999;"></i>
                        <div class="heading-block border-bottom-0" style="margin-bottom: 15px;">
                            <h4 style="font-size: 16px;">Flexible Options</h4>
                        </div>
                        <p style="line-height: 26px;">Unleash the Power of Mega Menus by adding Widgets &amp; Mixed Columns powered by the Bootstrap Grid.</p>
                    </div>

                    <div class="col-lg-4 bottommargin">
                        <i class="i-plain i-large icon-et-calendar inline-block" style="margin-bottom: 30px; color: #999;"></i>
                        <div class="heading-block border-bottom-0" style="margin-bottom: 15px;">
                            <h4 style="font-size: 16px;">Scheduled Backups</h4>
                        </div>
                        <p style="line-height: 26px;">Amazing set of New Components giving you Opportunity to Create an Interactive Website for your Business.</p>
                    </div>

                    <div class="col-lg-4 bottommargin">
                        <i class="i-plain i-large icon-et-desktop inline-block" style="margin-bottom: 30px; color: #999;"></i>
                        <div class="heading-block border-bottom-0" style="margin-bottom: 15px;">
                            <h4 style="font-size: 16px;">Responsive Ready</h4>
                        </div>
                        <p style="line-height: 26px;">Convert any Grid to an Isotope Grid easily with Filterable Options making it extremely flexible and powerful.</p>
                    </div>

                    <div class="col-lg-4 bottommargin">
                        <i class="i-plain i-large icon-et-bargraph inline-block" style="margin-bottom: 30px; color: #999;"></i>
                        <div class="heading-block border-bottom-0" style="margin-bottom: 15px;">
                            <h4 style="font-size: 16px;">Increased Conversions</h4>
                        </div>
                        <p style="line-height: 26px;">Display an Alternate Lighter Menu on Responsive Devices with the same Markup Code as before. Awesomely Useful.</p>
                    </div>

                    <div class="col-lg-4 bottommargin">
                        <i class="i-plain i-large icon-et-cloud inline-block" style="margin-bottom: 30px; color: #999;"></i>
                        <div class="heading-block border-bottom-0" style="margin-bottom: 15px;">
                            <h4 style="font-size: 16px;">Cloud Sharing</h4>
                        </div>
                        <p style="line-height: 26px;">Added SPAM Protection for your Precious Forms so that you receive Emails only from Authentic Real Users.</p>
                    </div>

                </div>
            </div>
        </div>

        <div class="section center mb-0 bg-transparent">
            <div class="container clearfix">

                <h3 class="ls1 fw-normal" style="font-size: 32px;">Experienced &amp; Trusted by <span>50,000+</span> People worldwide</h3>
                <a href="#modal-login" data-lightbox="inline" class="button button-large button-black text-capitalize" style="border-radius: 23px;">Login Now</a>
                <a href="#" data-scrollto="#section-pricing" data-easing="easeInOutExpo" data-speed="1250" data-offset="160" class="button button-large text-capitalize" style="border-radius: 23px;">Try it Free</a>

                <div class="clear bottommargin"></div>

            </div>
        </div>

        <div class="section mt-0 footer-stick" style="padding: 10px 0; background-color: #F8FAFB; border-top: 1px solid #E5E5E5;">
            <div class="container clearfix">

                <div class="row clearfix">
                    <div class="col-lg-4">
                        <div class="app-footer-features"><i class="icon-line2-globe-alt"></i><h5 class="font-body"><a href="#">Free Training</a><span> &amp; 24-hour coverage</span></h5></div>
                    </div>
                    <div class="col-lg-4">
                        <div class="app-footer-features"><i class="icon-line2-notebook"></i><h5 class="font-body"><a href="#">99.99% Uptime</a><span> the last 12 months</span></h5></div>
                    </div>
                    <div class="col-lg-4">
                        <div class="app-footer-features"><i class="icon-line2-lock"></i><h5 class="font-body"><span>Serious about</span> <a href="#">Security</a> <span>&amp;</span> <a href="#">Privacy</a></h5></div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section><!-- #content end -->
@endsection
