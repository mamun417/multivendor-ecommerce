<style>
    .order_manage_menu_active, .menu_active {
        background: #87b2b3;
        color: white;
    }
</style>

<nav class="navbar-default navbar-static-side" role="navigation">
    <div class="sidebar-collapse">
        <ul class="nav metismenu" id="side-menu">
            <li class="nav-header">
                <div class="dropdown profile-element">
                    <img width="48" alt="image" class="rounded-circle"
                         src="{{ isset(Auth::user()->image) ? Auth::user()->image->url : asset('backend/img/profile/man.svg') }}"/>
                    <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                        <span class="block m-t-xs font-bold">
                            @auth
                                {{ auth()->user()->name }}
                            @endauth
                        </span>
                        <span class="text-muted text-xs block">Administrator<b class="caret"></b></span>
                    </a>
                    <ul class="dropdown-menu animated fadeInRight m-t-xs">
                        <li><a class="dropdown-item" href="{{ route('admin.profile') }}">Profile</a></li>
                        <li class="dropdown-divider"></li>
                        <li>
                            <a class="dropdown-item" href="javascript:void(0)"
                               onclick="document.getElementById('logout-form').submit()">Logout</a>
                            <form id="logout-form" action="{{ route('admin.logout') }}" method="POST"
                                  style="display: none;">
                                @csrf
                            </form>
                        </li>
                    </ul>
                </div>
                <div class="logo-element">
                    IN+
                </div>
            </li>

            <li class="{{ getActiveClassByRoute('admin.dashboard') }}">
                <a href="{{ route('admin.dashboard') }}">
                    <i class="fa fa-th-large"></i>
                    <span class="nav-label">Dashboards</span>
                </a>
            </li>

            @superadmin('super-admin')
                <li class="{{ getActiveClassByController('CategoryController') }}">
                    <a href="{{ route('admin.categories.index') }}">
                        <i class="fa fa-list-ul"></i> <span class="nav-label">Categories</span>
                    </a>
                </li>

                <li class="{{ getActiveClassByController('SlidersController') }}">
                    <a href="{{ route('admin.sliders.index') }}"><i class="fa fa-photo"></i>
                        <span class="nav-label">Sliders</span>
                    </a>
                </li>
            @endsuperadmin


            @vendor('vendor')
                <li class="{{ getActiveClassByController('BrandController') }}">
                    <a href="{{ route('admin.brands.index') }}"><i class="fa fa-bars"></i>
                        <span class="nav-label">Brands</span>
                    </a>
                </li>
            <li class="{{ getActiveClassByController('ProductController') }}">
                    <a href="{{ route('admin.products.index') }}"><i class="fa fa-bars"></i>
                        <span class="nav-label">Products</span>
                    </a>
                </li>
            @endvendor
        </ul>
    </div>
</nav>
