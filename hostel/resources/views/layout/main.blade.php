
<!DOCTYPE html>
<html dir="ltr" lang="en-US">
<head>

	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="author" content="SemiColonWeb" />

	<!-- Stylesheets
	============================================= -->
	<link href="https://fonts.googleapis.com/css?family=PT+Serif&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="{{asset('hostel/css/bootstrap.css')}}" type="text/css" />
	<link rel="stylesheet" href="{{asset('hostel/style.css')}}" type="text/css" />
	<link rel="stylesheet" href="{{asset('hostel/css/dark.css')}}" type="text/css" />

	<link rel="stylesheet" href="{{asset('hostel/css/font-icons.css')}}" type="text/css" />
	<link rel="stylesheet" href="{{asset('hostel/css/animate.css')}}" type="text/css" />
	<link rel="stylesheet" href="{{asset('hostel/css/magnific-popup.css')}}" type="text/css" />

	<link rel="stylesheet" href="{{asset('hostel/css/custom.css')}}" type="text/css" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />

	<!-- Travel Demo Specific Stylesheet -->
	<link rel="stylesheet" href="{{asset('hostel/css/components/datepicker.css')}}" type="text/css" />
	<!-- / -->

	<!--  Demo Specific Stylesheet -->
	<link rel="stylesheet" href="{{asset('hostel/css/colors.php?color=FD5C63')}}" type="text/css" /> <!-- Theme Color -->
	<link rel="stylesheet" href="{{asset('hostel/demos/hostel/css/fonts.css')}}" type="text/css" /> <!-- Theme Font -->
	<link rel="stylesheet" href="{{asset('hostel/demos/hostel/hostel.css')}}" type="text/css" /> <!-- Theme Custom CSS -->
	<!-- / -->

	<!-- Document Title
	============================================= -->
	<title>{{ env('APP_NAME') }} | Webfocus</title>

</head>

<body class="stretched">

	<!-- Document Wrapper
	============================================= -->
	<div id="wrapper">

		@include('layout.header')

		@yield('content')

		@include('layout.footer')
	</div><!-- #wrapper end -->

	<!-- Go To Top
	============================================= -->
	<div id="gotoTop" class="icon-angle-up"></div>

	<!-- JavaScripts
	============================================= -->
	<script src="{{asset('hostel/js/jquery.js')}}"></script>
	<script src="{{asset('hostel/js/plugins.min.js')}}"></script>
	<!-- Travel Demo Specific Script -->
	<script src="{{asset('hostel/js/components/datepicker.js')}}"></script>
	<!-- / -->

	<!-- Footer Scripts
	============================================= -->
	<script src="{{asset('hostel/js/functions.js')}}"></script>

	<script>
		$(function() {
			$('.travel-date-group').datepicker({
				autoclose: true,
				startDate: "today"
			});
		});

		jQuery(document).ready(function() {

			var studioTab	= $('#studio-tab-nav'),
				sectionBg	= $('.studio-tab');

			studioTab.on('shown.bs.tab', function (e) {
				var bgcolor = studioTab.find('.active').attr('data-bg');
				sectionBg.css({ 'background-color': bgcolor }).fadeIn();
				e.preventDefault();
				$('.tab-pane .fslider').resize();
			});
		});
	</script>

</body>
</html>
