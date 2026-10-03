@extends('layouts.app')

@section('judul', 'Profil Mahasiswa')

@section('konten')
    <h1>Profil Mahasiswa</h1>
    <ul>
        <li><strong>Nama:</strong> {{ $nama }}</li>
        <li><strong>NIM:</strong> {{ $nim }}</li>
        <li><strong>Kelas:</strong> {{ $kelas }}</li>
        <li><strong>Prodi:</strong> {{ $prodi }}</li>
    </ul>
@endsection