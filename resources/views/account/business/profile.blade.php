@extends('layouts.business')
@section('businesscontent')
<div class="row white">
	<div class="col-sm-12">
		<h2>{{ $profile->title }} <small>{{ $company->title }}</small></h2>
	</div>
	<div class="col-sm-12">
		<p>Editor goes here!</p>
	</div>
</div>
@stop