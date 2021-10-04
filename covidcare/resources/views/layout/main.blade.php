
<!DOCTYPE html>
<html dir="ltr" lang="en-US">
<head>

	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="author" content="SemiColonWeb" />

	<!-- Stylesheets
	============================================= -->
	<link href="https://fonts.googleapis.com/css2?family=IBM+Plex+Sans:wght@400;500&family=IBM+Plex+Serif:wght@400;500;600&family=Playfair+Display&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="{{asset('covidcare/css/bootstrap.css')}}" type="text/css" />
	<link rel="stylesheet" href="{{asset('covidcare/style.css')}}" type="text/css" />
	<link rel="stylesheet" href="{{asset('covidcare/css/swiper.css')}}" type="text/css" />

	<!-- Covid Care Demo Specific Stylesheet -->
	<link rel="stylesheet" href="{{asset('covidcare/demos/covid-care/covid-care.css')}}" type="text/css" /> <!-- Covid Care Custom Css -->
	<link rel="stylesheet" href="{{asset('covidcare/demos/covid-care/css/fonts.css')}}" type="text/css" /> <!-- Covid Care Custom Fonts -->
	<!-- / -->

	<link rel="stylesheet" href="{{asset('covidcare/css/dark.css')}}" type="text/css" />
	<link rel="stylesheet" href="{{asset('covidcare/css/font-icons.css')}}" type="text/css" />
	<link rel="stylesheet" href="{{asset('covidcare/css/animate.css')}}" type="text/css" />
	<link rel="stylesheet" href="{{asset('covidcare/css/magnific-popup.css')}}" type="text/css" />

	<link rel="stylesheet" href="{{asset('covidcare/css/custom.css')}}" type="text/css" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />

	<link rel="stylesheet" href="{{asset('covidcare/css/colors.php?color=0F6458')}}" type="text/css" />

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
	<script src="{{asset('covidcare/js/jquery.js')}}"></script>
	<script src="{{asset('covidcare/js/plugins.min.js')}}"></script>

	<!-- Footer Scripts
	============================================= -->
	<script src="{{asset('covidcare/js/functions.js')}}"></script>

</body>
</html>
