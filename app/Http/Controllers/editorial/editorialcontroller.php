<?php

namespace App\Http\Controllers\editorial;

use App\Http\Controllers\Controller;
use App\Models\editorial;
use App\Http\Requests\StoreeditorialRequest;
use App\Http\Requests\UpdateeditorialRequest;

class editorialcontroller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $editorial = editorial::all();

        return view('editorial.index',compact('editorial'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('editorial.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreeditorialRequest $request)
    {
        editorial::create([
            "name" => $request->name,
        ]);

        return redirect()->route('editorial.index')->with('request','editorial creado con exito');
    }

    /**
     * Display the specified resource.
     */
    public function show(editorial $editorial)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(editorial $editorial)
    {
        return view('editorial.edit',compact('editorial'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateeditorialRequest $request, editorial $editorial)
    {
        $editorial->update([
            "name" => $request->name,
        ]);

        return redirect()->route('editorial.index')->with('request', 'editorial Actualizado con exito');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(editorial $editorial)
    {
        $editorial->delete();
        return redirect()->route('editorial.index');
    }
}
