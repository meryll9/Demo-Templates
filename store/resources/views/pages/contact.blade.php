@extends('layout.main')
@section('content')
<!-- Page Title
		============================================= -->
		<section id="page-title" class="page-title-parallax page-title-dark page-title-center" style="background-image: url({{asset('/store/demos/store/images/contact/page-title.jpg')}}); background-size: cover; padding: 170px 0 100px;" data-bottom-top="background-position: 50% 200px;" data-top-bottom="background-position: 50% -200px;">

			<div class="container clearfix">
				<h1>Get in Touch</h1>
				<span>Contact Us</span>
				<ol class="breadcrumb">
					<li class="breadcrumb-item"><a href="#">Home</a></li>
					<li class="breadcrumb-item active" aria-current="page">Contact Us</li>
				</ol>
			</div>

		</section><!-- #page-title end -->

		<!-- Content
		============================================= -->
		<section id="content">
			<div class="content-wrap pb-0">
				<div class="container">
					<div class="row justify-content-between">
						<div class="col-lg-4 col-md-6">
							<h2 class="h1 fw-bold mb-4">San Francisco Store</h2>
							<p>Authoritatively deliver 2.0 niches vis-a-vis backward-compatible infomediaries. Authoritatively actualize empowered e-tailers with just in time.</p>
							<h4>
								795 Folsom Ave,<br>Suite 600<br>
								San Francisco, <br>CA 94107<br>
							</h4>
							<abbr title="Phone Number"><strong>Phone:</strong></abbr> (1) 8547 632521<br>
							<abbr title="Fax"><strong>Fax:</strong></abbr> (1) 11 4752 1433<br>
							<abbr title="Email Address"><strong>Email:</strong></abbr> info@canvas.com<br>
							<abbr title="Store"><strong>website:</strong></abbr> <a href="#"><u>ca.canvasstore.com</u></a>
							<div class="mt-4">
								<a href="#" class="social-icon si-small si-colored rounded-0 si-facebook" title="Facebook">
									<i class="icon-facebook"></i>
									<i class="icon-facebook"></i>
								</a>

								<a href="#" class="social-icon si-small si-colored rounded-0 si-instagram" title="instagram">
									<i class="icon-instagram"></i>
									<i class="icon-instagram"></i>
								</a>

								<a href="#" class="social-icon si-small si-colored rounded-0 si-google" title="google">
									<i class="icon-google"></i>
									<i class="icon-google"></i>
								</a>
							</div>
						</div>

						<div class="col-lg-7 col-md-6 mt-4 mt-md-0">
							<img src="{{asset('store/demos/store/images/contact/1.jpg')}}" alt="image">
						</div>
					</div>
					<div class="clear my-5"></div>
					<div class="row justify-content-between mb-4">
						<div class="col-lg-4 col-md-6">
							<h2 class="h1 fw-bold mb-4">Melbourne Store</h2>
							<p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Inventore, excepturi.</p>
							<h4>
								121 King St,<br>Melbourne VIC 3000,<br>Australia
							</h4>
							<abbr title="Phone Number"><strong>Phone:</strong></abbr> (1) 8547 632521<br>
							<abbr title="Fax"><strong>Fax:</strong></abbr> (1) 11 4752 1433<br>
							<abbr title="Email Address"><strong>Email:</strong></abbr> info@canvas.com<br>
							<abbr title="Store"><strong>website:</strong></abbr> <a href="#"><u>au.canvasstore.com</u></a>
							<div class="mt-4">
								<a href="#" class="social-icon si-small si-colored rounded-0 si-facebook" title="Facebook">
									<i class="icon-facebook"></i>
									<i class="icon-facebook"></i>
								</a>

								<a href="#" class="social-icon si-small si-colored rounded-0 si-twitter" title="twitter">
									<i class="icon-twitter"></i>
									<i class="icon-twitter"></i>
								</a>

								<a href="#" class="social-icon si-small si-colored rounded-0 si-google" title="google">
									<i class="icon-google"></i>
									<i class="icon-google"></i>
								</a>
							</div>
						</div>

						<div class="col-lg-7 col-md-6 mt-4 mt-md-0">
							<img src="{{asset('store/demos/store/images/contact/2.jpg')}}" alt="image">
						</div>
					</div>
				</div>
				<div class="clear"></div>
				<div class="section mb-0 border-0" style="padding: 80px 0;">
					<div class="video-wrap" style="z-index: 0">
						<video poster="{{asset('store/one-page/images/page/portrait/video-poster.jpg')}}" preload="auto" loop autoplay muted>
							<source src="{{asset('store/one-page/images/page/portrait/video.mp4')}}" type='video/mp4' />
						</video>
						<div class="video-overlay" style="background: rgba(0,0,0,0.2)"></div>
					</div>
					<div class="emphasis-title widget subscribe-widget mx-auto center px-4" data-loader="button" style="max-width: 650px">
						<h2 class="fw-bold text-white">Subscribe Now</h2>
						<p class="mb-5 text-white-50 lead" data-delay="100">Subscribe to Our Newsletter to get Important News, Amazing Offers & Inside Scoops:</p>
						<div class="widget-subscribe-form-result"></div>
						<form id="widget-subscribe-form-2" action="include/subscribe.php" method="post" class="mt-1 input-group input-group-lg mb-0">
							<input type="email" id="widget-subscribe-form-2-email" name="widget-subscribe-form-email" class="form-control required email rounded-0 border-0" placeholder="Enter your Email Address">

							<button class="btn btn-dark bg-color rounded-0 text-uppercase fw-bold" type="submit" style="font-size: 16px">Subscribe Now</button>
						</form>
					</div>
				</div>
				<div class="section mt-0">

					<div class="container mw-md text-center">
						<h3>Instagram Feeds</h3>
						<div class="instagram-button position-relative">
							<div id="instagram-photos-2" class="instagram-photos masonry-thumbs grid-6" data-user="blog.canvastemplate" data-count="16"></div>
						</div>
					</div>
				</div>

				<div class="section bg-transparent py-3">
					<div class="container-fluid">
						<div class="row justify-content-center m-auto" style="max-width: 1000px;">
							<div class="col-md-7">
								<p class="h6 mb-0 text-muted">Conveniently network effective total linkage via intermandated opportunities. Distinctively <a href="mailto:noreply@canvas.com"><u>noreply@canvas.com</u></a> premium products.</p>
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
