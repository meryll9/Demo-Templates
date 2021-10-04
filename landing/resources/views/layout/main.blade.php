
<!DOCTYPE html>
<html dir="ltr" lang="en-US">
<head>

	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="author" content="SemiColonWeb" />

	<!-- Stylesheets
	============================================= -->
	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700|Roboto:300,400,500,900&display=swap" rel="stylesheet" type="text/css" />
	<link rel="stylesheet" href="{{asset('landing/css/bootstrap.css')}}" type="text/css" />
	<link rel="stylesheet" href="{{asset('landing/style.css')}}" type="text/css" />

	<link rel="stylesheet" href="{{asset('landing/css/dark.css')}}" type="text/css" />
	<link rel="stylesheet" href="{{asset('landing/css/font-icons.css')}}" type="text/css" />
	<link rel="stylesheet" href="{{asset('landing/css/animate.css')}}" type="text/css" />
	<link rel="stylesheet" href="{{asset('landing/css/magnific-popup.css')}}" type="text/css" />

	<!-- Landing Demo Specific Stylesheet -->
	<link rel="stylesheet" href="{{asset('landing/demos/landing/landing.css')}}" type="text/css" />
	<link rel="stylesheet" href="{{asset('landing/demos/landing/css/fonts.css')}}" type="text/css" />

	<link rel="stylesheet" href="{{asset('landing/css/custom.css')}}" type="text/css" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />

	<link rel="stylesheet" href="{{asset('landing/css/colors.php?color=3D80E4')}}" type="text/css" />

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
	<script src="{{asset('landing/js/jquery.js')}}"></script>
	<script src="{{asset('landing/js/plugins.min.js')}}"></script>

	<!-- Footer Scripts
	============================================= -->
	<script src="{{asset('landing/js/functions.js')}}"></script>

	<script>
		jQuery(window).on( 'pluginCarouselReady', function(){
			setTimeout( function(){
				$('.owl-stage').after('<div class="owl-stage-outer-bg"></div>');
			}, 1000 );
		});
	</script>

</body>
</html>
