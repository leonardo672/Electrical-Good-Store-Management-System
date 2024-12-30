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
        Schema::create('products', function (Blueprint $table) {
            // Primary Key
            $table->id(); // BIGINT UNSIGNED, AUTO_INCREMENT, PRIMARY KEY

            // Product Fields
            $table->string('name', 255); // VARCHAR(255), NOT NULL
            $table->text('description')->nullable(); // TEXT, NULL
            $table->unsignedBigInteger('category_id'); // BIGINT UNSIGNED, NOT NULL
            $table->unsignedBigInteger('brand_id')->nullable(); // BIGINT UNSIGNED, NULL
            $table->decimal('price', 10, 2); // DECIMAL(10, 2), NOT NULL
            $table->integer('stock'); // INT, NOT NULL

            // Timestamps
            $table->timestamp('created_at')->nullable(); // TIMESTAMP, NULL
            $table->timestamp('updated_at')->nullable(); // TIMESTAMP, NULL

            // Foreign Key Constraints
            $table->foreign('category_id')->references('id')->on('categoriess')->onDelete('cascade');
            $table->foreign('brand_id')->references('id')->on('_brands')->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
