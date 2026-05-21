<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ARTINDO Dashboard</title>

    {{-- Bootstrap --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    {{-- Bootstrap Icons --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <style>
        body {
            background: #07132b;
            color: white;
            overflow-x: hidden;
            font-family: sans-serif;
        }

        .sidebar {
            width: 260px;
            height: 100vh;
            background: #081735;
            border-right: 1px solid rgba(255, 255, 255, 0.1);
            position: fixed;
        }

        .logo {
            font-size: 36px;
            font-weight: bold;
            color: #2ea8ff;
            padding: 30px;
        }

        .menu-item {
            padding: 14px 20px;
            margin: 8px 15px;
            border-radius: 10px;
            color: #b8c0d6;
            text-decoration: none;
            display: flex;
            align-items: center;
            gap: 12px;
            transition: 0.3s;
        }

        .menu-item:hover,
        .menu-active {
            background: rgba(46, 168, 255, 0.15);
            color: #2ea8ff;
            border-right: 3px solid #2ea8ff;
        }

        .main-content {
            margin-left: 260px;
            padding: 25px 40px;
        }

        .topbar {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .search-box {
            width: 320px;
            background: transparent;
            border: 1px solid rgba(255, 255, 255, 0.2);
            border-radius: 15px;
            padding: 10px 20px;
            color: white;
        }

        .search-box::placeholder {
            color: #9aa4bf;
        }

        .btn-custom {
            background: #72c8ff;
            border: none;
            color: #07132b;
            font-weight: 600;
            border-radius: 8px;
            padding: 10px 18px;
        }

        .filter-btn {
            border: 1px solid rgba(255, 255, 255, 0.2);
            border-radius: 12px;
            padding: 15px 40px;
            background: rgba(255, 255, 255, 0.03);
        }

        .task-card {
            background: rgba(255, 255, 255, 0.05);
            border: 1px solid rgba(255, 255, 255, 0.1);
            border-radius: 8px;
            padding: 18px;
            margin-bottom: 15px;
        }

        .time {
            min-width: 110px;
            border-left: 3px solid #65c7ff;
            padding-left: 15px;
        }

        .task-title {
            font-size: 20px;
        }

        .task-action i {
            font-size: 22px;
            margin-left: 15px;
            cursor: pointer;
        }

        hr {
            border-color: rgba(255, 255, 255, 0.1);
        }

        /* ================= MODAL ================= */

        .custom-modal {
            background: #162544;
            color: white;
            border-radius: 15px;
            border: 1px solid rgba(255, 255, 255, 0.1);
        }

        .custom-input {
            background: #07132b;
            border: 1px solid rgba(255, 255, 255, 0.1);
            color: white;
            padding: 14px;
        }

        .custom-input:focus {
            background: #07132b;
            color: white;
            border-color: #3bbcff;
            box-shadow: none;
        }

        .custom-input::placeholder {
            color: #7d8aa5;
        }

        .modal-icon {
            width: 50px;
            height: 50px;
            background: rgba(59, 188, 255, 0.15);
            border: 1px solid #3bbcff;
            border-radius: 10px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #3bbcff;
            font-size: 22px;
        }

        .btn-save {
            background: #42c8ff;
            color: black;
            border: none;
            padding: 10px 20px;
            font-weight: 600;
            border-radius: 8px;
        }

        .btn-save:hover {
            background: #2fbfff;
        }

        /* ================= SUCCESS MODAL ================= */

        .success-modal {
            background: #2f343d;
            border-radius: 14px;
            border: 1px solid rgba(255, 255, 255, 0.08);
            color: white;
        }

        .success-icon {
            width: 82px;
            height: 82px;
            border-radius: 14px;
            background: rgba(89, 199, 255, 0.08);
            border: 1px solid rgba(89, 199, 255, 0.25);
            display: flex;
            align-items: center;
            justify-content: center;
            margin: auto;
            font-size: 42px;
            color: #72d0ff;
        }

        .success-title {
            font-size: 20px;
            font-weight: 600;
        }

        .success-text {
            color: #bcc3d1;
            font-size: 15px;
            line-height: 1.7;
        }

        .btn-report {
            background: transparent;
            border: 1px solid rgba(255, 255, 255, 0.12);
            color: #d0d7e7;
            padding: 12px;
        }

        .btn-report:hover {
            background: rgba(255, 255, 255, 0.04);
            color: white;
        }

        .btn-add {
            background: #71d0ff;
            color: #07132b;
            border: none;
            padding: 12px;
            font-weight: 600;
        }

        .btn-add:hover {
            background: #58c7ff;
        }

        /* ================= LAPORAN ABSENSI ================= */

        .report-card {
            background: #0b1424;
            border: 1px solid rgba(255, 255, 255, 0.05);
            border-radius: 12px;
            overflow: hidden;
        }

        .report-header {
            padding: 22px 24px;
            border-bottom: 1px solid rgba(255, 255, 255, 0.05);
            background: #0d1728;
        }

        .report-title {
            font-size: 42px;
            font-weight: 600;
            color: white;
        }

        .report-search {
            width: 260px;
            padding-left: 40px;
        }

        .search-icon {
            position: absolute;
            left: 14px;
            top: 11px;
            color: #7f8ca8;
        }

        .filter-input {
            background: #07132b !important;
            border: 1px solid rgba(255, 255, 255, 0.08) !important;
            color: white !important;
            height: 46px;
            min-width: 170px;
            border-radius: 8px;
        }

        .filter-input:focus {
            box-shadow: none !important;
            border-color: #42c8ff !important;
        }

        .btn-download {
            background: #72c8ff;
            color: #07132b;
            border: none;
            font-weight: 600;
            padding: 11px 18px;
            border-radius: 8px;
        }

        .btn-download:hover {
            background: #58c3ff;
        }

        .custom-table {
            color: white;
            margin-bottom: 0;
        }

        .custom-table thead {
            background: rgba(255, 255, 255, 0.03);
        }

        .custom-table thead th {
            border: none;
            color: #7f8ca8;
            font-size: 12px;
            padding: 18px 16px;
            font-weight: 500;
        }

        .custom-table tbody td {
            padding: 20px 16px;
            border-color: rgba(255, 255, 255, 0.04);
        }

        .custom-table tbody tr:hover {
            background: rgba(255, 255, 255, 0.02);
        }

        .table-footer {
            padding: 20px 24px;
            border-top: 1px solid rgba(255, 255, 255, 0.04);
            display: flex;
            justify-content: space-between;
            align-items: center;
            color: #7f8ca8;
            font-size: 13px;
        }

        .pagination-custom {
            display: flex;
            gap: 8px;
        }

        .pagination-custom button {
            width: 34px;
            height: 34px;
            border-radius: 6px;
            border: 1px solid rgba(255, 255, 255, 0.08);
            background: transparent;
            color: white;
        }

        .pagination-custom button.active {
            background: #72c8ff;
            color: #07132b;
            border: none;
        }
    </style>
</head>

<body>

    @if (Auth::check() && Auth::user()->role == 'admin')
        @include('partials.sidebar')
    @else
        @include('partials.sidebar-karyawan')
    @endif
    <div class="main-content">
        @yield('content')
    </div>

    {{-- Bootstrap JS --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>
