<?php

namespace Database\Seeders;

use App\Models\Product\Categorie;
use Illuminate\Database\Seeder;

class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Categorías principales (type_categorie = 1)
        $mainCategories = [
            [
                'name' => 'Electrónica',
                'icon' => '<i class="fas fa-tv"></i>',
                'state' => 1,
                'position' => 1,
                'type_categorie' => 1, // departamento
            ],
            [
                'name' => 'Ropa',
                'icon' => '<i class="fas fa-tshirt"></i>',
                'state' => 1,
                'position' => 2,
                'type_categorie' => 1, // departamento
            ],
            [
                'name' => 'Hogar',
                'icon' => '<i class="fas fa-home"></i>',
                'state' => 1,
                'position' => 3,
                'type_categorie' => 1, // departamento
            ],
            [
                'name' => 'Deportes',
                'icon' => '<i class="fas fa-futbol"></i>',
                'state' => 1,
                'position' => 4,
                'type_categorie' => 1, // departamento
            ],
        ];

        // Creamos primero las categorías principales
        foreach ($mainCategories as $category) {
            Categorie::create($category);
        }

        // Subcategorías para Electrónica (type_categorie = 2)
        $electronicsSubcategories = [
            [
                'name' => 'Smartphones',
                'icon' => '<i class="fas fa-mobile-alt"></i>',
                'state' => 1,
                'categorie_second_id' => 1, // ID de Electrónica
                'position' => 1,
                'type_categorie' => 2, // categoría
            ],
            [
                'name' => 'Laptops',
                'icon' => '<i class="fas fa-laptop"></i>',
                'state' => 1,
                'categorie_second_id' => 1, // ID de Electrónica
                'position' => 2,
                'type_categorie' => 2, // categoría
            ],
            [
                'name' => 'Audio',
                'icon' => '<i class="fas fa-headphones"></i>',
                'state' => 1,
                'categorie_second_id' => 1, // ID de Electrónica
                'position' => 3,
                'type_categorie' => 2, // categoría
            ],
        ];

        foreach ($electronicsSubcategories as $category) {
            Categorie::create($category);
        }

        // Subcategorías para Ropa (type_categorie = 2)
        $clothingSubcategories = [
            [
                'name' => 'Camisetas',
                'icon' => '<i class="fas fa-tshirt"></i>',
                'state' => 1,
                'categorie_second_id' => 2, // ID de Ropa
                'position' => 1,
                'type_categorie' => 2, // categoría
            ],
            [
                'name' => 'Pantalones',
                'icon' => '<i class="fas fa-socks"></i>',
                'state' => 1,
                'categorie_second_id' => 2, // ID de Ropa
                'position' => 2,
                'type_categorie' => 2, // categoría
            ],
            [
                'name' => 'Calzado',
                'icon' => '<i class="fas fa-shoe-prints"></i>',
                'state' => 1,
                'categorie_second_id' => 2, // ID de Ropa
                'position' => 3,
                'type_categorie' => 2, // categoría
            ],
        ];

        foreach ($clothingSubcategories as $category) {
            Categorie::create($category);
        }

        // Subcategorías para Smartphones (type_categorie = 3)
        $smartphonesSubcategories = [
            [
                'name' => 'Gama alta',
                'state' => 1,
                'categorie_second_id' => 1, // ID de Electrónica
                'categorie_third_id' => 5, // ID de Smartphones
                'position' => 1,
                'type_categorie' => 3, // subcategoría
            ],
            [
                'name' => 'Gama media',
                'state' => 1,
                'categorie_second_id' => 1, // ID de Electrónica
                'categorie_third_id' => 5, // ID de Smartphones
                'position' => 2,
                'type_categorie' => 3, // subcategoría
            ],
            [
                'name' => 'Gama baja',
                'state' => 1,
                'categorie_second_id' => 1, // ID de Electrónica
                'categorie_third_id' => 5, // ID de Smartphones
                'position' => 3,
                'type_categorie' => 3, // subcategoría
            ],
        ];

        foreach ($smartphonesSubcategories as $category) {
            Categorie::create($category);
        }
    }
} 