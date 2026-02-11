@extends('layouts.app')

@section('title', 'Modif le produif !')

@section('content')
    <h1 class="text-2xl font-bold mb-6">Modifier produit n°{{ $product->id }}</h1>

    <form action="{{ route('product.update', $product) }}" method="POST" class="max-w-lg">
        @csrf
        @method('PUT')

        <div class="mb-4">
            <label for="name" class="block font-medium mb-1">Nom</label>
            <input type="text" name="name" id="name"
                   value="{{ old('name', $product->name) }}"
                   class="w-full border rounded px-3 py-2"
                   required>
        </div>

        <div class="mb-4">
            <label for="category_id" class="block font-medium mb-1">Catégorie</label>
            <select name="category_id" id="category_id" class="w-full border rounded px-3 py-2">
                @foreach ($category as $element)
                    <option value="{{ $element->id }}"
                        {{ old('category_id', $product->category_id) == $element->id ? 'selected' : '' }}>
                        {{$element->name}}
                    </option>
                @endforeach
        </div>

        <div class="mb-4">
            <label for="description" class="block font-medium mb-1">Description</label>
            <input type="text" name="description" id="description"
                   value="{{ old('description', $product->description) }}"
                   class="w-full border rounded px-3 py-2">
        </div>

        <div class="mb-4">
            <label for="price" class="block font-medium mb-1">Prix</label>
            <input type="text" name="price" id="price"
                   value="{{ old('price', $product->price) }}"
                   class="w-full border rounded px-3 py-2"
                   required>
        </div>

        <div class="mb-4">
            <label for="stock" class="block font-medium mb-1">Stock</label>
            <input type="text" name="stock" id="stock"
                   value="{{ old('stock', $product->stock) }}"
                   class="w-full border rounded px-3 py-2"
                   required>
        </div>

        <div class="mb-4">
            <label for="active" class="block font-medium mb-1">Disponible</label>
            <input type="checkbox" name="active" id="active"
                   value=1
                   class="w-full border rounded px-3 py-2">
        </div>


        <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">
            Modifier le produit
        </button>
    </form>

    <form action="{{ route('product.destroy', $product) }}" method="POST"
      onsubmit="return confirm('Êtes-vous sûr ?')">
    @csrf
    @method('DELETE')

    <button type="submit" class="bg-red-500 text-white px-4 py-2 rounded">
        Supprimer
    </button>
</form>

@endsection