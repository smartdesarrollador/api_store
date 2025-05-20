<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Crear usuario administrador
        User::create([
            'name' => 'Admin',
            'surname' => 'Principal',
            'phone' => '999888777',
            'uniqd' => 'admin123',
            'email' => 'admin@example.com',
            'type_user' => 1, // 1 es administrador
            'email_verified_at' => now(),
            'password' => Hash::make('password123'),
            'address_city' => 'Lima',
            'avatar' => 'profile_default.jpg',
        ]);

        // Crear usuarios clientes de prueba
        $clients = [
            [
                'name' => 'Juan',
                'surname' => 'Pérez',
                'phone' => '987654321',
                'email' => 'juan@example.com',
            ],
            [
                'name' => 'María',
                'surname' => 'Rodríguez',
                'phone' => '912345678',
                'email' => 'maria@example.com',
            ],
            [
                'name' => 'Carlos',
                'surname' => 'González',
                'phone' => '945678123',
                'email' => 'carlos@example.com',
            ],
        ];

        foreach ($clients as $client) {
            User::create([
                'name' => $client['name'],
                'surname' => $client['surname'],
                'phone' => $client['phone'],
                'uniqd' => strtolower($client['name']) . rand(100, 999),
                'email' => $client['email'],
                'type_user' => 2, // 2 es cliente
                'email_verified_at' => now(),
                'password' => Hash::make('cliente123'),
                'address_city' => 'Lima',
                'avatar' => 'default_avatar.jpg',
            ]);
        }

        // Crear más usuarios aleatorios si es necesario
        User::factory()->count(5)->create([
            'type_user' => 2, // todos clientes
        ]);
    }
} 