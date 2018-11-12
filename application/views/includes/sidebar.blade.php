<!-- sidebar navigation -->
<div class="ui thin sidebar vertical left inverted visible accordion menu">
    <div class="item">{{ $app_name }}</div>
    <div class="item">
        <a href="{{ base_url() }}">
            <i class="fa fa-dashboard"></i> <strong>Dashboard</strong>
        </a>
    </div>
    <div class="item">
        <a class="title">
            <i class="dropdown icon"></i> 
            <i class="fa fa-users"></i> 
            <strong>User</strong>
        </a>
        <div class="content menu">
            <a class="item" href="{{ base_url('backend/users') }}">Users</a>
            <a class="item" href="{{ base_url('backend/user/role') }}">Roles</a>
            <a class="item" href="{{ base_url('backend/user/permission') }}">Permission</a>
        </div>
    </div>
    <div class="item">
        <a class="title">
            <i class="dropdown icon"></i>
            <i class="fa fa-wrench"></i> 
            <strong>Settings</strong>
        </a>
        <div class="content menu">
            <a class="item" href="{{ base_url('settings') }}">General</a>
            <a class="item" href="{{ base_url('setting/login') }}">Login</a>
        </div>
    </div>
</div>