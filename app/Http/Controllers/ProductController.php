<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    // public function catalogue()
    // {
    //     $products = Product::all();
    //     return view('catalogue', compact('products'));
    // }


     public function home ()
     {
        return view ('home');
     }

    public function catalogue ()
     {
        return view ('catalogue');
     }

     public function contact ()
     {
        return view ('contact');
     }

      public function produits ()
     {
        return view ('produits');
     }

       public function nouveautés ()
     {
        return view ('nouveautés');
     }
}

