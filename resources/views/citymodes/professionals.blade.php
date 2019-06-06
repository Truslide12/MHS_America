			<div class="row">
				<div class="col-md-12">
					<div class="panel panel-default">
						<div class="panel-body">
							<h2 class="no-margin-t">Professionals</h2>
							<hr>
							@if(is_populated($results))
							@foreach($results as $professional)
							@include('layouts.partial.professional-block-horizontal')
							@endforeach
							@else
							<h3 class="text-open margin-y-wide text-center">
								No professionals to show
								<br>
								in this area
							</h3>
							@endif
						</div>
					</div>
				</div>
			</div>
