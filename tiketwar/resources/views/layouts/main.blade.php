<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'TiketWar') - TiketWar</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
    rel="stylesheet">
</head>
<body>

    @include('partials.navbar') {{-- menggantikan blok <nav> yang lama --}}

    <main class="container mt-4">
        @yield('content')
    </main>

    @include('partials.footer') {{-- BARU --}}

    <script
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>