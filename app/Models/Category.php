<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    // Specify the table name, if not using the default convention
    protected $table = 'categoriess';

    // Specify the primary key, if not using the default 'id'
    protected $primaryKey = 'id';

    // Ensure the timestamps are enabled (optional, but it's recommended for the created_at and updated_at fields)
    public $timestamps = true;

    // Define the fillable attributes (fields that can be mass-assigned)
    protected $fillable = [
        'name', 
        'description',
    ];

    // Define the hidden attributes if necessary (not applicable for this example)
    protected $hidden = [];

    // Define the casting for attributes to enforce specific types if needed
    protected $casts = [
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
    ];
}
