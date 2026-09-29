<?php

use Illuminate\Support\Facades\Route;
use App\Models\Mahasiswa;
use App\Http\Controllers\ArtikelController;
use App\Http\Controllers\MatakuliahController;
use App\Http\Controllers\MahasiswaController;


//Route MahasiswaController
Route::resource('mahasiswa', MahasiswaController::class);

// Route Utama
Route::get('/', function () {
    return view('welcome');
});

// Route Artikel
Route::get('/artikel', [ArtikelController::class, 'index']);

// Route Matakuliah
Route::get('/matakuliah/create', [MatakuliahController::class, 'create']);
Route::get('/matakuliah', [MatakuliahController::class, 'index']);
Route::post('/matakuliah', [MatakuliahController::class, 'store']);

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

//Route Matakuliah
Route::get('/matakuliah', [MatakuliahController::class, 'index'])->name('matakuliah.index');