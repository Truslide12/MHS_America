@extends('layouts.page')

@section('page-title')
Connecting to a Company
@stop

@section('page-content')
<div style="padding: 25px;">
	<div class="row">
		<div class="col-md-4 col-sm-12">
			
			@include("pages.help.menu")
		</div>
		<div class="col-md-8">
			<h3>What is Connecting to a Company?</h3>
			<p>
				If you work with a company that already exists on MHS America, the company can send you an invitation to connect to the company and gain access to its resources. 
			</p>

			<h3>How do I Connect with a Company?</h3>
			<p>
				... 
			</p>

			<h3>My Company isn't on MHS America yet, What do I do?</h3>
			<p>
				If you work with a company that you think can benefit from our services be sure to send your manager a link to <a href="{{ URL::route('salesagent-promo') }}">{{ URL::route('salesagent-promo') }}</a>.
			</p>
		</div>

	</div>
</div>
@stop
