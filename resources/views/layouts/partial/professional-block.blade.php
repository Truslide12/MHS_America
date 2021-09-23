<div class="panel {{ ($professional->plan->hasFeature('highlight')) ? 'panel-primary' : 'panel-info' }} profile-panel">
				<div class="panel-body">
					<div class="row">
						<div class="col-md-12">
							
							<img src="/placeholder.php?size=180x180&amp;bg=ddd&amp;text=derp" class="img-thumbnail pull-right">
							
							<h3 class="profile-title no-margin-t">
								<a href="{{ URL::route('professionals-view', array('professional' => rand_uniqid($professional->id, false, 6, 'derpy'))) }}">{{ $professional->title }}</a><br>
								<small>{{ $professional->geoname->place_name }}, {{ strtoupper($professional->state->abbr) }}{{ $professional->tagline ? ' | '.$professional->tagline : '' }}</small>
							</h3>
							<p>
								@if(Auth::check())
								<span class="rating rating-4">
									<span class="star-1"><i class="glyphicon glyphicon-star"></i></span>
									<span class="star-2"><i class="glyphicon glyphicon-star"></i></span>
									<span class="star-3"><i class="glyphicon glyphicon-star"></i></span>
									<span class="star-4"><i class="glyphicon glyphicon-star"></i></span>
									<span class="star-5"><i class="glyphicon glyphicon-star"></i></span>
								</span>
								@endif
							</p>
							<p class="properties">
								<span class="tape bg-info text-info">{{ ucwords($professional->type) }}</span>
							</p>
							@if(Auth::check())
							<p class="tape-btns-dis">
								<form action="{{ URL::route('profile-cmd-watch-post', array('profile' => $professional->id)) }}" method="POST" style="display:inline-block;">
									{{ csrf_field() }}
									@if(!Request::is('profile*'))
									<input type="hidden" name="ref" value="{{ substr(Request::fullUrl(), strpos(Request::fullUrl(), '/', 8)) }}">
									@endif
									@if($user->watchesProfile($professional->id))
									<button type="submit" class="btn btn-info">
										Unwatch
									</button>
									@else
									<button type="submit" class="btn btn-labeled btn-info">
										<span class="btn-label">
											<i class="fa fa-search"></i>
										</span>
										Watch
									</button>
									@endif
								</form>
								<form action="{{ URL::route('profile-cmd-kudos-post', array('profile' => $professional->id)) }}" method="POST" style="display:inline-block;">
									{{ csrf_field() }}
									@if(!Request::is('profile*'))
									<input type="hidden" name="ref" value="{{ substr(Request::fullUrl(), strpos(Request::fullUrl(), '/', 8)) }}">
									@endif
									@if($user->kudosProfile($professional->id))
									<button type="submit" class="btn btn-success">
										<i class="glyphicon glyphicon-ok"></i> Kudo'd
									</button>
									@else
									<button type="submit" class="btn btn-labeled btn-success">
										<span class="btn-label">
											<i class="fa fa-star"></i>
										</span>
										Kudos
									</button>
									@endif
								</form>
							</p>
							@endif
						</div>
					</div>
				</div>
			</div>