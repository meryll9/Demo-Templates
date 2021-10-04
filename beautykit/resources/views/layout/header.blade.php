<!-- Header
  ============================================= -->
<header id="header" class="dark bg-color">
    <div id="header-wrap">
        <div class="container">

            <div class="header-row justify-content-lg-between">

                <!-- Logo
      ============================================= -->
                <div id="logo">
                    <a href="index.html" class="standard-logo"><img src="{{ env('APP_LOGO') }}" alt="Canvas Logo"></a>
                    <a href="index.html" class="retina-logo"><img src="{{ env('APP_LOGO') }}" alt="Canvas Logo"></a>
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
                    <div class="d-none d-md-flex mb-lg-5">
                        <a href="https://facebook.com/semicolonweb" target="_blank"
                            class="social-icon si-small si-rounded si-light si-facebook">
                            <i class="icon-facebook"></i>
                            <i class="icon-facebook"></i>
                        </a>

                        <a href="https://twitter.com/__semicolon" target="_blank"
                            class="social-icon si-small si-rounded si-light si-twitter">
                            <i class="icon-twitter"></i>
                            <i class="icon-twitter"></i>
                        </a>

                        <a href="https://instagram.com/semicolonweb" target="_blank"
                            class="social-icon si-small si-rounded si-light si-instagram">
                            <i class="icon-instagram"></i>
                            <i class="icon-instagram"></i>
                        </a>
                    </div>

                    <a href="#" data-scrollto="#price" class="button button-circle fw-normal d-lg-none" data-offset="85"
                        data-easing="easeInOutExpo" data-speed="1250"><span class="d-block d-md-none"><i
                                class="icon-line-bag text-larger w-auto m-0"></i></span><span
                            class="d-none d-md-block">Buy Our Pack <i class="icon-caret-right m-0 ls0"></i></span></a>
                </div>

                @include('layout.menu')

            </div>

        </div>

    </div>

</header><!-- #header end -->
