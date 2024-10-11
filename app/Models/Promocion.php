<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Promocion extends Model
{
    /** @use HasFactory<\Database\Factories\PromocionFactory> */
    use HasFactory;
    
    protected $table='promociones';

    protected $fillable = [
        'tipo_promocion',
        'fecha_final',
        'fecha_inicio',
        'condicion_promo',
        'descuento',
        'descripcion',
        'descripcion_completa',
        'imagen',
        'estado'
    ];

}
