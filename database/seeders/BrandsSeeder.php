<?php

namespace Database\Seeders;

use App\Models\Product\Brand;
use Illuminate\Database\Seeder;

class BrandsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $brands = [
            [
                'name' => 'Samsung',
                'imagen' => 'brands/samsung.png',
                'state' => 1,
            ],
            [
                'name' => 'Apple',
                'imagen' => 'brands/apple.png',
                'state' => 1,
            ],
            [
                'name' => 'Sony',
                'imagen' => 'brands/sony.png',
                'state' => 1,
            ],
            [
                'name' => 'Xiaomi',
                'imagen' => 'brands/xiaomi.png',
                'state' => 1,
            ],
            [
                'name' => 'LG',
                'imagen' => 'brands/lg.png',
                'state' => 1,
            ],
            [
                'name' => 'Huawei',
                'imagen' => 'brands/huawei.png',
                'state' => 1,
            ],
            [
                'name' => 'Nike',
                'imagen' => 'brands/nike.png',
                'state' => 1,
            ],
            [
                'name' => 'Adidas',
                'imagen' => 'brands/adidas.png',
                'state' => 1,
            ],
            [
                'name' => 'Puma',
                'imagen' => 'brands/puma.png',
                'state' => 1,
            ],
            [
                'name' => 'Reebok',
                'imagen' => 'brands/reebok.png',
                'state' => 1,
            ],
        ];

        foreach ($brands as $brand) {
            Brand::create($brand);
        }
    }
} 