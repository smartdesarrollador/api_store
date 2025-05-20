<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SaleTempsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Ventas temporales para un proceso de checkout en curso
        DB::table('sale_temps')->insert([
            [
                'user_id' => 3, // Cliente en proceso de compra
                'description' => 'Compra en proceso del cliente 3',
                'sale_address' => json_encode([
                    'name' => 'Juan Pérez',
                    'address' => 'Calle Principal 123',
                    'city' => 'Madrid',
                    'country' => 'España',
                    'phone' => '612345678',
                    'products' => [
                        [
                            'product_id' => 1,
                            'product_variation_id' => 2,
                            'quantity' => 1,
                            'price' => 799.99
                        ],
                        [
                            'product_id' => 3,
                            'product_variation_id' => 5,
                            'quantity' => 2,
                            'price' => 29.99
                        ]
                    ]
                ]),
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ]);
    }
} 