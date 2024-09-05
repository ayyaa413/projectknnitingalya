<?php

use App\Http\Controllers\UserController;
use App\Http\Controllers\Admin\AdminController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\CartController;
use Illuminate\Support\Facades\Auth;

use App\Http\Controllers\LoginController;
use App\Http\Controllers\LoginController as ControllersLoginController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('tampilan');
});
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']);
Route::get('/logout', [UserController::class, 'logout']);
Route::get('/home', [UserController::class, 'beranda']);
Route::get('/indext', [UserController::class, 'indext']);
Route::get('/adminn', [UserController::class, 'admin']);
Route::get('/kategorihome', [UserController::class, 'kategorii']);
Route::get('tambahproduk', [UserController::class, 'tambah']);
Route::get('tambahproduk2', [UserController::class, 'tambahh']);
Route::get('tambahproduk3', [UserController::class, 'tambahhh']);
Route::get('tambahproduk4', [UserController::class, 'tambahhhh']);
Route::get('aboutus', [UserController::class, 'about']);

// Rute untuk menampilkan form login
Route::get('/admin/login', [AdminController::class, 'showLoginForm'])->name('admin.login');

// Rute untuk memproses login
Route::post('/admin/login', [AdminController::class, 'login'])->name('admin.login.post');



    Route::prefix('admin')->name('admin.')->group(function () {
        Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');    Route::resource('products', ProductController::class);
    });



// Route::prefix('admin')->name('admin.')->group(function () {
    // Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');
  
// });

// Route::middleware(['auth', 'admin'])->group(function () {
    // Route::get('/admin/dashboard', [DashboardController::class, 'index'])->name('admin.dashboard');
// });

Route::redirect('/admin', '/admin/dashboard');
Route::get('/home', [UserController::class, 'beranda']);
Route::get('/register', [UserController::class, 'showRegistrationForm'])->name('register');

// Route::get('/', [ProductController::class, 'indexx'])->name('home');
// Route::get('/product/{id}', [ProductController::class, 'show'])->name('product.show');
Route::post('/cart', [CartController::class, 'view'])->name('cart.view');



//CART TAH

Route::get('cart', [CartController::class, 'index'])->name('cart.index');
Route::post('cart/add', [CartController::class, 'add'])->name('cart.add');
Route::patch('cart/update/{id}', [CartController::class, 'update'])->name('cart.update');
Route::delete('cart/remove/{id}', [CartController::class, 'remove'])->name('cart.remove');
Route::get('checkout', [CartController::class, 'checkout'])->name('checkout');


Route::post('/cart/add', [CartController::class, 'add'])->name('cart.add');



Route::post('/logout', function () {
    Auth::logout();
    return redirect('/login')->with('status', 'Anda telah berhasil logout.');
})->name('logout');

