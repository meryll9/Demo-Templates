
<!DOCTYPE html>
<html dir="ltr" lang="en-US">
<head>

	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="author" content="SemiColonWeb" />

	<!-- Stylesheets
	============================================= -->
	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,400i,700|Poppins:300,400,500,600,700|PT+Serif:400,400i&display=swap" rel="stylesheet" type="text/css" />
	<link rel="stylesheet" href="{{asset('travel/css/bootstrap.css')}}" type="text/css" />
	<link rel="stylesheet" href="{{asset('travel/style.css')}}" type="text/css" />
	<link rel="stylesheet" href="{{asset('travel/css/dark.css')}}" type="text/css" />

	<!-- Travel Demo Specific Stylesheet -->
	<link rel="stylesheet" href="{{asset('travel/demos/travel/travel.css')}}" type="text/css" />
	<link rel="stylesheet" href="{{asset('travel/css/components/datepicker.css')}}" type="text/css" />
	<!-- / -->

	<link rel="stylesheet" href="{{asset('travel/css/font-icons.css')}}" type="text/css" />
	<link rel="stylesheet" href="{{asset('travel/css/animate.css')}}" type="text/css" />
	<link rel="stylesheet" href="{{asset('travel/css/magnific-popup.css')}}" type="text/css" />

	<link rel="stylesheet" href="{{asset('travel/css/custom.css')}}" type="text/css" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<link rel="stylesheet" href="{{asset('travel/css/colors.php?color=AC4147.css')}}" type="text/css" />


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
	<script src="{{asset('travel/js/jquery.js')}}"></script>
	<script src="{{asset('travel/js/plugins.min.js')}}"></script>
	<script src="https://maps.google.com/maps/api/js?key=YOUR-API-KEY"></script>

	<!-- Travel Demo Specific Script -->
	<script src="{{asset('travel/js/components/datepicker.js')}}"></script>
	<!-- / -->

	<!-- Footer Scripts
	============================================= -->
	<script src="{{asset('travel/js/functions.js')}}"></script>

	<script>

		$(function() {
			$('.travel-date-group').datepicker({
				autoclose: true,
				startDate: "today"
			});
		});

	</script>

</body>
</html>
