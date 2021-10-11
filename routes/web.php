<?php

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

// Route home
Route::get('/', function () {
    return view('beranda');
})->name('beranda');

Route::get('beranda', function () {
    return view('beranda');
})->name('beranda');

// Route home
Route::get('about', function () {
    return view('about');
})->name('about');

// Route home
Route::get('post', function () {
    return view('post');
})->name('post');

// Route tampilan contact
Route::get('contact', function () {
    return view('contact');
})->name('contact');

Route::prefix('admin')->group(function () {
    Route::get('/', function () {
    return view('admin.index');
    });
});


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
