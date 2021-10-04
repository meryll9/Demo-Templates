<!-- Top Bar
  ============================================= -->
<div id="top-bar">
    <div class="container">

        <div class="row justify-content-between">
            <div class="col-12 col-md-auto">

                <!-- Top Links
      ============================================= -->
                <div class="top-links">
                    <ul class="top-links-container">
                        <li class="top-links-item"><a href="index.html">Home</a></li>
                        <li class="top-links-item"><a href="faqs.html">FAQs</a></li>
                        <li class="top-links-item"><a href="contact.html">Contact</a></li>
                        <li class="top-links-item"><a href="login-register.html"><img
                                    src="{{ asset('cleaner/demos/seo/images/flags/eng.png') }}" alt="Lang">English</a>
                            <ul class="top-links-sub-menu">
                                <li class="top-links-item"><a href="#"><img
                                            src="{{ asset('cleaner/demos/seo/images/flags/fre.png') }}"
                                            alt="Lang">French</a></li>
                                <li class="top-links-item"><a href="#"><img
                                            src="{{ asset('cleaner/demos/seo/images/flags/ara.png') }}"
                                            alt="Lang">Arabic</a></li>
                                <li class="top-links-item"><a href="#"><img
                                            src="{{ asset('cleaner/demos/seo/images/flags/tha.png') }}"
                                            alt="Lang">Thai</a></li>
                            </ul>
                        </li>
                    </ul>
                </div><!-- .top-links end -->

            </div>

            <div class="col-12 col-md-auto">

                <!-- Top Social
      ============================================= -->
                <ul id="top-social">
                    <li><a href="#" class="si-facebook"><span class="ts-icon"><i
                                    class="icon-facebook"></i></span><span class="ts-text">Facebook</span></a>
                    </li>
                    <li><a href="#" class="si-twitter"><span class="ts-icon"><i
                                    class="icon-twitter"></i></span><span class="ts-text">Twitter</span></a>
                    </li>
                    <li><a href="#" class="si-dribbble"><span class="ts-icon"><i
                                    class="icon-dribbble"></i></span><span class="ts-text">Dribbble</span></a>
                    </li>
                    <li><a href="#" class="si-github"><span class="ts-icon"><i
                                    class="icon-github-circled"></i></span><span
                                class="ts-text">Github</span></a></li>
                    <li><a href="#" class="si-pinterest"><span class="ts-icon"><i
                                    class="icon-pinterest"></i></span><span class="ts-text">Pinterest</span></a>
                    </li>
                    <li><a href="#" class="si-instagram"><span class="ts-icon"><i
                                    class="icon-instagram2"></i></span><span class="ts-text">Instagram</span></a>
                    </li>
                    <li><a href="tel:+91.11.85412542" class="si-call"><span class="ts-icon"><i
                                    class="icon-call"></i></span><span
                                class="ts-text">+1.111.222.333</span></a></li>
                    <li><a href="mailto:noreply@canvas.com" class="si-email3"><span class="ts-icon"><i
                                    class="icon-envelope-alt"></i></span><span
                                class="ts-text">noreply@canvas.com</span></a></li>
                </ul><!-- #top-social end -->

            </div>

        </div>

    </div>

</div><!-- #top-bar end -->

<!-- Header
  ============================================= -->
<header id="header" class="full-header header-size-md border-0" data-sticky-shrink="false">

    <div id="header-wrap">
        <div class="container-fluid pe-0">
            <div class="header-row">

                <!-- Logo
      ============================================= -->
                <div id="logo" class="col col-sm-auto">
                    <a href="index.html" class="standard-logo"><img src="{{ env('APP_LOGO') }}"
                            alt="Canvas Logo"></a>
                    <a href="index.html" class="retina-logo"><img src="{{ env('APP_LOGO') }}"
                            alt="Canvas Logo"></a>
                </div><!-- #logo end -->

                <div id="primary-menu-trigger">
                    <svg class="svg-trigger" viewBox="0 0 100 100">
                        <path
                            d="m 30,33 h 40 c 3.722839,0 7.5,3.126468 7.5,8.578427 0,5.451959 -2.727029,8.421573 -7.5,8.421573 h -20">
                        </path>
                        <path d="m 30,50 h 40"></path>
                        <path
                            d="m 70,67 h -40 c 0,0 -7.5,-0.802118 -7.5,-8.365747 0,-7.563629 7.5,-8.634253 7.5,-8.634253 h 20">
                        </path>
                    </svg>
                </div>

                <div class="header-misc">
                    <a href="#section-price" data-scrollto="#section-price" data-offset="60"
                        class="button button-light text-dark fw-semibold"><i class="icon-dollar-sign"></i> Cost
                        Calculate</a>
                </div>

               @include('layout.menu')

            </div>
        </div>
    </div>

    <div class="header-wrap-clone"></div>

</header><!-- #header end -->
