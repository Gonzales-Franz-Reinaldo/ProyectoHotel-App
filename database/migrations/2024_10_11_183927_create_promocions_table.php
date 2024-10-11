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
        Schema::create('promociones', function (Blueprint $table) {
            $table->id(); // auto_increment y primary key
            $table->string('tipo_promocion', 100);
            $table->dateTime('fecha_final');
            $table->dateTime('fecha_inicio');
            $table->string('condicion_promo', 100);
            $table->integer('descuento'); // Sin auto_increment
            $table->string('descripcion', 100);
            $table->string('descripcion_completa', 500);
            $table->string('imagen', 255);
            $table->enum('estado', ['Activo', 'Inactivo']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('promociones');
    }
};
