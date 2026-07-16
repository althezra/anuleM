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
        Schema::create('releases', function (Blueprint $table) {
            $table->id();
            $table->string('title'); // judul release
            $table->unsignedBigInteger('artist_id'); // relasi ke tabel artist
            $table->string('label')->nullable(); // label musik
            $table->date('release_date'); // tanggal rilis
            $table->string('cover_art')->nullable(); // path cover art
            $table->enum('status', ['draft', 'released'])->default('draft');
            $table->timestamps();

            // foreign key ke tabel artists
            $table->foreign('artist_id')->references('id')->on('artists')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('releases');
    }
};
