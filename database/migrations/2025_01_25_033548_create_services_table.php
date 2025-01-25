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
        Schema::create('services', function (Blueprint $table) {
            $table->id();
            $table->string('type')->nullable(); // Optional: Type of service (e.g., "Web Development")
            $table->string('stack')->nullable(); // Optional: Tech stack used for the service (e.g., "Laravel, React")
            $table->string('github')->nullable(); // Optional: GitHub link for the service/project
            $table->string('link')->nullable(); // Optional: External link for more details or live demo
            $table->text('description')->nullable(); // Optional: Detailed description of the service
            $table->string('image')->nullable(); // Optional: Path or URL of the service image
            $table->enum('status', ['active', 'inactive'])->default('active'); // Status: active or inactive
            $table->string('slug')->unique(); // Unique slug for the service
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('services');
    }
};
