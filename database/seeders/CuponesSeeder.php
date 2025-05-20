<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CuponesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Usaremos DB::table para evitar problemas de modelos no definidos
        DB::table('cupones')->insert([
            [
                'code' => 'BIENVENIDA10',
                'type_discount' => 1, // 1 es porcentaje
                'discount' => 10,
                'type_count' => 1, // ilimitado
                'num_use' => 0,
                'type_cupone' => 3, // global (marcas)
                'state' => 1, // Activo
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'code' => 'ELECTRO25',
                'type_discount' => 1, // 1 es porcentaje
                'discount' => 25,
                'type_count' => 1, // ilimitado
                'num_use' => 0,
                'type_cupone' => 2, // categorías
                'state' => 1, // Activo
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'code' => 'IPHONE50',
                'type_discount' => 2, // 2 es monto fijo
                'discount' => 50, // 50 unidades monetarias de descuento
                'type_count' => 1, // ilimitado
                'num_use' => 0,
                'type_cupone' => 1, // productos específicos
                'state' => 1, // Activo
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ]);
    }
} 