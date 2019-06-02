@extends('layouts.business')
@section('incls-head')
	<link rel="stylesheet" type="text/css" href="/css/font-awesome.min.css">
@stop

@section('heading')
<h3>Business Center</h3>
<h4><a href="{{ URL::route('account-business-company', ['company' => $company->id]) }}">{{ $company->title }}</a> <span class="text-muted"><i class="fa fa-chevron-right"></i></span> Advertising</h4>
@stop

@section('businesscontent')
<div class="row white" style="min-height:500px">
	<div class="col-sm-3">
		<ul class="list-group">
			<li class="list-group-item active">
				<h5 class="list-group-item-heading">
					Campaigns
				</h5>
			</li>
			<li class="list-group-item">
				<h5 class="list-group-item-heading">
					<a href="{{ URL::route('account-business-company-banners', ['company' => $company->id]) }}">Banners</a>
				</h5>
			</li>
		</ul>
	</div>
	<div class="col-sm-9">
		<div class="panel panel-default">
			<div class="panel-body">
				<h3 class="no-margin-t">Campaigns</h3>
			</div>
			<table class="table">
				<thead>
					<tr>
						<th class="col-sm-4">Title</th>
						<th class="col-sm-2">&nbsp;</th>
						<th class="col-sm-2">&nbsp;</th>
						<th class="col-sm-2">&nbsp;</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>
							<a href="{{ URL::route('account-business-company-campaigns-view', ['company' => $company->id, 'campaign' => 1]) }}">My first advertisement</a>
						</td>
						<td>
							<strong>Scheduled</strong><br>
							Jul 23 - Aug 7
						</td>
						<td>
							<strong class="text-success">Active</strong><br>
							<abbr title="Pay per Clicks">PPC</abbr> 345 hits
						</td>
						<td class="text-right">
							<a href="#" class="btn btn-xs btn-default">Change</a>
						</td>
					</tr>
					<tr>
						<td>
							<a href="{{ URL::route('account-business-company-campaigns-view', ['company' => $company->id, 'campaign' => 1]) }}">East-coast intro</a>
						</td>
						<td>
							<strong class="text-muted">No schedule</strong>
						</td>
						<td>
							<strong class="text-muted">Paused</strong><br>
							<abbr title="Pay per Impressions">PPM</abbr> 2123 imps
						</td>
						<td class="text-right">
							<a href="#" class="btn btn-xs btn-default">Change</a>
						</td>
					</tr>
				</tbody>
			</table>
		</div>
	</div>
</div>

@stop