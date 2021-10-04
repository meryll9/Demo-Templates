
<!DOCTYPE html>
<html dir="ltr" lang="en-US">
<head>

	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="author" content="SemiColonWeb" />

	<!-- Stylesheets
	============================================= -->
	<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,400i,600,700|Open+Sans:300,400,600,700,800,900&display=swap" rel="stylesheet" type="text/css" />
	<link rel="stylesheet" href="{{asset('business/css/bootstrap.css')}}" type="text/css" />
	<link rel="stylesheet" href="{{asset('business/style.css')}}" type="text/css" />
	<link rel="stylesheet" href="{{asset('business/css/dark.css')}}" type="text/css" />
	<link rel="stylesheet" href="{{asset('business/css/swiper.css')}}" type="text/css" />

	<!-- Business Demo Specific Stylesheet -->
	<link rel="stylesheet" href="{{asset('business/demos/business/business.css')}}" type="text/css" />
	<link rel="stylesheet" href="{{asset('business/demos/business/css/fonts.css')}}" type="text/css" />
	<!-- / -->

	<link rel="stylesheet" href="{{asset('business/css/font-icons.css')}}" type="text/css" />
	<link rel="stylesheet" href="{{asset('business/css/animate.css')}}" type="text/css" />
	<link rel="stylesheet" href="{{asset('business/css/magnific-popup.css')}}" type="text/css" />

	<link rel="stylesheet" href="{{asset('business/one-page/css/et-line.css')}}" type="text/css" />

	<link rel="stylesheet" href="{{asset('business/css/custom.css')}}" type="text/css" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />

	<!-- Theme Color
	============================================= -->
	<link rel="stylesheet" href="{{asset('business/css/colors.php?color=00BED7')}}" type="text/css" />

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
	<div id="gotoTop" class="icon-angle-up"></div>

	<!-- JavaScripts
	============================================= -->
	<script src="{{asset('business/js/jquery.js')}}"></script>
	<script src="{{asset('business/js/plugins.min.js')}}"></script>

	<!-- Footer Scripts
	============================================= -->
	<script src="{{asset('business/js/functions.js')}}"></script>

	<script>
		jQuery(window).on( 'pluginCarouselReady', function(){
			$('#oc-features').owlCarousel({
				items: 1,
				margin: 60,
			    nav: true,
			    navText: ['<i class="icon-line-arrow-left"></i>','<i class="icon-line-arrow-right"></i>'],
			    dots: false,
			    stagePadding: 30,
			    responsive:{
					768: { items: 2 },
					1200: { stagePadding: 200 }
				},
			});
		});
	</script>

</body>
</html>
