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
        Schema::create('jobs', function (Blueprint $table) {
            $table->id();
            $table->string('url');
            $table->unsignedBigInteger('role');
            $table->unsignedBigInteger('years');
            $table->unsignedBigInteger('primary_skill');
            $table->unsignedBigInteger('years_of_experience');
            $table->unsignedBigInteger('english_proficiency');
            $table->string('job_type');
            $table->string('remote_job');
            $table->string('full_time');
            $table->string('like_to_relocate');
            $table->string('relocate_countries');
            $table->string('country_of_residence');
            $table->string('country_of_citizenship');
            $table->string('current_salary');
            $table->string('expected_salary');
            $table->string('application_for');
            $table->string('highest_education');
            $table->string('name');
            $table->string('email');
            $table->string('phone');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('jobs');
    }
};
