<?php
use App\Articulo;
use App\Cliente;
use Illuminate\Support\Facades\Route;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/*Route::get('/', function () {
    return view('welcome');
});*/

Route::get('/','MiControlador@index');
Route::get('/crear','MiControlador@create');
Route::get('/articulos','MiControlador@store');
Route::get('/mostrar','MiControlador@show');
Route::get('/contacto','MiControlador@contactar');
Route::get('/galeria','MiControlador@galeria');
/* Route::get('/insertar',function(){
    DB::insert("INSERT INTO articulos (NOMBRE_ARTICULO, PRECIO, PAIS_ORIGEN,SECCION,OBSERVACIONES) VALUES (?,?,?,?,?)",
["JARRON",15.2,"JAPON","CERAMICA","GANGA"]);
});
Route::get('/leer',function(){
    $resultados = DB::select("SELECT * from articulos where ID=?",[2]);
    foreach ($resultados as $resultado)
    {
        return ($resultado->Nombre_articulo);
    }
});
Route::get('/actualiza',function(){
    DB::update("UPDATE articulos SET SECCION='DECORACION' WHERE ID=?",[2]);
});
Route::get('/borra',function(){
    DB::delete("DELETE from articulos WHERE ID=?",[2]);
});*/
Route::get('/leer',function(){

  /*  $resultados = Articulo::all();
    foreach ($resultados as $resultado)
    {
        return ('Nombre: '.$resultado->Nombre_articulo. ' Precio: '.$resultado->Precio. '<br>');
    }*/
   // $articulos = Articulo::where("pais_origen","Japon")->get();
    $articulos = Articulo::where("seccion","ceramica")->max("Precio");
    {
        return ($articulos);
    }
});
Route::get('/insertar',function(){

    $articulos = new Articulo;
    $articulos->Nombre_articulo ="Pantalones";
    $articulos->Precio = 60;
    $articulos->pais_origen ="España";
    $articulos->observaciones ="Lavados a la piedra";
    $articulos->seccion="Confección";
    $articulos->save();
  }
);
/*Route::get('/actualizar',function(){

    $articulos = Articulo::find(2);
    $articulos->Nombre_articulo ="Pantalones";
    $articulos->Precio = 90;
    $articulos->pais_origen ="España";
    $articulos->observaciones ="Lavados a la piedra";
    $articulos->seccion="Confección";
    $articulos->save();
  }
);*/
Route::get('/actualizar',function(){

  //  $articulos = Articulo::where('Seccion','confeccion')->update(["seccion"=>"ropa"]);
    $articulos = Articulo::where('Seccion','ropa')->where('pais_origen','España')->update(["Precio"=>75.20]);
    $articulos->save();
  }
);
Route::get('/borrar',function(){

   //   $articulos = Articulo::find(6);
   //   $articulos->delete();
        Articulo::where('Seccion','ropa')->where('pais_origen','España')->delete();

    }
  );
  Route::get('/insercionvarios',function(){

         Articulo::create(["Nombre_articulo"=>"Impresora","Precio"=>50,"pais_origen"=>"China","observaciones"=>"Libre de virus","seccion"=>"informatica"]);
 
     }
   );
   Route::get('/insercionvarios',function(){

    Articulo::create(["Nombre_articulo"=>"Impresora","Precio"=>50,"pais_origen"=>"China","observaciones"=>"Libre de virus","seccion"=>"informatica"]);

}
);
Route::get('/leerborrado',function(){

    $resultados = Articulo::withTrashed()//Borrados y no borrador
                ->where('id', 3)
                ->get();
      foreach ($resultados as $resultado)
      {
          return ('Nombre: '.$resultado->Nombre_articulo. ' Precio: '.$resultado->Precio. '<br>');
      }
     
  });
  Route::get('/leersinborrado',function(){

    $resultados = Articulo::where('id', 3)
                ->get();
      foreach ($resultados as $resultado)
      {
          return ('Nombre: '.$resultado->Nombre_articulo. ' Precio: '.$resultado->Precio. '<br>');
      }
     
  });
  Route::get('/borrardeltodo',function(){

    Articulo::where('id', 3)->restore();
      
     
  });Route::get('/restaurar',function(){

    Articulo::where('id', 3)->forceDelete();
      
     
  });
  Route::get('/cliente/{id}/articulo',function($id){

    return Cliente::find($id)->articulo;
      
     
  });
  Route::get('/restaurar',function(){

    Articulo::where('id', 3)->forceDelete();
      
     
  });
  Route::get('/articulo/{id}/cliente',function($id){

    return Articulo::find($id)->cliente->nombre;
      
     
  });
  Route::get('/articulos/{id}/cliente',function($id){

    $articulos = Cliente::find($id)->articulos->where("seccion","informatica");
    foreach ($articulos as $articulo) {
       echo $articulo->Nombre_articulo. "<br>";
    }
      
     
  });
  Route::get('/cliente/{id}/perfil',function($id){

    $cliente = Cliente::find($id);
    foreach ($cliente->perfils as $perfil) {
       echo $perfil->nombre. "<br>";
    }  
     
  });
  Route::get('/calificaciones/{id}',function($id){

    $cliente = Cliente::find($id);
    foreach ($cliente->calificaciones as $calificacion) {
       echo $cliente->nombre. " ".$calificacion->calificacion."<br>";
    }  
     
  });
  Route::get('/calificacionesArticulo/{id}',function($id){

    $articulo = Articulo::find($id);
    foreach ($articulo->calificaciones as $calificacion) {
       echo $articulo->Nombre_articulo. " ".$calificacion->calificacion."<br>";
    }  
     
  });
  