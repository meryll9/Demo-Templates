
<!DOCTYPE html>
<html dir="ltr" lang="en-US">
<head>

	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="author" content="SemiColonWeb" />

	<!-- Stylesheets
	============================================= -->
	<link href="https://fonts.googleapis.com/css?family=Nunito:300,400,600,700&display=swap" rel="stylesheet" type="text/css" />
	<link rel="stylesheet" href="{{asset('modernblog/css/bootstrap.css')}}" type="text/css" />
	<link rel="stylesheet" href="{{asset('modernblog/style.css')}}" type="text/css" />
	<link rel="stylesheet" href="{{asset('modernblog/css/dark.css')}}" type="text/css" />

	<link rel="stylesheet" href="{{asset('modernblog/css/font-icons.css')}}" type="text/css" />
	<link rel="stylesheet" href="{{asset('modernblog/one-page/css/et-line.css')}}" type="text/css" />
	<link rel="stylesheet" href="{{asset('modernblog/css/animate.css')}}" type="text/css" />
	<link rel="stylesheet" href="{{asset('modernblog/css/magnific-popup.css')}}" type="text/css" />

	<link rel="stylesheet" href="{{asset('modernblog/css/custom.css')}}" type="text/css" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />

	<!-- Modern Blog Demo Specific Stylesheet -->
	<link rel="stylesheet" href="{{asset('modernblog/demos/modern-blog/modern-blog.css')}}" type="text/css" />
	<link rel="stylesheet" href="{{asset('modernblog/demos/modern-blog/css/fonts.css')}}" type="text/css" />
	<link rel="stylesheet" href="{{asset('modernblog/css/colors.php?color=dc3545')}}" type="text/css" />
	<!-- / -->

	<!-- Document Title
	============================================= -->
	<title>{{ env('APP_NAME') }} | Webfocus</title>


	<style>

	</style>

</head>

<body class="stretched overlay-menu">

	<!-- Document Wrapper
	============================================= -->
	<div id="wrapper" class="clearfix">

		@include('layout.header')

		<!-- Slider
		============================================= -->
		<section id="slider" class="slider-element min-vh-60 min-vh-md-100">
			<div class="fslider h-100 position-absolute" data-speed="1800" data-pause="5000" data-animation="fade" data-arrows="true" data-pagi="false">
				<div class="flexslider">
					<div class="slider-wrap">
						<!-- Slide 1 -->
						<div class="slide text-center" style="background: url({{asset('/modernblog/demos/modern-blog/images/slider/1.jpg')}}) center center; background-size: cover;">
							<div class="bg-overlay">
								<div class="bg-overlay-content align-items-end">
									<div class="slide-caption px-4 pb-4 dark">
										<h3 class="mb-2 h1"><a href="#" class="text-white">{{ env('APP_TAGLINE') }}</a></h3>
										<p class="h5">Credibly synthesize seamless</p>
									</div>
								</div>
							</div>
						</div>
						<!-- Slide 2 -->
						<div class="slide text-center" style="background: url({{asset('/modernblog/demos/modern-blog/images/slider/2.jpg')}}) center center; background-size: cover;">
							<div class="bg-overlay">
								<div class="bg-overlay-content align-items-end">
									<div class="slide-caption px-4 pb-4 dark">
										<h3 class="mb-2 h1"><a href="#" class="text-white">{{ env('APP_TAGLINE') }}</a></h3>
										<p class="h5">Monotonectally foster cross</p>
									</div>
								</div>
							</div>
						</div>
						<!-- Slide 3 -->
						<div class="slide text-center" style="background: url({{asset('/modernblog/demos/modern-blog/images/slider/3.jpg')}}) center center; background-size: cover;">
							<div class="bg-overlay">
								<div class="bg-overlay-content align-items-end">
									<div class="slide-caption px-4 pb-4 dark">
										<h3 class="mb-2 h1"><a href="#" class="text-white">{{ env('APP_TAGLINE') }}</a></h3>
										<p class="h5">Intrinsicly embrace scalable</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

		</section><!-- #Slider end -->

		@yield('content')

	</div><!-- #wrapper end -->

	<!-- Go To Top
	============================================= -->
	<div id="gotoTop" class="icon-angle-up rounded-circle"></div>

	<!-- JavaScripts
	============================================= -->
	<script src="{{asset('modernblog/js/jquery.js')}}"></script>
	<script src="{{asset('modernblog/js/plugins.min.js')}}"></script>
	<script src="{{asset('modernblog/js/plugins.infinitescroll.js')}}"></script>

	<!-- Footer Scripts
	============================================= -->
	<script src="{{asset('modernblog/js/functions.js')}}"></script>

	<!-- ADD-ONS JS FILES -->
	<script>

		// Infinity Scroll
		jQuery(window).on( 'load', function(){

			var $container = $('.infinity-wrapper');

			$container.infiniteScroll({
				path: '.load-next-posts',
				history: false,
				status: '.page-load-status',
			});

			$container.on( 'load.infiniteScroll', function( event, response, path ) {
				var $items = $( response ).find('.infinity-loader');
				// append items after images loaded
				$items.imagesLoaded( function() {
					$container.append( $items );
					$container.isotope( 'insert', $items );
					setTimeout( function(){
						SEMICOLON.initialize.resizeVideos();
						SEMICOLON.initialize.lightbox();
						SEMICOLON.widget.loadFlexSlider();
					}, 1000 );
				});
			});

		});

	</script>

</body>
</html>
