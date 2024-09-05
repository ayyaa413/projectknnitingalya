<!-- resources/views/layouts/app.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Your Site Title')</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <!-- Tambahkan CSS lain yang diperlukan -->
</head>
<body>
    <nav>
        <!-- Tambahkan navigasi di sini -->
    </nav>

    <div class="container">
        @yield('content')
    </div>

    <footer>
        <!-- Tambahkan footer di sini -->
    </footer>

    <script src="{{ asset('js/app.js') }}"></script>
    <!-- Tambahkan JavaScript lain yang diperlukan -->
</body>
</html>
