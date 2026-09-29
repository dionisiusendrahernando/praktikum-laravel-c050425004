<!DOCTYPE html>
<html>
<head><title>Daftar Mata Kuliah</title></head>
<body>
    <h2>Daftar Mata Kuliah</h2>
    <a href="/matakuliah/create">+ Tambah Matakuliah</a><br><br>
    <table border="1" cellpadding="8">
        <tr>
            <th>Kode MK</th>
            <th>Nama MK</th>
            <th>SKS</th>
            <th>Semester</th>
            <th>Dosen Pengampu</th>
        </tr>
        @foreach ($matakuliah as $mk)
        <tr>
            <td>{{ $mk->kode_mk }}</td>
            <td>{{ $mk->nama_mk }}</td>
            <td>{{ $mk->sks }}</td>
            <td>{{ $mk->semester }}</td>
            <td>{{ $mk->dosen ? $mk->dosen->name : 'Belum diatur' }}</td>
        </tr>
        @endforeach
    </table>
</body>
</html>