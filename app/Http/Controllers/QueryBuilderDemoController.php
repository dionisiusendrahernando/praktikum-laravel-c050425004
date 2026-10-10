<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class QueryBuilderDemoController extends Controller
{
    public function tampilkanSemua()
    {
        $data = DB::table('mahasiswas')->get();
        return view('demo.query-builder', compact('data'));
    }

    public function tampilkanFilter()
    {
        $data = DB::table('mahasiswas')
            ->where('semester', '>=', 3)
            ->orderBy('nama')
            ->get();
        return view('demo.query-builder', compact('data'));
    }

    public function statistikProdi()
    {
        $rekap = DB::table('mahasiswas')
            ->select('prodi', DB::raw('count(*) as jumlah'))
            ->groupBy('prodi')
            ->get();
        return view('demo.statistik-prodi', compact('rekap'));
    }

    public function crudAksi()
    {
        // Insert
        DB::table('mahasiswas')->insert([
            'nama' => 'Budi', 'nim' => '999', 'prodi' => 'Teknik Informatika', 'semester' => 3
        ]);
        // Update
        DB::table('mahasiswas')->where('nim', '999')->update(['nama' => 'Budi Edit']);
        // Delete
        DB::table('mahasiswas')->where('nim', '999')->delete();

        return "CRUD Berhasil dijalankan!";
    }

    public function filterprodisemester()
    {
        $data = DB::table('mahasiswas')
            ->where('prodi', 'Teknik Informatika')
            ->where('semester', '>=', [3, 6])
            ->orderBy('nama', 'asc')
            ->get();
        return view('demo.query-builder', compact('data'));
    }

    public function jmlmhsperprodi()
    {
        $rekap = DB::table('mahasiswas')
            ->select('prodi', DB::raw('count(*) as jumlah'))
            ->groupBy('prodi')
            ->get();
        return view('demo.mahasiswa-perprodi', compact('rekap'));
    }

    public function paginateMahasiswa()
    {
        $data = DB::table('mahasiswas')->paginate(10);
        return view('demo.paginate', compact('data'));
    }
}