<?php

namespace Database\Seeders;

use App\Models\Slider;
use Illuminate\Database\Seeder;

class SlidersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $sliders = [
            [
                'title' => 'Nuevos smartphones',
                'subtitle' => 'Descubre la última tecnología en smartphones de alta gama con descuentos increíbles',
                'label' => 'Nueva Colección',
                'type_slider' => 1, // principal
                'imagen' => 'sliders/slider_1.jpg', // Asumiendo que estas imágenes existirán en storage/app/public/sliders/
                'link' => '/productos/categoria/smartphones',
                'color' => '#e9f9ff',
                'price_original' => 1299.99,
                'price_campaing' => 999.99,
                'state' => 1,
            ],
            [
                'title' => 'Colección de Verano',
                'subtitle' => 'Las mejores prendas para esta temporada con descuentos de hasta 40%',
                'label' => 'Oferta Especial',
                'type_slider' => 1, // principal
                'imagen' => 'sliders/slider_2.jpg',
                'link' => '/productos/categoria/ropa',
                'color' => '#fff8e7',
                'price_original' => 299.99,
                'price_campaing' => 179.99,
                'state' => 1,
            ],
            [
                'title' => 'Equipamiento Deportivo',
                'subtitle' => 'Todo lo que necesitas para mantenerte en forma',
                'label' => 'Nueva Temporada',
                'type_slider' => 1, // principal
                'imagen' => 'sliders/slider_3.jpg',
                'link' => '/productos/categoria/deportes',
                'color' => '#e5fff2',
                'price_original' => 199.99,
                'price_campaing' => 149.99,
                'state' => 1,
            ],
            [
                'title' => 'Ofertas en Electrónica',
                'subtitle' => 'Los mejores gadgets con grandes descuentos',
                'label' => 'Hot Sale',
                'type_slider' => 2, // banners
                'imagen' => 'sliders/banner_1.jpg',
                'link' => '/ofertas/electronica',
                'color' => '#f5f5f5',
                'state' => 1,
            ],
            [
                'title' => 'Moda Exclusiva',
                'subtitle' => 'Prendas de diseñador con descuentos especiales',
                'label' => 'Exclusivo',
                'type_slider' => 2, // banners
                'imagen' => 'sliders/banner_2.jpg',
                'link' => '/ofertas/moda',
                'color' => '#f8f8f8',
                'state' => 1,
            ],
        ];

        foreach ($sliders as $slider) {
            Slider::create($slider);
        }
    }
} 