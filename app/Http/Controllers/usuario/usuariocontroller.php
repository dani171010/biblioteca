<?php

namespace App\Http\Controllers\usuario;

use App\Http\Controllers\Controller;
use App\Models\usuario;
use App\Http\Requests\StoreusuarioRequest;
use App\Http\Requests\UpdateusuarioRequest;

class usuariocontroller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $usuario = usuario::all();

        return view('usuario.index',compact('usuario'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('usuario.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreusuarioRequest $request)
    {
        usuario::create([
            'nombre' => $request->nombre,
            'apellido' => $request->apellido,
            'documento_t' => $request->documento_t,
            'documento' => $request->documento,
            'email' => $request->email,
            'telefono' => $request->telefono,
        ]);

        return redirect()->route('usuario.index')->with('request','usuario creado con exito');
    }

    /**
     * Display the specified resource.
     */
    public function show(usuario $usuario)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(usuario $usuario)
    {
        return view('usuario.edit',compact('usuario'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateusuarioRequest $request, usuario $usuario)
    {
        $usuario->update([
            'nombre' => $request->nombre,
            'apellido' => $request->apellido,
            'documento_t' => $request->documento_t,
            'documento' => $request->documento,
            'email' => $request->email,
            'telefono' => $request->telefono,
        ]);

        return redirect()->route('usuario.index')->with('request','usuario Actualizado con exito');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(usuario $usuario)
    {

        $usuario->delete();
        return redirect()->route('usuario.index');
    }
}
