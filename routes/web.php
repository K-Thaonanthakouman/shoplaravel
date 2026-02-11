<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/hello', function() {
    return 'Hello Laravel !';
});

use App\Http\Controllers\PageController;

Route::get('/home', [PageController::class, 'home'])
    ->name('home');

Route::get('/about', [PageController::class, 'about'])
    ->name('about');

Route::get('/contact', [PageController::class, 'contact'])
    ->name('contact');



use App\Http\Controllers\ProductController;

Route::get('/products/{id}', [ProductController::class, 'show'])
    ->name('products.show');

Route::get('/index', [ProductController::class, 'products'])
    ->name('index');



use App\Http\Controllers\ResourceController;

Route::resource('product', ResourceController::class);



use App\Http\Controllers\CategoryController;

Route::get('/category/{id}', [CategoryController::class, 'show'])
    ->name('category.show');

?>