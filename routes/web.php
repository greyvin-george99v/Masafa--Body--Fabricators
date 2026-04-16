<?php

use Illuminate\Support\Facades\Route;

// Home
Route::view('/', 'welcome')->name('home');

// Main Pages
Route::view('/services', 'services')->name('services');
Route::view('/about', 'about')->name('about');
Route::view('/gallery', 'gallery')->name('gallery');
Route::view('/contacts', 'contacts')->name('contacts');

// Legal
Route::view('/privacy-policy', 'privacy-policy')->name('privacy');

Route::post('/contact-submit', [ContactController::class, 'send'])->name('contact.store');