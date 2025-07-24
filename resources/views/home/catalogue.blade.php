<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <title>Accueil</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="font-sans text-gray-800 bg-gray-100">

<!-- HEADER -->
<header class="flex items-center justify-between p-4 bg-white border-b shadow">
  <!-- Logo -->
  <div class="text-2xl font-bold">
    <span style="color: #f99d20;">Style</span><span class="text-black">Hub</span>
  </div>

  <!-- Navigation -->
  <nav class="space-x-6 text-sm font-medium text-black">
    <a href="" class="hover:text-[#f99d20] transition-colors duration-200">Accueil</a>
    <a href="" class="hover:text-[#f99d20] transition-colors duration-200">Catalogues</a>
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
      <span
        class="absolute flex items-center justify-center w-5 h-5 text-xs text-white bg-black rounded-full -top-2 -right-2 hover:bg-orange-300">
        4
      </span>
    </div>
  </div>
</header>
