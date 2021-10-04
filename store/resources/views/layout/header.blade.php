<!-- Header
  ============================================= -->
<header id="header" class="dark transparent-header floating-header header-size-custom" data-sticky-shrink="false"
    data-sticky-class="not-dark">
    <div id="header-wrap">
        <div class="container-fluid">
            <div class="header-row justify-content-lg-between">

                <!-- Logo
      ============================================= -->
                <div id="logo" class="me-lg-0">
                    <a href="index.html" class="standard-logo" data-dark-logo="{{ env('APP_LOGO') }}"><img
                            src="{{ env('APP_LOGO') }}" alt="Canvas Logo"></a>
                    <a href="index.html" class="retina-logo" data-dark-logo="{{ env('APP_LOGO') }}"><img
                            src="{{ env('APP_LOGO') }}" alt="Canvas Logo"></a>
                </div><!-- #logo end -->

                <div class="header-misc">

                    <!-- Top Login
       ============================================= -->
                    <div id="top-account" class="px-4">
                        <a href="#modal-register" data-lightbox="inline">Sign up/Login</a>
                    </div><!-- #top-search end -->

                    <!-- Top Cart
       ============================================= -->
                    <div id="top-cart">
                        <a href="#" id="top-cart-trigger" class="position-relative"><i class="icon-line-bag"></i><span
                                class="top-cart-number">5</span></a>
                        <div class="top-cart-content">
                            <div class="top-cart-title">
                                <h4>Shopping Cart</h4>
                            </div>
                            <div class="top-cart-items">
                                <div class="top-cart-item">
                                    <div class="top-cart-item-image">
                                        <a href="#"><img
                                                src="{{ asset('store/demos/shop/images/items/featured/5.jpg') }}"
                                                alt="Blue Shoulder Bag" /></a>
                                    </div>
                                    <div class="top-cart-item-desc">
                                        <div class="top-cart-item-desc-title">
                                            <a href="#" class="fw-normal">White athletic shoe</a>
                                            <span class="top-cart-item-price d-block">$35.00</span>
                                        </div>
                                        <div class="top-cart-item-quantity fw-semibold">x 1</div>
                                    </div>
                                </div>
                                <div class="top-cart-item">
                                    <div class="top-cart-item-image">
                                        <a href="#" class="fw-normal"><img
                                                src="{{ asset('store/demos/shop/images/items/featured/1.jpg') }}"
                                                alt="Leather Bag" /></a>
                                    </div>
                                    <div class="top-cart-item-desc">
                                        <div class="top-cart-item-desc-title">
                                            <a href="#" class="fw-normal">Round Neck Solid Light Blue Colour
                                                T-shirts</a>
                                            <span class="top-cart-item-price d-block">$12.49</span>
                                        </div>
                                        <div class="top-cart-item-quantity fw-semibold">x 2</div>
                                    </div>
                                </div>
                            </div>
                            <div class="top-cart-action">
                                <span class="top-checkout-price fw-semibold text-dark">$59.98</span>
                                <button class="button button-dark button-small m-0">View Cart</button>
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

            </div>

        </div>

    </div>
    <div class="header-wrap-clone"></div>

</header><!-- #header end -->
