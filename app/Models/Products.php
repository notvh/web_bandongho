<?php

namespace App\Models;

use Database\Factories\ProductsFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Testing\Fluent\Concerns\Has;

class Products extends Model
{
    use HasFactory;
    protected static function newFactory()
    {
        return ProductsFactory::new();
    }
}
