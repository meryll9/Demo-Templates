<!-- Primary Navigation
      ============================================= -->
<nav class="primary-menu style-ecommerce menu-spacing-margin">

    <ul class="menu-container">
        <li class="menu-item current"><a class="menu-link" href="/">
                <div>Home</div>
            </a></li>
        <li class="menu-item mega-menu"><a class="menu-link" href="#">
                <div>Men</div>
            </a>
            <div class="mega-menu-content mega-menu-style-2"
                style="background-image: url({{ asset('/ecommerce/images/shop/shop-menu.jpg') }}); background-repeat: no-repeat; background-position: right bottom;">
                <div class="container">
                    <div class="row">
                        <ul class="sub-menu-container mega-menu-column col-xl-2 col-lg-3">
                            <li class="menu-item">
                                <div class="widget">

                                    <div class="portfolio-item">
                                        <div class="portfolio-image">
                                            <a href="#"><img
                                                    src="{{ asset('ecommerce/demos/ecommerce/images/items/1-1.jpg') }}"
                                                    alt="Grey Bag"></a>
                                            <div class="product-cart"><a href="#"><i
                                                        class="icon-shopping-cart"></i></a></div>
                                            <div class="product-quickview"><a href="#" data-bs-toggle="tooltip"
                                                    data-bs-placement="top" title="Available Sizes: S | M | L"><i
                                                        class="icon-info"></i></a></div>
                                        </div>
                                        <div class="portfolio-desc pb-0">
                                            <div>
                                                <h3><a href="#">Leather Bag</a></h3>
                                                <span class="mt-0"><a href="#">Messenger
                                                        Bag</a></span>
                                                <div class="rating-stars">
                                                    <i class="icon-star3"></i><i class="icon-star3"></i><i
                                                        class="icon-star3"></i><i class="icon-star3"></i><i
                                                        class="icon-star3"></i>
                                                </div>
                                            </div>
                                            <div class="item-price">
                                                <span>&euro;29.99</span>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </li>
                        </ul>
                        <ul class="sub-menu-container mega-menu-column col-lg-3">
                            <li class="menu-item">
                                <div class="widget">

                                    <h4 class="highlight-me">Last Viewed Items</h4>

                                    <div class="posts-sm row col-mb-30" id="recent-shop-list-sidebar">
                                        <div class="entry col-12">
                                            <div class="grid-inner row g-0">
                                                <div class="col-auto">
                                                    <div class="entry-image">
                                                        <a href="#"><img
                                                                src="{{ asset('ecommerce/demos/ecommerce/images/items/2-1.jpg') }}"
                                                                alt="Image"></a>
                                                    </div>
                                                </div>
                                                <div class="col ps-3">
                                                    <div class="entry-title">
                                                        <h4><a href="#">Women's Hand Bag</a></h4>
                                                    </div>
                                                    <div class="entry-meta no-separator">
                                                        <ul class="sub-menu-container">
                                                            <li class="color">$15</li>
                                                            <li class="menu-item"><i class="icon-star3"></i><i
                                                                    class="icon-star3"></i><i
                                                                    class="icon-star3"></i><i
                                                                    class="icon-star3"></i><i
                                                                    class="icon-star3"></i></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="entry col-12">
                                            <div class="grid-inner row g-0">
                                                <div class="col-auto">
                                                    <div class="entry-image">
                                                        <a href="#"><img
                                                                src="{{ asset('ecommerce/demos/ecommerce/images/items/3-1.jpg') }}"
                                                                alt="Image"></a>
                                                    </div>
                                                </div>
                                                <div class="col ps-3">
                                                    <div class="entry-title">
                                                        <h4><a href="#">Laptop Bag</a></h4>
                                                    </div>
                                                    <div class="entry-meta no-separator">
                                                        <ul class="sub-menu-container">
                                                            <li class="color">$19</li>
                                                            <li class="menu-item"><i class="icon-star3"></i><i
                                                                    class="icon-star3"></i><i
                                                                    class="icon-star-empty"></i><i
                                                                    class="icon-star-empty"></i><i
                                                                    class="icon-star-empty"></i></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="entry col-12">
                                            <div class="grid-inner row g-0">
                                                <div class="col-auto">
                                                    <div class="entry-image">
                                                        <a href="#"><img
                                                                src="{{ asset('ecommerce/demos/ecommerce/images/items/4-1.jpg') }}"
                                                                alt="Image"></a>
                                                    </div>
                                                </div>
                                                <div class="col ps-3">
                                                    <div class="entry-title">
                                                        <h4><a href="#">College Backpack</a></h4>
                                                    </div>
                                                    <div class="entry-meta no-separator">
                                                        <ul class="sub-menu-container">
                                                            <li class="color">$19.99</li>
                                                            <li class="menu-item"><i class="icon-star3"></i><i
                                                                    class="icon-star3"></i><i
                                                                    class="icon-star3"></i><i
                                                                    class="icon-star-half-full"></i><i
                                                                    class="icon-star-empty"></i></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </li>
                        </ul>
                        <ul class="sub-menu-container mega-menu-column col-lg-2">
                            <li class="menu-item mega-menu-title"><a class="menu-link" href="#">
                                    <div>Categories</div>
                                </a>
                                <ul class="sub-menu-container">
                                    <li class="menu-item"><a class="menu-link" href="#">
                                            <div><i class="icon-t-shirt"></i>Travel Bags</div>
                                        </a></li>
                                    <li class="menu-item"><a class="menu-link" href="#">
                                            <div><i class="icon-laptop2"></i>Backpacks</div>
                                        </a></li>
                                    <li class="menu-item"><a class="menu-link" href="#">
                                            <div><i class="icon-clock2"></i>Leather Bag</div>
                                        </a></li>
                                    <li class="menu-item"><a class="menu-link" href="#">
                                            <div><i class="icon-plane"></i>Travel Bag</div>
                                        </a></li>
                                    <li class="menu-item"><a class="menu-link" href="#">
                                            <div><i class="icon-barbell"></i>Trolley</div>
                                        </a></li>
                                    <li class="menu-item"><a class="menu-link" href="#">
                                            <div><i class="icon-heart3"></i>Workout Bag</div>
                                        </a></li>
                                    <li class="menu-item"><a class="menu-link" href="#">
                                            <div><i class="icon-film"></i>Hand Bag</div>
                                        </a></li>
                                </ul>
                            </li>
                        </ul>
                        <ul class="sub-menu-container mega-menu-column col-lg-2 border-start-0">
                            <li class="menu-item mega-menu-title"><a class="menu-link" href="#">
                                    <div>Popular Brands</div>
                                </a>
                                <ul class="sub-menu-container">
                                    <li class="menu-item"><a class="menu-link" href="#">
                                            <div>United Colors</div>
                                        </a></li>
                                    <li class="menu-item"><a class="menu-link" href="#">
                                            <div>Burton London</div>
                                        </a></li>
                                    <li class="menu-item"><a class="menu-link" href="#">
                                            <div>Calvin Clein Jeans</div>
                                        </a></li>
                                    <li class="menu-item"><a class="menu-link" href="#">
                                            <div>Dorothy Perkins</div>
                                        </a></li>
                                    <li class="menu-item"><a class="menu-link" href="#">
                                            <div>Tommy Hilfiger</div>
                                        </a></li>
                                    <li class="menu-item"><a class="menu-link" href="#">
                                            <div>Gucci</div>
                                        </a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </li>
        <li class="menu-item mega-menu mega-menu-small"><a class="menu-link" href="#">
                <div>Women</div>
            </a>
            <div class="mega-menu-content mega-menu-style-2">
                <div class="container">
                    <div class="row">
                        <ul class="sub-menu-container mega-menu-column col-lg-6">
                            <li class="menu-item mega-menu-title"><a class="menu-link" href="#">
                                    <div>Footwear</div>
                                </a>
                                <ul class="sub-menu-container">
                                    <li class="menu-item"><a class="menu-link" href="#">
                                            <div>Casual Shoes</div>
                                        </a></li>
                                    <li class="menu-item"><a class="menu-link" href="#">
                                            <div>Formal Shoes</div>
                                        </a></li>
                                    <li class="menu-item"><a class="menu-link" href="#">
                                            <div>Sports shoes</div>
                                        </a></li>
                                    <li class="menu-item"><a class="menu-link" href="#">
                                            <div>Flip Flops</div>
                                        </a></li>
                                    <li class="menu-item"><a class="menu-link" href="#">
                                            <div>Slippers</div>
                                        </a></li>
                                    <li class="menu-item"><a class="menu-link" href="#">
                                            <div>Sports Sandals</div>
                                        </a></li>
                                    <li class="menu-item"><a class="menu-link" href="#">
                                            <div>Party Shoes</div>
                                        </a></li>
                                </ul>
                            </li>
                        </ul>
                        <ul class="sub-menu-container mega-menu-column col-lg-6">
                            <li class="menu-item mega-menu-title"><a class="menu-link" href="#">
                                    <div>Clothing</div>
                                </a>
                                <ul class="sub-menu-container">
                                    <li class="menu-item"><a class="menu-link" href="#">
                                            <div>Casual Shirts</div>
                                        </a></li>
                                    <li class="menu-item"><a class="menu-link" href="#">
                                            <div>T-Shirts</div>
                                        </a></li>
                                    <li class="menu-item"><a class="menu-link" href="#">
                                            <div>Collared Tees</div>
                                        </a></li>
                                    <li class="menu-item"><a class="menu-link" href="#">
                                            <div>Pants / Trousers</div>
                                        </a></li>
                                    <li class="menu-item"><a class="menu-link" href="#">
                                            <div>Ethnic Wear</div>
                                        </a></li>
                                    <li class="menu-item"><a class="menu-link" href="#">
                                            <div>Jeans</div>
                                        </a></li>
                                    <li class="menu-item"><a class="menu-link" href="#">
                                            <div>Sweamwear</div>
                                        </a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </li><!-- .mega-menu end -->
        <li class="menu-item"><a class="menu-link" href="#">
                <div>Accessories</div>
            </a></li>
        <li class="menu-item"><a class="menu-link" href="#">
                <div>Sale</div>
            </a></li>
        <li class="menu-item"><a class="menu-link" href="#">
                <div>Blog</div>
            </a></li>
        <li class="menu-item"><a class="menu-link" href="#">
                <div>Contact</div>
            </a></li>
    </ul>

</nav><!-- #primary-menu end -->
