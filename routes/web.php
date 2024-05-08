<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

// personal-site.com => home
// personal-site.com/blog => blog
// personal-site.com/nosotros => about
//personal-site.com/contacto => contact

Route::view('/', 'home')->name('home');
Route::view('/blog', 'blog')->name('blog');
Route::view('/nosotros', 'about')->name('about');
Route::view('/contacto', 'contact')->name('contact');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
