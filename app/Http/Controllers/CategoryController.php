<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function show($id)
    {
        $category = \App\Models\Category::with('products')->find($id);

        return view('category', [
            'category' => $category,
            'id' => $id
        ]);
    }
}
