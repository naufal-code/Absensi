@extends('layouts.app')

@section('content')
    <div class="topbar mb-4">

        <input type="text" class="search-box" placeholder="Search activities...">

        <div class="d-flex align-items-center gap-3">

            <button class="btn btn-custom" data-bs-toggle="modal" data-bs-target="#modalKegiatan">
                + Tambah Kegiatan
            </button>

            <img src="https://i.pravatar.cc/40" width="40" height="40" class="rounded-circle">

        </div>
    </div>

    <h1 class="mb-5">Jadwal Kegiatan</h1>

    <div class="d-flex gap-3 mb-5">

        <div class="filter-btn border-info"></div>
        <div class="filter-btn"></div>
        <div class="filter-btn"></div>
        <div class="filter-btn"></div>
        <div class="filter-btn"></div>

    </div>

    <h3>Hari Ini, Apr 21</h3>
    <hr>

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

    <h3>Kemarin, Apr 20</h3>
    <hr>

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

    <!-- Modal Tambah Kegiatan -->
    <div class="modal fade" id="modalKegiatan" tabindex="-1">

        <div class="modal-dialog modal-lg modal-dialog-centered">

            <div class="modal-content custom-modal">

                <div class="modal-header border-bottom border-secondary">

                    <div class="d-flex align-items-center gap-3">

                        <div class="modal-icon">
                            <i class="bi bi-calendar2-plus"></i>
                        </div>

                        <h3 class="mb-0">
                            Detail Kegiatan Baru
                        </h3>

                    </div>

                </div>

                <div class="modal-body">

                    <form>

                        <div class="mb-4">

                            <label class="form-label">
                                Nama Kegiatan *
                            </label>

                            <input type="text" class="form-control custom-input"
                                placeholder="Contoh: Rapat Evaluasi Bulanan">

                        </div>

                        <div class="row">

                            <div class="col-md-6 mb-4">

                                <label class="form-label">
                                    Tanggal Pelaksanaan *
                                </label>

                                <input type="date" class="form-control custom-input">

                            </div>

                            <div class="col-md-6 mb-4">

                                <label class="form-label">
                                    Waktu Pelaksanaan *
                                </label>

                                <div class="d-flex align-items-center gap-2">

                                    <input type="time" class="form-control custom-input">

                                    <span>s/d</span>

                                    <input type="time" class="form-control custom-input">

                                </div>

                            </div>

                        </div>

                        <div class="mb-4">

                            <label class="form-label">
                                Deskripsi Kegiatan
                            </label>

                            <textarea class="form-control custom-input" rows="5"
                                placeholder="Tambahkan detail informasi mengenai kegiatan ini..."></textarea>

                        </div>

                    </form>

                </div>

                <div class="modal-footer border-top border-secondary">

                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                        Batal
                    </button>

                    <button type="button" class="btn btn-save" data-bs-dismiss="modal" data-bs-toggle="modal"
                        data-bs-target="#modalSuccess">

                        <i class="bi bi-floppy"></i>

                        Simpan Kegiatan

                    </button>

                </div>

            </div>

        </div>

    </div>

    <!-- Modal Success -->
    <div class="modal fade" id="modalSuccess" tabindex="-1">

        <div class="modal-dialog modal-dialog-centered">

            <div class="modal-content success-modal">

                <div class="modal-body text-center p-5">

                    <!-- ICON -->
                    <div class="success-icon mx-auto mb-4">

                        <i class="bi bi-check-lg"></i>

                    </div>

                    <!-- TITLE -->
                    <h2 class="success-title mb-3">
                        Kegiatan Berhasil Disimpan
                    </h2>

                    <!-- TEXT -->
                    <p class="success-text mb-4">
                        Data kegiatan baru telah berhasil
                        ditambahkan ke dalam sistem.
                    </p>

                    <!-- BUTTON -->
                    <div class="d-flex gap-3">

                        <button class="btn btn-report w-50">

                            <i class="bi bi-bar-chart-line me-1"></i>

                            Lihat Laporan

                        </button>

                        <button class="btn btn-add w-50" data-bs-dismiss="modal">

                            <i class="bi bi-plus-lg me-1"></i>

                            Tambah Lagi

                        </button>

                    </div>

                </div>

            </div>

        </div>

    </div>
@endsection
