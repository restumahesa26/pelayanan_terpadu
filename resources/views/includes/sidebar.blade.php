<nav id="sidebar" class="sidebar js-sidebar">
    <div class="sidebar-content js-simplebar">
        <a class="sidebar-brand" href="index.html">
            <span class="align-middle">E-PTSP</span>
        </a>

        <ul class="sidebar-nav">
            <li class="sidebar-header">
                Pages
            </li>

            <li class="sidebar-item @if(Route::is('dashboard')) active @endif">
                <a class="sidebar-link" href="{{ route('dashboard') }}">
                    <i class="align-middle" data-feather="sliders"></i> <span
                        class="align-middle">Dashboard</span>
                </a>
            </li>

            <li class="sidebar-item @if(Route::is('buku-tamu.*')) active @endif">
                <a class="sidebar-link" href="{{ route('buku-tamu.index') }}">
                    <i class="align-middle" data-feather="user"></i> <span class="align-middle">Buku Tamu</span>
                </a>
            </li>

            <li class="sidebar-item @if(Route::is('umum.*')) active @endif">
                <a class="sidebar-link" href="{{ route('umum.index') }}">
                    <i class="align-middle" data-feather="user"></i> <span class="align-middle">Umum</span>
                </a>
            </li>

            <li class="sidebar-item @if(Route::is('pidana.*')) active @endif">
                <a class="sidebar-link" href="{{ route('pidana.index') }}">
                    <i class="align-middle" data-feather="log-in"></i> <span class="align-middle">Pidana</span>
                </a>
            </li>

            <li class="sidebar-item @if(Route::is('perdata.*')) active @endif">
                <a class="sidebar-link" href="{{ route('perdata.index') }}">
                    <i class="align-middle" data-feather="user-plus"></i> <span class="align-middle">Perdata</span>
                </a>
            </li>

            <li class="sidebar-item @if(Route::is('hukum.*')) active @endif">
                <a class="sidebar-link" href="{{ route('hukum.index') }}">
                    <i class="align-middle" data-feather="book"></i> <span class="align-middle">Hukum</span>
                </a>
            </li>

            <li class="sidebar-item @if(Route::is('informasi-pengaduan.*')) active @endif">
                <a class="sidebar-link" href="{{ route('informasi-pengaduan.index') }}">
                    <i class="align-middle" data-feather="book"></i> <span class="align-middle">Informasi & Pengaduan</span>
                </a>
            </li>

            <li class="sidebar-item @if(Route::is('e-posbakum.*')) active @endif">
                <a class="sidebar-link" href="{{ route('e-posbakum.index') }}">
                    <i class="align-middle" data-feather="book"></i> <span class="align-middle">E-Posbakum</span>
                </a>
            </li>

            <li class="sidebar-item @if(Route::is('renta-disabilitas.*')) active @endif">
                <a class="sidebar-link" href="{{ route('renta-disabilitas.index') }}">
                    <i class="align-middle" data-feather="book"></i> <span class="align-middle">Kaum Renta / Disabilitas</span>
                </a>
            </li>
        </ul>
    </div>
</nav>
