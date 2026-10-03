@extends('layouts.app')

@section('judul', 'Detail - ' . ($matakuliah->nama ?? 'Mata Kuliah'))

@section('konten')
    <h1>Detail Mata Kuliah</h1>

    <ul>
        <li><strong>Kode MK:</strong> {{ $matakuliah->kode ?? '-' }}</li>
        <li><strong>Nama Mata Kuliah:</strong> {{ $matakuliah->nama ?? '-' }}</li>
        <li><strong>Jumlah SKS:</strong> {{ $matakuliah->sks ?? '-' }} SKS</li>
        <li><strong>Semester:</strong> {{ $matakuliah->semester ?? '-' }}</li>
    </ul>

    <br>
    <a href="{{ route('matakuliah.index') }}">&laquo; Kembali ke Daftar Mata Kuliah</a>
@endsection