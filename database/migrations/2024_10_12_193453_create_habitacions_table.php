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
        Schema::create('habitaciones', function (Blueprint $table) {
            $table->id();
            $table->integer('num_habitacion');
            $table->integer('num_piso');
            $table->enum('tipo_hab', ['Simple', 'Especial', 'Matrimonial', 'Familiar']);
            $table->integer('capacidad');
            $table->string('descripcion', 100);
            $table->string('foto', 255);
            $table->decimal('precio', 8, 2);
            $table->enum('estado', ['Disponible', 'Mantenimiento', 'Limpieza', 'Reservado']);
            $table->text('descripcion_completa');
            $table->timestamps();
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('habitaciones');
    }
};
