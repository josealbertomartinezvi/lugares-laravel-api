<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LugarController extends Controller
{
    /**
     * Metodo para obtener todas las recetas y sus detalles
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $lugares;

        return response()->json([
            'susses' => true,
            'data' => $lugares,
            'codigo' => 200
        ], 200);  
    }

        /**
     * Metodo para almacenar una nueva receta
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        return response()->json([
            'susses' => true,
            'message' => 'Lugar registrada correctamente.',
            'codigo' => 200
        ], 200);
    }
}
