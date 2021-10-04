
<!DOCTYPE html>
<html dir="ltr" lang="en-US">
<head>

	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="author" content="SemiColonWeb" />

	<!-- Stylesheets
	============================================= -->
	<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,400i,500,600,700&display=swap" rel="stylesheet" type="text/css" />
	<link rel="stylesheet" href="{{asset('photographer/css/bootstrap.css')}}" type="text/css" />
	<link rel="stylesheet" href="{{asset('photographer/style.css')}}" type="text/css" />
	<link rel="stylesheet" href="{{asset('photographer/css/dark.css')}}" type="text/css" />

	<link rel="stylesheet" href="{{asset('photographer/css/font-icons.css')}}" type="text/css" />
	<link rel="stylesheet" href="{{asset('photographer/one-page/css/et-line.css')}}" type="text/css" />
	<link rel="stylesheet" href="{{asset('photographer/css/animate.css')}}" type="text/css" />
	<link rel="stylesheet" href="{{asset('photographer/css/magnific-popup.css')}}" type="text/css" />

	<link rel="stylesheet" type="text/css" href="{{asset('photographer/demos/photographer/css/menu.css')}}" />

	<link rel="stylesheet" href="{{asset('photographer/css/custom.css')}}" type="text/css" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />

	<!-- Photographer Specific Stylesheet -->
	<link rel="stylesheet" href="{{asset('photographer/demos/photographer/photographer.css')}}" type="text/css" />
	<!-- Photographer Specific Fonts -->
	<link rel="stylesheet" href="{{asset('photographer/demos/photographer/css/fonts.css')}}" type="text/css" />
	<!-- / -->

	<!-- Photographer Specific Color -->
	<link rel="stylesheet" href="{{asset('photographer/css/colors.php?color=e41c34')}}" type="text/css" />

	<!-- Document Title
	============================================= -->
	<title>{{ env('APP_NAME') }} | Webfocus</title>

</head>

<!-- Page Loader, stretched (body)
============================================= -->
<body class="stretched" data-loader-html="<div><img src='{{asset('demos/photographer/images/icons/loader.svg')}}' alt='Loader'></div>">

	<!-- Document Wrapper
	============================================= -->
	<div id="wrapper" class="clearfix">

		@include('layout.header')


		@yield('content')

		@include('layout.footer')

	</div><!-- #wrapper end -->

	<!-- Go To Top
	============================================= -->
	<div id="gotoTop" class="icon-angle-up bg-color"></div>

	<!-- Dark Mode Switch
	============================================= -->
	<a href="demo-photographer-dark.html" class="dark-mode" data-animate="fadeInRight">
		<span>Dark Mode</span><i class="icon-line-toggle shadow"></i>
	</a>

	<!-- JavaScripts
	============================================= -->
	<script src="{{asset('photographer/js/jquery.js')}}"></script>
	<script src="{{asset('photographer/js/plugins.min.js')}}"></script>

	<!-- Photograph Hover Plugin
	============================================= -->
	<script src="{{asset('photographer/demos/writer/js/hover3d.js')}}" ></script>

	<!-- Menu Open Plugin
	============================================= -->
	<script src="{{asset('photographer/demos/photographer/js/menu-easing.js')}}"></script>

	<!-- Footer Scripts
	============================================= -->
	<script src="{{asset('photographer/js/functions.js')}}"></script>

	<script>

		// Hover Script
		jQuery(".img-hover-wrap").hover3d({
			selector: ".img-hover-card",
			shine: false,
		});

	</script>

</body>
</html>
