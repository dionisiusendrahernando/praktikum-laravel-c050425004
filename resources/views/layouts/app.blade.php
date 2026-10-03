<!DOCTYPE html>
<html lang="id">
    <head>
        <meta charset="UTF-8">
        <title>@yield('judul', 'Aplikasi Akademik')</title>
    </head>
    <body>
    
        @include('partials.navbar')

        <div class="container">
            @yield('konten')
        </div>

    </body>
</html>