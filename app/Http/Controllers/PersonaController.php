<?php

namespace App\Http\Controllers;

use App\Models\Persona;
use Illuminate\Http\Request;
use App\Http\Requests\PersonaRequest;

class PersonaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        //dd($request);
        $texto = trim($request->get('texto'));
        $registros = Persona::where('nombre', 'like', '%' . $texto . '%')
            ->orWhere('apellido', 'like', '%' . $texto . '%')
            ->orWhere('dni', 'like', '%' . $texto . '%')
            ->paginate(10);
        return view('persona.index', compact('registros', 'texto'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $persona = new Persona();
        return view('persona.action', ['persona' => new Persona()]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(PersonaRequest $request)
    {
        $registro = new Persona;
        $registro->nombre = $request->input('nombre');
        $registro->apellido = $request->input('apellido');
        $registro->dni = $request->input('dni');
        $registro->edad = $request->input('edad');
        $registro->save();

        return response()->json([
            'status' => 'success',
            'message' => 'Registro creado satisfactoriamente'
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Persona $persona)
    {
        return "Mostrar";
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $persona = Persona::findOrFail($id);
        return view('persona.action', compact('persona'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(PersonaRequest $request, $id)
    {
        $persona = Persona::findOrFail($id);
        $persona->nombre = $request->nombre;
        $persona->apellido = $request->apellido;
        $persona->dni = $request->dni;
        $persona->edad = $request->edad;
        $persona->save();

        return response()->json([
            'status' => 'success',
            'message' => 'Actualización de datos satisfactoria'
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $registro = Persona::findOrFail($id);
        $registro->delete();

        return response()->json([
            'status' => 'success',
            'message' => $registro->nombre . ' ' . $registro->apellido . ' Eliminado'
        ]);
    }
}
