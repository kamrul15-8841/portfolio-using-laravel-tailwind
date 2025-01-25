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
        Schema::create('skills', function (Blueprint $table) {
            $table->id();
            $table->string('type')->nullable(); // Optional: Type of skill (e.g., technical, soft skill)
            $table->string('title'); // Title of the skill
            $table->text('description')->nullable(); // Optional: Description of the skill
            $table->integer('progress')->default(0); // Progress in percentage (e.g., 90 for 90%)
            $table->string('image')->nullable(); // Optional: Path or URL of the skill image
            $table->enum('status', ['active', 'inactive'])->default('active'); // Status of the skill
            $table->string('slug')->unique(); // Unique slug for the skill
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('skills');
    }
};
