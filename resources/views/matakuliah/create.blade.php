<!DOCTYPE html>
<html>
<head><title>Tambah Mata Kuliah</title></head>
<body>
    <h2>Tambah Data Mata Kuliah</h2>
    <form action="/matakuliah" method="POST">
        @csrf
        <label>Kode MK:</label><br>
        <input type="text" name="kode_mk" required><br><br>

        <label>Nama MK:</label><br>
        <input type="text" name="nama_mk" required><br><br>

        <label>SKS:</label><br>
        <input type="number" name="sks" required><br><br>

        <label>Semester:</label><br>
        <input type="number" name="semester" required><br><br>

        <label>Dosen Pengampu:</label><br>
        <select name="dosen_id">
            <option value="">-- Pilih Dosen --</option>
            @foreach ($users as $user)
                <option value="{{ $user->id }}">{{ $user->name }}</option>
            @endforeach
        </select><br><br>

        <button type="submit">Simpan</button>
    </form>
</body>
</html>