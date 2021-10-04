
<!DOCTYPE html>
<html dir="ltr" lang="en-US">
<head>

	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="author" content="SemiColonWeb" />

	<!-- Stylesheets
	============================================= -->
	<link href="https://fonts.googleapis.com/css?family=Lato:400|Merriweather:400,700&display=swap" rel="stylesheet" type="text/css" />
	<link rel="stylesheet" href="{{asset('beauty/css/bootstrap.css')}}" type="text/css" />
	<link rel="stylesheet" href="{{asset('beauty/style.css')}}" type="text/css" />
	<link rel="stylesheet" href="{{asset('beauty/css/dark.css')}}" type="text/css" />

	<!-- Beauty Demo Specific Stylesheet -->
	<link rel="stylesheet" href="{{asset('beauty/demos/beauty/beauty.css')}}" type="text/css" />
	<link rel="stylesheet" href="{{asset('beauty/demos/beauty/css/fonts.css')}}" type="text/css" />
	<link rel="stylesheet" href="{{asset('beauty/demos/spa/css/fonts/spa-icons.css')}}" type="text/css" />
	<!-- / -->

	<link rel="stylesheet" href="{{asset('beauty/css/font-icons.css')}}" type="text/css" />
	<link rel="stylesheet" href="{{asset('beauty/css/animate.css')}}" type="text/css" />
	<link rel="stylesheet" href="{{asset('beauty/css/magnific-popup.css')}}" type="text/css" />

	<link rel="stylesheet" href="{{asset('beauty/one-page/css/et-line.css')}}" type="text/css" />

	<link rel="stylesheet" href="{{asset('beauty/css/custom.css')}}" type="text/css" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />

	<link rel="stylesheet" href="{{asset('beauty/css/colors.php?color=6A1B9A')}}" type="text/css" />

	<!-- SLIDER REVOLUTION 5.x CSS SETTINGS -->
	<link rel="stylesheet" type="text/css" href="{{asset('beauty/include/rs-plugin/css/settings.css')}}" media="screen" />
	<link rel="stylesheet" type="text/css" href="{{asset('beauty/include/rs-plugin/css/layers.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('beauty/include/rs-plugin/css/navigation.css')}}">

	<!-- Document Title
	============================================= -->
	<title>{{ env('APP_NAME') }} | Webfocus</title>

	<style>
		.tiny_bullet_slider .tp-bullet:before{content:" ";  position:absolute;  width:100%;  height:25px;  top:-12px;  left:0px;  background:transparent}
		#rev_slider_139_1 .uranus.tparrows{width:50px; height:50px; background:rgba(255,255,255,0)}#rev_slider_139_1 .uranus.tparrows:before{width:50px; height:50px; line-height:50px; font-size:40px; transition:all 0.3s;-webkit-transition:all 0.3s}#rev_slider_139_1 .uranus.tparrows:hover:before{opacity:0.75}.bullet-bar.tp-bullets{}.bullet-bar.tp-bullets:before{content:" ";position:absolute;width:100%;height:100%;background:transparent;padding:10px;margin-left:-10px;margin-top:-10px;box-sizing:content-box}.bullet-bar .tp-bullet{width:60px;height:3px;position:absolute;background:#aaa;  background:rgba(255,255,255,0.6);cursor:pointer;box-sizing:content-box}.bullet-bar .tp-bullet:hover,.bullet-bar .tp-bullet.selected{background:rgba(255,255,255,1)}
	</style>

</head>

<body class="stretched side-header" data-animation-in="bounce">

	<!-- Document Wrapper
	============================================= -->
	<div id="wrapper" class="clearfix">

		<div class="modal-on-load" data-target="#myModal1"></div>

		<!-- Modal -->
		<div class="modal1 mfp-hide" id="myModal1">
			<div class="block mx-auto" style="background-color: #FFF; max-width: 700px;">
				<div class="row m-0 align-items-center clearfix">
					<div class="col-sm-6" data-height-xl="456" data-height-lg="456" data-height-md="456" data-height-sm="358" data-height-xs="0" style="background-image: url({{asset('/beauty/demos/beauty/images/others/banner2.jpg')}}); background-size: cover;"></div>
					<div class="col-sm-6 p-4 p-md-5 align-self-center">
						<div>
						<h4>Sign Up for more offers</h4>
						<div class="widget subscribe-widget mt-2 clearfix">
							<p class="mb-4"><strong>Subscribe</strong> to Our Newsletter to get Important News, Amazing Offers &amp; Inside Scoops:</p>
							<div class="widget-subscribe-form-result"></div>
							<form id="widget-subscribe-form" action="include/subscribe.php" method="post" class="mt-1 mb-0">
								<input type="email" id="widget-subscribe-form-email" name="widget-subscribe-form-email" class="form-control sm-form-control required email" placeholder="Enter your Email Address">

								<button class="button w-100 nott fw-normal ms-0 mt-2" type="submit">Subscribe Now</button>
							</form>
						</div>
						<p class="mb-0"><small class="fw-normal text-black-50"><em>We hate spam &amp; we respect your privacy*</em></small></p>
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
	<div id="gotoTop" class="icon-angle-up rounded-circle"></div>

	<!-- JavaScripts
	============================================= -->
	<script src="{{asset('beauty/js/jquery.js')}}"></script>
	<script src="{{asset('beauty/js/plugins.min.js')}}"></script>

	<!-- For Countdown -->
	<script src="{{asset('beauty/js/components/moment.js')}}"></script>

	<!-- SLIDER REVOLUTION 5.x SCRIPTS
	============================================= -->
	<script src="{{asset('beauty/include/rs-plugin/js/jquery.themepunch.tools.min.js')}}"></script>
	<script src="{{asset('beauty/include/rs-plugin/js/jquery.themepunch.revolution.min.js')}}"></script>

	<script src="{{asset('beauty/js/components/event.move.js')}}"></script>
	<script src="{{asset('beauty/js/components/image-changer.js')}}"></script>

	<!-- Footer Scripts
	============================================= -->
	<script src="{{asset('beauty/js/functions.js')}}"></script>

	<script>

		var revapi139,
			tpj;
		var $ = jQuery.noConflict();
		(function() {
			if (!/loaded|interactive|complete/.test(document.readyState)) document.addEventListener("DOMContentLoaded",onLoad); else onLoad();

			function onLoad() {
				if (tpj===undefined) { tpj = jQuery; if("off" == "on") tpj.noConflict();}
					if(tpj("#rev_slider_139_1").revolution == undefined){
						revslider_showDoubleJqueryError("#rev_slider_139_1");
					}else{
						revapi139 = tpj("#rev_slider_139_1").show().revolution({
							sliderType:"standard",
							jsFileLocation:"include/rs-plugin/js/",
							sliderLayout:"fullscreen",
							dottedOverlay:"none",
							delay:9000,
							navigation: {
								keyboardNavigation:"off",
								keyboard_direction: "horizontal",
								mouseScrollNavigation:"off",
								 mouseScrollReverse:"default",
								onHoverStop:"off",
								touch:{
									touchenabled:"on",
									touchOnDesktop:"off",
									swipe_threshold: 75,
									swipe_min_touches: 1,
									swipe_direction: "horizontal",
									drag_block_vertical: false
								}
								,
								arrows: {
									style:"uranus",
									enable:true,
									hide_onmobile:false,
									hide_under:0,
									hide_onleave:false,
									tmp:'',
									left: {
										h_align:"left",
										v_align:"center",
										h_offset:15,
										v_offset:0
									},
									right: {
										h_align:"right",
										v_align:"center",
										h_offset:15,
										v_offset:0
									}
								}
								,
								bullets: {
									enable:true,
									hide_onmobile:false,
									style:"bullet-bar",
									hide_onleave:false,
									direction:"horizontal",
									h_align:"center",
									v_align:"bottom",
									h_offset:0,
									v_offset:30,
									space:5,
									tmp:''
								}
							},
							responsiveLevels:[1240,1024,778,480],
							visibilityLevels:[1240,1024,778,480],
							gridwidth:[1240,1024,778,480],
							gridheight:[868,768,960,720],
							lazyType:"none",
							shadow:0,
							spinner:"off",
							stopLoop:"off",
							stopAfterLoops:-1,
							stopAtSlide:-1,
							shuffle:"off",
							autoHeight:"off",
							fullScreenAutoWidth:"on",
							fullScreenAlignForce:"on",
							fullScreenOffsetContainer: "",
							fullScreenOffset: "0px",
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
					revapi139.on("revolution.slide.onloaded",function (e) {
						revapi139.addClass("tiny_bullet_slider");
					});
				}; /* END OF revapi call */
			}; /* END OF ON LOAD FUNCTION */
		}()); /* END OF WRAPPING FUNCTION */

		jQuery(window).on( 'load', function(){
			$(".twentytwenty-container[data-orientation!='vertical']").twentytwenty({default_offset_pct: 0.5});
		});
	</script>

</body>
</html>
