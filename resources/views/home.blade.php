<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <title>Accueil</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 font-sans text-gray-800">

<!-- HEADER -->
<header class="bg-white shadow-sm">
  <div class="max-w-7xl mx-auto px-4 py-4 flex justify-between items-center">
    <!-- Logo -->
    <div class="text-2xl font-bold">
      <span class="text-purple-600">Style</span>Hub
    </div>

    <!-- Navigation -->
    <nav>
      <ul class="flex space-x-6 text-sm font-medium">
        <li><a href="#" class="hover:text-purple-600">Accueil</a></li>
        <li><a href="#" class="hover:text-purple-600">Catégories</a></li>
        <li><a href="#" class="hover:text-purple-600">Produits</a></li>
        <li><a href="#" class="hover:text-purple-600">Nouveautés</a></li>
        <li><a href="#" class="hover:text-purple-600">Contact</a></li>
      </ul>
    </nav>

    <!-- Droite : Connexion + Panier -->
    <div class="flex items-center space-x-6">
      <!-- Connexion -->
      <div class="flex space-x-4">
        <a href="{{ route('login') }}" class="text-sm font-medium text-gray-700 hover:text-purple-600">Se connecter</a>
        <a href="{{ route('register') }}" class="text-sm font-medium bg-purple-600 text-white px-4 py-1.5 rounded hover:bg-purple-700 transition">Créer un compte</a>
      </div>
      <!-- Panier -->
      <div class="relative">
        <svg class="w-6 h-6 text-gray-700" fill="none" stroke="currentColor" stroke-width="2"
             viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round"
             d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-1 5h12l-1-5" /></svg>
        <span class="absolute -top-2 -right-2 bg-purple-600 text-white text-xs px-1.5 py-0.5 rounded-full">4</span>
      </div>
    </div>
  </div>
</header>

<!-- BANNIÈRE -->
<section class="bg-gradient-to-r from-purple-500 to-indigo-600 text-white text-center py-16">
  <h1 class="text-4xl font-bold mb-2">Bienvenue sur StyleHub</h1>
  <p class="text-lg">Votre boutique en ligne de pagnes stylés et de qualité</p>
</section>

<!-- PRÉSENTATION RAPIDE -->
<section class="bg-white py-12 text-center">
  <h2 class="text-2xl font-semibold mb-4">Qui sommes-nous ?</h2>
  <p class="max-w-xl mx-auto">Une plateforme spécialisée dans la vente de pagnes originaux, où la qualité rencontre l'élégance. Nos produits sont soigneusement sélectionnés pour satisfaire vos goûts les plus raffinés.</p>
</section>

<!-- PRODUITS EN VEDETTE -->
<section class="py-12 px-4">
  <h2 class="text-2xl font-semibold mb-6 text-center">Nos coups de cœur</h2>
  <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6 max-w-7xl mx-auto">
    <!-- Produit mocké -->
    @for ($i = 1; $i <= 4; $i++)
      <div class="bg-white p-4 shadow rounded hover:scale-105 transition">
        <img src="https://via.placeholder.com/150" class="w-full h-40 object-cover rounded mb-2" alt="Produit {{ $i }}">
        <h3 class="font-semibold">Produit {{ $i }}</h3>
        <p class="text-sm text-gray-600">10 000 FCFA</p>
      </div>
    @endfor
  </div>
</section>

</body>
</html>
