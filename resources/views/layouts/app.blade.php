```html
<!DOCTYPE html>
<html lang="id">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title', 'Desa Sirnamekar')</title>

    <!-- Bootstrap 5.3.3 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

   <!-- CSS -->
<link rel="stylesheet" href="{{ asset('app.css') }}">
<link rel="stylesheet" href="{{ asset('navbar.css') }}">
<link rel="stylesheet" href="{{ asset('footer.css') }}">
<link rel="stylesheet" href="{{ asset('pemerintahan.css') }}">
<link rel="stylesheet" href="{{ asset('potensi.css') }}">
    @yield('styles')

</head>

<body>

    <!-- Navbar -->
    @include('layouts.navbar')

    <!-- Konten Halaman -->
    @yield('content')

    <!-- Footer -->
    @include('layouts.footer')

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

    @yield('scripts')

</body>

</html>
```
