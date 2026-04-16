<?php

use App\Http\Controllers\ContactController;
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

Route::get('/clear-config', function() {
    Artisan::call('config:clear');
    Artisan::call('cache:clear');
    return 'Cleared!';
});

Route::get('/test-mail', function () {
    try {
        Mail::raw('Test email from Masafa site', function ($message) {
            $message->to('info@masafabodyfabricators.com')
                    ->subject('SMTP Test');
        });
        return 'Mail sent successfully!';
    } catch (\Exception $e) {
        return 'Error: ' . $e->getMessage();
    }
});