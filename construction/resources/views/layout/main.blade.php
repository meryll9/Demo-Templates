
<!DOCTYPE html>
<html dir="ltr" lang="en-US">
<head>

	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="author" content="SemiColonWeb" />

	<!-- Stylesheets
	============================================= -->
	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700|Roboto:300,400,500,700&display=swap" rel="stylesheet" type="text/css" />
	<link rel="stylesheet" href="{{asset('construction/css/bootstrap.css')}}" type="text/css" />
	<link rel="stylesheet" href="{{asset('construction/style.css')}}" type="text/css" />
	<link rel="stylesheet" href="{{asset('construction/css/swiper.css')}}" type="text/css" />

	<!-- Construction Demo Specific Stylesheet -->
	<link rel="stylesheet" href="{{asset('construction/demos/construction/construction.css')}}" type="text/css" />
	<!-- / -->

	<link rel="stylesheet" href="{{asset('construction/css/dark.css')}}" type="text/css" />
	<link rel="stylesheet" href="{{asset('construction/css/font-icons.css')}}" type="text/css" />
	<link rel="stylesheet" href="{{asset('construction/css/animate.css')}}" type="text/css" />
	<link rel="stylesheet" href="{{asset('construction/css/magnific-popup.css')}}" type="text/css" />

	<link rel="stylesheet" href="{{asset('construction/demos/construction/css/fonts.css')}}" type="text/css" />

	<link rel="stylesheet" href="{{asset('construction/css/custom.css')}}" type="text/css" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />

	<link rel="stylesheet" href="{{asset('construction/css/colors.php?color=F1805')}}" type="text/css" />

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
	<script src="{{asset('construction/js/jquery.js')}}"></script>
	<script src="{{asset('construction/js/plugins.min.js')}}"></script>

	<!-- Footer Scripts
	============================================= -->
	<script src="{{asset('construction/js/functions.js')}}"></script>

</body>
</html>
