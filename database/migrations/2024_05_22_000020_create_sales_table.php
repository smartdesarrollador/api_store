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
        Schema::create('sales', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->string('method_payment', 250);
            $table->string('currency_total', 50);
            $table->string('currency_payment', 50);
            $table->double('discount')->nullable();
            $table->double('subtotal');
            $table->double('total');
            $table->longText('description')->nullable(); // Podría ser notas del pedido o similar
            $table->double('price_dolar')->nullable()->comment('Tipo de cambio al momento de la compra si es necesario');
            $table->string('n_transaccion', 150)->comment('Número de transacción o referencia de pago');
            $table->string('preference_id', 250)->nullable()->comment('ID de preferencia de MercadoPago u otra pasarela');
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sales');
    }
}; 