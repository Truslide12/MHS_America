<div class="panel panel-info profile-panel">
				<div class="panel-body">
					<div class="row">
						<div class="col-md-12">
							<h3 class="profile-title no-margin-y">
								<a href="{{ URL::route('home', array('id' => $home->id)) }}">{{ $home->beds }} bed {{ $home->baths }} bath home</a> <span class="text-danger">${{ number_format($home->price) }}</span><br>
								<small>{{ $community->geoname->place_name }}, {{ strtoupper($community->state->abbr) }}{{ $community->tagline ? ' | '.$community->tagline : '' }}</small>
							</h3>
							
						</div>
					</div>
				</div>
			</div>