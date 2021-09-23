<div class="panel panel-primary profile-panel horizontal">
				<div class="panel-body">
					<div class="row">
						<div class="col-sm-12">
							<h3 class="profile-title">
								<a href="{{ URL::route('profile', array('id' => $community->id)) }}">{{ $community->title }}</a><br>
								<small>{{ $community->geoname->place_name }}, {{ strtoupper($community->state->abbr) }}{{ $community->tagline ? ' | '.$community->tagline : '' }}</small>
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
								@if($community->company_id != 0 && 1==2)
								{{ preg_replace('/(^| )A ([aeiouAEIOU])/', '$1An $2', 'A '.$community->company->title.' Property' ) }} <small>(<a href="{{ URL::route('company-communities', array('company' => $community->company_id)) }}">View all communities</a>)</small>@endif
							</p>
							<p class="properties">
								<span class="tape bg-info text-info">{{ ($community->senior == 1) ? 'Senior' : 'All Ages' }}</span>
							@foreach(Profile::listProperties() as $p_name => $property)
								@if($community->$p_name == 1)
								<span class="tape bordered text-info">
									{{ $property }}
								</span>
								@endif
							@endforeach
							</p>
						</div>
						<div class="col-sm-12">
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
					</div>
					@if(Auth::check())
					<p class="tape-btns">
						<a href="#" class="btn btn-primary tape">
							<i class="glyphicon glyphicon-plus"></i> Watch
						</a>
						@if(1==2)
						<a href="#" class="btn btn-success tape">
							<i class="glyphicon glyphicon-thumbs-up"></i> Kudos
						</a>@endif
					</p>
					@endif
				</div>
			</div>