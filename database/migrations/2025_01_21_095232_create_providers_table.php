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
        Schema::create('providers', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('wp_users')->onDelete('cascade');
            $table->string('api_token')->nullable();
            $table->boolean('contact_preference')->nullable();
            $table->string('sales_mail')->nullable();
            $table->unsignedSmallInteger('response_time');
            $table->boolean('include_weekends');
            $table->text('about_us')->nullable();
            $table->text('choose_us')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('providers');
    }
};
