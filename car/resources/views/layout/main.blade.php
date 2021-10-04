
<!DOCTYPE html>
<html dir="ltr" lang="en-US">
<head>

	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="author" content="SemiColonWeb" />

	<!-- Stylesheets
	============================================= -->
	<link href="https://fonts.googleapis.com/css?family=Mukta+Vaani:300,400,500,600,700|Open+Sans:300,400,600,700,800,900&display=swap" rel="stylesheet" type="text/css" />
	<link rel="stylesheet" href="{{asset('car/css/bootstrap.css')}}" type="text/css" />
	<link rel="stylesheet" href="{{asset('car/style.css')}}" type="text/css" />
	<link rel="stylesheet" href="{{asset('car/css/dark.css')}}" type="text/css" />
	<link rel="stylesheet" href="{{asset('car/css/swiper.css')}}" type="text/css" />
	<link rel="stylesheet" href="{{asset('car/css/font-icons.css')}}" type="text/css" />

	<!-- Bootstrap Select CSS -->
	<link rel="stylesheet" href="{{asset('car/css/components/bs-select.css')}}" type="text/css" />

	<!-- car Specific Stylesheet -->
	<link rel="stylesheet" href="{{asset('car/demos/car/car.css')}}" type="text/css" />
	<link rel="stylesheet" href="{{asset('car/demos/car/css/car-icons/style.css')}}" type="text/css" />
	<!-- / -->

	<link rel="stylesheet" href="{{asset('car/css/animate.css')}}" type="text/css" />
	<link rel="stylesheet" href="{{asset('car/css/magnific-popup.css')}}" type="text/css" />

	<link rel="stylesheet" href="{{asset('car/demos/car/css/fonts.css')}}" type="text/css" />

	<link rel="stylesheet" href="{{asset('car/css/custom.css')}}" type="text/css" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />

	<link rel="stylesheet" href="{{asset('car/css/colors.php?color=c85e51')}}" type="text/css" />

	<!-- SLIDER REVOLUTION 5.x CSS SETTINGS -->
	<link rel="stylesheet" type="text/css" href="{{asset('car/include/rs-plugin/css/settings.css')}}" media="screen" />
	<link rel="stylesheet" type="text/css" href="{{asset('car/include/rs-plugin/css/layers.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('car/include/rs-plugin/css/navigation.css')}}">

	<!-- Document Title
	============================================= -->
	<title>{{ env('APP_NAME') }} | Webfocus</title>

	<style>
		/* Revolution Slider */
		.ares .tp-tab { border: 1px solid #eee; }
		.ares .tp-tab-content { margin-top: -4px; }
		.ares .tp-tab-content { padding: 15px 15px 15px 110px; }
		.ares .tp-tab-image { width: 80px;height: 80px; }

	</style>

</head>

<body class="stretched side-push-panel" data-loader-html="<div><img src='demos/car/images/page-loader.gif' alt='Loader'></div>">

	<!-- Side Panel Overlay -->
	<div class="body-overlay"></div>

	<!-- Side Panel -->
	<div id="side-panel">

		<div id="side-panel-trigger-close" class="side-panel-trigger"><a href="#"><i class="icon-line-cross"></i></a></div>

		<div class="side-panel-wrap">

			<div class="widget clearfix">

				<a href="index.html"><img src="{{asset('car/demos/car/images/logo@2x.png')}}" alt="Canvas Logo" height="50"></a>

				<p>It has always been, and will always be, about quality. We're passionate about ethically sourcing the finest coffee beans, roasting them with great care. We'd like to hear your message!</p>

				<div class="widget quick-contact-widget form-widget border-0 pt-0 clearfix">

					<h4>Quick Contact</h4>
					<div class="form-result"></div>
					<form id="quick-contact-form" name="quick-contact-form" action="include/form.php" method="post" class="quick-contact-form mb-0">
						<div class="form-process">
							<div class="css3-spinner">
								<div class="css3-spinner-scaler"></div>
							</div>
						</div>
						<input type="text" class="required sm-form-control input-block-level" id="quick-contact-form-name" name="quick-contact-form-name" value="" placeholder="Full Name" />
						<input type="text" class="required sm-form-control email input-block-level" id="quick-contact-form-email" name="quick-contact-form-email" value="" placeholder="Email Address" />
						<textarea class="required sm-form-control input-block-level short-textarea" id="quick-contact-form-message" name="quick-contact-form-message" rows="4" cols="30" placeholder="Message"></textarea>
						<input type="text" class="d-none" id="quick-contact-form-botcheck" name="quick-contact-form-botcheck" value="" />
						<input type="hidden" name="prefix" value="quick-contact-form-">
						<button type="submit" id="quick-contact-form-submit" name="quick-contact-form-submit" class="button button-small button-3d m-0" value="submit">Send Email</button>
					</form>

				</div>


			</div>

		</div>

	</div>

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

	<!-- Contact Button
	============================================= -->
	<div id="contact-me" class="icon-line-mail side-panel-trigger bg-color"></div>

	<!-- JavaScripts
	============================================= -->
	<script src="{{asset('car/js/jquery.js')}}"></script>
	<script src="{{asset('car/js/plugins.min.js')}}"></script>
	<script src="{{asset('car/demos/car/js/360rotator.js')}}"></script>

	<!-- Bootstrap Select Plugin -->
	<script src="{{asset('car/js/components/bs-select.js')}}"></script>

	<!-- SLIDER REVOLUTION 5.x SCRIPTS  -->
	<script src="{{asset('car/include/rs-plugin/js/jquery.themepunch.tools.min.js')}}"></script>
	<script src="{{asset('car/include/rs-plugin/js/jquery.themepunch.revolution.min.js')}}"></script>

	<script src="{{asset('car/include/rs-plugin/js/extensions/revolution.extension.actions.min.js')}}"></script>
	<script src="{{asset('car/include/rs-plugin/js/extensions/revolution.extension.carousel.min.js')}}"></script>
	<script src="{{asset('car/include/rs-plugin/js/extensions/revolution.extension.kenburn.min.js')}}"></script>
	<script src="{{asset('car/include/rs-plugin/js/extensions/revolution.extension.layeranimation.min.js')}}"></script>
	<script src="{{asset('car/include/rs-plugin/js/extensions/revolution.extension.migration.min.js')}}"></script>
	<script src="{{asset('car/include/rs-plugin/js/extensions/revolution.extension.navigation.min.js')}}"></script>
	<script src="{{asset('car/include/rs-plugin/js/extensions/revolution.extension.parallax.min.js')}}"></script>
	<script src="{{asset('car/include/rs-plugin/js/extensions/revolution.extension.slideanims.min.js')}}"></script>
	<script src="{{asset('car/include/rs-plugin/js/extensions/revolution.extension.video.min.js')}}"></script>

	<!-- Footer Scripts
	============================================= -->
	<script src="{{asset('car/js/functions.js')}}"></script>

	<script>

		var $ = jQuery.noConflict();

		//Car Appear In View
		function isScrolledIntoView(elem) {
			var docViewTop = $(window).scrollTop();
			var docViewBottom = docViewTop + $(window).height();

			var elemTop = $(elem).offset().top + 180;
			var elemBottom = elemTop + $(elem).height() - 500;

			return ((elemBottom <= docViewBottom) && (elemTop >= docViewTop));
		}

		$(window).scroll(function () {
		   $('.running-car').each(function () {
				if (isScrolledIntoView(this) === true) {
					$(this).addClass('in-view');
				} else {
					$(this).removeClass('in-view');
				}
			});
		});

		//threesixty degree
		window.onload = init;
		var car;
		function init(){

			car = $('.360-car').ThreeSixty({
				totalFrames: 52, // Total no. of image you have for 360 slider
				endFrame: 52, // end frame for the auto spin animation
				currentFrame: 3, // This the start frame for auto spin
				imgList: '.threesixty_images', // selector for image list
				progress: '.spinner', // selector to show the loading progress
				imagePath:'demos/car/images/360degree-cars/', // path of the image assets
				filePrefix: '', // file prefix if any
				ext: '.png', // extention for the assets
				height: 887,
				width: 500,
				navigation: true,
				responsive: true,
			});
		};

		// Rev Slider
		var tpj=jQuery;
		var revapi424;
		tpj(document).ready(function() {
			if(tpj("#rev_slider_424_1").revolution == undefined){
				revslider_showDoubleJqueryError("#rev_slider_424_1");
			}else{
				revapi424 = tpj("#rev_slider_424_1").show().revolution({
					sliderType:"carousel",
					jsFileLocation:"include/rs-plugin/js/",
					sliderLayout:"auto",
					dottedOverlay:"none",
					delay:7000,
					navigation: {
						keyboardNavigation:"off",
						keyboard_direction: "horizontal",
						mouseScrollNavigation:"off",
						mouseScrollReverse:"default",
						onHoverStop:"off",
						touch:{
							touchenabled:"on",
							swipe_threshold: 75,
							swipe_min_touches: 1,
							swipe_direction: "horizontal",
							drag_block_vertical: false
						}
						,
						arrows: {
							style:"uranus",
							enable:false,
							hide_onmobile:false,
							hide_onleave:true,
							hide_delay:200,
							hide_delay_mobile:1200,
							tmp:'',
							left: {
								h_align:"left",
								v_align:"center",
								h_offset:-10,
								v_offset:0
							},
							right: {
								h_align:"right",
								v_align:"center",
								h_offset:-10,
								v_offset:0
							}
						},
						carousel: {
							maxRotation: 65,
							vary_rotation: "on",
							minScale: 55,
							vary_scale: "on",
							horizontal_align: "center",
							vertical_align: "center",
							fadeout: "on",
							vary_fade: "on",
							maxVisibleItems: 5,
							infinity: "off",
							space: 0,
							stretch: "on"
						}
						,
						tabs: {
							style:"ares",
							enable:true,
							width:270,
							height:80,
							min_width:270,
							wrapper_padding: 10,
							wrapper_color:"transparent",
							wrapper_opacity:"0.5",

							visibleAmount: 7,
							hide_onmobile: false,
							hide_under:420,
							hide_onleave:false,
							hide_delay_mobile:1200,
							hide_delay:200,
							direction:"horizontal",
							span:true,
							position:"outer-bottom",
							space:20,
							h_align:"left",
							v_align:"bottom",
							h_offset:0,
							v_offset:0
						}
					},
					visibilityLevels:[1240,1024,778,480],
					gridwidth:[1240,992,768,420],
					gridheight:[600,500,960,720],
					lazyType:"single",
					shadow:0,
					spinner:"off",
					stopLoop:"off",
					stopAfterLoops: 0,
					stopAtSlide: 1,
					shuffle:"off",
					autoHeight:"off",
					hideThumbsOnMobile:"off",
					hideSliderAtLimit:0,
					hideCaptionAtLimit:0,
					hideAllCaptionAtLilmit:0,
					debugMode:false,
					fallbacks: {
						simplifyAll:"off",
						nextSlideOnWindowFocus:"off",
						disableFocusListener:false,
					}
				});
			}
		});	/*ready*/

		// Video on play on hover
		jQuery(document).ready(function($){
			$('.videoplay-on-hover').hover( function(){
				if( $(this).find('video').length > 0 ) {
					$(this).find('video').get(0).play();
				}
			}, function(){
				if( $(this).find('video').length > 0 ) {
					$(this).find('video').get(0).pause();
				}
			});
		});
	</script>

</body>
</html>
