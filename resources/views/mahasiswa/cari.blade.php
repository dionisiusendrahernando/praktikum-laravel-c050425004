@extends('layouts.app')

@section('judul', 'Pencarian Mahasiswa')

@section('konten')
    <h1>Cari Data Mahasiswa</h1>

    {{-- Form method GET tidak membutuhkan directive @csrf --}}
    <form action="{{ url('/mahasiswa/cari') }}" method="GET">
        <div>
            <label>Masukkan Nama Mahasiswa:</label><br>
            <input type="text" name="nama" placeholder="Contoh: Andi" required>
        </div>
        <br>
        <button type="submit">Cari Data</button>
    </form>
@endsection