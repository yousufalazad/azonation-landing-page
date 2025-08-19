<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;


Route::view('/', 'frontend.home')->name('home');
Route::view('/pricing', 'frontend.pricing')->name('pricing');
Route::view('/organisation', 'frontend.contact')->name('organization');
Route::view('/individual', 'frontend.contact')->name('individual');
Route::view('/about', 'frontend.about')->name('about');
Route::view('/help', 'frontend.contact')->name('help');
Route::view('/contact', 'frontend.contact')->name('contact');
Route::post('/contact', [ContactController::class, 'submit'])->name('contact.submit');




Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
