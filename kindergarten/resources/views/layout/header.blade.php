<!-- Header
  ============================================= -->
<header id="header" class="transparent-header">
    <div id="header-wrap">
        <div class="container">
            <div class="header-row justify-content-lg-between">

                <!-- Logo
      ============================================= -->
                <div id="logo" class="me-lg-0 col-lg-3">
                    <a href="index.html" class="standard-logo"><img src="{{ env('APP_LOGO') }}" alt="Canvas Logo"
                            width="140"></a>
                    <a href="index.html" class="retina-logo"><img src="{{ env('APP_LOGO') }}" alt="Canvas Logo"
                            width="140"></a>
                </div><!-- #logo end -->

                <div class="header-misc col-lg-3 justify-content-end">
                    <!-- WhatsApp Icon
       ============================================= -->
                    <a href="https://wa.me/+1122233" target="_blank"
                        class="Whatsapp-icon d-flex align-items-center me-2 text-dark h-text-color font-primary fw-bold h5 mb-0">
                        <i class="icon-whatsapp me-2"></i> +0-11-475-1433
                    </a>
                </div>


                @include('layout.menu')

            </div>
        </div>
    </div>
    <div class="header-wrap-clone"></div>
</header><!-- #header end -->
