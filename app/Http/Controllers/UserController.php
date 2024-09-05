<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    public function login(){
        return view(view:'/login');
    }
    public function auth(Request $request){
        $validasi = $request->validate(rules:[
            'email' => ['required'],
            'password' => ['required'],
        ]);
        if (Auth::attempt($validasi)){
            return redirect('home')->with('pesan', 'login anda berhasil');
        }
        return redirect()->back()->with('pesan','Login anda gagal');

    }
    public function masuk(){
        return view('home');
    }

    public function home2(){
        return view('tampilan');
    }

    public function beranda(){
    return view('tampilan');
    }

    public function loginoption(){
        return view('login');
    }

    public function kategorii() {
        return view('kategorihome');
    }
    public function daftarlog(){
        return view('daftar');
    }

    public function about(){
        return view('aboutus');
    }

    public function admin(){
        return view('adminn');
    }

    public function logout(){
        Auth::logout();
        return redirect('/login');
    }

    public function indext(){
       
        return view('/indext');
    }

    public function detail()
    {
        return view('detailproduct');
    }

    public function tambah()
    {
        return view('tambahproduk');
    }

    public function tambahh()
    {
        return view('tambahproduk2');
    }

    public function tambahhh()
    {
        return view('tambahproduk3');
    }

    public function tambahhhh()
    {
        return view('tambahproduk4');
    }

    public function showRegistrationForm()
    {
        return view('/register'); // pastikan file 'auth/register.blade.php' ada
    }

}
