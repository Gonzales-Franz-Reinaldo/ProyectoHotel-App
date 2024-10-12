<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Habitacion>
 */
class HabitacionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {

        // Para la habitacion
        // id_habitacion
        // num_habitacion
        // num_piso
        // tipo_hab
        // capacidad
        // descripcion
        // foto
        // precio
        // estado
        // descripcion_completa
        return [
            'num_habitacion' => $this->faker->numberBetween(100, 300),
            'num_piso' => $this->faker->numberBetween(1, 10),
            'tipo_hab' => $this->faker->randomElement(['Simple', 'Especial', 'Matrimonial', 'Familiar']),
            'capacidad' => $this->faker->numberBetween(1, 4),
            'descripcion' => $this->faker->sentence(),
            'foto' => $this->faker->imageUrl(),
            'precio' => $this->faker->numberBetween(50, 100),
            'estado' => $this->faker->randomElement(['Disponible', 'Mantenimiento', 'Limpieza', 'Reservado']),
            'descripcion_completa' => $this->faker->paragraph(),
        ];
    }
}
