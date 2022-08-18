@php
function checkRouteActive($route)
{
    if (Route::current()->uri == $route) {
        return 'active';
    }
}
@endphp

<div class="left-sidenav">
    <!-- LOGO -->
    <div class="brand">
        <a href="#" class="logo">
            <span>
                <img src="{{ url('public/superadmin') }}/images/logobibit.png" alt="logo-small" class="logo-sm">
            </span>
        </a>
    </div>
    <!--end logo-->
    <div class="menu-content h-100" data-simplebar>
        <ul class="metismenu left-sidenav-menu">
            <li>
                <a href="{{ url('superadmin') }}" class="{{ checkRouteActive('superadmin') }}">
                    <i data-feather="home" class="align-self-center menu-icon"></i>
                    <span>Dashboard</span>
                    <span class="menu">
                        <i class="mdi "></i>
                    </span>
                </a>
            </li>
            <li>
                <a href="{{ url('product') }}" class="{{ checkRouteActive('prudoct') }}">
                    <i data-feather="gift" class="align-self-center menu-icon"></i>
                    <span>Product</span>
                    <span class="menu">
                        <i class="mdi "></i>
                    </span>
                </a>
            </li>
            <li>
                <a href="{{ url('list') }}" class="{{ checkRouteActive('list') }}">
                    <i data-feather="grid" class="align-self-center menu-icon"></i>
                    <span>Kategori</span>
                    <span class="menu">
                        <i class="mdi "></i>
                    </span>
                </a>
            </li>

            <li>
                <a href="javascript: void(0);">
                    <i data-feather="" class="align-self-center menu-icon"></i>
                    <span>MasterData</span>
                    <span class="menu-arrow">
                        <i class="mdi mdi-chevron-right"></i>
                    </span>
                </a>
                <ul class="nav-second-level" aria-expanded="false">

                    <li><a class="{{ checkRouteActive('#') }}" href="#">Pembeli</a></li>
                    <li><a class="{{ checkRouteActive('#') }}" href="#">Penjual</a></li>
                </ul>
            </li>
            </li>



        </ul>

    </div>
</div>
