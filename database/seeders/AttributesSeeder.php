<?php

namespace Database\Seeders;

use App\Models\Product\Attribute;
use Illuminate\Database\Seeder;

class AttributesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $attributes = [
            [
                'name' => 'Color',
                'type_attribute' => 1,
                'state' => 1,
            ],
            [
                'name' => 'Talla',
                'type_attribute' => 1,
                'state' => 1,
            ],
            [
                'name' => 'Material',
                'type_attribute' => 1,
                'state' => 1,
            ],
            [
                'name' => 'Capacidad',
                'type_attribute' => 1,
                'state' => 1,
            ],
            [
                'name' => 'Resolución',
                'type_attribute' => 1,
                'state' => 1,
            ],
        ];

        foreach ($attributes as $attribute) {
            Attribute::create($attribute);
        }
    }
} 