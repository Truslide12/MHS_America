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
              <i class="fa fa-home"></i><span class="link-title"> Community Dashboard</span>
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
                  <i class="fa fa-tags"></i> <span class="link-title"> Profile Plans</span>
                </a>
              </li>
              <li class="subitem @if(Request::is('luna/communities/amenities')) subactive @endif">
                <a href="{{ URL::route('admin-communities-amenities') }}">
                  <i class="fa fa-hdd-o"></i> <span class="link-title"> Amenities Database</span>
                </a>
              </li>
              <li class="subitem @if(Request::is('luna/communities/settings')) subactive @endif">
                <a href="{{ URL::route('admin-communities-settings') }}">
                  <i class="fa fa-file-text-o"></i> <span class="link-title"> Profile Settings</span>
                </a>
              </li>
          @endif
          <li class="@if(Request::is('luna/customer*')) active @endif">
            <a href="{{ URL::route('admin-customers') }}">
              <i class="fa fa-user"></i><span class="link-title"> Manage Customers</span>
            </a>
          </li>
          @if(Request::is('luna/customer*'))
              <li class="subitem @if(Request::is('luna/customers/index')) subactive @endif">
                <a href="{{ URL::route('admin-customers-index') }}">
                  <i class="fa fa-users"></i> <span class="link-title"> New Customers</span>
                </a>
              </li>
              <li class="subitem @if(Request::is('luna/customers/company-accounts')) subactive @endif">
                <a href="{{ URL::route('admin-customers-company-accounts') }}">
                  <i class="fa fa-users"></i> <span class="link-title"> Company Accounts Index</span>
                </a>
              </li>
              <li class="subitem @if(Request::is('luna/customers/personal-accounts')) subactive @endif">
                <a href="{{ URL::route('admin-customers-personal-accounts') }}">
                  <i class="fa fa-users"></i> <span class="link-title"> Personal Accounts Index</span>
                </a>
              </li>
              <li class="subitem @if(Request::is('luna/customers/lookup')) subactive @endif">
                <a href="{{ URL::route('admin-customers-lookup') }}">
                  <i class="fa fa-certificate"></i> <span class="link-title"> Account Lookup</span>
                </a>
              </li>
          @endif
          <li class="@if(Request::is('luna/meeting*')) active @endif">
            <a href="{{ URL::route('admin-meeting-center') }}">
              <i class="fa fa-fire"></i><span class="link-title"> Meetings Center</span>
            </a>
          </li>
          @if(Request::is('luna/meeting*'))
              <li class="subitem @if(Request::is('luna/meetings/lookup')) subactive @endif">
                <a href="{{ URL::route('admin-meeting-center-lookup') }}">
                  <i class="fa fa-users"></i> <span class="link-title"> Lookup Meeting</span>
                </a>
              </li>
          @endif
          <li class="@if(Request::is('luna/server*')) active @endif">
            <a href="{{ URL::route('admin-server') }}">
              <i class="fa fa-tasks"></i><span class="link-title"> Server status</span>
            </a>
          </li>
          <li class="@if(Request::is('luna/sitemap*')) active @endif">
            <a href="{{ URL::route('admin-sitemap') }}">
              <i class="fa fa-sitemap"></i><span class="link-title"> Sitemap</span>
            </a>
          </li>
          @if(Request::is('luna/sitemap*'))
          <li class="subitem @if(Request::is('luna/sitemap')) subactive @endif">
                <a href="{{ URL::route('admin-sitemap') }}">
                  <i class="fa fa-users"></i> <span class="link-title"> Sitemap Information</span>
                </a>
              </li>
              <li class="subitem @if(Request::is('luna/sitemap/manage')) subactive @endif">
                <a href="{{ URL::route('admin-sitemap-manage') }}">
                  <i class="fa fa-users"></i> <span class="link-title"> Sitemaps Manager</span>
                </a>
              </li>
              <li class="subitem @if(Request::is('luna/sitemap/settings')) subactive @endif">
                <a href="{{ URL::route('admin-sitemap-settings') }}">
                  <i class="fa fa-users"></i> <span class="link-title"> Sitemap Settings</span>
                </a>
              </li>
          @endif