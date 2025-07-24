<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Session;
use App\Http\Controllers\CartController;

Route::get('/home', function () {
    $cart = session()->get('cart', []);
    $cartCount = array_sum(array_column($cart, 'quantity'));
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
    $cart = session()->get('cart', []);
    $cartCount = array_sum(array_column($cart, 'quantity'));
    return view('home.home', compact('cartCount'));
});

Route::get('/catalogue', function () {
    return view('home.catalogue');
});

Route::get('/contact', function () {
    return view('home.contact');
});

Route::get('/produits', function () {
    return 'Page Produits';
});

Route::get('/panier', function () {
    return 'Page Panier';
});

Route::get('/admin', function () {
    return 'Page Admin';
});
