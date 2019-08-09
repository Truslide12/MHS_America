		<ul class="list-group margin-b">
			<li class="list-group-item @if($active == 'dashboard') active @endif hidden-xs">
				<h4 class="list-group-item-heading">
				@if($active == 'dashboard') 
				Dashboard Home
				@else
				<a href="{{ URL::route('account') }}">Dashboard Home</a>
				@endif
				</h4>
			</li>
			@if($user->business == 1)
			<li class="list-group-item @if($active == 'mycompanies') active @endif ">
				<h4 class="list-group-item-heading">
				@if($active == 'mycompanies') 
				My Companies
				@else
				<a href="{{ URL::route('account-mycompanies') }}">My Companies</a>
				@endif
				</h4>
			</li>
			@endif
			@if($user->business == 0)
			<li class="list-group-item">
				<h4 class="list-group-item-heading"><a href="{{ URL::route('account-business') }}">Activate Business Features</a></h4>
			</li>
			@endif
			@if($user->business == 1 && 1==2)
			<li class="list-group-item">
				<h4 class="list-group-item-heading"><a href="{{ URL::route('account-business') }}">Business Center</a></h4>
			</li>
			@endif
			<li class="list-group-item hidden-xs">
				<h4 class="list-group-item-heading">
				<a href="/help/index">Help &amp; Guides</a>
				</h4>
			</li>
		</ul>
		@if($user->business != 1 && 1==2 )
		<h3>What to do next...</h3>
		<ul class="list-group">
			<li class="list-group-item list-item-info">
				<h4 class="list-group-item-heading"><a href="{{ URL::route('account-business') }}">Activate business features</a></h4>
				<p class="list-group-item-text">
					If you're going to be managing profiles or listings, you'll need to activate this functionality.
				</p>
			</li>
		</ul>
		@endif
		<h4>My watchlists</h4>
		<ul class="list-group">
			<li class="list-group-item @if($active == 'communities') active @endif">
				<h4 class="list-group-item-heading">
				@if($active == 'communities') 
				Communities
				@else
				<a href="{{ URL::route('account-communities') }}">Communities</a>
				@endif
				</h4>
			</li>
			<li class="list-group-item @if($active == 'homes') active @endif">
				<h4 class="list-group-item-heading">
				@if($active == 'homes') 
				Homes
				@else
				<a href="{{ URL::route('account-homes') }}">Homes</a>
				@endif
				</h4>
			</li>
			<li class="list-group-item @if($active == 'spaces') active @endif">
				<h4 class="list-group-item-heading">
				@if($active == 'spaces') 
				Spaces
				@else
				<a href="{{ URL::route('account-spaces') }}">Spaces</a>
				@endif
				</h4>
			</li>
			<li class="list-group-item @if($active == 'professionals') active @endif">
				<h4 class="list-group-item-heading">
				@if($active == 'professionals') 
				Professionals
				@else
				<a href="{{ URL::route('account-professionals') }}">Professionals</a>
				@endif
				</h4>
			</li>
			@if(1==2)<li class="list-group-item @if($active == 'companies') active @endif">
				<h4 class="list-group-item-heading">
				@if($active == 'companies') 
				Companies
				@else
				<a href="{{ URL::route('account-companies') }}">Companies</a>
				@endif
				</h4>
			</li>@endif
		</ul>

		<h4>Get Started</h4>
		<ul class="list-group">
			<li class="list-group-item">
				<h4 class="list-group-item-heading"><a href="page/home-plans">List a Home</a></h4>
			</li>
			<li class="list-group-item">
				<h4 class="list-group-item-heading"><a href="/page/community-plans">Register a Community</a></h4>
			</li>
		</ul>