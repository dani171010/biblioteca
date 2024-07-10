<?php

namespace App\Http\Controllers\prestamo;

use App\Http\Controllers\Controller;
use App\Models\prestamo;
use App\Http\Requests\StoreprestamoRequest;
use App\Http\Requests\UpdateprestamoRequest;
use App\Models\libro;
use App\Models\usuario;
use Illuminate\Support\Facades\DB;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Support\Facades\Storage;


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
        $usuario = usuario::all();
        $libros = libro::all();
        return view('prestamo.create',compact('usuario','libros'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreprestamoRequest $request)
    {
        DB::beginTransaction();

        try{

        $prestamo = prestamo::create([
            'entrega_f'=>$request->entrega_f,
            'devolucion_f'=>$request->devolucion_f,
            'observacion'=>$request->observacion,
            'usuario_id'=>$request->usuario_id,

        ]);

        $prestamo->libros()->attach($request->libro_ids);

        $libros = libro::whereIn('id', $request->libro_ids)->get();


        //generar pdf
        $pdf = Pdf::loadView('prestamo.pdf',compact('prestamo','libros'))->setPaper('folio');
        $pdfPath = 'prestamo/prestamo-' . $prestamo->id . '.pdf';
        $pdf->save(storage_path('app/public/' . $pdfPath));

        DB::commit();
    }catch (\Exception $e) {
        DB::rollBack();
        return redirect()->route('prestamo.index')->with('error', 'Error al crear el prestamo: ' . $e->getMessage());
    }
        return redirect()->route('prestamo.index')->with('request','Prestamo creado con exito');
    }

    /**
     * Display the specified resource.
     */
    public function show(prestamo $prestamo)
    {
        $pdfPath = 'prestamo/prestamo-' . $prestamo->id . '.pdf';
        return response()->download(storage_path('app/public/' . $pdfPath));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(prestamo $prestamo)
    {
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateprestamoRequest $request, prestamo $prestamo)
    {
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(prestamo $prestamo)
    {
        DB::beginTransaction();
        try {
            // Eliminar el archivo PDF si existe
            $pdfPath = 'prestamo/prestamo-' . $prestamo->id . '.pdf';
            if (Storage::exists('public/' . $pdfPath)) {
                Storage::delete('public/' . $pdfPath);
            }

            // Eliminar el registro en la base de datos
            $prestamo->delete();

            DB::commit();
            return redirect()->route('prestamo.index')->with('success', 'Prestamo eliminado con éxito.');
        } catch (\Exception $e) {
            DB::rollBack();
            return redirect()->route('prestamo.index')->with('error', 'Error al eliminar el Prestamo: ' . $e->getMessage());
        }
    }
}
