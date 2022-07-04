<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\JurusanController;
use App\Http\Controllers\KaraokeController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\CheckOutController;
use App\Http\Controllers\EkspedisiController;
use App\Http\Controllers\MahasiswaController;

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

// Auth::routes();

// Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Route::get('/users/{user}/edit', [UserController::class,'edit'])->middleware('can:update,user');
// Route::patch('/users/{user}', [UserController::class,'update'])->middleware('can:update,user');
// Route::delete('/users/{user}', [UserController::class,'destroy'])->middleware('can:delete,user');

// Route::get('/session', [SessionController::class,'index']);
// Route::get('/buat-session', [SessionController::class,'buatSession']);
// Route::get('/akses-session', [SessionController::class,'aksesSession']);
// Route::get('/hapus-session', [SessionController::class,'hapusSession']);
// Route::get('/flash-session', [SessionController::class,'flashSession']);


// require __DIR__.'/auth.php';

// Auth::routes();

// Route::get('/daftar-mahasiswa', [MahasiswaController::class,'daftarMahasiswa'])
// ->middleware('auth');
// Route::get('/tabel-mahasiswa', [MahasiswaController::class,'tabelMahasiswa'])
// ->middleware('auth');
// Route::get('/blog-mahasiswa', [MahasiswaController::class,'blogMahasiswa'])
// ->middleware('auth');

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Route::get('/', [JurusanController::class,'index'])->middleware('auth');

// Route::resource('jurusans',JurusanController::class)->middleware('auth');
Route::get('/', function () {
    return view('karaoke.index');
})->name('welcome')->middleware('auth');

Route::get('/deletes/{id}',[EkspedisiController::class, 'destroy'])->name('deletes');

Route::resource('karaokes', KaraokeController::class)->middleware('auth');
Route::resource('karaokes.checkout', CheckOutController::class)->middleware('auth');
Route::resource('ekspedisis', EkspedisiController::class)->middleware('auth');

Route::get('login', [LoginController::class, 'login'])->name('login');
Route::post('proses1', [LoginController::class, 'proses1'])->name('proses1');

Route::get('register',[LoginController::class, 'register'])->name('register');
Route::post('proses2',[LoginController::class, 'proses2'])->name('proses2');

Route::get('logout',[LoginController::class, 'logout'])->name('logout');
