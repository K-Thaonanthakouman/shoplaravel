<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function show($p1)
    {
        return 'Détails du produit n°' . $p1 . ' :';
    }
}
