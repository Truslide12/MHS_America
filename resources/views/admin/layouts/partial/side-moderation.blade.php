<li class="@if(Request::is('luna/moderation*')) active @endif">
            <a href="{{ URL::route('admin-browse-users') }}">
              <i class="fa fa-flag"></i><span class="link-title"> Moderation</span>
            </a> 
          </li>