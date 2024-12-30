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
        Schema::create('_brands', function (Blueprint $table) {
            $table->bigIncrements('id'); // BIGINT UNSIGNED, AUTO_INCREMENT, PRIMARY KEY
            $table->string('name', 100)->unique()->notNullable(); // VARCHAR(100), UNIQUE, NOT NULL
            $table->text('description')->nullable(); // TEXT, NULL
            $table->timestamp('created_at')->nullable(); // TIMESTAMP, NULL
            $table->timestamp('updated_at')->nullable(); // TIMESTAMP, NULL
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('_brands');
    }
};
