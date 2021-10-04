
<!DOCTYPE html>
<html dir="ltr" lang="en-US">
<head>

	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="author" content="SemiColonWeb" />

	<!-- Stylesheets
	============================================= -->
	<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,400i,700|Istok+Web:400,700&display=swap" rel="stylesheet" type="text/css" />
	<link rel="stylesheet" href="{{asset('bike/css/bootstrap.css')}}" type="text/css" />
	<link rel="stylesheet" href="{{asset('bike/style.css')}}" type="text/css" />

	<link rel="stylesheet" href="{{asset('bike/css/dark.css')}}" type="text/css" />
	<link rel="stylesheet" href="{{asset('bike/css/font-icons.css')}}" type="text/css" />
	<link rel="stylesheet" href="{{asset('bike/css/animate.css')}}" type="text/css" />
	<link rel="stylesheet" href="{{asset('bike/css/magnific-popup.css')}}" type="text/css" />

	<link rel="stylesheet" href="{{asset('bike/one-page/css/et-line.css')}}" type="text/css" />

	<link rel="stylesheet" href="{{asset('bike/css/components/ion.rangeslider.css')}}" type="text/css" />

	<link rel="stylesheet" href="{{asset('bike/css/custom.css')}}" type="text/css" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />

	<link rel="stylesheet" href="{{asset('bike/css/colors.php?color=e83c3c')}}" type="text/css" />

	<!-- Hosting Demo Specific Stylesheet -->
	<link rel="stylesheet" href="{{asset('bike/demos/bike/css/fonts.css')}}" type="text/css" />
	<link rel="stylesheet" href="{{asset('bike/demos/bike/bike.css')}}" type="text/css" />
	<!-- / -->

	<!-- Document Title
	============================================= -->
	<title>{{ env('APP_NAME') }} | Webfocus</title>

</head>

<body class="stretched">

	<!-- Document Wrapper
	============================================= -->
	<div id="wrapper" class="clearfix">

		<!-- Modal -->
		<div class="modal1 mfp-hide" id="modal-register">
			<div class="card mx-auto" style="max-width: 540px;">
				<div class="card-header py-3 bg-transparent center">
					<h3 class="mb-0 fw-normal">Hello, Welcome Back</h3>
				</div>
				<div class="card-body mx-auto py-5" style="max-width: 70%;">

					<a href="#" class="button button-large button-rounded w-100 si-colored si-facebook nott fw-normal ls0 center m-0"><i class="icon-facebook-sign"></i> Log in with Facebook</a>

					<div class="divider divider-center"><span class="position-relative" style="top: -2px">OR</span></div>

					<form id="login-form" name="login-form" class="mb-0 row" action="#" method="post">

						<div class="col-12">
							<input type="text" id="login-form-username" name="login-form-username" value="" class="form-control not-dark" placeholder="Username" />
						</div>

						<div class="col-12 mt-4">
							<input type="password" id="login-form-password" name="login-form-password" value="" class="form-control not-dark" placeholder="Password" />
						</div>

						<div class="col-12">
							<a href="#" class="float-end text-dark fw-light mt-2">Forgot Password?</a>
						</div>

						<div class="col-12 mt-4">
							<button class="button button-rounded w-100 m-0" id="login-form-submit" name="login-form-submit" value="login">Login</button>
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
	<div id="gotoTop" class="icon-angle-up"></div>

	<!-- JavaScripts
	============================================= -->
	<script src="{{asset('bike/js/jquery.js')}}"></script>
	<script src="{{asset('bike/js/plugins.min.js')}}"></script>

	<script src="{{asset('bike/js/components/rangeslider.min.js')}}"></script>

	<!-- Footer Scripts
	============================================= -->
	<script src="{{asset('bike/js/functions.js')}}"></script>

	<script>
		$('#ytb-video').on('click', function(e){
			e.preventDefault();

			if( $(this).hasClass('video-played') ) {
				$('#ytb-video').YTPPause();
			} else {
				$('#ytb-video').YTPPlay();
				$('.ytb-poster').stop(true,true).fadeTo( "slow", 0 );
			}

			$(this).toggleClass('video-played');
		});


		function showcaseSection( element ){

			var otherElements = element.parents('.showcase-section').find('.showcase-feature'),
				elementTarget = jQuery( element.attr('data-target') ),
				otherTargets = element.parents('.showcase-section').find('.showcase-target');

			otherElements.removeClass('showcase-feature-active');
			element.addClass('showcase-feature-active');
			otherTargets.removeClass('showcase-target-active');
			elementTarget.addClass('showcase-target-active');

		}

		jQuery('.showcase-feature').hover( function(){
			showcaseSection( jQuery(this) );
		});

		$(document).ready( function() {

			var pricingBikes = 1,
				days = 1,
				elementbikes = $(".range-slider-bikes"),
				elementDays = $(".range-slider-days");

			elementbikes.ionRangeSlider({
				grid: false,
				step: 1,
				min: 1,
				from:1,
				max: 5,
				postfix: ' Bike(s)',
				onStart: function(data){
					pricingBikes = data.from;
				}
			});

			elementbikes.on( 'change', function(){
				pricingBikes = $(this).prop('value');
				calculatePrice( pricingBikes, days );
			});

			elementDays.ionRangeSlider({
				grid: false,
				step: 1,
				min: 1,
				from: 4,
				max: 30,
				postfix: ' Days',
				onStart: function(data){
					days = data.from;
					console.log(data);
				}
			});

			elementDays.on( 'onStart change', function(){
				days = $(this).prop('value');
				calculatePrice( pricingBikes, days );
			});

			calculatePrice( pricingBikes, days );

			function calculatePrice( bikes, days ) {
				var pricingValue = ( Number(bikes) * 1 ) * ( Number(days) * 2 );
				jQuery('.pricing-price').html( '$'+pricingValue );
			}

		});
	</script>

</body>
</html>
