<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ReviewsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Reseñas para diferentes productos
        DB::table('reviews')->insert([
            [
                'product_id' => 1, // Samsung Galaxy S23
                'user_id' => 2, // Cliente
                'sale_detail_id' => 1, // ID de detalle de venta
                'rating' => 5, // Puntuación de 1 a 5
                'message' => 'Excelente celular, la cámara es espectacular y la batería dura mucho. Lo recomiendo totalmente.',
                'created_at' => now()->subDays(5),
                'updated_at' => now()->subDays(5),
            ],
            [
                'product_id' => 1, // Samsung Galaxy S23
                'user_id' => 3, // Otro cliente
                'sale_detail_id' => 2,
                'rating' => 4,
                'message' => 'Muy buen teléfono, pero esperaba mejor duración de batería. La pantalla es increíble.',
                'created_at' => now()->subDays(3),
                'updated_at' => now()->subDays(3),
            ],
            [
                'product_id' => 2, // iPhone 14 Pro
                'user_id' => 2, // Cliente
                'sale_detail_id' => 3,
                'rating' => 5,
                'message' => 'El mejor iPhone hasta ahora. Sistema fluido, cámara superior y la pantalla siempre activa es muy útil.',
                'created_at' => now()->subDays(10),
                'updated_at' => now()->subDays(10),
            ],
            [
                'product_id' => 3, // Camiseta Nike
                'user_id' => 3, // Cliente
                'sale_detail_id' => 4,
                'rating' => 5,
                'message' => 'Excelente calidad de tela, el tallaje es correcto. Muy cómoda para hacer deporte.',
                'created_at' => now()->subDays(7),
                'updated_at' => now()->subDays(7),
            ],
            [
                'product_id' => 3, // Camiseta Nike
                'user_id' => 2, // Cliente
                'sale_detail_id' => 5,
                'rating' => 4,
                'message' => 'Buena camiseta, pero esperaba mejor transpirabilidad para entrenamientos intensos.',
                'created_at' => now()->subDays(1),
                'updated_at' => now()->subDays(1),
            ]
        ]);
    }
} 