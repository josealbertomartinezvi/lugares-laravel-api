<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Lugar;

class LugarController extends Controller
{
    /**
     * Metodo para obtener todas las recetas y sus detalles
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $lugares = Lugar::all();

        return response()->json([
            'success' => true,
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

        $nuevoLugar = Lugar::create($request->all());
        if($nuevoLugar){
            return response()->json([
                'success' => true,
                'message' => 'Lugar registrada correctamente.',
                'codigo' => 200
            ], 200);
        }
    }
}
