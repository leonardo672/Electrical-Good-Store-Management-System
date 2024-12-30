<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class OrderItem extends Model
{
    // Define the table name if it is different from the default plural name
    protected $table = 'order_items';

    // Set the primary key if it is not the default 'id'
    protected $primaryKey = 'id';

    // Specify the attributes that are mass assignable
    protected $fillable = [
        'order_id',
        'product_id',
        'quantity',
        'price',
    ];

    // Define the relationship with the Order model
    public function order()
    {
        return $this->belongsTo(Order::class);
    }
    
    public function product()
    {
        return $this->belongsTo(Product::class);
    }
    
}
