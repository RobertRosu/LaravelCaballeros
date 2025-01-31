<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCaballeroRequest;
use App\Http\Requests\UpdateCaballeroRequest;
use App\Models\Caballero;
use App\Models\Caballo;

class CaballeroController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $caballeros = Caballero::all();
        return view('caballero.index', compact('caballeros'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $caballos = Caballo::doesntHave('caballero')->get();
        return view('caballero.create', compact('caballos'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreCaballeroRequest $request)
    {
        $validated = $request->validated();
        Caballero::create($validated);
        return redirect()->route('caballero.index')->with('success', 'Se ha creado un nuevo caballero');
    }

    /**
     * Display the specified resource.
     */
    public function show(Caballero $caballero)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(int $id)
    {
        $c = Caballero::find($id);
        $caballos = Caballo::doesntHave('caballero')->get();
        $caballos[] = Caballo::find($c->id_caballo);
        return view('caballero.edit', compact('caballos', 'c'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCaballeroRequest $request, Caballero $caballero)
    {
        $validated = $request->validated();
        $caballero->update($validated);
        return redirect()->route('caballero.index')->with('success', "Se ha editado el caballero [$caballero->nombre]");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Caballero $caballero)
    {
        try{
            $caballero->delete();
            return redirect()->route('caballero.index')->with('success', 'El caballero se ha eliminado');
        }catch(\Exception $e){
            return redirect()->route('caballero.index')->with('error', $e);
        }
    }
}
