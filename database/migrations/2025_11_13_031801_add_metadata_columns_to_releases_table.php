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
        Schema::table('releases', function (Blueprint $table) {
            $table->text('description')->nullable()->after('label');
            $table->string('main_language')->nullable()->after('description');
            $table->string('genre')->nullable()->after('main_language');
            $table->string('subgenre')->nullable()->after('genre');
            $table->string('release_language')->nullable()->after('subgenre');
            $table->enum('release_type', ['new', 're-release'])->default('new')->after('release_language');
            $table->string('upc_ean')->nullable()->after('release_type');
            $table->string('region_availability')->nullable()->after('upc_ean');
            $table->string('publishing_copyright')->nullable()->after('region_availability');
            $table->string('composition_copyright')->nullable()->after('publishing_copyright');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('releases', function (Blueprint $table) {
            $table->dropColumn([
                'description',
                'main_language',
                'genre',
                'subgenre',
                'release_language',
                'release_type',
                'upc_ean',
                'region_availability',
                'publishing_copyright',
                'composition_copyright',
            ]);
        });
    }
};
