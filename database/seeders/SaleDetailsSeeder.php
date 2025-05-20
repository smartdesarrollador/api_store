<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SaleDetailsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Asumimos que existe una venta con ID 1
        // Si no, se debe asegurar que SalesSeeder se ejecute antes y cree esta venta.
        $saleId = 1; 

        $saleDetails = [
            [
                'sale_id' => $saleId,
                'product_id' => 1, // Samsung Galaxy S23
                'product_variation_id' => 1, // Color Negro
                'quantity' => 1,
                'price_unit' => 799.99,
                'subtotal' => 799.99,
                'total' => 799.99,
                'currency' => 'PEN',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'sale_id' => $saleId,
                'product_id' => 1, // Samsung Galaxy S23, otra unidad o para otro usuario en otra venta
                'product_variation_id' => 2, // Color Blanco
                'quantity' => 1,
                'price_unit' => 799.99,
                'subtotal' => 799.99,
                'total' => 799.99,
                'currency' => 'PEN',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'sale_id' => $saleId,
                'product_id' => 2, // iPhone 14 Pro
                'product_variation_id' => 7, // Color Space Black
                'quantity' => 1,
                'price_unit' => 1099.99,
                'subtotal' => 1099.99,
                'total' => 1099.99,
                'currency' => 'PEN',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'sale_id' => $saleId,
                'product_id' => 3, // Camiseta Nike
                'product_variation_id' => 4, // Talla M
                'quantity' => 2,
                'price_unit' => 29.99,
                'subtotal' => 59.98, // 29.99 * 2
                'total' => 59.98,
                'currency' => 'PEN',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'sale_id' => $saleId, 
                'product_id' => 3, // Camiseta Nike, otra unidad o para otro usuario en otra venta
                'product_variation_id' => 5, // Talla L
                'quantity' => 1,
                'price_unit' => 29.99,
                'subtotal' => 29.99,
                'total' => 29.99,
                'currency' => 'PEN',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];

        foreach ($saleDetails as $detail) {
            DB::table('sale_details')->insert($detail);
        }
    }
} 