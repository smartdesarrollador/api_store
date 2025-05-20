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
        Schema::create('carts', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('product_id');
            $table->tinyInteger('type_discount')->nullable()->comment('1 porcentaje, 2 monto fijo. Heredado del cupón/descuento aplicado');
            $table->double('discount')->default(0);
            $table->tinyInteger('type_campaing')->unsigned()->nullable()->comment('Heredado del descuento aplicado');
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

            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('product_id')->references('id')->on('products')->onDelete('cascade');
            $table->foreign('product_variation_id')->references('id')->on('product_variations')->onDelete('cascade');
            // Nota: code_cupon y code_discount no son FK directas a 'cupones.code' o 'discounts.code' 
            // porque podrían referenciar cupones/descuentos que ya no existen o simplemente almacenar el código usado.
            // Si se requiere integridad referencial estricta, se necesitarían FKs a los IDs de cupones/discounts.
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('carts');
    }
}; 