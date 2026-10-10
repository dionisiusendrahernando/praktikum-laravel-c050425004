@extends('layouts.app')

@section('judul', 'Daftar Mahasiswa')

@section('konten')
    <h1>Daftar Mahasiswa</h1>

    <table border="1" cellpadding="8" cellspacing="0" width="100%">
        <thead>
            <tr>
                <th>No</th>
                <th>NIM</th>
                <th>Nama</th>
                <th>Prodi</th>
                <th>Semester</th>
                <th>Status</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($mahasiswa as $mhs)
                <tr class="{{ $loop->even ? 'genap' : 'ganjil' }}">
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $mhs->nim }}</td>
                    <td>{{ $mhs->nama }}</td>
                    <td>{{ $mhs->prodi }}</td>
                    <td>{{ $mhs->semester }}</td>
                    {{-- Penanganan jika data email kosong --}}
                    <td>{{ $mhs->email ?? 'Email tidak tersedia' }}</td>
                    <td>
                        @switch(true)
                            @case($mhs->semester <= 2)
                                Mahasiswa Baru
                                @break
                            @case($mhs->semester >= 7)
                                <strong>Tingkat Akhir</strong>
                                @break
                            @default
                                Aktif
                        @endswitch
                    </td>
                    <td>
                        <a href="{{ route('mahasiswa.show', ['mahasiswa' => $mhs['nim']]) }}">Detail</a>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="7" style="text-align: center;">Belum ada data mahasiswa.</td>
                </tr>
            @endforelse
        </tbody>
    </table>
@endsection