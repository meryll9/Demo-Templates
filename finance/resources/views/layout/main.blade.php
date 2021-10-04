
<!DOCTYPE html>
<html dir="ltr" lang="en-US">
<head>

	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="author" content="SemiColonWeb" />

	<!-- Stylesheets
	============================================= -->
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Manrope:wght@400;500;600;700&family=DM+Serif+Text&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="{{asset('finance/css/bootstrap.css')}}" type="text/css" />
	<link rel="stylesheet" href="{{asset('finance/style.css')}}" type="text/css" />
	<link rel="stylesheet" href="{{asset('finance/css/swiper.css')}}" type="text/css" />

	<link rel="stylesheet" href="{{asset('finance/css/dark.css')}}" type="text/css" />
	<link rel="stylesheet" href="{{asset('finance/css/font-icons.css')}}" type="text/css" />
	<link rel="stylesheet" href="{{asset('finance/css/animate.css')}}" type="text/css" />
	<link rel="stylesheet" href="{{asset('finance/css/magnific-popup.css')}}" type="text/css" />

	<!-- Finance Demo Specific Stylesheet -->
	<link rel="stylesheet" href="{{asset('finance/demos/finance/finance.css')}}" type="text/css" /> <!-- Finance Custom Css -->
	<link rel="stylesheet" href="{{asset('finance/demos/finance/css/fonts.css')}}" type="text/css" /> <!-- Finance Custom Fonts -->
	<!-- / -->

	<link rel="stylesheet" href="{{asset('finance/css/custom.css')}}" type="text/css" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />

	<link rel="stylesheet" href="{{asset('finance/css/colors.php?color=264653')}}" type="text/css" />

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
	<div id="gotoTop" class="icon-line-chevrons-up bg-color h-bg-color-2 shadow rounded-circle"></div>

	<!-- JavaScripts
	============================================= -->
	<script src="{{asset('finance/js/jquery.js')}}"></script>
	<script src="{{asset('finance/js/plugins.min.js')}}"></script>

	<!-- Footer Scripts
	============================================= -->
	<script src="{{asset('finance/js/functions.js')}}"></script>

	<script>
		jQuery(document).ready( function($){

			var lastScrollTop = 0;
			window.addEventListener("scroll", function(event){
				var st = $(this).scrollTop();
				if (st > lastScrollTop){
					jQuery('#header.sticky-on-scrollup').removeClass('show-sticky-onscroll'); // Down Scroll
				} else {
					jQuery('#header.sticky-on-scrollup').addClass('show-sticky-onscroll'); // Up Scroll
				}
				lastScrollTop = st;
			});

			$('.services-grid .feature-box').hover(
			  function () {
			    $(this).addClass("dark");
			  },
			  function () {
			    $(this).removeClass("dark");
			  }
			);

		});
	</script>

</body>
</html>
