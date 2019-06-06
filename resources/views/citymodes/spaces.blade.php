			<div class="row">
				<div class="col-md-12">
					<div class="panel panel-default">
						<div class="panel-body">
							<h2 class="no-margin-t">Spaces</h2>
							<hr>
							@if(is_populated($results)
							@foreach($results as $space)
							@include('layouts.partial.space-block')
							@endforeach
							@else
							<h3 class="text-open margin-y-wide text-center">
								No vacant spaces to show
								<br>
								in this area
							</h3>
							@endif
						</div>
					</div>
				</div>
			</div>
