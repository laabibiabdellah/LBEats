<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\FoodController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;


Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/menu', [FoodController::class, 'index'])->name('menu');
Route::view('/service', 'service')->name('service');
Route::view('/about', 'about-us')->name('about');
Route::view('/contact', 'contact-us')->name('contact');
Route::view('/team', 'our-team')->name('team');
Route::view('/testimonial', 'testimonial')->name('testimonial');
Route::view('/cart', 'cart')->name('cart');

Route::middleware(['auth', 'role:client'])->group(function () {
    // Client routes

});


Route::middleware(['auth', 'role:admin,kitchen_worker,delivery_worker'])
    ->prefix('dashboard')
    ->group(function () {

        Route::get('/', function () {
            return 'Dashboard';
        })->name('admin.dashboard');
    });

Route::middleware(['guest'])->group(function () {
    // Guest routes
    Route::get('/login', [AuthController::class, 'login'])->name('login');
    Route::post('/login', [AuthController::class, 'loginAuth'])->name('login.submit');
    Route::get('/register', [AuthController::class, 'register'])->name('register');
    Route::post('/register', [AuthController::class, 'registerAuth'])->name('register.submit');
});

Route::get('/logout', [AuthController::class, 'logout'])->name('logout')->middleware('auth');
