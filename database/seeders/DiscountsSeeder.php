<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DiscountsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('discounts')->insert([
            [
                'code' => 'LIQUIDACION',
                'type_campaing' => 1, // normal
                'type_discount' => 1, // porcentaje
                'discount' => 30,
                'discount_type' => 2, // categorias
                'state' => 1, // Activo
                'start_date' => now(),
                'end_date' => now()->addMonths(1),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'code' => 'SAMSUNG15',
                'type_campaing' => 1, // normal
                'type_discount' => 1, // porcentaje
                'discount' => 15,
                'discount_type' => 3, // marcas
                'state' => 1, // Activo
                'start_date' => now(),
                'end_date' => now()->addWeeks(3),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'code' => 'FLASH5',
                'type_campaing' => 2, // flash
                'type_discount' => 1, // porcentaje
                'discount' => 5,
                'discount_type' => 1, // global (producto)
                'state' => 1, // Activo
                'start_date' => now(),
                'end_date' => now()->addDays(2), // Flash sale por 2 días
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ]);
    }
} 