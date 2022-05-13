<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

use App\Http\Controllers\LandingController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\BelajarController;

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
//Route::get('/', function () {
//    return view('welcome');
//});
//
//Auth::routes();
//
//Route::get('/home', [LandingController::class, 'index'])->name('home');
//
//Route::group(['middleware' => ['auth']], function() {
//    Route::resource('roles', RoleController::class);
//    Route::resource('users', UserController::class);
//    Route::resource('products', BelajarController::class);
//});
//
//Route::middleware([
//    'auth:sanctum',
//    config('jetstream.auth_session'),
//    'verified'
//])->group(function () {
//    Route::get('/dashboard', function () {
//        return view('dashboard');
//    })->name('dashboard');
//});


Route::resource('/', LandingController::class);

Route::get('belajar', [LandingController::class, 'belajar'])->name('belajar.index');
Route::get('detailbelajar', [LandingController::class, 'detailbelajar'])->name('detailbelajar');

Route::get('banksoal', [LandingController::class, 'banksoal'])->name('banksoal.index');
Route::get('detailbanksoal', [LandingController::class, 'detailbanksoal'])->name('detailbanksoal');

Route::get('artikel', [LandingController::class, 'artikel'])->name('artikel');
Route::get('detailartikel', [LandingController::class, 'detailartikel'])->name('detailartikel');

Route::get('tentangkami', [LandingController::class, 'tentangkami'])->name('tentangkami');

Route::group(['prefix' => 'member', 'as' => 'admin.', 'middleware' => ['auth:sanctum', 'verified']], function() {

    // dashboard
    Route::resource('dashboard', AdminController::class);
    // Belajar
    Route::resource('service', BelajarController::class);
    // Bank Soal
    Route::resource('banksoal', BankSoalController::class);
    // Artikel
    Route::resource('artikel', ArtikelController::class);

});

