<?php

namespace App\Http\Controllers\libro;

use App\Http\Controllers\Controller;
use App\Models\libro;
use App\Http\Requests\StorelibroRequest;
use App\Http\Requests\UpdatelibroRequest;
use App\Models\autor;
use App\Models\editorial;

class librocontroller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $libro = libro::all();

        return view('libro.index',compact('libro'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $autor = autor::all();
        $editorial = editorial::all();

        return view('libro.create', compact('autor','editorial'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorelibroRequest $request)
    {
        libro::create([
            'titulo'=>$request->titulo,
            'autor_id'=>$request->autor_id,
            'editorial_id'=>$request->editorial_id,
            'paginas'=>$request->paginas,
            'publicacion'=>$request->publicacion,
        ]);

        return redirect()->route('libro.index')->with('request','Libro creado con exito');
    }

    /**
     * Display the specified resource.
     */
    public function show(libro $libro)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(libro $libro)
    {
        $autor = autor::all();
        $editorial = editorial::all();

        return view('libro.edit',compact('libro','autor','editorial'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatelibroRequest $request, libro $libro)
    {
        $libro->update([
            'titulo'=>$request->titulo,
            'autor_id'=>$request->autor_id,
            'editorial_id'=>$request->editorial_id,
            'paginas'=>$request->paginas,
            'publicacion'=>$request->publicacion,
        ]);

        return redirect()->route('libro.index')->with('request','Libro editado con exito');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(libro $libro)
    {
        $libro->delete();
        return redirect()->route('libro.index');
    }
}
