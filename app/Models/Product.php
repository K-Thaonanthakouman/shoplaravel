<?php

namespace App\Models;

// use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    // use HasFactory;

    protected $fillable = [
        'category_id',
        'name',
        'slug',
        'description',
        'image',
        'price',
        'stock',
        'active'
    ];

    protected $hidden = [];
    
    protected $casts = [
        'price' => 'decimal:2',
        'active' => 'boolean'
    ];
}
