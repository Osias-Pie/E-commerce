<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Session;
use App\Http\Controllers\CartController;

Route::get('/home', function () {
    // Étape 1 : On récupère le panier depuis la session (ou un tableau vide s'il n'existe pas)
    $cart = session()->get('cart', []);

    // Étape 2 : On calcule le total des quantités dans le panier
    $cartCount = array_sum(array_column($cart, 'quantity'));

    // Étape 3 : On envoie cette valeur à la vue 'home'
    return view('home', compact('cartCount'));
});

Route::get('/add-to-cart/{id}', [CartController::class, 'addToCart']);


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

