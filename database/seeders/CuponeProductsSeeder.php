<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CuponeProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Buscamos el ID del cupón IPHONE50 que se aplica a productos específicos
        $cuponIphone = DB::table('cupones')->where('code', 'IPHONE50')->first();

        // Asegurarse de que el cupón existe
        if ($cuponIphone) {
            // Asignamos el cupón al producto iPhone 14 Pro (id = 2)
            DB::table('cupone_products')->insert([
                [
                    'cupone_id' => $cuponIphone->id,
                    'product_id' => 2, // iPhone 14 Pro
                    'created_at' => now(),
                    'updated_at' => now(),
                ]
            ]);
        }

        // Cupón global BIENVENIDA10 no necesita entradas en tablas pivote ya que aplica a toda la tienda
    }
} 