
<!DOCTYPE html>
<html dir="ltr" lang="en-US">
<head>

	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="author" content="SemiColonWeb" />

	<!-- Stylesheets
	============================================= -->
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="{{asset('forum/css/bootstrap.css')}}" type="text/css" />
	<link rel="stylesheet" href="{{asset('forum/style.css')}}" type="text/css" />

	<link rel="stylesheet" href="{{asset('forum/css/dark.css')}}" type="text/css" />
	<link rel="stylesheet" href="{{asset('forum/css/font-icons.css')}}" type="text/css" />
	<link rel="stylesheet" href="{{asset('forum/css/animate.css')}}" type="text/css" />
	<link rel="stylesheet" href="{{asset('forum/css/magnific-popup.css')}}" type="text/css" />

	<link rel="stylesheet" href="{{asset('forum/css/custom.css')}}" type="text/css" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />

	<link rel="stylesheet" href="{{asset('forum/css/colors.php?color=F9BE79.css')}}" type="text/css" />

	<!-- Forum Demo Specific Stylesheet -->
	<link rel="stylesheet" href="{{asset('forum/demos/forum/forum.css')}}" type="text/css" /> <!-- Forum Custom Css -->
	<link rel="stylesheet" href="{{asset('forum/demos/forum/css/fonts.css')}}" type="text/css" /> <!-- Forum Custom Fonts -->
	<!-- / -->

	<!-- Document Title
	============================================= -->
	<title>{{ env('APP_NAME') }} | Webfocus</title>

</head>

<body class="stretched search-overlay">

	<!-- Document Wrapper
	============================================= -->
	<div id="wrapper" class="clearfix">

		<!-- Modal -->
		<div class="modal fade" id="modal-signin" tabindex="-1" aria-labelledby="modal-signin" aria-hidden="true">
			<div class="modal-dialog modal-dialog-centered modal-lg">
				<div class="modal-content bg-white p-4 p-md-5 rounded">
					<h3 class="h2 fw-bolder mb-4">Create a New Topic</h3>
					<form class="row mb-0" action="#" method="post" enctype="multipart/form-data">
						<div class="col-12 form-group mb-4">
							<textarea name="post-message" id="post-message" class="form-control" cols="30" rows="10"></textarea>
						</div>
						<div class="clear"></div>
						<div class="col-6 form-group">
							<small class="text-muted">Maximum file size allowed is 2048 KB.</small>
							<div class="form-file">
								<input type="file" class="form-control" id="file-input">
							</div>
						</div>
						<div class="clear"></div>
						<div class="col-12 form-group mb-1">
							<div class="form-check form-check-inline">
								<input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
								<label class="form-check-label nott ls0 mb-0 fw-semibold" for="inlineCheckbox1">Set as a Private Reply</label>
							</div>
						</div>
						<div class="clear"></div>
						<div class="col-12 form-group">
							<div class="form-check form-check-inline">
								<input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
								<label class="form-check-label nott ls0 mb-0 fw-semibold" for="inlineCheckbox2">Email me when Someone Replies</label>
							</div>
						</div>
						<div class="col-12">
							<button type="submit" name="submit" class="button button-large bg-alt border border-width-2 rounded-1 fw-medium nott ls0 ms-0">Submit Now</button>

							<button type="button" data-bs-dismiss="modal" aria-label="Close" class="button button-large button-border border-default h-bg-danger rounded-1 fw-medium nott ls0 ms-0">Cancel</button>
						</div>
					</form>
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
	<script src="{{asset('forum/js/jquery.js')}}"></script>
	<script src="{{asset('forum/js/plugins.min.js')}}"></script>

	<!-- TinyMCE Plugin -->
	<script src="{{asset('forum/js/components/tinymce/tinymce.min.js')}}"></script>

	<!-- Footer Scripts
	============================================= -->
	<script src="{{asset('forum/js/functions.js')}}"></script>

	<script>
		jQuery(document).ready( function(){

			$('input[type="file"]').change(function(e){
				var fileName = e.target.files[0].name;
				$('.custom-file-label').html(fileName);
			});

			tinymce.init({
				selector: '#post-message',
				menubar: false,
				setup: function(editor) {
					editor.on('change', function(e) {
						editor.save();
					});
				}
			});

			$(function(){
		      if(window.location.hash) {
		          var hash = window.location.hash;
		          $(hash).modal('toggle');
		      }
		  });
		});
	</script>

	</body>
	</html>
