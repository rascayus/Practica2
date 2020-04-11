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
/*Route::get('/sobrenosotros', function () {
    return 'Esta es la página que habla sobre nosotros';
});
Route::get('/contacto', function () {
    return 'Aqui podrás contactar';
});
Route::get('/foro', function () {
    return 'Aqui está el foro';
});
Route::get('/post/{id}/{nombre}', function ($id,$nombre) {
    return 'ESte es el post nº '.$id.' creado por '.$nombre;
})->where('nombre','[a-z]+');*/

//Route::get('/inicio','EjemploController@inicio');
//Route::get('/inicio/{id}','Ejemplo3Controller@index');
//Route::get('/inicio/{id}','Ejemplo3Controller@index');
/*Route::get('/', 'PaginasController@inicio');
Route::get('/inicio', 'PaginasController@inicio');
Route::get('/quienesSomos', 'PaginasController@quienesSomos');
Route::get('/dondeEstamos', 'PaginasController@dondeEstamos');
Route::get('/foro', 'PaginasController@foro');
*/
Route::resource('posts','Ejemplo3Controller');
