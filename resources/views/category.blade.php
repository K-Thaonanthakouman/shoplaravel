@extends('layouts.app')

@section('title', 'Comment qu\'on nous parle ?')

@section('content')
    
    <p>
        Catégorie n°{{ $id }} : {{ $category->name }}.<br/>
        Qu'est-ce donc ? Eh bien, ce sont {{ $category->description }}.
    </p>

    <p>Voici les produits de cette catégorie :</p>
        @forelse($category->products as $product)
            <p>{{ $product->name }}. {{ $product->description }}</p>
        @empty
        <p>Y a rien ! </p>
        @endforelse


@endsection