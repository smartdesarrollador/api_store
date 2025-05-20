<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DiscountProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // No creamos entradas específicas para productos ya que nuestros descuentos 
        // se aplican a nivel global, por marca o por categoría en los ejemplos actuales.
        
        // Si quisiéramos añadir un descuento directo a un producto específico:
        /*
        DB::table('discount_products')->insert([
            [
                'discount_id' => 1, // ID del descuento
                'product_id' => 3, // Camiseta Nike
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ]);
        */

        // Este seeder está preparado para futuras ampliaciones cuando
        // se requieran descuentos específicos para productos individuales
    }
} 