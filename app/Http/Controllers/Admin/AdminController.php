<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function showLoginForm()
    {
        return view('admin.login');
    }

    public function login(Request $request)
{
    $credentials = $request->only('email', 'password');
    $user = User::where('email', $credentials['email'])->first();

    if ($user) {
        if (Auth::attempt($credentials) && Auth::user()->is_admin) {
            return redirect()->route('admin.dashboard');
        } else {
            return redirect()->route('admin.login')->withErrors('Invalid credentials or not an admin.');
        }
    } else {
        return redirect()->route('admin.login')->withErrors('User not found.');
    }
}

    // public function dashboard()
    // {
    //     // Logic untuk menampilkan dashboard
    //     return view('admin.dashboard');
    // }

    // public function products()
    // {
    //     // Logic untuk menampilkan halaman input produk
    //     return view('admin.products');
    // }

    // public function logout()
    // {
    //     Auth::logout();
    //     return redirect()->route('admin.login');
    // }
    
}

