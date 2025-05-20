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
        Schema::create('discounts', function (Blueprint $table) {
            $table->id();
            $table->string('code', 250)->unique();
            $table->tinyInteger('type_campaing')->unsigned()->default(1)->comment('1 es normal, 2 flash y 3 link');
            $table->tinyInteger('type_discount')->unsigned()->default(1)->comment('1 es porcentaje y 2 es monto fijo');
            $table->double('discount');
            $table->tinyInteger('discount_type')->unsigned()->default(1)->comment('1 es producto, 2 categorias y 3 marcas');
            $table->tinyInteger('state')->unsigned()->default(1)->comment('1 es activo y 2 inactivo');
            $table->timestamp('start_date')->nullable();
            $table->timestamp('end_date')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('discounts');
    }
}; 