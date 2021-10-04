@extends('layout.main')
@section('content')
    <!-- Slider
      ============================================= -->
    <section id="slider" class="slider-element swiper_wrapper min-vh-75 justify-content-start dark"
        style="background: #063639">

        <div class="container">
            <div class="row h-100 align-items-center justify-content-between">
                <div class="col-lg-4 col-md-6 py-5 py-md-0">
                    <div class="heading-block border-bottom-0 mb-4">
                        <h5 class="mb-1 text-uppercase ls2 color op-06">About Us</h5>
                        <h2 class="mb-4 nott">Unconditional Help</h2>
                    </div>
                    <div class="svg-line bottommargin-sm">
                        <img src="{{asset('nonprofit/demos/nonprofit/images/divider-1.svg')}}" alt="svg divider" height="20">
                    </div>
                    <p class="mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores, quasi,
                        dolorum blanditiis eius laboriosam, quidem temporibus dolor quod voluptatum perferendis.</p>
                    <a href="demo-nonprofit-causes-single.html"
                        class="button button-rounded button-xlarge bg-color button-light text-dark shadow nott ls0 m-0">Donate
                        Now</a>

                </div>
                <div class="col-lg-8 col-md-6">
                    <img src="{{asset('nonprofit/demos/nonprofit/images/about/1.png')}}" alt="Image" class="full-width-img">
                </div>
            </div>
        </div>

    </section>

    <!-- Content
      ============================================= -->
    <section id="content">
        <div class="content-wrap py-0 overflow-visible">

            <div class="container">

                <div class="slider-feature">
                    <div class="row gutter-10 justify-content-center">
                        <div class="col-md-3">
                            <div
                                class="card center border-start-0 border-end-0 border-top-0 border-bottom border-bottom shadow py-3 rounded-0 fw-semibold text-uppercase ls1 h-translate-y-sm all-ts">
                                <div class="card-body">
                                    <img src="{{asset('nonprofit/demos/nonprofit/images/icons/breakfast.svg')}}" alt="Counter Icon" width="70"
                                        class="mb-4">
                                    <div class="counter font-secondary"><span data-from="100" data-to="11265"
                                            data-refresh-interval="50" data-speed="2100" data-comma="true"></span>+</div>
                                    <h5 class="nott ls0 mb-0 mt-2 text-muted">Meals Surved</h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div
                                class="card center border-start-0 border-end-0 border-top-0 border-bottom border-bottom shadow py-3 rounded-0 fw-semibold text-uppercase ls1 h-translate-y-sm all-ts">
                                <div class="card-body">
                                    <img src="{{asset('nonprofit/demos/nonprofit/images/icons/volunteers.svg')}}" alt="Counter Icon" width="70"
                                        class="mb-4">
                                    <div class="counter font-secondary"><span data-from="100" data-to="2500"
                                            data-refresh-interval="50" data-speed="2200" data-comma="true"></span>+</div>
                                    <h5 class="nott ls0 mb-0 mt-2 text-muted">Volunteers</h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div
                                class="card center border-start-0 border-end-0 border-top-0 border-bottom border-bottom shadow py-3 rounded-0 fw-semibold text-uppercase ls1 h-translate-y-sm all-ts">
                                <div class="card-body">
                                    <img src="{{asset('nonprofit/demos/nonprofit/images/icons/educated.svg')}}" alt="Counter Icon" width="70"
                                        class="mb-4">
                                    <div class="counter font-secondary"><span data-from="100" data-to="17408"
                                            data-refresh-interval="25" data-speed="2300" data-comma="true"></span>+</div>
                                    <h5 class="nott ls0 mb-0 mt-2 text-muted">Person Educated</h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div
                                class="card center border-start-0 border-end-0 border-top-0 border-bottom border-bottom shadow py-3 rounded-0 fw-semibold text-uppercase ls1 h-translate-y-sm all-ts">
                                <div class="card-body">
                                    <img src="{{asset('nonprofit/demos/nonprofit/images/icons/shelter.svg')}}" alt="Counter Icon" width="70"
                                        class="mb-4">
                                    <div class="counter font-secondary"><span data-from="150" data-to="13413"
                                            data-refresh-interval="50" data-speed="2100" data-comma="true"></span>+</div>
                                    <h5 class="nott ls0 mb-0 mt-2 text-muted">Got Shelter</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <div class="clear"></div>

            <div class="section m-0 bg-transparent pt-0">
                <div class="container clearfix">
                    <div class="row">
                        <div class="col-lg-8">
                            <h3 class="mb-2">Our Mission <span>&amp;</span> Goals</h3>
                            <div class="svg-line mb-2 clearfix">
                                <img src="{{asset('nonprofit/demos/nonprofit/images/divider-1.svg')}}" alt="svg divider" height="10">
                            </div>
                            <p class="mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veniam
                                deleniti veritatis nostrum, temporibus vero maxime quisquam quaerat doloremque fugit
                                nesciunt.</p>
                            <div class="row mission-goals gutter-30 mb-0">
                                <div class="col-md-6">
                                    <div class="feature-box fbox-plain bg-white mx-0">
                                        <div class="fbox-media position-relative col-auto p-0 me-4">
                                            <img src="{{asset('nonprofit/demos/nonprofit/images/icons/home.svg')}}" alt="Featured Icon 1"
                                                width="50">
                                        </div>
                                        <div class="fbox-content">
                                            <h3 class="nott ls0"><a href="#" class="text-dark">Homeless
                                                    Charities.</a></h3>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="feature-box fbox-plain bg-white mx-0">
                                        <div class="fbox-media position-relative col-auto p-0 me-4">
                                            <img src="{{asset('nonprofit/demos/nonprofit/images/icons/health.svg')}}" alt="Featured Icon 2"
                                                width="50">
                                        </div>
                                        <div class="fbox-content">
                                            <h3 class="nott ls0"><a href="#" class="text-dark">Health
                                                    Charities.</a></h3>
                                            <p>Continually restore adaptive paradigms after "outside.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="feature-box fbox-plain bg-white mx-0">
                                        <div class="fbox-media position-relative col-auto p-0 me-4">
                                            <img src="{{asset('nonprofit/demos/nonprofit/images/icons/education.svg')}}" alt="Featured Icon 3"
                                                width="50">
                                        </div>
                                        <div class="fbox-content">
                                            <h3 class="nott ls0"><a href="#" class="text-dark">Education
                                                    Charities.</a></h3>
                                            <p>Quickly benchmark client-centered vortals without cutting.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="feature-box fbox-plain bg-white mx-0">
                                        <div class="fbox-media position-relative col-auto p-0 me-4">
                                            <img src="{{asset('nonprofit/demos/nonprofit/images/icons/animal.svg')}}" alt="Featured Icon 4"
                                                width="50">
                                        </div>
                                        <div class="fbox-content">
                                            <h3 class="nott ls0"><a href="#" class="text-dark">Animal
                                                    Charities.</a></h3>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="feature-box fbox-plain bg-white mx-0">
                                        <div class="fbox-media position-relative col-auto p-0 me-4">
                                            <img src="{{asset('nonprofit/demos/nonprofit/images/icons/environmental.svg')}}" alt="Featured Icon 5"
                                                width="50">
                                        </div>
                                        <div class="fbox-content">
                                            <h3 class="nott ls0"><a href="#" class="text-dark">Eco Charities.</a>
                                            </h3>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="feature-box fbox-plain bg-white mx-0">
                                        <div class="fbox-media position-relative col-auto p-0 me-4">
                                            <img src="{{asset('nonprofit/demos/nonprofit/images/icons/food.svg')}}" alt="Featured Icon 6"
                                                width="50">
                                        </div>
                                        <div class="fbox-content">
                                            <h3 class="nott ls0"><a href="#" class="text-dark">Food
                                                    Charities.</a></h3>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 mt-5 mt-lg-0">
                            <h3 class="mb-2">Latest Videos</h3>
                            <div class="svg-line mb-2 clearfix">
                                <img src="{{asset('nonprofit/demos/nonprofit/images/divider-1.svg')}}" alt="svg divider" height="10">
                            </div>
                            <p class="mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit excepturi
                                ipsa!</p>
                            <div class="clear"></div>
                            <a href="https://www.youtube.com/watch?v=VqmFKnHG5q8" data-lightbox="iframe"
                                class="shadow-sm d-flex align-items-center justify-content-center play-video rounded position-relative bg-color mt-3 clearfix"
                                style="background: linear-gradient(rgba(0,0,0,.05), rgba(0,0,0,.01)), url({{asset('/nonprofit/demos/nonprofit/images/others/5.jpg')}}) no-repeat center center / cover; height: 300px"><i
                                    class="icon-play"></i></a>
                            <div class="row mt-4" data-lightbox="gallery">
                                <div class="col-sm-6">
                                    <a href="https://www.youtube.com/watch?v=hc7iuc5KZ8Y" data-lightbox="iframe"
                                        class="shadow-sm d-flex align-items-center justify-content-center play-video rounded position-relative bg-color left"
                                        style="background: url({{asset('/nonprofit/demos/nonprofit/images/others/4.jpg')}}) no-repeat center center / cover; height: 140px"><i
                                            class="icon-play icon-small"></i></a>
                                </div>

                                <div class="col-sm-6 mt-4 mt-sm-0">
                                    <a href="https://www.youtube.com/watch?v=VqmFKnHG5q8" data-lightbox="iframe"
                                        class="shadow-sm d-flex align-items-center justify-content-center play-video rounded position-relative bg-color left"
                                        style="background: url({{asset('/nonprofit/demos/nonprofit/images/others/2.jpg')}}) no-repeat center center / cover; height: 140px"><i
                                            class="icon-play icon-small"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="section mt-3"
                style="background: url({{asset('/nonprofit/demos/nonprofit/images/others/section-bg.jpg')}}) no-repeat center center / cover; padding: 80px 0;">
                <div class="container clearfix">
                    <div class="row justify-content-center mb-5">
                        <div class="col-md-7 center">
                            <div class="heading-block border-bottom-0 mb-4">
                                <h2 class="mb-4 nott">Happy Volunteers</h2>
                            </div>
                            <div class="svg-line bottommargin-sm clearfix">
                                <img src="{{asset('nonprofit/demos/nonprofit/images/divider-1.svg')}}" alt="svg divider" height="20">
                            </div>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores, quasi, dolorum blanditiis
                                eius laboriosam, quidem temporibus, dolor quod voluptatum perferendis ullam. Odio sequi at
                                dolore consequatur ad, odit expedita tenetur.</p>
                        </div>
                    </div>
                    <div class="row justify-content-around">
                        <div class="col-lg-2 col-md-4 col-6">
                            <div class="team overflow-hidden">
                                <div class="team-image">
                                    <img src="{{asset('nonprofit/demos/nonprofit/images/volunteers/1.jpg')}}" alt="Penny Tool">
                                </div>
                                <div class="team-desc">
                                    <h4 class="team-title pt-3 mb-0 fw-medium nott">Penny Tool<small>Volunteers</small>
                                    </h4>
                                </div>
                            </div>
                            <div class="team mt-5">
                                <div class="team-image">
                                    <img src="{{asset('nonprofit/demos/nonprofit/images/volunteers/6.jpg')}}" alt="Piff Jenkins">
                                </div>
                                <div class="team-desc">
                                    <h4 class="team-title pt-3 mb-0 fw-medium nott">Piff Jenkins<small>Volunteers</small>
                                    </h4>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-4 col-6 mt-4">
                            <div class="team">
                                <div class="team-image">
                                    <img src="{{asset('nonprofit/demos/nonprofit/images/volunteers/2.jpg')}}" alt="Rodney Artich">
                                </div>
                                <div class="team-desc">
                                    <h4 class="team-title pt-3 mb-0 fw-medium nott">Rodney Artich<small>Volunteers</small>
                                    </h4>
                                </div>
                            </div>
                            <div class="team mt-5">
                                <div class="team-image">
                                    <img src="{{asset('nonprofit/demos/nonprofit/images/volunteers/7.jpg')}}" alt="Weir Doe">
                                </div>
                                <div class="team-desc">
                                    <h4 class="team-title pt-3 mb-0 fw-medium nott">Weir Doe<small>Volunteers</small></h4>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-4 col-6">
                            <div class="team">
                                <div class="team-image">
                                    <img src="{{asset('nonprofit/demos/nonprofit/images/volunteers/3.jpg')}}" alt="Jackson Pot">
                                </div>
                                <div class="team-desc">
                                    <h4 class="team-title pt-3 mb-0 fw-medium nott">Jackson Pot<small>Volunteers</small>
                                    </h4>
                                </div>
                            </div>
                            <div class="team mt-5">
                                <div class="team-image">
                                    <img src="{{asset('nonprofit/demos/nonprofit/images/volunteers/8.jpg')}}" alt="Phillip Anthropy ">
                                </div>
                                <div class="team-desc">
                                    <h4 class="team-title pt-3 mb-0 fw-medium nott">Phillip Anthropy
                                        <small>Volunteers</small></h4>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-4 col-6 mt-5">
                            <div class="team">
                                <div class="team-image">
                                    <img src="{{asset('nonprofit/demos/nonprofit/images/volunteers/4.jpg')}}" alt="Eric Widget">
                                </div>
                                <div class="team-desc">
                                    <h4 class="team-title pt-3 mb-0 fw-medium nott">Eric Widget<small>Volunteers</small>
                                    </h4>
                                </div>
                            </div>
                            <div class="team mt-5">
                                <div class="team-image">
                                    <img src="{{asset('nonprofit/demos/nonprofit/images/volunteers/9.jpg')}}" alt="Giles Posture">
                                </div>
                                <div class="team-desc">
                                    <h4 class="team-title pt-3 mb-0 fw-medium nott">Giles Posture<small>Volunteers</small>
                                    </h4>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-4 col-6 mt-1">
                            <div class="team">
                                <div class="team-image">
                                    <img src="{{asset('nonprofit/demos/nonprofit/images/volunteers/5.jpg')}}" alt="Gunther Beard">
                                </div>
                                <div class="team-desc">
                                    <h4 class="team-title pt-3 mb-0 fw-medium nott">Gunther Beard<small>Volunteers</small>
                                    </h4>
                                </div>
                            </div>
                            <div class="team full-border imagescalein mt-5">
                                <a href="#" class="team-image">
                                    <img src="{{asset('nonprofit/demos/nonprofit/images/volunteers/10.jpg')}}" alt="Apply Volunteer"
                                        class="rounded-0">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="section bg-transparent">
                <div class="container clearfix">
                    <div class="row justify-content-center">
                        <div class="col-md-7 center">
                            <div class="heading-block border-bottom-0 mb-4">
                                <h2 class="mb-4 nott">Who Work With Us</h2>
                            </div>
                            <div class="svg-line bottommargin-sm clearfix">
                                <img src="{{asset('nonprofit/demos/nonprofit/images/divider-1.svg')}}" alt="svg divider" height="15">
                            </div>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores, quasi, dolorum blanditiis
                                eius laboriosam, quidem temporibus, dolor quod voluptatum perferendis ullam. Odio sequi at
                                dolore consequatur ad, odit expedita tenetur.</p>
                        </div>
                        <div class="clear"></div>
                        <div class="col-md-11 my-5">
                            <ul class="clients-grid grid-2 grid-sm-3 grid-md-5 mb-0">
                                <li class="grid-item"><a href="#"><img src="{{asset('nonprofit/images/clients/1.png')}}" alt="Clients"></a>
                                </li>
                                <li class="grid-item"><a href="#"><img src="{{asset('nonprofit/images/clients/2.png')}}" alt="Clients"></a>
                                </li>
                                <li class="grid-item"><a href="#"><img src="{{asset('nonprofit/images/clients/3.png')}}" alt="Clients"></a>
                                </li>
                                <li class="grid-item"><a href="#"><img src="{{asset('nonprofit/images/clients/4.png')}}" alt="Clients"></a>
                                </li>
                                <li class="grid-item"><a href="#"><img src="{{asset('nonprofit/images/clients/5.png')}}" alt="Clients"></a>
                                </li>
                                <li class="grid-item"><a href="#"><img src="{{asset('nonprofit/images/clients/6.png')}}" alt="Clients"></a>
                                </li>
                                <li class="grid-item"><a href="#"><img src="{{asset('nonprofit/images/clients/7.png')}}" alt="Clients"></a>
                                </li>
                                <li class="grid-item"><a href="#"><img src="{{asset('nonprofit/images/clients/8.png')}}" alt="Clients"></a>
                                </li>
                                <li class="grid-item"><a href="#"><img src="{{asset('nonprofit/images/clients/9.png')}}" alt="Clients"></a>
                                </li>
                                <li class="grid-item"><a href="#"><img src="{{asset('nonprofit/images/clients/10.png')}}" alt="Clients"></a>
                                </li>
                            </ul>
                        </div>
                        <h5 class="fw-normal text-black-50 mb-0">If you want to work with for nonprofit? <a
                                href="#"><u>Send your Details</u></a>.</h5>
                    </div>
                </div>
            </div>

        </div>
    </section><!-- #content end -->
@endsection
