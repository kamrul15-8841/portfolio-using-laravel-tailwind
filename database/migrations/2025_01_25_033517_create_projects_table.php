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
        Schema::create('projects', function (Blueprint $table) {
            $table->id();
            $table->string('title'); // For the project title
            $table->string('type'); // For the type of project (e.g., personal, commercial)
            $table->string('stack')->nullable(); // For the tech stack used, optional
            $table->string('short_description')->nullable(); // A brief description, optional
            $table->text('long_description')->nullable(); // A detailed description, optional
            $table->string('github_link')->nullable(); // Link to the GitHub repository, optional
            $table->string('web_link')->nullable(); // Link to the live project, optional
            $table->string('image')->nullable(); // Path to the project image, optional
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
        Schema::dropIfExists('projects');
    }
};
