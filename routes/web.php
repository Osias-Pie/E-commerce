<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

Route::get('/home', function () {
    $cartCount = 0; // Ou récupère le vrai nombre d’articles du panier

    return view('home', compact('cartCount'));
});



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

Route::get('/', function () {
    return view('home', compact('cartCount'));
});

Route::get('/produits', function () {
    return 'Page Produits';
});

Route::get('/panier', function () {
    return 'Page Panier';
});

Route::get('/contact', function () {
    return 'Page Contact';
});

Route::get('/admin', function () {
    return 'Page Admin';
});

Route::get('/catalogue', [ProductController::class, 'catalogue'])->name('catalogue');

