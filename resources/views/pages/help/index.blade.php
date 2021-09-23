@extends('layouts.page')

@section('page-title')
Help Center
@stop

@section('page-content')
<div style="padding: 25px;">
	<div class="row">
		<div class="col-md-4 col-sm-12">
			
			@include("pages.help.menu")
		</div>
		<div class="col-md-8">
			<h3>MHS is here to Help</h3>
			<p>
				MHS America is a big place and you might be a little lost from time to time in the beginning. That's why we are working to build some helpful guides on how to make use of all MHS has to offer. Not all of our guides are finished yet, so if you have a question you can't find an answer to please be sure to <a href="/pages/contact">contact us</a>.
			</p>
		</div>

	</div>
</div>
@stop
