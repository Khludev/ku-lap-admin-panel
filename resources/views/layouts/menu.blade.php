@php
    $admin_group = '/'.implode('|', [
        'admin.permissions.*',
        'admin.roles.*',
        'admin.users.*',
        'admin.settings.*',
        'admin.activity_logs.*',
        'admin.docs.*',
    ]).'/';
@endphp

<li class="{{ preg_match('/admin.dashboard.*/', request()->route()->getName())? 'active':'' }}">
    <a href="{{ route('admin.dashboard') }}"><i class="fal fa-fw fa-tachometer mr-3"></i>Dashboard</a>
</li>
{{-- Administrative Group --}}
<li>
    <a href="#" data-toggle="collapse" data-target="#group1" aria-expanded="{{ preg_match($admin_group, request()->route()->getName())? 'true':'false' }}"><i class="fal fa-fw fa-cogs mr-3"></i>Administrative</a>
</li>
<ul id="group1" class="collapse list-unstyled {{ preg_match($admin_group, request()->route()->getName())? 'show':'' }}">
    @can('Read Permissions')
    <li class="{{ preg_match('/admin.permissions.*/', request()->route()->getName())? 'active':'' }}">
        <a href="{{ route('admin.permissions') }}"><i class="fal fa-fw fa-key mr-3"></i>Permissions</a>
    </li>
    @endcan
    @can('Read Roles')
    <li class="{{ preg_match('/admin.roles.*/', request()->route()->getName())? 'active':'' }}">
        <a href="{{ route('admin.roles') }}"><i class="fal fa-fw fa-shield-alt mr-3"></i>Roles</a>
    </li>
    @endcan
    @can('Read Users')
    <li class="{{ preg_match('/admin.users.*/', request()->route()->getName())? 'active':'' }}">
        <a href="{{ route('admin.users') }}"><i class="fal fa-fw fa-user mr-3"></i>Users</a>
    </li>
    @endcan
    @can('Read Members')
    <li class="{{ preg_match('/admin.members.*/', request()->route()->getName())? 'active':'' }}">
        <a href="{{ route('admin.members') }}"><i class="fal fa-fw fa-users-class mr-3"></i>Members</a>
    </li>
    @endcan
    @can('Read Settings')
    <li class="{{ preg_match('/admin.settings.*/', request()->route()->getName())? 'active':'' }}">    
        <a href="{{ route('admin.settings') }}"><i class="fal fa-fw fa-cog mr-3"></i>System Settings</a>
    </li>
    @endcan
    @can('Read Activity Logs')
    <li class="{{ preg_match('/admin.activity_logs.*/', request()->route()->getName())? 'active':'' }}">
        <a href="{{ route('admin.activity_logs') }}"><i class="fal fa-fw fa-file-alt mr-3"></i>Activity Logs</a>
    </li>
    @endcan
    @can('Read Docs')
    <li class="{{ preg_match('/admin.docs.*/', request()->route()->getName())? 'active':'' }}">
        <a href="{{ route('admin.docs') }}"><i class="fal fa-fw fa-book mr-3"></i>Docs</a>
    </li>
    @endcan
</ul>
{{-- End Administrative Group --}}
