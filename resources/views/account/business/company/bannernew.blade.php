@extends('layouts.business')
@section('incls-head')
	<link rel="stylesheet" type="text/css" href="/css/font-awesome.min.css">
@stop

@section('heading')
<h3>Business Center</h3>
<h4><a href="{{ URL::route('account-business-company', ['company' => $company->id]) }}">{{ $company->title }}</a> <span class="text-muted"><i class="fa fa-chevron-right"></i></span> <a href="{{ URL::route('account-business-company-banners', ['company' => $company->id]) }}">Advertising</a> <span class="text-muted"><i class="fa fa-chevron-right"></i></span> Banner Overview</h4>
@stop

@section('businesscontent')
<div class="row white" style="min-height:500px">
	<div class="col-sm-12">
		<div class="panel panel-default">
			<div class="panel-body">
				<h3 class="no-margin-t">Banner Preview</h3>
				<form class="form-horizontal">
					<div class="form-group">
						<div class="col-md-12">
							<label class="control-label">Large image (292w &times; 268h)</label>
						</div>
					</div>
					<div class="form-group">
						<div class="col-md-4">
							<img src="//placehold.it/292x268" class="banner-prev-large">
						</div>
						<div class="col-md-8">
							<span class="btn btn-primary btn-file">
								Select large image <input type="file" name="tilelarge">
							</span>
						</div>
					</div>
					<div class="form-group">
						<div class="col-md-12">
							<label class="control-label">Wide image (292w &times; 127h)</label>
						</div>
					</div>
					<div class="form-group">
						<div class="col-md-4">
							<img src="//placehold.it/292x127" class="banner-prev-wide">
						</div>
						<div class="col-md-8">
							<span class="btn btn-primary btn-file">
								Select wide image <input type="file" name="tilelarge">
							</span>
						</div>
					</div>
					<div class="form-group">
						<div class="col-md-12">
							<label class="control-label">Small image (126w &times; 122h)</label>
						</div>
					</div>
					<div class="form-group">
						<div class="col-md-4">
							<img src="//placehold.it/126x122" class="banner-prev-small margin-r">
							<img src="//placehold.it/126x122" class="banner-prev-small margin-l">
						</div>
						<div class="col-md-8">
							<span class="btn btn-primary btn-file">
								Select small image <input type="file" name="tilelarge">
							</span>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>

@stop

@section('incls-body')
<style type="text/css">
.btn-file {
    position: relative;
    overflow: hidden;
}
.btn-file input[type=file] {
    position: absolute;
    top: 0;
    right: 0;
    min-width: 100%;
    min-height: 100%;
    font-size: 100px;
    text-align: right;
    filter: alpha(opacity=0);
    opacity: 0;
    outline: none;
    background: white;
    cursor: inherit;
    display: block;
}
</style>
@stop