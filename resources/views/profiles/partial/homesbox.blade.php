<!-- Homes available -->
		@if(count($homes) > 0)
		<div class="panel panel-default">
			<div class="panel-heading">
				<div class="panel-title">
					Homes Available
				</div>
			</div>
			<div class="panel-body">
				@foreach($homes as $home)
				@include('layouts.partial.home-block-small')
				@endforeach
			</div>
		</div>
		@endif