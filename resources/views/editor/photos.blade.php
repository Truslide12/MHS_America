@extends('layouts.master')
@fix-navbar
@use-navbar-divider

@section('incls-head-early')

<link rel="stylesheet" type="text/css" href="{{ URL::route('welcome') }}/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="{{ URL::route('welcome') }}/css/croppic.css">
<link rel="stylesheet" type="text/css" href="{{ URL::route('welcome') }}/css/widgets.css">
@stop

@section('content')
<div class="row white">
	<div class="col-md-12">
		<a href="{{ URL::route('editor', array('profile' => $profile->id, 'from_company' => Input::get('from_company'))) }}" class="btn btn-default pull-right visible-xs visible-sm">Go back</a>
		<a href="{{ URL::route('editor', array('profile' => $profile->id, 'from_company' => Input::get('from_company'))) }}" class="btn btn-default pull-right push-down hidden-xs hidden-sm">Go back</a>
		<h3>Profile manager</h3>
		<h4>
			<a href="{{ URL::route('editor', array('profile' => $profile->id, 'from_company' => Input::get('from_company'))) }}">{{ $profile->title }}</a> <small><i class="fa fa-chevron-right"></i></small> 
			Cover Photos
		</h4>
		<hr>
	</div>
</div>
@if($plan->hasFeature('manage_photos'))
<div class="row white">
	<div class="col-md-12">
		<p class="pull-right no-margin-b">
			<a href="{{ URL::route('profile', ['profile' => $profile->id]) }}" class="btn btn-lg btn-default" target="_blank">View profile</a> 
			<a href="#" class="btn btn-lg btn-primary" data-toggle="modal" data-target="#coverEditorBox">Add a photo</a>
		</p>
		<div class="clearfix"></div>
		<hr>
		@if(Session::has('success'))
		<div class="alert alert-success">{{ Session::get('success') }}</div>
		@endif
		<div class="alert alert-success" id="cropSuccessNote" style="display:none;">The cover photo was successfully saved. Refreshing...</div>
		<div class="panel panel-default shadow" id="photoNone" @if($photos->count() > 0) style="display:none;" @endif>
			<div class="panel-body">
				<br>
				<br>
				<h3 class="text-center"><em>You haven't added any cover photos!</em></h3>
				<br>
				<br>
			</div>
		</div>
		<div class="row" id="photoList">
			@if($photos->count() > 0)
			@foreach($photos as $photo)
			<div class="col-md-12" id="coverPhotoItem{{ $photo->id }}">
				<div class="photo-block">
					<div class="row">@if(1==2)
						<div class="col-md-12">
							<h4 class="text-muted margin-y">{{ ($photo->title == '') ? 'Untitled' : $photo->title }}</h4>
						</div>@endif
						<div>
							<img src="{{ URL::route('welcome') }}/imgstorage/cover_{{ $photo->cover }}_crop.jpg" class="img-responsive">
						</div>
						<div class="pull-right">
								@if(1==2)<a href="#" class="btn btn-sm btn-info pull-left">
									Re-crop &amp; edit info
								</a>@endif
								<a href="#" class="btn btn-sm btn-danger btn-remove pull-left margin-l-5" data-action="remove" data-id="{{ $photo->id }}" data-profile="{{ $photo->profile_id }}">
									Remove
								</a>
							</div>
					</div>
				</div>
			</div>
			@endforeach
			@endif
		</div>
	</div>
</div>
@else
<div class="row white">
	<div class="col-md-offset-2 col-md-8">
		<form class="form-horizontal" action="" method="POST" >
			<div class="panel panel-default">
				<div class="panel-body">
					<p class="lead text-center">
						{{ $profile->title }} is currently on the {{ $plan->title }} Plan.
					</p>
					<p class="lead text-center">
						To add cover photos, please upgrade your profile.<br>It's quick, easy, and affordable.
					</p>
					<div class="text-center">
						<a href="#" class="btn btn-lg btn-success">
							<strong>Get started today</strong>
						</a>
					</div>
					<div class="clearfix"></div>
				</div>
			</div>
		</form>
	</div>
</div>
@endif
@stop

@section('content-below')
<div class="modal fade" id="coverEditorBox" role="modal" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<h4 class="modal-title">Upload Cover Photo</h4>
			</div>
			<div class="modal-body">
				<div class="row">
					<div class="col-sm-12 margin-b">
						<button type="button" class="btn btn-primary" id="photoCropButton">Choose file...</button>
						<div class="alert alert-info" id="cropNote" style="display:none;">File uploaded. Please crop the photo to finish saving it.</div>
					</div>
					<div class="col-sm-12">
						<div id="photoUpload"></div>
					</div>
				</div>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-sm btn-default" data-dismiss="modal">Close</button>
			</div>
		</div><!-- /.modal-content -->
	</div><!-- /.modal-dialog -->
</div><!-- /.modal -->
@stop

@section('incls-body')
<style type="text/css">
	#photoUpload{
		width: 320px;
		height: 112px;
		position: relative;
		margin: 0 0 20px;
		border: 3px solid #779;
		box-sizing: content-box;
		-moz-box-sizing: content-box;
		/* border-radius: 2px;
		box-shadow: 8px 8px 0px rgba(0,0,0,0.1); */
		overflow:hidden;
		/* background: #fff url() top left no-repeat; */
		background:#ccf;
	}
	#coverEditorBox{
		background:rgba(0,0,0,0.65);
	}
</style>
<script type="text/javascript" src="{{ URL::route('welcome') }}/js/mhs.editor.photos.js"></script>
<script	type="text/javascript" src="{{ URL::route('welcome') }}/js/jquery.mousewheel.min.js"></script>
<script type="text/javascript" src="{{ URL::route('welcome') }}/js/croppic.min.js"></script>
<script type="text/javascript">
//var imageCrop=function(e,t,i){function o(){H.onload=function(){return H.width<t||H.height<i?(console.log("Image Crop error: The required dimensions are larger than the target image."),!1):($(e).wrap('<div class="ic-container"></div>').before('                <div class="ic-overlay-n" id="icOverlayN"></div>                <div class="ic-overlay-e" id="icOverlayE"></div>                <div class="ic-overlay-s" id="icOverlayS"></div>                <div class="ic-overlay-w" id="icOverlayW"></div>                <div class="ic-crop-marker" id="icCropMarker">                    <div class="ic-resize-handle-nw" id="icResizeHandleNW"></div>                    <div class="ic-resize-handle-ne" id="icResizeHandleNE"></div>                    <div class="ic-resize-handle-sw" id="icResizeHandleSW"></div>                    <div class="ic-resize-handle-se" id="icResizeHandleSE"></div>                    <div class="ic-move-handle" id="icMoveHandle"></div>                </div>            '),l=$("#icCropMarker"),u=$(e),f=H.width/u.width(),g=H.width/H.height,v=t/i,p=t/f,w=i/f,z(),s(),l.on("mousedown touchstart",n),l.on("mousedown touchstart","#icMoveHandle",d),void R.resolve())},H.src=e.src}function n(e){e.preventDefault(),e.stopPropagation(),C(e),m.on("mousemove touchmove",c),m.on("mouseup touchend",r)}function r(e){e.preventDefault(),m.off("mouseup touchend",r),m.off("mousemove touchmove",c)}function c(e){var o,n,r,c,d={},h=l.outerWidth(),a=l.outerHeight(),f=l.position();d.x=(e.clientX||e.pageX||e.originalEvent.touches[0].clientX)+$(window).scrollLeft(),d.y=(e.clientY||e.pageY||e.originalEvent.touches[0].clientY)+$(window).scrollTop();var g=!1,v=!1,m=!1,H=!1;$(y.evnt.target).is("#icResizeHandleSE")?g=!0:$(y.evnt.target).is("#icResizeHandleSW")?v=!0:$(y.evnt.target).is("#icResizeHandleNW")?m=!0:$(y.evnt.target).is("#icResizeHandleNE")&&(H=!0),g?(o=d.x-y.containerLeft-u.offset().left,n=o/t*i,r=y.containerLeft,c=y.containerTop):v?(o=y.containerWidth-(d.x-y.containerLeft-u.offset().left),n=o/t*i,r=d.x-u.offset().left,c=y.containerTop):m?(o=y.containerWidth-(d.x-y.containerLeft-u.offset().left),n=o/t*i,r=d.x-u.offset().left,c=f.top+a-n):H&&(o=d.x-y.containerLeft-u.offset().left,n=o/t*i,r=y.containerLeft,c=f.top+a-n),c>=0&&r>=0&&Math.round(c+n)<=Math.round(u.height())&&Math.round(r+o)<=Math.round(u.width())&&(W=!0),W&&(0>c?(n=a+f.top,o=n/i*t,c=0,m&&(r=f.left-(o-h)),W=!1):0>r?(o=h+f.left,n=o/t*i,r=0,g&&(c=f.top-(n-a)),W=!1):Math.round(c+n)>Math.round(u.height())?(n=u.height()-c,o=n/i*t,v&&(r=f.left-(o-h)),W=!1):Math.round(r+o)>Math.round(u.width())&&(o=u.width()-r,n=o/t*i,H&&(c=f.top-(n-a)),W=!1),o>p&&n>w?(l.outerWidth(o).outerHeight(n),l.css({left:r,top:c})):((v||m)&&(r-=p-o),(m||H)&&(c-=w-n),l.outerWidth(p).outerHeight(w),l.css({left:r,top:c}))),s()}function d(e){e.preventDefault(),e.stopPropagation(),C(e),m.on("mousemove touchmove",a),m.on("mouseup touchend",h)}function h(e){e.preventDefault(),m.off("mouseup touchend",h),m.off("mousemove touchmove",a)}function a(e){var t,i,o,n={};e.preventDefault(),e.stopPropagation(),o=e.originalEvent.touches,n.x=(e.clientX||e.pageX||o[0].clientX)+$(window).scrollLeft(),n.y=(e.clientY||e.pageY||o[0].clientY)+$(window).scrollTop(),t=n.y-(y.mouseY-y.containerTop),i=n.x-(y.mouseX-y.containerLeft),0>t&&(t=0),t+l.outerHeight()>u.height()&&(t=u.height()-l[0].getBoundingClientRect().height),0>i&&(i=0),i+l.outerWidth()>u.width()&&(i=u.width()-l[0].getBoundingClientRect().width),l.css({top:t,left:i}),s()}function s(){var e=u[0].getBoundingClientRect().width,t=(u[0].getBoundingClientRect().height,l.position().top),i=l.position().left,o=l[0].getBoundingClientRect().width,n=l[0].getBoundingClientRect().height;parseFloat(l.css("border-top-width"));$("#icOverlayN").css({right:e-i-o,height:t,left:i}),$("#icOverlayE").css({left:i+o}),$("#icOverlayS").css({right:e-i-o,top:t+n,left:i}),$("#icOverlayW").css({width:i})}var l,u,f,g,v,p,w,m=$(document),H=new Image,e=$(e).get(0),y={},W=!0,M=!1,R=new $.Deferred;H.crossOrigin="Anonymous",document.addEventListener("keydown",function(e){var t,i,o,t=l.position().top,i=l.position().left;o=e.shiftKey?10:1,37===e.keyCode?i-=o:38===e.keyCode?t-=o:39===e.keyCode?i+=o:40===e.keyCode&&(t+=o),0>t&&(t=0),t+l.outerHeight()>u.height()&&(t=u.height()-l[0].getBoundingClientRect().width),0>i&&(i=0),i+l.outerWidth()>u.width()&&(i=u.width()-l[0].getBoundingClientRect().width),M&&(l.css({top:t,left:i}),s())}),m.click(function(e){M=$(e.target).closest(".ic-container").length?!0:!1});var C=function(e){y.containerWidth=l.outerWidth(),y.containerHeight=l.outerHeight(),y.containerLeft=l.position().left,y.containerTop=l.position().top,y.mouseX=(e.clientX||e.pageX||e.originalEvent.touches[0].clientX)+$(window).scrollLeft(),y.mouseY=(e.clientY||e.pageY||e.originalEvent.touches[0].clientY)+$(window).scrollTop(),y.evnt=e},z=function(){v>g?(l.outerWidth(u.width()),l.outerHeight(l.outerWidth()/t*i),l.css({top:(u.height()-l.height())/2+"px",left:0})):(l.outerHeight(u.height()),l.outerWidth(l.outerHeight()/i*t),l.css({left:(u.width()-l.width())/2+"px",top:0}))};this.crop=function(){var e,o=new Image,n=H.width/u.width(),r=Math.round(l.position().left*n),c=Math.round(l.position().top*n),d=Math.round(l.outerWidth()*n),h=Math.round(l.outerHeight()*n);e=document.createElement("canvas"),e.width=t,e.height=i,e.getContext("2d").drawImage(H,r,c,d,h,0,0,t,i),o.src=e.toDataURL();var a={img:o,left:r,top:c,width:d,height:h,requiredWidth:t,requiredHeight:i};return a},this.position=function(e,t,i,o){$.when(R).done(function(){var n=H.width/u.width();e=Math.round(e/n),t=Math.round(t/n),i=Math.round(i/n),o=Math.round(o/n),l.outerWidth(i).outerHeight(o),l.css({left:e,top:t}),s()})},this.cropReset=function(){z(),s()},$(window).resize(function(){f=H.width/u.width(),p=t/f,w=i/f,z(),s()}),o()};

	$(function() {
		var croppicHeaderOptions = {
			uploadData:{
				"from_company": 0,
				"_token": $('meta[name=formtoken]').attr('content'),
			},
			cropData:{
				"from_company": 0,
				"_token": $('meta[name=formtoken]').attr('content'),
			},
			uploadUrl:'{{ URL::route('editor-photos-upload-post', ['profile' => $profile->id]) }}',
			cropUrl:'{{ URL::route('editor-photos-crop-post', ['profile' => $profile->id, 'from_company' => Input::get('from_company', 0)]) }}',
			customUploadButtonId:'photoCropButton',
			modal:false,
			loaderHtml:'<div class="loader bubblingG"><span id="bubblingG_1"></span><span id="bubblingG_2"></span><span id="bubblingG_3"></span></div> ',
			onAfterImgUpload: function(){ $('#cropNote').show(); },
			onAfterImgCrop: function(){ $('#coverEditorBox').modal('hide'); $('#cropSuccessNote').show(); setTimeout(function() { location.reload(true); }, 3000); }
			/* onBeforeImgUpload: function(){ console.log('onBeforeImgUpload') },
			onImgDrag: function(){ console.log('onImgDrag') },
			onImgZoom: function(){ console.log('onImgZoom') },
			onBeforeImgCrop: function(){ console.log('onBeforeImgCrop') }, */
		}	
		var croppic = new Croppic('photoUpload', croppicHeaderOptions);

		$('#coverEditorBox').on('shown.bs.modal', function() {
			$('#photoUpload').width(Math.floor($('#photoUpload').parent().width() - 6));
			$('#photoUpload').height(Math.ceil( $('#photoUpload').width() * 0.35 ));
			croppic.reset();
		});

		$('#coverEditorBox').on('hidden.bs.modal', function() {
			$('#cropNote').hide();
			croppic.reset();
		});
	});
</script>
@stop