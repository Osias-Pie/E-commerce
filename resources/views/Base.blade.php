<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>StyleHub</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {},
            },
        }
    </script>
</head>
<body class="bg-gray-50">

<!-- HEADER -->
<header class="bg-white border-b shadow">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16 items-center">
            <!-- Logo -->
            <div class="flex-shrink-0 text-2xl font-bold">
                <span style="color: #f99d20;">Style</span><span class="text-black">Hub</span>
            </div>

            <!-- Navigation Links (Large Screen) -->
            <div class="hidden md:flex space-x-6 text-sm font-medium text-black">
                <a href="{{ route('acceuille') }}" class="hover:text-[#f99d20] transition-colors duration-200">Accueil</a>
                <a href="{{ route('catalogue') }}" class="hover:text-[#f99d20] transition-colors duration-200">Catalogues</a>
                <a href="{{ route('produits') }}" class="hover:text-[#f99d20] transition-colors duration-200">Produits</a>
                <a href="{{ route('nouveautés') }}" class="hover:text-[#f99d20] transition-colors duration-200">Nouveautés</a>
                <a href="{{ route('contact') }}" class="hover:text-[#f99d20] transition-colors duration-200">Contact</a>
            </div>

            <!-- Actions -->
            <div class="hidden md:flex items-center space-x-4">
                <a href="#" class="px-4 py-1 text-sm text-black transition rounded hover:bg-orange-300 border border-[#f99d20]">Se connecter</a>
                <a href="#" class="px-4 py-1 text-sm text-black transition bg-orange-400 rounded hover:bg-orange-300 border border-[#f99d20]">Créer un compte</a>
                <div class="relative">
                    <svg class="w-6 h-6 text-black" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                        <path d="M3 3h2l.4 2M7 13h14l1-7H6.4" />
                        <circle cx="9" cy="21" r="1" />
                        <circle cx="20" cy="21" r="1" />
                    </svg>
                    @php
                        $cartCount = $cartCount ?? 0;
                    @endphp
                    @if ($cartCount > 0)
                        <span class="absolute -top-2 -right-2 bg-red-600 text-white text-xs font-bold px-1.5 py-0.5 rounded-full">
                            {{ $cartCount }}
                        </span>
                    @endif
                </div>
            </div>

            <!-- Mobile Menu Button -->
            <div class="md:hidden flex items-center">
                <button id="mobile-menu-button" class="focus:outline-none">
                    <svg class="w-6 h-6 text-black" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16"/>
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Mobile Menu -->
    <div id="mobile-menu" class="md:hidden hidden px-4 pt-4 pb-6 space-y-3">
        <a href="{{ route('acceuille') }}" class="block text-sm text-black hover:text-[#f99d20]">Accueil</a>
        <a href="{{ route('catalogue') }}" class="block text-sm text-black hover:text-[#f99d20]">Catalogues</a>
        <a href="{{ route('produits') }}" class="block text-sm text-black hover:text-[#f99d20]">Produits</a>
        <a href="{{ route('nouveautés') }}" class="block text-sm text-black hover:text-[#f99d20]">Nouveautés</a>
        <a href="{{ route('contact') }}" class="block text-sm text-black hover:text-[#f99d20]">Contact</a>
        <div class="flex flex-col space-y-2 pt-4">
            <a href="#" class="px-4 py-1 text-sm text-black transition rounded hover:bg-orange-300 border border-[#f99d20]">Se connecter</a>
            <a href="#" class="px-4 py-1 text-sm text-black transition bg-orange-400 rounded hover:bg-orange-300 border border-[#f99d20]">Créer un compte</a>
        </div>
    </div>
</header>

<!-- CONTENU PRINCIPAL -->
<main class="py-8">
    @yield('content')
</main>

<script>
    // Toggle mobile menu visibility
    document.getElementById('mobile-menu-button').addEventListener('click', function() {
        document.getElementById('mobile-menu').classList.toggle('hidden');
    });
</script>

<!-- FOOTER -->
<footer class="bg-black text-white mt-12">
    <div class="max-w-7xl mx-auto px-4 py-10 grid grid-cols-1 md:grid-cols-4 gap-8">

        <!-- Logo & Description -->
        <div>
            <h2 class="text-2xl font-bold mb-4">
                <span style="color: #f99d20;">Style</span>Hub
            </h2>
            <p class="text-sm text-gray-300">
                Votre boutique en ligne de pagnes stylés et de qualité. Découvrez nos dernières collections et restez à la pointe de la mode.
            </p>
        </div>

        <!-- Navigation -->
        <div>
            <h3 class="text-lg font-semibold mb-3">Navigation</h3>
            <ul class="space-y-2 text-sm text-gray-300">
                <li><a href="{{ route('acceuille') }}" class="hover:text-[#f99d20]">Accueil</a></li>
                <li><a href="{{ route('catalogue') }}" class="hover:text-[#f99d20]">Catalogues</a></li>
                <li><a href="{{ route('produits') }}" class="hover:text-[#f99d20]">Produits</a></li>
                <li><a href="{{ route('contact') }}" class="hover:text-[#f99d20]">Contact</a></li>
            </ul>
        </div>

        <!-- Services -->
        <div>
            <h3 class="text-lg font-semibold mb-3">Services</h3>
            <ul class="space-y-2 text-sm text-gray-300">
                <li><a href="" class="hover:text-[#f99d20]">Livraison rapide</a></li>
                <li><a href="" class="hover:text-[#f99d20]">Paiement sécurisé</a></li>
                <li><a href="" class="hover:text-[#f99d20]">SAV & Assistance</a></li>
                <li><a href="" class="hover:text-[#f99d20]">Conditions de retour</a></li>
            </ul>
        </div>

        <!-- Newsletter & Réseaux -->
        <div>
            <h3 class="text-lg font-semibold mb-3">Restez Connecté</h3>
            <form action="#" method="POST" class="flex flex-col space-y-3">
                <input type="email" placeholder="Votre adresse email" class="px-3 py-2 rounded bg-gray-700 placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-[#f99d20]">
                <button type="submit" class="bg-[#f99d20] hover:bg-orange-400 text-sm font-semibold py-2 rounded">S'abonner</button>
            </form>
            <div class="flex space-x-4 mt-4">
                <a href="#" class="hover:text-[#f99d20]"><svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M22 4.6c-.8.4-1.6.6-2.5.7a4.3 4.3 0 001.9-2.3 8.6 8.6 0 01-2.7 1A4.3 4.3 0 0015.5 3c-2.4 0-4.3 2-4.3 4.4 0 .3 0 .6.1.9-3.6-.2-6.8-2-8.9-4.7a4.4 4.4 0 00-.6 2.2c0 1.5.7 2.9 1.8 3.7-.7 0-1.4-.2-2-.5v.1c0 2.2 1.5 4 3.5 4.5-.4.1-.8.1-1.3.1-.3 0-.6 0-.9-.1.6 2 2.4 3.5 4.5 3.6A8.6 8.6 0 012 19.5a12.1 12.1 0 006.5 1.9c7.8 0 12-6.5 12-12.1v-.6c.8-.6 1.5-1.3 2-2.1z"/></svg></a>
                <a href="#" class="hover:text-[#f99d20]"><svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M19.6 3H4.4C3.1 3 2 4.1 2 5.4v13.2C2 19.9 3.1 21 4.4 21h15.2c1.3 0 2.4-1.1 2.4-2.4V5.4C22 4.1 20.9 3 19.6 3zM12 18.3c-3.5 0-6.3-2.8-6.3-6.3S8.5 5.7 12 5.7s6.3 2.8 6.3 6.3-2.8 6.3-6.3 6.3zm0-10.5a4.2 4.2 0 100 8.4 4.2 4.2 0 000-8.4zm6.5-.8a1.5 1.5 0 11-3 0 1.5 1.5 0 013 0z"/></svg></a>
                <a href="#" class="hover:text-[#f99d20]"><svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M22.2 0H1.8C.8 0 0 .8 0 1.8v20.4C0 23.2.8 24 1.8 24H12v-9.3H9.3V11H12V8.4c0-2.6 1.6-4 3.9-4 1.1 0 2.1.1 2.4.1v2.8h-1.7c-1.3 0-1.5.6-1.5 1.4V11h3l-.4 3.7h-2.6V24h5.1c1 0 1.8-.8 1.8-1.8V1.8c0-1-.8-1.8-1.8-1.8z"/></svg></a>
            </div>
        </div>
    </div>

    <div class="border-t border-black mt-8 text-center py-4 text-sm text-gray-400">
        &copy; {{ date('Y') }} StyleHub. Tous droits réservés.
    </div>
</footer>


</body>
</html>
