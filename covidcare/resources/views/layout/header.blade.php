		<!-- Top Bar
		============================================= -->
		<div id="top-bar" class="py-4 text-center bg-color-2">
			<div class="container clearfix">
				<h4 class="mb-0 h6 fst-normal">COVID-19? We're in this together &amp; will get through this, Together. <a href="#" class="color fw-bold border-bottom border-width-2 border-color font-secondary ms-2">Learn more</a><i class="icon-chevron-right icon-stacked text-smaller color"></i></h4>
			</div>
		</div><!-- #top-bar end -->

		<!-- Header
		============================================= -->
		<header id="header" class="">
			<div id="header-wrap">
				<div class="container">
					<div class="header-row">

						<!-- Logo
						============================================= -->
						<div id="logo">
							<a href="index.html" class="standard-logo"><img src="{{ env('APP_LOGO') }}" alt="Canvas Logo"></a>
							<a href="index.html" class="retina-logo"><img src="{{ env('APP_LOGO') }}" alt="Canvas Logo"></a>
						</div><!-- #logo end -->

						<!-- Primary Menu Mobile Trigger
						============================================= -->
						<div id="primary-menu-trigger">
							<svg class="svg-trigger" viewBox="0 0 100 100"><path d="m 30,33 h 40 c 3.722839,0 7.5,3.126468 7.5,8.578427 0,5.451959 -2.727029,8.421573 -7.5,8.421573 h -20"></path><path d="m 30,50 h 40"></path><path d="m 70,67 h -40 c 0,0 -7.5,-0.802118 -7.5,-8.365747 0,-7.563629 7.5,-8.634253 7.5,-8.634253 h 20"></path></svg>
						</div>

						<!-- Header Buttons
						============================================= -->
						<div class="header-misc">
							<a href="#" class="button rounded-pill bg-color-2 button-light text-dark ls0 fw-medium m-0">Register</a>
							<a href="#" class="button rounded-pill ls0 fw-medium my-0 ms-2 d-none d-sm-flex">Download App</a>
						</div>

						@include('layout.menu')

					</div>
				</div>
			</div>
			<div class="header-wrap-clone"></div>
		</header><!-- #header end -->
