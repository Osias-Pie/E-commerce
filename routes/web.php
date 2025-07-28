<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Session;
use App\Http\Controllers\CartController;


Route::get('/home', [ProductController::class, 'home'])->name('acceuille');

Route::get('/catalogue', [ProductController::class, 'catalogue'])->name('catalogue');

Route::get('/produits', [ProductController::class, 'produits'])->name('produits');

Route::get('/contact',[ProductController::class,'contact'])->name('contact');

Route::get('/nouveautés',[ProductController::class,'nouveautés'])->name('nouveautés');

