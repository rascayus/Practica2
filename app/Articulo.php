<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Articulo extends Model
{
    use SoftDeletes;
    protected $dates = ['deleted_at'];
    protected $fillable=[
        "Nombre_articulo",
        "Precio",
        "pais_origen",
        "observaciones",
        "seccion"
    ];

    public function cliente()
    {
        return $this->belongsTo('App\Cliente');
    }
    public function calificaciones()
    {
        return $this->morphMany("App\Calificacion","calificacion");
    }
}
