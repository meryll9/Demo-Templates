
<!DOCTYPE html>
<html dir="ltr" lang="en-US">
<head>

	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="author" content="SemiColonWeb" />

	<!-- Stylesheets
	============================================= -->
	<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,900&display=swap" rel="stylesheet" type="text/css" />
	<link rel="stylesheet" href="{{asset('seo/css/bootstrap.css')}}" type="text/css" />
	<link rel="stylesheet" href="{{asset('seo/style.css')}}" type="text/css" />

	<link rel="stylesheet" href="{{asset('seo/css/dark.css')}}" type="text/css" />
	<link rel="stylesheet" href="{{asset('seo/css/font-icons.css')}}" type="text/css" />
	<link rel="stylesheet" href="{{asset('seo/css/animate.css')}}" type="text/css" />
	<link rel="stylesheet" href="{{asset('seo/css/magnific-popup.css')}}" type="text/css" />

	<!-- Bootstrap Switch CSS -->
	<link rel="stylesheet" href="{{asset('seo/css/components/bs-switches.css')}}" type="text/css" />

	<link rel="stylesheet" href="{{asset('seo/css/custom.css')}}" type="text/css" />
	<meta name='viewport' content='initial-scale=1, viewport-fit=cover'>

	<!-- Seo Demo Specific Stylesheet -->
	<link rel="stylesheet" href="{{asset('seo/css/colors.php?color=FE9603')}}" type="text/css" /> <!-- Theme Color -->
	<link rel="stylesheet" href="{{asset('seo/demos/seo/css/fonts.css')}}" type="text/css" />
	<link rel="stylesheet" href="{{asset('seo/demos/seo/seo.css')}}" type="text/css" />
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
	<script src="{{asset('seo/js/jquery.js')}}"></script>
	<script src="{{asset('seo/js/plugins.min.js')}}"></script>

	<!-- Footer Scripts
	============================================= -->
	<script src="{{asset('seo/js/functions.js')}}"></script>

</body>
</html>
