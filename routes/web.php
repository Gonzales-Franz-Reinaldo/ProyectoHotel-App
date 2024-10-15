<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ReservaController;
use App\Http\Controllers\PromocionController;

// Ruta principal del sistema
Route::get('/', function () {
    return view('principal');
});

// Ruta para la vista principal del administrador (panel de administración)
Route::get('/admin', function () {
    return view('Admin.administrador');
});

Route::get('/client', function () {
    return view('Client.inicio');
});

// Ruta para mostrar la vista de reservas generales
Route::get('/admin/reservas', function () {
    return view('Admin.reservas');
});


// Ruta para cargar las reservas recientes desde el controlador
Route::get('/admin/reservasRecientes', [ReservaController::class, 'index'])->name('Admin.reservasRecientes');

// Ruta despues de confirmar la reserva y rechazar
Route::post('/admin/reservas/confirmar/{id}', [ReservaController::class, 'confirmarReserva']);
Route::post('/admin/reservas/rechazar/{id}', [ReservaController::class, 'rechazarReserva']);

// Ruta para los filtros de las reservas
Route::get('/reservas-filtrar', [ReservaController::class, 'filtrarReservas'])->name('reservas.filtrar');

// Rutas para las promociones
Route::get('/client/promociones', [PromocionController::class, 'index'])->name('client.promociones');

// Ruta para los detalles de una promoción
Route::get('/client/descripciones/{id}', [PromocionController::class, 'show'])->name('Client.descripciones');

//Ruta para cargar las consultas
Route::get('/client/consultas', function () {
    return view('Client.consultas');
});


// Ruta para cargar las reservas recientes desde el controlador
Route::get('/admin/reservasPendiente', [ReservaController::class, 'index'])->name('Admin.reservasPendiente');


// Ruta para mostras el hostorial de reservas 
Route::get('/admin/historialReservas', [ReservaController::class, 'historialReserva'])->name('Admin.historialReservas');
