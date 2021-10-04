@extends('layout.main')

@section('content')
    <!-- Content
		============================================= -->
		<section id="content">
			<div class="content-wrap py-0">

				<!-- 1. Section
				============================================= -->
				<div class="section bg-transparent my-0 py-0">
					<div class="container-fluid">

						<div class="clear"></div>

						<!-- 1. Section Map -->
						<div class="row align-items-center custom-bg" style="--custom-bg: var(--themecolor)">
							<!-- Map -->
							<div class="col-md-6 px-lg-0 min-vh-50 min-vh-lg-100 d-flex align-self-stretch">
								<div class="gmap-bg gmap h-100 position-absolute" data-address="Ottawa, Canada"
								data-markers='[
									{address: "London", icon:{ image: "demos/furniture/images/map-pin.svg", iconsize: [36,36], iconanchor: [36,36] }},
									{address: "San Fransisco",html: "San Fransisco, USA",icon: {image: "demos/furniture/images/map-pin.svg",iconsize: [36,36],iconanchor: [36,36]}},
									{address: "Melbourne",html: "Melbourne, Australia",icon: {image: "demos/furniture/images/map-pin.svg",iconsize: [36,36],iconanchor: [36,36]}},
									{address: "New York",html: "New York, USA",icon: {image: "demos/furniture/images/map-pin.svg",iconsize: [36,36],iconanchor: [36,36]}},
									{address: "New York",html: "New York, New York",icon: {image: "demos/furniture/images/map-pin.svg",iconsize: [36,36],iconanchor: [36,36]}},
									{address: "Los Angeles",html: "Los Angeles, California",icon: {image: "demos/furniture/images/map-pin.svg",iconsize: [36,36],iconanchor: [36,36]}},
									{address: "Ottawa",html: "Ottawa, Canada",icon: {image: "demos/furniture/images/map-pin.svg",iconsize: [36,36],iconanchor: [36,36]}},]'
								data-styles='
									[{"featureType":"all","elementType":"geometry.fill","stylers":[{"weight":"2.00"}]},{"featureType":"all","elementType":"geometry.stroke","stylers":[{"color":"#9c9c9c"}]},{"featureType":"all","elementType":"labels.text","stylers":[{"visibility":"on"}]},{"featureType":"landscape","elementType":"all","stylers":[{"color":"#f2f2f2"}]},{"featureType":"landscape","elementType":"geometry.fill","stylers":[{"color":"#ffffff"}]},{"featureType":"landscape.man_made","elementType":"geometry.fill","stylers":[{"color":"#ffffff"}]},{"featureType":"poi","elementType":"all","stylers":[{"visibility":"off"}]},{"featureType":"road","elementType":"all","stylers":[{"saturation":-100},{"lightness":45}]},{"featureType":"road","elementType":"geometry.fill","stylers":[{"color":"#eeeeee"}]},{"featureType":"road","elementType":"labels.text.fill","stylers":[{"color":"#7b7b7b"}]},{"featureType":"road","elementType":"labels.text.stroke","stylers":[{"color":"#ffffff"}]},{"featureType":"road.highway","elementType":"all","stylers":[{"visibility":"simplified"}]},{"featureType":"road.arterial","elementType":"labels.icon","stylers":[{"visibility":"off"}]},{"featureType":"transit","elementType":"all","stylers":[{"visibility":"off"}]},{"featureType":"water","elementType":"all","stylers":[{"color":"#46bcec"},{"visibility":"on"}]},{"featureType":"water","elementType":"geometry.fill","stylers":[{"color":"#c8d7d4"}]},{"featureType":"water","elementType":"labels.text.fill","stylers":[{"color":"#070707"}]},{"featureType":"water","elementType":"labels.text.stroke","stylers":[{"color":"#ffffff"}]}]'
								data-scrollwheel="false" data-zoom="4" data-control-zoom="true"
								style=" top: 0; left: 0; width: 100%; z-index: 1;"></div>
								<div class="position-absolute pos-x-center pos-y-center m-0 text-white-50">Map loading...</div>
							</div>

							<!-- Content -->
							<div class="col-md-6 p-5 p-lg-6 dark">
								<h2 class="h1 fw-normal mb-5">Our <span  data-animate="svg-underline-animated" class="svg-underline nocolor"><span>Showrooms</span></span></h2>
								<div class="row col-mb-50">
									<a href="https://www.google.com/maps/place/San+Francisco" target="_blank" class="col-sm-6">
										<h3 class="h5 mb-2 fw-medium">San Fransisco</h3>
										<p class="m-0 text-white-50">795 Folsom Ave, Suite 600<br>
										San Francisco, CA 94107</p>
									</a>

									<a href="https://www.google.com/maps/place/melbourne" target="_blank" class="col-sm-6">
										<h3 class="h5 mb-2 fw-medium">Australia</h3>
										<p class="m-0 text-white-50">62 Parkes Road,<br>
										Melbourne, Victoria 3004</p>
									</a>

									<a href="https://www.google.com/maps/place/london" target="_blank" class="col-sm-6">
										<h3 class="h5 mb-2 fw-medium">London</h3>
										<p class="m-0 text-white-50">115  Guild Street, Suite 893<br>
										London, EC3A3RN</p>
									</a>

									<a href="https://www.google.com/maps/place/new+york" target="_blank" class="col-sm-6">
										<h3 class="h5 mb-2 fw-medium">New York</h3>
										<p class="m-0 text-white-50">996  Geraldine Lane, New York<br>
										NY, 10004</p>
									</a>

									<a href="https://www.google.com/maps/place/california" target="_blank" class="col-sm-6">
										<h3 class="h5 mb-2 fw-medium">California</h3>
										<p class="m-0 text-white-50">3122  Doctors Drive, Los Angeles<br>
										California, 90017</p>
									</a>

									<a href="https://www.google.com/maps/place/Ottawa,+ON,+Canada/" target="_blank" class="col-sm-6">
										<h3 class="h5 mb-2 fw-medium">Canada</h3>
										<p class="m-0 text-white-50">305 Garrett Drive, Ottawa<br>
										Canada, 21907</p>
									</a>
								</div>
							</div>
						</div>

						<div class="clear"></div>

						<!-- 2. Get In Touch -->
						<div class="row flex-md-row-reverse align-items-center custom-bg" style="--custom-bg: #fff7de;">
							<!-- Image -->
							<div class="col-md-6 px-lg-0 min-vh-50 min-vh-lg-100 d-flex align-self-stretch" style="background: url({{asset('/furniture/demos/furniture/images/contact/1.jpg')}}) no-repeat center center; background-size: cover;">
							</div>

							<!-- Content -->
							<div class="col-md-6 p-5 p-lg-6">
								<h2 class="h1 fw-normal mb-5">Get In <span  data-animate="svg-underline-animated" class="svg-underline nocolor"><span>Touch</span></span></h2>

								{{-- <div class="row col-mb-50">
									<div class="col-12 col-lg-6">
										<h3 class="h5 mb-2 fw-medium">Email:</h3>
										<a href="mailto:noreply@canvas.com" class="m-0 op-07"><u>noreply@canvas.com</u></a>
									</div>

									<div class="col-12 col-lg-6">
										<h3 class="h5 mb-2 fw-medium">Press:</h3>
										<a href="mailto:press@canvas.com" class="m-0 op-07">
										<u>noreply.press@canvas.com</u></a>
									</div>

									<div class="col-12 col-lg-6">
										<h3 class="h5 mb-2 fw-medium">Call:</h3>
										<a href="tel:+117370666002" class="m-0 op-07"><u>+00(111)-223344</u></a>
									</div>

									<div class="col-12 col-lg-6">
										<h3 class="h5 mb-2 fw-medium">WhatsApp:</h3>
										<a href="https://wa.me/+00111223344" class="m-0 op-07"><u>00 111 223344</u></a>
									</div>

									<div class="col-12 col-lg-12">
										<h3 class="h5 mb-3 fw-medium">Follow Us</h3>
										<a href="https://facebook.com/semicolonweb" target="_blank" class="social-icon si-small si-rounded si-colored si-facebook">
											<i class="icon-facebook"></i>
											<i class="icon-facebook"></i>
										</a>
										<a href="https://instagram.com/semicolonweb" target="_blank" class="social-icon si-small si-rounded si-colored si-instagram">
											<i class="icon-instagram"></i>
											<i class="icon-instagram"></i>
										</a>
										<a href="https://twitter.com/__semicolon" target="_blank" class="social-icon si-small si-rounded si-colored si-twitter">
											<i class="icon-twitter"></i>
											<i class="icon-twitter"></i>
										</a>
										<a href="https://youtube.com/c/SemiColonweb/videos" target="_blank" class="social-icon si-small si-rounded si-colored si-youtube">
											<i class="icon-youtube"></i>
											<i class="icon-youtube"></i>
										</a>
									</div>
								</div> --}}
                                {{-- <div class="form-widget"> --}}

                                    {{-- <div class="form-result"></div> --}}
                                    @if(session()->has('success'))
                                        <div class="alert alert-success">
                                            {{ session()->get('success') }}
                                        </div>
                                    @endif

                                    <form class="mb-0" id="template-contactform" name="template-contactform" action="{{ route('contact.store') }}" method="post">
                                        @csrf
                                        <div class="form-process">
                                            <div class="css3-spinner">
                                                <div class="css3-spinner-scaler"></div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-6 form-group">
                                                <label for="template-contactform-name">Name <small>*</small></label>
                                                <input type="text" id="template-contactform-name" name="name" value="" class="form-control {{ $errors->has('name') ? 'error' : '' }}" />
                                                @if ($errors->has('name'))
                                                <div class="error">
                                                    {{ $errors->first('name') }}
                                                </div>
                                                @endif
                                            </div>

                                            <div class="col-md-6 form-group">
                                                <label for="template-contactform-email">Email <small>*</small></label>
                                                <input type="email" id="template-contactform-email" name="email" value="" class="form-control {{ $errors->has('email') ? 'error' : '' }}" />
                                                @if ($errors->has('email'))
                                                <div class="error">
                                                    {{ $errors->first('email') }}
                                                </div>
                                                @endif
                                            </div>



                                            <div class="w-100"></div>
                                            <div class="col-md-6 form-group">
                                                <label for="template-contactform-phone">Phone</label>
                                                <input type="text" id="template-contactform-phone" name="phone" value="" class="form-control {{ $errors->has('phone') ? 'error' : '' }}" />
                                                @if ($errors->has('phone'))
                                                <div class="error">
                                                    {{ $errors->first('phone') }}
                                                </div>
                                                @endif
                                            </div>

                                            <div class="col-md-6 form-group">
                                                <label for="template-contactform-subject">Subject <small>*</small></label>
                                                <input type="text" id="template-contactform-subject" name="subject" value="" class="form-control {{ $errors->has('subject') ? 'error' : '' }}" />
                                                @if ($errors->has('subject'))
                                                <div class="error">
                                                    {{ $errors->first('subject') }}
                                                </div>
                                                @endif
                                            </div>



                                            <div class="w-100"></div>
                                            <div class="col-md-12 form-group">
                                                <label for="template-contactform-service">Services</label>
                                                <select id="template-contactform-service" name="services" class="form-control {{ $errors->has('services') ? 'error' : '' }}">
                                                    <option value="">-- Select One --</option>
                                                    <option value="Wordpress">Wordpress</option>
                                                    <option value="PHP / MySQL">PHP / MySQL</option>
                                                    <option value="HTML5 / CSS3">HTML5 / CSS3</option>
                                                    <option value="Graphic Design">Graphic Design</option>
                                                </select>
                                                @if ($errors->has('services'))
                                                <div class="error">
                                                    {{ $errors->first('services') }}
                                                </div>
                                                @endif
                                            </div>



                                            <div class="col-12 form-group">
                                                <label for="template-contactform-message">Message <small>*</small></label>
                                                <textarea class="form-control {{ $errors->has('message') ? 'error' : '' }}" id="template-contactform-message" name="message" rows="6" cols="30"></textarea>
                                                @if ($errors->has('message'))
                                                <div class="error">
                                                    {{ $errors->first('message') }}
                                                </div>
                                                @endif
                                            </div>

                                            <div class="col-12 form-group d-none">
                                                <input type="text" id="template-contactform-botcheck" name="template-contactform-botcheck" value="" class="sm-form-control" />
                                            </div>

                                            <div class="col-12 form-group">
                                                <button name="submit" type="submit" id="submit-button" tabindex="5" value="Submit" class="button button-3d m-0">Submit Comment</button>
                                            </div>
                                        </div>

                                        {{-- <input type="hidden" name="prefix" value="template-contactform-"> --}}

                                    </form>
                                {{-- </div> --}}
							</div>
						</div>
					</div>
				</div> <!-- Section End -->

				<!-- 6. Section Instagram
				============================================= -->
				<div class="section custom-bg my-0 py-1" style="--custom-bg: var(--themecolor);">
					<div class="row align-items-center no-gutters">
						<!-- Instagram Center Col - Text -->
						<div class="col-lg-4 py-5 order-lg-2">
							<div class="text-center dark p-5">
								<svg xmlns="http://www.w3.org/2000/svg" width="64" height="64" fill="#FFF" viewBox="0 0 256 256"><rect width="256" height="256" fill="none"></rect><path d="M172,36H84A47.99987,47.99987,0,0,0,36,84v88a47.99988,47.99988,0,0,0,48,48h88a47.99988,47.99988,0,0,0,48-48V84A47.99987,47.99987,0,0,0,172,36ZM128,168a40,40,0,1,1,40-40A40.0001,40.0001,0,0,1,128,168Z" opacity="0.2"></path><circle cx="128" cy="128" r="40" fill="none" stroke="#FFF" stroke-miterlimit="10" stroke-width="16"></circle><rect class x="36" y="36" width="184" height="184" rx="48" stroke-width="16" stroke="#FFF" stroke-linecap="round" stroke-linejoin="round" fill="none"></rect><circle cx="180" cy="75.99998" r="12"></circle></svg>

								<h3 class="mt-3 mb-5 fw-normal h2">Don't Follow the Crowd, Follow us on <span data-animate="svg-underline-animated" class="svg-underline nocolor"><span>Instagram</span></span></h3>

								<a href="https://instagram.com/semicolonweb" target="_blank" class="button button-large button-border nott ls0 fw-normal button-light button-white border-width-1 m-0" style="border-color: rgba(255,255,255,0.25)">@semicolonweb</a>
							</div>
						</div>

						<!-- Instagram Left Col - Image -->
						<div class="col-lg-4 col-md-6 order-lg-1">
							<div class="row gutter-4">
								<div class="col-6">
									<a class="d-block instagram-image" href="https://instagram.com/semicolonweb" target="_blank" style="background: url({{asset('/furniture/demos/furniture/images/instagram/1.jpg')}}) no-repeat center center; background-size:cover; min-height: 33vh;"></a>
								</div>
								<div class="col-6">
									<a class="d-block instagram-image" href="https://instagram.com/semicolonweb" target="_blank" style="background: url({{asset('/furniture/demos/furniture/images/instagram/2.jpg')}}) no-repeat center center; background-size:cover; min-height: 33vh;"></a>
								</div>
								<div class="col-6">
									<a class="d-block instagram-image" href="https://instagram.com/semicolonweb" target="_blank" style="background: url({{asset('/furniture/demos/furniture/images/instagram/3.jpg')}}) no-repeat center center; background-size:cover; min-height: 33vh;"></a>
								</div>
								<div class="col-6">
									<a class="d-block instagram-image" href="https://instagram.com/semicolonweb" target="_blank" style="background: url({{asset('/furniture/demos/furniture/images/instagram/4.jpg')}}) no-repeat center center; background-size:cover; min-height: 33vh;"></a>
								</div>
							</div>
						</div>

						<!-- Instagram Right Col - Image -->
						<div class="col-lg-4 col-md-6 order-lg-3 mt-1 mt-md-0 ps-md-1 ps-lg-0">
							<div class="row gutter-4">
								<div class="col-6">
									<a class="d-block instagram-image" href="https://instagram.com/semicolonweb" target="_blank" style="background: url({{asset('/furniture/demos/furniture/images/instagram/5.jpg')}}) no-repeat center center; background-size:cover; min-height: 33vh;"></a>
								</div>
								<div class="col-6">
									<a class="d-block instagram-image" href="https://instagram.com/semicolonweb" target="_blank" style="background: url({{asset('/furniture/demos/furniture/images/instagram/6.jpg')}}) no-repeat center center; background-size:cover; min-height: 33vh;"></a>
								</div>
								<div class="col-6">
									<a class="d-block instagram-image" href="https://instagram.com/semicolonweb" target="_blank" style="background: url({{asset('/furniture/demos/furniture/images/instagram/7.jpg')}}) no-repeat center center; background-size:cover; min-height: 33vh;"></a>
								</div>
								<div class="col-6">
									<a class="d-block instagram-image" href="https://instagram.com/semicolonweb" target="_blank" style="background: url({{asset('/furniture/demos/furniture/images/instagram/8.jpg')}}) no-repeat center center; background-size:cover; min-height: 33vh;"></a>
								</div>
							</div>
						</div>
					</div>
				</div><!-- Section End -->

			</div>
		</section><!-- #content end -->
@endsection
