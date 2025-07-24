<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function catalogue()
    {
        $products = Product::all();
        return view('catalogue', compact('products'));
    }
}

