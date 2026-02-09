<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ResourceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('product.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data;
        if ( ($request->filled('name')) & ($request->filled('category_id')) & ($request->filled('price')) & ($request->filled('stock')) ) {
            $data = $request->all();

            if ( $request->has('active') ){
                $data['active'] = true;
            }
            else {
                $data['active'] = false;
            }

            $slug = Str::slug($data['name']);

            $new_product = Product::create([
                'category_id' => $data['category_id'],
                'name' => $data['name'],
                'slug' => $slug,
                'description' => $data['description'],
                'price' => $data['price'],
                'stock' => $data['stock'],
                'active' => $data['active'],
                'created_at' => now(),
                'updated_at' => now()
            ]);
            
            return redirect()->route('index')
                ->with('success', 'Produit ajouté dans le catalogue !');
            
        }

        else{
            return back()
                ->withInput()
                ->with('error', 'Erreur, produit non ajouté.');
        }

    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        return view('blabla', compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        return view('product.edit', compact('product'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product)
    {
        $data;
        if ( ($request->filled('name')) & ($request->filled('category_id')) & ($request->filled('price')) & ($request->filled('stock')) ) {
            $data = $request->all();

            if ( $request->has('active') ){
                $data['active'] = true;
            }
            else {
                $data['active'] = false;
            }

            $slug = Str::slug($data['name']);

            Product::where('id', $product->id)->update([
                'category_id' => $data['category_id'],
                'name' => $data['name'],
                'slug' => $slug,
                'description' => $data['description'],
                'price' => $data['price'],
                'stock' => $data['stock'],
                'active' => $data['active'],
                'updated_at' => now()
            ]);

            return redirect()->route('index')
                ->with('success', 'Produit modifié dans le catalogue !');
            
        }

        else{
            return back()
                ->withInput()
                ->with('error', 'Erreur dans la modification du produit.');
        }

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        Product::where('id', $product->id)->delete();
        return redirect()->route('index')
            ->with('success', 'Produit supprimé du catalogue !');
    }
}
