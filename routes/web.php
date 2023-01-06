<?php

use App\Http\Controllers\PpdbController;
use GuzzleHttp\Middleware;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::middleware('isGuest')->group(function(){
    Route::get('/login', [PpdbController::class, 'login'])->name('login');
    Route::get('/daftar', [PpdbController::class, 'daftar'])->name('daftar');
    Route::post('/daftar/store', [PpdbController::class, 'daftarAkun'])->name('daftar.store');
    Route::get('/daftar/print', [PpdbController::class, 'print']);
    Route::post('/login/auth', [PpdbController::class, 'auth'])->name('login.auth');
});

Route::middleware('isLogin', 'checkRole:admin')->group(function(){
    Route::get('/admin', [PpdbController::class, 'dashboardAdmin']);
    Route::get('/transaksi', [PpdbController::class, 'transaksi']);
    Route::get('/transaksi/update/{id}', [PpdbController::class, 'update'])->name('transaksi.update');
    Route::get('/transaksi/reject/{id}', [PpdbController::class, 'reject'])->name('transaksi.reject');
});

Route::middleware('isLogin', 'checkRole:user')->group(function(){
    Route::get('/dashboard/student', [PpdbController::class, 'dashboardStudent']);
    Route::get('/student', [PpdbController::class, 'contentStudent']);
    Route::get('/pembayaran', [PpdbController::class, 'contentPembayaran']);
    Route::post('/pembayaran/store', [PpdbController::class, 'store'])->name('pembayaran.store');
});

Route::get('/', [PpdbController::class, 'index'])->name('index');
Route::get('/logout', [PpdbController::class, 'logout'])->name('logout');
