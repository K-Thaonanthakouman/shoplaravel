<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function show($id)
    {
        $product = \App\Models\Product::find($id);

        return view('blabla', [
            'product' => $product,
            'id' => $id
        ]);
    }

    public function products()
    {
        $products = \App\Models\Product::with('category')->get();

        return view('index', [
            'products' => $products
        ]);
    }
}
