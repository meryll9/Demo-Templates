<!DOCTYPE html>
<html dir="ltr" lang="en-US">
<head>

	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="author" content="SemiColonWeb" />

	<!-- Stylesheets
	============================================= -->
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Manrope:wght@300;400;500;600;700&family=Merriweather:wght@400;700&family=Material+Icons+Outlined&family=Material+Icons+Two+Tone&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="{{ asset('law/css/bootstrap.css')}}" type="text/css" />
	<link rel="stylesheet" href="{{ asset('law/style.css')}}" type="text/css" />

	<link rel="stylesheet" href="{{ asset('law/css/dark.css')}}" type="text/css" />
	<link rel="stylesheet" href="{{ asset('law/css/font-icons.css')}}" type="text/css" />
	<link rel="stylesheet" href="{{ asset('law/css/animate.css')}}" type="text/css" />
	<link rel="stylesheet" href="{{ asset('law/css/magnific-popup.css')}}" type="text/css" />

	<!-- law-firm Demo Specific Stylesheet -->
	<link rel="stylesheet" href="{{ asset('law/demos/law-firm/law-firm.css')}}" type="text/css" /> <!-- law-firm Custom Css -->
	<link rel="stylesheet" href="{{ asset('law/demos/law-firm/css/fonts.css')}}" type="text/css" /> <!-- law-firm Custom Fonts -->
	<!-- / -->

	<link rel="stylesheet" href="{{ asset('law/css/custom.css')}}" type="text/css" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />

	<link rel="stylesheet" href="{{ asset('law/css/colors.php?color=0F317E')}}" type="text/css" />

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
	<div id="gotoTop" class="icon-line-chevrons-up rounded-circle"></div>

	<!-- JavaScripts
	============================================= -->
	<script src="{{ asset('law/js/jquery.js')}}"></script>
	<script src="{{ asset('law/js/plugins.min.js')}}"></script>


	<!-- Footer Scripts
	============================================= -->
	<script src="{{ asset('law/js/functions.js')}}"></script>

</body>
</html>
