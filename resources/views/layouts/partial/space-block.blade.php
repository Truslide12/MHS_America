<div class="col-md-6">
						<div class="space-block-large">
							<div class="row">
								<div class="col-sm-12">
									<h3 class="space-title">{{ $space->profile->title }} <small>Space {{ $space->name }}</small></h3>
									<div class="label label-default hidden">Status</div>
								</div>
							</div>
							<div class="row">
								<div class="col-sm-12">
									@if(Auth::check())
									<div class="pull-right">
										@if(Auth::user()->watchesSpace($space->id))
										<a href="#" data-action="watch" data-relation="space" data-id="{{ $space->id }}" class="btn btn-xs btn-danger watch-space-{{ $space->id }}"><i class="glyphicon glyphicon-remove"></i></a>
										@else
										<a href="#" data-action="watch" data-relation="space" data-id="{{ $space->id }}" class="btn btn-xs btn-info watch-space-{{ $space->id }}">Watch</a>
										@endif
									</div>
									@endif
									<div class="pull-left">
										<p class="space-size">{{ $space->size() }}</p>
										@if($space->width > 0 && $space->length > 0)<h4 class="space-dimensions">{{ $space->width }} x {{ $space->length }}</h4>@endif
									</div>
								</div>
							</div>
						</div>
					</div>