<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Users extends Model
{


    // Specify the table name, if not using the default convention
    protected $table = 'users';

    // Specify the primary key, if not using the default 'id'
    protected $primaryKey = 'id';

    // Ensure the timestamps are enabled (optional, but it's recommended for the created_at and updated_at fields)
    public $timestamps = true;

    // Define the fillable attributes (fields that can be mass-assigned)
    protected $fillable = [
        'name', 
        'email', 
        'password', 
        'role'
    ];

    // Define the hidden attributes (fields that should be excluded from array or JSON representations)
    protected $hidden = [
        'password', // Don't show the password when converting to an array or JSON
    ];

    // Define the casting for attributes to enforce specific types (useful for ensuring that role is treated as an enum, for example)
    protected $casts = [
        'email_verified_at' => 'datetime', // example, you can add this field if you're using email verification
    ];

    use HasFactory;
}
