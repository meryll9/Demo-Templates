@extends('layout.main')
@section('content')
    <!-- Slider
      ============================================= -->
    <section id="slider" class="slider-element min-vh-100 include-header"
        style="background: url({{ asset('/crowdfunding/demos/crowdfunding/images/hero.svg') }}) no-repeat center bottom / cover;">
        <div class="slider-inner">

            <div class="vertical-middle">
                <div class="container py-5">
                    <div class="row">
                        <div class="col-lg-6 col-md-8">
                            <div class="slider-title">
                                <h1 class="fw-semibold">{{ env('APP_TAGLINE') }}</h1>
                                <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. A earum
                                    quod facilis praesentium quaerat fuga voluptatum aliquam vitae, voluptate asperiores!
                                </p>
                            </div>
                            <a href="#modal-register" data-lightbox="inline"
                                class="button button-large fw-semibold button-rounded ls0 nott ms-0">Start A Campaign</a>
                            <a href="#modal-register" data-lightbox="inline"
                                class="button button-large fw-semibold button-border button-rounded ls0 nott">Sign
                                In</a><br>
                            <a href="#">How It Works <i class="icon-caret-right1 position-relative"
                                    style="top: 2px"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <img src="{{ asset('crowdfunding/demos/crowdfunding/images/hero-img.svg') }}" alt="" class="slider-img parallax"
                data-start="margin-top: 0px;" data-400="margin-top: 50px;">

        </div>
    </section><!-- #Slider End -->

    <!-- Content
      ============================================= -->
    <section id="content">
        <div class="content-wrap p-0">

            <div class="section bg-transparent mb-0 pb-0 border-0">
                <div class="container bg-color-light border-0 rounded-3 p-4 p-md-5">
                    <div class="row justify-content-between align-items-center bottommargin-sm">
                        <div class="col-lg-7 col-sm-7">
                            <div class="heading-block border-bottom-0 mb-3">
                                <h2>How People investing works</h2>
                            </div>
                            <p class="text-muted mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iste
                                reprehenderit fugiat quisquam nesciunt. Dicta quis, rem consequuntur est beatae qui.</p>
                        </div>
                        <div class="col-lg-3 col-sm-5 mt-4 mt-sm-0">
                            <div class="bg-white center px-5 py-3 border">
                                <div class="counter counter-large color fw-bold"><span data-from="0" data-to="86"
                                        data-refresh-interval="10" data-speed="1500"></span>%</div>
                                <div class="line my-2"></div>
                                <h5 class="fw-normal mb-1">Funded Campaign</h5>
                            </div>
                        </div>
                    </div>
                    <div class="clear"></div>
                    <div class="row justify-content-around">
                        <div class="col-lg-3 col-md-4 mt-5">
                            <div class="feature-text">
                                <div class="fbox-text color">1.</div>
                                <h3>Register Your Account.</h3>
                            </div>
                            <p>Credibly maximize highly efficient data through alignments.</p>
                        </div>
                        <div class="col-lg-3 col-md-4 mt-5">
                            <div class="feature-text">
                                <div class="fbox-text color">2.</div>
                                <h3>Choose your Investor.</h3>
                            </div>
                            <p>Professionally develop intermandated resources through.</p>
                        </div>
                        <div class="col-lg-3 col-md-4 mt-5">
                            <div class="feature-text">
                                <div class="fbox-text color">3.</div>
                                <h3>Fund the Innovation.</h3>
                            </div>
                            <p>Highly efficient data through multifunctional alignments.</p>
                        </div>
                    </div>

                </div>
            </div>

            <div class="section border-0 bg-transparent mb-1">
                <div class="container">
                    <div class="row justify-content-between align-items-end bottommargin">
                        <div class="col-md-7">
                            <div class="heading-block border-bottom-0 mb-3">
                                <h2>Ready to Fund? Explore Projects</h2>
                            </div>
                            <p class="text-muted mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iste
                                reprehenderit fugiat quisquam nesciunt. Dicta quis, rem consequuntur est beatae qui.</p>
                        </div>
                        <div class="col-md-5 d-flex flex-row justify-content-md-end mt-4 mt-md-0">
                            <div class="dropdown">
                                <a class="dropdown-toggle button button-border button-rounded ls0 fw-semibold nott btn"
                                    href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true"
                                    aria-expanded="false">
                                    All Projects
                                </a>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="#">+ Tech &amp; Innovations</a>
                                    <a class="dropdown-item" href="#">+ Art</a>
                                    <a class="dropdown-item" href="#">+ Travel</a>
                                    <a class="dropdown-item" href="#">+ Music</a>
                                    <a class="dropdown-item" href="#">+ Gadgets</a>
                                    <a class="dropdown-item" href="#">+ Fashion</a>
                                </div>
                            </div>
                            <div class="dropdown">
                                <a class="dropdown-toggle button button-border button-rounded ls0 fw-semibold nott btn"
                                    href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true"
                                    aria-expanded="false">
                                    Most Funded
                                </a>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="#">Recent Projects</a>
                                    <a class="dropdown-item" href="#">Popular Projects</a>
                                    <a class="dropdown-item" href="#">Ending Soon</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">

                        <!-- Item 1 -->
                        <div class="col-lg-4 col-sm-6 mb-4">
                            <div class="i-products">
                                <div class="products-image">
                                    <a href="single">
                                        <img src="{{ asset('crowdfunding/demos/crowdfunding/images/items/1.jpg') }}"
                                            alt="Image 1">
                                        <span class="badge">Gadgets</span>
                                    </a>
                                </div>
                                <div class="products-desc">
                                    <h3><a href="single">iDrone 2019</a></h3>
                                    <p>Holisticly conceptualize transparent niche markets whereas top-line web services.
                                        Monotonectally parallel task cross-unit platforms rather than.</p>
                                    <div class="clear"></div>
                                    <ul class="skills">
                                        <li data-percent="73">
                                            <span class="d-flex justify-content-between w-100">
                                                <span class="counter"><span data-from="0" data-to="73"
                                                        data-refresh-interval="10"
                                                        data-speed="2000"></span><strong>%</strong> Funded</span>
                                                <span class="counter"><span data-from="0" data-to="20"
                                                        data-refresh-interval="3" data-speed="1200"></span> Days Left</span>
                                            </span>
                                            <div class="progress"></div>
                                        </li>
                                    </ul>
                                    <div class="products-hoverlays">
                                        <span class="products-location"><i class="icon-map-marker1"></i> Melbourne,
                                            Australia</span>
                                        <ul class="list-group-flush my-3 mb-0">
                                            <li class="list-group-item"><strong>$12,32,000</strong> Pledged</li>
                                            <li class="list-group-item"><strong>123</strong> Partcipants</li>
                                            <li class="list-group-item"><strong>345</strong> Contributions</li>
                                            <li class="list-group-item"><strong>20</strong> days remaining</li>
                                        </ul>
                                        <div class="product-user d-flex align-items-center mt-4">
                                            <img src="{{ asset('crowdfunding/demos/crowdfunding/images/investors/1.jpg') }}"
                                                alt="">
                                            <a href="single">By Jackson Pot </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Item 2 -->
                        <div class="col-lg-4 col-sm-6 mb-4">
                            <div class="i-products">
                                <div class="products-image">
                                    <a href="single">
                                        <img src="{{ asset('crowdfunding/demos/crowdfunding/images/items/2.jpg') }}"
                                            alt="Image 2">
                                        <span class="badge">Lights</span>
                                    </a>
                                </div>
                                <div class="products-desc">
                                    <h3><a href="single">Bluetooth Lights</a></h3>
                                    <p>Appropriately monetize diverse leadership skills vis-a-vis unique core competencies.
                                        Enthusiastically transition future-proof models.</p>
                                    <div class="clear"></div>
                                    <ul class="skills">
                                        <li data-percent="85">
                                            <span class="d-flex justify-content-between w-100">
                                                <span class="counter"><span data-from="0" data-to="85"
                                                        data-refresh-interval="10"
                                                        data-speed="2000"></span><strong>%</strong> Funded</span>
                                                <span class="counter"><span data-from="0" data-to="11"
                                                        data-refresh-interval="3" data-speed="1200"></span> Days Left</span>
                                            </span>
                                            <div class="progress"></div>
                                        </li>
                                    </ul>
                                    <div class="products-hoverlays">
                                        <span class="products-location"><i class="icon-map-marker1"></i> Singapore</span>
                                        <ul class="list-group-flush my-3 mb-0">
                                            <li class="list-group-item"><strong>$12,32,000</strong> Pledged</li>
                                            <li class="list-group-item"><strong>123</strong> Partcipants</li>
                                            <li class="list-group-item"><strong>345</strong> Contributions</li>
                                            <li class="list-group-item"><strong>11</strong> days remaining</li>
                                        </ul>
                                        <div class="product-user d-flex align-items-center mt-4">
                                            <img src="{{ asset('crowdfunding/demos/crowdfunding/images/investors/2.jpg') }}"
                                                alt="">
                                            <a href="single">By Hanson Deck</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Item 3 -->
                        <div class="col-lg-4 col-sm-6 mb-4">
                            <div class="i-products">
                                <div class="products-image">
                                    <a href="single">
                                        <img src="{{ asset('crowdfunding/demos/crowdfunding/images/items/3.jpg') }}"
                                            alt="Image 3">
                                        <span class="badge">Travel</span>
                                    </a>
                                </div>
                                <div class="products-desc">
                                    <h3><a href="single">Electric Bike</a></h3>
                                    <p>Authoritatively drive distributed platforms whereas quality methods of empowerment.
                                        Conveniently deploy error-free portals vis-a-vis internal.</p>
                                    <div class="clear"></div>
                                    <ul class="skills">
                                        <li data-percent="89">
                                            <span class="d-flex justify-content-between w-100">
                                                <span class="counter"><span data-from="0" data-to="89"
                                                        data-refresh-interval="10"
                                                        data-speed="2000"></span><strong>%</strong> Funded</span>
                                                <span class="counter"><span data-from="0" data-to="19"
                                                        data-refresh-interval="3" data-speed="1200"></span> Days Left</span>
                                            </span>
                                            <div class="progress"></div>
                                        </li>
                                    </ul>
                                    <div class="products-hoverlays">
                                        <span class="products-location"><i class="icon-map-marker1"></i> Dubai, UAE</span>
                                        <ul class="list-group-flush my-3 mb-0">
                                            <li class="list-group-item"><strong>$12,32,000</strong> Pledged</li>
                                            <li class="list-group-item"><strong>123</strong> Partcipants</li>
                                            <li class="list-group-item"><strong>345</strong> Contributions</li>
                                            <li class="list-group-item"><strong>19</strong> days remaining</li>
                                        </ul>
                                        <div class="product-user d-flex align-items-center mt-4">
                                            <img src="{{ asset('crowdfunding/demos/crowdfunding/images/investors/3.jpg') }}"
                                                alt="">
                                            <a href="single">By Eleanor Fant</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Item 4 -->
                        <div class="col-lg-4 col-sm-6 mb-4">
                            <div class="i-products">
                                <div class="products-image">
                                    <a href="single">
                                        <img src="{{ asset('crowdfunding/demos/crowdfunding/images/items/4.jpg') }}"
                                            alt="Image 4">
                                        <span class="badge">Fashion</span>
                                    </a>
                                </div>
                                <div class="products-desc">
                                    <h3><a href="single">Waterproof Shoe</a></h3>
                                    <p>Quickly enhance e-business partnerships whereas pandemic strategic theme areas.
                                        Progressively fashion exceptional ROI after viral opportunities.</p>
                                    <div class="clear"></div>
                                    <ul class="skills">
                                        <li data-percent="92">
                                            <span class="d-flex justify-content-between w-100">
                                                <span class="counter"><span data-from="0" data-to="92"
                                                        data-refresh-interval="10"
                                                        data-speed="2000"></span><strong>%</strong> Funded</span>
                                                <span class="counter"><span data-from="0" data-to="16"
                                                        data-refresh-interval="3" data-speed="1200"></span> Days Left</span>
                                            </span>
                                            <div class="progress"></div>
                                        </li>
                                    </ul>
                                    <div class="products-hoverlays">
                                        <span class="products-location"><i class="icon-map-marker1"></i> Singapore</span>
                                        <ul class="list-group-flush my-3 mb-0">
                                            <li class="list-group-item"><strong>$12,32,000</strong> Pledged</li>
                                            <li class="list-group-item"><strong>123</strong> Partcipants</li>
                                            <li class="list-group-item"><strong>345</strong> Contributions</li>
                                            <li class="list-group-item"><strong>16</strong> days remaining</li>
                                        </ul>
                                        <div class="product-user d-flex align-items-center mt-4">
                                            <img src="{{ asset('crowdfunding/demos/crowdfunding/images/investors/4.jpg') }}"
                                                alt="">
                                            <a href="single">By Giles Posture</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Item 5 -->
                        <div class="col-lg-4 col-sm-6 mb-4">
                            <div class="i-products">
                                <div class="products-image">
                                    <a href="single">
                                        <img src="{{ asset('crowdfunding/demos/crowdfunding/images/items/5.jpg') }}"
                                            alt="Image 5">
                                        <span class="badge">Music</span>
                                    </a>
                                </div>
                                <div class="products-desc">
                                    <h3><a href="single">Wooden Guiter</a></h3>
                                    <p>Continually whiteboard standardized outsourcing before mission-critical deliverables.
                                        Compellingly e-enable integrated action items fully tested.</p>
                                    <div class="clear"></div>
                                    <ul class="skills">
                                        <li data-percent="100">
                                            <span class="d-flex justify-content-between w-100">
                                                <span class="counter"><span data-from="0" data-to="100"
                                                        data-refresh-interval="10"
                                                        data-speed="2000"></span><strong>%</strong> Funded</span>
                                                <span class="counter"><span data-from="0" data-to="7"
                                                        data-refresh-interval="3" data-speed="1200"></span> Days Left</span>
                                            </span>
                                            <div class="progress"></div>
                                        </li>
                                    </ul>
                                    <div class="products-hoverlays">
                                        <span class="products-location"><i class="icon-map-marker1"></i> Mumbai,
                                            India</span>
                                        <ul class="list-group-flush my-3 mb-0">
                                            <li class="list-group-item"><strong>$12,32,000</strong> Pledged</li>
                                            <li class="list-group-item"><strong>123</strong> Partcipants</li>
                                            <li class="list-group-item"><strong>345</strong> Contributions</li>
                                            <li class="list-group-item"><strong>7</strong> days remaining</li>
                                        </ul>
                                        <div class="product-user d-flex align-items-center mt-4">
                                            <img src="{{ asset('crowdfunding/demos/crowdfunding/images/investors/5.jpg') }}"
                                                alt="">
                                            <a href="single">By Alan Fresco</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Item 6 -->
                        <div class="col-lg-4 col-sm-6 mb-4">
                            <div class="i-products">
                                <div class="products-image">
                                    <a href="single">
                                        <img src="{{ asset('crowdfunding/demos/crowdfunding/images/items/6.jpg') }}"
                                            alt="Image 6">
                                        <span class="badge">Travel</span>
                                    </a>
                                </div>
                                <div class="products-desc">
                                    <h3><a href="single">Travel Blanket</a></h3>
                                    <p>Assertively foster an expanded array of meta-services via corporate ideas. Quickly
                                        simplify virtual results and client-based.</p>
                                    <div class="clear"></div>
                                    <ul class="skills">
                                        <li data-percent="80">
                                            <span class="d-flex justify-content-between w-100">
                                                <span class="counter"><span data-from="0" data-to="73"
                                                        data-refresh-interval="10"
                                                        data-speed="2000"></span><strong>%</strong> Funded</span>
                                                <span class="counter"><span data-from="0" data-to="28"
                                                        data-refresh-interval="3" data-speed="1200"></span> Days Left</span>
                                            </span>
                                            <div class="progress"></div>
                                        </li>
                                    </ul>
                                    <div class="products-hoverlays">
                                        <span class="products-location"><i class="icon-map-marker1"></i> Bali,
                                            Indonesia</span>
                                        <ul class="list-group-flush my-3 mb-0">
                                            <li class="list-group-item"><strong>$12,32,000</strong> Pledged</li>
                                            <li class="list-group-item"><strong>123</strong> Partcipants</li>
                                            <li class="list-group-item"><strong>345</strong> Contributions</li>
                                            <li class="list-group-item"><strong>28</strong> days remaining</li>
                                        </ul>
                                        <div class="product-user d-flex align-items-center mt-4">
                                            <img src="{{ asset('crowdfunding/demos/crowdfunding/images/investors/6.jpg') }}"
                                                alt="">
                                            <a href="single">By Hilary Ouse</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="section m-0">

                <div class="container">

                    <h3 class="center mb-5">Join completely utilize transparent users.</h3>

                    <div class="row g-0 align-items-center p-4 bg-white rounded overflow-hidden flex-md-row shadow-sm position-relative mx-auto"
                        style="max-width: 1000px">
                        <div class="col p-4 d-flex flex-column center">
                            <h3 class="mb-0">Alan Fresco</h3>
                            <p class="text-black-50">Amazon Inc.</p>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perferendis, voluptas adipisci
                                fugiat, nostrum aspernatur quos libero possimus velit impedit cumque.</p>
                            <img src="{{ asset('crowdfunding/demos/business/images/clients/amazon.svg') }}" alt="">
                        </div>
                        <div class="col-auto">
                            <img src="{{ asset('crowdfunding/demos/crowdfunding/images/credit.jpg') }}" alt="" width="400">
                        </div>
                    </div>

                    <div class="row justify-content-center align-items-center mx-auto mt-5" style="max-width: 1000px">
                        <div class="col center"><img
                                src="{{ asset('crowdfunding/demos/crowdfunding/images/sponsors/amazon.svg') }}" alt=""
                                width="100"></div>
                        <div class="col center"><img
                                src="{{ asset('crowdfunding/demos/crowdfunding/images/sponsors/cnn.svg') }}" alt=""
                                width="100"></div>
                        <div class="col center"><img
                                src="{{ asset('crowdfunding/demos/crowdfunding/images/sponsors/google.svg') }}" alt=""
                                width="100"></div>
                        <div class="col center"><img
                                src="{{ asset('crowdfunding/demos/crowdfunding/images/sponsors/linkedin.svg') }}" alt=""
                                width="100"></div>
                    </div>
                    <div class="row justify-content-center align-items-center mx-auto mt-3" style="max-width: 1000px">
                        <div class="col center"><img
                                src="{{ asset('crowdfunding/demos/crowdfunding/images/sponsors/netflix.svg') }}" alt=""
                                width="100"></div>
                        <div class="col center"><img
                                src="{{ asset('crowdfunding/demos/crowdfunding/images/sponsors/slack.svg') }}" alt=""
                                width="100"></div>
                        <div class="col center"><img
                                src="{{ asset('crowdfunding/demos/crowdfunding/images/sponsors/vimeo.svg') }}" alt=""
                                width="100"></div>
                        <div class="col center"><img
                                src="{{ asset('crowdfunding/demos/crowdfunding/images/sponsors/jetblue.svg') }}" alt=""
                                width="100"></div>
                        <div class="col center"><img
                                src="{{ asset('crowdfunding/demos/crowdfunding/images/sponsors/github.svg') }}" alt=""
                                width="100"></div>
                    </div>

                </div>

            </div>

            <div class="section bg-transparent p-0 m-0">

                <div class="row g-0">
                    <div class="col"><a href="#"><img class="op-ts op-1 h-op-06"
                                src="{{ asset('crowdfunding/demos/crowdfunding/images/investors/1.jpg') }}"
                                alt="Investor Image"></a></div>
                    <div class="col"><a href="#"><img class="op-ts op-1 h-op-06"
                                src="{{ asset('crowdfunding/demos/crowdfunding/images/investors/2.jpg') }}"
                                alt="Investor Image"></a></div>
                    <div class="col"><a href="#"><img class="op-ts op-1 h-op-06"
                                src="{{ asset('crowdfunding/demos/crowdfunding/images/investors/3.jpg') }}"
                                alt="Investor Image"></a></div>
                    <div class="col"><a href="#"><img class="op-ts op-1 h-op-06"
                                src="{{ asset('crowdfunding/demos/crowdfunding/images/investors/4.jpg') }}"
                                alt="Investor Image"></a></div>
                    <div class="col"><a href="#"><img class="op-ts op-1 h-op-06"
                                src="{{ asset('crowdfunding/demos/crowdfunding/images/investors/5.jpg') }}"
                                alt="Investor Image"></a></div>
                    <div class="col"><a href="#"><img class="op-ts op-1 h-op-06"
                                src="{{ asset('crowdfunding/demos/crowdfunding/images/investors/6.jpg') }}"
                                alt="Investor Image"></a></div>
                    <div class="col"><a href="#"><img class="op-ts op-1 h-op-06"
                                src="{{ asset('crowdfunding/demos/crowdfunding/images/investors/7.jpg') }}"
                                alt="Investor Image"></a></div>
                    <div class="col"><a href="#"><img class="op-ts op-1 h-op-06"
                                src="{{ asset('crowdfunding/demos/crowdfunding/images/investors/8.jpg') }}"
                                alt="Investor Image"></a></div>
                    <div class="col"><a href="#"><img class="op-ts op-1 h-op-06"
                                src="{{ asset('crowdfunding/demos/crowdfunding/images/investors/9.jpg') }}"
                                alt="Investor Image"></a></div>
                    <div class="col"><a href="#"><img class="op-ts op-1 h-op-06"
                                src="{{ asset('crowdfunding/demos/crowdfunding/images/investors/10.jpg') }}"
                                alt="Investor Image"></a></div>
                    <div class="col"><a href="#"><img class="op-ts op-1 h-op-06"
                                src="{{ asset('crowdfunding/demos/crowdfunding/images/investors/11.jpg') }}"
                                alt="Investor Image"></a></div>
                </div>
                <div class="row g-0">
                    <div class="col d-none d-md-flex"><a href="#"><img class="op-ts op-1 h-op-06"
                                src="{{ asset('crowdfunding/demos/crowdfunding/images/investors/23.jpg') }}"
                                alt="Investor Image"></a></div>
                    <div class="col-md-10 d-md-flex justify-content-between align-items-center px-5 py-4 py-md-0">
                        <div class="mb-3 mb-md-0">
                            <h3 class="mb-0 color">Join with of Our Investors.</h3>
                            <p class="mb-0 text-muted fw-normal">Dramatically enable one-to-one solutions excellent.</p>
                        </div>
                        <a href="#modal-register" data-lightbox="inline"
                            class="button button-large fw-semibold button-rounded ls0 nott m-0">Become an Investor</a>
                    </div>
                    <div class="col d-none d-md-flex"><a href="#"><img class="op-ts op-1 h-op-06"
                                src="{{ asset('crowdfunding/demos/crowdfunding/images/investors/24.jpg') }}"
                                alt="Investor Image"></a></div>
                </div>
                <div class="row g-0">
                    <div class="col"><a href="#"><img class="op-ts op-1 h-op-06"
                                src="{{ asset('crowdfunding/demos/crowdfunding/images/investors/12.jpg') }}"
                                alt="Investor Image"></a></div>
                    <div class="col"><a href="#"><img class="op-ts op-1 h-op-06"
                                src="{{ asset('crowdfunding/demos/crowdfunding/images/investors/13.jpg') }}"
                                alt="Investor Image"></a></div>
                    <div class="col"><a href="#"><img class="op-ts op-1 h-op-06"
                                src="{{ asset('crowdfunding/demos/crowdfunding/images/investors/14.jpg') }}"
                                alt="Investor Image"></a></div>
                    <div class="col"><a href="#"><img class="op-ts op-1 h-op-06"
                                src="{{ asset('crowdfunding/demos/crowdfunding/images/investors/15.jpg') }}"
                                alt="Investor Image"></a></div>
                    <div class="col"><a href="#"><img class="op-ts op-1 h-op-06"
                                src="{{ asset('crowdfunding/demos/crowdfunding/images/investors/16.jpg') }}"
                                alt="Investor Image"></a></div>
                    <div class="col"><a href="#"><img class="op-ts op-1 h-op-06"
                                src="{{ asset('crowdfunding/demos/crowdfunding/images/investors/17.jpg') }}"
                                alt="Investor Image"></a></div>
                    <div class="col"><a href="#"><img class="op-ts op-1 h-op-06"
                                src="{{ asset('crowdfunding/demos/crowdfunding/images/investors/18.jpg') }}"
                                alt="Investor Image"></a></div>
                    <div class="col"><a href="#"><img class="op-ts op-1 h-op-06"
                                src="{{ asset('crowdfunding/demos/crowdfunding/images/investors/19.jpg') }}"
                                alt="Investor Image"></a></div>
                    <div class="col"><a href="#"><img class="op-ts op-1 h-op-06"
                                src="{{ asset('crowdfunding/demos/crowdfunding/images/investors/20.jpg') }}"
                                alt="Investor Image"></a></div>
                    <div class="col"><a href="#"><img class="op-ts op-1 h-op-06"
                                src="{{ asset('crowdfunding/demos/crowdfunding/images/investors/21.jpg') }}"
                                alt="Investor Image"></a></div>
                    <div class="col"><a href="#"><img class="op-ts op-1 h-op-06"
                                src="{{ asset('crowdfunding/demos/crowdfunding/images/investors/22.jpg') }}"
                                alt="Investor Image"></a></div>
                </div>

            </div>
        </div>
    </section><!-- #content end -->

@endsection
