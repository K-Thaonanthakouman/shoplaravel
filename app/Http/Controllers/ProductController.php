<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function show($id)
    {
        $company = [
            'name' => 'Fourre-Tout Company',
            'nb_produits' => 3,
            'ouvert' => false
        ];
        return view('blabla', [
            'company' => $company,
            'id' => $id
        ]);
    }
}
