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
        Schema::create('contacts', function (Blueprint $table) {
            $table->id();
            $table->string('name'); // For the contact's name
            $table->string('email')->unique(); // For the contact's email, ensuring uniqueness
            $table->string('mobile')->nullable(); // For the contact's mobile number, optional
            $table->text('message')->nullable(); // For the contact's message, optional
            $table->string('image')->nullable(); // Optional: Path or URL of the contact image
            $table->enum('status', ['active', 'inactive'])->default('active'); // Status of the contact
            $table->string('slug')->unique(); // Unique slug for the contact            $table->enum('status', ['active', 'inactive'])->default('active'); // Status of the skill
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('contacts');
    }
};
