<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        $this->call([
            // Primero los seeders principales
            UsersSeeder::class,
            BrandsSeeder::class,
            AttributesSeeder::class,
            PropertiesSeeder::class,
            CategoriesSeeder::class,
            
            // Después los seeders que dependen de los anteriores
            SlidersSeeder::class,
            ProductsSeeder::class,
            ProductSpecificationsSeeder::class,
            ProductVariationsSeeder::class,
            
            // Cupones y descuentos
            CuponesSeeder::class,
            DiscountsSeeder::class,
            
            // Relaciones de cupones y descuentos
            CuponeCategoriesSeeder::class,
            CuponeBrandsSeeder::class,
            CuponeProductsSeeder::class,
            DiscountCategoriesSeeder::class,
            DiscountBrandsSeeder::class,
            DiscountProductsSeeder::class,
            
            // Usuarios y direcciones
            UserAddressSeeder::class,
            
            // Carritos, reseñas y ventas
            CartsSeeder::class,
            SaleTempsSeeder::class,
            SaleSeeder::class,
            SalesAddressSeeder::class,
            SaleDetailsSeeder::class,
            ReviewsSeeder::class,
        ]);
    }
}
