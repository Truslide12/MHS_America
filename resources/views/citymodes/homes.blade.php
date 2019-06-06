			<div class="row">
				<div class="col-md-12">
					<div class="panel panel-default">
						<div class="panel-body">
							<h2 class="no-margin-t">Homes</h2>
							<hr>
							@if(isset($results) && is_object($results))
							@foreach($results as $home)
							@include('layouts.partial.home-block')
							@endforeach
							@else
							<h3 class="text-open margin-y-wide text-center">
								No homes for sale or rent to show
								<br>
								in this area
							</h3>
							@endif
						</div>
					</div>
				</div>
			</div>
