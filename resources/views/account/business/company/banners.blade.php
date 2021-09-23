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
			<li class="list-group-item">
				<h5 class="list-group-item-heading">
					<a href="{{ URL::route('account-business-company-campaigns', ['company' => $company->id]) }}">Campaigns</a>
				</h5>
			</li>
			<li class="list-group-item active">
				<h5 class="list-group-item-heading">
					Banners
				</h5>
			</li>
		</ul>
	</div>
	<div class="col-sm-9">
		<div class="panel panel-default">
			<div class="panel-body">
				<h3 class="no-margin-t">Banners</h3>
			</div>
			<table class="table">
				<tbody>
					<tr>
						<td class="col-sm-3 no-padding no-margin"></td>
						<td class="col-sm-9 no-padding no-margin"></td>
					</tr>
					<tr>
						<td>
							<a href="{{ URL::route('account-business-company-banners-view', ['company' => $company->id, 'banner' => 1]) }}"><img src="//placehold.it/180x72"></a>
						</td>
						<td class="text-right">
							<a href="#" class="btn btn-xs btn-default">Edit</a>
						</td>
					</tr>
					<tr>
						<td>
							<a href="{{ URL::route('account-business-company-banners-view', ['company' => $company->id, 'banner' => 1]) }}"><img src="//placehold.it/180x72"></a>
						</td>
						<td class="text-right">
							<a href="#" class="btn btn-xs btn-default">Edit</a>
						</td>
					</tr>
				</tbody>
			</table>
		</div>
	</div>
</div>

@stop