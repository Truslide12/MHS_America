<div class="panel panel-default">
			<div class="panel-heading">
				<div class="panel-title">
					Community Information
				</div>
			</div>
			<div class="panel-body">
				@if($profile->age_type == 2)
				<div class="brick brick-gray">
					<strong>Senior</strong>
				</div>
				@elseif($profile->age_type == 1)
				<div class="brick brick-gray">
					<strong>55+</strong>
				</div>
				@elseif($profile->age_type === 0)
				<div class="brick brick-gray">
					<strong>All Ages</strong>
				</div>
				@endif
			@if($profile->company_id > 0)
				@if($is_paid_profile)
				@if($profile->rent > 0)
				<div class="brick">
					${{ $profile->rent }} /mo
				</div>
				@else
				<div class="brick">
					Call for pricing
				</div>
				@endif
				@if($profile->spaces > 0)
				<div class="brick">
					{{ $profile->spaces }} total spaces
				</div>
				@endif
				@if($profile->pets == 1)
				<div class="brick">
					Pets allowed
				</div>
				@endif
				@if($profile->gated == 1)
				<div class="brick">
					Gated community
				</div>
				@endif
				@if($profile->neighborhood == 1)
				<div class="brick">
					Neighborhood watch
				</div>
				@endif

				@endif

				@if( $is_paid_profile )
				@if($profile->utility("water") == 1)
				<div class="brick">
					City Water
				</div>
				@elseif($profile->utility("water") == 2)
				<div class="brick">
					Well Water
				</div>
				@endif
				@if($profile->utility("sewer") == 1)
				<div class="brick">
					Sewer
				</div>
				@elseif($profile->utility("sewer") == 2)
				<div class="brick">
					Septic
				</div>
				@endif
				@if($profile->utility("gas") == 1)
				<div class="brick">
					Natural Gas
				</div>
				@elseif($profile->utility("gas") == 2)
				<div class="brick">
					Propane Gas
				</div>
				@endif
				@endif

				@if( $is_paid_profile && trim($profile->description) != '')
				<p>{{ $profile->description }}</p>
				@endif

			@endif
			</div>
		</div>