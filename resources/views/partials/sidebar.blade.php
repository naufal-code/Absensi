<div class="sidebar d-flex flex-column justify-content-between">

    <div>

        <div class="logo">
            ARTINDO
        </div>

        <!-- Jadwal Kegiatan -->
        <a href="/dashboard" class="menu-item {{ request()->is('dashboard') ? 'menu-active' : '' }}">

            <i class="bi bi-calendar-event"></i>

            Jadwal Kegiatan

        </a>

        <!-- Laporan Absensi -->
        <a href="/laporan-absensi" class="menu-item {{ request()->is('laporan-absensi') ? 'menu-active' : '' }}">

            <i class="bi bi-grid"></i>

            Laporan Absensi

        </a>

        <!-- Laporan Kegiatan -->
        <a href="/laporan-kegiatan" class="menu-item {{ request()->is('laporan-kegiatan') ? 'menu-active' : '' }}">

            <i class="bi bi-file-earmark-text"></i>

            Laporan Kegiatan

        </a>

    </div>

    <!-- Logout -->
    <div class="p-3">

        <form action="{{ route('logout') }}" method="POST">
            @csrf

            <button type="submit" class="menu-item border-0 bg-transparent w-100 text-start">

                <i class="bi bi-box-arrow-left"></i>

                Logout

            </button>

        </form>

    </div>

</div>
