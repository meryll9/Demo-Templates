<!-- Top Bar
  ============================================= -->
<div id="top-bar">
    <div class="container clearfix">

        <div class="row justify-content-between">
            <div class="col-12 col-md-auto d-none d-md-flex">

                <!-- Top Links
      ============================================= -->
                <div class="top-links">
                    <ul class="top-links-container">
                        <li class="top-links-item"><a href="#"><i class="icon-time"></i> Timings</a></li>
                        <li class="top-links-item"><a href="#"><i class="icon-phone3"></i> +1-800-9876-221</a></li>
                        <li class="top-links-item"><a href="#" class="nott"><i class="icon-envelope2"></i>
                                medical@canvas.com</a></li>
                    </ul>
                </div><!-- .top-links end -->

            </div>

            <div class="col-12 col-md-auto">

                <!-- Top Links
      ============================================= -->
                <div class="top-links">
                    <ul class="top-links-container">
                        <li class="top-links-item"><a href="#">EN</a>
                            <ul class="top-links-sub-menu">
                                <li class="top-links-item"><a href="#"><img
                                            src="{{ asset('medical/images/icons/flags/french.png') }}" alt="French">
                                        FR</a></li>
                                <li class="top-links-item"><a href="#"><img
                                            src="{{ asset('medical/images/icons/flags/italian.png') }}" alt="Italian">
                                        IT</a></li>
                                <li class="top-links-item"><a href="#"><img
                                            src="{{ asset('medical/images/icons/flags/german.png') }}" alt="German">
                                        DE</a></li>
                            </ul>
                        </li>
                        <li class="top-links-item"><a href="demo-medical.html#booking-appointment-form"
                                class="bg-color text-white">Book an Appointment</a></li>
                    </ul>
                </div><!-- .top-links end -->

            </div>
        </div>

    </div>
</div><!-- #top-bar end -->

<!-- Header
  ============================================= -->
<header id="header" data-menu-padding="28" data-sticky-menu-padding="8">
    <div id="header-wrap">
        <div class="container">
            <div class="header-row">

                <!-- Logo
      ============================================= -->
                <div id="logo">
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

                @include('layout.menu')

            </div>
        </div>
    </div>
    <div class="header-wrap-clone"></div>
</header><!-- #header end -->
