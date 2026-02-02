<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home()
    {

        return redirect()->route('products.show', ['id' => rand(1, 100)]);

    }

    public function about()
    {
        return 'Qui qu\'on est ? Quoi qu\'on fait ? D\'où qu\'on est ? Je ne sais pas !';
    }
}

?>
