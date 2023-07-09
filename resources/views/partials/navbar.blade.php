<header>
<nav class="navbar navbar-expand-lg navbar-light mt-2">
    <div class="container">
        <a class="navbar-brand" href="/"><img src="{{ asset('/images/logo-2.png') }}" width="50px" height="50px"> BMIC</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <div class="nav-area">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link {{ $title === 'Home' ? 'active' : '' }}" href="/"><span
                                data-feather="home"></span> Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ $title === 'Map' ? 'active' : '' }}" href="/map"><span
                                data-feather="map-pin"></span> Map</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ $title === 'Event' ? 'active' : '' }}" href="/event"><span
                                data-feather="image"></span> Event</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ $title === 'Data Mangrove' ? 'active' : '' }}" href="/data-mangrove"><span
                                data-feather="list"></span> Data Mangrove</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ $title === 'About' ? 'active' : '' }}" href="/about"><span
                                data-feather="search"></span> Tentang Kami</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ $title === 'Ticket' ? 'active' : '' }}" href="/ticket">
                            <span data-feather="tag"></span> Tiket</a>
                    </li>
                </ul>
                <ul class="navbar-nav ms-auto">
                    @auth
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                Welcome, {{ auth()->user()->name }}
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                <li><a class="dropdown-item" href="/dashboard"><span
                                    data-feather="file-text"></span> My Dashboard</a></li>
                                <li>
                                    <form action="/logout" method="post">
                                        @csrf
                                        <button type="submit" class="dropdown-item">
                                            <span data-feather="log-out"></span> Logout
                                        </button>
                                    </form>
                                </li>
                            </ul>
                        </li>
                    @else
                        <li class="nav-item">
                            <a class="nav-link {{ $title === 'Login' ? 'active' : '' }}" href="/login">
                                <span data-feather="log-in"></span> Login Admin</a>
                        </li>
                    @endauth
                {{-- <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="/login"> <span
                            data-feather="log-in"></span> Login</a>
                    </li>
                </ul> --}}
            </div>
        </div>
    </div>
</nav>
</header>