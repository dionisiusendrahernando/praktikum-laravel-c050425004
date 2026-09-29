<!DOCTYPE html>
<html>
    <head>
        <title>Belajar Blade</title>
    </head>
    <body>
        {{-- Ini komentar Blade, tidak akan tampil di browser --}}
        <h1>Halo, {{ $nama }}!</h1>

        @php
            $tahunSekarang = date('Y');
        @endphp

        <p>Escaped: {{ $kontenHTML }}</p>
        <p>Tidak di-escape: {!! $kontenHTML !!}</p>
    </body>
</html>