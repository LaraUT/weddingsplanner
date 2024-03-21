<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Contacto>
 */
class ContactoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'nombre' => $this->faker->name,
            'correo_electronico' => $this->faker->unique()->safeEmail,
            'telefono' => $this->faker->phoneNumber,
            'empresa' => $this->faker->company,
            // 'created_at' y 'updated_at' se llenan automáticamente si usas Eloquent
        ];
    }
}
