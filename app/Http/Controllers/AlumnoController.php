<?php

namespace App\Http\Controllers;

use App\Models\Alumno;
use Illuminate\Http\Request;

class AlumnoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Alumno::all();

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        try {
            $alumno = new Alumno;
            $alumno->nombre = $request->nombre;
            $alumno->apellido = $request->apellido;
            $alumno->telefono = $request->telefono;
            $alumno->dni = $request->dni;
            $alumno->save();

        } catch (\Throwable $th) {
            return $th->getMessage();
        }

        return 'usuario creado exitosamente';
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $alumnos = Alumno::find($id);

        return response()->json($alumnos);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Alumno $alumno)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {

        try {
            $alumno = Alumno::find($id);
            $alumno->nombre = $request->nombre;
            $alumno->apellido = $request->apellido;
            $alumno->telefono = $request->telefono;
            $alumno->dni = $request->dni;
            $alumno->save();

        } catch (\Throwable $th) {
            return $th->getMessage();
        }

        return 'actualizado exitosamente';
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $alumno = Alumno::find($id);
        $alumno->delete();

        return 'alumno Eliminado';
    }
}
