@extends('layouts.app')

@section('content')

<h1>Catalogue des pagnes</h1>

@foreach($products as $product)
    <div>
        <h2>{{ $product->name }}</h2>
        <p>{{ $product->price }} FCFA</p>
        <img src="{{ asset('storage/' . $product->image) }}" alt="Image du pagne" width="200">
    </div>
@endforeach

@endsection

