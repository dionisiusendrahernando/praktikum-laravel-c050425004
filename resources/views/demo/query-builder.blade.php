@extends('layouts.app')
@section('konten')
    <h1>Data Mahasiswa</h1>
    <ul>
        @forelse ($data as $mhs)
            <li>{{ $mhs->nama }} - {{ $mhs->prodi }} (Sem {{ $mhs->semester }})</li>
        @empty
            <li>Tidak ada data.</li>
        @endforelse
    </ul>
@endsection