
<!DOCTYPE html>
<html dir="ltr" lang="en-US">
<head>

	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="author" content="SemiColonWeb" />

	<!-- Stylesheets
	============================================= -->
	<link href="https://fonts.googleapis.com/css?family=Lora:400,400i|Roboto:300,400,500,700|Rubik:400,600&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="{{ asset('realestate/css/bootstrap.css')}}" type="text/css" />
	<link rel="stylesheet" href="{{ asset('realestate/style.css')}}" type="text/css" />
	<link rel="stylesheet" href="{{ asset('realestate/css/dark.css')}}" type="text/css" />

	<!-- Real Estate Demo Specific Stylesheet -->
	<link rel="stylesheet" href="{{ asset('realestate/demos/real-estate/real-estate.css')}}" type="text/css" />
	<link rel="stylesheet" href="{{ asset('realestate/demos/real-estate/css/font-icons.css')}}" type="text/css" />
	<!-- / -->

	<link rel="stylesheet" href="{{ asset('realestate/css/font-icons.css')}}" type="text/css" />
	<link rel="stylesheet" href="{{ asset('realestate/css/animate.css')}}" type="text/css" />
	<link rel="stylesheet" href="{{ asset('realestate/css/magnific-popup.css')}}" type="text/css" />

	<link rel="stylesheet" href="{{ asset('realestate/demos/real-estate/fonts.css')}}" type="text/css" />

	<!-- Bootstrap Select CSS -->
	<link rel="stylesheet" href="{{ asset('realestate/css/components/bs-select.css')}}" type="text/css" />

	<!-- Bootstrap Switch CSS -->
	<link rel="stylesheet" href="{{ asset('realestate/css/components/bs-switches.css')}}" type="text/css" />

	<!-- Range Slider CSS -->
	<link rel="stylesheet" href="{{ asset('realestate/css/components/ion.rangeslider.css')}}" type="text/css" />

	<link rel="stylesheet" href="{{ asset('realestate/css/custom.css')}}" type="text/css" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />

	<link rel="stylesheet" href="{{ asset('realestate/css/colors.php?color=2C3E50')}}" type="text/css" />

	<!-- Document Title
	============================================= -->
	<title>{{env('APP_NAME')}} | Webfocus</title>

</head>

<body class="stretched side-push-panel">

	<div id="side-panel">
		<div id="side-panel-trigger-close" class="side-panel-trigger"><a href="#"><i class="icon-line-cross"></i></a></div>

		<div class="side-panel-wrap">
			<div class="widget clearfix">

				<h4 class="fw-normal">Login with Social Profiles</h4>

				<a href="#" class="button button-rounded fw-normal w-100 center si-colored ms-0 si-facebook">Facebook</a>
				<a href="#" class="button button-rounded fw-normal w-100 center si-colored ms-0 si-gplus">Google</a>

				<div class="line"></div>

				<h4 class="fw-normal">Existing Account?</h4>

				<form id="login-form" name="row mb-0" class="mb-0" action="#" method="post">

					<div class="col-12 form-group">
						<label for="login-form-username" class="fw-normal">Username:</label>
						<input type="text" id="login-form-username" name="login-form-username" value="" class="form-control" />
					</div>

					<div class="col-12 form-group">
						<label for="login-form-password" class="fw-normal">Password:</label>
						<input type="password" id="login-form-password" name="login-form-password" value="" class="form-control" />
					</div>

					<div class="col-12 form-group">
						<button class="button button-rounded fw-normal m-0" id="login-form-submit" name="login-form-submit" value="login">Login</button>
						<a href="#" class="float-end">Forgot Password?</a>
					</div>

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
	<script src="{{ asset('realestate/js/jquery.js')}}"></script>
	<script src="{{ asset('realestate/js/plugins.min.js')}}"></script>
	<script src="https://maps.google.com/maps/api/js?key=YOUR-API-KEY"></script>

	<!-- Bootstrap Select Plugin -->
	<script src="{{ asset('realestate/js/components/bs-select.js')}}"></script>

	<!-- Bootstrap Switch Plugin -->
	<script src="{{ asset('realestate/js/components/bs-switches.js')}}"></script>

	<!-- Range Slider Plugin -->
	<script src="{{ asset('realestate/js/components/rangeslider.min.js')}}"></script>

	<!-- Footer Scripts
	============================================= -->
	<script src="{{ asset('realestate/js/functions.js')}}"></script>

	<script>

		jQuery(document).ready(function(){

			$(".price-range-slider").ionRangeSlider({
				type: "double",
				prefix: "$",
				min: 200,
				max: 10000,
				max_postfix: "+"
			});

			$(".area-range-slider").ionRangeSlider({
				type: "double",
				min: 50,
				max: 20000,
				from: 50,
				to: 20000,
				postfix: " sqm.",
				max_postfix: "+"
			});

			jQuery(".bt-switch").bootstrapSwitch();

		});

	</script>

</body>
</html>
