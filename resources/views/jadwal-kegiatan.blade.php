@extends('layouts.app')

@section('content')
    <div class="topbar mb-4">

        <input type="text" class="search-box" placeholder="Search activities...">

        <div class="d-flex align-items-center gap-3">

            <img src="https://i.pravatar.cc/40" width="40" height="40" class="rounded-circle">

        </div>

    </div>

    <h1 class="mb-5">
        Jadwal Kegiatan
    </h1>

    <div class="d-flex gap-3 mb-5">

        <div class="filter-btn border-info"></div>
        <div class="filter-btn"></div>
        <div class="filter-btn"></div>
        <div class="filter-btn"></div>
        <div class="filter-btn"></div>

    </div>

    <h5 class="mb-3">
        Hari Ini, Apr 21
    </h5>

    <hr>

    <!-- CARD 1 -->
    <div class="task-card d-flex justify-content-between align-items-center">

        <div class="d-flex align-items-center gap-4">

            <div class="time">

                <div>09:00 AM</div>

                <div>11:30 AM</div>

            </div>

            <div class="task-title">

                Pelatihan Karyawan Baru

            </div>

        </div>

        <div class="task-action">

            <i class="bi bi-eye"></i>

            <i class="bi bi-pencil"></i>

        </div>

    </div>

    <!-- CARD 2 -->
    <div class="task-card d-flex justify-content-between align-items-center">

        <div class="d-flex align-items-center gap-4">

            <div class="time">

                <div>01:00 PM</div>

                <div>02:30 PM</div>

            </div>

            <div class="task-title">

                Audit Keamanan Sistem Q3

            </div>

        </div>

        <div class="task-action">

            <i class="bi bi-eye"></i>

            <i class="bi bi-pencil"></i>

        </div>

    </div>

    <br>

    <h5 class="mb-3">
        Kemarin, Apr 20
    </h5>

    <hr>

    <!-- CARD 3 -->
    <div class="task-card d-flex justify-content-between align-items-center">

        <div class="d-flex align-items-center gap-4">

            <div class="time">

                <div>10:00 AM</div>

                <div>11:00 AM</div>

            </div>

            <div class="task-title">

                Maintenance Server Utama

            </div>

        </div>

        <div class="task-action">

            <i class="bi bi-eye"></i>

        </div>

    </div>
@endsection
