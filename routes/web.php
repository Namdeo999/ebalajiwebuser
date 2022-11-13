<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\UserController;


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
Route::get('/register', [DashboardController::class, 'index2']);

Route::post('register/register', [UserController::class, 'saveMobileNo']);

