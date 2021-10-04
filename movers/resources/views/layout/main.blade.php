
<!DOCTYPE html>
<html dir="ltr" lang="en-US">
<head>

	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="author" content="SemiColonWeb" />

	<!-- Stylesheets
	============================================= -->
	<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700&display=swap" rel="stylesheet" type="text/css" />
	<link rel="stylesheet" href="{{asset('movers/css/bootstrap.css')}}" type="text/css" />
	<link rel="stylesheet" href="{{asset('movers/style.css')}}" type="text/css" />

	<link rel="stylesheet" href="{{asset('movers/css/dark.css')}}" type="text/css" />
	<link rel="stylesheet" href="{{asset('movers/css/font-icons.css')}}" type="text/css" />
	<link rel="stylesheet" href="{{asset('movers/css/animate.css')}}" type="text/css" />
	<link rel="stylesheet" href="{{asset('movers/css/magnific-popup.css')}}" type="text/css" />

	<link rel="stylesheet" href="{{asset('movers/css/custom.css')}}" type="text/css" />

	<!-- Movers Demo Specific Stylesheet -->
	<link rel="stylesheet" href="{{asset('movers/css/colors.php?color=0F66DD')}}" type="text/css" /> <!-- Theme Color -->
	<link rel="stylesheet" href="{{asset('movers/demos/movers/css/fonts.css')}}" type="text/css" />
	<link rel="stylesheet" href="{{asset('movers/demos/movers/movers.css')}}" type="text/css" />
	<!-- / -->

	<!-- DatePicker CSS -->
	<link rel="stylesheet" href="{{asset('movers/css/components/datepicker.css')}}" type="text/css" />

	<meta name='viewport' content='initial-scale=1, viewport-fit=cover'>

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
	<script src="{{asset('movers/js/jquery.js')}}"></script>
	<script src="{{asset('movers/js/plugins.min.js')}}"></script>

	<!-- DatePicker JS -->
	<script src="{{asset('movers/js/components/datepicker.js')}}"></script>

	<!-- Footer Scripts
	============================================= -->
	<script src="{{asset('movers/js/functions.js')}}"></script>

	<script>

		jQuery('.home-date').datepicker({
			autoclose: true,
			startDate: "today",
		});
	</script>


</body>
</html>
