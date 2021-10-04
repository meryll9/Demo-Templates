	<!-- Login Modal -->
    <div class="modal1 mfp-hide" id="modal-register">
        <div class="card mx-auto" style="max-width: 540px;">
            <div class="card-header py-3 bg-transparent center">
                <h3 class="mb-0 fw-normal">Hello, Welcome Back</h3>
            </div>
            <div class="card-body mx-auto py-5" style="max-width: 70%;">

                <a href="#" class="button button-large w-100 si-colored si-facebook nott fw-normal ls0 center m-0"><i class="icon-facebook-sign"></i> Log in with Facebook</a>

                <div class="divider divider-center"><span class="position-relative" style="top: -2px">OR</span></div>

                <form id="login-form" name="login-form" class="mb-0 row" action="#" method="post">

                    <div class="col-12">
                        <input type="text" id="login-form-username" name="login-form-username" value="" class="form-control not-dark" placeholder="Username" />
                    </div>

                    <div class="col-12 mt-4">
                        <input type="password" id="login-form-password" name="login-form-password" value="" class="form-control not-dark" placeholder="Password" />
                    </div>

                    <div class="col-12">
                        <a href="#" class="float-end text-dark fw-light mt-2">Forgot Password?</a>
                    </div>

                    <div class="col-12 mt-4">
                        <button class="button w-100 m-0" id="login-form-submit" name="login-form-submit" value="login">Login</button>
                    </div>
                </form>
            </div>
            <div class="card-footer py-4 center">
                <p class="mb-0">Don't have an account? <a href="#"><u>Sign up</u></a></p>
            </div>
        </div>
    </div>

    <!-- Top Bar
    ============================================= -->
    <div id="top-bar" class="dark" style="background-color: #a3a5a7;">
        <div class="container">

            <div class="row justify-content-between align-items-center">

                <div class="col-12 col-lg-auto">
                    <p class="mb-0 d-flex justify-content-center justify-content-lg-start py-3 py-lg-0"><strong>Free U.S. Shipping on Order above $99. Easy Returns.</strong></p>
                </div>

                <div class="col-12 col-lg-auto d-none d-lg-flex">

                    <!-- Top Links
                    ============================================= -->
                    <div class="top-links">
                        <ul class="top-links-container">
                            <li class="top-links-item"><a href="#">About</a></li>
                            <li class="top-links-item"><a href="#">FAQS</a></li>
                            <li class="top-links-item"><a href="#">Blogs</a></li>
                            <li class="top-links-item"><a href="#">EN</a>
                                <ul class="top-links-sub-menu">
                                    <li class="top-links-item"><a href="#"><img src="{{asset('shop/images/icons/flags/french.png')}}" alt="French"> FR</a></li>
                                    <li class="top-links-item"><a href="#"><img src="{{asset('shop/images/icons/flags/italian.png')}}" alt="Italian"> IT</a></li>
                                    <li class="top-links-item"><a href="#"><img src="{{asset('shop/images/icons/flags/german.png')}}" alt="German"> DE</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div><!-- .top-links end -->

                    <!-- Top Social
                    ============================================= -->
                    <ul id="top-social">
                        <li><a href="#" class="si-facebook"><span class="ts-icon"><i class="icon-facebook"></i></span><span class="ts-text">Facebook</span></a></li>
                        <li><a href="#" class="si-instagram"><span class="ts-icon"><i class="icon-instagram2"></i></span><span class="ts-text">Instagram</span></a></li>
                        <li><a href="tel:+1.11.85412542" class="si-call"><span class="ts-icon"><i class="icon-call"></i></span><span class="ts-text">+1.11.85412542</span></a></li>
                        <li><a href="mailto:info@canvas.com" class="si-email3"><span class="ts-icon"><i class="icon-envelope-alt"></i></span><span class="ts-text">info@canvas.com</span></a></li>
                    </ul><!-- #top-social end -->

                </div>
            </div>

        </div>
    </div>

    <!-- Header
    ============================================= -->
    <header id="header" class="full-header header-size-md">
        <div id="header-wrap">
            <div class="container">
                <div class="header-row justify-content-lg-between">

                    <!-- Logo
                    ============================================= -->
                    <div id="logo" class="me-lg-4">
                        <a href="demo-shop.html" class="standard-logo"><img src="{{ env('APP_LOGO') }}" alt="Canvas Logo"></a>
                        <a href="demo-shop.html" class="retina-logo"><img src="{{ env('APP_LOGO') }}" alt="Canvas Logo"></a>
                    </div><!-- #logo end -->

                    <div class="header-misc">

                        <!-- Top Search
                        ============================================= -->
                        <div id="top-account">
                            <a href="#modal-register" data-lightbox="inline" ><i class="icon-line2-user me-1 position-relative" style="top: 1px;"></i><span class="d-none d-sm-inline-block font-primary fw-medium">Login</span></a>
                        </div><!-- #top-search end -->

                        <!-- Top Cart
                        ============================================= -->
                        <div id="top-cart" class="header-misc-icon d-none d-sm-block">
                            <a href="#" id="top-cart-trigger"><i class="icon-line-bag"></i><span class="top-cart-number">5</span></a>
                            <div class="top-cart-content">
                                <div class="top-cart-title">
                                    <h4>Shopping Cart</h4>
                                </div>
                                <div class="top-cart-items">
                                    <div class="top-cart-item">
                                        <div class="top-cart-item-image">
                                            <a href="#"><img src="{{asset('shop/images/shop/small/1.jpg')}}" alt="Blue Round-Neck Tshirt" /></a>
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
                                            <a href="#"><img src="{{asset('shop/images/shop/small/6.jpg')}}" alt="Light Blue Denim Dress" /></a>
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

                        <!-- Top Search
                        ============================================= -->
                        <div id="top-search" class="header-misc-icon">
                            <a href="#" id="top-search-trigger"><i class="icon-line-search"></i><i class="icon-line-cross"></i></a>
                        </div><!-- #top-search end -->

                    </div>

                    <div id="primary-menu-trigger">
                        <svg class="svg-trigger" viewBox="0 0 100 100"><path d="m 30,33 h 40 c 3.722839,0 7.5,3.126468 7.5,8.578427 0,5.451959 -2.727029,8.421573 -7.5,8.421573 h -20"></path><path d="m 30,50 h 40"></path><path d="m 70,67 h -40 c 0,0 -7.5,-0.802118 -7.5,-8.365747 0,-7.563629 7.5,-8.634253 7.5,-8.634253 h 20"></path></svg>
                    </div>

                   @include('layout.menu')

                    <form class="top-search-form" action="search.html" method="get">
                        <input type="text" name="q" class="form-control" value="" placeholder="Type &amp; Hit Enter.." autocomplete="off">
                    </form>

                </div>
            </div>
        </div>
        <div class="header-wrap-clone"></div>
    </header><!-- #header end -->
