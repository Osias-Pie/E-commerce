<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CartController extends Controller
{
    public function addToCart($productId)
    {
        // On récupère le panier actuel depuis la session
        $cart = session()->get('cart', []);

        // Si le produit existe déjà, on augmente sa quantité
        if (isset($cart[$productId])) {
            $cart[$productId]['quantity'] += 1;
        } else {
            // Sinon, on l'ajoute avec une quantité de 1
            $cart[$productId] = [
                'product_id' => $productId,
                'quantity' => 1
            ];
        }

        // On remet à jour la session
        session()->put('cart', $cart);

        // Redirection vers la page d'accueil
        return redirect('/home');
    }
}
