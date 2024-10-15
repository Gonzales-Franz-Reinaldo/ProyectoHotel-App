<?php

namespace App\Http\Controllers;

use App\Models\Promocion;
use Illuminate\Http\Request;

class PromocionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $promociones = Promocion::all(); // Obtener todas las promociones
        return view('client/promociones', compact('promociones')); // Pasar a la vista
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
    // Mostrar los detalles de una promoción
    public function show($id)
    {
        $promocion = Promocion::find($id); // Buscar la promoción por su ID
        if (!$promocion) {
            return redirect()->route('client.promociones')->with('error', 'Promoción no encontrada.');
        }
        return view('Client.descripciones', compact('promocion')); // Vista de detalles
    }
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Promocion $promocion)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Promocion $promocion)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Promocion $promocion)
    {
        //
    }
}
