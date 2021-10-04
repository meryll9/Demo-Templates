
<!DOCTYPE html>
<html dir="ltr" lang="en-US">
<head>

	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="author" content="SemiColonWeb" />

	<!-- Stylesheets
	============================================= -->
	<link href="https://fonts.googleapis.com/css?family=Merriweather:400,700" rel="stylesheet" type="text/css" />
	<link rel="stylesheet" href="{{asset('beautykit/css/bootstrap.css')}}" type="text/css" />
	<link rel="stylesheet" href="{{asset('beautykit/style.css')}}" type="text/css" />
	<link rel="stylesheet" href="{{asset('beautykit/css/dark.css')}}" type="text/css" />
	<!-- / -->

	<link rel="stylesheet" href="{{asset('beautykit/css/font-icons.css')}}" type="text/css" />
	<link rel="stylesheet" href="{{asset('beautykit/css/animate.css')}}" type="text/css" />
	<link rel="stylesheet" href="{{asset('beautykit/css/magnific-popup.css')}}" type="text/css" />

	<link rel="stylesheet" href="{{asset('beautykit/one-page/css/et-line.css')}}" type="text/css" />

	<link rel="stylesheet" href="{{asset('beautykit/css/custom.css')}}" type="text/css" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />

	<link rel="stylesheet" href="{{asset('beautykit/css/colors.php?color=222E2B')}}" type="text/css" />

	<!-- Beauty Demo Specific Stylesheet -->
	<link rel="stylesheet" href="{{asset('beautykit/demos/beauty-kit/beauty-kit.css')}}" type="text/css" />
	<link rel="stylesheet" href="{{asset('beautykit/demos/beauty-kit/css/fonts.css')}}" type="text/css" />
	<link rel="stylesheet" href="{{asset('beautykit/demos/spa/css/fonts/spa-icons.css')}}" type="text/css" />

	<!-- SLIDER REVOLUTION 5.x CSS SETTINGS -->
	<link rel="stylesheet" type="text/css" href="{{asset('beautykit/include/rs-plugin/css/settings.css')}}" media="screen" />
	<link rel="stylesheet" type="text/css" href="{{asset('beautykit/include/rs-plugin/css/layers.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('beautykit/include/rs-plugin/css/navigation.css')}}">

	<!-- Document Title
	============================================= -->
	<title>{{ env('APP_NAME') }} | Webfocus</title>

</head>

<body class="stretched side-header">

	<!-- Document Wrapper
	============================================= -->
	<div id="wrapper" class="clearfix">

		@include('layout.header')

		@yield('content')

		@include('layout.footer')
	</div><!-- #wrapper end -->

	<!-- Go To Top
	============================================= -->
	<div id="gotoTop" class="icon-angle-up rounded-circle bg-color3"></div>

	<!-- External JavaScripts
	============================================= -->
	<script src="{{asset('beautykit/js/jquery.js')}}"></script>
	<script src="{{asset('beautykit/js/plugins.min.js')}}"></script>

	<script src="{{asset('beautykit/js/components/event.move.js')}}"></script>
	<script src="{{asset('beautykit/js/components/image-changer.js')}}"></script>

	<!-- Footer Scripts
	============================================= -->
	<script src="{{asset('beautykit/js/functions.js')}}"></script>

	<script>

		jQuery(window).on( 'load', function(){
			$(".twentytwenty-container[data-orientation!='vertical']").twentytwenty({default_offset_pct: 0.5});
		});
	</script>

</body>
</html>
