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
        Schema::create('experiences', function (Blueprint $table) {
            $table->id();
            $table->string('job_title'); // For the job title
            $table->text('job_description')->nullable(); // For the job description, optional
            $table->string('company_name'); // For the name of the company
            $table->string('company_address')->nullable(); // For the company address, optional
            $table->date('joining_date'); // For the joining date
            $table->date('left_date')->nullable(); // For the left date, optional
            $table->string('expertise')->nullable(); // For areas of expertise, optional
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
        Schema::dropIfExists('experiences');
    }
};
