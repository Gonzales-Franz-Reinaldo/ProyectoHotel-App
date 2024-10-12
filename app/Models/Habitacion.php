<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Habitacion extends Model
{
    /** @use HasFactory<\Database\Factories\HabitacionFactory> */
    use HasFactory;

    protected $table='habitaciones';

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
    
    protected $fillable = [
        'num_habitacion',
        'num_piso',
        'tipo_hab',
        'capacidad',
        'descripcion',
        'foto',
        'precio',
        'estado',
        'descripcion_completa'
    ];

}
