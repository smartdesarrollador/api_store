<?php

namespace Database\Seeders;

use App\Models\Product\Product;
use App\Models\Product\ProductImage;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Producto 1: Smartphone Samsung Galaxy
        $product1 = Product::create([
            'title' => 'Smartphone Samsung Galaxy S23',
            'slug' => Str::slug('Smartphone Samsung Galaxy S23'),
            'sku' => 'SM-S23-128GB',
            'price_pen' => 3499.99,
            'price_usd' => 950.00,
            'description' => '<p>El <strong>Samsung Galaxy S23</strong> llega con una pantalla Dynamic AMOLED 2X de 6.1 pulgadas con resolución FHD+ y tasa de refresco adaptativa de 120 Hz. Está potenciado por el procesador Snapdragon 8 Gen 2, acompañado de 8 GB de RAM y opciones de 128 GB o 256 GB de almacenamiento interno.</p><p>Cuenta con una triple cámara trasera: principal de 50 MP con OIS, ultra gran angular de 12 MP y teleobjetivo de 10 MP con zoom óptico 3x. La cámara selfie es de 12 MP. La batería es de 3900 mAh con carga rápida de 25W e inalámbrica de 15W.</p>',
            'resumen' => 'El Samsung Galaxy S23 ofrece un rendimiento excepcional con el Snapdragon 8 Gen 2, una espectacular cámara de 50 MP y una pantalla Dynamic AMOLED 2X de 120 Hz.',
            'imagen' => 'products/samsung_s23.jpg', // Imagen principal
            'state' => 2, // publicado
            'tags' => json_encode(['smartphone', 'samsung', 'galaxy', 'android']),
            'brand_id' => 1, // Samsung
            'categorie_first_id' => 1, // Electrónica
            'categorie_second_id' => 5, // Smartphones
            'categorie_third_id' => 11, // Gama alta
            'stock' => 50,
        ]);

        // Imágenes adicionales para producto 1
        $images1 = [
            'products/samsung_s23_2.jpg',
            'products/samsung_s23_3.jpg',
            'products/samsung_s23_4.jpg',
        ];

        foreach ($images1 as $imagen) {
            ProductImage::create([
                'product_id' => $product1->id,
                'imagen' => $imagen,
            ]);
        }

        // Producto 2: iPhone 14
        $product2 = Product::create([
            'title' => 'Apple iPhone 14 Pro 128GB',
            'slug' => Str::slug('Apple iPhone 14 Pro 128GB'),
            'sku' => 'APL-IP14P-128',
            'price_pen' => 4999.99,
            'price_usd' => 1350.00,
            'description' => '<p>El <strong>iPhone 14 Pro</strong> presenta la revolucionaria Dynamic Island, una forma innovadora que te permite interactuar con tu iPhone. Cuenta con una pantalla Super Retina XDR always-on de 6.1 pulgadas con ProMotion.</p><p>Su sistema de cámaras Pro incluye un gran angular de 48 MP, ultra gran angular y teleobjetivo, además de una cámara frontal TrueDepth con enfoque automático. Graba vídeo en 4K a 24, 25, 30 o 60 f/s.</p><p>Con el chip A16 Bionic, el iPhone 14 Pro ofrece un rendimiento ultrarrápido y eficiencia energética, permitiéndote disfrutar de mayor autonomía durante todo el día.</p>',
            'resumen' => 'El iPhone 14 Pro revoluciona la experiencia con la Dynamic Island, una cámara de 48 MP y el potente chip A16 Bionic para un rendimiento excepcional.',
            'imagen' => 'products/iphone14_pro.jpg',
            'state' => 2, // publicado
            'tags' => json_encode(['smartphone', 'apple', 'iphone', 'iOS']),
            'brand_id' => 2, // Apple
            'categorie_first_id' => 1, // Electrónica
            'categorie_second_id' => 5, // Smartphones
            'categorie_third_id' => 11, // Gama alta
            'stock' => 35,
        ]);

        // Imágenes adicionales para producto 2
        $images2 = [
            'products/iphone14_pro_2.jpg',
            'products/iphone14_pro_3.jpg',
            'products/iphone14_pro_4.jpg',
        ];

        foreach ($images2 as $imagen) {
            ProductImage::create([
                'product_id' => $product2->id,
                'imagen' => $imagen,
            ]);
        }

        // Producto 3: Camiseta Nike
        $product3 = Product::create([
            'title' => 'Camiseta Deportiva Nike Dri-FIT',
            'slug' => Str::slug('Camiseta Deportiva Nike Dri-FIT'),
            'sku' => 'NK-DRF-M001',
            'price_pen' => 129.99,
            'price_usd' => 35.00,
            'description' => '<p>La <strong>camiseta Nike Dri-FIT</strong> es perfecta para tus entrenamientos diarios. Fabricada con la tecnología Dri-FIT que ayuda a mantenerte seco y cómodo al eliminar el sudor de la piel hacia la superficie del tejido, donde se evapora rápidamente.</p><p>Su diseño ergonómico y sus costuras planas minimizan el rozamiento para un mayor confort durante el ejercicio. El tejido ligero y transpirable proporciona ventilación adicional cuando la intensidad aumenta.</p><p>Esta prenda esencial para tu equipamiento deportivo cuenta con un ajuste estándar que proporciona una sensación relajada y cómoda.</p>',
            'resumen' => 'Camiseta deportiva Nike con tecnología Dri-FIT que elimina el sudor para mantenerte seco y cómodo durante tus entrenamientos.',
            'imagen' => 'products/nike_drifit.jpg',
            'state' => 2, // publicado
            'tags' => json_encode(['ropa', 'deportiva', 'nike', 'camiseta']),
            'brand_id' => 7, // Nike
            'categorie_first_id' => 2, // Ropa
            'categorie_second_id' => 8, // Camisetas
            'stock' => 100,
        ]);

        // Imágenes adicionales para producto 3
        $images3 = [
            'products/nike_drifit_2.jpg',
            'products/nike_drifit_3.jpg',
        ];

        foreach ($images3 as $imagen) {
            ProductImage::create([
                'product_id' => $product3->id,
                'imagen' => $imagen,
            ]);
        }
    }
} 