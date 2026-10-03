@extends('layouts.app')

@section('judul', 'Daftar Mata Kuliah - Akademik')

@section('konten')
    <h1>Daftar Mata Kuliah</h1>

    <table border="1" cellpadding="8" cellspacing="0" width="100%">
        <thead>
            <tr>
                <th>No</th>
                <th>Kode</th>
                <th>Nama Mata Kuliah</th>
                <th>SKS</th>
                <th>Semester</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($matakuliah as $mk)
                @php
                    $item = (object) $mk;
                @endphp
                <tr class="{{ $loop->even ? 'genap' : 'ganjil' }}">
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $item->kode ?? '-' }}</td>
                    <td>
                        {{ $item->nama ?? '-' }}
                        @if (($item->sks ?? 0) > 3)
                            <small style="color: red; font-weight: bold;">(SKS Besar)</small>
                        @endif
                    </td>
                    <td>{{ $item->sks ?? '-' }}</td>
                    <td>{{ $item->semester ?? '-' }}</td>
                    <td>
                        <a href="{{ route('matakuliah.show', $item->kode ?? '') }}">Detail</a>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="6" style="text-align: center;">Belum ada data mata kuliah.</td>
                </tr>
            @endforelse
        </tbody>
    </table>
@endsection