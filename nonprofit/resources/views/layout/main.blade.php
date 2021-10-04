
<!DOCTYPE html>
<html dir="ltr" lang="en-US">
<head>

	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="author" content="SemiColonWeb" />

	<!-- Stylesheets
	============================================= -->
	<link href="https://fonts.googleapis.com/css2?family=Caveat+Brush&family=Poppins:wght@300;400;500;600;700;900&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="{{asset('nonprofit/css/bootstrap.css')}}" type="text/css" />
	<link rel="stylesheet" href="{{asset('nonprofit/style.css')}}" type="text/css" />
	<link rel="stylesheet" href="{{asset('nonprofit/css/swiper.css')}}" type="text/css" />

	<link rel="stylesheet" href="{{asset('nonprofit/css/dark.css')}}" type="text/css" />
	<link rel="stylesheet" href="{{asset('nonprofit/css/font-icons.css')}}" type="text/css" />
	<link rel="stylesheet" href="{{asset('nonprofit/css/animate.css')}}" type="text/css" />
	<link rel="stylesheet" href="{{asset('nonprofit/css/magnific-popup.css')}}" type="text/css" />

	<link rel="stylesheet" href="{{asset('nonprofit/css/custom.css')}}" type="text/css" />
	<link rel="stylesheet" href="{{asset('nonprofit/css/calendar.css')}}" type="text/css" />

	<!-- NonProfit Demo Specific Stylesheet -->
	<link rel="stylesheet" href="{{asset('nonprofit/css/colors.php?color=C6C09C')}}" type="text/css" /> <!-- Theme Color -->
	<link rel="stylesheet" href="{{asset('nonprofit/demos/nonprofit/css/fonts.css')}}" type="text/css" />
	<link rel="stylesheet" href="{{asset('nonprofit/demos/nonprofit/nonprofit.css')}}" type="text/css" />
	<!-- / -->

	<meta name='viewport' content='initial-scale=1, viewport-fit=cover'>

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

		<!-- Floating Contact
		============================================= -->
		<div class="floating-contact-wrap">
			<div class="floating-contact-btn shadow">
				<i class="floating-contact-icon btn-unactive icon-envelope21"></i>
				<i class="floating-contact-icon btn-active icon-line-plus"></i>
			</div>
			<div class="floating-contact-box">
				<div id="q-contact" class="widget quick-contact-widget clearfix">
					<div class="floating-contact-heading bg-color p-4 rounded-top">
						<h3 class="mb-0 font-secondary h2 ls0">Quick Contact 👋</h3>
						<p class="mb-0">Get in Touch with Us</p>
					</div>
					<div class="form-widget bg-white" data-alert-type="false">
						<div class="form-result"></div>
						<div class="floating-contact-loader css3-spinner" style="position: absolute;">
							<div class="css3-spinner-bounce1"></div>
							<div class="css3-spinner-bounce2"></div>
							<div class="css3-spinner-bounce3"></div>
						</div>
						<div id="floating-contact-submitted" class="p-5 center">
							<i class="icon-line-mail h1 color"></i>
							<h4 class="fw-normal mb-0 font-body">Thank You for Contact Us! Our Team will contact you asap on your email Address.</h4>
						</div>
						<form class="mb-0" id="floating-contact" action="include/form.php" method="post" enctype="multipart/form-data">
							<div class="input-group mb-3">
								<span class="input-group-text bg-transparent"><i class="icon-user-alt"></i></span>
								<input type="text" name="floating-contact-name" id="floating-contact-name" class="form-control required" value="" placeholder="Enter your Full Name">
							</div>
							<div class="input-group mb-3">
								<span class="input-group-text bg-transparent"><i class="icon-at"></i></span>
								<input type="email" name="floating-contact-email" id="floating-contact-email" class="form-control required" value="" placeholder="Enter your Email Address">
							</div>
							<div class="input-group mb-3">
								<span class="input-group-text bg-transparent"><i class="icon-comment21"></i></span>
								<textarea name="floating-contact-message" id="floating-contact-message" class="form-control required" cols="30" rows="4"></textarea>
							</div>
							<input type="hidden" id="floating-contact-botcheck" name="floating-contact-botcheck" value="" />
							<button type="submit" name="floating-contact-submit" class="btn btn-dark w-100 py-2">Send Message</button>
							<input type="hidden" name="prefix" value="floating-contact-">
							<input type="hidden" name="subject" value="Messgae From Floating Contact">
							<input type="hidden" name="html_title" value="Floating Contact Message">
						</form>
					</div>
				</div>
			</div>
		</div>

	</div><!-- #wrapper end -->

	<!-- Go To Top
	============================================= -->
	<div id="gotoTop" class="icon-angle-up"></div>

	<!-- JavaScripts
	============================================= -->
	<script src="{{asset('nonprofit/js/jquery.js')}}"></script>
	<script src="{{asset('nonprofit/js/plugins.min.js')}}"></script>
	<script src="{{asset('nonprofit/js/jquery.calendario.js')}}"></script>
	<script src="{{asset('nonprofit/demos/nonprofit/js/events.js')}}"></script>

	<!-- Footer Scripts
	============================================= -->
	<script src="{{asset('nonprofit/js/functions.js')}}"></script>

	<script>
		jQuery(document).ready( function($){
			var elementParent = $('.floating-contact-wrap');
			$('.floating-contact-btn, .btn-contact').off( 'click' ).on( 'click', function(e) {
				elementParent.toggleClass('active', );
				e.preventDefault(e);
			});
		});

		var cal = $( '#calendar' ).calendario( {
			onDayClick : function( $el, $contentEl, dateProperties ) {

				for( var key in dateProperties ) {
					console.log( key + ' = ' + dateProperties[ key ] );
				}

			},
			caldata : canvasEvents
		}),
		$month = $( '#calendar-month' ).html( cal.getMonthName() ),
		$year = $( '#calendar-year' ).html( cal.getYear() );

		$( '#calendar-next' ).on( 'click', function() {
			cal.gotoNextMonth( updateMonthYear );
		} );
		$( '#calendar-prev' ).on( 'click', function() {
			cal.gotoPreviousMonth( updateMonthYear );
		} );
		$( '#calendar-current' ).on( 'click', function() {
			cal.gotoNow( updateMonthYear );
		} );

		function updateMonthYear() {
			$month.html( cal.getMonthName() );
			$year.html( cal.getYear() );
		};

	</script>


</body>
</html>
