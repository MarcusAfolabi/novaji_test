<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $table = 'products';

    protected $fillable = [
        'name',
        'slug',
        'views',
        'status',
        'image',
        'description',
        'price',
        'product_category_id'
    ];

    // Define the relationship between product and product category
    public function category()
    {
        return $this->belongsTo(ProductCategory::class, 'product_category_id');
    }
}
