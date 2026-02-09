@extends('layouts.app')

@section('title', 'Quoiqu\'on a ?')

@section('content')

    <h1 class="text-3xl font-bold mb-4">Nos produits !</h1>
    <!-- @foreach($products as $item)
        Produit n°{{ $item['id'] }} : {{ $item['name']}}, {{ $item['price']}}€.<br/>
    @endforeach -->

    @forelse($products as $product)
        <p>
        @if($loop->first)
            Premier produit !
        @elseif($loop->last)
            Dernier produit !
        @endif
        Produit n°{{ $product->id }} : {{ $product->name }}, {{ $product->price }}€. {{ $product->description }}<br/>
        Il y en a {{ $product->stock }} en stock. (index {{ $loop->index }})
        </p>
    @empty
        Aucun élément trouvé.
    @endforelse

@endsection