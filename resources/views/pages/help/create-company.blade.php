@extends('layouts.page')

@section('page-title')
Creating a Company
@stop

@section('page-content')
<div style="padding: 25px;">
	<div class="row">
		<div class="col-md-4 col-sm-12">
			
			@include("pages.help.menu")
		</div>
		<div class="col-md-8">
			<h3>Before you begin:</h3>
			<p>
				Before following the steps below you will need to have already activated business features.
			</p>
			<h3>How do I create a Company?</h3>
			<p>
				<ol>
					<li>
						From the Dashboard, select "My Companies" from the menu on the left. 
					</li>
					<li>
						Next Choose the green "Create" button.
					</li>
					<li>
						...
					</li>
				</ol> 
			</p>

		</div>

	</div>
</div>
@stop
