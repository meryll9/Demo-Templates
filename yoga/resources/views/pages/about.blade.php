@extends('layout.main')
@section('content')
    <!-- Page Title
      ============================================= -->
    <section id="page-title" class="text-start">

        <div class="container clearfix">
            <div class="d-flex justify-content-between align-items-center">
                <div class="mw-sm pe-4">
                    <div class="fancy-title title-border mb-3">
                        <h5 class="fw-normal color font-body text-uppercase ls1">Our Story</h5>
                    </div>
                    <h2 class="nott display-4 fw-semibold">About Us.</h2>
                    <span>Energistically syndicate team building synergy after efficient human capital. Assertively
                        underwhelm sticky solutions.</span>
                </div>
                <img src="{{asset('yoga/demos/yoga/images/yoga-img.svg')}}" alt="Yoga Image" class="d-none d-sm-flex" width="300">
            </div>
        </div>

    </section><!-- #page-title end -->

    <!-- Content
      ============================================= -->
    <section id="content">
        <div class="content-wrap pb-0">
            <div class="container py-5">

                <div class="row justify-content-between">
                    <div class="col-md-5">
                        <h2 class="fw-normal display-4">More than <span>10 Years</span> of Expirienced.</h2>
                        <p class="text-black-50">Lorem ipsum dolor, sit, amet consectetur adipisicing elit. Neque tempora,
                            commodi accusamus exercitationem eius praesentium reprehenderit rerum autem, debitis nulla nobis
                            quisquam, qui. Fuga eligendi enim voluptatum aliquam rerum error?</p>
                        <p class="text-black-50">Lorem ipsum, dolor sit amet, consectetur adipisicing elit. Blanditiis
                            animi, aperiam magnam doloribus quis sunt molestiae expedita, maiores error accusantium dolore
                            ipsam cumque.</p>
                        <a href="#"
                            class="btn rounded bg-color text-white shadow text-uppercase fw-semibold ls1 py-3 px-4">Know
                            More</a>
                    </div>
                    <div class="col-md-6">
                        <!-- Grid row -->
                        <div class="row gutter-10" data-lightbox="gallery">

                            <div class="col-4">
                                <a href="{{asset('yoga/demos/yoga/images/gallery/4.jpg')}}" data-lightbox="gallery-item">
                                    <img class="img-fluid h-op-09 op-ts mb-2" src="{{asset('yoga/demos/yoga/images/gallery/4.jpg')}}"
                                        alt="Image">
                                </a>
                                <a href="{{asset('yoga/demos/yoga/images/gallery/5.jpg')}}" data-lightbox="gallery-item">
                                    <img class="img-fluid h-op-09 op-ts" src="{{asset('yoga/demos/yoga/images/gallery/5.jpg')}}" alt="Image">
                                </a>
                            </div>
                            <div class="col-8">
                                <a href="{{asset('yoga/demos/yoga/images/gallery/2.jpg')}}" data-lightbox="gallery-item">
                                    <img class="img-fluid h-op-09 op-ts" src="{{asset('yoga/demos/yoga/images/gallery/2.jpg')}}" alt="Image">
                                </a>
                            </div>

                        </div>
                    </div>

                </div>

            </div>

            <div class="section section-yogas mb-0" style="background-color: rgba(126, 150, 128,0.2); padding: 100px 0">
                <div class="container">
                    <div class="row col-mb-50">
                        <div class="col-md-6 col-lg-4">
                            <div class="card" style="border-top-color: #9DC3E2;">
                                <div class="card-body">
                                    <img src="{{asset('yoga/demos/yoga/images/yoga-icons/color/svg/asana_lotus_col.svg')}}" alt="Yoga Icon"
                                        class="mb-3" width="60">
                                    <h3>Yoga For Beginners.</h3>
                                    <p class="text-black-50">Synergistically fashion high-payoff infrastructures for
                                        client-centric interfaces. Distinctively e-enable market positioning.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4">
                            <div class="card" style="border-top-color: #FFB5CC;">
                                <div class="card-body">
                                    <img src="{{asset('yoga/demos/yoga/images/yoga-icons/color/svg/asana_cobra.svg')}}" alt="Yoga Icon"
                                        class="mb-3" width="60">
                                    <h3>30+ Yoga Poses.</h3>
                                    <p class="text-black-50">Synergistically fashion high-payoff infrastructures for
                                        client-centric interfaces. Distinctively e-enable market positioning.</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6 col-lg-4">
                            <div class="card" style="border-top-color: #F4ABEF;">
                                <div class="card-body">
                                    <img src="{{asset('yoga/demos/yoga/images/yoga-icons/color/svg/man_well.svg')}}" alt="Yoga Icon"
                                        class="mb-3" width="60">
                                    <h3>Well Trained Teachers</h3>
                                    <p class="text-black-50">Energistically incentivize intuitive channels for team
                                        building mindshare. Compellingly benchmark functionalized.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4">
                            <div class="card" style="border-top-color: #F2A490;">
                                <div class="card-body">
                                    <img src="{{asset('yoga/demos/yoga/images/yoga-icons/color/svg/kundalini_col.svg')}}" alt="Yoga Icon"
                                        class="mb-3" width="60">
                                    <h3>Filtered Juices Per Day.</h3>
                                    <p class="text-black-50">Energistically incentivize intuitive channels for team
                                        building mindshare. Compellingly benchmark functionalized.</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6 col-lg-4">
                            <div class="card" style="border-top-color: #9DD2D8;">
                                <div class="card-body">
                                    <img src="{{asset('yoga/demos/yoga/images/yoga-icons/color/svg/lotus_col.svg')}}" alt="Yoga Icon"
                                        class="mb-3" width="60">
                                    <h3>Classes in Natures</h3>
                                    <p class="text-black-50">Synergistically fashion high-payoff infrastructures for
                                        client-centric interfaces. Distinctively e-enable market positioning.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4">
                            <div class="card" style="border-top-color: #D0E6A5;">
                                <div class="card-body">
                                    <img src="{{asset('yoga/demos/yoga/images/yoga-icons/color/svg/om_col.svg')}}" alt="Yoga Icon"
                                        class="mb-3" width="60">
                                    <h3>1 Free Trial Class.</h3>
                                    <p class="text-black-50">Synergistically fashion high-payoff infrastructures for
                                        client-centric interfaces. Distinctively e-enable market positioning.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="clear"></div>

            <div class="section bg-white mt-3 pb-0" style="margin-bottom: 2px;">
                <div class="container text-center mb-5">
                    <h3 class="h1 fw-semibold"><i class="icon-line-instagram"></i> Instagram Feed</h3>
                    <a href="https://www.instagram.com/semicolonweb"
                        class="button button-small bg-light button-light button-rounded text-dark text-smaller color mt-3"
                        target="_blank">Follow us on Instagram</a>
                </div>
                <div id="instagram-photos" class="instagram-photos masonry-thumbs grid-6" data-user="blog.canvastemplate">
                </div>
            </div>

        </div>

    </section><!-- #content end -->

@endsection
