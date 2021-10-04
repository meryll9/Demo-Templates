@extends('layout.main')
@section('content')
<!-- Slider
		============================================= -->
		<section id="slider" class="slider-element dark min-vh-25 min-vh-md-50 include-header py-5" style="background-image: url({{asset('/landing/demos/landing/images/hero/1.svg')}});">
			<div class="slider-inner">

				<div class="vertical-middle text-center">
					<div class="container">
						<div class="row align-items-center justify-content-center">

							<div class="col-lg-6 col-md-6">
								<h2 class="display-3 fw-bold text-white mb-2">Features</h2>
								<p class="lead mb-0 fw-normal">Best Wallet App for your upcoming Projects.</p>
							</div>

						</div>
					</div>
				</div>

			</div>
		</section><!-- #slider end -->
    <!-- Content
      ============================================= -->
    <section id="content">
        <div class="content-wrap">

            <div class="section mb-0 bg-transparent p-0">
                <div class="container clearfix">
                    <div class="row">
                        <div class="col-lg-6 mb-5">
                            <h2 class="fw-bold h2 mb-4">Experienced by <span>46,000+</span> People.</h2>
                            <p class="fw-normal mb-2 h6 text-muted">Enthusiastically morph unique web-readiness via impactful
                                platforms. Intrinsicly matrix premium expertise for diverse expertise. Intrinsicly drive
                                collaborative bandwidth for accurate testing.</p>

                            <div class="row my-5">
                                <div class="col-md-9">
                                    <div class="feature-box fbox-plain">
                                        <div class="fbox-icon">
                                            <a href="#"><i class="icon-line2-screen-desktop text-primary"></i></a>
                                        </div>
                                        <div class="fbox-content">
                                            <h3>Responsive Layout</h3>
                                            <p>Powerful Layout with Responsive functionality that can be adapted to any
                                                screen size. Resize browser to view.</p>
                                        </div>
                                    </div>
                                    <div class="line line-sm"></div>
                                </div>
                                <div class="col-md-9">
                                    <div class="feature-box fbox-plain">
                                        <div class="fbox-icon">
                                            <a href="#"><i class="icon-line2-bulb text-warning"></i></a>
                                        </div>
                                        <div class="fbox-content">
                                            <h3>Light &amp; Dark Color Scheme</h3>
                                            <p>Change your Website's Primary Scheme instantly by simply adding the dark
                                                class to the body.</p>
                                        </div>
                                    </div>
                                    <div class="line line-sm"></div>
                                </div>
                                <div class="col-md-9">
                                    <div class="feature-box fbox-plain">
                                        <div class="fbox-icon">
                                            <a href="#"><i class="icon-line2-support text-danger"></i></a>
                                        </div>
                                        <div class="fbox-content">
                                            <h3>Extensive Documentation</h3>
                                            <p>We have covered each &amp; everything in our Documentation including Videos
                                                &amp; Screenshots.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-1"></div>

                        <div class="col-lg-5 d-flex align-items-end">
                            <div class="device-video-wrap">
                                <img src="{{asset('/landing/demos/landing/images/iphone-hand.png')}}" alt="Image">
                                <video poster="images/videos/deskwork.jpg" preload="auto" loop autoplay muted>
                                    <source src="{{asset('/landing/demos/landing/images/form-video.mp4')}}" type='video/mp4' />
                                </video>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="section m-0 bg-color dotted-bg"
                style="background-image: linear-gradient(to bottom, #3D80E4 0%, #0a4bab 50%, #FFF 50%);">

                <div class="container clearfix">
                    <div class="row mx-auto justify-content-center shadow-lg py-5 my-5 text-center rounded-3 bg-white"
                        style="max-width: 940px; ">
                        <div class="col-md-8">
                            <div class="card border-0 bg-transparent">
                                <div class="card-body">
                                    <h3 class="display-4 fw-bold">Start your journey right now</h3>
                                    <p class="text-black-50">Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                                        Voluptate sequi natus autem non temporibus aperiam, nesciunt iusto, perspiciatis.
                                    </p>
                                    <a href="#" class="btn btn-lg btn-dark"><i class="icon-apple1 me-2"></i>App Store</a>
                                    <a href="#" class="btn btn-lg btn-dark ms-2"><i class="icon-google-play me-2"></i>Play
                                        Store</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </section><!-- #content end -->

@endsection
