<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\HomeController;
// use App\Http\Controllers\dashboardcontroller;

// Route::get('/dashboard',[dashboardcontroller::class,'dash'])->name('dashboard');

// Route::get('/logout',[logoutcontroller::class,'index'])->name('logout');


Route::get('/register',[RegisterController::class,'index'])->name('register');
Route::post('/register',[RegisterController::class,'store']);

Route::get('/login',[LoginController::class,'index'])->name('login');
Route::post('/login',[LoginController::class,'store']);


Route::get('/home',[HomeController::class,'index']);

Route::get('/', function () {
    return view('pages.home');
})->name('home');

// Route::get('/', function () {
//     return view('pages.home');
// })->name('home');

// Route::get('/login', function () {
//     return view('pages.login');
// })->name('login');

Route::get('/login_success', function () {
    return view('pages.login_success');
})->name('success');

Route::get('/register_success', function () {
    return view('pages.register_success');
})->name('register_success');

Route::get('/Invalid', function () {
    return view('pages.Invalid');
})->name('Invalid');


Route::get('/home', 'HomeController@index')->name('home');
