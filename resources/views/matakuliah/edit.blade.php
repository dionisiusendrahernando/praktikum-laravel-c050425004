@extends('layouts.app')

@section('konten')
    <h3>Edit Mata Kuliah</h3>
    <form action="{{ route('matakuliah.update', $matakuliah->id) }}" method="POST">
        @csrf
        @method('PUT')
        <input type="text" name="kode_mk" value="{{ $matakuliah->kode_mk }}" required><br><br>
        <input type="text" name="nama_mk" value="{{ $matakuliah->nama_mk }}" required><br><br>
        <input type="number" name="sks" value="{{ $matakuliah->sks }}" required><br><br>
        <button type="submit">Perbarui</button>
    </form>
@endsection