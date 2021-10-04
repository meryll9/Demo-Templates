<!-- Header
  ============================================= -->
<header id="header">
    <div id="header-wrap">
        <div class="container">
            <div class="header-row justify-content-between">

                <!-- Logo
      ============================================= -->
                <div id="logo" class="me-0 me-lg-auto order-2 order-lg-1">
                    <a href="index.html" class="standard-logo"><img src="{{ env('APP_LOGO') }}" alt="Canvas Logo"></a>
                    <a href="index.html" class="retina-logo"><img src="{{ env('APP_LOGO') }}" alt="Canvas Logo"></a>
                </div><!-- #logo end -->

                <div id="primary-menu-trigger" class="order-1 order-lg-2"><i class="icon-reorder"></i></div>

                <div class="header-misc order-3 order-lg-last">
                    <div class="d-flex mb-lg-5">
                        <a href="#" class="social-icon si-small si-rounded si-colored si-facebook">
                            <i class="icon-facebook"></i>
                            <i class="icon-facebook"></i>
                        </a>

                        <a href="#" class="social-icon si-small si-rounded si-colored si-twitter">
                            <i class="icon-twitter"></i>
                            <i class="icon-twitter"></i>
                        </a>

                        <a href="#" class="social-icon si-small si-rounded si-colored si-pinterest">
                            <i class="icon-pinterest"></i>
                            <i class="icon-pinterest"></i>
                        </a>
                    </div>
                </div>

               @include('layout.menu')

            </div>
        </div>
    </div>
    <div class="header-wrap-clone"></div>
</header><!-- #header end -->
