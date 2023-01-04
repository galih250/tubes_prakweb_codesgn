<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardAdminController;
use App\Http\Controllers\DashboardUserPostController;

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

// autentikasi
Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::get('/logout', [LoginController::class, 'logout']);
Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store']);

// admin
Route::get('/dashboard-admin', [DashboardAdminController::class, 'index'])->name('dashboard-admin');

// user
Route::get('/dashboard-user', function () {
    return view('dashboard-user.index');
})->middleware('auth');

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard-user/posts/checkSlug', [DashboardUserPostController::class, 'checkSlug'])->middleware('auth');
Route::resource('/dashboard-user/posts', DashboardUserPostController::class)->middleware('auth');
