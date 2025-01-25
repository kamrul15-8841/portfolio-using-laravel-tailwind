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
        Schema::create('courses', function (Blueprint $table) {
            $table->id();
            $table->string('title'); // Title of the course
            $table->text('description')->nullable(); // Optional: Description of the course
            $table->string('institute')->nullable(); // Optional: Name of the institute offering the course
            $table->string('period')->nullable(); // Optional: Period or duration of the course (e.g., "6 months")
            $table->string('expertise')->nullable(); // Optional: Area of expertise gained through the course
            $table->string('image')->nullable(); // Optional: Path or URL of the course image
            $table->enum('status', ['active', 'inactive'])->default('active'); // Status: active or inactive
            $table->string('slug')->unique(); // Unique slug for the course
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('courses');
    }
};
