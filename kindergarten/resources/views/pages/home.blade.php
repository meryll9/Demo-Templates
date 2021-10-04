@extends('layout.main')
@section('content')
<!-- Hero============================================= -->
<section id="slider" class="slider-element include-header" style="background-color: #FDE3A1;">

    <div class="position-absolute top-0 start-0 w-100 h-100"
        style="background: transparent url({{ asset('/kindergarten/demos/kindergarten/images/hero-bg-icons.svg') }})) center center / cover; opacity: 0.04">
    </div>

    <div class="container">
        <div class="row align-items-center min-vh-100 pt-5 pb-4">
            <div class="col-lg-6">
                <h6 class="mb-4 ls1 text-uppercase fw-normal">A Second Home for your Kid</h6>
                <h1 class="display-3 fw-bolder">{{ env('APP_TAGLINE') }} <br> <span
                        class="color"></span></h1>
                <p class="mt-4 mb-5 fw-light">Rapidiously conceptualize inexpensive value through functionalized markets.
                    Enthusiastically integrate distinctive web services vis-a-vis end-to-end ROI. Assertively fashion
                    best-of-breed products.</p>
                <a href="#" class="btn text-white bg-color rounded-1 py-3 px-5 fw-medium">Enroll Now <i
                        class="icon-line-arrow-right position-relative" style="top: 2px"></i></a>
                <a href="https://www.youtube.com/watch?v=P3Huse9K6Xs"
                    class="btn bg-white rounded-1 px-5 py-3 fw-medium ms-2" data-lightbox="iframe"><i
                        class="icon-play-circle me-1" style="position: relative; top: 1px; margin-right: 5px;"></i>
                    Watch Video</a>
            </div>
            <div class="col-lg-6 align-self-end mt-5 mt-lg-0">
                <img src="{{ asset('kindergarten/demos/kindergarten/images/hero.png') }}" alt="Hero Bg">
            </div>
        </div>
    </div>

    <div class="shape-divider" data-shape="wave-2" data-position="bottom" data-height="80"></div>

    <div class="position-relative d-none d-sm-block">
        <img src="{{ asset('kindergarten/demos/kindergarten/images/fish2.png') }}" alt="Fish"
            class="background-img pos-right float-anim" style="top: -120px">
    </div>

</section>

<!-- Content
  ============================================= -->
<section id="content">
    <div class="content-wrap">

        <div class="container">
            <h2 class="color h1 fw-bold mb-5">What services we provide:</h2>
            <div class="row col-mb-50">
                <div class="col-lg-8">
                    <div class="row col-mb-50">
                        <div class="col-md-6">
                            <div class="feature-box">
                                <div class="fbox-icon">
                                    <img src="{{ asset('kindergarten/demos/kindergarten/images/icons/puzzle.svg') }}"
                                        alt="Icon" class="p-2 rounded" style="background-color: #BDE0E0">
                                </div>
                                <div class="fbox-content">
                                    <h3 class="nott ls0">Fun Games</h3>
                                    <p>Energistically negotiate effective web services after installed base sources.
                                        Conveniently productivate.</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="feature-box">
                                <div class="fbox-icon mb-4">
                                    <img src="{{ asset('kindergarten/demos/kindergarten/images/icons/meal.svg') }}"
                                        alt="Icon" class="p-2 rounded" style="background-color: #F9E8DF">
                                </div>
                                <div class="fbox-content">
                                    <h3 class="nott ls0">Healthy Meal</h3>
                                    <p>Conveniently evolve cross-platform initiatives and interdependent technology
                                        dynamically reliable.</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="feature-box">
                                <div class="fbox-icon mb-4">
                                    <img src="{{ asset('kindergarten/demos/kindergarten/images/icons/teacher.svg') }}"
                                        alt="Icon" class="p-2 rounded" style="background-color: #DEE6ED">
                                </div>
                                <div class="fbox-content">
                                    <h3 class="nott ls0">Professional Teachers</h3>
                                    <p>Enthusiastically mesh reliable products without sustainable resources rapidiously
                                        seize.</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="feature-box">
                                <div class="fbox-icon mb-4">
                                    <img src="{{ asset('kindergarten/demos/kindergarten/images/icons/soap.svg') }}"
                                        alt="Icon" class="p-2 rounded" style="background-color: #d6ECCD">
                                </div>
                                <div class="fbox-content">
                                    <h3 class="nott ls0">Clean and Sanitized</h3>
                                    <p>Enthusiastically disseminate granular schemas vis-a-vis timely collaboration and
                                        idea-sharing evisculate.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 mt-5 mt-lg-0">
                    <div class="card border-0 p-3 rounded-6" style="background-color: #eddee6;">
                        <div class="card-body">
                            <img src="{{ asset('kindergarten/demos/kindergarten/images/card-img.png') }}"
                                alt="Card Image" style="margin-top: -80px;">
                            <h3 class="card-title mt-4">How we care for your child?</h3>
                            <h5 class="fw-normal font-body h6 lh-base mb-0 mt-2">Lorem ipsum dolor sit amet consectetur
                                adipisicing elit. Natus mollitia nemo</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="section py-6" style="background-color: #F6F3EE;">
            <div class="shape-divider" data-shape="wave-5" data-height="50"></div>
            <div class="position-absolute top-0 start-0 w-100 h-100"
                style="background: url({{ asset('/kindergarten/demos/kindergarten/images/hero-bg-icons.svg') }})) center center / cover; opacity: 0.04">
            </div>
            <div class="container py-5">
                <ul class="nav nav-pills justify-content-around mx-auto mw-sm mb-3 flex-column flex-md-row"
                    role="tablist">
                    <li class="nav-item " role="presentation">
                        <button class="nav-link color1 active" id="age-toddler-tab" data-bs-toggle="pill"
                            data-bs-target="#age-toddler" type="button" role="tab" aria-controls="age-toddler"
                            aria-selected="true">Toddler<span>1.5 - 3 years</span></button>
                    </li>
                    <li class="nav-item " role="presentation">
                        <button class="nav-link color2" id="age-preschool-tab" data-bs-toggle="pill"
                            data-bs-target="#age-preschool" type="button" role="tab" aria-controls="age-preschool"
                            aria-selected="false">Preschool<span>2 - 3 years</span></button>
                    </li>
                    <li class="nav-item " role="presentation">
                        <button class="nav-link color3" id="age-kindergarten-tab" data-bs-toggle="pill"
                            data-bs-target="#age-kindergarten" type="button" role="tab" aria-controls="age-kindergarten"
                            aria-selected="false">Kindergarten<span>3 - 4 years</span></button>
                    </li>
                    <li class="nav-item " role="presentation">
                        <button class="nav-link color4" id="age-prekindergarten-tab" data-bs-toggle="pill"
                            data-bs-target="#age-prekindergarten" type="button" role="tab"
                            aria-controls="age-prekindergarten" aria-selected="false">Pre-Kindergarten <span>4 - 5
                                years</span></button>
                    </li>
                </ul>
                <div class="clear"></div>
                <div class="tab-content topmargin-sm">
                    <div class="tab-pane fade show active" id="age-toddler" role="tabpanel"
                        aria-labelledby="age-toddler-tab">
                        <div class="row col-mb-30">
                            <div class="col-lg-4 col-md-6">
                                <div class="card border-0 h-100 shadow-sm">
                                    <h3 class="card-header font-primary p-4 color1">ABC's of Learning</h3>
                                    <div class="card-body p-4">
                                        Our curriculum is specifically designed to assist your toddler in developing the
                                        essentials for early.

                                        <ul class="ps-3 mt-4 mb-0">
                                            <li class="mb-3">Globally whiteboard visionary bandwidth and
                                                interactive catalysts for change. Globally repurpose.</li>
                                            <li class="mb-3">Professionally revolutionize standardized
                                                infomediaries via business methods of empowerment. Collaboratively
                                                cultivate.</li>
                                            <li class="mb-3">Distinctively parallel task functional internal
                                                or "organic" sources and front-end best.</li>
                                            <li class="mb-3">Rapidiously customize worldwide channels via
                                                accurate e-tailers. Monotonectally re-engineer premium scenarios.</li>
                                            <li class="mb-3">Synergistically disseminate plug-and-play
                                                manufactured products without alternative e-tailers. Conveniently
                                                pontificate interoperable.</li>
                                        </ul>
                                        <a href="#" class="more-link fst-normal ms-3">Learn More <i
                                                class="icon-line-arrow-right"></i></a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-4 col-md-6">
                                <div class="card border-0 h-100 shadow-sm">
                                    <h3 class="card-header font-primary p-4 color1">Brain Development</h3>
                                    <div class="card-body p-4">
                                        Conveniently benchmark flexible human capital for optimal deliverables.
                                        Collaboratively fabricate market-driven.

                                        <ul class="ps-3 mt-4 mb-0">
                                            <li class="mb-3">Globally whiteboard visionary bandwidth and
                                                interactive catalysts for change. Globally repurpose.</li>
                                            <li class="mb-3">Professionally revolutionize standardized
                                                infomediaries via business methods of empowerment. Collaboratively
                                                cultivate.</li>
                                            <li class="mb-3">Distinctively parallel task functional internal
                                                or "organic" sources and front-end best.</li>
                                            <li class="mb-3">Rapidiously customize worldwide channels via
                                                accurate e-tailers. Monotonectally re-engineer premium scenarios.</li>
                                            <li class="mb-3">Synergistically disseminate plug-and-play
                                                manufactured products without alternative e-tailers. Conveniently
                                                pontificate interoperable.</li>
                                        </ul>
                                        <a href="#" class="more-link fst-normal ms-3">Learn More <i
                                                class="icon-line-arrow-right"></i></a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-4 col-md-6">
                                <div class="card border-0 h-100 shadow-sm">
                                    <h3 class="card-header font-primary p-4 color1">General Learning</h3>
                                    <div class="card-body p-4">
                                        Conveniently benchmark flexible human capital for optimal deliverables.
                                        Collaboratively fabricate market-driven.

                                        <ul class="ps-3 mt-4 mb-0">
                                            <li class="mb-3">Globally whiteboard visionary bandwidth and
                                                interactive catalysts for change. Globally repurpose.</li>
                                            <li class="mb-3">Professionally revolutionize standardized
                                                infomediaries via business methods of empowerment. Collaboratively
                                                cultivate.</li>
                                            <li class="mb-3">Distinctively parallel task functional internal
                                                or "organic" sources and front-end best.</li>
                                            <li class="mb-3">Rapidiously customize worldwide channels via
                                                accurate e-tailers. Monotonectally re-engineer premium scenarios.</li>
                                        </ul>
                                        <a href="#" class="more-link fst-normal ms-3">Learn More <i
                                                class="icon-line-arrow-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="age-preschool" role="tabpanel" aria-labelledby="age-preschool-tab">
                        <div class="row col-mb-30">
                            <div class="col-lg-4 col-md-6">
                                <div class="card border-0 h-100 shadow-sm">
                                    <h3 class="card-header font-primary p-4 color2">ABC's of Learning</h3>
                                    <div class="card-body p-4">
                                        Our curriculum is specifically designed to assist your toddler in developing the
                                        essentials for early.

                                        <ul class="ps-3 mt-4 mb-0">
                                            <li class="mb-3">Globally whiteboard visionary bandwidth and
                                                interactive catalysts for change. Globally repurpose.</li>
                                            <li class="mb-3">Professionally revolutionize standardized
                                                infomediaries via business methods of empowerment. Collaboratively
                                                cultivate.</li>
                                            <li class="mb-3">Distinctively parallel task functional internal
                                                or "organic" sources and front-end best.</li>
                                            <li class="mb-3">Rapidiously customize worldwide channels via
                                                accurate e-tailers. Monotonectally re-engineer premium scenarios.</li>
                                            <li class="mb-3">Synergistically disseminate plug-and-play
                                                manufactured products without alternative e-tailers. Conveniently
                                                pontificate interoperable.</li>
                                        </ul>
                                        <a href="#" class="more-link fst-normal ms-3">Learn More <i
                                                class="icon-line-arrow-right"></i></a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-4 col-md-6">
                                <div class="card border-0 h-100 shadow-sm">
                                    <h3 class="card-header font-primary p-4 color2">Brain Development</h3>
                                    <div class="card-body p-4">
                                        Conveniently benchmark flexible human capital for optimal deliverables.
                                        Collaboratively fabricate market-driven.

                                        <ul class="ps-3 mt-4 mb-0">
                                            <li class="mb-3">Globally whiteboard visionary bandwidth and
                                                interactive catalysts for change. Globally repurpose.</li>
                                            <li class="mb-3">Professionally revolutionize standardized
                                                infomediaries via business methods of empowerment. Collaboratively
                                                cultivate.</li>
                                            <li class="mb-3">Distinctively parallel task functional internal
                                                or "organic" sources and front-end best.</li>
                                            <li class="mb-3">Rapidiously customize worldwide channels via
                                                accurate e-tailers. Monotonectally re-engineer premium scenarios.</li>
                                            <li class="mb-3">Synergistically disseminate plug-and-play
                                                manufactured products without alternative e-tailers. Conveniently
                                                pontificate interoperable.</li>
                                        </ul>
                                        <a href="#" class="more-link fst-normal ms-3">Learn More <i
                                                class="icon-line-arrow-right"></i></a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-4 col-md-6">
                                <div class="card border-0 h-100 shadow-sm">
                                    <h3 class="card-header font-primary p-4 color2">General Learning</h3>
                                    <div class="card-body p-4">
                                        Conveniently benchmark flexible human capital for optimal deliverables.
                                        Collaboratively fabricate market-driven.

                                        <ul class="ps-3 mt-4 mb-0">
                                            <li class="mb-3">Globally whiteboard visionary bandwidth and
                                                interactive catalysts for change. Globally repurpose.</li>
                                            <li class="mb-3">Professionally revolutionize standardized
                                                infomediaries via business methods of empowerment. Collaboratively
                                                cultivate.</li>
                                            <li class="mb-3">Distinctively parallel task functional internal
                                                or "organic" sources and front-end best.</li>
                                            <li class="mb-3">Rapidiously customize worldwide channels via
                                                accurate e-tailers. Monotonectally re-engineer premium scenarios.</li>
                                        </ul>
                                        <a href="#" class="more-link fst-normal ms-3">Learn More <i
                                                class="icon-line-arrow-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="age-kindergarten" role="tabpanel"
                        aria-labelledby="age-kindergarten-tab">
                        <div class="row col-mb-30">
                            <div class="col-lg-4 col-md-6">
                                <div class="card border-0 h-100 shadow-sm">
                                    <h3 class="card-header font-primary p-4 color3">ABC's of Learning</h3>
                                    <div class="card-body p-4">
                                        Our curriculum is specifically designed to assist your toddler in developing the
                                        essentials for early.

                                        <ul class="ps-3 mt-4 mb-0">
                                            <li class="mb-3">Globally whiteboard visionary bandwidth and
                                                interactive catalysts for change. Globally repurpose.</li>
                                            <li class="mb-3">Professionally revolutionize standardized
                                                infomediaries via business methods of empowerment. Collaboratively
                                                cultivate.</li>
                                            <li class="mb-3">Distinctively parallel task functional internal
                                                or "organic" sources and front-end best.</li>
                                            <li class="mb-3">Rapidiously customize worldwide channels via
                                                accurate e-tailers. Monotonectally re-engineer premium scenarios.</li>
                                            <li class="mb-3">Synergistically disseminate plug-and-play
                                                manufactured products without alternative e-tailers. Conveniently
                                                pontificate interoperable.</li>
                                        </ul>
                                        <a href="#" class="more-link fst-normal ms-3">Learn More <i
                                                class="icon-line-arrow-right"></i></a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-4 col-md-6">
                                <div class="card border-0 h-100 shadow-sm">
                                    <h3 class="card-header font-primary p-4 color3">Brain Development</h3>
                                    <div class="card-body p-4">
                                        Conveniently benchmark flexible human capital for optimal deliverables.
                                        Collaboratively fabricate market-driven.

                                        <ul class="ps-3 mt-4 mb-0">
                                            <li class="mb-3">Globally whiteboard visionary bandwidth and
                                                interactive catalysts for change. Globally repurpose.</li>
                                            <li class="mb-3">Professionally revolutionize standardized
                                                infomediaries via business methods of empowerment. Collaboratively
                                                cultivate.</li>
                                            <li class="mb-3">Distinctively parallel task functional internal
                                                or "organic" sources and front-end best.</li>
                                            <li class="mb-3">Rapidiously customize worldwide channels via
                                                accurate e-tailers. Monotonectally re-engineer premium scenarios.</li>
                                            <li class="mb-3">Synergistically disseminate plug-and-play
                                                manufactured products without alternative e-tailers. Conveniently
                                                pontificate interoperable.</li>
                                        </ul>
                                        <a href="#" class="more-link fst-normal ms-3">Learn More <i
                                                class="icon-line-arrow-right"></i></a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-4 col-md-6">
                                <div class="card border-0 h-100 shadow-sm">
                                    <h3 class="card-header font-primary p-4 color3">General Learning</h3>
                                    <div class="card-body p-4">
                                        Conveniently benchmark flexible human capital for optimal deliverables.
                                        Collaboratively fabricate market-driven.

                                        <ul class="ps-3 mt-4 mb-0">
                                            <li class="mb-3">Globally whiteboard visionary bandwidth and
                                                interactive catalysts for change. Globally repurpose.</li>
                                            <li class="mb-3">Professionally revolutionize standardized
                                                infomediaries via business methods of empowerment. Collaboratively
                                                cultivate.</li>
                                            <li class="mb-3">Distinctively parallel task functional internal
                                                or "organic" sources and front-end best.</li>
                                            <li class="mb-3">Rapidiously customize worldwide channels via
                                                accurate e-tailers. Monotonectally re-engineer premium scenarios.</li>
                                        </ul>
                                        <a href="#" class="more-link fst-normal ms-3">Learn More <i
                                                class="icon-line-arrow-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="age-prekindergarten" role="tabpanel"
                        aria-labelledby="age-prekindergarten-tab">
                        <div class="row col-mb-30">
                            <div class="col-lg-4 col-md-6">
                                <div class="card border-0 h-100 shadow-sm">
                                    <h3 class="card-header font-primary p-4 color4">ABC's of Learning</h3>
                                    <div class="card-body p-4">
                                        Our curriculum is specifically designed to assist your toddler in developing the
                                        essentials for early.

                                        <ul class="ps-3 mt-4 mb-0">
                                            <li class="mb-3">Globally whiteboard visionary bandwidth and
                                                interactive catalysts for change. Globally repurpose.</li>
                                            <li class="mb-3">Professionally revolutionize standardized
                                                infomediaries via business methods of empowerment. Collaboratively
                                                cultivate.</li>
                                            <li class="mb-3">Distinctively parallel task functional internal
                                                or "organic" sources and front-end best.</li>
                                            <li class="mb-3">Rapidiously customize worldwide channels via
                                                accurate e-tailers. Monotonectally re-engineer premium scenarios.</li>
                                            <li class="mb-3">Synergistically disseminate plug-and-play
                                                manufactured products without alternative e-tailers. Conveniently
                                                pontificate interoperable.</li>
                                        </ul>
                                        <a href="#" class="more-link fst-normal ms-3">Learn More <i
                                                class="icon-line-arrow-right"></i></a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-4 col-md-6">
                                <div class="card border-0 h-100 shadow-sm">
                                    <h3 class="card-header font-primary p-4 color4">Brain Development</h3>
                                    <div class="card-body p-4">
                                        Conveniently benchmark flexible human capital for optimal deliverables.
                                        Collaboratively fabricate market-driven.

                                        <ul class="ps-3 mt-4 mb-0">
                                            <li class="mb-3">Globally whiteboard visionary bandwidth and
                                                interactive catalysts for change. Globally repurpose.</li>
                                            <li class="mb-3">Professionally revolutionize standardized
                                                infomediaries via business methods of empowerment. Collaboratively
                                                cultivate.</li>
                                            <li class="mb-3">Distinctively parallel task functional internal
                                                or "organic" sources and front-end best.</li>
                                            <li class="mb-3">Rapidiously customize worldwide channels via
                                                accurate e-tailers. Monotonectally re-engineer premium scenarios.</li>
                                            <li class="mb-3">Synergistically disseminate plug-and-play
                                                manufactured products without alternative e-tailers. Conveniently
                                                pontificate interoperable.</li>
                                        </ul>
                                        <a href="#" class="more-link fst-normal ms-3">Learn More <i
                                                class="icon-line-arrow-right"></i></a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-4 col-md-6">
                                <div class="card border-0 h-100 shadow-sm">
                                    <h3 class="card-header font-primary p-4 color4">General Learning</h3>
                                    <div class="card-body p-4">
                                        Conveniently benchmark flexible human capital for optimal deliverables.
                                        Collaboratively fabricate market-driven.

                                        <ul class="ps-3 mt-4 mb-0">
                                            <li class="mb-3">Globally whiteboard visionary bandwidth and
                                                interactive catalysts for change. Globally repurpose.</li>
                                            <li class="mb-3">Professionally revolutionize standardized
                                                infomediaries via business methods of empowerment. Collaboratively
                                                cultivate.</li>
                                            <li class="mb-3">Distinctively parallel task functional internal
                                                or "organic" sources and front-end best.</li>
                                            <li class="mb-3">Rapidiously customize worldwide channels via
                                                accurate e-tailers. Monotonectally re-engineer premium scenarios.</li>
                                        </ul>
                                        <a href="#" class="more-link fst-normal ms-3">Learn More <i
                                                class="icon-line-arrow-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="shape-divider" data-shape="wave-5" data-position="bottom" data-height="60"></div>
        </div>

        <div class="position-relative d-none d-sm-block">
            <img src="{{ asset('kindergarten/demos/kindergarten/images/fish1.png') }}" alt="Fish"
                class="background-img float-anim">
        </div>

        <div class="container z-2">
            <div class="row align-items-center justify-content-center col-mb-30">
                <div class="col-xl">
                    <h6 class="mb-4 ls2 text-uppercase fw-normal">Testimonials</h6>
                    <h1 class="display-3 fw-bolder">Just watch what <span class="color">Parents</span> say.
                    </h1>
                    <p class="mb-5 fw-light">Rapidiously conceptualize inexpensive value through functionalized
                        markets. Enthusiastically integrate distinctive web services vis-a-vis end-to-end ROI.
                        Assertively fashion best-of-breed products.</p>
                    <a href="#" class="btn btn-outline-dark rounded py-2 px-3">View Full Testimonials</a>
                </div>
                <div class="col-auto">
                    <img src="{{ asset('kindergarten/demos/kindergarten/images/kindergarten-tv.svg') }}" alt="Image TV"
                        class="kindergarder-mockup-tv">

                    <div class="kindergarten-carousel-wrap">
                        <div id="kindergarten-carousel-img"
                            class="carousel kindergarten-tv-carousel slide carousel-fade" data-bs-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img class="d-block position-relative w-100"
                                        src="{{ asset('kindergarten/demos/kindergarten/images/carousel/1.jpg') }}"
                                        alt="First slide" />
                                </div>
                                <div class="carousel-item">
                                    <img class="d-block position-relative w-100"
                                        src="{{ asset('kindergarten/demos/kindergarten/images/carousel/2.jpg') }}"
                                        alt="Second slide" />
                                </div>
                                <div class="carousel-item">
                                    <img class="d-block position-relative w-100"
                                        src="{{ asset('kindergarten/demos/kindergarten/images/carousel/3.jpg') }}"
                                        alt="Third slide" />
                                </div>
                            </div>
                        </div>

                        <div id="kindergarten-carousel-text" class="carousel kindergarten-tv-carousel slide"
                            data-bs-ride="carousel">
                            <div class="carousel-inner h-100">
                                <div class="carousel-item active h-100">
                                    <div class="carousel-caption">
                                        <h3 class="text-white mb-4 h2">Elon Gated</h3>
                                        <a href="https://www.youtube.com/watch?v=P3Huse9K6Xs" data-lightbox="iframe"><i
                                                class="icon-line-play ps-1 bg-white rounded-circle text-dark position-relative icon-stacked h4 m-0"
                                                style="top: 4px"></i></a>
                                    </div>
                                </div>
                                <div class="carousel-item h-100">
                                    <div class="carousel-caption">
                                        <h3 class="text-white mb-4 h2">Quiche Hollandaise</h3>
                                        <a href="https://www.youtube.com/watch?v=P3Huse9K6Xs" data-lightbox="iframe"><i
                                                class="icon-line-play ps-1 bg-white rounded-circle text-dark position-relative icon-stacked h4 m-0"
                                                style="top: 4px"></i></a>
                                    </div>
                                </div>
                                <div class="carousel-item h-100">
                                    <div class="carousel-caption">
                                        <h3 class="text-white mb-4 h2">Eleanor Fant</h3>
                                        <a href="https://www.youtube.com/watch?v=P3Huse9K6Xs" data-lightbox="iframe"><i
                                                class="icon-line-play ps-1 bg-white rounded-circle text-dark position-relative icon-stacked h4 m-0"
                                                style="top: 4px"></i></a>
                                    </div>
                                </div>
                            </div>
                            <a class="carousel-control-prev op-09 h-op-1" role="button">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </a>
                            <a class="carousel-control-next op-09 h-op-1" role="button">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </a>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div class="section" style="padding: 100px 0; background-color: #ECF4F1">
            <div class="shape-divider" data-shape="wave-5" data-height="50"></div>
            <div class="position-absolute top-0 start-0 w-100 h-100"
                style="background: url({{ asset('/kindergarten/demos/kindergarten/images/hero-bg-icons.svg') }})) center center / cover; opacity: 0.04">
            </div>
            <div class="container z-3">
                <h2 class="color text-center h1 fw-bold mb-5 pb-2">Latest News:</h2>

                <div class="row gutter-50">
                    <div class="col-lg-4">
                        <!-- Post Article -->
                        <div class="posts-md">
                            <div class="entry">
                                <div class="entry-image position-relative mb-md-4">
                                    <a href="#">
                                        <img src="{{ asset('kindergarten/demos/kindergarten/images/news/1.jpg') }}"
                                            alt="Image 3" class="rounded-5">
                                        <div class="shape-divider" data-shape="wave-5" data-position="bottom"
                                            data-width="110" data-height="30" data-fill="#ECF4F1"></div>
                                    </a>
                                    <div class="entry-date">Mar<span>27</span></div>
                                </div>
                                <div class="entry-title nott">
                                    <h3><a class="ls0 h3" href="#">Teaching Reading With Online Families</a>
                                    </h3>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <!-- Post Article -->
                        <div class="posts-md">
                            <div class="entry">
                                <div class="entry-image position-relative mb-md-4">
                                    <a href="#">
                                        <img src="{{ asset('kindergarten/demos/kindergarten/images/news/2.jpg') }}"
                                            alt="Image 3" class="rounded-5">
                                        <div class="shape-divider" data-shape="wave-5" data-position="bottom"
                                            data-width="110" data-height="30" data-fill="#ECF4F1"></div>
                                    </a>
                                    <div class="entry-date">Apr<span>03</span></div>
                                </div>
                                <div class="entry-title nott">
                                    <h3><a class="ls0 h3" href="#">Mother’s Day and Father’s Day Gift Ideas</a>
                                    </h3>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <!-- Post Article -->
                        <div class="posts-md">
                            <div class="entry">
                                <div class="entry-image position-relative mb-md-4">
                                    <a href="#">
                                        <img src="{{ asset('kindergarten/demos/kindergarten/images/news/3.jpg') }}"
                                            alt="Image 3" class="rounded-5">
                                        <div class="shape-divider" data-shape="wave-5" data-position="bottom"
                                            data-width="110" data-height="30" data-fill="#ECF4F1"></div>
                                    </a>
                                    <div class="entry-date">Jun<span>11</span></div>
                                </div>
                                <div class="entry-title nott">
                                    <h3><a class="ls0 h3" href="#">Developing Fine Motor Skills With Crafts</a>
                                    </h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="shape-divider" data-shape="wave-5" data-position="bottom" data-height="60"></div>
        </div>

        <div class="section bg-transparent">
            <div class="container">

                <div class="row gutter-50">
                    <div class="col-lg-6">
                        <img src="{{ asset('kindergarten/demos/kindergarten/images/contact.svg') }}" alt="Image">
                        <div class="row justify-content-between mt-5">
                            <div class="col d-flex">
                                <i class="h6 icon-line-map-pin"></i>:
                                <div class="fw-medium ms-3 font-primary h5 lh-sm">
                                    <a class="text-dark h-text-color" href="https://map.google.com" target="_blank">
                                        795 Folsom Ave,<br>Suite 600<br>
                                        San Francisco, <br>CA 94107<br>
                                    </a>
                                    <div class="mt-3">
                                        <a href="https://facebook.com/semicolonweb"
                                            class="social-icon si-small border-default rounded-circle si-facebook"
                                            title="Facebook" target="_blank">
                                            <i class="icon-facebook"></i>
                                            <i class="icon-facebook"></i>
                                        </a>

                                        <a href="https://instagram.com/semicolonweb"
                                            class="social-icon si-small border-default rounded-circle si-instagram"
                                            title="instagram" target="_blank">
                                            <i class="icon-instagram"></i>
                                            <i class="icon-instagram"></i>
                                        </a>

                                        <a href="https://youtube.com/__semicolonweb"
                                            class="social-icon si-small border-default rounded-circle si-google"
                                            title="google" target="_blank">
                                            <i class="icon-google"></i>
                                            <i class="icon-google"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col col-lg-auto">
                                <div class="mb-2 font-primary h5"><i class="h6 icon-line-phone-call me-2">:</i> <a
                                        class="text-dark h-text-color" href="tel:08547632521">+(0) 8547 632521</a>
                                </div>
                                <div class="mb-2 font-primary h5"><i class="h6 icon-whatsapp me-2">:</i> <a
                                        class="text-dark h-text-color" href="https://wa.me/01147521433">+(0) 11 4752
                                        1433</a></div>
                                <div class="mb-2 font-primary h5"><i class="h6 icon-line-mail me-2">:</i> <a
                                        class="text-dark h-text-color"
                                        href="mailto:noreply@canvas.com">info@canvas.com</a></div>
                                <div class="font-primary h5"><i class="h6 icon-line-link me-2">:</i> <a
                                        class="text-dark h-text-color" href="#">canvaskindergarten.com</a></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <h2 class="color display-4 mb-3 fw-bold">Come and visit us.</h2>
                        <p>Tell us a little bit about your family to get started. Come learn about the Scole experience!
                        </p>

                        <div class="form-widget">

                            <div class="form-result"></div>

                            <form class="mb-0" id="template-contactform" name="template-contactform"
                                action="include/form.php" method="post">

                                <div class="form-process">
                                    <div class="css3-spinner">
                                        <div class="css3-spinner-scaler"></div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6 form-group mb-4">
                                        <input type="text" id="kindergarten-contactform-first-name"
                                            name="kindergarten-contactform-first-name" value="" placeholder="First Name"
                                            class="form-control required" />
                                    </div>

                                    <div class="col-md-6 form-group mb-4">
                                        <input type="text" id="kindergarten-contactform-last-name"
                                            name="kindergarten-contactform-last-name" value="" placeholder="Last Name"
                                            class="form-control required" />
                                    </div>

                                    <div class="w-100"></div>

                                    <div class="col-12 form-group mb-4">
                                        <input type="email" id="kindergarten-contactform-email"
                                            name="kindergarten-contactform-email" value="" placeholder="Email"
                                            class="required email form-control" />
                                    </div>

                                    <div class="w-100"></div>

                                    <div class="col-md-6 form-group mb-4">
                                        <input type="text" id="kindergarten-contactform-phone"
                                            name="kindergarten-contactform-phone" value="" placeholder="Phone"
                                            class="form-control" />
                                    </div>

                                    <div class="col-md-6 form-group mb-4">
                                        <select id="kindergarten-contactform-subject"
                                            name="kindergarten-contactform-subject" class="form-select">
                                            <option value="" disabled selected>Select Program</option>
                                            <option value="Toddler">Toddler</option>
                                            <option value="Pre-School">Pre-School</option>
                                            <option value="Kindergarten">Kindergarten</option>
                                            <option value="Pre-Kindergarten">Pre-Kindergarten</option>
                                            <option value="Others">Others</option>
                                        </select>
                                    </div>

                                    <div class="w-100"></div>

                                    <div class="col-md-6 form-group mb-4">
                                        <input type="text" class="form-control component-flatpickr"
                                            name="kindergarten-contactform-date" placeholder="Date - Time" value=""
                                            data-time="true" data-dateFormat="d/m/yy - H:i">
                                    </div>

                                    <div class="col-md-6 form-group mb-4">
                                        <input type="text" id="kindergarten-contactform-location"
                                            name="kindergarten-contactform-location" value="" placeholder="Location"
                                            class="required form-control" />
                                    </div>

                                    <div class="w-100"></div>

                                    <div class="col-12 form-group mb-4">
                                        <textarea class="required form-control py-2"
                                            id="kindergarten-contactform-message" placeholder="Write your Message"
                                            name="kindergarten-contactform-message" rows="5" cols="30"></textarea>
                                    </div>

                                    <div class="col-12 form-group d-none">
                                        <input type="text" id="kindergarten-contactform-botcheck"
                                            name="kindergarten-contactform-botcheck" value="" class="form-control" />
                                    </div>

                                    <div class="col-12 form-group">
                                        <button class="btn text-white bg-color rounded-1 py-3 px-5 fw-medium float-end"
                                            type="submit" id="kindergarten-contactform-submit"
                                            name="kindergarten-contactform-submit" value="submit">Send Message <i
                                                class="icon-line-arrow-right position-relative"
                                                style="top: 2px"></i></button>
                                    </div>
                                </div>

                                <input type="hidden" name="prefix" value="kindergarten-contactform-">

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container mw-md mb-3"
            style="background: var(--bs-primary) url({{ asset('/kindergarten/demos/kindergarten/images/subscribe-bg.svg') }}) repeat center center / cover; padding: 80px; border-radius: 2.6rem">
            <div class="text-center dark">
                <h3 class="mb-4 h1 fw-bold">Sign up for Updates &amp; Newsletters.</h3>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. <br>Quo aliquid earum tenetur corrupti ea
                    ducimus.</p>
            </div>
            <div class="widget subscribe-widget mw-xs mx-auto" data-loader="button">
                <div class="widget-subscribe-form-result"></div>
                <form id="widget-subscribe-form" action="include/subscribe.php" method="post" class="mb-0 input-group">
                    <input type="email" id="widget-subscribe-form-email" name="widget-subscribe-form-email"
                        class="form-control form-control-lg not-dark required email ps-4 border-bottom-0"
                        placeholder="Your Email Address">
                    <button class="btn btn-dark" type="submit">Subscribe Now</button>
                </form>
            </div>
        </div>

    </div>
</section><!-- #content end -->
@endsection
