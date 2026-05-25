<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AuthController;
use App\Http\Controllers\BukuController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\PenerbitController;

use App\Models\Buku;
use App\Models\Kategori;
use App\Models\Penerbit;

/* ===================================
   LOGIN
=================================== */

Route::get('/login', [AuthController::class, 'login']);

Route::post('/login', [AuthController::class, 'authenticate'])
    ->name('login.proses');

Route::get('/logout', [AuthController::class, 'logout'])
    ->name('logout');

/* ===================================
   REDIRECT
=================================== */

Route::get('/', function () {
    return redirect('/login');
});

/* ===================================
   DASHBOARD
=================================== */

Route::get('/dashboard', function () {

    $totalBuku = Buku::count();

    $totalKategori = Kategori::count();

    $totalPenerbit = Penerbit::count();

    return view('dashboard', compact(
        'totalBuku',
        'totalKategori',
        'totalPenerbit'
    ));

});

/* ===================================
   BUKU
=================================== */

Route::resource('/buku', BukuController::class);

/* ===================================
   KATEGORI
=================================== */

Route::resource('/kategori', KategoriController::class);

/* ===================================
   PENERBIT
=================================== */

Route::resource('/penerbit', PenerbitController::class);