
<!DOCTYPE html>
<html dir="ltr" lang="en-US">
<head>

	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="author" content="SemiColonWeb" />

	<!-- Stylesheets
	============================================= -->
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&family=Zilla+Slab:wght@400;500&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="{{ asset('furniture/css/bootstrap.css')}}" type="text/css" />
	<link rel="stylesheet" href="{{ asset('furniture/style.css')}}" type="text/css" />

	<link rel="stylesheet" href="{{ asset('furniture/css/dark.css')}}" type="text/css" />
	<link rel="stylesheet" href="{{ asset('furniture/css/font-icons.css')}}" type="text/css" />
	<link rel="stylesheet" href="{{ asset('furniture/css/animate.css')}}" type="text/css" />
	<link rel="stylesheet" href="{{ asset('furniture/css/magnific-popup.css')}}" type="text/css" />

	<link rel="stylesheet" href="{{ asset('furniture/css/custom.css')}}" type="text/css" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />

	<!-- Furniture Demo Specific Theme Stylesheet - #193532 -->
	<link rel="stylesheet" href="{{ asset('furniture/css/colors.php?color=193532')}}" type="text/css" />

	<!-- Furniture Demo Specific Stylesheet -->
	<link rel="stylesheet" href="{{ asset('furniture/demos/furniture/furniture.css')}}" type="text/css" /> <!-- Furniture Custom Css -->
	<link rel="stylesheet" href="{{ asset('furniture/demos/furniture/css/fonts.css')}}" type="text/css" /> <!-- Furniture Custom Fonts -->
	<!-- / -->

	<!-- Document Title
	============================================= -->
	<title>{{env('APP_NAME')}} | Webfocus</title>
</head>

<body class="stretched">

	<!-- Cart Panel Background
	============================================= -->
	<div class="body-overlay"></div>

	<!-- Cart Side Panel
	============================================= -->
	<div id="side-panel" class="bg-white">

		<!-- Cart Side Panel Close Icon
		============================================= -->
		<div id="side-panel-trigger-close" class="side-panel-trigger"><a href="#"><i class="icon-line-cross"></i></a></div>

		<div class="side-panel-wrap">

			<div class="top-cart d-flex flex-column h-100">
				<div class="top-cart-title">
					<h4>Shopping Cart <small class="bg-color-light icon-stacked text-center rounded-circle color">2</small></h4>
				</div>

				<!-- Cart Items
				============================================= -->
				<div class="top-cart-items">

					<!-- Cart Item 1
					============================================= -->
					<div class="top-cart-item">
						<div class="top-cart-item-image border-0">
							<a href="#"><img src="{{ asset('furniture/demos/furniture/images/cart/1.jpg')}}" alt="Cart Image 1" /></a>
						</div>
						<div class="top-cart-item-desc">
							<div class="top-cart-item-desc-title">
								<a href="#" class="fw-medium">Blue Sofa for Dining Room</a>
								<span class="top-cart-item-price d-block"><del>$29.99</del> $19.99</span>
								<div class="d-flex mt-2">
									<a href="#" class="fw-normal text-black-50 text-smaller"><u>Edit</u></a>
									<a href="#" class="fw-normal text-black-50 text-smaller ms-3"><u>Remove</u></a>
								</div>
							</div>
							<div class="top-cart-item-quantity">x 1</div>
						</div>
					</div>

					<!-- Cart Item 2
					============================================= -->
					<div class="top-cart-item">
						<div class="top-cart-item-image border-0">
							<a href="#"><img src="{{ asset('furniture/demos/furniture/images/cart/2.jpg')}}" alt="Cart Image 2" /></a>
						</div>
						<div class="top-cart-item-desc">
							<div class="top-cart-item-desc-title">
								<a href="#" class="fw-medium">Ceilling Light for Office</a>
								<span class="top-cart-item-price d-block">$24.99</span>
								<div class="d-flex mt-2">
									<a href="#" class="fw-normal text-black-50 text-smaller"><u>Edit</u></a>
									<a href="#" class="fw-normal text-black-50 text-smaller ms-3"><u>Remove</u></a>
								</div>
							</div>
							<div class="top-cart-item-quantity">x 2</div>
						</div>
					</div>
				</div>

				<!-- Cart Saved Text
				============================================= -->
				<div class="py-2 px-3 mt-auto text-black-50 text-smaller bg-color-light">
					<span><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="var(--themecolor)" viewBox="0 0 256 256"><rect width="256" height="256" fill="none"></rect><path d="M54.46089,201.53911c-9.204-9.204-3.09935-28.52745-7.78412-39.85C41.82037,149.95168,24,140.50492,24,127.99963,24,115.4945,41.82047,106.048,46.67683,94.31079c4.68477-11.32253-1.41993-30.6459,7.78406-39.8499s28.52746-3.09935,39.85-7.78412C106.04832,41.82037,115.49508,24,128.00037,24c12.50513,0,21.95163,17.82047,33.68884,22.67683,11.32253,4.68477,30.6459-1.41993,39.8499,7.78406s3.09935,28.52746,7.78412,39.85C214.17963,106.04832,232,115.49508,232,128.00037c0,12.50513-17.82047,21.95163-22.67683,33.68884-4.68477,11.32253,1.41993,30.6459-7.78406,39.8499s-28.52745,3.09935-39.85,7.78412C149.95168,214.17963,140.50492,232,127.99963,232c-12.50513,0-21.95163-17.82047-33.68884-22.67683C82.98826,204.6384,63.66489,210.7431,54.46089,201.53911Z" opacity="0.2"></path><path d="M54.46089,201.53911c-9.204-9.204-3.09935-28.52745-7.78412-39.85C41.82037,149.95168,24,140.50492,24,127.99963,24,115.4945,41.82047,106.048,46.67683,94.31079c4.68477-11.32253-1.41993-30.6459,7.78406-39.8499s28.52746-3.09935,39.85-7.78412C106.04832,41.82037,115.49508,24,128.00037,24c12.50513,0,21.95163,17.82047,33.68884,22.67683,11.32253,4.68477,30.6459-1.41993,39.8499,7.78406s3.09935,28.52746,7.78412,39.85C214.17963,106.04832,232,115.49508,232,128.00037c0,12.50513-17.82047,21.95163-22.67683,33.68884-4.68477,11.32253,1.41993,30.6459-7.78406,39.8499s-28.52745,3.09935-39.85,7.78412C149.95168,214.17963,140.50492,232,127.99963,232c-12.50513,0-21.95163-17.82047-33.68884-22.67683C82.98826,204.6384,63.66489,210.7431,54.46089,201.53911Z" fill="none" stroke="var(--themecolor)" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"></path><polyline points="172 104 113.333 160 84 132" fill="none" stroke="var(--themecolor)" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"></polyline></svg> You save $10.00 on this order.</span>
				</div>

				<!-- Cart Price and Button
				============================================= -->
				<div class="top-cart-action flex-column align-items-stretch">
					<div class="d-flex justify-content-between align-items-center mb-2">
						<small class="text-uppercase ls1">Total</small>
						<h4 class="fw-medium font-body mb-0">$69.97</h4>
					</div>
					<a href="#" class="button btn-block text-center m-0 fw-normal"><i style="position: relative; top: -2px;"><svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="#FFF" viewBox="0 0 256 256"><rect width="256" height="256" fill="none"></rect><path d="M40,192a16,16,0,0,0,16,16H216a8,8,0,0,0,8-8V88a8,8,0,0,0-8-8H56A16,16,0,0,1,40,64Z" opacity="0.2"></path><path d="M40,64V192a16,16,0,0,0,16,16H216a8,8,0,0,0,8-8V88a8,8,0,0,0-8-8H56A16,16,0,0,1,40,64v0A16,16,0,0,1,56,48H192" fill="none" stroke="#FFF" stroke-linecap="round" stroke-linejoin="round" stroke-width="10"></path><circle cx="180" cy="144" r="12"></circle></svg></i> Checkout</a>
				</div>
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
	<div id="gotoTop" class="bg-color op-07 h-op-1">
		<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="#FFF" viewBox="0 0 256 256"><rect width="256" height="256" fill="none"></rect><polygon points="48 208 128 128 208 208 48 208" opacity="0.2"></polygon><polygon points="48 208 128 128 208 208 48 208" fill="none" stroke="#FFF" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"></polygon><polyline points="48 128 128 48 208 128" fill="none" stroke="#FFF" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"></polyline></svg>
	</div>

	<!-- JavaScripts
	============================================= -->
	<script src="{{ asset('furniture/js/jquery.js')}}"></script>
	<script src="{{ asset('furniture/js/plugins.min.js')}}"></script>

	<!-- Footer Scripts
	============================================= -->
	<script src="{{ asset('furniture/js/functions.js')}}"></script>

</body>
</html>
