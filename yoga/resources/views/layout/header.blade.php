		<!-- Top Bar
		============================================= -->
		<div id="top-bar" class="dark">
			<div class="container">

				<div class="d-flex align-items-center justify-content-center flex-column flex-lg-row py-3 py-lg-0">
					Back to the future of your Health: Introducing canvas Yoga. <div class="countdown countdown-inline mt-3 mt-lg-0 ms-lg-4 mb-0" data-year="2021" data-month="10" data-day="31"></div>
				</div>

			</div>
		</div>

		<!-- Header
		============================================= -->
		<header id="header" class="border-full-header header-size-custom" data-sticky-shrink="false" data-sticky-offset="52">
			<div id="header-wrap">
				<div class="container">
					<div class="header-row justify-content-lg-between">

						<!-- Logo
						============================================= -->
						<div id="logo" class="order-lg-2 col-auto px-0 me-lg-0">
							<a href="#" class="standard-logo" data-dark-logo="{{ env('APP_LOGO') }}"><img src="{{ env('APP_LOGO') }}" alt="Canvas Logo"></a>
							<a href="#" class="retina-logo" data-dark-logo="{{ env('APP_LOGO') }}"><img src="{{ env('APP_LOGO') }}" alt="Canvas Logo"></a>
						</div><!-- #logo end -->

						<div class="header-misc order-lg-3 col-auto col-lg-5 px-0 justify-content-end">
							<a href="login" class="button-link"><div>Login</div></a>
							<a href="https://www.facebook.com/semicolonweb/" target="_blank" class="social-icon si-facebook si-small si-light mb-0"><i class="icon-facebook"></i><i class="icon-facebook"></i></a>
							<a href="https://www.instagram.com/semicolonweb/" target="_blank" class="social-icon si-instagram si-small si-light mb-0"><i class="icon-instagram"></i><i class="icon-instagram"></i></a>
							<a href="https://twitter.com/__SemiColon" target="_blank" class="social-icon si-paypal si-small si-light mb-0"><i class="icon-paypal"></i><i class="icon-paypal"></i></a>
						</div>

						<div id="primary-menu-trigger">
							<svg class="svg-trigger" viewBox="0 0 100 100"><path d="m 30,33 h 40 c 3.722839,0 7.5,3.126468 7.5,8.578427 0,5.451959 -2.727029,8.421573 -7.5,8.421573 h -20"></path><path d="m 30,50 h 40"></path><path d="m 70,67 h -40 c 0,0 -7.5,-0.802118 -7.5,-8.365747 0,-7.563629 7.5,-8.634253 7.5,-8.634253 h 20"></path></svg>
						</div>

						@include('layout.menu')

					</div>
				</div>
			</div>
			<div class="header-wrap-clone"></div>
		</header><!-- #header end -->
