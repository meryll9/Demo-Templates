
<!DOCTYPE html>
<html dir="ltr" lang="en-US">
<head>

	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="author" content="SemiColonWeb" />

	<!-- Stylesheets
	============================================= -->
	<link href="https://fonts.googleapis.com/css?family=Dosis:400,500,600,700|Open+Sans:400,600,700|Dancing+Script&display=swap" rel="stylesheet" type="text/css" />
	<link rel="stylesheet" href="{{asset('burger/css/bootstrap.css')}}" type="text/css" />
	<link rel="stylesheet" href="{{asset('burger/style.css')}}" type="text/css" />
	<link rel="stylesheet" href="{{asset('burger/css/dark.css')}}" type="text/css" />

	<link rel="stylesheet" href="{{asset('burger/css/font-icons.css')}}" type="text/css" />
	<link rel="stylesheet" href="{{asset('burger/css/animate.css')}}" type="text/css" />
	<link rel="stylesheet" href="{{asset('burger/css/magnific-popup.css')}}" type="text/css" />

	<link rel="stylesheet" href="{{asset('burger/css/custom.css')}}" type="text/css" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />

	<!-- Burger Demo Specific Stylesheet -->
	<link rel="stylesheet" href="{{asset('burger/css/colors.php?color=FBAF32')}}" type="text/css" /> <!-- Burger Theme Color -->
	<link rel="stylesheet" href="{{asset('burger/demos/burger/css/fonts.css')}}" type="text/css" /> <!-- Burger Theme Font -->
	<link rel="stylesheet" href="{{asset('burger/demos/burger/burger.css')}}" type="text/css" /> <!-- Burger Theme Custom CSS -->
	<!-- / -->

	<!-- Burger Document Title
	============================================= -->
	<title>{{ env('APP_NAME') }} | Webfocus</title>

</head>

<body class="stretched">

	<div class="body-overlay"></div>

	<div id="side-panel" class="dark" style="background: #101010 url({{asset('/burger/demos/burger/images/icon-bg-white.png')}}) repeat center center;">

		<div id="side-panel-trigger-close" class="side-panel-trigger"><a href="#"><i class="icon-line-cross"></i></a></div>

		<div class="side-panel-wrap">

			<div class="widget">

				<h4 class="fw-bold">Download App</h4>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
				<a href="#"><img src="{{asset('burger/demos/articles/images/appstore.png')}}" alt="App Link" height="60"></a>
				<a href="#"><img src="{{asset('burger/demos/articles/images/googleplay.png')}}" alt="App Link" class="mt-2" height="60"></a>

			</div>

			<div id="q-contact" class="widget quick-contact-widget form-widget">

				<h4>Quick Contact</h4>
				<div class="form-result"></div>
				<form id="quick-contact-form" name="quick-contact-form" action="include/form.php" method="post" class="quick-contact-form nobottommargin">
					<div class="form-process"></div>

					<input type="text" class="required not-dark mb-2 sm-form-control input-block-level" id="quick-contact-form-name" name="quick-contact-form-name" value="" placeholder="Full Name" />
					<input type="text" class="required not-dark mb-2 sm-form-control email input-block-level" id="quick-contact-form-email" name="quick-contact-form-email" value="" placeholder="Email Address" />
					<textarea class="required not-dark mb-2 sm-form-control input-block-level short-textarea" id="quick-contact-form-message" name="quick-contact-form-message" rows="4" cols="30" placeholder="Message"></textarea>
					<input type="text" class="d-none" id="quick-contact-form-botcheck" name="quick-contact-form-botcheck" value="" />
					<input type="hidden" name="prefix" value="quick-contact-form-">
					<button type="submit" id="quick-contact-form-submit" name="quick-contact-form-submit" class="button button-small button-3d nomargin" value="submit">Send Email</button>
				</form>

			</div>

		</div>

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
	<div id="gotoTop" class="icon-angle-up"></div>

	<!-- JavaScripts
	============================================= -->
	<script src="{{asset('burger/js/jquery.js')}}"></script>
	<script src="{{asset('burger/js/plugins.min.js')}}"></script>
	<script src="{{asset('burger/demos/burger/js/hover-animate.js')}}"></script>
	<script src="https://maps.google.com/maps/api/js?key=YOUR-API-KEY"></script>

	<!-- Footer Scripts
	============================================= -->
	<script src="{{asset('burger/js/functions.js')}}"></script>

</body>
</html>
