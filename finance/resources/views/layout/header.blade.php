<!-- Top Bar
  ============================================= -->
<div id="top-bar" class="dark bg-color">
    <div class="container">

        <div class="row justify-content-center justify-content-lg-between">
            <div class="col-12 col-md-auto">

                <!-- Top Links
      ============================================= -->
                <div class="top-links">
                    <ul class="top-links-container">
                        <li class="top-links-item"><a href="index.html"><i class="color-2 icon-line-globe"></i>
                                English</a>
                            <ul class="top-links-sub-menu bg-color">
                                <li class="top-links-item"><a href="about.html">Arabic</a></li>
                                <li class="top-links-item"><a href="faqs.html">Chinese</a></li>
                            </ul>
                        </li>
                    </ul>
                </div><!-- .top-links end -->

            </div>

            <div class="col-12 col-md-auto">

                <!-- Top Links
      ============================================= -->
                <div class="top-links text-center">
                    <ul class="top-links-container">
                        <li class="top-links-item"><a href="#"><i class="color-2 icon-line-map-pin"></i> 795 Folsom Ave,
                                Suite 600 San Francisco, CA 94107</a></li>
                        <li class="top-links-item"><a href="#"><i class="color-2 icon-line-mail"></i>
                                info@canvas.com</a></li>
                        <li class="top-links-item"><a href="#"><i class="color-2 icon-line-phone-call"></i> (0) 8547
                                632521</a></li>
                    </ul>
                </div><!-- .top-links end -->

            </div>
        </div>

    </div>
</div><!-- #top-bar end -->

<!-- Header
  ============================================= -->
<header id="header" class="sticky-on-scrollup">
    <div id="header-wrap">
        <div class="container">
            <div class="header-row justify-content-between">

                <!-- Logo
      ============================================= -->
                <div id="logo" class="mx-0 me-lg-5 order-2 order-lg-1">
                    <a href="index.html" class="standard-logo" data-dark-logo="{{ env('APP_LOGO') }}"><img
                            src="{{ env('APP_LOGO') }}" alt="Canvas Logo"></a>
                    <a href="index.html" class="retina-logo" data-dark-logo="{{ env('APP_LOGO') }}"><img
                            src="{{ env('APP_LOGO') }}" alt="Canvas Logo"></a>
                </div><!-- #logo end -->

                <div id="primary-menu-trigger" class="order-1">
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

                <div class="header-misc order-3">
                    <a href="#" class="btn text-larger btn-dark bg-color px-4 py-2 rounded-pill"><i
                            class="icon-line-message-circle color-2"></i><span class="d-none d-md-inline ms-2">Get
                            Consultant</span></a>
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
