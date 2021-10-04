
<!DOCTYPE html>
<html dir="ltr" lang="en-US">
<head>

	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="author" content="SemiColonWeb" />

	<!-- Stylesheets
	============================================= -->
	<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,400i,600,700|Montserrat:400,700|Merriweather&display=swap" rel="stylesheet" type="text/css" />
	<link rel="stylesheet" href="{{asset('applanding/css/bootstrap.css')}}" type="text/css" />
	<link rel="stylesheet" href="{{asset('applanding/style.css')}}" type="text/css" />
	<link rel="stylesheet" href="{{asset('applanding/css/dark.css')}}" type="text/css" />

	<!-- Media Agency Demo Specific Stylesheet -->
	<link rel="stylesheet" href="{{asset('applanding/demos/app-landing/app-landing.css')}}" type="text/css" />
	<!-- / -->

	<link rel="stylesheet" href="{{asset('applanding/css/font-icons.css')}}" type="text/css" />
	<link rel="stylesheet" href="{{asset('applanding/one-page/css/et-line.css')}}" type="text/css" />
	<link rel="stylesheet" href="{{asset('applanding/css/animate.css')}}" type="text/css" />
	<link rel="stylesheet" href="{{asset('applanding/css/magnific-popup.css')}}" type="text/css" />

	<link rel="stylesheet" href="{{asset('applanding/demos/app-landing/css/fonts.css')}}" type="text/css" />

	<!-- Bootstrap Switch CSS -->
	<link rel="stylesheet" href="{{asset('applanding/css/components/bs-switches.css')}}" type="text/css" />

	<link rel="stylesheet" href="{{asset('applanding/css/custom.css')}}" type="text/css" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />

	<link rel="stylesheet" href="{{asset('applanding/css/colors.php?color=267DF4.css')}}" type="text/css" />

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
	<script src="{{asset('applanding/js/jquery.js')}}"></script>
	<script src="{{asset('applanding/js/plugins.min.js')}}"></script>

	<!-- Footer Scripts
	============================================= -->
	<script src="{{asset('applanding/js/functions.js')}}"></script>

	<script>
		jQuery(document).ready( function($){
			$('[data-pricing-plan]').click( function(){
				$('#get-started-form').find('#get-started-form-package').val( $(this).attr('data-pricing-plan') );
				$('#get-started-form').find('#modal-get-started-package').html( $(this).attr('data-pricing-plan') );
			});
		});
	</script>

</body>
</html>
