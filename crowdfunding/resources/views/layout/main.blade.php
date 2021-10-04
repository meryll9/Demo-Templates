
<!DOCTYPE html>
<html dir="ltr" lang="en-US">
<head>

	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="author" content="SemiColonWeb" />

	<!-- Stylesheets
	============================================= -->
	<link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600,700&display=swap" rel="stylesheet" type="text/css" />
	<link rel="stylesheet" href="{{asset('crowdfunding/css/bootstrap.css')}}" type="text/css" />
	<link rel="stylesheet" href="{{asset('crowdfunding/style.css')}}" type="text/css" />
	<link rel="stylesheet" href="{{asset('crowdfunding/css/dark.css')}}" type="text/css" />
	<link rel="stylesheet" href="{{asset('crowdfunding/css/swiper.css')}}" type="text/css" />

	<!-- Crowdfunding Demo Specific Stylesheet -->
	<link rel="stylesheet" href="{{asset('crowdfunding/demos/crowdfunding/crowdfunding.css')}}" type="text/css" />
	<link rel="stylesheet" href="{{asset('crowdfunding/demos/crowdfunding/css/fonts.css')}}" type="text/css" />
	<!-- / -->

	<link rel="stylesheet" href="{{asset('crowdfunding/css/font-icons.css')}}" type="text/css" />
	<link rel="stylesheet" href="{{asset('crowdfunding/css/animate.css')}}" type="text/css" />
	<link rel="stylesheet" href="{{asset('crowdfunding/css/magnific-popup.css')}}" type="text/css" />

	<link rel="stylesheet" href="{{asset('crowdfunding/css/custom.css')}}" type="text/css" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />

	<link rel="stylesheet" type="text/css" href="{{asset('crowdfunding/include/rs-plugin/css/settings.css')}}" media="screen" />
	<link rel="stylesheet" type="text/css" href="{{asset('crowdfunding/include/rs-plugin/css/layers.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('crowdfunding/include/rs-plugin/css/navigation.css')}}">

	<link rel="stylesheet" href="{{asset('crowdfunding/css/colors.php?color=209EBB')}}" type="text/css" />

	<!-- Document Title
	============================================= -->
	<title>{{ env('APP_NAME') }} | Webfocus</title>

</head>

<body class="stretched">

	<!-- Document Wrapper
	============================================= -->
	<div id="wrapper" class="clearfix">

		<!-- Login/Register Modal -->
		<div class="modal-register mfp-hide" id="modal-register">
			<div class="card mx-auto" style="max-width: 400px;">
				<div class="card-header py-3 bg-transparent center">
					<h3 class="mb-0 fw-normal">Hello, Welcome Back</h3>
				</div>
				<div class="card-body mx-auto p-5">

					<form id="login-form" name="login-form" class="mb-0 row" action="#" method="post">

						<div class="col-12">
							<input type="text" id="login-form-username" name="login-form-username" value="" class="form-control not-dark" placeholder="Username" />
						</div>

						<div class="col-12 mt-4">
							<input type="password" id="login-form-password" name="login-form-password" value="" class="form-control not-dark" placeholder="Password" />
						</div>

						<div class="col-12 text-end mt-2">
							<a href="#" class="text-dark fw-light text-smaller">Forgot Password?</a>
						</div>

						<div class="col-12 mt-4">
							<button class="button w-100 m-0" id="login-form-submit" name="login-form-submit" value="login">Login</button>
						</div>
					</form>
				</div>
				<div class="card-footer py-4 center">
					<p class="mb-0">Don't have an account? <a href="#"><u>Sign up</u></a></p>
				</div>
			</div>
		</div>

		@include('layout.header')

		@yield('content')

		@include('layout.footer')

	</div><!-- #wrapper end -->

	<!-- Go To Top
	============================================= -->
	<div id="gotoTop" class="icon-line-arrow-up"></div>

	<!-- JavaScripts
	============================================= -->
	<script src="{{asset('crowdfunding/js/jquery.js')}}"></script>
	<script src="{{asset('crowdfunding/js/plugins.min.js')}}"></script>

	<!-- Footer Scripts
	============================================= -->
	<script src="{{asset('crowdfunding/js/functions.js')}}"></script>

	<!-- ADD-ONS JS FILES -->
	<script>



	</script>

</body>
</html>
