<?php

namespace App\Http\Controllers;

use App\Models\Curso;
use Illuminate\Http\Request;

class CursoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $cursos = Curso::with('docentes')->get();

        return response()->json(['cursos' => $cursos]);

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
            $curso = new Curso;
            $curso->nombre_curso = $request->nombre_curso;
            $curso->docente_id = $request->docente_id;
            $curso->save();

        } catch (\Throwable $th) {
            return $th->getMessage();
        }

            return 'curso creado exitosamente';
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        return Curso::find($id);

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Curso $curso)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        try {
            $curso = Curso::find($id);
            $curso->nombre_curso = $request->nombre_curso;
            $curso->docente_id = $request->docente_id;
            $curso->save();

        } catch (\Throwable $th) {
            return $th->getMessage();
        }

            return 'curso actualizado exitosamente';
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $curso = Curso::find($id);
        $curso->delete();

        return 'alumno Eliminado';
    }
}
