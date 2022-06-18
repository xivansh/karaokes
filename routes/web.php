<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TesController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\KaraokeController;
use App\Http\Controllers\CheckOutController;
use App\Http\Controllers\EkspedisiController;
use App\Http\Controllers\CollectionController;

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

Route::get('/', function () {
    return view('welcome');
})->name('welcome')->middleware('auth');

Route::get('/deletes/{id}',[EkspedisiController::class, 'destroy'])->name('deletes');

Route::resource('ekspedisis', EkspedisiController::class)->middleware('auth');

Route::get('login', [LoginController::class, 'login'])->name('login');
Route::post('proses1', [LoginController::class, 'proses1'])->name('proses1');

Route::get('register',[LoginController::class, 'register'])->name('register');
Route::post('proses2',[LoginController::class, 'proses2'])->name('proses2');

Route::get('logout',[LoginController::class, 'logout'])->name('logout');

Route::get('mahasiswa', function() {
    $arr = ['USMAN ALI', 'GERANG ', 'BUDI GA NGERTI'];
    return view('mahasiswa')->with('mahasiswa', $arr);
});



Route::get('/satu', [CollectionController::class, 'collectionSatu']);
Route::get('/dua', [CollectionController::class, 'collectionDua']);
Route::get('/tiga', [CollectionController::class, 'collectionTiga']);
Route::get('/empat', [CollectionController::class, 'collectionEmpat']);
Route::get('/lima', [CollectionController::class, 'collectionLima']);
Route::get('/enam', [CollectionController::class, 'collectionEnam']);


Route::resource('tes', TesController::class);


Route::resource('karaokes', KaraokeController::class)->middleware('auth');
Route::resource('karaokes.checkout', CheckOutController::class)->middleware('auth');
Route::get('riwayat', [CheckOutController::class, 'riwayat']);

