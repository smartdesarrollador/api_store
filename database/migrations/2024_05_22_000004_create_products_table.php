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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('title', 250);
            $table->text('slug');
            $table->string('sku', 50)->unique(); // SKU debería ser único
            $table->double('price_pen');
            $table->double('price_usd');
            $table->longText('description');
            $table->longText('resumen');
            $table->string('imagen', 250); // Imagen principal
            $table->tinyInteger('state')->unsigned()->default(1)->comment('1 es borrador/pendiente, 2 publico'); // Ajuste comentario segun uso común
            $table->json('tags')->nullable();
            
            $table->unsignedBigInteger('brand_id');
            $table->unsignedBigInteger('categorie_first_id');
            $table->unsignedBigInteger('categorie_second_id')->nullable();
            $table->unsignedBigInteger('categorie_third_id')->nullable();
            
            $table->double('stock')->default(0);
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('brand_id')->references('id')->on('brands')->onDelete('cascade');
            $table->foreign('categorie_first_id')->references('id')->on('categories')->onDelete('cascade');
            $table->foreign('categorie_second_id')->references('id')->on('categories')->onDelete('set null');
            $table->foreign('categorie_third_id')->references('id')->on('categories')->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
}; 