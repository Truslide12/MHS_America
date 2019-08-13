<?php $photos = $profile->photos()->orderBy('created_at', 'desc')->take(5)->get(); ?>
<div class="container texture-2" style="border-bottom:4px solid #999;">
	<div class="row">
		<div class="col-md-12 no-padding-x">
			<div id="community-carousel" class="carousel slide" data-ride="carousel">
				<!-- Indicators -->
				<ol class="carousel-indicators">
					@for($x=0;$x<count($photos);$x++)
					<li data-target="#community-carousel" data-slide-to="{{ $x }}"@if($x == 0) class="active" @endif></li>
					@endfor
				</ol>

				<!-- Wrapper for slides -->
				<div class="carousel-inner">
					<?php $photo_class = 'item active'; ?>
					@foreach($photos as $photo)
					<div class="{{ $photo_class }}">
						<img src="/imgstorage/cover_{{ $photo->cover }}_crop.jpg" alt="{{ ($photo->title == '') ? '' : $photo->title }}">
					</div>
					<?php $photo_class = 'item'; ?>
					@endforeach
				</div>

				<!-- Controls -->
				<a class="left carousel-control" href="#community-carousel" role="button" data-slide="prev">
					<span class="glyphicon glyphicon-chevron-left"></span>
				</a>
				<a class="right carousel-control" href="#community-carousel" role="button" data-slide="next">
					<span class="glyphicon glyphicon-chevron-right"></span>
				</a>
			</div>
		</div>
	</div>
</div>
<div class="container texture-2">
	<div class="row">
		<div class="col-md-12 no-padding-x">
			<div class="owl-carousel owl-theme">
				@foreach($photos as $photo)
				<div><img src="/imgstorage/cover_{{ $photo->cover }}_crop.jpg" alt="{{ ($photo->title == '') ? '' : $photo->title }}"></div>
				@endforeach
			</div>
		</div>
	</div>
</div>