
<!DOCTYPE html>
<html dir="ltr" lang="en-US">
<head>

	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="author" content="SemiColonWeb" />

	<!-- Stylesheets
	============================================= -->
	<link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700&family=Playfair+Display:wght@400;700&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="{{asset('articles/css/bootstrap.css')}}" type="text/css" />
	<link rel="stylesheet" href="{{asset('articles/style.css')}}" type="text/css" />
	<link rel="stylesheet" href="{{asset('articles/css/swiper.css')}}" type="text/css" />
	<link rel="stylesheet" href="{{asset('articles/css/dark.css')}}" type="text/css" />
	<link rel="stylesheet" href="{{asset('articles/css/font-icons.css')}}" type="text/css" />
	<link rel="stylesheet" href="{{asset('articles/css/animate.css')}}" type="text/css" />
	<link rel="stylesheet" href="{{asset('articles/css/magnific-popup.css')}}" type="text/css" />

	<!-- Bootstrap Switch CSS -->
	<link rel="stylesheet" href="{{asset('articles/css/components/bs-switches.css')}}" type="text/css" />

	<link rel="stylesheet" href="{{asset('articles/css/custom.css')}}" type="text/css" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<link rel="stylesheet" href="{{asset('articles/css/colors.php?color=0C1CCC')}}" type="text/css" />

	<!-- Articles Demo Specific Stylesheet -->
	<link rel="stylesheet" href="{{asset('articles/demos/articles/articles.css')}}" type="text/css" />
	<link rel="stylesheet" href="{{asset('articles/demos/articles/css/fonts.css')}}" type="text/css" />


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

	<!-- Switcher
	============================================= -->
	<div class="mode-switcher">
		<div class="pts-text center"><span class="tdark">Dark</span><span class="tlight">Light</span></div>
		<div class="pts-switcher">
			<div class="switch">
				<input id="switch-toggle-mode" class="switch-toggle switch-toggle-round" type="checkbox">
				<label for="switch-toggle-mode"></label>
			</div>
		</div>
	</div>

	<!-- Go To Top
	============================================= -->
	<div id="gotoTop" class="icon-angle-up"></div>

	<!-- JavaScripts
	============================================= -->
	<script src="{{asset('articles/js/jquery.js')}}"></script>
	<script src="{{asset('articles/js/plugins.min.js')}}"></script>

	<!-- Footer Scripts
	============================================= -->
	<script src="{{asset('articles/js/functions.js')}}"></script>

	<script>
		jQuery(window).on( 'load', function(){
		    var swiper = new Swiper('.swiper-scroller', {
		    	slidesPerView: 'auto',
		    	spaceBetween: 50,
				freeMode: true,
				grabCursor: true,
				navigation: {
				    nextEl: '.slider-arrow-right-1',
				    prevEl: '.slider-arrow-left-1',
				},
				scrollbar: {
				el: '.swiper-scrollbar',
				},
				mousewheel: true,
				breakpoints: {
			        768: {
			          spaceBetween: 20,
			        },
			        576: {
			          spaceBetween: 15,
			        }
			      }
		    });
		});

		jQuery(document).ready( function($){
			function modeSwitcher( elementCheck, elementParent ) {
				if( elementCheck.filter(':checked').length > 0 ) {
					elementParent.addClass('dark');
					$('.mode-switcher').toggleClass('pts-switch-active');
				} else {
					elementParent.removeClass('dark');
					$('.mode-switcher').toggleClass('pts-switch-active', false);
				}
			}

			$('.pts-switcher').each( function(){
				var element = $(this),
					elementCheck = element.find(':checkbox'),
					elementParent = $('body');

				modeSwitcher( elementCheck, elementParent );

				elementCheck.on( 'change', function(){
					modeSwitcher( elementCheck, elementParent );
				});
			});
		});
	</script>

</body>
</html>
