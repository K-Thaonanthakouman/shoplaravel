<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home()
    {
        return 'Welcome to Hell !';
    }

    public function about()
    {
        return 'Qui qu\'on est ? Quoi qu\'on fait ? D\'où qu\'on est ? Je ne sais pas !';
    }
}

?>
