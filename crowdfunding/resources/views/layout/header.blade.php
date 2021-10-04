<!-- Header
  ============================================= -->
<header id="header" class="transparent-header header-size-custom" data-sticky-shrink="false">
    <div id="header-wrap">
        <div class="container">
            <div class="header-row">

                <!-- Logo
      ============================================= -->
                <div id="logo">
                    <a href="index.html" class="standard-logo"><img src="{{ env('APP_LOGO') }}" alt="Canvas Logo"></a>
                    <a href="index.html" class="retina-logo"><img src="{{ env('APP_LOGO') }}" alt="Canvas Logo"></a>
                </div><!-- #logo end -->

                <div class="header-misc">
                    <!-- Top Search
       ============================================= -->
                    <div id="top-search" class="header-misc-icon">
                        <a href="#" id="top-search-trigger"><i class="icon-line-search"></i><i
                                class="icon-line-cross"></i></a>
                    </div><!-- #top-search end -->

                    <a href="#modal-register" data-lightbox="inline"
                        class="button button-small fw-semibold button-border button-rounded ls0 fw-medium nott">Start A
                        Campaign</a>
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