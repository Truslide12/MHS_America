<!-- Amenities available -->
		@if( $is_paid_profile && $plan->hasFeature('manage_amenities') && $profile->hasAmenities() )
		<div class="panel panel-default">
			<div class="panel-heading">
				<div class="panel-title">
					Community Amenities
				</div>
			</div>
			<div class="panel-body">
				@foreach($profile->getAmenities() as $amen )
				<div class="brick">
					{{ $profile->getAmenity($amen)->title }}
				</div>
				@endforeach
			</div>
		</div>
		@endif