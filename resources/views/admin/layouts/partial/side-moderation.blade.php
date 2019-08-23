<li class="@if(Request::is('luna/moderation*')) active @endif">
            <a href="{{ URL::route('admin-moderation') }}">
              <i class="fa fa-flag"></i><span class="link-title"> Reports</span>
            </a> 
          </li>