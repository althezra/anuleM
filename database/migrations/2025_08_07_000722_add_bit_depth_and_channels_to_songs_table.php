<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::table('songs', function (Blueprint $table) {
            $table->integer('bit_depth')->nullable();
            $table->integer('channels')->nullable();
        });
    }

    public function down(): void
    {
        Schema::table('songs', function (Blueprint $table) {
            $table->dropColumn('bit_depth');
            $table->dropColumn('channels');
        });
    }
};
