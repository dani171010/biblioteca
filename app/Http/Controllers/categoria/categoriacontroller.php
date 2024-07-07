<?php

namespace App\Http\Controllers\categoria;

use App\Http\Controllers\Controller;
use App\Models\categoria;
use App\Http\Requests\StorecategoriaRequest;
use App\Http\Requests\UpdatecategoriaRequest;

class categoriacontroller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categoria = categoria::all();

        return view('categoria.index',compact('categoria'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('categoria.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorecategoriaRequest $request)
    {
        categoria::create([
            'nombre' => $request->nombre,
        ]);

        return redirect()->route('categoria.index')->with('request','Categoria creada con exito');
    }

    /**
     * Display the specified resource.
     */
    public function show(categoria $categoria)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(categoria $categoria)
    {
        return view('categoria.edit',compact('categoria'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatecategoriaRequest $request, categoria $categoria)
    {
        $categoria->update([
            'nombre' => $request->nombre,
        ]);

        return redirect()->route('categoria.index')->with('request','Categoria actualizada correctamente');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(categoria $categoria)
    {
        $categoria->delete();
        return redirect()->route('categoria.index');
    }
}
