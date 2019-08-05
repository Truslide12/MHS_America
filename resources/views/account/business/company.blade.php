@extends('layouts.business')
@section('incls-head')
	<link rel="stylesheet" type="text/css" href="{{ URL::route('welcome') }}/css/font-awesome.min.css">
@stop

@section('heading')
<h3>Business Center</h3>
<h4>{{ $company->title }}</h4>
@stop

@section('businesscontent')
<div class="row white" style="min-height:500px">
	<div class="col-sm-4 col-xs-12 pull-right">
		<div class="row">
			<div class="col-md-12">
				<h3>Administration</h3>
			</div>
			<div class="col-md-12">
				@if($errors->count() > 0)
				@foreach($errors->all() as $error)
				<div class="alert alert-warning" role="alert">
					<button class="close" data-dismiss="alert" aria-label="Close">&times;</button>
					{{ $error }}
				</div>
				@endforeach
				@endif
				@if(Session::has('success'))
				<div class="alert alert-success" role="alert">
					<button class="close" data-dismiss="alert" aria-label="Close">&times;</button>
					{{ Session::get('success') }}
				</div>
				@endif
			</div>
			<div class="col-xs-12">
				<div class="panel panel-info">
					<div class="panel-body hidden-xs">
						<a href="{{ URL::route('account-business-company-users', array('company' => $company->id)) }}" class="btn btn-info btn-lg btn-block">User access</a>
						<span class="text-muted hidden-xs">
							<br>
							<small>Manage authorized users and their permissions</small>
						</span>
					</div>
					<hr class="hidden-xs">
					<div class="panel-body hidden-xs">
						<a href="{{ URL::route('account-business-company-billing', array('company' => $company->id)) }}" class="btn btn-info btn-lg btn-block">Billing</a>
						<span class="text-muted hidden-xs">
							<br>
							<small>Manage billing</small>
						</span>
					</div>
					<hr class="hidden-xs">
					@if(1==2)
					<div class="panel-body hidden-xs">
						<a href="{{ URL::route('account-business-company-campaigns', array('company' => $company->id)) }}" class="btn btn-info btn-lg btn-block">Ad campaigns</a>
						<span class="text-muted hidden-xs">
							<br>
							<small>Manage paid advertising slots</small>
						</span>
					</div>
					<hr class="hidden-xs">
					@endif
					<div class="panel-body hidden-xs">
						<a href="{{ URL::route('account-business-company-settings', array('company' => $company->id)) }}" class="btn btn-info btn-lg btn-block">Settings</a>
						<span class="text-muted hidden-xs">
							<br>
							<small>Manage general settings for the company profile</small>
						</span>
					</div>
					<div class="panel-body hidden-sm hidden-md hidden-lg">
						<div class="col-xs-4">
							<a href="{{ URL::route('account-business-company-users', array('company' => $company->id)) }}" class="btn btn-info btn-lg btn-block">Users</a>
						</div>
						@if(1==2)
						<div class="col-xs-4">
							<a href="{{ URL::route('account-business-company-campaigns', array('company' => $company->id)) }}" class="btn btn-info btn-lg btn-block">Ads</a>
						</div>
						@endif
						<div class="col-xs-4">
							<a href="{{ URL::route('account-business-company-billing', array('company' => $company->id)) }}" class="btn btn-info btn-lg btn-block">Billing</a>
						</div>
						<div class="col-xs-4">
							<a href="{{ URL::route('account-business-company-settings', array('company' => $company->id)) }}" class="btn btn-info btn-lg btn-block">Settings</a>
						</div>
					</div>
				</div>
			</div>
		</div>
		
	</div>
		<style>
			.profile_banner {
				background: url('{{ URL::route('welcome') }}/img/stockphotos/building-joy-planning-plans.jpg');
				background-size:     cover;
			    background-repeat:   no-repeat;
			    background-position: center top;
			    height: 200px;
			    border: 1px solid #143366;
			}
			.profile_banner > .caption-bg{
				background-color: #143366;
				width: 100%;
				margin: 0px 0px;
				z-index: 2;
				position: absolute;
				bottom: 0;
				left: 0;
				opacity: 0.8;
				min-height: 2.2em;
				max-height: 2.2em;
			}
			.profile_banner>.caption{
				background-color: none;
				color: snow;
				width: 100%;
				margin: 0px 0px;
				padding: 5px 10px;
				z-index: 3;
				position: absolute;
				bottom: 0;
				left: 0;
				min-height: 2em;
				max-height: 2em;
				font-weight: bold;
				font-size: 1.3em;

			}
			.profile_banner>.prof-quote{
				background-color: none;
				color: #000;
				width: 40%;
				margin: 0px 0px;
				padding: 5px 10px;
				z-index: 3;
				position: absolute;
				top: 0;
				right: 0;
				text-align: right;
				font-weight: bold;
				font-style: italic;
				overflow: hidden;
			}
			.home-edit-icons {
				font-size: 1.55em;margin-right: 10px;font-weight: none;
			}
			.home-edit-icons:hover {
				color: #333;
				cursor: pointer;
				position: relative;
			}

			.alt-tip:hover:before {
				content: attr(alt);
				position: absolute;
				left: 0;
				top: calc(-100% - .2em);
				margin-left: calc(100% + .2em);
				background: rgba(1,1,1,.85);
				color: snow;
				z-index: 500;
				padding: .1em .8em;
				box-shadow: 3px 3px rgba(1,1,1,.3);
				border-radius: 5px;
				font-size: 1em;
				white-space: nowrap;
				overflow: hidden;
			}
			.alt-tip:hover:after {
			    content:''; /* Required to display content */
			    position: absolute; /* Sets the position absolute to the top div */
			    top: 0px; 
			    right: -.5em;
			    margin-left: -.5em; /* Set margin equal to border px */
			    width: 0;
			    z-index:1;
			    height: 0;
			    opacity: 0.75;
			    border-top: solid 10px #000; /* Creates the notch */
			    border-left: solid 10px transparent; /* Creates triangle effect */
			    border-right: solid 10px transparent; /* Creates triangle effect */
			    -webkit-transform: rotate(45deg);
			    -moz-transform: rotate(45deg);
			    -o-transform: rotate(45deg);
			    -ms-transform: rotate(45deg);
			    transform: rotate(45deg);
			}

		</style>
	<div class="col-sm-8 col-xs-12">
		<div class="panel-body">
			<div class="row">
				<div class="col-sm-12 profile_banner">
					<div class="caption-bg">&nbsp;</div>
					<span class="caption">Create a profile for your business or community and attract customers!</span>
					<span class="prof-quote">Creating a profile for your community or business gives you the online presence todays consumers demand.</span>
				</div>
			</div>
		</div>

		<!-- PROFILES -->
		@if(1==1)
		<a href="/page/community-plans" class="btn btn-sm btn-success pull-right margin-t-10"><i class="fa fa-plus"></i> Create</a>
		@else
		<a href="{{ URL::route('account-business-company-profiles-create', ['company' => $company->id]) }}" class="btn btn-sm btn-success pull-right margin-t-10"><i class="fa fa-plus"></i> Create</a>
		@endif

		<h3>Profiles</h3>
		@if($profile_count > 0)
		<div class="panel panel-primary profile-panel">
			@if(1==2)<div class="panel-body">
				<div class="row">
					<div class="col-sm-12">
						<h4><a href="{{ URL::route('company', array('company' => $company->id)) }}" target="_blank">View company overview</a></h4>
					</div>
				</div>
			</div>@endif
			<ul class="list-group">
				@foreach($profiles as $profile)
				<li class="list-group-item">
					<span class="pull-right">
						@if( empty($profile->subscription_id) )
						<a href="{{ URL::route('getstarted-community-upgrade', array('profile' => $profile->id)) }}" class="btn btn-success btn-sm btn-align-fix">Upgrade</a>
						@endif
						<a href="{{ URL::route('profile', array('profile' => $profile->id)) }}" class="btn btn-info btn-sm btn-align-fix" target="_blank">View</a> 
						<a href="{{ URL::route('editor', array('profile' => $profile->id, 'from_company' => $company->id)) }}" class="btn btn-warning btn-sm btn-align-fix">Manage</a>
					</span>
					<h4>{{ $profile->title }} <small>(@if($profile->subscription_id)Paid @Else()Free @endif {{ $profile->type }} Profile) <!--{{ \Carbon\Carbon::parse($profile->updated_at)->diffForHumans() }} --></small></h4>
				</li>
				@endforeach
			</ul>
		</div>
		@else
		<div class="panel panel-default profile-panel">
			<div class="panel-body">
				<div class="row">
					<div class="col-sm-12">

						<h3 class="text-center padding-y">
							You don't have any profiles!
							<br>
							<small>To really get started, <a href="/page/community-plans">create your first one now</a>.</small>
						</h3>

					</div>
				</div>
			</div>
		</div>
		@endif
		<div class="clearfix"></div>
		<!-- HOMES -->
		<!-- PROFILES -->
		<a href="{{ URL::route('getstarted-home') }}" class="btn btn-sm btn-success pull-right margin-t-10"><i class="fa fa-plus"></i> Create</a>
		<h3>Home Listings</h3>
		@if(count($homes) > 0)
		<div class="panel panel-primary profile-panel">
			@if(1==2)<div class="panel-body">
				<div class="row">
					<div class="col-sm-12">
						<h4><a href="{{ URL::route('getstarted-home') }}" target="_blank">View company overview</a></h4>
					</div>
				</div>
			</div>@endif
			<ul class="list-group">
				@foreach($homes as $home)
				<li class="list-group-item">
					<span class="pull-right" @if(1==2) style="display: flex;background: none;color: silver;" @endif>
						<a href="{{ URL::route('home', array('home' => $home->id)) }}" class="btn btn-info btn-sm btn-align-fix">View</a> 
						<a href="{{ URL::route('editor-edithome', array('profile' => $home->profile_id, 'home' => $home->id)) }}" class="btn btn-warning btn-sm btn-align-fix">Manage</a>
						@if(1==2)
						<a href="{{ URL::route('editor-edithome', array('profile' => $profile->id, 'home' => $home->id)) }}" class="home-edit-icons alt-tip" alt="Edit Home"><i class="fa fa-pencil"></i></a>
						<a href="{{ URL::route('home', array('home' => $home->id)) }}" class="home-edit-icons alt-tip" alt="View Listing"><i class="fa fa-eye"></i></a>
						<a class="home-edit-icons alt-tip" alt="Manage Access"><i class="fa fa-user"></i></a>
						<a class="home-edit-icons alt-tip" alt="Manage Settings"><i class="fa fa-cog"></i></a>
						<a class="home-edit-icons alt-tip" alt="Manage Analytics"><i class="fa fa-tachometer"></i></a>
						@endif
					</span>
						<h4 class="no-margin-t">
							<!-- 
							{{ $home->beds }} Bed {{ $home->baths }} Bath {{ $home->size() }}-wide<br> 
							<small>{{ $home->year }} {{ $home->brand }} {{ $home->model }} | {{ $home->sn() }}</small>
							-->
							{{ $home->title }} <br>

							<small>{{ $home->profile->title }} - Space {{ $home->space_number }}</small>
						</h4>
				</li>
				@endforeach
			</ul>
		</div>
		@else
		<div class="panel panel-default profile-panel">
			<div class="panel-body">
				<div class="row">
					<div class="col-sm-12">

						<h3 class="text-center padding-y">
							You don't have any homes!
							<br>
							<small>To really get started, <a href="{{ URL::route('getstarted-home') }}">create your first one now</a>.</small>
						</h3>

					</div>
				</div>
			</div>
		</div>
		@endif


	</div>
	@if(1==2)<div class="col-sm-6">
		<h3>Notifications</h3>
		@if(count($news) == 0)
		<div class="panel panel-default">
			<div class="panel-body">
				<h4 class="text-muted">
					<em>No news is good news.</em>
				</h4>
			</div>
		</div>
		@else
		@foreach($news as $newsitem)
		<div class="media">
			<div class="pull-left h1 no-margin-t">
				<i class="fa fa-newspaper-o"></i>
			</div>
			<div class="media-body">
				<h4 class="media-heading">
					<a href="#">{{ $newsitem->title }}</a><br>
					<small>Updated: {{ $newsitem->updated_at->format('M d, Y g:ia') }}</small>
				</h4>
			</div>
		</div>

		@endforeach
		@if(count($news) > 5)
		<div>
			<a href="#"><small>&raquo; view all</small></a>
		</div>
		@endif
		@endif
	</div>@endif
	<div class="clearfix"></div>
</div>
@stop