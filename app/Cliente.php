<?php

namespace App;


use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    protected $fillable=["nombre",
                        "apellidos"];
   public function articulo()
   {
      return $this->hasOne('App\Articulo'); //Uno a uno
   }
   public function articulos()
   {
      return $this->hasMany('App\Articulo'); //Uno a muchos
   }
   public function perfils()
   {
       return $this->belongsToMany("App\Perfil");
   }
   public function calificaciones()
   {
       return $this->morphMany("App\Calificacion","calificacion");
   }

}
