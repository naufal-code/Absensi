@extends('layouts.app')

@section('content')
    <div class="report-card">

        <!-- HEADER -->
        <div class="report-header d-flex justify-content-between align-items-center">

            <h2 class="report-title mb-0">
                Laporan Kegiatan
            </h2>

            <div class="position-relative">

                <i class="bi bi-search search-icon"></i>

                <input type="text" class="form-control search-box report-search" placeholder="Search activities...">

            </div>

        </div>

        <!-- BODY -->
        <div class="p-4">

            <!-- FILTER -->
            <div class="d-flex justify-content-between align-items-center mb-4">

                <div class="d-flex gap-2">

                    <input type="date" class="form-control filter-input" placeholder="Dari Tanggal">

                    <input type="date" class="form-control filter-input" placeholder="Sampai Tanggal">

                    <select class="form-select filter-input">

                        <option>Status</option>
                        <option>Berjalan</option>
                        <option>Selesai</option>

                    </select>

                </div>

                <button class="btn btn-download">

                    <i class="bi bi-download me-1"></i>

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
                            <th>STATUS KEGIATAN</th>

                        </tr>

                    </thead>

                    <tbody>

                        <tr>

                            <td>Agung Hapsah</td>

                            <td>Audit Keamanan Sistem Q3</td>

                            <td>21 Apr 2026</td>

                            <td>

                                <span class="badge rounded-pill bg-primary-subtle text-info border border-info px-3 py-2">

                                    Berjalan

                                </span>

                            </td>

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
                        ...
                    </button>

                    <button>
                        ›
                    </button>

                </div>

            </div>

        </div>

    </div>
@endsection
