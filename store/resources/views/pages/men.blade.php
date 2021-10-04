@extends('layout.main')
@section('content')
    <!-- Page Title
      ============================================= -->
    <section id="page-title" class="page-title-parallax page-title-dark page-title-center"
        style="background-image: url({{asset('/store/demos/store/images/men/page-title.jpg')}}); background-size: cover; padding: 170px 0 100px;"
        data-bottom-top="background-position: 50% 200px;" data-top-bottom="background-position: 50% -200px;">

        <div class="container clearfix">
            <h1>Men Collections</h1>
            <span>A Fresh Collections Of Men</span>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Men</li>
            </ol>
        </div>

    </section><!-- #page-title end -->

    <!-- Content
      ============================================= -->
    <section id="content">
        <div class="content-wrap pb-0">

            <!-- Login/Register Modal -->
            <div class="modal-register mfp-hide" id="modal-register">
                <div class="card mx-auto" style="max-width: 540px;">
                    <div class="card-header py-3 bg-transparent center">
                        <h3 class="mb-0 fw-normal">Hello, Welcome Back</h3>
                    </div>
                    <div class="card-body mx-auto py-5" style="max-width: 70%;">

                        <a href="#"
                            class="button button-large w-100 si-colored si-facebook nott fw-normal ls0 center m-0"><i
                                class="icon-facebook-sign"></i> Log in with Facebook</a>

                        <div class="divider divider-center"><span class="position-relative" style="top: -2px">OR</span>
                        </div>

                        <form id="login-form" name="login-form" class="mb-0 row" action="#" method="post">

                            <div class="col-12">
                                <input type="text" id="login-form-username" name="login-form-username" value=""
                                    class="form-control not-dark" placeholder="Username" />
                            </div>

                            <div class="col-12 mt-4">
                                <input type="password" id="login-form-password" name="login-form-password" value=""
                                    class="form-control not-dark" placeholder="Password" />
                            </div>

                            <div class="col-12 text-end">
                                <a href="#" class="text-dark fw-light mt-2">Forgot Password?</a>
                            </div>

                            <div class="col-12 mt-4">
                                <button class="button w-100 m-0" id="login-form-submit" name="login-form-submit"
                                    value="login">Login</button>
                            </div>
                        </form>
                    </div>
                    <div class="card-footer py-4 center">
                        <p class="mb-0">Don't have an account? <a href="#"><u>Sign up</u></a></p>
                    </div>
                </div>
            </div><!-- Login/Register Modal End -->

            <div class="container-fluid topmargin">
                <div class="row">
                    <div class="col-md-2 sticky-sidebar-wrap">
                        <ul class="list-unstyled items-nav sticky-sidebar shop-filter" data-container="#shop">
                            <li><a href="#" class="text-dark fw-semibold" data-filter="*">All Collections</a></li>
                            <li class="no-divider"><a href="#" class="text-dark fw-semibold" data-filter=".sf-new">New
                                    Arrivals</a></li>
                            <li>
                                <hr>
                            </li>
                            <li><a href="#" data-filter=".sf-jeans">Jeans</a></li>
                            <li><a href="#" data-filter=".sf-t-shirts">T-Shirts</a></li>
                            <li><a href="#" data-filter=".sf-watches">Watches</a></li>
                            <li><a href="#" data-filter=".sf-shoes">Shoes</a></li>
                            <li><a href="#" data-filter=".sf-sportswear">Sportswear</a></li>
                            <li><a href="#" data-filter=".sf-shorts">Shorts</a></li>
                            <li><a href="#" data-filter=".sf-trousers">Trousers</a></li>
                            <li><a href="#" data-filter=".sf-jackets">Jackets</a></li>
                            <li><a href="#" data-filter=".sf-sweaters">Sweaters</a></li>
                        </ul>

                        <hr>

                        <div>
                            <h5 class="ls0 text-muted">Select Price:</h5>
                            <input class="range_23" />
                        </div>

                    </div>

                    <div class="col-md-10">
                        <div id="shop" class="row shop grid-container" data-layout="fitRows">

                            <!-- Shop Item 1
            ============================================= -->
                            <div class="col-lg-4 col-md-6 mb-4 sf-shoes sf-sportswear sf-new">
                                <div class="product">
                                    <div class="product-image position-relative">
                                        <div class="fslider" data-pagi="false" data-speed="400" data-pause="200000">
                                            <div class="flexslider">
                                                <div class="slider-wrap">
                                                    <div class="slide">
                                                        <a href="product"><img
                                                                src="{{asset('store/demos/store/images/product/1-1.jpg')}}"
                                                                alt="Black Shoe"></a>
                                                    </div>
                                                    <div class="slide">
                                                        <a href="product"><img
                                                                src="{{asset('store/demos/store/images/product/1-2.jpg')}}"
                                                                alt="Black Shoe"></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <a href="#" class="cart-btn button button-white button-light"><i
                                                class="icon-line-plus"></i>Add to Cart</a>
                                    </div>
                                    <div class="product-desc">
                                        <div class="product-title">
                                            <h3><a href="product">Black Sports Shoe</a></h3>
                                            <span><a href="#">Nike</a></span>
                                        </div>
                                        <div class="product-price"><ins>$21.49</ins></div>
                                    </div>
                                </div>
                            </div>

                            <!-- Shop Item 2
            ============================================= -->
                            <div class="col-lg-4 col-md-6 mb-4 sf-shoes sf-sportswear">
                                <div class="product">
                                    <div class="product-image position-relative">
                                        <div class="fslider" data-pagi="false" data-speed="400" data-pause="200000">
                                            <div class="flexslider">
                                                <div class="slider-wrap">
                                                    <div class="slide">
                                                        <a href="product"><img
                                                                src="{{asset('store/demos/store/images/product/2-1.jpg')}}"
                                                                alt="Sports Shoe"></a>
                                                    </div>
                                                    <div class="slide">
                                                        <a href="product"><img
                                                                src="{{asset('store/demos/store/images/product/2-2.jpg')}}"
                                                                alt="Sports Shoe"></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <a href="#" class="cart-btn button button-white button-light"><i
                                                class="icon-line-plus"></i>Add to Cart</a>
                                    </div>
                                    <div class="product-desc">
                                        <div class="product-title">
                                            <h3><a href="product">Sports Shoe</a></h3>
                                            <span><a href="#">Nike</a></span>
                                        </div>
                                        <div class="product-price"><ins>$33.49</ins></div>
                                    </div>
                                </div>
                            </div>

                            <!-- Shop Item 3
            ============================================= -->
                            <div class="col-lg-4 col-md-6 mb-4 sf-jackets sf-new">
                                <div class="product">
                                    <div class="product-image position-relative">
                                        <div class="fslider" data-pagi="false" data-speed="400" data-pause="200000">
                                            <div class="flexslider">
                                                <div class="slider-wrap">
                                                    <div class="slide">
                                                        <a href="product"><img
                                                                src="{{asset('store/demos/store/images/product/3-1.jpg')}}" alt="Jackets"></a>
                                                    </div>
                                                    <div class="slide">
                                                        <a href="product"><img
                                                                src="{{asset('store/demos/store/images/product/3-2.jpg')}}" alt="Jackets"></a>
                                                    </div>
                                                    <div class="slide">
                                                        <a href="product"><img
                                                                src="{{asset('store/demos/store/images/product/3-3.jpg')}}" alt="Jackets"></a>
                                                    </div>
                                                    <div class="slide">
                                                        <a href="product"><img
                                                                src="{{asset('store/demos/store/images/product/3-4.jpg')}}" alt="Jackets"></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <a href="#" class="cart-btn button button-white button-light"><i
                                                class="icon-line-plus"></i>Add to Cart</a>
                                    </div>
                                    <div class="product-desc">
                                        <div class="product-title">
                                            <h3><a href="product">Men Black Jackets</a></h3>
                                            <span><a href="#">Jackets</a></span>
                                        </div>
                                        <div class="product-price"><ins>$51.49</ins></div>
                                    </div>
                                </div>
                            </div>

                            <!-- Shop Item 4
            ============================================= -->
                            <div class="col-lg-4 col-md-6 mb-4 sf-t-shirts sf-new">
                                <div class="product">
                                    <div class="product-image position-relative">
                                        <div class="fslider" data-pagi="false" data-speed="400" data-pause="200000">
                                            <div class="flexslider">
                                                <div class="slider-wrap">
                                                    <div class="slide">
                                                        <a href="product"><img
                                                                src="{{asset('store/demos/store/images/product/4-1.jpg')}}" alt="T-shirt"></a>
                                                    </div>
                                                    <div class="slide">
                                                        <a href="product"><img
                                                                src="{{asset('store/demos/store/images/product/4-2.jpg')}}" alt="T-shirt"></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <a href="#" class="cart-btn button button-white button-light"><i
                                                class="icon-line-plus"></i>Add to Cart</a>
                                    </div>
                                    <div class="product-desc">
                                        <div class="product-title">
                                            <h3><a href="product">Roundneck T-shirt</a></h3>
                                            <span><a href="#">T-shirt</a></span>
                                        </div>
                                        <div class="product-price"><ins>$17.49</ins></div>
                                    </div>
                                </div>
                            </div>

                            <!-- Shop Item 5
            ============================================= -->
                            <div class="col-lg-4 col-md-6 mb-4 sf-t-shirts">
                                <div class="product">
                                    <div class="product-image position-relative">
                                        <div class="fslider" data-pagi="false" data-speed="400" data-pause="200000">
                                            <div class="flexslider">
                                                <div class="slider-wrap">
                                                    <div class="slide">
                                                        <a href="product"><img
                                                                src="{{asset('store/demos/store/images/men/items/2.jpg')}}" alt="T-Shirts"></a>
                                                    </div>
                                                    <div class="slide">
                                                        <a href="product"><img
                                                                src="{{asset('store/demos/store/images/men/items/2-1.jpg')}}"
                                                                alt="T-Shirts"></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <a href="#" class="cart-btn button button-white button-light"><i
                                                class="icon-line-plus"></i>Add to Cart</a>
                                    </div>
                                    <div class="product-desc">
                                        <div class="product-title">
                                            <h3><a href="product">Grey T-Shirt</a></h3>
                                            <span><a href="#">T-Shirt</a></span>
                                        </div>
                                        <div class="product-price"><ins>$11.49</ins></div>
                                    </div>
                                </div>
                            </div>

                            <!-- Shop Item 6
            ============================================= -->
                            <div class="col-lg-4 col-md-6 mb-4 sf-shoes sf-sportswear sf-new">
                                <div class="product">
                                    <div class="product-image position-relative">
                                        <div class="fslider" data-pagi="false" data-speed="400" data-pause="200000">
                                            <div class="flexslider">
                                                <div class="slider-wrap">
                                                    <div class="slide">
                                                        <a href="product"><img
                                                                src="{{asset('store/demos/store/images/product/6-1.jpg')}}" alt="Shoes"></a>
                                                    </div>
                                                    <div class="slide">
                                                        <a href="product"><img
                                                                src="{{asset('store/demos/store/images/product/6-2.jpg')}}" alt="Shoes"></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <a href="#" class="cart-btn button button-white button-light"><i
                                                class="icon-line-plus"></i>Add to Cart</a>
                                    </div>
                                    <div class="product-desc">
                                        <div class="product-title">
                                            <h3><a href="product">Men White Escaper Sports Shoes</a>
                                            </h3>
                                            <span><a href="#">Sports Shoes</a></span>
                                        </div>
                                        <div class="product-price"><ins>$29.49</ins></div>
                                    </div>
                                </div>
                            </div>

                            <!-- Shop Item 7
            ============================================= -->
                            <div class="col-lg-4 col-md-6 mb-4 sf-watches">
                                <div class="product">
                                    <div class="product-image position-relative">
                                        <div class="fslider" data-arrows="true" data-pagi="false" data-speed="400"
                                            data-pause="6000" data-thumbs="true">
                                            <div class="flexslider">
                                                <div class="slider-wrap">
                                                    <div class="slide"
                                                        data-thumb="{{asset('store/demos/store/images/men/items/1.jpg')}}">
                                                        <a href="product"><img
                                                                src="{{asset('store/demos/store/images/men/items/1.jpg')}}" alt="Watch"></a>
                                                    </div>
                                                    <div class="slide"
                                                        data-thumb="{{asset('store/demos/store/images/men/items/1-1.jpg')}}">
                                                        <a href="product"><img
                                                                src="{{asset('store/demos/store/images/men/items/1-1.jpg')}}" alt="Watch"></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <a href="#" class="cart-btn button button-white button-light"><i
                                                class="icon-line-plus"></i>Add to Cart</a>
                                    </div>
                                    <div class="product-desc">
                                        <div class="product-title">
                                            <h3><a href="product">Rounded Watch</a></h3>
                                            <span><a href="#">Watches</a></span>
                                        </div>
                                        <div class="product-price"><ins>$78</ins></div>
                                    </div>
                                </div>
                            </div>

                            <!-- Shop Item 8
            ============================================= -->
                            <div class="col-lg-4 col-md-6 mb-4 sf-jeans sf-new">
                                <div class="product">
                                    <div class="product-image">
                                        <a href="product"><img
                                                src="{{asset('store/demos/store/images/product/8-1.jpg')}}" alt="Jeans"></a>
                                        <a href="product"><img
                                                src="{{asset('store/demos/store/images/product/8-2.jpg')}}" alt="Jeans"></a>
                                        <a href="#" class="cart-btn button button-white button-light"><i
                                                class="icon-line-plus"></i>Add to Cart</a>
                                    </div>
                                    <div class="product-desc">
                                        <div class="product-title">
                                            <h3><a href="product">Navi Blue Jeans</a></h3>
                                            <span><a href="#">Jeans</a></span>
                                        </div>
                                        <div class="product-price"><ins>$69</ins></div>
                                    </div>
                                </div>
                            </div>

                            <!-- Shop Item 9
            ============================================= -->
                            <div class="col-lg-4 col-md-6 mb-4 sf-shorts sf-sportswear">
                                <div class="product">
                                    <div class="product-image">
                                        <a href="product"><img
                                                src="{{asset('store/demos/store/images/men/items/6.jpg')}}" alt="Shorts"></a>
                                        <a href="product"><img
                                                src="{{asset('store/demos/store/images/men/items/6-1.jpg')}}" alt="Shorts"></a>
                                        <a href="#" class="cart-btn button button-white button-light"><i
                                                class="icon-line-plus"></i>Add to Cart</a>
                                    </div>
                                    <div class="product-desc">
                                        <div class="product-title">
                                            <h3><a href="product">Jogging Shorts</a></h3>
                                            <span><a href="#">Shorts</a></span>
                                        </div>
                                        <div class="product-price"><ins>$9.99</ins></div>
                                    </div>
                                </div>
                            </div>

                            <!-- Shop Item 10
            ============================================= -->
                            <div class="col-lg-4 col-md-6 mb-4 sf-sweaters">
                                <div class="product">
                                    <div class="product-image">
                                        <a href="product"><img
                                                src="{{asset('store/demos/store/images/men/items/3.jpg')}}" alt="Sweaters"></a>
                                        <a href="product"><img
                                                src="{{asset('store/demos/store/images/men/items/3.jpg')}}" alt="Sweaters"></a>
                                        <a href="#" class="cart-btn button button-white button-light"><i
                                                class="icon-line-plus"></i>Add to Cart</a>
                                    </div>
                                    <div class="product-desc">
                                        <div class="product-title">
                                            <h3><a href="product">Woolen Sweaters</a></h3>
                                            <span><a href="#">Sweaters</a></span>
                                        </div>
                                        <div class="product-price"><ins>$71</ins></div>
                                    </div>
                                </div>
                            </div>

                            <!-- Shop Item 11
            ============================================= -->
                            <div class="col-lg-4 col-md-6 mb-4 sf-trousers sf-new">
                                <div class="product">
                                    <div class="product-image">
                                        <div class="fslider" data-arrows="false" data-pagi="false" data-speed="400"
                                            data-pause="6000" data-thumbs="true">
                                            <div class="flexslider">
                                                <div class="slider-wrap">
                                                    <div class="slide"
                                                        data-thumb="{{asset('store/demos/store/images/men/items/4.jpg')}}">
                                                        <a href="product"><img
                                                                src="{{asset('store/demos/store/images/men/items/4.jpg')}}" alt="Trouser"></a>
                                                    </div>
                                                    <div class="slide"
                                                        data-thumb="{{asset('store/demos/store/images/men/items/4-1.jpg')}}">
                                                        <a href="product"><img
                                                                src="{{asset('store/demos/store/images/men/items/4-1.jpg')}}"
                                                                alt="Trouser"></a>
                                                    </div>
                                                    <div class="slide"
                                                        data-thumb="{{asset('store/demos/store/images/men/items/4-2.jpg')}}">
                                                        <a href="product"><img
                                                                src="{{asset('store/demos/store/images/men/items/4-2.jpg')}}"
                                                                alt="Trouser"></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <a href="#" class="cart-btn button button-white button-light"><i
                                                class="icon-line-plus"></i>Add to Cart</a>
                                    </div>
                                    <div class="product-desc">
                                        <div class="product-title">
                                            <h3><a href="product">Light Blue Trouser</a></h3>
                                            <span><a href="#">Trouser</a></span>
                                        </div>
                                        <div class="product-price"><ins>$19.99</ins></div>
                                    </div>
                                </div>
                            </div>

                            <!-- Shop Item 12
            ============================================= -->
                            <div class="col-lg-4 col-md-6 mb-4 sf-shorts sf-new">
                                <div class="product">
                                    <div class="product-image">
                                        <div class="fslider" data-arrows="false" data-pagi="false" data-speed="400"
                                            data-pause="6000" data-thumbs="true">
                                            <div class="flexslider">
                                                <div class="slider-wrap">
                                                    <div class="slide"
                                                        data-thumb="{{asset('store/demos/store/images/men/items/5.jpg')}}">
                                                        <a href="product"><img
                                                                src="{{asset('store/demos/store/images/men/items/5.jpg')}}" alt="Shorts"></a>
                                                    </div>
                                                    <div class="slide"
                                                        data-thumb="{{asset('store/demos/store/images/men/items/5-1.jpg')}}">
                                                        <a href="product"><img
                                                                src="{{asset('store/demos/store/images/men/items/5-1.jpg')}}" alt="Shorts"></a>
                                                    </div>
                                                    <div class="slide"
                                                        data-thumb="{{asset('store/demos/store/images/men/items/5-2.jpg')}}">
                                                        <a href="product"><img
                                                                src="{{asset('store/demos/store/images/men/items/5-2.jpg')}}" alt="Shorts"></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <a href="#" class="cart-btn button button-white button-light"><i
                                                class="icon-line-plus"></i>Add to Cart</a>
                                    </div>
                                    <div class="product-desc">
                                        <div class="product-title">
                                            <h3><a href="product">Shorts - Pack of 3</a></h3>
                                            <span><a href="#">Shorts</a></span>
                                        </div>
                                        <div class="product-price"><ins>$99</ins></div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

            <div class="section mb-0 py-6">
                <div class="container-fluid">
                    <div class="row justify-content-center m-auto" style="max-width: 1000px;">
                        <div class="col-md-7">
                            <p class="h6 mb-0 text-muted">Conveniently network effective total linkage via intermandated
                                opportunities. Distinctively <a
                                    href="mailto:noreply@canvas.com"><u>noreply@canvas.com</u></a> premium products.</p>
                        </div>
                        <div class="col-md-5 mt-3 mt-md-0">
                            <h2 class="h1 fw-bold ls--1 color"><a href="tel:09876543211">(+0) 9876 543210</a></h2>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section><!-- #content end -->

@endsection
