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
        Schema::create('abouts', function (Blueprint $table) {
            $table->id();
            $table->string('title'); // For the title of the about section
            $table->string('short_description')->nullable(); // For a brief description
            $table->text('long_description')->nullable(); // For detailed content
            $table->string('image')->nullable(); // For storing the image path
            $table->enum('status', ['active', 'inactive'])->default('active'); // Status of the project
            $table->string('slug')->unique(); // A unique slug for the project
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('abouts');
    }
};
