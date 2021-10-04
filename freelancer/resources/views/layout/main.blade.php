
<!DOCTYPE html>
<html dir="ltr" lang="en-US">
<head>

	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="author" content="SemiColonWeb" />

	<!-- Stylesheets
	============================================= -->
	<link href="http://fonts.googleapis.com/css?family=Heebo:300,400,500,700,900" rel="stylesheet" type="text/css" />
	<link rel="stylesheet" href="{{asset('freelancer/css/bootstrap.css')}}" type="text/css" />
	<link rel="stylesheet" href="{{asset('freelancer/style.css')}}" type="text/css" />

	<link rel="stylesheet" href="{{asset('freelancer/css/dark.css')}}" type="text/css" />
	<link rel="stylesheet" href="{{asset('freelancer/css/font-icons.css')}}" type="text/css" />
	<link rel="stylesheet" href="{{asset('freelancer/css/animate.css')}}" type="text/css" />
	<link rel="stylesheet" href="{{asset('freelancer/css/magnific-popup.css')}}" type="text/css" />

	<link rel="stylesheet" href="{{asset('freelancer/css/custom.css')}}" type="text/css" />

	<!-- Freelancer Demo Specific Stylesheet -->
	<link rel="stylesheet" href="{{asset('freelancer/demos/freelancer/css/fonts.css')}}" type="text/css" />
	<link rel="stylesheet" href="{{asset('freelancer/demos/freelancer/freelancer.css')}}" type="text/css" />

	<meta name="viewport" content="width=device-width, initial-scale=1" />

	<link rel="stylesheet" href="{{asset('freelancer/css/colors.php?color=f7c25e')}}" type="text/css" />

	<!-- Document Title
	============================================= -->
	<title>{{ env('APP_NAME') }} | Webfocus</title>

</head>

<body class="stretched">

	<!-- Document Wrapper
	============================================= -->
	<div id="wrapper" class="clearfix">

		@include('layout.header')

		@yield('content')

		@include('layout.footer')
	</div><!-- #wrapper end -->

	<!-- Go To Top
	============================================= -->
	<div id="gotoTop" class="icon-double-angle-up bg-white text-dark rounded-circle shadow"></div>

	<!-- External JavaScripts
	============================================= -->
	<script src="{{asset('freelancer/js/jquery.js')}}"></script>
	<script src="{{asset('freelancer/js/plugins.min.js')}}"></script>

	<!-- Footer Scripts
	============================================= -->
	<script src="{{asset('freelancer/js/functions.js')}}"></script>

	<script>
		// Owl Carousel Scripts
		jQuery(window).on( 'pluginCarouselReady', function(){
			$('#oc-services').owlCarousel({
				items: 1,
				margin: 30,
				nav: false,
				dots: true,
				smartSpeed: 400,
				responsive:{
					576: { stagePadding: 30, items: 1 },
					768: { stagePadding: 30, items: 2 },
					991: { stagePadding: 150, items: 3 },
					1200: { stagePadding: 150, items: 3}
				},
			});
		});
	</script>

</body>
</html>
