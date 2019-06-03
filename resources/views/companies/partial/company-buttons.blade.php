@if(Auth::check())				<form action="{{ URL::route('company-cmd-watch-post', array('company' => $company->id)) }}" method="POST" style="display:inline-block;">
					{{ csrf_field() }}
					@if($user->watchesCompany($company->id))
					<button type="submit" class="btn btn-info margin-r">Unwatch<span class="hidden-xs"> company</span></button>
					@else
					<button type="submit" class="btn btn-labeled btn-info margin-r">
						<span class="btn-label">
							<i class="fa fa-search"></i>
						</span>
						Watch<span class="hidden-xs"> company</span>
					</button>
					@endif
				</form>
				<form action="{{ URL::route('company-cmd-kudos-post', array('company' => $company->id)) }}" method="POST" style="display:inline-block;">
					{{ csrf_field() }}
					@if($user->kudosCompany($company->id))
					<button type="submit" class="btn btn-success margin-r"><i class="glyphicon glyphicon-ok"></i> Kudo'd</button>
					@else
					<button type="submit" class="btn btn-labeled btn-success margin-r">
						<span class="btn-label">
							<i class="fa fa-star"></i>
						</span>
						Give kudos
					</button>
					@endif
				</form>
				<a href="#" class="btn btn-default"><span class="visible-xs-inline">Message</span><span class="hidden-xs">Send a message</span></a>
				@endif