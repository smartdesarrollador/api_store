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
        Schema::create('product_variations', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('product_id');
            $table->unsignedBigInteger('attribute_id');
            $table->unsignedBigInteger('propertie_id')->nullable();
            $table->text('value_add')->nullable();
            $table->double('add_price')->default(0);
            $table->double('stock')->default(0);
            $table->tinyInteger('state')->unsigned()->default(1)->comment('1 es activo y 2 inactivo');
            $table->unsignedBigInteger('product_variation_id')->nullable()->comment('Para variaciones anidadas, ej: Talla L -> Color Rojo');
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('product_id')->references('id')->on('products')->onDelete('cascade');
            $table->foreign('attribute_id')->references('id')->on('attributes')->onDelete('cascade');
            $table->foreign('propertie_id')->references('id')->on('properties')->onDelete('set null');
            // La FK para product_variation_id (auto-referencia) se añade después para asegurar que la tabla existe.
        });

        Schema::table('product_variations', function (Blueprint $table) {
            $table->foreign('product_variation_id')->references('id')->on('product_variations')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('product_variations', function (Blueprint $table) {
            if (Schema::hasColumn('product_variations', 'product_variation_id')) { // Check if column exists before dropping foreign
                 $foreignKeys = Schema::getConnection()->getDoctrineSchemaManager()->listTableForeignKeys('product_variations');
                 foreach ($foreignKeys as $foreignKey) {
                    if ($foreignKey->getForeignColumns() == ['product_variation_id']) {
                        $table->dropForeign($foreignKey->getName());
                    }
                 }
            }
        });
        Schema::dropIfExists('product_variations');
    }
}; 