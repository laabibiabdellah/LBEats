<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'main')->name('home');
Route::view('/menu', 'menu')->name('menu');
Route::view('/service', 'service')->name('service');
Route::view('/about', 'about-us')->name('about');
Route::view('/contact', 'contact-us')->name('contact');
Route::view('/team', 'our-team')->name('team');
Route::view('/testimonial', 'testimonial')->name('testimonial');
Route::view('/cart', 'cart')->name('cart');
