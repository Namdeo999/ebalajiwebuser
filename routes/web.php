<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\UserController;

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
    return view('home');
});
Route::get('/about', function () {
    return view('about');
});
Route::get('/contact', function () {
    return view('contact');
});
Route::get('/login', function () {
    return view('login');
});
Route::get('/register', function () {
    return view('register');
});
Route::get('/dashboard', function () {
    return view('dashboard');
});

Route::get('/login', [UserController::class, 'index']);
Route::post('/user-login', [UserController::class, 'userLogin']);

Route::get('/dashboard', [DashboardController::class, 'index']);
Route::get('/dashboard2', [DashboardController::class, 'index2']);
// Route::get('/', $controller_path . '\dashboard\Analytics@index')->name('dashboard-analytics');



