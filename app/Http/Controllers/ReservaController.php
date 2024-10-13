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
