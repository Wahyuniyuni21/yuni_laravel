<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

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
    return view('welcome');
});

Route::get('halo', function () {
	return "Halo, Selamat datang di tutorial laravel www.malasngoding.com";
});

Route::get('blog', function () {
	return view('blog');
});
//Jalur Route ke Halaman home
Route::get('home', [HomeController::class, 'index']);

//Jalur Route ke Halaman about
Route::get('utama', [HomeController::class, 'yuni']);

//Jalur Route ke Halaman contact
Route::get('kontak', [HomeController::class, 'saya']);
Route::get('homeyuni', [HomeController::class, 'homeyuni']);
