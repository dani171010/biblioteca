<?php

namespace App\Http\Controllers\autor;

use App\Http\Controllers\Controller;
use App\Models\autor;
use App\Http\Requests\StoreautorRequest;
use App\Http\Requests\UpdateautorRequest;

class autorcontroller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $autor = autor::all();

        return view('autor.index',compact('autor'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreautorRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(autor $autor)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(autor $autor)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateautorRequest $request, autor $autor)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(autor $autor)
    {
        //
    }
}
