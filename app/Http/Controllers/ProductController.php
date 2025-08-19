<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Support\Facades\Storage; // pour supprimer les images

class ProductController extends Controller
{
    public function catalogue()
    {
    $products = Product::all();
    return view('catalogue', compact('products'));
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

    // ... tes autres méthodes déjà là (home, contact, etc.)

    public function create()
    {
        return view('products.create'); // on crée cette vue après
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'price' => 'required|numeric',
            'image' => 'nullable|image|max:2048',
        ]);

        $imagePath = null;
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('products', 'public');
        }

        Product::create([
            'name' => $request->name,
            'price' => $request->price,
            'image' => $imagePath,
        ]);

        return redirect()->route('catalogue')->with('success', 'Produit ajouté avec succès !');
    }

    public function edit(Product $product)
    {
        return view('products.edit', compact('product'));
    }

    public function update(Request $request, Product $product)
    {
        $request->validate([
            'name' => 'required',
            'price' => 'required|numeric',
            'image' => 'nullable|image|max:2048',
        ]);

        if ($request->hasFile('image')) {
            // supprimer l'ancienne image si elle existe
            if ($product->image) {
                Storage::disk('public')->delete($product->image);
            }

            $product->image = $request->file('image')->store('products', 'public');
        }

        $product->name = $request->name;
        $product->price = $request->price;
        $product->save();

        return redirect()->route('catalogue')->with('success', 'Produit modifié avec succès !');
    }

    public function destroy(Product $product)
    {
        if ($product->image) {
            Storage::disk('public')->delete($product->image);
        }

        $product->delete();

        return redirect()->route('catalogue')->with('success', 'Produit supprimé.');
    }

    public function index()
    {
        $products = Product::all(); // ou Product::latest()->get();

        return view('products.index', compact('products'));
    }
}

