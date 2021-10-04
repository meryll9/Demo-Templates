
<!DOCTYPE html>
<html dir="ltr" lang="en-US">
<head>

	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="author" content="SemiColonWeb" />

	<!-- Stylesheets
	============================================= -->
	<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,400i,700|Istok+Web:400,700&display=swap" rel="stylesheet" type="text/css" />
	<link rel="stylesheet" href="{{asset('hosting/css/bootstrap.css')}}" type="text/css" />
	<link rel="stylesheet" href="{{asset('hosting/style.css')}}" type="text/css" />

	<link rel="stylesheet" href="{{asset('hosting/css/dark.css')}}" type="text/css" />
	<link rel="stylesheet" href="{{asset('hosting/css/font-icons.css')}}" type="text/css" />
	<link rel="stylesheet" href="{{asset('hosting/css/animate.css')}}" type="text/css" />
	<link rel="stylesheet" href="{{asset('hosting/css/magnific-popup.css')}}" type="text/css" />

	<link rel="stylesheet" href="{{asset('hosting/css/components/ion.rangeslider.css')}}" type="text/css" />

	<link rel="stylesheet" href="{{asset('hosting/css/custom.css')}}" type="text/css" />
	<meta name='viewport' content='initial-scale=1, viewport-fit=cover'>

	<!-- Hosting Demo Specific Stylesheet -->
	<link rel="stylesheet" href="{{asset('hosting/css/colors.php?color=44aaac')}}" type="text/css" /> <!-- Theme Color -->
	<link rel="stylesheet" href="{{asset('hosting/demos/hosting/css/fonts.css')}}" type="text/css" />
	<link rel="stylesheet" href="{{asset('hosting/demos/hosting/hosting.css')}}" type="text/css" />
	<!-- / -->

	<!-- Document Title
	============================================= -->
	<title>{{ env('APP_NAME') }} | Webfocus</title>

</head>

<body class="stretched">

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
	<script src="{{asset('hosting/js/jquery.js')}}"></script>
	<script src="{{asset('hosting/js/plugins.min.js')}}"></script>

	<script src="{{asset('hosting/js/jquery.hotspot.js')}}"></script>
	<script src="{{asset('hosting/js/components/rangeslider.min.js')}}"></script>

	<!-- Footer Scripts
	============================================= -->
	<script src="{{asset('hosting/js/functions.js')}}"></script>

	<script>
		jQuery(document).ready( function() {
			var pricingCPU = 1,
				pricingRAM = 1,
				pricingStorage = 10,
				elementCPU = $(".range-slider-cpu"),
				elementRAM = $(".range-slider-ram"),
				elementStorage = $(".range-slider-storage");

			elementCPU.ionRangeSlider({
				grid: false,
				values: [1,2,4,6,8],
				postfix: ' Core',
				onStart: function(data){
					pricingCPU = data.from_value;
				}
			});

			elementCPU.on( 'change', function(){
				pricingCPU = $(this).prop('value');
				calculatePrice( pricingCPU, pricingRAM, pricingStorage );
			});

			elementRAM.ionRangeSlider({
				grid: false,
				step: 1,
				min: 1,
				from:1,
				max: 32,
				postfix: ' GB',
				onStart: function(data){
					pricingRAM = data.from;
					console.log(data);
				}
			});

			elementRAM.on( 'onStart change', function(){
				pricingRAM = $(this).prop('value');
				calculatePrice( pricingCPU, pricingRAM, pricingStorage );
			});

			elementStorage.ionRangeSlider({
				grid: false,
				step: 10,
				min: 10,
				max: 100,
				postfix: ' GB',
				onStart: function(data){
					pricingStorage = data.from;
				}
			});

			elementStorage.on( 'change', function(){
				pricingStorage = $(this).prop('value');
				calculatePrice( pricingCPU, pricingRAM, pricingStorage );
			});

			calculatePrice( pricingCPU, pricingRAM, pricingStorage );

			function calculatePrice( cpu, ram, storage ) {
				var pricingValue = ( Number(cpu) * 10 ) + ( Number(ram) * 8 ) + ( Number(storage) * 0.5 );
				jQuery('.cpu-value').html(pricingCPU);
				jQuery('.ram-value').html(pricingRAM);
				jQuery('.storage-value').html(pricingStorage);
				jQuery('.cpu-price').html('$'+pricingCPU * 10);
				jQuery('.ram-price').html('$'+pricingRAM * 8);
				jQuery('.storage-price').html('$'+pricingStorage * 0.5);
				jQuery('.pricing-price').html( '$'+pricingValue );
			}
		});

		jQuery(window).on( 'load', function(){
			$('#hotspot-img').hotSpot();
		});
	</script>

</body>
</html>
