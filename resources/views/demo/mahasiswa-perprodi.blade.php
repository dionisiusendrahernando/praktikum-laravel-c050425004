@extends('layouts.app')

@section('konten')
    <h3>Statistik Jumlah Mahasiswa per Prodi</h3>

    <table border="1" cellpadding="8" cellspacing="0">
        <thead>
            <tr>
                <th>Program Studi</th>
                <th>Jumlah Mahasiswa</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($rekap as $item)
                <tr>
                    <td>{{ $item->prodi }}</td>
                    <td>{{ $item->jumlah }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection