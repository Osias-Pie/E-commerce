@extends('base')

@section('content')

{{-- <section class="py-12">
    <div class="container mx-auto px-4">
        <h2 class="text-3xl font-bold text-gray-800 mb-8">Notre Catalogue</h2>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
            <!-- Pagne Item -->
            <div class="pagne-card bg-white rounded-lg overflow-hidden shadow-md cursor-pointer"
                data-title="Wax Africain Multicolore"
                data-description="Tissu 100% coton, motif traditionnel"
                data-price="12 500 FCFA"
                data-image="{{ asset('storage/images/image1.png') }}">

                <div class="relative">
                    <img src="{{ asset('storage/images/image1.png') }}" alt="Pagne" class="w-full h-64 object-cover">
                    <span class="absolute top-2 right-2 bg-green-500 text-white text-xs px-2 py-1 rounded">Nouveau</span>
                </div>
                <div class="p-4">
                    <h3 class="font-bold text-lg mb-2">Wax Africain Multicolore</h3>
                    <p class="text-gray-600 text-sm mb-3">Tissu 100% coton, motif traditionnel</p>
                    <div class="flex justify-between items-center">
                        <span class="font-bold text-[#f99d20]">12 500 FCFA</span>
                        <button class="add-to-cart bg-[#f99d20] text-white px-3 py-1 rounded text-sm hover:bg-orange-600 transition">
                            <i class="fas fa-cart-plus mr-1"></i> Ajouter
                        </button>
                    </div>
                </div>
            </div>

            <!-- Pagne2 Item -->
            <div class="pagne-card bg-white rounded-lg overflow-hidden shadow-md cursor-pointer"
                data-title="Wax Africain Multicolore"
                data-description="Tissu 100% coton, motif traditionnel"
                data-price="12 500 FCFA"
                data-image="{{ asset('storage/images/pagne2.jpg') }}">

                <div class="relative">
                    <img src="{{ asset('storage/images/pagne2.jpg') }}" alt="Pagne" class="w-full h-64 object-cover">
                    <span class="absolute top-2 right-2 bg-green-500 text-white text-xs px-2 py-1 rounded">Nouveau</span>
                </div>
                <div class="p-4">
                    <h3 class="font-bold text-lg mb-2">Wax Africain Multicolore</h3>
                    <p class="text-gray-600 text-sm mb-3">Tissu 100% coton, motif traditionnel</p>
                    <div class="flex justify-between items-center">
                        <span class="font-bold text-[#f99d20]">12 500 FCFA</span>
                        <button class="add-to-cart bg-[#f99d20] text-white px-3 py-1 rounded text-sm hover:bg-orange-600 transition">
                            <i class="fas fa-cart-plus mr-1"></i> Ajouter
                        </button>
                    </div>
                </div>
            </div>

            <!-- Pagne3 Item -->
            <div class="pagne-card bg-white rounded-lg overflow-hidden shadow-md cursor-pointer"
                data-title="Wax Africain Multicolore"
                data-description="Tissu 100% coton, motif traditionnel"
                data-price="12 500 FCFA"
                data-image="{{ asset('storage/images/pagne3.jpg') }}">

                <div class="relative">
                    <img src="{{ asset('storage/images/pagne3.jpg') }}" alt="Pagne" class="w-full h-64 object-cover">
                    <span class="absolute top-2 right-2 bg-green-500 text-white text-xs px-2 py-1 rounded">Nouveau</span>
                </div>
                <div class="p-4">
                    <h3 class="font-bold text-lg mb-2">Wax Africain Multicolore</h3>
                    <p class="text-gray-600 text-sm mb-3">Tissu 100% coton, motif traditionnel</p>
                    <div class="flex justify-between items-center">
                        <span class="font-bold text-[#f99d20]">12 500 FCFA</span>
                        <button class="add-to-cart bg-[#f99d20] text-white px-3 py-1 rounded text-sm hover:bg-orange-600 transition">
                            <i class="fas fa-cart-plus mr-1"></i> Ajouter
                        </button>
                    </div>
                </div>
            </div>

            <!-- Pagne4 Item -->
            <div class="pagne-card bg-white rounded-lg overflow-hidden shadow-md cursor-pointer"
                data-title="Wax Africain Multicolore"
                data-description="Tissu 100% coton, motif traditionnel"
                data-price="12 500 FCFA"
                data-image="{{ asset('storage/images/pagne4.jpg') }}">

                <div class="relative">
                    <img src="{{ asset('storage/images/pagne4.jpg') }}" alt="Pagne" class="w-full h-64 object-cover">
                    <span class="absolute top-2 right-2 bg-green-500 text-white text-xs px-2 py-1 rounded">Nouveau</span>
                </div>
                <div class="p-4">
                    <h3 class="font-bold text-lg mb-2">Wax Africain Multicolore</h3>
                    <p class="text-gray-600 text-sm mb-3">Tissu 100% coton, motif traditionnel</p>
                    <div class="flex justify-between items-center">
                        <span class="font-bold text-[#f99d20]">12 500 FCFA</span>
                        <button class="add-to-cart bg-[#f99d20] text-white px-3 py-1 rounded text-sm hover:bg-orange-600 transition">
                            <i class="fas fa-cart-plus mr-1"></i> Ajouter
                        </button>
                    </div>
                </div>
            </div>

            <!-- Pagne5 Item -->
            <div class="pagne-card bg-white rounded-lg overflow-hidden shadow-md cursor-pointer"
                data-title="Wax Africain Multicolore"
                data-description="Tissu 100% coton, motif traditionnel"
                data-price="12 500 FCFA"
                data-image="{{ asset('storage/images/pagne5.jpg') }}">

                <div class="relative">
                    <img src="{{ asset('storage/images/pagne5.jpg') }}" alt="Pagne" class="w-full h-64 object-cover">
                    <span class="absolute top-2 right-2 bg-green-500 text-white text-xs px-2 py-1 rounded">Nouveau</span>
                </div>
                <div class="p-4">
                    <h3 class="font-bold text-lg mb-2">Wax Africain Multicolore</h3>
                    <p class="text-gray-600 text-sm mb-3">Tissu 100% coton, motif traditionnel</p>
                    <div class="flex justify-between items-center">
                        <span class="font-bold text-[#f99d20]">12 500 FCFA</span>
                        <button class="add-to-cart bg-[#f99d20] text-white px-3 py-1 rounded text-sm hover:bg-orange-600 transition">
                            <i class="fas fa-cart-plus mr-1"></i> Ajouter
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Modal -->
<div id="pagneModal" class="fixed inset-0 bg-black bg-opacity-50-flex items-center justify-center hidden z-50">
    <div class="bg-white rounded-lg shadow-lg max-w-2xl w-full p-6 relative">
        <button id="closeModal" class="absolute top-2 right-2 text-gray-600 hover:text-gray-900">&times;</button>
        <img id="modalImage" src="" alt="Pagne" class="w-full h-96 object-cover rounded mb-4">
        <h3 id="modalTitle" class="text-2xl font-bold mb-2"></h3>
        <p id="modalDescription" class="text-gray-600 mb-4"></p>
        <span id="modalPrice" class="text-xl font-bold text-[#f99d20]"></span>
        <button class="add-to-cart bg-[#f99d20] text-white px-3 py-1 rounded text-sm hover:bg-orange-600 transition">
    <i class="fas fa-cart-plus mr-1"></i> Ajouter
</button>

    </div>
</div>


<script>
    let cartCount = 0;

document.querySelectorAll('.add-to-cart').forEach(button => {
    button.addEventListener('click', function(e) {
        e.stopPropagation();  // Ne pas ouvrir le modal

        // Incrémente le compteur Panier
        cartCount++;
        document.getElementById('cartCount').textContent = cartCount;

        // Animation badge (petit rebond)
        const cartBadge = document.getElementById('cartCount');
        cartBadge.classList.add('scale-125');
        setTimeout(() => {
            cartBadge.classList.remove('scale-125');
        }, 200);

        // Optionnel: Afficher un toast de confirmation (comme on l’a fait avant)
        showToast('Produit ajouté au panier !');
    });
});

    // Ouvrir Modal au clic sur une carte (sauf sur le bouton Ajouter)
    document.querySelectorAll('.pagne-card').forEach(card => {
        card.addEventListener('click', function(e) {
            if (e.target.closest('.add-to-cart')) return; // Ne pas ouvrir le modal si on clique sur "Ajouter"

            // Charger les données du pagne dans le modal
            document.getElementById('modalImage').src = card.getAttribute('data-image');
            document.getElementById('modalTitle').textContent = card.getAttribute('data-title');
            document.getElementById('modalDescription').textContent = card.getAttribute('data-description');
            document.getElementById('modalPrice').textContent = card.getAttribute('data-price');

            document.getElementById('pagneModal').classList.remove('hidden');
        });
    });

    // Fermer le Modal
    document.getElementById('closeModal').addEventListener('click', function() {
        document.getElementById('pagneModal').classList.add('hidden');
    });

    // Fermer en cliquant en dehors du Modal
    document.getElementById('pagneModal').addEventListener('click', function(e) {
        if (e.target === this) {
            this.classList.add('hidden');
        }
    });
</script> --}}
@endsection
