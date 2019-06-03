@extends('layouts.master')
@fix-navbar

@section('incls-head')
	<link rel="stylesheet" type="text/css" href="{{ URL::route('welcome') }}/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="{{ URL::route('welcome') }}/css/profile.css">
	<link rel="stylesheet" type="text/css" href="{{ URL::route('welcome') }}/css/widgets.css">
@stop

@section('content-above')
@if($profile->hasCarousel())
<div id="profile-header" class="container {{ $plan->hasFeature('highlight') ? 'texture-2' : 'texture-1' }}">
@else
<div id="profile-header" class="container">
@endif
	<div class="row texture-1">
		<div class="col-md-12">
			<h2>
				@if($plan->hasFeature('highlight'))
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
			<p class="lead">{{ $profile->tagline }}</p>
		</div>
	</div>
	<div class="row texture-1">
		<div class="col-md-12 padding-b">
		@if(Auth::check())
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
@if($profile->hasCarousel())
	@include('layouts.partial.profile-carousel')
@endif
@stop

@section('content')
<div class="row">
	<div class="col-md-12">
		<div class="panel panel-default panel-flat">
			<div class="panel-body">
				<div class="row">
					<div class="col-md-3 hidden-xs hidden-sm">
						<strong>Address</strong>
						<hr>
					</div>
					<div class="col-md-6 hidden-xs hidden-sm">
						<strong>Office Hours</strong>
						<hr>
					</div>
					<div class="col-md-3 hidden-xs hidden-sm">
						<strong>Contact Details</strong>
						<hr>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12 hidden-md hidden-lg">
						<strong>Address</strong>
						<hr class="no-margin-t">
					</div>
					<div class="col-md-3">
						<p>
							{{ $profile->address }}
						</p>
						<p>
							{{ $city->place_name }}, {{ strtoupper($state->abbr) }} {{ $city->zipcode }}
						</p>
					</div>
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
					<div class="col-md-12 hidden-md hidden-lg">
						<strong>Contact Details</strong>
						<hr class="no-margin-t">
					</div>
					<div class="col-md-3">
						@if($profile->phone != '')<p>
							<span class="pull-right"><em>{{ phone($profile->phone, 'US', 2) }}</em></span>
							Phone
						</p>@endif
						@if($profile->fax != '')<p>
							<span class="pull-right"><em>{{ phone($profile->fax, 'US', 2) }}</em></span>
							Fax
						</p>@endif
						@if(1==2)<p>
							<span class="pull-right"><em><a href="#" data-toggle="modal" data-target="#sendMessage">Send Message</a></em></span>
							Email
						</p>@endif
					</div>
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
				@if($profile->senior == 1)
				<div class="brick brick-gray">
					<strong>Senior</strong>
				</div>
				@else
				<div class="brick brick-gray">
					<strong>All Ages</strong>
				</div>
				@endif
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
			</div>
		</div>
		<div class="panel panel-default">
			<div class="panel-heading">
				<div class="panel-title">
					About Our Community
				</div>
			</div>
			<div class="panel-body">
				@if(trim($profile->description) == '')
				<h4 class="text-center text-muted">
					No description
				</h4>
				@else
				{{ $profile->description }}
				@endif
			</div>
		</div>
		@if($plan->hasFeature('manage_amenities') || $profile->hasAmenities())
		<div class="panel panel-default">
			<div class="panel-heading">
				<div class="panel-title">
					Community Amenities
				</div>
			</div>
			<div class="panel-body">
				@if($profile->rec == 1)
				<div class="brick">
					Clubhouse
				</div>
				@endif
				@if($profile->pool == 1)
				<div class="brick">
					Pool
				</div>
				@endif
				@if($profile->fitness == 1)
				<div class="brick">
					Fitness center
				</div>
				@endif
				@if($profile->picnic == 1)
				<div class="brick">
					Picnic area
				</div>
				@endif
				@if($profile->playground == 1)
				<div class="brick">
					Playground
				</div>
				@endif
				@if($profile->storage == 1)
				<div class="brick">
					Storage
				</div>
				@endif
				@if($profile->basketball == 1)
				<div class="brick">
					Basketball
				</div>
				@endif
				@if($profile->tennis == 1)
				<div class="brick">
					Tennis
				</div>
				@endif
				@if($profile->golf == 1)
				<div class="brick">
					Golf
				</div>
				@endif
				@if($profile->shuffleboard == 1)
				<div class="brick">
					Shuffleboard
				</div>
				@endif
				@if($profile->bingo == 1)
				<div class="brick">
					Bingo
				</div>
				@endif
				@if($profile->fishing == 1)
				<div class="brick">
					Fishing
				</div>
				@endif
			</div>
		</div>
		@endif
		<!-- Spaces available -->
		@if($plan->hasFeature('manage_spaces'))
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
		@if($profile->plan->hasFeature('manage_homes') && count($homes) > 0)
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
@stop