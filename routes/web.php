<?php

use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;

Route::get('/', function () {
    return view('welcome');
});

Route::post('login', [LoginController::class, 'login'])->name('login');

Auth::routes();

Route::get('/conductor', function(){
    return view('conductor.index');
})->name('conductor.index')->middleware('auth');

Route::get('/pasajero', function(){
    return view('pasajero.index');
})->name('pasajero.index')->middleware('auth');

Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::resource('Admin', AdminController::class)->middleware('auth');


