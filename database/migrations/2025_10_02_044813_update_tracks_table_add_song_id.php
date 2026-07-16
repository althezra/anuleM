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
        Schema::table('tracks', function (Blueprint $table) {
            // Tambah kolom song_id
            $table->foreignId('song_id')->nullable()->constrained()->onDelete('set null')->after('release_id');

            // Hapus kolom
            $table->dropColumn(['file_path', 'duration']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('tracks', function (Blueprint $table) {
            $table->string('file_path')->nullable()->after('track_number');
            $table->integer('duration')->nullable()->after('file_path');
            $table->dropConstrainedForeignId('song_id');
        });
    }
};
