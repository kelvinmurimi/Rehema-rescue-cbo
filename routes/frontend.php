<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

Route::get('/', [HomeController::class, 'index'])->name('home');

// Additional frontend routes can be added here grouped
Route::group(['r'], function () {
    // Example route
     Route::get('/about-rehema-rescue-cbo', [HomeController::class, 'about'])->name('about');
     Route::get('/contact-rehema-rescue-cbo', [HomeController::class, 'contact'])->name('contact');
     //beneficiaries
     Route::get('beneficiaries-rehema-rescue-cbo', [HomeController::class, 'beneficiaries'])->name('beneficiaries');
     Route::get('events-rehema-rescue-cbo  ', [HomeController::class, 'events'])->name('events');
     Route::get('donation-rehema-rescue-cbo', [HomeController::class, 'donation'])->name('donation');
     Route::get('volunteer-rehema-rescue-cbo', [HomeController::class, 'volunteer'])->name('volunteer');
     //FAQs
     Route::get('faqs-rehema-rescue-cbo', [HomeController::class, 'faqs'])->name('faqs');
     //partners
     Route::get('partners-rehema-rescue-cbo', [HomeController::class,'partners'])->name('partners');
     //programs
     Route::get('programs-rehema-rescue-cbo', [HomeController::class, 'programs'])->name('programs');
     //privacy
     Route::get('privacy-policy-rehema-rescue-cbo', [HomeController::class, 'privacy'])->name('privacy');
     //partner
     Route::get('partner-rehema-rescue-cbo', [HomeController::class, 'partner'])->name('partner');
     //transparency
     Route::get('transparency-rehema-rescue-cbo', [HomeController::class, 'transparency'])->name('transparency');
     
}); 