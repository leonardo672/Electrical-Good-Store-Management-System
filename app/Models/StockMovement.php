<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class StockMovement extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'stock_movements';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'product_id',
        'type',
        'quantity',
        'reason',
    ];

    /**
     * Define the relationship with the Product model.
     */
    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
