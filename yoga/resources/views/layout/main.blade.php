
<!DOCTYPE html>
<html dir="ltr" lang="en-US">
<head>

	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="author" content="SemiColonWeb" />

	<!-- Stylesheets
	============================================= -->
	<link href="https://fonts.googleapis.com/css?family=Sansita:400,700|Roboto:400,500&display=swap" rel="stylesheet" type="text/css" />
	<link rel="stylesheet" href="{{asset('yoga/css/bootstrap.css')}}" type="text/css" />
	<link rel="stylesheet" href="{{asset('yoga/style.css')}}" type="text/css" />
	<link rel="stylesheet" href="{{asset('yoga/css/swiper.css')}}" type="text/css" />
	<link rel="stylesheet" href="{{asset('yoga/css/dark.css')}}" type="text/css" />

	<!-- Yoga Demo Specific Stylesheet -->
	<link rel="stylesheet" href="{{asset('yoga/css/colors.php?color=7E9680')}}" type="text/css" /> <!-- Yoga Theme Color -->
	<link rel="stylesheet" href="{{asset('yoga/demos/yoga/css/fonts.css')}}" type="text/css" /> <!-- Yoga Theme Font -->
	<link rel="stylesheet" href="{{asset('yoga/demos/yoga/yoga.css')}}" type="text/css" /> <!-- Yoga Theme Custom CSS -->
	<!-- / -->

	<link rel="stylesheet" href="{{asset('yoga/css/font-icons.css')}}" type="text/css" />
	<link rel="stylesheet" href="{{asset('yoga/css/animate.css')}}" type="text/css" />
	<link rel="stylesheet" href="{{asset('yoga/css/magnific-popup.css')}}" type="text/css" />

	<link rel="stylesheet" href="{{asset('yoga/css/custom.css')}}" type="text/css" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />

	<!-- Document Title
	============================================= -->
	<title>{{ env('APP_NAME') }} | Webfocus</title>

</head>

<body class="stretched sticky-footer">

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
	<script src="{{asset('yoga/js/jquery.js')}}"></script>
	<script src="{{asset('yoga/js/plugins.min.js')}}"></script>

	<!-- For Countdown -->
	<script src="{{asset('yoga/js/components/moment.js')}}"></script>

	<!-- Footer Scripts
	============================================= -->
	<script src="{{asset('yoga/js/functions.js')}}"></script>

	<script>
		// Owl Carousel Scripts
		jQuery(window).on( 'pluginCarouselReady', function(){
			$('#oc-teachers').owlCarousel({
				items: 1,
				margin: 30,
				nav: true,
				navText: ['<i class="icon-line-arrow-left"></i>','<i class="icon-line-arrow-right"></i>'],
				dots: false,
				smartSpeed: 300,
				stagePadding: 60,
				responsive:{
					768: { stagePadding: 100, margin: 30, items: 1 },
					991: { stagePadding: 100, margin: 40, smartSpeed: 400, items: 2 },
					1200: { stagePadding: 100, margin: 40, smartSpeed: 400, items: 2}
				},
			});
		});

		//Current Week
		Date.prototype.getWeek = function(start) {
			//Calcing the starting point
			start = start || 0;
			var today = new Date(this.setHours(0, 0, 0, 0));
			var day = today.getDay() - start;
			var date = today.getDate() - day;

			// Grabbing Start/End Dates
			var StartDate = new Date(today.setDate(date));
			var EndDate = new Date(today.setDate(date + 6));
			return [StartDate, EndDate];
		}
		var Dates = new Date().getWeek();
		$("#week-details").text(Dates[0].toLocaleDateString() + ' - '+ Dates[1].toLocaleDateString());
	</script>

</body>
</html>
