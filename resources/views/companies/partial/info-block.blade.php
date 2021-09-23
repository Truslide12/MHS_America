<div class="col-xs-6 col-sm-12">
						<p>
							<span class="text-muted"><i class="glyphicon glyphicon-map-marker"></i></span>
							{{ $company->city->place_name }}, 
							{{ strtoupper($company->state->abbr) }}
						</p>
						@if($company->phone != '')<p>
							<span class="text-muted"><i class="glyphicon glyphicon-earphone"></i></span>
							{{ $company->phone }}
						</p>@endif
						@if($company->fax != '')<p>
							<span class="text-muted"><i class="glyphicon glyphicon-print"></i></span>
							{{ $company->fax }}
						</p>@endif
						<p>
							<span class="text-muted"><i class="glyphicon glyphicon-time"></i></span>
							Joined {{ $company->created_at->format('M d, Y') }}
						</p>
					</div>