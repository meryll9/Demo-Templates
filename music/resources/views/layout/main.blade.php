
<!DOCTYPE html>
<html dir="ltr" lang="en-US">
<head>

	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="author" content="SemiColonWeb" />

	<!-- Stylesheets
	============================================= -->
	<link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,400i,600,700|Montserrat:300,400,700|Caveat+Brush&display=swap" rel="stylesheet" type="text/css" />
	<link rel="stylesheet" href="{{asset('music/css/bootstrap.css')}}" type="text/css" />
	<link rel="stylesheet" href="{{asset('music/style.css')}}" type="text/css" />
	<link rel="stylesheet" href="{{asset('music/css/dark.css')}}" type="text/css" />
	<link rel="stylesheet" href="{{asset('music/css/swiper.css')}}" type="text/css" />

	<!-- Music Specific Stylesheet -->
	<link rel="stylesheet" href="{{asset('music/demos/music/music.css')}}" type="text/css" />
	<!-- / -->

	<link rel="stylesheet" href="{{asset('music/css/font-icons.css')}}" type="text/css" />
	<link rel="stylesheet" href="{{asset('music/one-page/css/et-line.css')}}" type="text/css" />
	<link rel="stylesheet" href="{{asset('music/css/animate.css')}}" type="text/css" />
	<link rel="stylesheet" href="{{asset('music/css/magnific-popup.css')}}" type="text/css" />

	<link rel="stylesheet" href="{{asset('music/demos/music/css/fonts.css')}}" type="text/css" />

	<!-- Bootstrap Switch CSS -->
	<link rel="stylesheet" href="{{asset('music/css/components/bs-switches.css')}}" type="text/css" />

	<link rel="stylesheet" href="{{asset('music/css/custom.css')}}" type="text/css" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />

	<!-- Theme color -->
	<link rel="stylesheet" href="{{asset('music/css/colors.php?color=ed215e')}}" type="text/css" />

	<!-- Audio Player Plugin CSS -->
	<link rel="stylesheet" href="{{asset('music/demos/music/css/mediaelement/mediaelementplayer.css')}}">

	<!-- Document Title
	============================================= -->
	<title>{{ env('APP_NAME') }} | Webfocus</title>

	<style>
		.css3-spinner { background-color: #131722; }
	</style>

</head>

<body class="stretched bg-color2" data-loader="4" data-loader-color="theme">

	<!-- Document Wrapper
	============================================= -->
	<div id="wrapper" class="clearfix" style="margin-bottom: 40px">

		@include('layout.header')

		@yield('content')

		@include('layout.footer')

	</div><!-- #wrapper end -->

	<!-- Audio Player
	============================================= -->
	<audio id="audio-player" preload="none" class="mejs__player" controls data-mejsoptions='{"defaultAudioHeight": "50", "alwaysShowControls": "true"}' style="max-width:100%;">
		<source src="{{asset('music/demos/music/src/audios/nashe-si.mp3')}}" type="audio/mp3">
	</audio>

	<!-- Default Track - onLoad
	============================================= -->
	<div id="track-onload" data-track="{{asset('music/demos/music/tracks/clean-clean.mp3')}}" data-poster="{{asset('music/demos/music/images/popular-songs/7.jpg')}}" data-title="Clean Clean" data-singer="R Costello"></div>

	<!-- Go To Top
	============================================= -->
	<div id="gotoTop" class="icon-angle-up" style="bottom: 70px;"></div>

	<!-- JavaScripts
	============================================= -->
	<script src="{{asset('music/js/jquery.js')}}"></script>
	<script src="{{asset('music/js/plugins.min.js')}}"></script>

	<!-- Audio player Plugin
	============================================= -->
	<script src="{{asset('music/demos/music/js/mediaelement/mediaelement-and-player.js')}}"></script>

	<!-- Footer Scripts
	============================================= -->
	<script src="{{asset('music/js/functions.js')}}"></script>

	<script>

		// Custom Tab jQuery
		// jQuery( '.tabs' ).on( 'tabsactivate', function( event, ui ) {
		// 	var gridContainerAvailable = jQuery( ui.newPanel ).find('.grid-container');

		// 	if( gridContainerAvailable.length > 0 ) {
		// 		gridContainerAvailable.each( function(){
		// 			var portfolioGrid = jQuery(this);

		// 			if( !portfolioGrid.hasClass('tabs-enabled-grid-container') ) {
		// 				portfolioGrid.isotope('layout');
		// 				jQuery(window).trigger('resize');
		// 				portfolioGrid.addClass('tabs-enabled-grid-container');
		// 			}
		// 		});
		// 	}
		// });

		// Music playing Scripts
		var trackPlaying = '',
			audioPlayer = document.getElementById('audio-player');

		audioPlayer.addEventListener("ended", function(){
			jQuery('.track-list').find('i').removeClass('icon-pause').addClass('icon-play');
		});

		audioPlayer.addEventListener("pause", function(){
			jQuery('.track-list').find('i').removeClass('icon-pause').addClass('icon-play');
		});

		function changeAudio( sourceUrl, posterUrl, trackTitle, trackSinger, playAudio = true ) {
			var audio = $("#audio-player"),
				clickEl = jQuery('[data-track="'+sourceUrl+'"]'),
				playerId = audio.closest('.mejs__container').attr('id'),
				playerObject = mejs.players[playerId];

			jQuery('.track-list').find('i').removeClass('icon-pause').addClass('icon-play');

			if( sourceUrl == trackPlaying ) {
				if (playerObject.node.paused) {
					playerObject.play();
					clickEl.find('i').removeClass('icon-play').addClass('icon-pause');
				} else {
					playerObject.pause();
					clickEl.find('i').removeClass('icon-pause').addClass('icon-play');
				}
				return true;
			}

			trackPlaying = sourceUrl;

			audio.attr( 'poster', posterUrl );
			audio.attr( 'title', trackTitle );

			jQuery('.mejs__layers').html('').html('<div class="mejs-track-artwork"><img src="'+ posterUrl +'" alt="Track Poster" /></div><div class="mejs-track-details"><h3>'+ trackTitle +'<br><span>'+ trackSinger +'</span></h3></div>');

			if( sourceUrl != '' ) {
				playerObject.setSrc( sourceUrl );
			}
			playerObject.pause();
			playerObject.load();

			if( playAudio == true ) {
				playerObject.play();
				jQuery(clickEl).find('i').removeClass('icon-play').addClass('icon-pause');
			}
		}

		jQuery('.track-list').on( 'click', function(){
			var audioTrack = jQuery(this).attr('data-track'), // Track url
				posterUrl = jQuery(this).attr('data-poster'), // Track Poster Image
				trackTitle = jQuery(this).attr('data-title'); // Track Title
				trackSinger = jQuery(this).attr('data-singer'); // Track Singer Name

			changeAudio( audioTrack, posterUrl, trackTitle, trackSinger );
			return false;
		});

		jQuery(window).on( 'load', function(){
			var trackOnload = jQuery('#track-onload');

			if( trackOnload.length > 0 ) {
				var audioTrack = trackOnload.attr('data-track'), // Track url
					posterUrl = trackOnload.attr('data-poster'), // Track Poster Image
					trackTitle = trackOnload.attr('data-title'); // Track Title
					trackSinger = trackOnload.attr('data-singer'); // Track Singer Name

				setTimeout( function(){
					changeAudio( audioTrack, posterUrl, trackTitle, trackSinger, false );
				}, 500);
			}
		});

	</script>

</body>
</html>
