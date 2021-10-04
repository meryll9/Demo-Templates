
<!DOCTYPE html>
<html dir="ltr" lang="en-US">
<head>

	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="author" content="SemiColonWeb" />

	<!-- Stylesheets
	============================================= -->
	<link href="http://fonts.googleapis.com/css?family=Heebo:400,500,700" rel="stylesheet" type="text/css" />
	<link rel="stylesheet" href="{{asset('cleaner/css/bootstrap.css')}}" type="text/css" />
	<link rel="stylesheet" href="{{asset('cleaner/style.css')}}" type="text/css" />
	<link rel="stylesheet" href="{{asset('cleaner/css/dark.css')}}" type="text/css" />

	<link rel="stylesheet" href="{{asset('cleaner/css/font-icons.css')}}" type="text/css" />
	<link rel="stylesheet" href="{{asset('cleaner/css/animate.css')}}" type="text/css" />
	<link rel="stylesheet" href="{{asset('cleaner/css/magnific-popup.css')}}" type="text/css" />

	<link rel="stylesheet" href="{{asset('cleaner/css/custom.css')}}" type="text/css" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />

	<!-- DatePicker CSS -->
	<link rel="stylesheet" href="{{asset('cleaner/css/components/daterangepicker.css')}}" type="text/css" />
	<!-- Range Slider CSS -->
	<link rel="stylesheet" href="{{asset('cleaner/css/components/ion.rangeslider.css')}}" type="text/css" />

	<!--  Demo cleaner Specific Stylesheet -->
	<link rel="stylesheet" href="{{asset('cleaner/css/colors.php?color=335EEE')}}" type="text/css" /> <!-- Cleaner Theme Color -->
	<link rel="stylesheet" href="{{asset('cleaner/demos/cleaner/css/fonts.css')}}" type="text/css" /> <!-- Cleaner Theme Font -->
	<link rel="stylesheet" href="{{asset('cleaner/demos/cleaner/cleaner.css')}}" type="text/css" /> <!-- Cleaner Theme Custom CSS -->
	<!-- / -->

	<!-- Document Title
	============================================= -->
	<title>{{ env('APP_NAME') }} | Webfocus</title>

	<style>
		.form-group > label.error {
			display: block !important;
			text-transform: none;
		}

		.form-group input.valid ~ label.error,
		.form-group input[type="text"] ~ label.error,
		.form-group input[type="email"] ~ label.error,
		.form-group input[type="number"] ~ label.error,
		.form-group select ~ label.error { display: none !important; }
	</style>

</head>

<body class="stretched">

	<!-- Document Wrapper
	============================================= -->
	<div id="wrapper" class="clearfix">

		@include('layout.header')

		@yield('content')

		<div class="position-relative"  style="background-color: rgba(51,94,238,0.08);">
			<svg class="svg-separator" viewBox="0 0 1440 24" fill="none" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="none">
				<path d="M0 24H1440V0C722.5 52 0 0 0 0V24Z" fill="#335EEE"></path>
			</svg>
		</div>

		@include('layout.footer')

	</div><!-- #wrapper end -->

	<!-- Go To Top
	============================================= -->
	<div id="gotoTop" class="icon-angle-up rounded-circle bg-color h-bg-dark"></div>

	<!-- External JavaScripts
	============================================= -->
	<script src="{{asset('cleaner/js/jquery.js')}}"></script>
	<script src="{{asset('cleaner/js/plugins.min.js')}}"></script>

	<!-- DatePicker JS -->
	<script src="{{asset('cleaner/js/components/moment.js')}}"></script>
	<script src="{{asset('cleaner/js/components/daterangepicker.js')}}"></script>

	<!-- Range Slider Plugin -->
	<script src="{{asset('cleaner/js/components/rangeslider.min.js')}}"></script>

	<!-- Footer Scripts
	============================================= -->
	<script src="{{asset('cleaner/js/functions.js')}}"></script>

	<script>

		jQuery(document).ready(function() {

			jQuery('.cleaning-date').daterangepicker({
				"buttonClasses": "button button-rounded button-mini nott ls0 fw-semibold",
				"applyClass": "button-color m-0 ms-1",
				"cancelClass": "bg-danger m-0 text-light",
				singleDatePicker: true,
				startDate: moment().startOf('hour'),
				minDate: moment().startOf('date'),
				timePicker: true,
				timePickerSeconds: false,
				locale: {
					format: 'DD/MM/YYYY h:mm a',
				},
				timePickerIncrement: 10
			});

			jQuery('.cleaning-date').val('Select Date & Time');

			jQuery('.form-cleaning').on( 'formSubmitSuccess', function(){
				jQuery('.cleaning-date').val('Select Date & Time');
			});

			// Calculator
			var pricingAREA = 0,
				pricingROOMS = 0,
				pricingBATHROOMS = 0,
				pricingLIVINGROOMS = 0,
				pricingOTHERS = 0,
				elementAREA = $(".clean-area"),
				elementROOMS = $(".clean-rooms"),
				elementBATHROOMS = $(".clean-bathrooms"),
				elementLIVINGROOMS = $(".clean-livingrooms"),
				elementOTHERS = $("input[name='clean-form-others[]']"),
				elementPRICE = $("#clean-form-price");

			elementAREA.ionRangeSlider({
				min: 0,
				max: 5000,
				from: 0,
				step: 10,
				max_postfix: "sqft.",
				onStart: function(data){
					pricingAREA = data.from;
				}
			});

			elementAREA.on( 'change', function(){
				pricingAREA = $(this).prop('value');
				calculatePrice( pricingAREA, pricingROOMS, pricingBATHROOMS, pricingLIVINGROOMS, pricingOTHERS );
			});

			elementROOMS.ionRangeSlider({
				min: 0,
				max: 10,
				from: 0,
				step: 1,
				onStart: function(data){
					pricingROOMS = data.from;
				}
			});

			elementROOMS.on( 'onStart change', function(){
				pricingROOMS = $(this).prop('value');
				calculatePrice( pricingAREA, pricingROOMS, pricingBATHROOMS, pricingLIVINGROOMS, pricingOTHERS );
			});

			elementBATHROOMS.ionRangeSlider({
				min: 0,
				max: 10,
				from: 0,
				step: 1,
				onStart: function(data){
					pricingBATHROOMS = data.from;
				}
			});

			elementBATHROOMS.on( 'onStart change', function(){
				pricingBATHROOMS = $(this).prop('value');
				calculatePrice( pricingAREA, pricingROOMS, pricingBATHROOMS, pricingLIVINGROOMS, pricingOTHERS );
			});

			elementLIVINGROOMS.ionRangeSlider({
				min: 0,
				max: 5,
				from: 0,
				step: 1,
				onStart: function(data){
					pricingLIVINGROOMS = data.from;
				}
			});

			elementLIVINGROOMS.on( 'onStart change', function(){
				pricingLIVINGROOMS = $(this).prop('value');
				calculatePrice( pricingAREA, pricingROOMS, pricingBATHROOMS, pricingLIVINGROOMS, pricingOTHERS );
			});

			elementOTHERS.change(function(){
				var pricingOTHERS = 0;
				elementOTHERS.each(function(){
					if($(this).is(':checked')){
						pricingOTHERS += parseFloat($(this).attr('data-price'));
						calculatePrice( pricingAREA, pricingROOMS, pricingBATHROOMS, pricingLIVINGROOMS, pricingOTHERS );
					} else {
						calculatePrice( pricingAREA, pricingROOMS, pricingBATHROOMS, pricingLIVINGROOMS, pricingOTHERS );
					}
				});
			});

			calculatePrice( pricingAREA, pricingROOMS, pricingBATHROOMS, pricingLIVINGROOMS, pricingOTHERS );

			function calculatePrice( area, rooms, bathrooms, livingrooms, extra ) {
				var TotalPriceValue = ( Number(area) * .2 ) + ( Number(rooms) * 4 ) + ( Number(bathrooms) * 3 ) + ( Number(livingrooms) * 5 ) + ( Number(extra) );
				jQuery('.total-price').html( '$'+TotalPriceValue );
				elementPRICE.val( TotalPriceValue ).change();
			}

		});

	</script>

</body>
</html>
