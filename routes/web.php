<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

Route::view('/', 'main')->name('home');
Route::view('/menu', 'menu')->name('menu');
Route::view('/service', 'service')->name('service');
Route::view('/about', 'about-us')->name('about');
Route::view('/contact', 'contact-us')->name('contact');
Route::view('/team', 'our-team')->name('team');
Route::view('/testimonial', 'testimonial')->name('testimonial');
Route::view('/cart', 'cart')->name('cart');

Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/login', [AuthController::class, 'loginAuth'])->name('login.submit');
Route::get('/register', [AuthController::class, 'register'])->name('register');
Route::post('/register', [AuthController::class, 'registerAuth'])->name('register.submit');
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');