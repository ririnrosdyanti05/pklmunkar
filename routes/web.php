<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontController;
use App\Http\Middleware\IsAdmin;
use Illuminate\Support\Facades\Auth;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// // Route Admin (Backend)
// Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function() {
//     Route::get('/', function () {
//         return view('admin.index');
//     });
// });


Route::get('/', [FrontController::class, 'pkl']);
Route::get('contact', [FrontController::class, 'contact']);
Route::get('shop', [FrontController::class, 'shop']);
Route::get('cart', [FrontController::class, 'cart']);
Route::get('checkout', [FrontController::class, 'checkout']);
Route::get('shopdetail', [FrontController::class, 'shopdetail']);
Route::get('track', [FrontController::class, 'track']);

Route::get('/tes', function () {
    return view('layouts.front');
});

Route::view('/haluser', 'haluser.pkl2')->name('haluser');
Route::get('/fasilitas', function () {
    return view('haluser.fasilitas');
})->name('fasilitas');
Route::get('/kurikulum', function () {
    return view('haluser.kurikulum');
})->name('kurikulum');
Route::get('/ektrakurikuler', function () {
    return view('haluser.ektrakurikuler');
})->name('ektra');
Route::get('/contact1', function () {
    return view('haluser.contact1');
})->name('contact1');

// tanggal 25 juni 2024
Route::group(['prefix' => 'admin', 'middleware' => ['auth', IsAdmin::class]], function () {
    Route::get('/', function () {
        return view('admin.index');
    });
    //untuk Route Backend Lainnya
    Route::resource('user', App\Http\Controllers\UserController::class);
});
// untuk Route Backend Lainnya
Route::group(['prefix' => 'admin', 'middleware' => ['auth', IsAdmin::class]], function () {
    Route::get('/', function () {
        return view('admin.index');
    });
    // route lain
    Route::resource('eskul', App\Http\Controllers\EskulController::class);
    Route::resource('fasilitas', App\Http\Controllers\FasilitasController::class);
    Route::resource('kurikulum', App\Http\Controllers\KurikulumController::class);
    Route::resource('artikel', App\Http\Controllers\ArtikelController::class);
    Route::resource('profil', App\Http\Controllers\FrontController::class);
    Route::resource('kontak', App\Http\Controllers\FrontController::class);
});

