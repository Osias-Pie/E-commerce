<?php

require __DIR__.'/auth.php';

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Session;
use App\Http\Controllers\CartController;


Route::get('/', [ProductController::class, 'home'])->name('acceuille');

Route::get('/catalogue', [ProductController::class, 'catalogue'])->name('catalogue');

Route::get('/produits', [ProductController::class, 'produits'])->name('produits');

Route::get('/contact',[ProductController::class,'contact'])->name('contact');

Route::get('/nouveautés',[ProductController::class,'nouveautés'])->name('nouveautés');

Route::get('/catalogue', [ProductController::class, 'catalogue'])
    ->middleware(['auth', 'verified'])
    ->name('catalogue');

Route::get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

// Ces routes permettent d’éditer, mettre à jour et supprimer le profil de l’utilisateur connecté.

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
