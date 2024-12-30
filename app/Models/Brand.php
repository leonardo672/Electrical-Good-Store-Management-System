<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    use HasFactory;

    // Specify the table name, since it doesn't follow Laravel's default naming convention
    protected $table = '_brands';

    // Specify the primary key, if not using the default 'id'
    protected $primaryKey = 'id';

    // Ensure timestamps are enabled (optional but recommended for created_at and updated_at fields)
    public $timestamps = true;

    // Define the fillable attributes (fields that can be mass-assigned)
    protected $fillable = [
        'name', 
        'description',
    ];

    // Define hidden attributes if necessary (not applicable for this example)
    protected $hidden = [];

    // Define casting for attributes to enforce specific types
    protected $casts = [
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
    ];
}
