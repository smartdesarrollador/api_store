<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SalesAddressSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Obtenemos los IDs de las ventas existentes
        $sales = DB::table('sales')->get();
        
        foreach ($sales as $sale) {
            DB::table('sale_addres')->insert([
                [
                    'sale_id' => $sale->id,
                    'name' => 'Cliente Ejemplo',
                    'surname' => 'Apellido Cliente',
                    'company' => 'Empresa Ejemplo',
                    'country_region' => 'España',
                    'address' => 'Calle Ejemplo 123',
                    'street' => 'Calle Ejemplo',
                    'city' => 'Barcelona',
                    'postcode_zip' => '08001',
                    'phone' => '612345678',
                    'email' => 'cliente@ejemplo.com',
                    'created_at' => $sale->created_at,
                    'updated_at' => $sale->updated_at,
                ]
            ]);
        }
    }
} 