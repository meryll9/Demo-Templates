<!-- Header
  ============================================= -->
<header id="header" class="header-size-custom" data-sticky-shrink="false">
    <div id="header-wrap">
        <div class="container">
            <div class="header-row justify-content-lg-between">

                <!-- Logo
      ============================================= -->
                <div id="logo" class="mx-lg-auto col-auto flex-column order-lg-2 px-0">
                    <a href="demo-blog.html" class="standard-logo" data-dark-logo="{{ env('APP_LOGO') }}"
                        data-mobile-logo="{{ env('APP_LOGO') }}"><img src="{{ env('APP_LOGO') }}"
                            alt="Canvas Logo"></a>
                    <a href="demo-blog.html" class="retina-logo" data-dark-logo="{{ env('APP_LOGO') }}"
                        data-mobile-logo="{{ env('APP_LOGO') }}"><img src="{{ env('APP_LOGO') }}"
                            alt="Canvas Logo"></a>
                    <span class="divider divider-center date-today"><span class="divider-text"></span></span>
                </div><!-- #logo end -->

                <div class="col-auto col-lg-3 order-lg-1 d-none d-md-flex px-0">
                    <div class="social-icons">
                        <a href="https://facebook.com/semicolonweb"
                            class="social-icon si-rounded si-dark si-mini si-facebook" target="_blank">
                            <i class="icon-facebook"></i>
                            <i class="icon-facebook"></i>
                        </a>
                        <a href="https://twitter.com/__semicolon"
                            class="social-icon si-rounded si-dark si-mini si-twitter" target="_blank">
                            <i class="icon-twitter"></i>
                            <i class="icon-twitter"></i>
                        </a>
                        <a href=" https://instagram.com/semicolonweb"
                            class="social-icon si-rounded si-dark si-mini si-instagram" target="_blank">
                            <i class="icon-instagram"></i>
                            <i class="icon-instagram"></i>
                        </a>
                    </div>
                </div>

                <div class="header-misc col-auto col-lg-3 justify-content-lg-end ms-0 ms-sm-3 px-0">

                    <!-- Bookmark
       ============================================= -->
                    <div class="dropdown dropdown-langs">
                        <button class="btn dropdown-toggle px-1" type="button" id="dropdownMenuButton"
                            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img src="{{ asset('blog/demos/seo/images/flags/eng.png') }}" alt="French">
                        </button>
                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuButton">
                            <a href="#" class="dropdown-item"><img
                                    src="{{ asset('blog/demos/seo/images/flags/fre.png') }}" alt="Lang"> French</a>
                            <a href="#" class="dropdown-item"><img
                                    src="{{ asset('blog/demos/seo/images/flags/ara.png') }}" alt="Lang"> Arabic</a>
                            <a href="#" class="dropdown-item"><img
                                    src="{{ asset('blog/demos/seo/images/flags/tha.png') }}" alt="Lang"> Thailand</a>
                            <a href="#" class="dropdown-item disabled" tabindex="-1" aria-disabled="true"><img
                                    src="{{ asset('blog/demos/seo/images/flags/eng.png') }}" alt="Lang"> English</a>
                        </div>
                    </div>

                    <!-- Top Search
       ============================================= -->
                    <div id="top-search" class="header-misc-icon">
                        <a href="#" id="top-search-trigger"><i class="icon-line-search"></i><i
                                class="icon-line-cross"></i></a>
                    </div><!-- #top-search end -->

                    <div class="dark-mode header-misc-icon d-none d-md-block">
                        <a href="#"><i class="icon-dark"></i></a>
                    </div>
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

            </div>
        </div>

        <div class="container">
            <div class="header-row justify-content-lg-center header-border">

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
