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
        Schema::create('reviews', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('product_id');
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('sale_detail_id'); // Para asegurar que la reseña es de una compra verificada
            $table->text('message')->nullable();
            $table->tinyInteger('rating')->unsigned()->default(1); // Asumo rating de 1 a 5 estrellas, por ejemplo.
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('product_id')->references('id')->on('products')->onDelete('cascade');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            // La FK a sale_detail_id se añade después, asumiendo que 'sale_details' se crea más adelante.
            // Si 'sale_details' ya está creada, se puede añadir aquí directamente.
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reviews');
    }
}; 