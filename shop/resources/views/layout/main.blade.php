
<!DOCTYPE html>
<html dir="ltr" lang="en-US">
<head>

	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="author" content="SemiColonWeb" />

	<!-- Stylesheets
	============================================= -->
	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,400i,700|Montserrat:300,400,500,600,700|Merriweather:300,400,300i,400i&display=swap" rel="stylesheet" type="text/css" />
	<link rel="stylesheet" href="{{asset('shop/css/bootstrap.css')}}" type="text/css" />
	<link rel="stylesheet" href="{{asset('shop/style.css')}}" type="text/css" />
	<link rel="stylesheet" href="{{asset('shop/css/dark.css')}}" type="text/css" />
	<link rel="stylesheet" href="{{asset('shop/css/swiper.css')}}" type="text/css" />

	<!-- shop Demo Specific Stylesheet -->
	<link rel="stylesheet" href="{{asset('shop/demos/shop/shop.css')}}" type="text/css" />
	<link rel="stylesheet" href="{{asset('shop/demos/shop/css/fonts.css')}}" type="text/css" />
	<!-- / -->

	<link rel="stylesheet" href="{{asset('shop/css/font-icons.css')}}" type="text/css" />
	<link rel="stylesheet" href="{{asset('shop/css/animate.css')}}" type="text/css" />
	<link rel="stylesheet" href="{{asset('shop/css/magnific-popup.css')}}" type="text/css" />

	<link rel="stylesheet" href="{{asset('shop/css/custom.css')}}" type="text/css" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />

	<link rel="stylesheet" href="{{asset('shop/css/colors.php?color=000000')}}" type="text/css" />

	<!-- Document Title
	============================================= -->
	<title>{{ env('APP_NAME') }} | Webfocus</title>

</head>

<body class="stretched">

	<!-- Document Wrapper
	============================================= -->
	<div id="wrapper" class="clearfix">

		<div class="modal-on-load" data-target="#myModal1"></div>

		<!-- On LOad Modal -->
		<div class="modal1 mfp-hide subscribe-widget mx-auto" id="myModal1" style="max-width: 750px;">
			<div class="row justify-content-center bg-white align-items-center" style="min-height: 380px;">
				<div class="col-md-5 p-0">
					<div style="background: url({{asset('/shop/images/modals/modal1.jpg')}}) no-repeat center right; background-size: cover;  min-height: 380px;"></div>
				</div>
				<div class="col-md-7 bg-white p-4">
					<div class="heading-block border-bottom-0 mb-3">
						<h3 class="font-secondary nott ">Join Our Newsletter &amp; Get <span class="text-danger">40%</span> Off your First Order</h3>
						<span>Get Latest Fashion Updates &amp; Offers</span>
					</div>
					<div class="widget-subscribe-form-result"></div>
					<form class="widget-subscribe-form2 mb-2" action="include/subscribe.php" method="post">
						<input type="email" id="widget-subscribe-form2-email" name="widget-subscribe-form-email" class="form-control required email" placeholder="Enter your Email Address..">
						<div class="d-flex justify-content-between align-items-center mt-1">
							<button class="button button-dark  bg-dark text-white ms-0" type="submit">Subscribe</button>
							<a href="#" class="btn-link" onClick="$.magnificPopup.close();return false;">Don't Show me</a>
						</div>
					</form>
					<small class="mb-0 fst-italic text-black-50">*We also hate Spam &amp; Junk Emails.</small>
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
	<script src="{{asset('shop/js/jquery.js')}}"></script>
	<script src="{{asset('shop/js/plugins.min.js')}}"></script>

	<!-- Footer Scripts
	============================================= -->
	<script src="{{asset('shop/js/functions.js')}}"></script>

	<!-- ADD-ONS JS FILES -->
	<script>

	</script>

</body>
</html>
