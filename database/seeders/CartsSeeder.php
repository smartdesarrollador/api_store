<?php

namespace Database\Seeders;

use App\Models\Sale\Cart;
use Illuminate\Database\Seeder;

class CartsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Carritos de compra para el cliente (user_id = 2)
        $carts = [
            [
                'user_id' => 2, // Cliente normal
                'product_id' => 1, // Samsung Galaxy S23
                'product_variation_id' => 1, // Variación de color Negro
                'quantity' => 1,
                'price_unit' => 999.99,
                'subtotal' => 999.99,
                'total' => 999.99,
                'currency' => 'PEN',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_id' => 2,
                'product_id' => 3, // Camiseta Nike
                'product_variation_id' => 4, // Variación de talla M
                'quantity' => 2,
                'price_unit' => 59.99,
                'subtotal' => 119.98, // 59.99 * 2
                'total' => 119.98,
                'currency' => 'PEN',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_id' => 3, // Otro cliente 
                'product_id' => 2, // iPhone 14 Pro
                'product_variation_id' => 7, // Variación Space Black
                'quantity' => 1,
                'price_unit' => 1299.99,
                'subtotal' => 1299.99,
                'total' => 1299.99,
                'currency' => 'PEN',
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ];

        foreach ($carts as $cart) {
            Cart::create($cart);
        }
    }
} 