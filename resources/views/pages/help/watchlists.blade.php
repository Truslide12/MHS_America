@extends('layouts.page')

@section('page-title')
Watch lists
@stop

@section('page-content')
<div style="padding: 25px;">
	<div class="row">
		<div class="col-md-4 col-sm-12">
			
			@include("pages.help.menu")
		</div>
		<div class="col-md-8">
			<h3>What are Watch lists?</h3>
			<p>
					Watch lists consists of homes, spaces, communities and professionals you have decided to watch. These lists can be used to quickly access profiles and listings that you have looked at previously and might want to again. 
			</p>
		</div>

	</div>
</div>
@stop
