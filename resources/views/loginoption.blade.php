<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="{{asset('assets/bootstrap/css/bootstrap.min.css')}}">
    <style>
        body {
            background-color: #b79e79;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .login-choice-container {
            background-color: #fff;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0px 0px 15px rgba(0, 0, 0, 0.1);
            text-align: center;
            width: 300px; /* Menyesuaikan lebar */
        }
        .login-title {
            margin-bottom: 20px;
            font-weight: bold;
            color: #d7bd96;
        }
        .btn-login-choice {
            background-color: #d7bd96;
            color: white;
            width: 100%;
            margin-bottom: 15px;
        }
        .btn-login-choice:hover {
            background-color: #c4a675; /* Hover lebih gelap */
        }
        .btn-user-login {
            background-color: #f1ede7;
            color: black;
            width: 100%;
            margin-bottom: 15px;
        }
        .btn-user-login:hover {
            background-color: #e2d6c4; /* Hover lebih gelap */
        }
        a {
            text-decoration: none; /* Menghilangkan garis bawah */
            color: inherit; /* Mengambil warna dari elemen induk */
        }
    </style>
</head>
<body>
    <div class="login-choice-container">
        <h3 class="login-title">LOGIN KNNITING SHOP</h3>
        <a href="/adminn" class="btn btn-login-choice">Login untuk Admin</a>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
