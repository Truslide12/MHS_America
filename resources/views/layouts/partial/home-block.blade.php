<div class="panel panel-info profile-panel">
				<div class="panel-body">
					<div class="row">
						<div class="col-md-12">
							@if(!isset($hide_home_images))
							<img src="{{ $home->default_photo()->url }}" class="img-thumbnail pull-right" style="max-width: 180px;max-height: 180px">
							@endif
							<h3 class="profile-title no-margin-t">
								<a href="{{ URL::route('home', array('id' => $home->id)) }}">{{ $home->beds }} bed {{ $home->baths }} bath home</a><br>
							</h3>
							@if(1==2)<p class="properties">
								<span class="tape bg-info text-info">{{ ($community->senior == 1) ? 'Senior' : 'All Ages' }}</span>
							@foreach(Profile::listProperties() as $p_name => $property)
								@if($community->$p_name == 1)
								<span class="tape bordered text-info">
									{{ $property }}
								</span>
								@endif
							@endforeach
							</p>@endif
							@if(Auth::check())
							<p class="tape-btns-dis">
								<form action="{{ URL::route('profile-cmd-watch-post', array('profile' => $home->id)) }}" method="POST" style="display:inline-block;">
									{{ csrf_field() }}
									@if(!Request::is('profile*'))
									<input type="hidden" name="ref" value="{{ substr(Request::fullUrl(), strpos(Request::fullUrl(), '/', 8)) }}">
									@endif
									@if($user->watchesHome($home->id))
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
								<form action="{{ URL::route('profile-cmd-kudos-post', array('profile' => $home->id)) }}" method="POST" style="display:inline-block;">
									{{ csrf_field() }}
									@if(!Request::is('profile*'))
									<input type="hidden" name="ref" value="{{ substr(Request::fullUrl(), strpos(Request::fullUrl(), '/', 8)) }}">
									@endif
									@if($user->kudosHome($home->id))
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