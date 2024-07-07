<?php

namespace App\Http\Controllers\prestamo;

use App\Http\Controllers\Controller;
use App\Models\prestamo;
use App\Http\Requests\StoreprestamoRequest;
use App\Http\Requests\UpdateprestamoRequest;

class prestamocontroller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $prestamo = prestamo::all();

        return view('prestamo.index',compact('prestamo'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('prestamo.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreprestamoRequest $request)
    {
        prestamo::create([
            'entrega_f'=>$request->entrega_f,
            'devolucion_f'=>$request->devolucion_f,
            'observacion'=>$request->observacion,
            'libro_id'=>$request->libro_id,
            'usuario_id'=>$request->usuario_id,
        ]);

        return redirect()->route('prestamo.index')->with('request','Prestamo creado con exito');
    }

    /**
     * Display the specified resource.
     */
    public function show(prestamo $prestamo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(prestamo $prestamo)
    {
        return view('prestamo.edit',compact('prestamo'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateprestamoRequest $request, prestamo $prestamo)
    {
        prestamo->update([
            'entrega_f'=>$request->entrega_f,
            'devolucion_f'=>$request->devolucion_f,
            'observacion'=>$request->observacion,
            'libro_id'=>$request->libro_id,
            'usuario_id'=>$request->usuario_id,
        ]);

        return redirect()->route('prestamo.index')->with('request','Prestamo editado con exito');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(prestamo $prestamo)
    {
        $prestamo->delete();
        return redirect()->route('prestamo.index');
    }
}
