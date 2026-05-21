@extends('layouts.app')

@section('content')
    <div class="report-card">

        <!-- TOP HEADER -->
        <div class="report-header d-flex justify-content-between align-items-center">

            <h4 class="mb-0 text-info fw-semibold">
                Laporan Kegiatan
            </h4>

            <div class="d-flex align-items-center gap-3">

                <div class="position-relative">

                    <i class="bi bi-search search-icon"></i>

                    <input type="text" class="search-box report-search" placeholder="Search activities...">

                </div>

                <img src="https://i.pravatar.cc/40" width="38" height="38" class="rounded-circle">

            </div>

        </div>

        <!-- CONTENT -->
        <div class="p-4">

            <!-- TITLE -->
            <h1 class="report-title mb-4">
                Laporan Absensi
            </h1>

            <!-- FILTER -->
            <div class="d-flex justify-content-between align-items-center mb-4">

                <div class="d-flex gap-3">

                    <input type="date" class="form-control filter-input">

                    <input type="date" class="form-control filter-input">

                    <select class="form-select filter-input">

                        <option>Status</option>
                        <option>Hadir</option>
                        <option>Izin</option>
                        <option>Sakit</option>

                    </select>

                </div>

                <button class="btn btn-download">

                    <i class="bi bi-download me-2"></i>

                    Download Laporan

                </button>

            </div>

            <!-- TABLE -->
            <div class="table-responsive">

                <table class="table custom-table align-middle">

                    <thead>

                        <tr>
                            <th>NAMA</th>
                            <th>NAMA KEGIATAN</th>
                            <th>TANGGAL</th>
                            <th>ALASAN</th>
                            <th>KETERANGAN</th>
                        </tr>

                    </thead>

                    <tbody>

                        <tr>
                            <td>Agung Hapsah</td>
                            <td>Audit Keamanan Sistem Q3</td>
                            <td>21 Apr 2026</td>
                            <td>-</td>
                            <td>Sakit</td>
                        </tr>

                        <tr>
                            <td>Rizky Pratama</td>
                            <td>Pelatihan Karyawan Baru</td>
                            <td>20 Apr 2026</td>
                            <td>Izin Keluarga</td>
                            <td>Izin</td>
                        </tr>

                        <tr>
                            <td>Andi Saputra</td>
                            <td>Maintenance Server Utama</td>
                            <td>19 Apr 2026</td>
                            <td>-</td>
                            <td>Hadir</td>
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
                        <i class="bi bi-chevron-left"></i>
                    </button>

                    <button class="active">
                        1
                    </button>

                    <button>2</button>

                    <button>3</button>

                    <button>
                        <i class="bi bi-chevron-right"></i>
                    </button>

                </div>

            </div>

        </div>

    </div>
@endsection
