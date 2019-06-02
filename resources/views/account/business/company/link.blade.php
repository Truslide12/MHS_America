@extends('layouts.business')

@section('incls-head')
	<link rel="stylesheet" type="text/css" href="/css/font-awesome.min.css">
@stop

@section('heading')
Business Center&nbsp;&nbsp;&nbsp;<p class="visible-xs"></p><small><img src="{{ $user->gravatar(25) }}" class="img-thumbnail" style="vertical-align:bottom;width:32px;"> {{ ($user->first_name =='' || $user->last_name == '') ? $user->username : $user->first_name . ' ' . $user->last_name }}</small>
@stop

@section('businesscontent')
<div class="row white">
	<div class="col-sm-8">
		<div class="row">
			<div class="col-md-12">
				@if($errors->count() > 0)
				@foreach($errors->all() as $error)
				<div class="alert alert-danger" role="alert">
					<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					{{ $error }}
				</div>
				@endforeach
				@endif
				<div class="panel panel-default">
					<div class="panel-heading">
						<a href="{{ URL::route('account-business') }}" class="btn btn-sm btn-default margin-t-10 pull-right"><i class="fa fa-arrow-left"></i> Go back</a>
						<h3 class="margin-t-10">Connect company</h3>
					</div>
					<div class="panel-body">
						<p class="margin-b">Please enter the company key you received in the invitation email.</p>
						<form class="form-horizontal" action="{{ URL::route('account-business-company-link-post') }}" method="POST" role="form" id="createform">
							<div class="form-group">
								<div class="col-md-6">
									<div class="input-group">
										{{ csrf_token_field() }}
										<input type="text" class="form-control input-lg" id="code" name="code" value="" required>
										<span class="input-group-btn">
											<button type="submit" class="btn btn-lg btn-success">
												<i class="fa fa-check"></i> Connect
											</button>
										</span>
									</div>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="col-sm-4">
		<ul class="list-group">
			<li class="list-group-item">
				<h5 class="list-group-item-heading">
					<a href="{{ URL::route('account-business-guide') }}" target="_blank">Beginner's Guide</a>
				</h5>
			</li>
			<li class="list-group-item">
				<h5 class="list-group-item-heading">
					<a href="#">Community Forum</a>
				</h5>
			</li>
		</ul>
		<ul class="list-group">
			<li class="list-group-item">
				<h5 class="list-group-item-heading">
					<a href="{{ URL::route('developers') }}">Developers' Center</a>
				</h5>
			</li>
			<li class="list-group-item">
				<h5 class="list-group-item-heading">
					<a href="#">Goodies and Resources</a>
				</h5>
			</li>
		</ul>
	</div>
</div>
@stop