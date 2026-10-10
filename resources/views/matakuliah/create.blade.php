@extends('layouts.app')

@section('konten')
    <h3>Tambah Mata Kuliah</h3>
    <form action="{{ route('matakuliah.store') }}" method="POST">
        @csrf
        <input type="text" name="kode_mk" placeholder="Kode MK" required><br><br>
        <input type="text" name="nama_mk" placeholder="Nama Mata Kuliah" required><br><br>
        <input type="number" name="sks" placeholder="SKS" required><br><br>
        <button type="submit">Simpan</button>
    </form>
@endsection