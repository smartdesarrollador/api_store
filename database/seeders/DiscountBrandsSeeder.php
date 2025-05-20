<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DiscountBrandsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Buscamos el ID del descuento SAMSUNG15 que se aplica a marcas
        $descuentoSamsung = DB::table('discounts')->where('code', 'SAMSUNG15')->first();

        // Asegurarse de que el descuento existe
        if ($descuentoSamsung) {
            // Asignamos el descuento a la marca Samsung (id = 1)
            DB::table('discount_brands')->insert([
                [
                    'discount_id' => $descuentoSamsung->id,
                    'brand_id' => 1, // Samsung
                    'created_at' => now(),
                    'updated_at' => now(),
                ]
            ]);
        }
    }
} 