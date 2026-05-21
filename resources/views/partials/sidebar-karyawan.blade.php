<div class="sidebar d-flex flex-column justify-content-between">

    <div>

        <div class="logo">
            ARTINDO
        </div>

        <!-- ABSENSI -->
        <a href="/karyawan" class="menu-item {{ request()->is('karyawan') ? 'menu-active' : '' }}">

            <i class="bi bi-file-earmark-text"></i>

            Absensi

        </a>

        <!-- JADWAL -->
        <a href="/jadwal-kegiatan" class="menu-item {{ request()->is('jadwal-kegiatan') ? 'menu-active' : '' }}">

            <i class="bi bi-calendar-event"></i>

            Jadwal Kegiatan

        </a>

    </div>

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
