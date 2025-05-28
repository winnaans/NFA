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
        Schema::table('books', function (Blueprint $table) {
            // Tambahkan kolom genre_id
            $table->unsignedBigInteger('genre_id')->after('author_id')->nullable();

            // Tambahkan foreign key constraint ke tabel genres
            $table->foreign('genre_id')->references('id')->on('genres')->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('books', function (Blueprint $table) {
            // Hapus foreign key dan kolom genre_id
            $table->dropForeign(['genre_id']);
            $table->dropColumn('genre_id');
        });
    }
};
