<!-- Header
  ============================================= -->
<header id="header" class="full-header header-size-custom" data-sticky-shrink="false">
    <div id="header-wrap">
        <div class="container-fluid">
            <div class="header-row flex-lg-row-reverse">

                <!-- Logo
      ============================================= -->
                <div id="logo" class="me-lg-0 ms-lg-auto">
                    <a href="demo-car.html" class="standard-logo"><img src="{{ env('APP_LOGO') }}"
                            alt="Canvas Logo"></a>
                    <a href="demo-car.html" class="retina-logo"><img src="{{ env('APP_LOGO') }}"
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
