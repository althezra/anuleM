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
        Schema::create('tracks', function (Blueprint $table) {
            $table->id();
            $table->foreignId('release_id')->constrained()->onDelete('cascade'); 
            
            // Track Information
            $table->string('title');
            $table->integer('track_number');
            $table->string('isrc')->nullable();

            // Audio & Metadata
            $table->string('file_path');
            $table->integer('duration')->nullable(); // auto ambil pakai getID3 (detik)
            $table->string('primary_artist');
            $table->string('featured_artist')->nullable();
            $table->string('remixer')->nullable();
            $table->string('other_contributors')->nullable();

            // Lyrics & Rights
            $table->longText('lyrics')->nullable();
            $table->boolean('is_instrumental')->default(false);
            $table->boolean('is_ai_generated')->default(false);
            $table->boolean('is_remix')->default(false);
            $table->string('composer')->nullable();
            $table->string('lyricist')->nullable();
            $table->string('songwriter')->nullable();
            $table->string('publisher')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tracks');
    }
};
