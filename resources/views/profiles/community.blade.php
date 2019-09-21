@extends('layouts.master')
@fix-navbar

@section('incls-head')
	<link rel="stylesheet" type="text/css" href="{{ URL::route('welcome') }}/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="{{ URL::route('welcome') }}/css/owl/owl.carousel.min.css">
	<link rel="stylesheet" type="text/css" href="{{ URL::route('welcome') }}/css/owl/owl.theme.default.min.css">
	<link rel="stylesheet" type="text/css" href="{{ URL::route('welcome') }}/css/profile.css">
	<link rel="stylesheet" type="text/css" href="{{ URL::route('welcome') }}/css/widgets.css">
@stop

@section('content-above')
@if($profile->hasCarousel())
<div id="profile-header" class="container {{ ($is_paid_profile && $plan->hasFeature('highlight')) ? 'texture-2' : 'texture-1' }}">
@else
<div id="profile-header" class="container">
@endif
	<div class="row texture-1">
		<div class="col-md-12">
			<h2>
				@if( $is_paid_profile && $plan->hasFeature('highlight'))
				<span class="premium"><i class="glyphicon glyphicon-star"></i></span>
				@endif
				<span style="color: black;">{{ $profile->title }}</span> 
				<small>
					<br class="visible-xs">
					<a href="{{ URL::route('city', array('state' => $state->abbr, 'county' => $county->name, 'city' => $city->name)) }}">
						{{ $city->place_name }}, {{ strtoupper($state->abbr) }}
					</a>
				</small>
			</h2>
		</div>
	</div>
	<div class="row texture-1">
		<div class="col-md-12 padding-b">
		@if(Auth::check())
			@if($can_edit)
			<a href="{{ URL::route('editor', ['profile' => $profile->id]) }}" class="btn btn-labeled btn-default margin-r">
				<span class="btn-label">
					<i class="fa fa-pencil"></i>
				</span>
				Edit profile</span>
			</a>
			@endif
			@if($user->watchesProfile($profile->id))
			<a href="#" data-action="watch" data-relation="profile" data-id="{{ $profile->id }}" class="watch-profile-{{ $profile->id }} btn btn-info margin-r">
				Unwatch<span class="hidden-xs"> community</span>
			</a>
			@else
			<a href="#" data-action="watch" data-relation="profile" data-id="{{ $profile->id }}" class="watch-profile-{{ $profile->id }} btn btn-labeled btn-info margin-r">
				<span class="btn-label">
					<i class="fa fa-star"></i>
				</span>
				Watch<span class="hidden-xs"> community</span>
			</a>
			@endif
			@if(1==2)
			@if($user->kudosProfile($profile->id))
			<a href="#" data-action="kudos" data-relation="profile" data-id="{{ $profile->id }}" class="kudos-profile-{{ $profile->id }} btn btn-success margin-r">
				<i class="fa fa-check"></i> Liked
			</a>
			@else
			<a href="#" data-action="kudos" data-relation="profile" data-id="{{ $profile->id }}" class="kudos-profile-{{ $profile->id }} btn btn-labeled btn-success margin-r">
				<span class="btn-label">
					<i class="fa fa-heart"></i>
				</span>
				Like
			</a>
			@endif
			@endif
		@endif
			@if(1==2)
			<button type="button" class="btn btn-default" data-toggle="modal" data-target="#sendMessage">
				<span class="hidden-xs">Send a message</span>
				<span class="visible-xs-inline" aria-hidden="true">Message</span>
			</button>
			@endif
		</div>
	</div>
</div>
@if( $is_paid_profile && $profile->hasCarousel())
	@include('layouts.partial.profile-carousel')
@endif
@stop

@section('content')
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
							<span class="pull-right"><em>{{ $business_hours[$x]['open'] ? $business_hours[$x]['start'] .' - '. $business_hours[$x]['end'] : 'Closed' }}</em></span>
							{{ $business_hours[$x]['title'] }}
						</p>@endfor
					</div>
					<div class="col-md-3">
						@for($x = ceil(count($business_hours)/2); $x < count($business_hours); $x++ )<p>
							<span class="pull-right"><em>{{ $business_hours[$x]['open'] ? $business_hours[$x]['start'] .' - '. $business_hours[$x]['end'] : 'Closed' }}</em></span>
							{{ $business_hours[$x]['title'] }}
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
							<span class="pull-right"><em>{{$profile->company->title}}</em></span>
							Managed by
						</p>@elseif($profile->office_manager != '')<p>
							<span class="pull-right"><em>{{$profile->office_manager}}</em></span>
							Office Manager
						</p>@endif
						@if($profile->phone != '')<p>
							<span class="pull-right"><em>{{ '('.substr_replace(substr_replace($profile->phone,') ',3,0),'-',8,0) }}</em></span>
							Phone
						</p>@endif
						@if( $is_paid_profile && $profile->fax != '')<p>
							<span class="pull-right"><em>{{ '('.substr_replace(substr_replace($profile->fax,') ',3,0),'-',8,0) }}</em></span>
							Fax
						</p>@endif
						@if(1==2)
						@if( $is_paid_profile && $profile->office_email != '')<p>
							<span class="pull-right"><em>{{$profile->office_email}}</em></span>
							Email
						</p>@endif
						<p>
							<span class="pull-right"><em><a href="#" data-toggle="modal" data-target="#sendMessage">Send Message</a></em></span>
							Email
						</p>@endif
					</div>
					@endif
				</div>
			</div>
		</div>
	</div>
</div>
<div class="row" data-columns id="gridlock">
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
		<!-- Spaces available -->
		@if( $is_paid_profile && $plan->hasFeature('manage_spaces'))
		<div class="panel panel-default">
			<div class="panel-heading">
				<div class="panel-title">
					Spaces Available
				</div>
			</div>
			<div class="panel-body">
				<div class="row">
				@if(count($spaces) > 0)
					@foreach($spaces as $space)
					<div class="col-md-6">
						<div class="space-block">
							<div class="row">
								<div class="section">
									<h3 title="{{ $space->name }}" class="space-title">{{ $space->name }}</h3>
									<div class="label label-default hidden">Status</div>
								</div>
								<div class="section">
									@if($space->width > 0 && $space->length > 0)
									<p class="space-size text-small">{{ $space->size() }}</p>
									<h4 class="space-dimensions">{{ $space->width }} x {{ $space->length }}</h4>
									@else
									<p class="space-size">{{ $space->size() }}</p>
									@endif
								</div>
								@if(Auth::check())
								<div class="section">
									@if(1==1)
									<a href="#" class="btn btn-xs btn-info">Watch</a>
									@else
									<a href="#" class="btn btn-xs btn-danger"><i class="glyphicon glyphicon-remove"></i></a>
									@endif
								</div>
								@endif
							</div>
						</div>
					</div>
					@endforeach
				@else
					<h4 class="text-center text-muted">
						Call for available spaces
					</h4>
				@endif
				</div>
			</div>
		</div>
		@endif
		<!-- Homes available -->
		@if(count($homes) > 0)
		<div class="panel panel-default">
			<div class="panel-heading">
				<div class="panel-title">
					Homes Available
				</div>
			</div>
			<div class="panel-body">
				@foreach($homes as $home)
				@include('layouts.partial.home-block-small')
				@endforeach
			</div>
		</div>
		@endif
		<!-- Social Box -->
		@if(count($homes) > 0)
		<div class="panel panel-default">
			<div class="panel-heading">
				<div class="panel-title">
					Social Media
				</div>
			</div>
			<div class="panel-body">
				@php
					$tlink = str_replace("https://", "http://", $profile->socialmedia("promovideo") );
					preg_match('%(?:youtube(?:-nocookie)?\.com/(?:[^/]+/.+/|(?:v|e(?:mbed)?)/|.*[?&]v=)|youtu\.be/)([^"&?/ ]{11})%i', $tlink, $match);
					if ( array_key_exists(1, $match) ) {
						$youtube_id = $match[1];
					} else {
						$youtube_id = false;
					} 
				@endphp
				@if( $youtube_id )
				<div class="ytcontainer">
				<iframe width="100%" src="https://www.youtube.com/embed/{{ $youtube_id }}" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" class="ytvideo" allowfullscreen></iframe>
				</div>
				@else( $profile->socialmedia("promovideo") )
				<video width="100%" controls>
					<source src="{{ $profile->socialmedia('promovideo') }}" type="video/mp4">
				</video>
				@endif
				<div class="" style="display: flex;width: 100%;font-size: 1em;">
				@if( $profile->socialmedia("website") )<a target="_blank" href="{{ $profile->socialmedia('website') }}" class="btn btn-primary" style="flex:1;" rel="nofollow"><i class="fa fa-globe"></i> Website</a>@endif
				@if( $profile->socialmedia("facebook") )<a target="_blank" href="{{ $profile->socialmedia('facebook') }}" class="btn btn-primary" style="flex:1;" rel="nofollow"><i class="fa fa-facebook"></i> Facebook</a>@endif
				@if( $profile->socialmedia("twitter") )<a target="_blank" href="{{ $profile->socialmedia('twitter') }}" class="btn btn-primary" style="flex:1;" rel="nofollow"><i class="fa fa-twitter"></i> Twitter</a>@endif
				@if( $profile->socialmedia("linkedin") )<a target="_blank" href="{{ $profile->socialmedia('linkedin') }}" class="btn btn-primary" style="flex:1;" rel="nofollow"><i class="fa fa-instagram"></i> Instagram</a>@endif
				@if( $profile->socialmedia("instagram") )<a target="_blank" href="{{ $profile->socialmedia('instagram') }}" class="btn btn-primary" style="flex:1;" rel="nofollow"><i class="fa fa-linkedin"></i> Linkedin</a>@endif
				</div>
			</div>
		</div>
		@endif
	</div>
</div>
@if(isset($company) && is_object($company) && 1==2)
<div class="container margin-b-wide">
	<div class="row">
		<div class="col-md-12">
			<p class="text-center">
				<small><em>{{ preg_replace('/(^| )A ([aeiouAEIOU])/', '$1An $2', 'A '.$company->title.' Property' ) }}</em></small>
			</p>
		</div>
	</div>
</div>
@endif
<!-- Modal -->
<div class="modal fade" id="sendMessage" tabindex="-1" role="dialog" aria-labelledby="sendMessageTitle" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" id="sendMessageTitle">Send message to {{ $profile->title }}</h4>
      </div>
      <div class="modal-body">
        <textarea style="width:100%" rows="10"></textarea>
      </div>
      <div class="modal-footer">
      	@if(isset($company) && is_object($company))
      	<p class="text-left pull-left">
      		This is {{ preg_replace('/(^| )a ([aeiouAEIOU])/', '$1an $2', 'a '.$company->title.' property' ) }}.<br>
      		<a href="{{ URL::route('company', array('company' => $company->id)) }}">Send message to {{ $company->title }} instead</a>
      	</p>
      	@endif
        <button type="button" class="btn btn-primary">Send Message</button>
        <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
      </div>
    </div>
  </div>
</div>
@stop

@section('incls-body')
<script type="text/javascript" src="{{ URL::route('welcome') }}/js/salvattore.min.js"></script>
<script type="text/javascript" src="{{ URL::route('welcome') }}/js/mhs.interface.js"></script>
<script type="text/javascript" src="{{ URL::route('welcome') }}/js/owl/owl.carousel.min.js"></script>
<script type="text/javascript">
	pony.add(function() {
		$('.owl-carousel').owlCarousel({
			items:1,
			lazyLoad:true,
			loop:true,
			nav:true,
			autoplay:true,
			autoplayHoverPause:true
		});

		if($('#infobox').parent().hasClass('col-md-6')) {
			$('#infobox').detach().prependTo('#gridlock > div:nth-child(1)');
			$('#inforow').remove();
			var grid = document.getElementById('gridlock');
			salvattore.recreateColumns(grid);
		}
	});

</script>
@stop