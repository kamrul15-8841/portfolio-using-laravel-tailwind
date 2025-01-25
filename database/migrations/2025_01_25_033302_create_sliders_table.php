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
        Schema::create('sliders', function (Blueprint $table) {
            $table->id();
            $table->string('caption')->nullable(); // For the slider caption
            $table->text('description')->nullable(); // For a longer description
            $table->string('image'); // For storing the image path
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
        Schema::dropIfExists('sliders');
    }
};
