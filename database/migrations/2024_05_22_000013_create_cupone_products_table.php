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
        Schema::create('cupone_products', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('cupone_id');
            $table->unsignedBigInteger('product_id');
            $table->timestamps();
            // $table->softDeletes(); // Generalmente las tablas pivot no necesitan softDeletes, se eliminan los registros

            $table->foreign('cupone_id')->references('id')->on('cupones')->onDelete('cascade');
            $table->foreign('product_id')->references('id')->on('products')->onDelete('cascade');

            $table->unique(['cupone_id', 'product_id']); // Un cupón se aplica una vez a un producto
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cupone_products');
    }
}; 