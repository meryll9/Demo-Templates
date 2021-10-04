
<!DOCTYPE html>
<html dir="ltr" lang="en-US">
<head>

	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="author" content="SemiColonWeb" />

	<!-- Stylesheets
	============================================= -->
	<link href="https://fonts.googleapis.com/css2?family=Prata&family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="{{asset('therapy/css/bootstrap.css')}}" type="text/css" />
	<link rel="stylesheet" href="{{asset('therapy/style.css')}}" type="text/css" />
	<link rel="stylesheet" href="{{asset('therapy/css/dark.css')}}" type="text/css" />


	<link rel="stylesheet" href="{{asset('therapy/css/font-icons.css')}}" type="text/css" />
	<link rel="stylesheet" href="{{asset('therapy/css/animate.css')}}" type="text/css" />
	<link rel="stylesheet" href="{{asset('therapy/css/magnific-popup.css')}}" type="text/css" />

	<link rel="stylesheet" href="{{asset('therapy/css/colors.php?color=F1C77A')}}" type="text/css" />
	<!-- Date & Time Picker CSS -->
	<link rel="stylesheet" href="{{asset('therapy/demos/therapy/css/flatpickr.css')}}">

	<!-- Therapy Demo Specific Stylesheet -->
	<link rel="stylesheet" href="{{asset('therapy/demos/therapy/css/fonts.css')}}" type="text/css" />
	<link rel="stylesheet" href="{{asset('therapy/demos/therapy/therapy.css')}}" type="text/css" />
	<link rel="stylesheet" href="{{asset('therapy/demos/spa/css/fonts/spa-icons.css')}}" type="text/css" />
	<!-- / -->

	<link rel="stylesheet" href="{{asset('therapy/css/custom.css')}}" type="text/css" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />

	<!-- Document Title
	============================================= -->
	<title>{{ env('APP_NAME') }} | Webfocus</title>

	<style>

	</style>

</head>

<body class="stretched page-transition">

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
	<script src="{{asset('therapy/js/jquery.js')}}"></script>
	<script src="{{asset('therapy/js/plugins.min.js')}}"></script>

	<!-- Include Date Range Picker -->
	<script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>

	<!-- Footer Scripts
	============================================= -->
	<script src="{{asset('therapy/js/functions.js')}}"></script>

	<script>
		$("#template-contactform-date").flatpickr({
			enableTime: true,
			altInput: true,
			altFormat: "F j, Y  - H:i",
			minDate: "today",
			time_24hr: true
		});
	</script>

</body>
</html>
