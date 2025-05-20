<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CuponeCategoriesSeeder extends Seeder
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
            // Asignamos el cupón a la categoría de Electrónica (id = 1)
            DB::table('cupone_categories')->insert([
                [
                    'cupone_id' => $cuponElectro->id,
                    'categorie_id' => 1, // Electrónica
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'cupone_id' => $cuponElectro->id,
                    'categorie_id' => 3, // Smartphones (subcategoría)
                    'created_at' => now(),
                    'updated_at' => now(),
                ]
            ]);
        }
    }
} 