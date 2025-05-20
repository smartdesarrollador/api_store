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
        Schema::create('product_specifications', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('product_id');
            $table->unsignedBigInteger('attribute_id');
            $table->unsignedBigInteger('propertie_id')->nullable(); // En SQL es 'propertie_id'
            $table->text('value_add')->nullable();
            $table->tinyInteger('state')->unsigned()->default(1)->comment('1 es activo y 2 inactivo');
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('product_id')->references('id')->on('products')->onDelete('cascade');
            $table->foreign('attribute_id')->references('id')->on('attributes')->onDelete('cascade');
            $table->foreign('propertie_id')->references('id')->on('properties')->onDelete('set null'); // Asumo que si se borra la propiedad, se mantiene la especificación pero sin esa propiedad específica.
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('product_specifications');
    }
}; 