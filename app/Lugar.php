<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lugar extends Model
{
    protected $table = 'lugares';

    /**
     * Atributos asignables
     *
     * @var array
     */
    protected $fillable = [
        'id', 'busqueda', 'nombre', 'direccion', 'distancia', 'lat_origen', 'lng_origen', 'lat_destino', 'lng_destino'
    ];

    /**
     * Atributos ocultos.
     *
     * @var array
     */
    protected $hidden = [
        'created_at', 'updated_at'
    ];
}
