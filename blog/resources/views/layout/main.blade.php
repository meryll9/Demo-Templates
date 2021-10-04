
<!DOCTYPE html>
<html dir="ltr" lang="en-US">
<head>

	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="author" content="SemiColonWeb" />

	<!-- Stylesheets
	============================================= -->
	<link href="https://fonts.googleapis.com/css2?family=Domine:wght@400;500;700&family=Roboto:wght@400;500&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="{{asset('blog/css/bootstrap.css')}}" type="text/css" />
	<link rel="stylesheet" href="{{asset('blog/style.css')}}" type="text/css" />
	<link rel="stylesheet" href="{{asset('blog/css/dark.css')}}" type="text/css" />

	<link rel="stylesheet" href="{{asset('blog/css/font-icons.css')}}" type="text/css" />
	<link rel="stylesheet" href="{{asset('blog/css/animate.css')}}" type="text/css" />
	<link rel="stylesheet" href="{{asset('blog/css/magnific-popup.css')}}" type="text/css" />

	<link rel="stylesheet" href="{{asset('blog/css/custom.css')}}" type="text/css" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />

	<!-- Blog Demo Specific Stylesheet -->
	<link rel="stylesheet" href="{{asset('blog/demos/blog/css/fonts.css')}}" type="text/css" />
	<link rel="stylesheet" href="{{asset('blog/demos/blog/blog.css')}}" type="text/css" />

	<link rel="stylesheet" href="{{asset('blog/css/colors.php?color=F39887')}}" type="text/css" />

	<!-- Document Title
	============================================= -->
	<title>{{ env('APP_NAME') }} | Webfocus</title>

</head>

<body class="stretched search-overlay">

	<div id="fb-root"></div><script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v6.0&appId=915724525182895&autoLogAppEvents=1"></script>

	<!-- Document Wrapper
	============================================= -->
	<div id="wrapper">

		@include('layout.header')

		@yield('content')

		@include('layout.footer')

	</div><!-- #wrapper end -->

	<!-- Go To Top
	============================================= -->
	<div id="gotoTop" class="icon-angle-up rounded-circle" style="left: 30px; right: auto;"></div>

	<!-- JavaScripts
	============================================= -->
	<script src="{{asset('blog/js//jquery.js')}}"></script>
	<script src="{{asset('blog/js//plugins.min.js')}}"></script>

	<!-- Footer Scripts
	============================================= -->
	<script src="{{asset('blog/js//functions.js')}}"></script>

	<!-- ADD-ONS JS FILES -->
	<script>
		// Current Date
		var weekday = ["Sun","Mon","Tues","Wed","Thurs","Fri","Sat"],
			month = ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"],
			a = new Date();

		jQuery('.divider-text').html( weekday[a.getDay()] + ', ' + month[a.getMonth()] + ' ' + a.getDate() );

		jQuery('.dark-mode').on( 'click', function() {
		    jQuery("body").toggleClass('dark');
		    SEMICOLON.header.logo();
		    return false;
		});
	</script>

</body>
</html>
