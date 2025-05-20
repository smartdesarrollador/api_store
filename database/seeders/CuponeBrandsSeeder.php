<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CuponeBrandsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Buscamos el ID del cupón ELECTRO25 que se aplica a categorías
        $cuponElectro = DB::table('cupones')->where('code', 'ELECTRO25')->first();

        // Asegurarse de que el cupón existe
        if ($cuponElectro) {
            // Asignamos el cupón a las marcas de electrónica
            DB::table('cupone_brands')->insert([
                [
                    'cupone_id' => $cuponElectro->id,
                    'brand_id' => 1, // Samsung
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'cupone_id' => $cuponElectro->id,
                    'brand_id' => 2, // Apple
                    'created_at' => now(),
                    'updated_at' => now(),
                ]
            ]);
        }
    }
} 