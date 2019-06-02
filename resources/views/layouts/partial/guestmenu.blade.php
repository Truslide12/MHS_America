						<li class="dropdown hidden-xs">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">Account <b class="caret"></b></a>
							<ul class="dropdown-menu">
								<li>
	                                <div class="navbar-content">
	                                    <div class="row">
	                                        <div class="col-md-8 col-sm-8">
	                                            <p>Registering allows you to...</p>
	                                            <ul>
	                                            	<li>Bookmark profiles and listings</li>
	                                            	<li>Give feedback and suggestions</li>
	                                            	<li>Manage business services</li>
	                                            	@if(1==2)<li>Access developer tools</li>@endif
												</ul>
	                                        </div>
	                                        <div class="col-md-4 col-sm-4 text-right">
	                                            <p>
	                                            	<a href="{{ URL::route('account-register') }}" class="btn btn-primary btn-sm">Register</a>
	                                            </p>
	                                            <p>
	                                            	<a href="{{ URL::route('account-login') }}" class="btn btn-info">Login</a>
	                                            </p>
	                                        </div>
										</div>
	                                    <div class="row">
	                                        <div class="col-md-12 text-right">
	                                        	<p>
													<small>
														<a href="{{ URL::route('account-help') }}">Help</a> - 
														<a href="{{ URL::route('account-recovery') }}">Lost password?</a>
													</small>
												</p>
	                                        </div>
	                                    </div>
	                                </div>
	                            </li>
							</ul>
						</li>
						<li class="visible-xs">
							<a href="{{ URL::route('account-login') }}">Login</a>
						</li>
						<li class="visible-xs">
							<a href="{{ URL::route('account-register') }}">Register</a>
						</li>