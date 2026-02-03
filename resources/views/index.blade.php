@extends('layouts.app')

@section('title', 'Accueil - ShopLaravel')
    Quoi qu'on a ?
@section('content')
    <h1 class="text-3xl font-bold mb-4">Nos produits !</h1>
    <p>
    <!-- @foreach($plage as $item)
        Produit n°{{ $item['id'] }} : {{ $item['name']}}, {{ $item['price']}}€.<br/>
    @endforeach -->

    @forelse($plage as $item)
        @if($loop->first)
            Premier produit !
        @elseif($loop->last)
            Dernier produit !
        @endif
        Produit n°{{ $item['id'] }} : {{ $item['name']}}, {{ $item['price']}}€. (index {{ $loop->index }})<br/>
    @empty
        Aucun élément trouvé.
    @endforelse
    </p>
@endsection