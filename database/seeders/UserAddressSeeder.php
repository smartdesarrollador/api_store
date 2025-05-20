<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserAddressSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Direcciones para los clientes
        DB::table('user_addres')->insert([
            [
                'user_id' => 2, // Cliente normal
                'name' => 'Juan',
                'surname' => 'Gómez',
                'country_region' => 'España',
                'city' => 'Madrid',
                'address' => 'Calle Principal 123, Piso 4B',
                'street' => 'Calle Principal',
                'postcode_zip' => '28001',
                'phone' => '612345678',
                'email' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_id' => 2, // Cliente normal - dirección secundaria
                'name' => 'Juan',
                'surname' => 'Gómez',
                'country_region' => 'España',
                'city' => 'Madrid',
                'address' => 'Calle Secundaria 45, Bajo',
                'street' => 'Calle Secundaria',
                'postcode_zip' => '28002',
                'phone' => '612345678',
                'email' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_id' => 3, // Otro cliente
                'name' => 'María',
                'surname' => 'López',
                'country_region' => 'España',
                'city' => 'Barcelona',
                'address' => 'Avenida Diagonal 500, 3-2',
                'street' => 'Avenida Diagonal',
                'postcode_zip' => '08001',
                'phone' => '698765432',
                'email' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ]);
    }
} 