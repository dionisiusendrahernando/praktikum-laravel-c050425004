<?php

use Illuminate\Support\Facades\Route;
use App\Models\Mahasiswa;
use App\Http\Controllers\ArtikelController;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\MatakuliahController;

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

//Route admin
Route::prefix('admin')->name('admin.')->group(function () {
    Route::get('/dashboard', function () {
        return 'Dashboard Admin';
    })->name('dashboard');
});

//Route sapa.blade.php
Route::get('/sapa', function () {
    return view('sapa', [
        'nama' => 'Dionisius Endra Hernando',
        'kontenHTML' => '<strong>Teks Tebal</strong>',
        ]);
});

