
<!DOCTYPE html>
<html dir="ltr" lang="en-US">
<head>

	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="author" content="SemiColonWeb" />

	<!-- Stylesheets
	============================================= -->
	<link href="https://fonts.googleapis.com/css?family=Istok+Web:400,700&display=swap" rel="stylesheet" type="text/css" />
	<link rel="stylesheet" href="{{asset('course/css/bootstrap.css')}}" type="text/css" />
	<link rel="stylesheet" href="{{asset('course/style.css')}}" type="text/css" />

	<link rel="stylesheet" href="{{asset('course/css/dark.css')}}" type="text/css" />
	<link rel="stylesheet" href="{{asset('course/css/font-icons.css')}}" type="text/css" />
	<link rel="stylesheet" href="{{asset('course/css/animate.css')}}" type="text/css" />
	<link rel="stylesheet" href="{{asset('course/css/magnific-popup.css')}}" type="text/css" />

	<link rel="stylesheet" href="{{asset('course/one-page/css/et-line.css')}}" type="text/css" />

	<link rel="stylesheet" href="{{asset('course/css/custom.css')}}" type="text/css" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />

	<link rel="stylesheet" href="{{asset('course/css/colors.php?color=0474c4')}}" type="text/css" />

	<!-- Hosting Demo Specific Stylesheet -->
	<link rel="stylesheet" href="{{asset('course/demos/course/css/fonts.css')}}" type="text/css" />
	<link rel="stylesheet" href="{{asset('course/demos/course/course.css')}}" type="text/css" />
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
	<script src="{{asset('course/js/jquery.js')}}"></script>
	<script src="{{asset('course/js/plugins.min.js')}}"></script>

	<!-- Footer Scripts
	============================================= -->
	<script src="{{asset('course/js/functions.js')}}"></script>

</body>
</html>
