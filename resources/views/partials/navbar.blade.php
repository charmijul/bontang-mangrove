<header>
<nav class="navbar navbar-expand-lg navbar-light mt-2">
    <div class="container">
        <a class="navbar-brand" href="/"><img src="{{ asset('/images/logo-122x140.png') }}" width="50px" height="50px"> TWA
            Mangrove Bontang</a>
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
                        <a class="nav-link {{ $title === 'Data-Mangrove' ? 'active' : '' }}" href="/data-mangrove"><span
                                data-feather="list"></span> Data Mangrove</a>
                    </li>
                    {{-- <li class="dropdown">
                    <li><a class="nav-link {{ ($title === 'Event' or $title === 'Data-Mangrove') ? 'active' : '' }}" href=""><span
                                data-feather="image"></span> Gallery</a>
                        <ul class="dropdown-content">
                            <li><a href="/event">Kegiatan</a></li>
                            <li><a href="/data-mangrove">Data Mangrove</a></li>
                        </ul>
                    </li>
                    </li> --}}
                    <li class="nav-item">
                        <a class="nav-link {{ $title === 'About' ? 'active' : '' }}" href="/about"><span
                                data-feather="search"></span> Tentang Kami</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ $title === 'Ticket' ? 'active' : '' }}" href="/ticket"><span
                                data-feather="tag"></span> Tiket</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/login"> <span
                            data-feather="log-in"></span> Login</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</nav>
</header>