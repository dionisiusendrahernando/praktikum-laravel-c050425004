@extends('layouts.app')

@section('konten')
    <h3>Daftar Mahasiswa: {{ $matakuliah->nama_mk }}</h3>

    <table border="1" cellpadding="8" cellspacing="0">
        <thead>
            <tr>
                <th>NIM</th>
                <th>Nama Mahasiswa</th>
                <th>Nilai</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($matakuliah->nilai as $n)
                <tr>
                    <td>{{ $n->mahasiswa->nim ?? '-' }}</td>
                    <td>{{ $n->mahasiswa->nama ?? '-' }}</td>
                    <td>{{ $n->nilai }}</td>
                </tr>
            @empty
                <tr>
                    <td colspan="3">Belum ada mahasiswa yang mengambil mata kuliah ini.</td>
                </tr>
            @forelse
        </tbody>
    </table>
@endsection