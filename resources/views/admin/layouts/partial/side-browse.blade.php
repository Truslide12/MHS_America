<li class="@if(Request::is('luna/browse/users*')) active @endif">
            <a href="{{ URL::route('admin-browse-users') }}">
              <i class="fa fa-user"></i><span class="link-title"> Users</span>
            </a> 
          </li>
          <li class="@if(Request::is('luna/browse/profiles*')) active @endif">
            <a href="{{ URL::route('admin-browse-profiles') }}">
              <i class="fa fa-file"></i><span class="link-title"> Profiles</span>
            </a> 
          </li>
          <li class="@if(Request::is('luna/browse/companies*')) active @endif">
            <a href="{{ URL::route('admin-browse-companies') }}">
              <i class="fa fa-users"></i><span class="link-title"> Companies</span>
            </a>
          </li>