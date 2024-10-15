<?php

namespace App\Http\Controllers;

use App\Models\Reserva;
use Illuminate\Http\Request;

class ReservaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Las reservas solo se deben llamar o listar las reservas que tengan un estado de confirmado estado == "Pendiente"
        // $reservas = Reserva::all();
        $reservas = Reserva::where('estado', 'Pendiente')->get();

        return view('Admin.reservasRecientes', compact('reservas'));
    }

    public function buscarReservas(Request $request)
{
    // Obtiene las reservas pendientes
    $query = Reserva::where('estado', 'Pendiente');

    // Búsqueda general por nombre, apellido, etc.
    if ($request->busquedaGeneral) {
        $dato = $request->busquedaGeneral;
        $query->where(function ($q) use ($dato) {
            $q->where('nombre', 'like', "%$dato%")
                ->orWhere('apellido', 'like', "%$dato%")
                ->orWhere('ci', 'like', "%$dato%")
                ->orWhere('correo', 'like', "%$dato%")
                ->orWhere('telefono', 'like', "%$dato%")
                ->orWhere('nacionalidad', 'like', "%$dato%");
        });
    }

    // Filtrado por fecha de reserva
    if ($request->fechaReserva) {
        $query->whereDate('fecha_de_reserva', $request->fechaReserva);
    }

    // Filtrado por tipo de habitación
    if ($request->tipoHabitacion) {
        $query->whereHas('habitacion', function ($q) use ($request) {
            $q->where('tipo_hab', $request->tipoHabitacion);
        });
    }

    // Ordenar por diferentes tipos (fecha de reserva, número de personas, etc.)
    if ($request->ordenarTipo) {
        switch ($request->ordenarTipo) {
            case 'fecha_reserva':
                $query->orderBy('fecha_de_reserva', 'asc');
                break;
            case 'numero_personas':
                $query->orderBy('numero_personas', 'asc');
                break;
            case 'proxima_reserva':
                $query->orderBy('fecha_ingreso', 'asc');
                break;
            case 'fecha_salida':
                $query->orderBy('fecha_salida', 'asc');
                break;
        }
    }

    // Obtiene los resultados filtrados
    $reservas = $query->get();

    // Retorna la vista parcial con las reservas filtradas
    return view('Admin.reservasFiltradas', compact('reservas'))->render();
}

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Reserva $reserva)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Reserva $reserva)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Reserva $reserva)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Reserva $reserva)
    {
        //
    }

    /**
     * Confirmar la reserva
     */
    public function confirmarReserva($id){

        $reserva = Reserva::find($id);
        $reserva->estado = 'Confirmado';
        $reserva->save();

        return response()->json(['success' => true]);
    }

    /**
     * Cancelar la reserva
     */
    public function rechazarReserva($id){
        
        $reserva = Reserva::find($id);
        $reserva->estado = 'Cancelado';
        $reserva->save();

        return response()->json(['success' => true]);
    }
}
