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
        Schema::create('order', function (Blueprint $table) {
            $table->id();
            $table->foreignId('customer_id')->nullable()->constrained()->onDelete('set null'); // Foreign key for customer_id
            $table->timestamp('order_date')->useCurrent(); // Default to current timestamp
            $table->decimal('total', 10, 2); // Total amount for the order 
            $table->enum('status', ['pending', 'completed', 'canceled'])->default('pending'); // Order status
            $table->timestamps(); // created_at and updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('order');
    }
};
