<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <!-- Tambahkan CSS dan JavaScript -->
</head>
<body>
    @include('admin.sidebar')

    <div class="main-content">
        @yield('content')
    </div>

    <!-- Tambahkan JavaScript -->
</body>
</html>
