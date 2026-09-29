<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Matakuliah;
use App\Models\User;
use Illuminate\Http\Request;

class MatakuliahController extends Controller
{
    public function index()
    {
        $matakuliah = Matakuliah::with('dosen')->get();
        return view('matakuliah.index', compact('matakuliah'));
    }

    public function create()
    {
        $users = User::all();
        return view('matakuliah.create', compact('users'));
    }

    public function store(Request $request)
    {
        Matakuliah::create([
            'kode_mk' => $request->kode_mk,
            'nama_mk' => $request->nama_mk,
            'sks' => $request->sks,
            'semester' => $request->semester,
            'dosen_id' => $request->dosen_id,
        ]);

        return redirect('/matakuliah');
    }
}
