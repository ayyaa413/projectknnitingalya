<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Kniting</title>
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <style>
        body {
            background-color: #b79e79;
        }
        .login-container {
            max-width: 400px;
            margin: 50px auto;
            background-color: #d6c7b2;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        }
        .login-title {
            text-align: center;
            margin-bottom: 20px;
            font-weight: bold;
            color: white;
        }
        .form-label {
            color:  #ffffff;
        }
        /* .btn-google {
            background-color: #7aa3e6;
            color: white;
            margin-bottom: 15px;
        } */
        .btn-login {
            background-color:  #b79e79f5;
            color: white;
        }
        .btn-login:hover {
            background-color:  #b79e79f5;
        }
        .forgot-password {
            text-align: center;
            margin-top: 10px;
        }
        .forgot-password a {
            color: #dc0606;
            text-decoration: none;
        }
        .forgot-password a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    @if (Session::has('StatsusLogin'))
    <b>{{Session::get('StatusLogin')}}</b>
    @endif
    <form action="/authentication" method="post">
    @csrf
    <div class="login-container">
        <h3 class="login-title">KNNITING SHOP</h3>
        <form>
            <div class="mb-3">
                <label for="email" class="form-label">Email / No Handphone</label>
                <input type="email" class="form-control" id="email" placeholder="Enter your email or phone number">
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" id="password" placeholder="Enter your password">
            </div>
            <div class="mb-3">
                <label for="kode" class="form-label">Kode</label>
                <input type="kode" class="form-control" id="kode" placeholder="Enter your kode">
            </div>
            <button type="submit" class="btn btn-login w-100">
                <a href="/indext" class="btn btn-login-choice">LOGIN</a></button>
            <div class="forgot-password">
                <a href="#">Forgot Password?</a>
            </div>
        </form>
    </div>
</body>
</html>
<script src="{{asset('assets/bootstrap/js/bootstrap.min.js')}}"></script>
