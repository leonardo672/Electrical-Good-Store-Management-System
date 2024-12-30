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
        Schema::create('customers', function (Blueprint $table) {
            $table->id(); // id: BIGINT UNSIGNED, AUTO_INCREMENT, PRIMARY KEY
            $table->string('name', 100); // name: VARCHAR(100), NOT NULL
            $table->string('email', 100)->unique()->nullable(); // email: VARCHAR(100), UNIQUE, NULL
            $table->string('phone', 15)->nullable(); // phone: VARCHAR(15), NULL
            $table->text('address')->nullable(); // address: TEXT, NULL
            $table->timestamps(); // created_at, updated_at: TIMESTAMP, NULL
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('customers');
    }
};
