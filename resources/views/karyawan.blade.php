@extends('layouts.app')

@section('content')
    <div class="report-card rounded-3">

        <!-- HEADER -->
        <div class="report-header d-flex justify-content-between align-items-center">

            <h3 class="text-info mb-0">
                Absensi
            </h3>

            <img src="https://i.pravatar.cc/40" width="40" height="40" class="rounded-circle">

        </div>

        <!-- CONTENT -->
        <div class="p-4">

            <h1 class="mb-2">
                Selamat Datang
            </h1>

            <p class="text-light mb-5">
                {{ Auth::check() && Auth::user()->name }}
            </p>

            <!-- FILTER -->
            <div class="d-flex gap-3 mb-4">

                <button class="btn btn-add px-5">
                    Hadir
                </button>

                <button class="btn btn-report px-5">
                    Sakit
                </button>

                <button class="btn btn-report px-5">
                    Izin
                </button>

            </div>

            <!-- TABLE -->
            <div class="table-responsive">

                <table class="table custom-table align-middle">

                    <thead>
                        <tr>
                            <th>TANGGAL</th>
                            <th>JAM</th>
                            <th>ALASAN</th>
                            <th>KETERANGAN</th>
                        </tr>
                    </thead>

                    <tbody>

                        <tr>
                            <td>21 Apr 2026</td>
                            <td>00:30 - 01:30</td>
                            <td>-</td>
                            <td>HADIR</td>
                        </tr>

                        <tr>
                            <td>21 Apr 2026</td>
                            <td>00:30 - 01:30</td>
                            <td>-</td>
                            <td>SAKIT</td>
                        </tr>

                        <tr>
                            <td>21 Apr 2026</td>
                            <td>00:30 - 01:30</td>
                            <td>Kerumah Nenek</td>
                            <td>IZIN</td>
                        </tr>

                    </tbody>

                </table>

            </div>

            <!-- FOOTER -->
            <div class="table-footer">

                <div>
                    Menampilkan 1 - 5 dari 1,248 data
                </div>

                <div class="pagination-custom">

                    <button>
                        ‹
                    </button>

                    <button class="active">
                        1
                    </button>

                    <button>
                        2
                    </button>

                    <button>
                        3
                    </button>

                    <button>
                        ›
                    </button>

                </div>

            </div>

        </div>

    </div>
@endsection
