<div class="panel {{ ($community->plan->hasFeature('highlight')) ? 'panel-primary' : 'panel-info' }} profile-panel">
				<div class="panel-body">
					<div class="row">
						<div class="col-md-12">
							@if(1==2 && !isset($hide_community_images))
							<img src="/placeholder.php?size=180x180&amp;bg=ddd&amp;$fg=fff" class="img-thumbnail pull-right">
							@endif
							<h3 class="profile-title no-margin-t">
								<a class="pull-left" href="{{ URL::route('profile', array('id' => $community->id)) }}">{{ $community->title }}</a>
								@if($community->plan->hasFeature('highlight'))
								<small class="pull-left" style="margin:5px 5px 0;"><span class="text-primary" data-toggle="tooltip" data-placement="right" title="Premium Partner"><i class="fa fa-star"></i></span></small>
								@endif
								<br>
								<small>
									{{ $community->geoname->place_name }}, {{ strtoupper($community->state->abbr) }}{{ $community->tagline ? ' | '.$community->tagline : '' }}
								</small>
							</h3>
							<p>
								@if(Auth::check() && 1==2)
								<span class="rating rating-4">
									<span class="star-1"><i class="glyphicon glyphicon-star"></i></span>
									<span class="star-2"><i class="glyphicon glyphicon-star"></i></span>
									<span class="star-3"><i class="glyphicon glyphicon-star"></i></span>
									<span class="star-4"><i class="glyphicon glyphicon-star"></i></span>
									<span class="star-5"><i class="glyphicon glyphicon-star"></i></span>
								</span>
								@endif
								@if($community->company_id != 0 && 1==2)
								{{ preg_replace('/(^| )A ([aeiouAEIOU])/', '$1An $2', 'A '.$community->company->title.' Property' ) }}@if(Input::get('ref', '') != 'company' && !isset($hide_company_links)) <small>(<a href="{{ URL::route('company-communities', array('company' => $community->company_id)) }}">View all communities</a>)</small> @endif @endif
							</p>
							<p class="properties">
								@if($community->age_type == 2)
								<span class="tape bg-info text-info">Senior</span>
								@elseif($community->age_type == 1)
								<span class="tape bg-info text-info">55+</span>
								@elseif($community->age_type === 0)
								<span class="tape bg-info text-info">All Ages</span>
								@endif
							@foreach(\App\Models\Profile::listProperties() as $p_name => $property)
								@if($community->$p_name == 1)
								<span class="tape bordered text-info">
									{{ $property }}
								</span>
								@endif
							@endforeach
							</p>
							@if(Auth::check())
							<div class="tape-btns-dis margin-t">
								@if($user->watchesProfile($community->id))
								<a href="#" data-action="watch" data-relation="profile" data-id="{{ $community->id }}" data-size="small" class="watch-profile-{{ $community->id }} btn btn-info margin-r">
									Unwatch
								</a>
								@else
								<a href="#" data-action="watch" data-relation="profile" data-id="{{ $community->id }}" data-size="small" class="watch-profile-{{ $community->id }} btn btn-labeled btn-info margin-r">
									<span class="btn-label">
										<i class="fa fa-star"></i>
									</span>
									Watch
								</a>
								@endif
								@if(1==2)
								@if($user->kudosProfile($community->id))
								<a href="#" data-action="kudos" data-relation="profile" data-id="{{ $community->id }}" class="kudos-profile-{{ $community->id }} btn btn-success margin-r">
									<i class="fa fa-check"></i> Liked
								</a>
								@else
								<a href="#" data-action="kudos" data-relation="profile" data-id="{{ $community->id }}" class="kudos-profile-{{ $community->id }} btn btn-labeled btn-success margin-r">
									<span class="btn-label">
										<i class="fa fa-heart"></i>
									</span>
									Like
								</a>
								@endif
								@endif
							</div>
							@endif
						</div>
						@if(1==2)
						<div class="col-sm-4">
							<div class="redact with-cover">
								<img src="//mhsamerica.com/imgstorage/silverspur-cover.png" class="profile-cover">
								<?php $space_count = $community->spaces()->count(); ?>
								@if($space_count > 0)
								<span class="tape text-info">
									{{ $space_count }} spaces
								</span>
								@endif
								<?php $home_count = $community->homes()->count(); ?>
								@if($home_count > 0)
								<span class="tape text-info">
									{{ $home_count }} homes
								</span>
								@endif
							</div>
						</div>
						@endif
					</div>
				</div>
			</div>