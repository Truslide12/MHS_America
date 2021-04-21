@php
	$extent = 1; /* Always one section for address */
	$show_business_hours = (count($business_hours) > 0)  && $is_paid_profile;
	$show_contact_details = ($profile->office_tagline || $profile->office_manager != '' || $profile->phone != '' || $profile->fax != '');

	if($show_business_hours) { $extent += 2; }
	if($show_contact_details){ $extent += 1; }

	switch($extent) {
		case 1:
			$extent_address = 12;
			
			$extent_width = 6;
			break;
		case 2:
			$extent_address = 6;
			$extent_contact = 6;

			$extent_width = 6;
			break;
		case 3:
			$extent_address = 3;
			
			$extent_width = 12;
			break;
		case 4:
		default:
			$extent_address = 3;
			$extent_contact = 3;

			$extent_width = 12;
	}
@endphp
<div class="row" id="inforow">
	<div class="col-md-{{ $extent_width }}">
		<div class="panel panel-default panel-flat" id="infobox">
			<div class="panel-body">
				<div class="row">
					<div class="col-md-{{ $extent_address }} hidden-xs hidden-sm">
						<strong>Address</strong>
						<hr>
					</div>
					@if($show_business_hours)
					<div class="col-md-6 hidden-xs hidden-sm">
						<strong>Office Hours</strong>
						<hr>
					</div>
					@endif
					@if($show_contact_details)
					<div class="col-md-{{ $extent_contact }} hidden-xs hidden-sm">
						<strong>Contact Details</strong>
						<hr>
					</div>
					@endif
				</div>
				<div class="row">
					<div class="col-md-12 hidden-md hidden-lg">
						<strong>Address</strong>
						<hr class="no-margin-t">
					</div>
					<div class="col-md-{{ $extent_address }}">
						<p>
							{{ $profile->address }}
						</p>
						<p>
							{{ $city->place_name }}, {{ strtoupper($state->abbr) }} {{ $profile->zipcode }}
						</p>
					</div>
					@if($show_business_hours)
					<div class="col-md-12 hidden-md hidden-lg">
						<strong>Office Hours</strong>
						<hr class="no-margin-t">
					</div>
					<div class="col-md-3">
						@for($x = 0; $x < ceil(count($business_hours)/2); $x++ )<p>
							{{ $business_hours[$x]['title'] }}
							<span class="pull-right"><em>{{ $business_hours[$x]['open'] ? $business_hours[$x]['start'] .' - '. $business_hours[$x]['end'] : 'Closed' }}</em></span>
						</p>@endfor
					</div>
					<div class="col-md-3">
						@for($x = ceil(count($business_hours)/2); $x < count($business_hours); $x++ )<p>
							{{ $business_hours[$x]['title'] }}
							<span class="pull-right"><em>{{ $business_hours[$x]['open'] ? $business_hours[$x]['start'] .' - '. $business_hours[$x]['end'] : 'Closed' }}</em></span>
						</p>@endfor
					</div>
					@endif
					@if($show_contact_details)
					<div class="col-md-12 hidden-md hidden-lg">
						<strong>Contact Details</strong>
						<hr class="no-margin-t">
					</div>
					<div class="col-md-{{ $extent_contact }}">
						@if($profile->office_tagline)<p>
							Managed by
							<span class="pull-right"><em>{{$profile->company->title}}</em></span>
						</p>@elseif($profile->office_manager != '')<p>
							Office Manager
							<span class="pull-right"><em>{{$profile->office_manager}}</em></span>
						</p>@endif
						@if($profile->phone != '')<p>
							Phone
							<span class="pull-right"><em>{{ '('.substr_replace(substr_replace($profile->phone,') ',3,0),'-',8,0) }}</em></span>
						</p>@endif
						@if( $is_paid_profile && $profile->fax != '')<p>
							Fax
							<span class="pull-right"><em>{{ '('.substr_replace(substr_replace($profile->fax,') ',3,0),'-',8,0) }}</em></span>
						</p>@endif
						@if(1==2)
						@if( $is_paid_profile && $profile->office_email != '')<p>
							Email
							<span class="pull-right"><em>{{$profile->office_email}}</em></span>
						</p>@endif
						<p>
							Email
							<span class="pull-right"><em><a href="#" data-toggle="modal" data-target="#sendMessage">Send Message</a></em></span>
						</p>@endif
					</div>
					@endif
				</div>
			</div>
		</div>
	</div>
</div>