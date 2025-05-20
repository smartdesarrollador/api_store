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
        Schema::create('sale_temps', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->longText('description')->nullable()->comment('Podría ser un resumen del carrito o estado temporal');
            $table->json('sale_address')->nullable()->comment('Dirección de envío temporal en formato JSON');
            // Considerar si se necesitan más campos, como los items del carrito temporalmente.
            $table->timestamps();
            $table->softDeletes(); // O tal vez no, si son datos muy temporales que se pueden borrar permanentemente.

            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sale_temps');
    }
}; 