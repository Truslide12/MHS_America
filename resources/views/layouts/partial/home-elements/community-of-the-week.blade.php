	<div class="row clearfix nudge white" style="padding:25px 0;padding-bottom: 1in;">



		<div class="comm_week_box">
			<div class="comm_week_banner">
				<img src="/imgstorage/cover_{{$community_of_week->cover}}_crop.jpg" style="width: 100%">
				<div class="comm_week_label">Community of the Week</div>
			</div>
			<div class="comm_week_text">
				<div class="clearfix" style="padding-bottom: 10px;">
				<strong style="float: left;font-size: 1.25em;font-family: Voltaire;">{{ $community_of_week->title }}</strong>
				<strong style="float: right;font-size: 1.25em;font-family: Voltaire;">Community of the Week - {{ $community_of_week->week }}</strong>
				</div>
				{!! $community_of_week->description !!}
			</div>
		</div>
	</div>