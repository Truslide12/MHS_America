<!-- Spaces available -->
		@if( $is_paid_profile && $plan->hasFeature('manage_spaces'))
		<div class="panel panel-default">
			<div class="panel-heading">
				<div class="panel-title">
					Spaces Available
				</div>
			</div>
			<div class="panel-body">
				<div class="row">
				@if(count($spaces) > 0)
					@foreach($spaces as $space)
					<div class="col-md-6">
						<div class="space-block">
							<div class="row">
								<div class="section">
									<h3 title="{{ $space->name }}" class="space-title">{{ $space->name }}</h3>
									<div class="label label-default hidden">Status</div>
								</div>
								<div class="section">
									@if($space->width > 0 && $space->length > 0)
									<p class="space-size text-small">{{ $space->size() }}</p>
									<h4 class="space-dimensions">{{ $space->width }} x {{ $space->length }}</h4>
									@else
									<p class="space-size">{{ $space->size() }}</p>
									@endif
								</div>
								@if(Auth::check())
								<div class="section">
									@if(1==1)
									<a href="#" class="btn btn-xs btn-info">Watch</a>
									@else
									<a href="#" class="btn btn-xs btn-danger"><i class="glyphicon glyphicon-remove"></i></a>
									@endif
								</div>
								@endif
							</div>
						</div>
					</div>
					@endforeach
				@else
					<h4 class="text-center text-muted">
						Call for available spaces
					</h4>
				@endif
				</div>
			</div>
		</div>
		@endif