<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DiscountCategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Buscamos el ID del descuento LIQUIDACION que se aplica a categorías
        $descuentoLiquidacion = DB::table('discounts')->where('code', 'LIQUIDACION')->first();

        // Asegurarse de que el descuento existe
        if ($descuentoLiquidacion) {
            // Asignamos el descuento a la categoría Ropa (id = 2) y todas sus subcategorías
            DB::table('discount_categories')->insert([
                [
                    'discount_id' => $descuentoLiquidacion->id,
                    'categorie_id' => 2, // Ropa
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'discount_id' => $descuentoLiquidacion->id,
                    'categorie_id' => 4, // Camisetas (subcategoría de Ropa)
                    'created_at' => now(),
                    'updated_at' => now(),
                ]
            ]);
        }
    }
} 