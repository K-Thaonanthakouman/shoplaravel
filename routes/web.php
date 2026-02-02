<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/hello', function() {
    return 'Hello Laravel !';
});

use App\Http\Controllers\PageController;

Route::get('/home', [PageController::class, 'home']);

Route::get('/about', [PageController::class, 'about']);

?>