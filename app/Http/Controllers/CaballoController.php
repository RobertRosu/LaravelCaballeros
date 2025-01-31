<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCaballoRequest;
use App\Http\Requests\UpdateCaballoRequest;
use App\Models\Caballo;

class CaballoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $caballos = Caballo::all();
        return view('caballo.index', compact('caballos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('caballo.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreCaballoRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Caballo $caballo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Caballo $caballo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCaballoRequest $request, Caballo $caballo)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Caballo $caballo)
    {
        //
    }
}
