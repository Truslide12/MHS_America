@extends('admin.layouts.master')

@section('sidemenu')
@include('admin.layouts.partial.side-browse')
@stop

@section('content')
<div class="col-md-6">
	<div class="box">
		<div class="body">
			<div class="row">
				<div class="col-sm-6">
					<strong>Latest user</strong>
				</div>
				<div class="col-sm-6 text-right">
					lorem
				</div>
			</div>
			<div class="row">
				<div class="col-sm-6">
					<strong>Latest company</strong>
				</div>
				<div class="col-sm-6 text-right">
					ipsum
				</div>
			</div>
			<div class="row">
				<div class="col-sm-6">
					<strong>Latest profile</strong>
				</div>
				<div class="col-sm-6 text-right">
					dolor sit
				</div>
			</div>
		</div>
	</div>
</div>
@stop