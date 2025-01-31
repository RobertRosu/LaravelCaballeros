<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreEscuderoRequest;
use App\Http\Requests\UpdateEscuderoRequest;
use App\Models\Escudero;
use App\Models\Caballero;

class EscuderoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $escuderos = Escudero::all();
        return view('escudero.index', compact('escuderos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $caballeros = Caballero::doesntHave('escuderos')->get();
        return view('escudero.create', compact('caballeros'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreEscuderoRequest $request)
    {
        $validated = $request->validated();
        Escudero::create($validated);
        return redirect()->route('escudero.index')->with('success', 'Se ha creado un nuevo escudero');
    }

    /**
     * Display the specified resource.
     */
    public function show(Escudero $escudero)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Escudero $escudero)
    {
        $caballeros = Caballero::doesntHave('escuderos')->get();
        $caballeros[] = Caballero::find($escudero->id_caballero);
        return view('escudero.edit', compact('caballeros', 'escudero'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateEscuderoRequest $request, Escudero $escudero)
    {
        $validated = $request->validated();
        $escudero->update($validated);
        return redirect()->route('escudero.index')->with('success', "Se ha editado el caballero [$escudero->nombre]");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Escudero $escudero)
    {
        try{
            $escudero->delete();
            return redirect()->route('escudero.index')->with('success', "El escudero [$escudero->nombre] se ha eliminado");
        }catch(\Exception $e){
            return redirect()->route('escudero.index')->with('error', $e);
        }
    }
}
