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
            $table->string('type');
            $table->string('title');
            $table->string('subtitle')->nullable();
            $table->unsignedInteger('duration')->nullable();
            $table->unsignedBigInteger('study_method_id');
            $table->foreign('study_method_id')->references('id')->on('study_methods')->onDelete('cascade');
            $table->string('course_format')->nullable();
            $table->string('access_type')->nullable();
            $table->string('level')->nullable();
            $table->boolean('tutor_support')->default(false);
            $table->boolean('totum')->default(false);
            $table->boolean('apprenticeship')->default(false);
            $table->boolean('guarantee_program')->default(false);
            $table->decimal('price', 8, 2)->nullable();
            $table->decimal('discount_price', 8, 2)->nullable();
            $table->timestamp('discount_start')->nullable();
            $table->timestamp('discount_end')->nullable();
            $table->text('overview')->nullable();
            $table->text('description')->nullable();
            $table->text('course_for')->nullable();
            $table->text('requirements')->nullable();
            $table->text('career_path')->nullable();
            $table->string('slug')->nullable();
            $table->unsignedBigInteger('provider_id');
            $table->foreign('provider_id')->references('id')->on('providers')->onDelete('cascade');
            $table->unsignedBigInteger('subject_id');
            $table->foreign('subject_id')->references('id')->on('course_subjects')->onDelete('cascade');
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
