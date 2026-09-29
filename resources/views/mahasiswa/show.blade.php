@extends('layouts.app')

@section('judul', 'Detail Mahasiswa - ' . $mahasiswa->nama)

@section('konten')
    <h1>Detail Mahasiswa</h1>

    <ul>
        <li><strong>NIM:</strong> {{ $mahasiswa->nim }}</li>
        <li><strong>Nama:</strong> {{ $mahasiswa->nama }}</li>
        <li><strong>Prodi:</strong> {{ $mahasiswa->prodi }}</li>
        <li><strong>Semester:</strong> {{ $mahasiswa->semester }}</li>
    </ul>

    <br>
    <a href="{{ route('mahasiswa.index') }}">&laquo; Kembali ke Daftar Mahasiswa</a>
@endsection