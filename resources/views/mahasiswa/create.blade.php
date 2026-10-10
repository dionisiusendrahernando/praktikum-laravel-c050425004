@extends('layouts.app')

@section('konten')
    <h3>Tambah Mahasiswa Baru</h3>
    <form action="{{ route('mahasiswa.store') }}" method="POST">
        @csrf
        <input type="text" name="nim" placeholder="NIM" required><br><br>
        <input type="text" name="nama" placeholder="Nama" required><br><br>
        <input type="email" name="email" placeholder="Email"><br><br>
        <input type="text" name="prodi" placeholder="Prodi" required><br><br>
        <input type="number" name="semester" placeholder="Semester" required><br><br>
        <button type="submit">Simpan</button>
    </form>
@endsection