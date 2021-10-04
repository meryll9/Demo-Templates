
<!DOCTYPE html>
<html dir="ltr" lang="en-US">
<head>

	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="author" content="SemiColonWeb" />

	<!-- Stylesheets
	============================================= -->
	<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,400i,500,600,700&display=swap" rel="stylesheet" type="text/css" />
	<link rel="stylesheet" href="{{asset('coworking/css/bootstrap.css')}}" type="text/css" />
	<link rel="stylesheet" href="{{asset('coworking/style.css')}}" type="text/css" />
	<link rel="stylesheet" href="{{asset('coworking/css/dark.css')}}" type="text/css" />

	<link rel="stylesheet" href="{{asset('coworking/css/font-icons.css')}}" type="text/css" />
	<link rel="stylesheet" href="{{asset('coworking/css/animate.css')}}" type="text/css" />
	<link rel="stylesheet" href="{{asset('coworking/css/magnific-popup.css')}}" type="text/css" />

	<link rel="stylesheet" href="{{asset('coworking/css/custom.css')}}" type="text/css" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />

	<!-- Workspace Demo Specific Stylesheet -->
	<link rel="stylesheet" href="{{asset('coworking/css/colors.php?color=267DF4')}}" type="text/css" /> <!-- Theme Color -->
	<link rel="stylesheet" href="{{asset('coworking/demos/coworking/css/fonts.css')}}" type="text/css" /> <!-- Theme Font -->
	<link rel="stylesheet" href="{{asset('coworking/demos/coworking/coworking.css')}}" type="text/css" /> <!-- Theme CSS -->
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
	<script src="{{asset('coworking/js/jquery.js')}}"></script>
	<script src="{{asset('coworking/js/plugins.min.js')}}"></script>

	<!-- Footer Scripts
	============================================= -->
	<script src="{{asset('coworking/js/functions.js')}}"></script>

</body>
</html>
