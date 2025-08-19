@extends('base')

@section('content')

<div class="container mx-auto px-4">
    <h1 class="text-2xl font-bold mb-4">Catalogue des produits</h1>

    @if ($products->isEmpty())
        <div class="bg-yellow-100 text-yellow-800 p-4 rounded shadow">
            Aucun produit disponible pour le moment.
        </div>
    @else
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6">
            @foreach ($products as $product)
                <div class="border rounded p-4 shadow bg-white">
                    <img src="{{ asset('storage/images/' . $product->image) }}"
                      alt="{{ $product->name }}"
                      class="mb-2 w-full h-48 object-cover">

                    <h2 class="text-lg font-semibold">{{ $product->name }}</h2>

                    <p class="text-sm text-gray-600 mb-2">
                        {{ $product->description ?? 'Pas de description' }}
                    </p>

                    <p class="text-green-600 font-bold">
                        {{ format_price($product->price, 'FCFA') }}
                    </p>


                    <form method="POST" action="{{ route('cart.add', $product->id) }}">
                        @csrf
                        <button type="submit" class="mt-2 w-full bg-orange-500 text-white py-2 rounded hover:bg-orange-600 transition">
                            Ajouter au Panier
                        </button>
                    </form>
                </div>
            @endforeach
        </div>
    @endif
</div>

@endsection
