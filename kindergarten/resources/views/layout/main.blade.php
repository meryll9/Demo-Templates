
<!DOCTYPE html>
<html dir="ltr" lang="en-US">
<head>

	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="author" content="SemiColonWeb" />

	<!-- Stylesheets
	============================================= -->
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="{{asset('kindergarten/css/bootstrap.css')}}" type="text/css" />
	<link rel="stylesheet" href="{{asset('kindergarten/style.css')}}" type="text/css" />
	<link rel="stylesheet" href="{{asset('kindergarten/css/swiper.css')}}" type="text/css" />

	<link rel="stylesheet" href="{{asset('kindergarten/css/dark.css')}}" type="text/css" />
	<link rel="stylesheet" href="{{asset('kindergarten/css/font-icons.css')}}" type="text/css" />
	<link rel="stylesheet" href="{{asset('kindergarten/css/animate.css')}}" type="text/css" />
	<link rel="stylesheet" href="{{asset('kindergarten/css/magnific-popup.css')}}" type="text/css" />

	<!-- Date & Time Picker CSS -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">

	<!-- Kindergarten Demo Specific Stylesheet -->
	<link rel="stylesheet" href="{{asset('kindergarten/demos/kindergarten/kindergarten.css')}}" type="text/css" /> <!-- Kindergarten Custom Css -->
	<link rel="stylesheet" href="{{asset('kindergarten/demos/kindergarten/css/fonts.css')}}" type="text/css" /> <!-- Kindergarten Custom Fonts -->
	<!-- / -->

	<link rel="stylesheet" href="{{asset('kindergarten/css/custom.css')}}" type="text/css" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />

	<link rel="stylesheet" href="{{asset('kindergarten/css/colors.php?color=6953A8')}}" type="text/css" />

	<!-- Document Title
	============================================= -->
	<title>{{ env('APP_NAME') }} | Webfocus</title>

</head>

<body class="stretched">

	<div class="modal-on-load" data-target="#myModal1"></div>

	<!-- Modal -->
	<div class="modal1 mfp-hide subscribe-widget" id="myModal1">
		<a href="#" class="d-flex mx-auto h-scale-sm all-ts" style="max-width: 670px">
			<img src="{{asset('kindergarten/demos/kindergarten/images/banner.jpg')}}" alt="Banner Image" class="rounded-4">
		</a>
	</div>

	<!-- Document Wrapper
	============================================= -->
	<div id="wrapper" class="clearfix">

		@include('layout.header')

		@yield('content')

		@include('layout.footer')

	</div><!-- #wrapper end -->

	<!-- Go To Top
	============================================= -->
	<div id="gotoTop" class="icon-hand-up rounded-circle"></div>

	<!-- JavaScripts
	============================================= -->
	<script src="{{asset('kindergarten/js/jquery.js')}}"></script>
	<script src="{{asset('kindergarten/js/plugins.min.js')}}"></script>

	<!-- Include Date Range Picker -->
	<script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>

	<!-- Footer Scripts
	============================================= -->
	<script src="{{asset('kindergarten/js/functions.js')}}"></script>

	<script>
		let carousels = jQuery('#kindergarten-carousel-img, #kindergarten-carousel-text');
		jQuery('.carousel-control-prev').on( 'click', function(){
			carousels.carousel('prev');
		});
		jQuery('.carousel-control-next').on( 'click', function(){
			carousels.carousel('next');
		});

		jQuery(function() {
			jQuery(".component-flatpickr").flatpickr({
				enableTime: true,
				dateFormat: "d/m/yy - H:i",
			});
		});
	</script>

</body>
</html>
