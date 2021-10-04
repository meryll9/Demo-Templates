
<!DOCTYPE html>
<html dir="ltr" lang="en-US">
<head>

	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="author" content="SemiColonWeb" />

	<!-- Stylesheets
	============================================= -->
	<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,400italic,600,700|Playfair+Display:400,400italic,700|Lato:300,400,700&display=swap" rel="stylesheet" type="text/css" />
	<link rel="stylesheet" href="{{asset('gym/css/bootstrap.css')}}" type="text/css" />
	<link rel="stylesheet" href="{{asset('gym/style.css')}}" type="text/css" />
	<link rel="stylesheet" href="{{asset('gym/css/dark.css')}}" type="text/css" />
	<link rel="stylesheet" href="{{asset('gym/css/swiper.css')}}" type="text/css" />

	<link rel="stylesheet" href="{{asset('gym/css/font-icons.css')}}" type="text/css" />
	<link rel="stylesheet" href="{{asset('gym/css/animate.css')}}" type="text/css" />
	<link rel="stylesheet" href="{{asset('gym/css/magnific-popup.css')}}" type="text/css" />

	<link rel="stylesheet" href="{{asset('gym/demos/gym/css/fonts.css')}}" type="text/css" />

	<!-- Bootstrap Switch CSS -->
	<link rel="stylesheet" href="{{asset('gym/css/components/bs-switches.css')}}" type="text/css" />

	<link rel="stylesheet" href="{{asset('gym/css/custom.css')}}" type="text/css" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />

	<!-- Coffee Demo Specific Stylesheet -->
	<link rel="stylesheet" href="{{asset('gym/demos/gym/gym.css')}}" type="text/css" />
	<!-- / -->

	<!-- Color Scheme -->
	<link rel="stylesheet" href="{{asset('gym/css/colors.php?color=1E8C93')}}" type="text/css" />

	<!-- Document Title
	============================================= -->
	<title>{{ env('APP_NAME') }} | Webfocus</title>

	<style>
		.tp-caption.Gym-Display,
		.Gym-Display { font-family: 'Poppins', sans-serif; }

		.tp-caption.Gym-Display.font-secondary,
		.Gym-Display.font-secondary { font-family: 'Playfair Display', Serif; }
	</style>

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
	<script src="{{asset('gym/js/jquery.js')}}"></script>
	<script src="{{asset('gym/js/components/event.move.js')}}"></script>
	<script src="{{asset('gym/js/components/image-changer.js')}}"></script>

	<!-- Footer Scripts
	============================================= -->
	<script src="{{asset('gym/js/functions.js')}}"></script>

	<script>
		jQuery(window).on( 'load', function(){
			$(".twentytwenty-container[data-orientation!='vertical']").twentytwenty({default_offset_pct: 0.7});
		});
	</script>

</body>
</html>
