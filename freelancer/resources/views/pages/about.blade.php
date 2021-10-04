@extends('layout.main')
@section('content')
    <!-- Content
      ============================================= -->
    <section id="content">

        <div class="content-wrap pb-0">

            <div class="mw-md container mb-5">
                <h2 class="display-4 fw-light" style="line-height: 1.5;">I am a Freelancer, <span
                        class="gradient-text gradient-horizon">Graphics Designer</span> & <span
                        class="gradient-text gradient-horizon">Frontend Developer</span>, Based in <span
                        class="gradient-text gradient-horizon">Germany</span>. Successful Designer with more than <span
                        class="gradient-text gradient-horizon">10 years</span> of professional experience &amp; with lots of
                    <span class="gradient-text gradient-horizon">Satisfied</span> Customers.</h2>
            </div>

            <div class="clear"></div>

            <div class="section mb-0 p-0" style="background-color: #F4F4F4; overflow: visible;">
                <div class="d-flex justify-content-center position-relative">
                    <div class="parallax min-vh-75"
                        style="background-image: url({{asset('/freelancer/demos/freelancer/images/me.jpg')}}); background-size: cover; background-position: center center;"
                        data-bottom-top="width: 40vw" data-center-top="width: 100vw;">
                        <div class="row align-items-center justify-content-center h-100">
                            <div class="col-auto text-center">
                                <a href="#"
                                    class="display-4 fw-bolder text-white d-inline-block mx-4 h-op-08 op-ts"><u>#dribbble</u></a>
                                <a href="#"
                                    class="display-4 fw-bolder text-white d-inline-block mx-4 h-op-08 op-ts"><u>#behance</u></a>
                            </div>
                        </div>
                    </div>
                    <div class="shape-divider" data-shape="wave" data-position="bottom"></div>
                </div>
            </div>

            <div class="container mb-5">
                <div class="row col-mb-30 mt-5">
                    <div class="col-md-4">
                        <div class="d-flex align-items-center justify-content-center">
                            <div class="counter counter-xlarge text-dark fw-bolder"><span data-from="1" data-to="15"
                                    data-refresh-interval="2" data-speed="600"></span></div>
                            <span>+ Years Of<br>Experience.</span>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="d-flex align-items-center justify-content-center">
                            <div class="counter counter-xlarge text-dark fw-bolder"><span data-from="4" data-to="83"
                                    data-refresh-interval="50" data-speed="1500"></span></div>
                            <span>% of Works <br>Completed.</span>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="d-flex align-items-center justify-content-center">
                            <div class="counter counter-xlarge text-dark fw-bolder"><span data-from="5" data-to="100"
                                    data-refresh-interval="30" data-speed="1200"></span></div>
                            <span>% Satisfied<br>Customers.</span>
                        </div>
                    </div>
                </div>
                <div class="line line-sm mb-0"></div>
            </div>

            <div class="clear"></div>

            <div class="container mw-md mt-5">
                <h2 class="display-3 fw-bolder text-uppercase">What we Do <span
                        class="gradient-text gradient-horizon">&amp;</span><br> How we Do</h2>
                <div class="row mt-4">
                    <div class="col-md-8 offset-1">
                        <p class="lead">Lorem ipsum dolor sit amet consectetur adipisicing elit. Atque tempora
                            porro hic provident accusamus nam molestias id architecto, temporibus consectetur dolor repellat
                            doloremque dignissimos eum asperiores amet officiis reiciendis libero.</p>
                        <p class="lead">Lorem ipsum dolor sit amet consectetur adipisicing elit. Atque tempora
                            porro hic provident accusamus nam molestias id architecto, temporibus consectetur dolor repellat
                            doloremque dignissimos eum asperiores amet officiis reiciendis libero.</p>
                    </div>
                </div>

                <div class="row align-wide-xxl my-5 text-center">
                    <div class="col-sm-6">
                        <img src="{{asset('freelancer/demos/freelancer/images/about/1.jpg')}}" alt="Image" class="img-fluid">
                    </div>
                    <div class="col-sm-6">
                        <img src="{{asset('freelancer/demos/freelancer/images/about/2.jpg')}}" alt="Image" class="img-fluid">
                    </div>
                </div>
            </div>

            <div class="section text-center mb-0">
                <div class="mw-xs mx-auto ">
                    <h3 class="display-4 fw-bolder text-uppercase">We Do It for <span
                            class="gradient-text gradient-horizon">Them</span></h3>
                    <p class="mt-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam
                        necessitatibus quaerat, rem delectus</p>

                    <div class="clear"></div>

                    <div class="row justify-content-center align-items-center mt-4 col-mb-30">
                        <div class="col-md-4 col-6 center"><img src="{{asset('freelancer/demos/freelancer/images/clients/amazon.svg')}}"
                                alt="Clients"></div>
                        <div class="col-md-4 col-6 center"><img src="{{asset('freelancer/demos/freelancer/images/clients/netflix.svg')}}"
                                alt="Clients"></div>
                        <div class="col-md-4 col-6 center"><img src="{{asset('freelancer/demos/freelancer/images/clients/google.svg')}}"
                                alt="Clients"></div>
                        <div class="col-md-4 col-6 center"><img src="{{asset('freelancer/demos/freelancer/images/clients/paypal.svg')}}"
                                alt="Clients"></div>
                        <div class="col-md-4 col-6 center"><img src="{{asset('freelancer/demos/freelancer/images/clients/skype.svg')}}"
                                alt="Clients"></div>
                        <div class="col-md-4 col-6 center"><img src="{{asset('freelancer/demos/freelancer/images/clients/ps.svg')}}" alt="Clients">
                        </div>
                        <div class="col-md-4 col-6 center"><img src="{{asset('freelancer/demos/freelancer/images/clients/slack.svg')}}"
                                alt="Clients"></div>
                        <div class="col-md-4 col-6 center"><img src="{{asset('freelancer/demos/freelancer/images/clients/applemusic.svg')}}"
                                alt="Clients"></div>
                    </div>
                </div>
            </div>
        </div>

    </section><!-- #content end -->
@endsection
