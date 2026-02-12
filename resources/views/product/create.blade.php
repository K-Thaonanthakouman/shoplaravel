@extends('layouts.app')

@section('title', 'Form a la form !')

@section('content')
    <h1 class="text-2xl font-bold mb-6">Nouveau produit</h1>

    <form action="{{ route('product.store') }}" method="POST" class="max-w-lg">
        @csrf

        @if ($errors->any())
            <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded mb-4">
                <strong>Oups !</strong> Il y a des erreurs dans le formulaire :
                <ul class="mt-2 list-disc list-inside">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
                </ul>
            </div>
        @endif

        <div class="mb-4">
            <label for="name" class="block font-medium mb-1">Nom</label>
            <input type="text" name="name" id="name"
                   value="{{ old('name') }}"
                   class="w-full border rounded px-3 py-2
                         @error('name') border-red-500 @enderror">

            @error('name')
                <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
            @enderror
        </div>

        <div class="mb-4">
            <label for="category_id" class="block font-medium mb-1">Catégorie</label>
            <select name="category_id" id="category_id" class="w-full border rounded px-3 py-2">
                @foreach ($category as $element)
                    <option value="{{ $element->id }}">{{$element->name}}</option>
                @endforeach
        </div>

        <div class="mb-4">
            <label for="description" class="block font-medium mb-1">Description</label>
            <input type="text" name="description" id="description"
                   value="{{ old('description') }}"
                   class="w-full border rounded px-3 py-2">
        </div>

        <div class="mb-4">
            <label for="price" class="block font-medium mb-1">Prix</label>
            <input type="text" name="price" id="price"
                   value="{{ old('price') }}"
                   class="w-full border rounded px-3 py-2
                         @error('price') border-red-500 @enderror">

            @error('price')
                <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
            @enderror
        </div>

        <div class="mb-4">
            <label for="stock" class="block font-medium mb-1">Stock</label>
            <input type="text" name="stock" id="stock"
                   value="{{ old('stock') }}"
                   class="w-full border rounded px-3 py-2
                         @error('stock') border-red-500 @enderror">

            @error('stock')
                <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
            @enderror
        </div>

        <div class="mb-4">
            <label for="active" class="block font-medium mb-1">Disponible</label>
            <input type="checkbox" name="active" id="active"
                   value=1
                   {{ old('active') }}
                   class="w-full border rounded px-3 py-2">
        </div>


        <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">
            Créer le produit
        </button>
    </form>

@endsection