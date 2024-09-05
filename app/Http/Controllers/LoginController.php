<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

    class LoginController extends Controller
{
    // Menampilkan formulir login
    public function showLoginForm()
    {
        return view('/login'); // Pastikan kamu sudah membuat view 'auth/login.blade.php'
    }

    // Memproses data login
    public function login(Request $request)
    {
        // Validasi input
        $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        // Attempt login
        if (Auth::attempt($request->only('email', 'password'))) {
            // Jika login berhasil
            return redirect()->intended('/home'); // Ganti '/home' sesuai dengan halaman tujuan setelah login
        }

        // Jika login gagal
        return back()->withErrors([
            'email' => 'Email atau password salah.'
        ]);
    }

    // Logout
    public function logout()
    {
        Auth::logout();
        return redirect('/login'); // Kembali ke halaman login setelah logout
    }
}
