<div class="home-block">
					<div class="row">
						<div class="pull-right">
							<img src="/imgstorage/{{ $home->default_photo()->url }}_sm.jpg" class="img-responsive" width="120">
						</div>
						<div class="pull-left">
							<h4 class="home-title"><a href="{{ URL::route('home', array('home' => $home->id)) }}">{{ $home->beds }} Bed {{ $home->baths }} Bath {{ $home->size() }}-wide</a></h4>
							<p class="text-muted">{{ $home->year }} {{ $home->brand }} {{ $home->model }}</p>
							
							<h4 class="pull-left text-danger no-margin-l">${{ number_format($home->price) }}</h4>
							<span class="pull-left margin-t-10">
								@if(Auth::check())
								@if($user->watchesHome($home->id))
								<a href="#" data-action="watch" data-relation="home" data-id="{{ $home->id }}" data-size="small" class="btn btn-xs btn-info margin-l watch-home-{{ $home->id }}">Unwatch</a>
								@else
								<a href="#" data-action="watch" data-relation="home" data-id="{{ $home->id }}" data-size="small" class="btn btn-xs btn-info margin-l watch-home-{{ $home->id }}">Watch</a>
								@endif
								@endif
							</span>
						</div>
					</div>
				</div>