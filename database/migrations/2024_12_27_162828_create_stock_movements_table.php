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
        Schema::create('stock_movements', function (Blueprint $table) {
            $table->id(); // auto-incrementing id
            $table->foreignId('product_id')->constrained('products')->onDelete('cascade'); // foreign key reference to 'products' table
            $table->enum('type', ['addition', 'subtraction'])->notNullable(); // 'addition' or 'subtraction'
            $table->integer('quantity')->notNullable(); // quantity of the stock movement
            $table->text('reason')->nullable(); // reason for the stock movement, optional field
            $table->timestamps(); // created_at and updated_at columns
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('stock_movements');
    }
};
