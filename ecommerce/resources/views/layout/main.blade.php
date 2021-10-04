
<!DOCTYPE html>
<html dir="ltr" lang="en-US">
<head>

	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="author" content="SemiColonWeb" />

	<!-- Stylesheets
	============================================= -->
	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,400i,700|Montserrat:300,400,500,600,700|Merriweather:300,400,300i,400i&display=swap" rel="stylesheet" type="text/css" />
	<link rel="stylesheet" href="{{asset('ecommerce/css/bootstrap.css')}}" type="text/css" />
	<link rel="stylesheet" href="{{asset('ecommerce/style.css')}}" type="text/css" />
	<link rel="stylesheet" href="{{asset('ecommerce/css/dark.css')}}" type="text/css" />
	<link rel="stylesheet" href="{{asset('ecommerce/css/swiper.css')}}" type="text/css" />

	<!-- eCommerce Demo Specific Stylesheet -->
	<link rel="stylesheet" href="{{asset('ecommerce/demos/ecommerce/ecommerce.css')}}" type="text/css" />
	<link rel="stylesheet" href="{{asset('ecommerce/demos/ecommerce/css/fonts.css')}}" type="text/css" />
	<!-- / -->

	<link rel="stylesheet" href="{{asset('ecommerce/css/font-icons.css')}}" type="text/css" />
	<link rel="stylesheet" href="{{asset('ecommerce/css/animate.css')}}" type="text/css" />
	<link rel="stylesheet" href="{{asset('ecommerce/css/magnific-popup.css')}}" type="text/css" />

	<link rel="stylesheet" href="{{asset('ecommerce/css/custom.css')}}" type="text/css" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />

	<link rel="stylesheet" href="{{asset('ecommerce/css/colors.php?color=000000')}}" type="text/css" />

	<!-- Document Title
	============================================= -->
	<title>{{ env('APP_NAME') }} | Webfocus</title>

</head>

<body class="stretched">

	<!-- Document Wrapper
	============================================= -->
	<div id="wrapper" class="clearfix">

		<!-- Top Bar
		============================================= -->
		<div id="top-bar" class="dark">
			<div class="container py-3">
				<p class="center mb-0 clearfix">Back to the future of awesome Bags: Introducing canvas market. <a href="#">Shop Now</a><a href="#" id="close-bar" class="float-end border-bottom-0"><i class="icon-line-cross"></i></a></p>
			</div>
		</div>

		@include('layout.header')

		@yield('content')

		@include('layout.footer')

	</div><!-- #wrapper end -->

	<!-- Go To Top
	============================================= -->
	<div id="gotoTop" class="icon-line-arrow-up"></div>

	<!-- JavaScripts
	============================================= -->
	<script src="{{asset('ecommerce/js/jquery.js')}}"></script>
	<script src="{{asset('ecommerce/js/plugins.min.js')}}"></script>

	<!-- Footer Scripts
	============================================= -->
	<script src="{{asset('ecommerce/js/functions.js')}}"></script>

	<script>

		// Topbar Hide
		$('#top-bar').on('click','#close-bar',function(){
			$(this).parents('#top-bar').slideUp(300);
			$('body').css('padding-top',0);
		})

		jQuery(window).on( 'pluginCarouselReady', function(){
			// Custom Carousel
			$('.owl-carousel').owlCarousel({
				items: 1,
				dotsContainer: '#item-color-dots',
			    loop: true,
			});
		});
	</script>

</body>
</html>
