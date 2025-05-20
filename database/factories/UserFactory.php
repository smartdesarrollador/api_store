<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UserFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->firstName(),
            'surname' => fake()->lastName(),
            'phone' => fake()->numerify('9########'),
            'uniqd' => 'user_' . Str::random(6),
            'avatar' => null,
            'fb' => null,
            'address_city' => fake()->city(),
            'bio' => fake()->paragraph(),
            'sexo' => fake()->randomElement(['M', 'F']),
            'email' => fake()->unique()->safeEmail(),
            'type_user' => 2, // Por defecto, clientes
            'email_verified_at' => now(),
            'password' => Hash::make('password123'), // password
            'remember_token' => Str::random(10),
        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     */
    public function unverified(): static
    {
        return $this->state(fn (array $attributes) => [
            'email_verified_at' => null,
        ]);
    }

    /**
     * Indicate that the user is an administrator.
     */
    public function admin(): static
    {
        return $this->state(fn (array $attributes) => [
            'type_user' => 1,
        ]);
    }
}
