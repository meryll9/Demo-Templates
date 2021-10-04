<!-- Header
  ============================================= -->
<header id="header" class="header-size-sm" data-sticky-shrink="false">
    <div class="container">
        <div class="header-row justify-content-between">

            <!-- Logo
     ============================================= -->
            <div id="logo" class="col-auto ms-auto ms-mb-0 me-mb-0 order-md-2">
                <a href="demo-news.html" class="standard-logo"><img class="mx-auto" src="{{ env('APP_LOGO') }}"
                        alt="Canvas Logo"></a>
                <a href="demo-news.html" class="retina-logo"><img class="mx-auto" src="{{ env('APP_LOGO') }}"
                        alt="Canvas Logo"></a>
            </div><!-- #logo end -->

            <div class="w-100 d-block d-md-none"></div>

            <div
                class="col-12 col-sm-6 col-md-4 justify-content-center justify-content-sm-start d-flex order-md-1 mb-4 mb-sm-0">
                <a href="https://facebook.com/semiColonWeb"
                    class="social-icon si-small si-rounded si-dark si-mini si-facebook mb-0">
                    <i class="icon-facebook"></i>
                    <i class="icon-facebook"></i>
                </a>
                <a href="https://twitter.com/__semicolon"
                    class="social-icon si-small si-rounded si-dark si-mini si-twitter mb-0">
                    <i class="icon-twitter"></i>
                    <i class="icon-twitter"></i>
                </a>
                <a href="https://instagram.com/semicolonweb"
                    class="social-icon si-small si-rounded si-dark si-mini si-instagram mb-0">
                    <i class="icon-instagram"></i>
                    <i class="icon-instagram"></i>
                </a>
            </div>

            <div class="col-12 col-sm-6 col-md-4 order-md-3 mb-4 mb-md-0">
                <ul class="nav align-items-center justify-content-center justify-content-sm-end">
                    <li class="nav-item">
                        <a class="nav-link text-uppercase fw-medium" href="#">Sign In</a>
                    </li>
                    <li class="nav-item">
                        <div class="date-today text-uppercase badge bg-dark rounded-pill py-2 px-3 fw-medium"></div>
                    </li>
                </ul>
            </div>

        </div>
    </div>

    <div id="header-wrap" class="border-top border-f5">
        <div class="container">
            <div class="header-row justify-content-between flex-row-reverse flex-lg-row">

                <div class="header-misc">

                    <!-- Bookmark
       ============================================= -->
                    <div class="header-misc-icon">
                        <a href="#"><i class="icon-bookmark-empty"></i></a>
                    </div>

                    <!-- Top Search
       ============================================= -->
                    <div id="top-search" class="header-misc-icon">
                        <a href="#" id="top-search-trigger"><i class="icon-line-search"></i><i
                                class="icon-line-cross"></i></a>
                    </div><!-- #top-search end -->

                </div>

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

                <form class="top-search-form" action="search.html" method="get">
                    <input type="text" name="q" class="form-control" value="" placeholder="Type &amp; Hit Enter.."
                        autocomplete="off">
                </form>

            </div>
        </div>
    </div>
    <div class="header-wrap-clone"></div>
</header><!-- #header end -->
