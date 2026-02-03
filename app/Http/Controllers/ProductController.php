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

    public function plage()
    {
        $plage = [
            ['id' => 1, 'name' => 'Transat', 'price' => 80],
            ['id' => 2, 'name' => 'Cocotier', 'price' => 140],
            ['id' => 3, 'name' => 'Sable fin', 'price' => 2],
            ['id' => 4, 'name' => 'Tongs', 'price' => 10],
            ['id' => 5, 'name' => 'Mer bleu azur', 'price' => 860000]
        ];
        return view('index', [
            'plage' => $plage
        ]);
    }
}
