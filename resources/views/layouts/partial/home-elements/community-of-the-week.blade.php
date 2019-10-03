@if(is_object($cow_state))
<!-- Start Community of the Week section -->
	<div class="row clearfix nudge white community-of-the-week-section">
		<div class="page-header no-margin-y visible-xs">
			<h1 class="no-margin-t text-center" style="text-transform: capitalize;font-family:Voltaire;">Featured Community</h1>
		</div>
		<div class="comm_week_box">
			<div class="comm_week_banner">
				<a href="/profile/{{ $community_of_week->id }}"><img src="/imgstorage/cover_{{$community_of_week->cover}}_crop.jpg"></a>
				<div class="comm_week_label">Featured Community</div>
			</div>
			<div class="comm_week_text">
				<div class="clearfix">
				<strong><a href="/profile/{{ $community_of_week->id }}">{{ $community_of_week->title }}</a>@if(is_a($cow_city, \App\Models\Geoname::class) && is_a($cow_county, \App\Models\County::class) && is_a($cow_state, \App\Models\State::class)) <small><a href="{{ URL::route('city', array('state' => $cow_state->abbr, 'county' => $cow_county->name, 'city' => $cow_city->name)) }}">
						{{ $cow_city->place_name }}, {{ strtoupper($cow_state->abbr) }}
					</a></small>@endif </strong>
				</div>
				{{ $community_of_week->description }}
			</div>
		</div>
	</div>
<!-- End Community of the Week section -->
@endif