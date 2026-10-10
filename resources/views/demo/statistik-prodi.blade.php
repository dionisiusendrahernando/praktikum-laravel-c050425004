@extends('layouts.app')
@section('konten')
    <ul>
        <li>Program Studi: Jumlah Mahasiswa</li>
        @foreach ($rekap as $item)
            <li>{{ $item->prodi }}: {{ $item->jumlah }}</li>
        @endforeach
    </ul>
@endsection