@extends('layouts.master')
@fix-navbar

@section('incls-head')
	<link rel="stylesheet" type="text/css" href="{{ URL::route('welcome') }}/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="{{ URL::route('welcome') }}/css/profile.css">
	<link rel="stylesheet" type="text/css" href="{{ URL::route('welcome') }}/css/widgets.css">
@stop

@section('content-above')
<div id="profile-header" class="container">
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
				Unwatch<span class="hidden-xs"> dealer</span>
			</a>
			@else
			<a href="#" data-action="watch" data-relation="profile" data-id="{{ $profile->id }}" class="watch-profile-{{ $profile->id }} btn btn-labeled btn-info margin-r">
				<span class="btn-label">
					<i class="fa fa-star"></i>
				</span>
				Watch<span class="hidden-xs"> dealer</span>
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
@stop

@section('content')
@include('profiles.partial.infobox')
<div class="row" data-columns id="gridlock">
		@include('profiles.partial.homesbox')
		{{-- @include('profiles.partial.newhomesbox') --}}
		@include('profiles.partial.socialbox')
	</div>
</div>
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
<script type="text/javascript">
	pony.add(function() {
		if($('#infobox').parent().hasClass('col-md-6')) {
			$('#infobox').detach().prependTo('#gridlock > div:nth-child(1)');
			$('#inforow').remove();
			var grid = document.getElementById('gridlock');
			salvattore.recreateColumns(grid);
		}
	});

</script>
@stop