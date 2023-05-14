<li class="navigation-header"><span>Job</span></li>

<li class="nav-item {{ $menu_active == 'jobs' ? 'active' : ''}}">
    <a href="{{ route('laravel-admin.jobs.index') }}">
        <i class="feather icon-archive"></i>
        <span class="menu-title">Jobs</span>
    </a>
</li>

{{--<li class="navigation-header"><span>Site settings</span></li>
<li class="nav-item {{ $menu_active == 'settings' ? 'active' : ''}}">
    <a href="{{ route('laravel-admin.setting.edit') }}">
        <i class="feather icon-archive"></i>
        <span class="menu-title">Settings</span>
    </a>
</li>--}}