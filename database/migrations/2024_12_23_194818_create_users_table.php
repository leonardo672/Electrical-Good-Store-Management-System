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
        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('id'); // BIGINT UNSIGNED, AUTO_INCREMENT, PRIMARY KEY
            $table->string('name', 100); // VARCHAR(100), NOT NULL
            $table->string('email', 100)->unique(); // VARCHAR(100), UNIQUE, NOT NULL
            $table->string('password'); // VARCHAR(255), NOT NULL
            $table->enum('role', ['admin', 'staff'])->default('staff'); // ENUM('admin', 'staff'), DEFAULT 'staff'
            $table->timestamps(); // created_at and updated_at, both TIMESTAMP, NULL
        });
    }
    

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users'); // Corrected table name
    }
};
