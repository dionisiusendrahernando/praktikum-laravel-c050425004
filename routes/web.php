<?php

use Illuminate\Support\Facades\Route;
use App\Models\Mahasiswa;
use App\Http\Controllers\ArtikelController;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\MatakuliahController;
use App\Http\Controllers\SapaController;
use App\Http\Controllers\LatihanController;
use App\Http\Controllers\StatistikMahasiswaController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\HitungTotalSKSController;
use App\Http\Controllers\QueryBuilderDemoController;

//Route form-uji.blade.php
Route::get('/mahasiswa-uji', function () {
    return view('mahasiswa.form-uji');
});
//Route untuk memproses kiriman form (POST)
Route::post('/mahasiswa-uji', [MahasiswaController::class, 'store']);
//Route untuk menguji response JSON dari Controller
Route::get('/api/mahasiswa-uji', [MahasiswaController::class, 'apiIndex']);

// Route Grup Akademik
Route::prefix('akademik')->group(function () {
    
    // Route Mahasiswa
    Route::resource('mahasiswa', MahasiswaController::class);
    Route::get('/mahasiswa', [MahasiswaController::class, 'index'])->name('mahasiswa.index');
    Route::get('/mahasiswa/{nim}', [MahasiswaController::class, 'show'])->name('mahasiswa.show');

    // Route Matakuliah
    Route::resource('matakuliah', MatakuliahController::class)->only([
        'index', 'show']);
});

//Route profil.blade.php
Route::get('/profil', function () {
    return view('profil', [
        'nama' => 'Dionisius Endra Hernando',
        'nim' => 'C050425004',
        'kelas' => 'SIKC-3A',
        'prodi' => 'Sistem Informasi Kota Cerdas',
    ]);
});

//Route statistik.blade.php
Route::get('akademik/statistik', function () {
    return view('akademik.statistik');
});

// Route Utama
Route::get('/', function () {
    return view('welcome');
});

// Route Artikel
Route::get('/artikel', [ArtikelController::class, 'index']);

//Route Pertama
Route::get('/halo', function () {
    return 'Halo, ini adalah route pertama saya!';
});

//Route sapa.blade.php
Route::get('/sapa-controller', [SapaController::class, 'index']);

//Route LatihanController
Route::get('/latihan', [LatihanController::class, 'index']);

//Route Pencarian Mahasiswa
Route::get('/mahasiswa/pencarian', function () {
    return view('mahasiswa.cari');
});

//Route memproses aksi pencarian (GET Query String)
Route::get('/mahasiswa/cari', [MahasiswaController::class, 'cariMahasiswa']);

//Route statistik
Route::get('/statistik', StatistikMahasiswaController::class);

//Route admin/dashboard
Route::get('/admin/dashboard', [DashboardController::class, 'index']);

//Route hitung total SKS
Route::get('/matakuliah/hitung-total-sks', HitungTotalSksController::class);

//Route Query Builder Demo
Route::get('/demo/semua', [QueryBuilderDemoController::class, 'tampilkanSemua']);
Route::get('/demo/filter', [QueryBuilderDemoController::class, 'tampilkanFilter']);
Route::get('/demo/statistik', [QueryBuilderDemoController::class, 'statistikProdi']);
Route::get('/demo/crud', [QueryBuilderDemoController::class, 'crudAksi']);
Route::get('/demo/filter-prodi-semester', [QueryBuilderDemoController::class, 'filterprodisemester']);
Route::get('/demo/jumlah-mahasiswa-per-prodi', [QueryBuilderDemoController::class, 'jmlmhsperprodi']);
Route::get('/demo/paginate', [QueryBuilderDemoController::class, 'paginateMahasiswa']);