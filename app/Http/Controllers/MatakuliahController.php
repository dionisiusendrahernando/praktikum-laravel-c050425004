<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MatakuliahController extends Controller
{
    private $matakuliah = [
        ['kode' => 'MK001', 'nama' => 'Pemrograman Web', 'sks' => 3, 'semester' => 3],
        ['kode' => 'MK002', 'nama' => 'Basis Data', 'sks' => 3, 'semester' => 2],
        ['kode' => 'MK003', 'nama' => 'Algoritma & Struktur Data', 'sks' => 4, 'semester' => 1],
        ['kode' => 'MK004', 'nama' => 'Jaringan Komputer', 'sks' => 3, 'semester' => 4],
        ['kode' => 'MK005', 'nama' => 'Rekayasa Perangkat Lunak', 'sks' => 3, 'semester' => 5],
    ];

    public function index()
    {
        return view('matakuliah.index', [
            'matakuliah' => $this->matakuliah
        ]);
    }

    public function show($kode)
    {
        $mk = collect($this->matakuliah)->firstWhere('kode', $kode);

        if (!$mk) {
            abort(404);
        }

        return view('matakuliah.show', [
            'matakuliah' => (object) $mk
        ]);
    }
}