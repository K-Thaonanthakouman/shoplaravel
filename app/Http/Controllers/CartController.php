<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class CartController extends Controller
{
    public function show()
    {
        return view('cart.index');
    }

    public function add()
    {
        $product = Product::get();
        return view('cart.add', [
            'product' => $product
        ]);
    }

    public function update()
    {
        $product = Product::get();
        return view('cart.update', [
            'product' => $product
        ]);
    }

    public function remove()
    {
        $product = Product::get();
        return view('cart.remove', [
            'product' => $product
        ]);
    }

    public function destroy()
    {
        return view('cart.destroy');
    }
}
