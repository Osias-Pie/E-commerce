<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
   public function catalogue()
{
    $articles = \App\Models\Product::all(); // ou le modèle que tu utilises
    return view('catalogue', compact('articles'));
}


     public function home ()
     {
        return view ('home');
     }

    // public function catalogue ()
    //  {
    //     return view ('catalogue');
    //  }

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

