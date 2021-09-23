@extends('layouts.business')
@section('incls-head')
	<link rel="stylesheet" type="text/css" href="/css/font-awesome.min.css">
@stop

@section('heading')
<h3>Business Center</h3>
<h4><a href="{{ URL::route('account-business-company', ['company' => $company->id]) }}">{{ $company->title }}</a> <span class="text-muted"><i class="fa fa-chevron-right"></i></span> <a href="{{ URL::route('account-business-company-campaigns', ['company' => $company->id]) }}">Advertising</a> <span class="text-muted"><i class="fa fa-chevron-right"></i></span> Campaign Overview</h4>
@stop

@section('businesscontent')
<div class="row white" style="min-height:500px">
	<div class="col-sm-12">
		<div class="row">
			<div class="col-sm-8">
				<div class="panel panel-default">
					<div class="panel-body">
						<h5>Analytics</h5>
						<img src="//placehold.it/640x240/ffffff/333333?text=Chart" class="img-responsive">
					</div>
				</div>
			</div>
			<div class="col-sm-4">
				<div class="panel panel-default">
					<div class="panel-body">
						<h5>Amount spent</h5>
						<h3>$<span>245.00</span></h3>
						<h6 class="margin-t">Campaign costs</h6>
					</div>
					<ul class="list-item-group slim">
						<li class="list-item"></li>
					</ul>
				</div>
				<div class="panel panel-default">
					<div class="panel-body">
						<h5 class="margin-b-10">
							<a href="#" class="pull-right">Edit</a>
							Banner and Targeting
						</h5>
						<img src="//placehold.it/360x144/" class="img-responsive">
						<br>
						<p><strong>First Advertisement</strong></p>
						<p>25 mile radius at Yucaipa, CA</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@stop

@section('incls-body')
<style type="text/css">
h5{
	margin: 0 -5px;
	padding: 0 5px 10px;
	border-bottom: 1px solid #ddd;
}
</style>
@stop