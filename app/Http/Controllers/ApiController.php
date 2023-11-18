<?php

namespace App\Http\Controllers;

use App\Models\Asistencia;
use App\Models\Matricula;

class ApiController extends Controller
{
    public function index()
    {

        $db1 = Matricula::all();
        $db2 = Asistencia::all();

        $datosCombinados = [
            'matricula' => $db1,
            'asistencia' => $db2];

        return response()->json($datosCombinados);

    }
}
