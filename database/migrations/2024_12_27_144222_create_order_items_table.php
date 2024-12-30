<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('order_items', function (Blueprint $table) {
            $table->id(); // AUTO_INCREMENT, PRIMARY KEY
            $table->foreignId('order_id')->constrained('order')->onDelete('cascade'); // Foreign key for order_id
            $table->foreignId('product_id')->constrained('products')->onDelete('cascade'); // Foreign key for product_id
            $table->integer('quantity'); // Quantity
            $table->decimal('price', 10, 2); // Price
            $table->timestamps(); // created_at, updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('order_items');
    }
};
