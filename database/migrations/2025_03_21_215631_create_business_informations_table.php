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
        Schema::create('business_informations', function (Blueprint $table) {
            $table->id();
            $table->string('country');
            $table->string('business_name');
            $table->enum('business_role', [0, 1, 2, 3, 4]);
            $table->string('business_website')->nullable();
            $table->string('business_youtube')->nullable();
            $table->string('business_instagram')->nullable();
            $table->string('business_facebook')->nullable();
            $table->string('business_x')->nullable();
            $table->string('business_tiktok')->nullable();
            $table->foreignId('userOwned')->unique()->constrained('users')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('business_informations');
    }
};
