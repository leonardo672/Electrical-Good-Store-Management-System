<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Category; 
use App\Models\Brand; 

class Product extends Model
{
    // Define the fillable attributes
    protected $fillable = [
        'name',
        'description',
        'category_id',
        'brand_id',
        'price',
        'stock',
    ];

    /**
     * Define the relationship with the Category model.
     */
    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id'); // Foreign key relationship
    }

    /**
     * Define the relationship with the Brand model.
     */
    public function brand()
    {
        return $this->belongsTo(Brand::class, 'brand_id'); // Foreign key relationship
    }
}
