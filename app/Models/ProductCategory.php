<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductCategory extends Model
{
    use HasFactory;
    protected $table = 'product_categories';

    protected $fillable = ['name', 'description'];

    // Define the relationship between product category and products
    public function products()
    {
        return $this->hasMany(Product::class);
    }
}
