<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

Route::get('/login', function () {
    return view('login');
})->name('login');

Route::post('/login', function (Request $request) {

    $credentials = $request->only('email', 'password');

    if (Auth::attempt($credentials)) {

        $request->session()->regenerate();

        if (Auth::user()->role == 'admin') {

            return redirect('/dashboard');

        } else {

            return redirect('/karyawan');

        }
    }

    return back()->with('error', 'Login Gagal');

});

/* ================= DASHBOARD ================= */

Route::get('/dashboard', function () {
    return view('dashboard');
});

/* ================= LAPORAN ABSENSI ================= */

Route::get('/laporan-absensi', function () {
    return view('laporan-absensi');
});

/* ================= LAPORAN KEGIATAN ================= */

Route::get('/laporan-kegiatan', function () {
    return view('laporan-kegiatan');
});

/* ================= KARYAWAN ================= */

Route::get('/karyawan', function () {
    return view('karyawan');
});

/* ================= JADWAL KEGIATAN ================= */

Route::get('/jadwal-kegiatan', function () {
    return view('jadwal-kegiatan');
});

/* ================= LOGOUT ================= */

Route::post('/logout', function (Request $request) {

    Auth::logout();

    $request->session()->invalidate();

    $request->session()->regenerateToken();

    return redirect('/login');

})->name('logout');