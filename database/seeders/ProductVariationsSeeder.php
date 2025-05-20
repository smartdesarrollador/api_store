<?php

namespace Database\Seeders;

use App\Models\Product\ProductVariation;
use Illuminate\Database\Seeder;

class ProductVariationsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Variaciones para el Samsung Galaxy S23 (Colores)
        $samsungColors = [
            [
                'product_id' => 1, // Samsung Galaxy S23
                'attribute_id' => 1, // Color
                'propertie_id' => 4, // Negro
                'value_add' => null,
                'add_price' => 0,
                'stock' => 20,
            ],
            [
                'product_id' => 1,
                'attribute_id' => 1, // Color
                'propertie_id' => 5, // Blanco
                'value_add' => null,
                'add_price' => 0,
                'stock' => 15,
            ],
            [
                'product_id' => 1,
                'attribute_id' => 1, // Color
                'propertie_id' => 2, // Azul
                'value_add' => null,
                'add_price' => 50, // Edición especial, precio adicional
                'stock' => 10,
            ],
        ];

        $samsungVariations = [];
        foreach ($samsungColors as $colorVariation) {
            $samsungVariations[] = ProductVariation::create($colorVariation);
        }

        // Variaciones para el Samsung Galaxy S23 (Capacidad) - anidadas bajo el color Negro
        $samsungStorage = [
            [
                'product_id' => 1,
                'attribute_id' => 4, // Capacidad
                'propertie_id' => null,
                'value_add' => '128GB',
                'add_price' => 0,
                'stock' => 10,
                'product_variation_id' => $samsungVariations[0]->id, // Anidada bajo color Negro
            ],
            [
                'product_id' => 1,
                'attribute_id' => 4, // Capacidad
                'propertie_id' => null,
                'value_add' => '256GB',
                'add_price' => 150, // Precio adicional por mayor capacidad
                'stock' => 10,
                'product_variation_id' => $samsungVariations[0]->id, // Anidada bajo color Negro
            ],
        ];

        foreach ($samsungStorage as $storageVariation) {
            ProductVariation::create($storageVariation);
        }

        // Variaciones para el iPhone 14 Pro (Colores)
        $iphoneColors = [
            [
                'product_id' => 2, // iPhone 14 Pro
                'attribute_id' => 1, // Color
                'propertie_id' => 4, // Negro
                'value_add' => 'Space Black',
                'add_price' => 0,
                'stock' => 15,
            ],
            [
                'product_id' => 2,
                'attribute_id' => 1, // Color
                'propertie_id' => 5, // Blanco
                'value_add' => 'Silver',
                'add_price' => 0,
                'stock' => 10,
            ],
            [
                'product_id' => 2,
                'attribute_id' => 1, // Color
                'propertie_id' => null,
                'value_add' => 'Deep Purple',
                'add_price' => 0,
                'stock' => 10,
            ],
        ];

        $iphoneVariations = [];
        foreach ($iphoneColors as $colorVariation) {
            $iphoneVariations[] = ProductVariation::create($colorVariation);
        }

        // Variaciones para el iPhone 14 Pro (Capacidad)
        $iphoneStorage = [
            [
                'product_id' => 2,
                'attribute_id' => 4, // Capacidad
                'propertie_id' => null,
                'value_add' => '128GB',
                'add_price' => 0,
                'stock' => 5,
                'product_variation_id' => $iphoneVariations[0]->id, // Anidada bajo color Space Black
            ],
            [
                'product_id' => 2,
                'attribute_id' => 4, // Capacidad
                'propertie_id' => null,
                'value_add' => '256GB',
                'add_price' => 200,
                'stock' => 5,
                'product_variation_id' => $iphoneVariations[0]->id, // Anidada bajo color Space Black
            ],
            [
                'product_id' => 2,
                'attribute_id' => 4, // Capacidad
                'propertie_id' => null,
                'value_add' => '512GB',
                'add_price' => 500,
                'stock' => 5,
                'product_variation_id' => $iphoneVariations[0]->id, // Anidada bajo color Space Black
            ],
        ];

        foreach ($iphoneStorage as $storageVariation) {
            ProductVariation::create($storageVariation);
        }

        // Variaciones para la camiseta Nike (Tallas)
        $nikeSizes = [
            [
                'product_id' => 3, // Camiseta Nike
                'attribute_id' => 2, // Talla
                'propertie_id' => 7, // S
                'value_add' => null,
                'add_price' => 0,
                'stock' => 20,
            ],
            [
                'product_id' => 3,
                'attribute_id' => 2, // Talla
                'propertie_id' => 8, // M
                'value_add' => null,
                'add_price' => 0,
                'stock' => 30,
            ],
            [
                'product_id' => 3,
                'attribute_id' => 2, // Talla
                'propertie_id' => 9, // L
                'value_add' => null,
                'add_price' => 0,
                'stock' => 30,
            ],
            [
                'product_id' => 3,
                'attribute_id' => 2, // Talla
                'propertie_id' => 10, // XL
                'value_add' => null,
                'add_price' => 10, // Precio adicional por talla extra
                'stock' => 20,
            ],
        ];

        $nikeVariations = [];
        foreach ($nikeSizes as $sizeVariation) {
            $nikeVariations[] = ProductVariation::create($sizeVariation);
        }

        // Variaciones para la camiseta Nike (Colores para cada talla)
        $nikeColors = [
            [
                'product_id' => 3,
                'attribute_id' => 1, // Color
                'propertie_id' => 1, // Rojo
                'value_add' => null,
                'add_price' => 0,
                'stock' => 10,
                'product_variation_id' => $nikeVariations[1]->id, // Anidada bajo talla M
            ],
            [
                'product_id' => 3,
                'attribute_id' => 1, // Color
                'propertie_id' => 2, // Azul
                'value_add' => null,
                'add_price' => 0,
                'stock' => 10,
                'product_variation_id' => $nikeVariations[1]->id, // Anidada bajo talla M
            ],
            [
                'product_id' => 3,
                'attribute_id' => 1, // Color
                'propertie_id' => 4, // Negro
                'value_add' => null,
                'add_price' => 0,
                'stock' => 10,
                'product_variation_id' => $nikeVariations[1]->id, // Anidada bajo talla M
            ],
        ];

        foreach ($nikeColors as $colorVariation) {
            ProductVariation::create($colorVariation);
        }
    }
} 