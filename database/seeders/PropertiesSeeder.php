<?php

namespace Database\Seeders;

use App\Models\Product\Propertie;
use Illuminate\Database\Seeder;

class PropertiesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Propiedades para el atributo Color (ID: 1)
        $colorProperties = [
            ['name' => 'Rojo', 'code' => '#FF0000'],
            ['name' => 'Azul', 'code' => '#0000FF'],
            ['name' => 'Verde', 'code' => '#00FF00'],
            ['name' => 'Negro', 'code' => '#000000'],
            ['name' => 'Blanco', 'code' => '#FFFFFF'],
        ];

        foreach ($colorProperties as $property) {
            Propertie::create([
                'attribute_id' => 1, // ID del atributo Color
                'name' => $property['name'],
                'code' => $property['code'],
            ]);
        }

        // Propiedades para el atributo Talla (ID: 2)
        $sizeProperties = [
            ['name' => 'XS', 'code' => null],
            ['name' => 'S', 'code' => null],
            ['name' => 'M', 'code' => null],
            ['name' => 'L', 'code' => null],
            ['name' => 'XL', 'code' => null],
        ];

        foreach ($sizeProperties as $property) {
            Propertie::create([
                'attribute_id' => 2, // ID del atributo Talla
                'name' => $property['name'],
                'code' => $property['code'],
            ]);
        }

        // Propiedades para el atributo Material (ID: 3)
        $materialProperties = [
            ['name' => 'Algodón', 'code' => null],
            ['name' => 'Poliéster', 'code' => null],
            ['name' => 'Cuero', 'code' => null],
            ['name' => 'Nylon', 'code' => null],
            ['name' => 'Metal', 'code' => null],
        ];

        foreach ($materialProperties as $property) {
            Propertie::create([
                'attribute_id' => 3, // ID del atributo Material
                'name' => $property['name'],
                'code' => $property['code'],
            ]);
        }
    }
} 