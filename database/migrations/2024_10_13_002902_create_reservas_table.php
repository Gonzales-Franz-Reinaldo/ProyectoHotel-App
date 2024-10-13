<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
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
        
        Schema::create('reservas', function (Blueprint $table) {
            $table->id();
            $table->string('nombre', 100);
            $table->string('apellido', 100);
            $table->string('ci', 100);
            $table->string('correo', 100);
            $table->string('telefono', 100);
            $table->string('nacionalidad', 100);
            $table->date('fecha_de_reserva');
            $table->time('hora_reserva');
            $table->date('fecha_ingreso');
            $table->date('fecha_salida');
            $table->integer('numero_personas');
            $table->enum('estado', ['Pendiente', 'Confirmado', 'Cancelado']);
            $table->foreignId('id_habitacion')->constrained('habitaciones');
            $table->foreignId('id_promocion')->constrained('promociones');
            $table->integer('numero_noches');
            $table->dateTime('fecha_confirm')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reservas');
    }
};
