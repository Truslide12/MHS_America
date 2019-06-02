						<li class="dropdown hidden-xs @if(Request::is('account*'))active @endif">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">{{ ($user->first_name == '') ? $user->username : $user->first_name . ' ' . $user->last_name }} <b class="caret"></b></a>
							<ul class="dropdown-menu">
								<li>
	                                <div class="navbar-content">
	                                    <div class="row">
	                                        <div class="col-md-4 col-sm-4">
	                                            <p><img src="{{ $user->gravatar(100) }}" class="img-thumbnail"></p>
	                                        </div>
	                                        <div class="col-md-8 col-sm-8">
	                                            <h4>{{ ($user->first_name =='' || $user->last_name == '') ? $user->username : $user->first_name . ' ' . $user->last_name }}</h4>
	                                            <p>
	                                            	<small>
														<a href="{{ URL::route('account') }}">Dashboard</a>
														@if($user->business == 1)
														 - <a href="{{ URL::route('account-business') }}">Business</a>
														@endif
														 - <a href="{{ URL::route('account-settings') }}">Settings</a>
													</small>
	                                            </p>
	                                        </div>
										</div>
	                                    <div class="row">
	                                        <div class="col-md-12">
	                                        	<hr class="no-margin-y">
	                                        	<p>
													<small>
														<span class="pull-right">
															<a href="{{ URL::route('account-logout') }}">Sign out</a>
														</span>
														@if($user->hasRole('admin'))
														<a href="{{ URL::route('admin-welcome') }}">Administration</a>
														@endif
														&nbsp;
													</small>
												</p>
	                                        </div>
	                                    </div>
	                                </div>
	                            </li>
							</ul>
						</li>
						<li class="visible-xs-block @if(Request::is('account*'))active @endif">
							<a href="{{ URL::route('account') }}">Dashboard</a>
						</li>
						<li class="visible-xs-block">
							<a href="{{ URL::route('account-logout') }}">Sign out</a>
						</li>