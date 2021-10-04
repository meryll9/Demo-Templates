
<!DOCTYPE html>
<html dir="ltr" lang="en-US">
<head>

	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="author" content="SemiColonWeb" />

	<!-- Stylesheets
	============================================= -->
	<link href="https://fonts.googleapis.com/css?family=PT+Serif:400,400i,700|Roboto:400,700&display=swap" rel="stylesheet" type="text/css" />
	<link rel="stylesheet" href="{{asset('conference/css/bootstrap.css')}}" type="text/css" />
	<link rel="stylesheet" href="{{asset('conference/style.css')}}" type="text/css" />
	<link rel="stylesheet" href="{{asset('conference/css/dark.css')}}" type="text/css" />

	<link rel="stylesheet" href="{{asset('conference/css/font-icons.css')}}" type="text/css" />
	<link rel="stylesheet" href="{{asset('conference/css/animate.css')}}" type="text/css" />
	<link rel="stylesheet" href="{{asset('conference/css/magnific-popup.css')}}" type="text/css" />

	<link rel="stylesheet" href="{{asset('conference/css/custom.css')}}" type="text/css" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />

	<!-- Conference Demo Specific Stylesheet -->
	<link rel="stylesheet" href="{{asset('conference/demos/conference/css/fonts.css')}}" type="text/css" />
	<link rel="stylesheet" href="{{asset('conference/css/colors.php?color=222')}}" type="text/css" />
	<link rel="stylesheet" href="{{asset('conference/demos/conference/conference.css')}}" type="text/css" />
	<!-- / -->

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
	<script src="{{asset('conference/js/jquery.js')}}"></script>
	<script src="{{asset('conference/js/plugins.min.js')}}"></script>
	<script src="https://maps.google.com/maps/api/js?key=YOUR-API-KEY"></script>

	<!-- Footer Scripts
	============================================= -->
	<script src="{{asset('conference/js/functions.js')}}"></script>

	<script>

		jQuery(document).ready( function(){

			// Ticket Price Changed Script
			var elementEarlyBird = $("#early-bird-person"),
				element1Day = $("#1-day-pricing-person"),
				element2Day = $("#2-day-pricing-person"),
				elementFull = $("#full-pricing-person");

			elementEarlyBird.on( 'change', function(){
				pricingEarlyBird = $(this).prop('value');
				jQuery('.early-bird-pricing').html( '$'+ (pricingEarlyBird * 39) );
			});

			element1Day.on( 'change', function(){
				pricing1day = $(this).prop('value');
				jQuery('.1-day-pricing').html( '$'+ (pricing1day * 29) );
			});

			element2Day.on( 'change', function(){
				pricing2Day = $(this).prop('value');
				jQuery('.2-day-pricing').html( '$'+ (pricing2Day * 49) );
			});

			elementFull.on( 'change', function(){
				pricingFull = $(this).prop('value');
				jQuery('.full-pricing').html( '$'+ (pricingFull * 69) );
			});

		});

	</script>

</body>
</html>
