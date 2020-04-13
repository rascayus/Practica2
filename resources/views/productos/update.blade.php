@extends('layouts.plantilla')

@section('cabecera')
    
@endsection

@section('contenido')

<form action="post">

    <input type="text" name="nombreArticulo">
    <input type="submit" name="enviar" value="Enviar">
</form>
    
@endsection