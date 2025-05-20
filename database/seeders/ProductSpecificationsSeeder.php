<?php

namespace Database\Seeders;

use App\Models\Product\ProductSpecification;
use Illuminate\Database\Seeder;

class ProductSpecificationsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Especificaciones para el Samsung Galaxy S23 (Producto con ID 1)
        $samsungSpecs = [
            [
                'product_id' => 1, // Samsung Galaxy S23
                'attribute_id' => 1, // Color
                'propertie_id' => 4, // Negro
                'value_add' => null,
            ],
            [
                'product_id' => 1,
                'attribute_id' => 4, // Capacidad
                'propertie_id' => null,
                'value_add' => '128GB',
            ],
            [
                'product_id' => 1,
                'attribute_id' => 5, // Resolución
                'propertie_id' => null,
                'value_add' => 'FHD+ (2340 x 1080)',
            ],
        ];

        foreach ($samsungSpecs as $spec) {
            ProductSpecification::create($spec);
        }

        // Especificaciones para el iPhone 14 Pro (Producto con ID 2)
        $iphoneSpecs = [
            [
                'product_id' => 2, // iPhone 14 Pro
                'attribute_id' => 1, // Color
                'propertie_id' => 4, // Negro
                'value_add' => 'Deep Purple',
            ],
            [
                'product_id' => 2,
                'attribute_id' => 4, // Capacidad
                'propertie_id' => null,
                'value_add' => '128GB',
            ],
            [
                'product_id' => 2,
                'attribute_id' => 5, // Resolución
                'propertie_id' => null,
                'value_add' => '2556 x 1179 a 460 ppi',
            ],
        ];

        foreach ($iphoneSpecs as $spec) {
            ProductSpecification::create($spec);
        }

        // Especificaciones para la camiseta Nike (Producto con ID 3)
        $nikeSpecs = [
            [
                'product_id' => 3, // Camiseta Nike
                'attribute_id' => 1, // Color
                'propertie_id' => 1, // Rojo
                'value_add' => null,
            ],
            [
                'product_id' => 3,
                'attribute_id' => 2, // Talla
                'propertie_id' => 8, // M
                'value_add' => null,
            ],
            [
                'product_id' => 3,
                'attribute_id' => 3, // Material
                'propertie_id' => 11, // Algodón
                'value_add' => '90% algodón, 10% elastano',
            ],
        ];

        foreach ($nikeSpecs as $spec) {
            ProductSpecification::create($spec);
        }
    }
} 