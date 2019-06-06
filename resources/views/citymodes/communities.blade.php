			<div class="row">
				<div class="col-md-12">
					<div class="panel panel-default">
						<div class="panel-body">
							<h2 class="no-margin-t">Communities</h2>
							<hr>
							@if(is_populated($results))
							@foreach($results as $community)
							@include('layouts.partial.community-block')
							@endforeach
							@else
							<h3 class="text-open margin-y-wide text-center">
								No communities to show
								<br>
								in this area
							</h3>
							@endif
						</div>
					</div>
				</div>
			</div>
