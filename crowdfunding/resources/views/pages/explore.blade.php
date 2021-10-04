@extends('layout.main')
@section('content')
    <!-- Content
      ============================================= -->
    <section id="content">
        <div class="content-wrap pt-0">

            <div class="section mt-0 overflow-visible">
                <div class="container">
                    <div class="row justify-content-center center">
                        <div class="col-lg-7">
                            <div class="heading-block border-bottom-0 mb-4">
                                <h2 class="mb-3">Ready to Fund? Explore Projects</h2>
                                <p class="text-muted mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iste
                                    reprehenderit fugiat quisquam nesciunt. Dicta quis, rem consequuntur est beatae qui.</p>
                            </div>
                            <div class="input-group input-group-lg mb-4">
                                <input type="text" class="form-control w-auto" aria-label="Text input with dropdown button"
                                    placeholder="Search..">
                                <select class="form-select col col-4">
                                    <option selected value="All">All</option>
                                    <option value="Business">Business</option>
                                    <option value="Design">Design</option>
                                    <option value="Tech">Tech</option>
                                    <option value="Fashion">Fashion</option>
                                    <option value="Music">Music</option>
                                    <option value="Software">Software</option>
                                    <option value="Hardware">Hardware</option>
                                </select>
                                <button class="btn bg-color text-white border-0" type="button"><i
                                        class="icon-search"></i></button>
                            </div>
                            <a class="button button-rounded" href="#" role="button">Popular</a>
                            <a class="button button-rounded button-dark button-black" href="#" role="button">Newest</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="container">
                <div class="row">

                    <!-- Item 1 -->
                    <div class="col-lg-4 col-sm-6 mb-4">
                        <div class="i-products">
                            <div class="products-image">
                                <a href="single">
                                    <img src="{{asset('crowdfunding/demos/crowdfunding/images/items/1.jpg')}}" alt="Image 1">
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
                                                    data-refresh-interval="10" data-speed="2000"></span><strong>%</strong>
                                                Funded</span>
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
                                        <img src="{{asset('crowdfunding/demos/crowdfunding/images/investors/1.jpg')}}" alt="">
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
                                    <img src="{{asset('crowdfunding/demos/crowdfunding/images/items/2.jpg')}}" alt="Image 2">
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
                                                    data-refresh-interval="10" data-speed="2000"></span><strong>%</strong>
                                                Funded</span>
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
                                        <img src="{{asset('crowdfunding/demos/crowdfunding/images/investors/2.jpg')}}" alt="">
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
                                    <img src="{{asset('crowdfunding/demos/crowdfunding/images/items/3.jpg')}}" alt="Image 3">
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
                                                    data-refresh-interval="10" data-speed="2000"></span><strong>%</strong>
                                                Funded</span>
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
                                        <img src="{{asset('crowdfunding/demos/crowdfunding/images/investors/3.jpg')}}" alt="">
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
                                    <img src="{{asset('crowdfunding/demos/crowdfunding/images/items/4.jpg')}}" alt="Image 4">
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
                                                    data-refresh-interval="10" data-speed="2000"></span><strong>%</strong>
                                                Funded</span>
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
                                        <img src="{{asset('crowdfunding/demos/crowdfunding/images/investors/4.jpg')}}" alt="">
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
                                    <img src="{{asset('crowdfunding/demos/crowdfunding/images/items/5.jpg')}}" alt="Image 5">
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
                                                    data-refresh-interval="10" data-speed="2000"></span><strong>%</strong>
                                                Funded</span>
                                            <span class="counter"><span data-from="0" data-to="7"
                                                    data-refresh-interval="3" data-speed="1200"></span> Days Left</span>
                                        </span>
                                        <div class="progress"></div>
                                    </li>
                                </ul>
                                <div class="products-hoverlays">
                                    <span class="products-location"><i class="icon-map-marker1"></i> Mumbai, India</span>
                                    <ul class="list-group-flush my-3 mb-0">
                                        <li class="list-group-item"><strong>$12,32,000</strong> Pledged</li>
                                        <li class="list-group-item"><strong>123</strong> Partcipants</li>
                                        <li class="list-group-item"><strong>345</strong> Contributions</li>
                                        <li class="list-group-item"><strong>7</strong> days remaining</li>
                                    </ul>
                                    <div class="product-user d-flex align-items-center mt-4">
                                        <img src="{{asset('crowdfunding/demos/crowdfunding/images/investors/5.jpg')}}" alt="">
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
                                    <img src="{{asset('crowdfunding/demos/crowdfunding/images/items/6.jpg')}}" alt="Image 6">
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
                                                    data-refresh-interval="10" data-speed="2000"></span><strong>%</strong>
                                                Funded</span>
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
                                        <img src="{{asset('crowdfunding/demos/crowdfunding/images/investors/6.jpg')}}" alt="">
                                        <a href="single">By Hilary Ouse</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <ul class="pagination justify-content-center mt-4">
                    <li class="page-item disabled"><a class="page-link" href="#" tabindex="-1" aria-disabled="true">
                            <span class="op-05" aria-hidden="true">&laquo;</span></a></li>
                    <li class="page-item active"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item"><a class="page-link" href="#">4</a></li>
                    <li class="page-item"><a class="page-link" href="#">5</a></li>
                    <li class="page-item"><a class="page-link" href="#" aria-label="Next"><span
                                aria-hidden="true">&raquo;</span></a></li>
                </ul>
            </div>

        </div>
    </section><!-- #content end -->

@endsection
