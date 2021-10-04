<!-- Top Bar
  ============================================= -->
<div id="top-bar">
    <div class="container clearfix">

        <div class="row justify-content-between">
            <div class="col-12 col-md-auto">

                <!-- Top Social
      ============================================= -->
                <ul id="top-social">
                    <li><a href="#" class="si-facebook"><span class="ts-icon"><i
                                    class="icon-facebook"></i></span><span class="ts-text">Facebook</span></a>
                    </li>
                    <li><a href="#" class="si-twitter"><span class="ts-icon"><i
                                    class="icon-twitter"></i></span><span class="ts-text">Twitter</span></a>
                    </li>
                    <li><a href="#" class="si-dribbble"><span class="ts-icon"><i
                                    class="icon-dribbble"></i></span><span class="ts-text">Dribbble</span></a>
                    </li>
                    <li><a href="#" class="si-github"><span class="ts-icon"><i
                                    class="icon-github-circled"></i></span><span
                                class="ts-text">Github</span></a></li>
                    <li><a href="#" class="si-pinterest"><span class="ts-icon"><i
                                    class="icon-pinterest"></i></span><span class="ts-text">Pinterest</span></a>
                    </li>
                    <li><a href="#" class="si-instagram"><span class="ts-icon"><i
                                    class="icon-instagram2"></i></span><span class="ts-text">Instagram</span></a>
                    </li>
                </ul><!-- #top-social end -->

            </div>

            <div class="col-12 col-md-auto">

                <!-- Top Links
      ============================================= -->
                <div class="top-links">
                    <ul class="top-links-container">
                        <li class="top-links-item"><a href="#">Locations</a>
                            <ul class="top-links-sub-menu">
                                <li class="top-links-item"><a href="#">San Francisco</a></li>
                                <li class="top-links-item"><a href="#">London</a></li>
                                <li class="top-links-item"><a href="#">Amsterdam</a></li>
                            </ul>
                        </li>
                        <li class="top-links-item"><a href="faqs.html">FAQs</a></li>
                        <li class="top-links-item"><a href="contact.html">Contact</a></li>
                    </ul>
                </div><!-- .top-links end -->

            </div>
        </div>

    </div>
</div><!-- #top-bar end -->

<!-- Header
  ============================================= -->
<header id="header" class="header-size-sm" data-sticky-shrink="false">
    <div class="container">
        <div class="header-row">

            <!-- Logo
     ============================================= -->
            <div id="logo" class="ms-auto ms-lg-0 me-lg-auto">
                <a href="index.html" class="standard-logo"><img src="{{ env('APP_LOGO') }}" alt="Canvas Logo"></a>
                <a href="index.html" class="retina-logo"><img src="{{ env('APP_LOGO') }}" alt="Canvas Logo"></a>
            </div><!-- #logo end -->

            <div class="header-misc d-none d-lg-flex">

                <ul class="header-extras">
                    <li>
                        <i class="i-plain icon-call m-0"></i>
                        <div class="he-text">
                            Call Us
                            <span>(1) 22 54215821</span>
                        </div>
                    </li>
                    <li>
                        <i class="i-plain icon-line2-envelope m-0"></i>
                        <div class="he-text">
                            Email Us
                            <span>info@canvas.com</span>
                        </div>
                    </li>
                    <li>
                        <i class="i-plain icon-line-clock m-0"></i>
                        <div class="he-text">
                            We'are Open
                            <span>Mon - Sat, 10AM to 6PM</span>
                        </div>
                    </li>
                </ul>

            </div>

        </div>
    </div>

    <div id="header-wrap">
        <div class="container">
            <div class="header-row justify-content-between flex-row-reverse flex-lg-row justify-content-lg-center">

                <div class="header-misc">

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
