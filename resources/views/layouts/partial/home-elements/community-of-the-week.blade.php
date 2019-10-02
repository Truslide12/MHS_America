
<!-- Start Community of the Week section -->
	<div class="row clearfix nudge white community-of-the-week-section">
		<div class="page-header no-margin-t visible-xs">
			<h1 class="no-margin-t text-center" style="text-transform: capitalize;font-family:Voltaire;">Community of the Week</h1>
		</div>
		<div class="comm_week_box">
			<div class="comm_week_banner">
				<a href="/profile/{{ $community_of_week->id }}"><img src="/imgstorage/cover_{{$community_of_week->cover}}_crop.jpg"></a>
				<div class="comm_week_label">Community of the Week</div>
			</div>
			<div class="comm_week_text">
				<div class="clearfix">
				<strong>{{ $community_of_week->title }}</strong>
				<strong>Community of the Week - {{ $community_of_week->week }}</strong>
				</div>
				{!! $community_of_week->description !!}
			</div>
		</div>
	</div>
<!-- End Community of the Week section -->
