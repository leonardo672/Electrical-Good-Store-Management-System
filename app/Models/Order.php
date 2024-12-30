<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    // Specify the table name, if not using the default convention
    protected $table = 'order'; // Adjust the table name if needed

    // Specify the primary key, if not using the default 'id'
    protected $primaryKey = 'id';

    // Ensure the timestamps are enabled
    public $timestamps = true;

    // Define the fillable attributes (fields that can be mass-assigned)
    protected $fillable = [
        'customer_id',
        'order_date',
        'total',
        'status',
    ];

    // Define the foreign key relationship with Customer model
    public function customer()
    {
        return $this->belongsTo(Customer::class, 'customer_id'); // Establish foreign key relationship
    }

    // Define the casting for attributes if necessary
    protected $casts = [
        'order_date' => 'datetime',
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
    ];

    // You can add other useful methods or business logic here as needed
}
