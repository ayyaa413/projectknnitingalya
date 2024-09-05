<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Your Site Title')</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <nav>
        <!-- Navigasi -->
    </nav>

    <div class="container">
        @yield('content')
    </div>

    <footer>
        <!-- Footer -->
    </footer>

    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
