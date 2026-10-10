<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LatihanController extends Controller
{
    public function index()
    {
        $nama = 'Dionisius Endra Hernando';
        $nim = 'C050425004';
        $prodi = 'Sistem Informasi Kota Cerdas';
        $pesan = "Halo, Perkenalkan saya {$nama} dengan NIM {$nim} dari Prodi {$prodi}.";
        return $pesan;
    }
}
