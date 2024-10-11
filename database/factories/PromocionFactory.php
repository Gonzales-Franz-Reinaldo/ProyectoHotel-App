<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Promocion>
 */
class PromocionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    
    
    public function definition(): array
    {
        return [
            'tipo_promocion' => $this->faker->randomElement([
                '7 Noches por el Precio de 5',
                'Fin de Semana Romántico',
                'Descuento Temporada Baja',
                'Oferta Aniversario'
            ]),
            'fecha_final' => $this->faker->dateTime(),
            'fecha_inicio' => $this->faker->dateTime(),
            'condicion_promo' => $this->faker->randomElement([
                'Reservar mínimo 2 noches',
                'Reservar mínimo 7 noches',
                'Disponible solo en temporada baja',
                'Reserva mínima de 1 noche'
            ]),
            'descuento' => $this->faker->numberBetween(20, 30),
            'descripcion' => $this->faker->sentence(),
            'descripcion_completa' => $this->faker->paragraph(),
            'imagen' => $this->faker->imageUrl(),
            'estado' => $this->faker->randomElement(['Activo', 'Inactivo']),
        ];
    }

}
