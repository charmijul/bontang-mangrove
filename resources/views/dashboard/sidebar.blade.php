<link href="{{ asset('css/dashboard/sidebar.css') }}" rel="stylesheet">

<nav id="sidebarMenu" class="sidebar col-md-3 col-lg-2 d-md-block collapse">
    <div class="position-sticky pt-3">
        <ul class="nav flex-column">
            <li class="nav-item">
                <a class="nav-link {{ Request::is('dashboard') ? 'active' : '' }}" aria-current="page" href="/dashboard">
                    <span data-feather="home"></span>
                    Dashboard
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Request::is('dashboard/mangrove') ? 'active' : '' }}" href="/dashboard/mangrove">
                    <span data-feather="file"></span>
                    Data Mangrove
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Request::is('dashboard/event') ? 'active' : '' }}" href="/dashboard/event">
                    <span data-feather="image"></span>
                    Data Event
                </a>
            </li>
        </ul>
    </div>
</nav>