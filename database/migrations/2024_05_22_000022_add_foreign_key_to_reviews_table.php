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
        Schema::table('reviews', function (Blueprint $table) {
            // Asegurarse que la columna existe y la tabla sale_details también
            if (Schema::hasColumn('reviews', 'sale_detail_id') && Schema::hasTable('sale_details')) {
                $table->foreign('sale_detail_id')->references('id')->on('sale_details')->onDelete('cascade');
            }
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('reviews', function (Blueprint $table) {
            // El nombre de la FK podría variar, Laravel lo genera automáticamente.
            // Es más seguro buscarla y eliminarla por las columnas que la componen.
            if (Schema::hasColumn('reviews', 'sale_detail_id')) {
                // Obtener el nombre de la restricción de clave externa
                $foreignKeys = Schema::getConnection()->getDoctrineSchemaManager()->listTableForeignKeys('reviews');
                foreach ($foreignKeys as $foreignKey) {
                    if ($foreignKey->getForeignTableName() == 'sale_details' && $foreignKey->getLocalColumns() == ['sale_detail_id']) {
                        $table->dropForeign($foreignKey->getName());
                        break;
                    }
                }
            }
        });
    }
}; 