<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
  <meta charset="UTF-8">
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>

    {{-- Tous nos contenus sont ici. --}}
@yield('content')

</body>
<!-- HEADER -->
<header class="flex items-center justify-between p-4 bg-white border-b shadow">
  <!-- Logo -->
  <div class="text-2xl font-bold">
    <span style="color: #f99d20;">Style</span><span class="text-black">Hub</span>
  </div>

  <script setup>
import { ref } from 'vue'

const cartCount = ref(0)
</script>

  <!-- Navigation -->
  <nav class="space-x-6 text-sm font-medium text-black">
    <a href="#" class="hover:text-[#f99d20] transition-colors duration-200">Accueil</a>
    <a href="#" class="hover:text-[#f99d20] transition-colors duration-200">Catalogues</a>
    <a href="#" class="hover:text-[#f99d20] transition-colors duration-200">Produits</a>
    <a href="#" class="hover:text-[#f99d20] transition-colors duration-200">Nouveautés</a>
    <a href="#" class="hover:text-[#f99d20] transition-colors duration-200">Contact</a>
  </nav>

  <!-- Actions : Connexion, compte et panier -->
  <div class="flex items-center space-x-4">
 <a href="#"
   class="px-4 py-1 text-sm text-black transition rounded hover:bg-orange-300"
   style="border: 1px solid #f99d20;">
   Se connecter
</a>
    <a href="#"
       class="px-4 py-1 text-sm text-black transition bg-orange-400 rounded hover:bg-orange-300"
       style="border: 1px solid #f99d20;">
       Créer un compte
    </a>
    <div class="relative">
      <svg class="w-6 h-6 text-black" fill="none" stroke="currentColor" stroke-width="2"
      viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
        <path d="M3 3h2l.4 2M7 13h14l1-7H6.4" />
        <circle cx="9" cy="21" r="1" />
        <circle cx="20" cy="21" r="1" />
      </svg>
    @if ($cartCount > 0)
    <span class="absolute -top-2 -right-2 bg-red-600 text-white text-xs font-bold px-1.5 py-0.5 rounded-full">
        {{ $cartCount }}
    </span>
@endif
<script>
    const cartCount = {{ $cartCount ?? 0 }};
</script>
<span class="absolute -top-2 -right-2 bg-red-600 text-white text-xs font-bold px-1.5 py-0.5 rounded-full">
    {{ $cartCount ?? 0 }}
</span>

    </div>
  </div>
</header>

{{--
<!-- BANNIÈRE -->
<section class="py-16 text-center text-white bg-gradient-to-r from-purple-500 to-indigo-600">
  <h1 class="mb-2 text-4xl font-bold">Bienvenue sur StyleHub</h1>
  <p class="text-lg">Votre boutique en ligne de pagnes stylés et de qualité</p>
</section>

<!-- PRÉSENTATION RAPIDE -->
<section class="py-12 text-center bg-white">
  <h2 class="mb-4 text-2xl font-semibold">Qui sommes-nous ?</h2>
  <p class="max-w-xl mx-auto">Une plateforme spécialisée dans la vente de pagnes originaux, où la qualité rencontre l'élégance. Nos produits sont soigneusement sélectionnés pour satisfaire vos goûts les plus raffinés.</p>
</section>

<!-- PRODUITS EN VEDETTE -->
<section class="px-4 py-12">
  <h2 class="mb-6 text-2xl font-semibold text-center">Nos coups de cœur</h2>
  <div class="grid grid-cols-2 gap-6 mx-auto md:grid-cols-3 lg:grid-cols-4 max-w-7xl">
    <!-- Produit mocké -->
    @for ($i = 1; $i <= 4; $i++)
      <div class="p-4 transition bg-white rounded shadow hover:scale-105">
        <img src="https://via.placeholder.com/150" class="object-cover w-full h-40 mb-2 rounded" alt="Produit {{ $i }}">
        <h3 class="font-semibold">Produit {{ $i }}</h3>
        <p class="text-sm text-gray-600">10 000 FCFA</p>
      </div>
    @endfor
  </div>
</section>
>>>>>>> 78d27c09e9e9c9c1b3a4190ed55729ee2e10c46d:resources/views/Base.blade.php

</body>
</html>
 --}}
