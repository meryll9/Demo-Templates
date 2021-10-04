
<!DOCTYPE html>
<html dir="ltr" lang="en-US">
<head>

	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="author" content="SemiColonWeb" />

	<!-- Stylesheets
	============================================= -->
	<link href="https://fonts.googleapis.com/css?family=Muli:400,600,700,800&display=swap" rel="stylesheet" type="text/css" />
	<link rel="stylesheet" href="{{asset('headphones/css/bootstrap.css')}}" type="text/css" />
	<link rel="stylesheet" href="{{asset('headphones/style.css')}}" type="text/css" />
	<link rel="stylesheet" href="{{asset('headphones/css/dark.css')}}" type="text/css" />
	<link rel="stylesheet" href="{{asset('headphones/css/swiper.css')}}" type="text/css" />

	<!-- Headphones Demo Specific Stylesheet -->
	<link rel="stylesheet" href="{{asset('headphones/demos/headphones/headphones.css')}}" type="text/css" />
	<link rel="stylesheet" href="{{asset('headphones/demos/headphones/css/fonts.css')}}" type="text/css" />
	<!-- / -->

	<link rel="stylesheet" href="{{asset('headphones/css/font-icons.css')}}" type="text/css" />
	<link rel="stylesheet" href="{{asset('headphones/css/animate.css')}}" type="text/css" />
	<link rel="stylesheet" href="{{asset('headphones/css/magnific-popup.css')}}" type="text/css" />

	<link rel="stylesheet" href="{{asset('headphones/css/custom.css')}}" type="text/css" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />

	<!-- Headphones Demo Theme Color -->
	<link rel="stylesheet" href="{{asset('headphones/css/colors.php?color=333')}}" type="text/css" />

	<!-- Document Title
	============================================= -->
	<title>{{ env('APP_NAME') }} | Webfocus</title>

</head>

<body class="stretched" data-loader="12">

	<!-- Document Wrapper
	============================================= -->
	<div id="wrapper" class="clearfix">

		@include('layout.header')

		@yield('content')

		@include('layout.footer')

	</div><!-- #wrapper end -->

	<!-- Go To Top
	============================================= -->
	<div id="gotoTop" class="icon-line-arrow-up"></div>

	<!-- JavaScripts
	============================================= -->
	<script src="{{asset('headphones/js/jquery.js')}}"></script>
	<script src="{{asset('headphones/js/plugins.min.js')}}"></script>

	<!-- Footer Scripts
	============================================= -->
	<script src="{{asset('headphones/js/functions.js')}}"></script>

	<!-- ADD-ONS JS FILES -->
	<script>
		jQuery(document).ready( function(){

			// on hover Changes Scripts -->
			function showcaseSection( element ){
				var otherElements = element.parents('.showcase-section').find('.showcase-feature'),
					elementTarget = jQuery( element.attr('data-target') ),
					otherTargets = element.parents('.showcase-section').find('.showcase-target');

				otherElements.removeClass('showcase-feature-active');
				element.addClass('showcase-feature-active');
				otherTargets.removeClass('showcase-target-active');
				elementTarget.addClass('showcase-target-active');
			}

			jQuery('.showcase-section').each( function(){
				if ( jQuery(this).find('.showcase-feature-active').length < 1 ) {
					jQuery(this).find('.showcase-feature:eq(0)').addClass('showcase-feature-active');
				}
			});

			var elementActive = jQuery('.showcase-feature-active');

			elementActive.each( function(){
				showcaseSection( jQuery(this) );
			});

			jQuery('.showcase-feature').hover( function(){
				showcaseSection( jQuery(this) );
			}); // --> Scripts End.

		});
	</script>

</body>
</html>
