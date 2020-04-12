<?php

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
Route::get('/insertar',function(){
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
});
