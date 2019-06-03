<div id="header-wrapper"{{ $navbarclass or '' }}>
<div class="container">
	<div class="row clearfix">
		<div class="col-md-12 column">
			<nav class="navbar navbar-default" role="navigation">
				<div class="navbar-header">
					 <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#main-collapse"> <span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button> 
					 <a class="navbar-brand" href="{{ URL::route('welcome') }}">
					 	<img src="/img/logo-2014-mini.png" alt="MHS America">
					 </a>
				</div>
				<div class="collapse navbar-collapse" id="main-collapse">
					<ul class="nav navbar-nav" id="theMenu">
						<li>
							<a href="#home" class="smoothScroll">Start</a>
						</li>
						<li>
							<a href="#about" class="smoothScroll">Introduction</a>
						</li>
						<li>
							<a href="#services" class="smoothScroll">Our services</a>
						</li>
						<li>
							<a href="#portfolio" class="smoothScroll">Services</a>
						</li>
						<li>
							<a href="#contact" class="smoothScroll">Contact</a>
						</li>
					</ul>

					<ul class="nav navbar-nav navbar-right">
					@if(Confide::user())
						@include('layouts.partial.usermenu')
					@else
						@include('layouts.partial.guestmenu')
					@endif
					</ul>
				</div>
			</nav>
		</div>
	</div>
	@yield('navbar-after')
	@when-navbar-fixed
		@if(isset($show_navbar_divider))
		<div class="row divider blue hidden-xs"></div>
		@endif
	@endif
</div>
</div>