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
        Schema::create('sale_details', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('sale_id');
            $table->unsignedBigInteger('product_id');
            $table->tinyInteger('type_discount')->nullable();
            $table->double('discount')->default(0);
            $table->tinyInteger('type_campaing')->unsigned()->nullable();
            $table->string('code_cupon', 250)->nullable();
            $table->string('code_discount', 50)->nullable();
            $table->unsignedBigInteger('product_variation_id')->nullable();
            $table->double('quantity')->default(1);
            $table->double('price_unit');
            $table->double('subtotal');
            $table->double('total');
            $table->string('currency', 20)->default('PEN');
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('sale_id')->references('id')->on('sales')->onDelete('cascade');
            $table->foreign('product_id')->references('id')->on('products')->onDelete('cascade');
            $table->foreign('product_variation_id')->references('id')->on('product_variations')->onDelete('set null'); // Si se borra la variación, no necesariamente se borra el detalle, podría quedar sin variación específica.
        });

        // Ahora que sale_details existe, podemos añadir la FK a reviews si es necesario (mejor en una nueva migración)
        // O modificar la migración de reviews para que se ejecute después de esta.
        // Por simplicidad, lo dejo como una nota, ya que el orden de ejecución de las migraciones lo maneja Laravel por el timestamp del nombre del archivo.
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sale_details');
    }
}; 