<!-- Top Bar
  ============================================= -->
<div id="top-bar" class="bg-color dark">
    <div class="container clearfix">

        <div class="row justify-content-between">
            <div class="col-12 col-md-auto me-md-auto">

                <!-- Top Links
      ============================================= -->
                <div class="top-links">
                    <ul class="top-links-container">
                        <li class="top-links-item"><a href="#">All Cities</a>
                            <ul class="top-links-sub-menu">
                                <li class="top-links-item"><a href="#">New York</a></li>
                                <li class="top-links-item"><a href="#">Los Angeles</a></li>
                                <li class="top-links-item"><a href="#">California</a></li>
                                <li class="top-links-item"><a href="#">Miami</a></li>
                                <li class="top-links-item"><a href="#">Las Vegas</a></li>
                            </ul>
                        </li>
                    </ul>
                </div><!-- .top-links end -->

            </div>

            <div class="col-12 col-md-auto px-0">

                <!-- Top Links
      ============================================= -->
                <div class="top-links">
                    <ul class="top-links-container">
                        <li class="top-links-item"><a href="#">Free Courses</a></li>
                        <li class="top-links-item d-none d-sm-inline-block"><a href="#"><i
                                    class="icon-download-alt"></i> Download App</a></li>
                    </ul>
                </div><!-- .top-links end -->

            </div>

            <div class="col-12 col-md-auto ps-0">

                <ul id="top-social">
                    <li><a href="#" class="si-facebook"><span class="ts-icon"><i
                                    class="icon-facebook"></i></span><span class="ts-text">Facebook</span></a>
                    </li>
                    <li><a href="#" class="si-twitter"><span class="ts-icon"><i
                                    class="icon-twitter"></i></span><span class="ts-text">Twitter</span></a>
                    </li>
                    <li><a href="#" class="si-instagram"><span class="ts-icon"><i
                                    class="icon-instagram2"></i></span><span class="ts-text">Instagram</span></a>
                    </li>
                    <li><a href="tel:+1.11.85412542" class="si-call"><span class="ts-icon"><i
                                    class="icon-call"></i></span><span
                                class="ts-text">+1.11.85412542</span></a></li>
                    <li><a href="mailto:info@canvas.com" class="si-email3"><span class="ts-icon"><i
                                    class="icon-envelope-alt"></i></span><span
                                class="ts-text">info@canvas.com</span></a></li>
                </ul><!-- #top-social end -->

            </div>
        </div>

    </div>
</div>

<!-- Header
  ============================================= -->
<header id="header" class="header-size-sm" data-sticky-shrink="false">
    <div class="container">
        <div class="header-row">

            <nav class="navbar navbar-expand-lg p-0 m-0 w-100">
                <div id="logo">
                    <a href="index.html" class="standard-logo"><img src="{{ env('APP_LOGO') }}"
                            alt="Canvas Logo"></a>
                    <a href="index.html" class="retina-logo"><img src="{{ env('APP_LOGO') }}"
                            alt="Canvas Logo"></a>
                </div>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="icon-line-menu"></span>
                </button>
                <div class="collapse navbar-collapse align-items-end" id="navbarNav">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="/">Home</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Members
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="#">Dropdown Item 1</a>
                                <a class="dropdown-item" href="#">Dropdown Item 2</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">Another Dropdown Item</a>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">Instructors</a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">Events</a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">About Us</a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">Contact Us</a>
                        </li>
                    </ul>
                </div>
            </nav>

        </div>
    </div>

    <div id="header-wrap" class="bg-light">
        <div class="container">
            <div class="header-row flex-row-reverse flex-lg-row justify-content-between">

                <div class="header-misc">

                    <div class="header-buttons me-3">
                        <a href="#" class="button button-rounded button-border button-small m-0">Log In</a>
                        <a href="#" class="button button-rounded button-small m-0 ms-2">Sign Up</a>
                    </div>

                    <!-- Top Search
       ============================================= -->
                    <div id="top-search" class="header-misc-icon">
                        <a href="#" id="top-search-trigger"><i class="icon-line-search"></i><i
                                class="icon-line-cross"></i></a>
                    </div><!-- #top-search end -->

                    <!-- Top Cart
       ============================================= -->
                    <div id="top-cart" class="header-misc-icon d-none d-sm-block">
                        <a href="#" id="top-cart-trigger"><i class="icon-line-bag"></i><span
                                class="top-cart-number">5</span></a>
                        <div class="top-cart-content">
                            <div class="top-cart-title">
                                <h4>Shopping Cart</h4>
                            </div>
                            <div class="top-cart-items">
                                <div class="top-cart-item">
                                    <div class="top-cart-item-image">
                                        <a href="#"><img src="{{ asset('course/images/shop/small/1.jpg') }}"
                                                alt="Blue Round-Neck Tshirt" /></a>
                                    </div>
                                    <div class="top-cart-item-desc">
                                        <div class="top-cart-item-desc-title">
                                            <a href="#">Blue Round-Neck Tshirt with a Button</a>
                                            <span class="top-cart-item-price d-block">$19.99</span>
                                        </div>
                                        <div class="top-cart-item-quantity">x 2</div>
                                    </div>
                                </div>
                                <div class="top-cart-item">
                                    <div class="top-cart-item-image">
                                        <a href="#"><img src="{{ asset('course/images/shop/small/6.jpg') }}"
                                                alt="Light Blue Denim Dress" /></a>
                                    </div>
                                    <div class="top-cart-item-desc">
                                        <div class="top-cart-item-desc-title">
                                            <a href="#">Light Blue Denim Dress</a>
                                            <span class="top-cart-item-price d-block">$24.99</span>
                                        </div>
                                        <div class="top-cart-item-quantity">x 3</div>
                                    </div>
                                </div>
                            </div>
                            <div class="top-cart-action">
                                <span class="top-checkout-price">$114.95</span>
                                <a href="#" class="button button-3d button-small m-0">View Cart</a>
                            </div>
                        </div>
                    </div><!-- #top-cart end -->

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
