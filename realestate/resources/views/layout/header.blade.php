<!-- Top Bar
  ============================================= -->
<div id="top-bar" class="transparent-topbar border-bottom-0">
    <div class="container">

        <div class="row justify-content-between">
            <div class="col-12 col-md-auto">

                <!-- Top Links
      ============================================= -->
                <div class="top-links">
                    <ul class="top-links-container">
                        <li class="top-links-item"><a href="#">All Cities</a>
                            <ul class="top-links-sub-menu">
                                <li class="top-links-item"><a href="#">New York</a></li>
                                <li class="top-links-item"><a href="#">Los Angeles</a></li>
                                <li class="top-links-item"><a href="#">California</a></li>
                                <li class="top-links-item"><a href="#">Miami</a></li>
                                <li class="top-links-item"><a href="#">Las Vegas</a></li>
                            </ul>
                        </li>
                    </ul>
                </div><!-- .top-links end -->

            </div>

            <div class="col-12 col-md-auto">

                <!-- Top Links
      ============================================= -->
                <div class="top-links">
                    <ul class="top-links-container">
                        <li class="top-links-item d-md-none d-lg-block"><a href="#"><i class="icon-call"></i>
                                +1800-123-7890</a></li>
                        <li class="top-links-item"><a href="#"><i class="icon-download-alt"></i> Download App</a></li>
                        <li class="top-links-item top-bar-highlight"><a href="#">Sell/Rent your Property</a>
                            <div class="top-links-section" style="font-size: 14px;">
                                Genuine Clients, 100% Trust Assurance and Lowest Fees on the Market. <a href="#"
                                    class="more-link font-secondary" style="border-bottom-style: dotted;">Learn More
                                    &rarr;</a>
                            </div>
                        </li>
                        <li class="top-links-item"><a href="#" class="side-panel-trigger">Login/Register</a></li>
                    </ul>
                </div><!-- .top-links end -->

            </div>
        </div>

    </div>
</div><!-- #top-bar end -->

<!-- Header
  ============================================= -->
<header id="header" class="transparent-header dark header-size-md" data-sticky-shrink="false">
    <div id="header-wrap">
        <div class="container">
            <div class="header-row">

                <!-- Logo
      ============================================= -->
                <div id="logo">
                    <a href="index.html" data-dark-logo="{{ env('APP_LOGO') }}" class="standard-logo"><img
                            src="{{ env('APP_LOGO') }}" alt="Canvas Logo"></a>
                    <a href="index.html" data-dark-logo="{{ env('APP_LOGO') }}" class="retina-logo"><img
                            src="{{ env('APP_LOGO') }}" alt="Canvas Logo"></a>
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
