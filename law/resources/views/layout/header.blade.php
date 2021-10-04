<!-- Header
  ============================================= -->
<header id="header" class="transparent-header dark">
    <div id="header-wrap">
        <div class="container">
            <div class="header-row align-items-lg-start justify-content-between py-lg-4">

                <!-- Logo
      ============================================= -->
                <div id="logo" class="col-xl-2 col-md-3 col-6 align-items-lg-start py-4">
                    <a href="index.html" class="standard-logo"><img src="{{ env('APP_LOGO') }}" alt="Canvas Logo"></a>
                    <a href="index.html" class="retina-logo"><img src="{{ env('APP_LOGO') }}" alt="Canvas Logo"></a>
                </div><!-- #logo end -->

                @include('layout.menu')
            </div>
        </div>
    </div>
    <div class="header-wrap-clone"></div>
</header><!-- #header end -->
