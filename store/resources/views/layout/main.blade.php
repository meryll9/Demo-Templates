
<!DOCTYPE html>
<html dir="ltr" lang="en-US">
<head>

	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="author" content="SemiColonWeb" />

	<!-- Stylesheets
	============================================= -->
	<link href="https://fonts.googleapis.com/css?family=Karla:400,700&display=swap" rel="stylesheet" type="text/css" />
	<link rel="stylesheet" href="{{asset('store/css/bootstrap.css')}}" type="text/css" />
	<link rel="stylesheet" href="{{asset('store/style.css')}}" type="text/css" />
	<link rel="stylesheet" href="{{asset('store/css/swiper.css')}}" type="text/css" />
	<link rel="stylesheet" href="{{asset('store/css/dark.css')}}" type="text/css" />

	<link rel="stylesheet" href="{{asset('store/css/font-icons.css')}}" type="text/css" />
	<link rel="stylesheet" href="{{asset('store/css/animate.css')}}" type="text/css" />
	<link rel="stylesheet" href="{{asset('store/css/magnific-popup.css')}}" type="text/css" />

	<link rel="stylesheet" href="{{asset('store/css/custom.css')}}" type="text/css" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />

	<!-- Store Demo Specific Stylesheet -->
	<link rel="stylesheet" href="{{asset('store/css/colors.php?color=222222')}}" type="text/css" /> <!-- Store Theme Color -->
	<link rel="stylesheet" href="{{asset('store/demos/store/css/fonts.css')}}" type="text/css" /> <!-- Store Theme Font -->
	<link rel="stylesheet" href="{{asset('store/demos/store/store.css')}}" type="text/css" /> <!-- Store Theme Custom CSS -->
	<!-- / -->

	<!-- Document Title
	============================================= -->
	<title>{{ env('APP_NAME') }} | Webfocus</title>

</head>

<body class="stretched modal-subscribe-bottom">

	<!-- Document Wrapper
	============================================= -->
	<div id="wrapper" class="clearfix">

		<!-- Modal -->
		<div class="modal animated fadeInUp fast pe-0" id="modal-subscribe" role="dialog" displayed="false" data-backdrop="static">

			<div class="modal-dialog">
				<div class="modal-content">
					<button type="button" class="btn btn-close btn-sm ms-auto p-2"  data-bs-dismiss="modal" aria-label="Close" aria-label="Close"></button>
					<div class="modal-body">

						<div class="form-widget mx-auto" data-loader="button" style="padding: 30px">

							<h2 class="fw-bold h1 mb-3" style="letter-spacing: -2px">Get Special Discount!</h2>
							<p>Subscribe to Our Newsletter to get Important News, Amazing Offers & Inside Scoops:</p>

							<div class="form-result"></div>

							<form class="mb-0" id="modal-subscribe-form" action="include/form.php" method="post" enctype="multipart/form-data">
								<label for="modal-subscribe-form-email">Email Address <span>*</span></label>
								<input type="email" name="modal-subscribe-form-email" id="modal-subscribe-form-email" class="form-control required rounded-0" placeholder="youremail@address.com">

								<input class="d-none" type="text" id="modal-subscribe-form-botcheck" name="modal-subscribe-form-botcheck" value="" />
								<button name="modal-subscribe-form-submit" class="button w-100 btn-danger m-0 mt-2" type="submit">Subscribe Now</button>

								<input type="hidden" name="prefix" value="modal-subscribe-form-">
							</form>
							<div class="text-center">
								<small class="text-black-50 mt-1"><em>We never send SPAM to your Email</em></small>
							</div>

						</div>
					</div>
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
	<script src="{{asset('store/js/jquery.js')}}"></script>
	<script src="{{asset('store/js/plugins.min.js')}}"></script>

	<!-- Footer Scripts
	============================================= -->
	<script src="{{asset('store/js/functions.js')}}"></script>

	<script>
		$(document).ready(changeHeaderColor);
		$(window).on('resize',changeHeaderColor);

		function changeHeaderColor(){
			if (jQuery(window).width() > 991.98) {
				jQuery( "#header" ).hover(
					function() {
						if (!$(this).hasClass("sticky-header")) {
							$( this ).addClass( "hover-light" ).removeClass( "dark" );
							SEMICOLON.header.logo();
						}
						$( "#wrapper" ).addClass( "header-overlay" );
					}, function() {
						if (!$(this).hasClass("sticky-header")) {
							$( this ).removeClass( "hover-light" ).addClass( "dark" );
							SEMICOLON.header.logo();
						}
						$( "#wrapper" ).removeClass( "header-overlay" );
					}
				);
			}
		};

		$(window).scroll(function() {
			if ($(document).scrollTop() > 2000 && $("#modal-subscribe").attr("displayed") === "false") {
				$('#modal-subscribe').modal('show');
				$("#modal-subscribe").attr("displayed", "true");
			}
		});

		jQuery('#modal-subscribe-form').on( 'formSubmitSuccess', function(){
			$("#modal-subscribe").addClass("fadeOutDown");
			setTimeout(function() { $('#modal-subscribe').modal('hide'); }, 400);
			$("#modal-subscribe").attr("displayed", "false");
		});

	</script>

</body>
</html>
