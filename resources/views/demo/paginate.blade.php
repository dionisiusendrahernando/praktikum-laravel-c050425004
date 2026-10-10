<ul>
    @foreach ($data as $mhs)
        <li>{{ $mhs->nama }} - {{ $mhs->prodi }}</li>
    @endforeach
</ul>

<!-- Menampilkan tautan halaman pagination -->
{{ $data->links() }}