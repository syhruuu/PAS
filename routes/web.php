<?php

use App\Http\Controllers\BeritaController;
use App\Http\Controllers\KategoriController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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
    return view('pages.home');
});
Route::get('/detail', function () {
    return view('pages.detail');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::controller(BeritaController::class)->group(function() {
    Route::get('/berita','index');
    Route::get('/berita-create','create');
    Route::post('/berita-create','store');
    Route::get('/berita-edit/{id}','edit');
    Route::put('/berita-edit/{id}','update');
    Route::delete('berita/{id}', 'destroy');
});
Route::controller(KategoriController::class)->group(function() {
    Route::get('/kategori','index');
    Route::get('/kategori-create','create');
    Route::post('/kategori-create','store');
    Route::get('/kategori-edit/{id}','edit');
    Route::put('/kategori-edit/{id}','update');
    Route::delete('kategori/{id}', 'destroy');
});
