<div class="sidebar-menu">
    <div class="sidebar-header">
        <div class="logo">
            <a href="index.html"><img src="{{ asset('public/assets/images/icon/logo.png') }}" alt="logo"></a>
        </div>
    </div>
    <div class="main-menu">
        <div class="menu-inner">
            <nav>
                <ul class="metismenu" id="menu">
                    <li class="{{ (strpos(Route::currentRouteName(), '/') == 0) ? 'active' : '' }}">
                        <a href="javascript:void(0)" aria-expanded="true"><i
                                class="ti-dashboard"></i><span>dashboard</span></a>
                        <ul class="collapse">
                            <li class="{{ Route::is('home') ? 'active' : '' }}"><a
                                    href="{{ route('home') }}">Dashboard</a></li>
                        </ul>
                    </li>
                    <li class="{{ (strpos(Route::currentRouteName(), '/') == 0) ? 'active' : '' }}">
                        <a href="javascript:void(0)" aria-expanded="true"><i class="ti-layout-sidebar-left"></i><span>
                                Roles Management
                            </span></a>
                        <ul class="collapse">
                            <li class="{{ Route::is('roles') ? 'active' : '' }}"><a
                                    href="{{ route('roles') }}">Roles</a></li>
                        </ul>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
</div>
