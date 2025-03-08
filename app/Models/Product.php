<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    @var array
    
protected $fillable = [
        'image',
        'title',
        'description',
        'price',
        'stock'
    ];
}
