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
        Schema::create('cupone_categories', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('cupone_id');
            $table->unsignedBigInteger('categorie_id'); // Nombre de columna según SQL
            $table->timestamps();

            $table->foreign('cupone_id')->references('id')->on('cupones')->onDelete('cascade');
            $table->foreign('categorie_id')->references('id')->on('categories')->onDelete('cascade');

            $table->unique(['cupone_id', 'categorie_id']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cupone_categories');
    }
}; 