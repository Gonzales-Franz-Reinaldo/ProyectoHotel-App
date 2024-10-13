<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Promocion;
use App\Models\Habitacion;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Reserva>
 */
class ReservaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        //? Hacer todo el procedimiento para la reserva
        // id
        // nombre
        // apellido
        // ci
        // correo
        // telefono
        // nacionalidad
        // fecha_de_reserva
        // hora_reserva
        // fecha_ingreso
        // fecha_salida
        // numero_personas
        // estado
        // id_habitacion
        // id_promocion
        // numero_noches
        // fecha_confirm
        
        // Para las columnas de  id_habitacion y id_promocion debe elegir al azar de las tablas habitaciones y promociones

        $habitacion = Habitacion::all()->random();
        $promocion = Promocion::all()->random();

        return [
            'nombre' => $this->faker->firstName(),
            'apellido' => $this->faker->lastName(),
            'ci' => $this->faker->randomNumber(8),
            'correo' => $this->faker->email(),
            'telefono' => $this->faker->phoneNumber(),
            'nacionalidad' => $this->faker->country(),
            'fecha_de_reserva' => $this->faker->date(),
            'hora_reserva' => $this->faker->time(),
            'fecha_ingreso' => $this->faker->date(),
            'fecha_salida' => $this->faker->date(),
            'numero_personas' => $this->faker->numberBetween(1, 4),
            'estado' => $this->faker->randomElement(['Pendiente', 'Confirmado', 'Cancelado']),
            'id_habitacion' => $habitacion->id,
            'id_promocion' => $promocion->id,
            'numero_noches' => $this->faker->numberBetween(1, 7),
            'fecha_confirm' => $this->faker->dateTime(),
        ];
    }
}
