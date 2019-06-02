          <li class="@if(Request::is('luna')) active @endif">
            <a href="{{ URL::route('admin-welcome') }}">
              <i class="fa fa-dashboard"></i><span class="link-title"> Dashboard</span> 
            </a>
          </li>
          <li class="@if(Request::is('luna/messages*')) active @endif">
            <a href="{{ URL::route('admin-messages') }}">
              <i class="fa fa-envelope"></i><span class="link-title"> Messages</span> 
            </a> 
          </li>
          <li class="@if(Request::is('luna/bug-reports*')) active @endif">
            <a href="{{ URL::route('admin-reports') }}">
              <i class="fa fa-comments"></i><span class="link-title"> Bug Reports</span> 
            </a> 
          </li>
          <li class="@if(Request::is('luna/content*')) active @endif">
            <a href="{{ URL::route('admin-content-news') }}">
              <i class="fa fa-file-text-o"></i><span class="link-title"> Content</span>
            </a>
          </li>
          <li class="@if(Request::is('luna/communities*')) active @endif">
            <a href="{{ URL::route('admin-communities') }}">
              <i class="fa fa-users"></i><span class="link-title"> Community Settings</span>
            </a>
          </li>
          @if(Request::is('luna/communities*'))
              <li class="subitem @if(Request::is('luna/communities/spotlight')) subactive @endif">
                <a href="{{ URL::route('admin-communities-spotlight') }}">
                  <i class="fa fa-bullhorn"></i> <span class="link-title"> Spotlight</span>
                </a>
              </li>
              <li class="subitem @if(Request::is('luna/communities/plans')) subactive @endif">
                <a href="{{ URL::route('admin-communities-plans') }}">
                  <i class="fa fa-tags"></i> <span class="link-title"> Plans</span>
                </a>
              </li>
              <li class="subitem @if(Request::is('luna/communities/amenities')) subactive @endif">
                <a href="{{ URL::route('admin-communities-amenities') }}">
                  <i class="fa fa-hdd-o"></i> <span class="link-title"> Amenities Database</span>
                </a>
              </li>
              <li class="subitem @if(Request::is('luna/communities/settings')) subactive @endif">
                <a href="{{ URL::route('admin-communities-settings') }}">
                  <i class="fa fa-file-text-o"></i> <span class="link-title"> Application Settings</span>
                </a>
              </li>
          @endif
          <li class="@if(Request::is('luna/server*')) active @endif">
            <a href="{{ URL::route('admin-server') }}">
              <i class="fa fa-tasks"></i><span class="link-title"> Server status</span>
            </a>
          </li>