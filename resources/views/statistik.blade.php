@extends('layouts.app')

@section('judul', 'Statistik Mahasiswa')

@section('konten')
    <h1>Statistik Mahasiswa</h1>
    <p><strong>Total Mahasiswa:</strong> {{ $total }}</p>

    <h3>Jumlah per Program Studi:</h3>
    <ul>
        @foreach ($perProdi as $item)
            <li>{{ $item->prodi }}: {{ $item->jumlah }} mahasiswa</li>
        @endforeach
    </ul>
@endsection