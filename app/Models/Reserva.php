<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reserva extends Model
{
    /** @use HasFactory<\Database\Factories\ReservaFactory> */
    use HasFactory;

    protected $table = 'reservas';

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

    protected $fillable = [
        'nombre',
        'apellido',
        'ci',
        'correo',
        'telefono',
        'nacionalidad',
        'fecha_de_reserva',
        'hora_reserva',
        'fecha_ingreso',
        'fecha_salida',
        'numero_personas',
        'estado',
        'id_habitacion',
        'id_promocion',
        'numero_noches',
        'fecha_confirm'
    ];

    // Para refereciar con la tabla 
    public function habitacion()
    {
        return $this->belongsTo(Habitacion::class, 'id_habitacion');
    }

    public function promocion()
    {
        return $this->belongsTo(Promocion::class, 'id_promocion');
    }
}
