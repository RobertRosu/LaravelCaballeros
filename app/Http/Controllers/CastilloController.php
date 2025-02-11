<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCastilloRequest;
use App\Http\Requests\UpdateCastilloRequest;
use App\Models\Castillo;

class CastilloController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $castillos = Castillo::all();
        return view('castillo.index', compact('castillos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('castillo.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreCastilloRequest $request)
    {
        $validated = $request->validated();
        Castillo::create($validated);
        return redirect()->route('castillo.index')->with('success', 'Se ha creado un nuevo castillo');
    }

    /**
     * Display the specified resource.
     */
    public function show(Castillo $castillo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Castillo $castillo)
    {
        return view('castillo.edit', compact('castillo'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCastilloRequest $request, int $id)
    {
        $castillo = Castillo::find($id);
        $validated = $request->validated();
        $castillo->update($validated);

        return redirect()->route('castillo.index')->with('success', "Se ha editado el castillo [$castillo->nombre]");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Castillo $castillo)
    {
        try{
            $castillo->delete();
            return redirect()->route('castillo.index')->with('success', "El castillo [$castillo->nombre] se ha eliminado");
        }catch(\Exception $e){
            return redirect()->route('castillo.index')->with('error', $e);
        }
    }
}
