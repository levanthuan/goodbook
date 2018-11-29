<li class="dropdown">
    <a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown">
        <img src="{{ URL::asset('assets/backend/img/placeholders/avatars/avatar.jpg') }}" alt="avatar">
    </a>
    <ul class="dropdown-menu dropdown-menu-right">
        <li class="dropdown-header">
            <strong>ADMINISTRATOR</strong>
        </li>
        <li>
            <a href="javascript:void(0)">
                <i class="fa fa-inbox fa-fw pull-right"></i>
                Link #1
            </a>
        </li>
        <li>
            <a href="javascript:void(0)">
                <i class="fa fa-pencil-square fa-fw pull-right"></i>
                Link #2
            </a>
        </li>
        <li>
            <a href="javascript:void(0)">
                <i class="fa fa-picture-o fa-fw pull-right"></i>
                Link #3
            </a>
        </li>
        <li class="divider"><li>
        <li>
            <a href="javascript:void(0)">
                <i class="gi gi-settings fa-fw pull-right"></i>
                Link #1
            </a>
        </li>
        <li>
            <a href="{{ route('admin.auth.logout') }}">
                <i class="fa fa fa-sign-out fa-fw pull-right"></i>
                Logout
            </a>
        </li>
    </ul>
</li>