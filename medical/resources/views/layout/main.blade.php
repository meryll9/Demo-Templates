
<!DOCTYPE html>
<html dir="ltr" lang="en-US">
<head>

	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="author" content="SemiColonWeb" />

	<!-- Stylesheets
	============================================= -->
	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,400i,700|Montserrat:400,700|Crete+Round:400i&display=swap" rel="stylesheet" type="text/css" />
	<link rel="stylesheet" href="{{asset('medical/css/bootstrap.css')}}" type="text/css" />
	<link rel="stylesheet" href="{{asset('medical/style.css')}}" type="text/css" />
	<link rel="stylesheet" href="{{asset('medical/css/swiper.css')}}" type="text/css" />

	<!-- Medical Demo Specific Stylesheet -->
	<link rel="stylesheet" href="{{asset('medical/demos/medical/medical.css')}}" type="text/css" />
	<!-- / -->

	<link rel="stylesheet" href="{{asset('medical/css/dark.css')}}" type="text/css" />
	<link rel="stylesheet" href="{{asset('medical/css/font-icons.css')}}" type="text/css" />
	<link rel="stylesheet" href="{{asset('medical/demos/medical/css/medical-icons.css')}}" type="text/css" />
	<link rel="stylesheet" href="{{asset('medical/css/animate.css')}}" type="text/css" />
	<link rel="stylesheet" href="{{asset('medical/css/magnific-popup.css')}}" type="text/css" />

	<link rel="stylesheet" href="{{asset('medical/demos/medical/fonts.css')}}" type="text/css" />

	<link rel="stylesheet" href="{{asset('medical/css/custom.css')}}" type="text/css" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />

	<link rel="stylesheet" href="{{asset('medical/css/colors.php?color=DE6262')}}" type="text/css" />

	<!-- Document Title
	============================================= -->
	<title>{{ env('APP_NAME') }} | Webfocus</title>

</head>

<body class="stretched page-transition" data-loader-html="<div id='css3-spinner-svg-pulse-wrapper'><svg id='css3-spinner-svg-pulse' version='1.2' height='210' width='550' xmlns='https://www.w3.org/2000/svg' viewport='0 0 60 60' xmlns:xlink='https://www.w3.org/1999/xlink'><path id='css3-spinner-pulse' stroke='#DE6262' fill='none' stroke-width='2' stroke-linejoin='round' d='M0,90L250,90Q257,60 262,87T267,95 270,88 273,92t6,35 7,-60T290,127 297,107s2,-11 10,-10 1,1 8,-10T319,95c6,4 8,-6 10,-17s2,10 9,11h210' /></svg></div>">

	<!-- Document Wrapper
	============================================= -->
	<div id="wrapper" class="clearfix">

		@include('layout.header')
        @yield('content')

		@include('layout.footer')

	</div><!-- #wrapper end -->

	<!-- Go To Top
	============================================= -->
	<div id="gotoTop" class="icon-angle-up rounded-circle"></div>

	<!-- JavaScripts
	============================================= -->
	<script src="{{asset('medical/js/jquery.js')}}"></script>
	<script src="{{asset('medical/js/plugins.min.js')}}"></script>

	<!-- Footer Scripts
	============================================= -->
	<script src="{{asset('medical/js/functions.js')}}"></script>

</body>
</html>


